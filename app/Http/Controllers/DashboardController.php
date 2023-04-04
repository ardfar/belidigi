<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\GeneralPurchaseInfo;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use App\Mail\OpenMSGMailer;
use Spatie\Browsershot\Browsershot;
use Illuminate\Support\Facades\File;
use App\Mail\InvoiceMailer;
use App\Models\JasaSosmed;
use App\Models\OpenMSG;
use App\Models\User;

class DashboardController extends Controller
{
    // Djava API 
    public $api_url = 'https://djavapanel.com/api/';
    public $api_id = '24834';
    public $api_key = 'c5923d-3e3fec-f4b1cb-135d8e-f9dfd7';

    // Create a connection to API
    function connect($end_point, $post)
    {
        $_post = array();
        if (is_array($post)) {
            foreach ($post as $name => $value) {
                $_post[] = $name . '=' . urlencode($value);
            }
        }
        $ch = curl_init($end_point);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        if (is_array($post)) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, join('&', $_post));
        }
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');
        $result = curl_exec($ch);
        if (curl_errno($ch) != 0 && empty($result)) {
            $result = false;
        }
        curl_close($ch);
        return $result;
    }

    // Get the profile (BELI JASA SOSMED)
    public function profile()
    {
        return json_decode($this->connect($this->api_url . 'profile', array('api_id' => $this->api_id, 'api_key' => $this->api_key)), true);
    }

    // Get the status of order (BELI JASA SOSMED)
    public function status($order_id)
    {
        return json_decode($this->connect($this->api_url . 'status', array('api_id' => $this->api_id, 'api_key' => $this->api_key, 'id' => $order_id)), true);
    }

    // Create a new order (BELI JASA SOSMED)
    public function order($data)
    {
        return json_decode($this->connect($this->api_url . 'order', array_merge(array('api_id' => $this->api_id, 'api_key' => $this->api_key), $data)), true);
    }

    // Take general data 
    public function generalGrabber($id)
    {
        return GeneralPurchaseInfo::where('idTransaksi', $id)->first();
    }

    // Return the dashboard page 
    public function index()
    {
        // Initialize the networth variable
        $netWorthMonthly = 0;
        // create an array of all kind of transaction
        $kindTrx = array('transfer_banks', 'bayar_virtuals', 'beli_pulsas', 'beli_kuotas', 'jasa_sosmeds', 'lisensi_digitals', 'topup_ewallets');
        // Loop through the array 
        foreach ($kindTrx as $kind) {
            // Give Transfer bank a special treatment 
            if ($kind == 'transfer_banks') {
                $netWorthMonthly = $netWorthMonthly + DB::table($kind)->where('statusProses', 'SUCCESS')->sum('kodeUnik'); // Sums the kodeUnik
                $netWorthMonthly = $netWorthMonthly + DB::table($kind)->where('statusProses', 'SUCCESS')->sum('biayaAdmin'); // Sums the biayaAdmin
            } else {
                $netWorthMonthly = $netWorthMonthly + DB::table($kind)->where('statusProses', 'SUCCESS')->sum('kodeUnik'); // Sums the kodeUnik
            }
        }
        // Pack the data to be sent to front 
        $data = [
            'generalPurchaseInfo' => GeneralPurchaseInfo::orderByDesc('created_at')->paginate(5),
            'openMessage' => OpenMSG::where("status", "not", "IGNORED")->where("status", "not", "REPLIED")->orderByDesc('created_at')->get(),
            'refundCount' => GeneralPurchaseInfo::whereDate('created_at', Carbon::today())->where('jenisTransaksi', 'refund')->count(),
            'userCount' => User::all()->count(),
            'todayTransactionCount' => GeneralPurchaseInfo::whereDate('created_at', Carbon::today())->where('status', 'SUCCESS')->count(),
            'netWorthMonthly' => $netWorthMonthly,
        ];
        // return the page 
        return view('dashboard.home', $data);
    }

    // return the page @dibuat 
    public function created()
    {
        $data = [
            'generalPurchaseInfo' => GeneralPurchaseInfo::where([['sudahBayar', 0], ['status', 'WAITING']])->orderByDesc('created_at')->paginate(15),
        ];
        return view('dashboard.created', $data);
    }

    // Filter the result of created transaction
    public function createdSearch(Request $request)
    {
        // Pack the data
        $data = [
            'generalPurchaseInfo' => '',
            'queryTarget' => $request->searchQuery,
            'categoryTarget' => $request->filterKategori,
            'status' => 'WAITING'
        ];

        // Filter the transaction data 
        if ($request->filterKategori == '') {
            $data['categoryTarget'] = 'null';
            if ($request->searchQuery != '') {
                $data['generalPurchaseInfo'] =
                    GeneralPurchaseInfo::where([
                        ['status', $data['status']],
                        ['idTransaksi', $request->searchQuery]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['email', $request->searchQuery]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['hp', $request->searchQuery]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['totalBayar', $request->searchQuery]
                    ])->orderByDesc('created_at')->paginate(15);
            }
        } else {
            if ($request->searchQuery != '') {
                $data['generalPurchaseInfo'] = GeneralPurchaseInfo::where([
                        ['status', $data['status']],
                        ['idTransaksi', $request->searchQuery],
                        ['jenisTransaksi', $request->filterKategori]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['email', $request->searchQuery],
                        ['jenisTransaksi', $request->filterKategori]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['hp', $request->searchQuery],
                        ['jenisTransaksi', $request->filterKategori]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['totalBayar', $request->searchQuery],
                        ['jenisTransaksi', $request->filterKategori]
                    ])->orderByDesc('created_at')->paginate(15);
            } else {
                $data['generalPurchaseInfo'] = GeneralPurchaseInfo::where([
                        ['status', $data['status']],
                        ['jenisTransaksi', $request->filterKategori]
                    ])->orderByDesc('created_at')->paginate(15);
            }
        }
        // Return the page 
        return view('dashboard.created', $data);
    }
    
    // Get detail of transaction 
    public function createdDetail($jenisTransaksi, $idTransaksi)
    {
        $recentTrx = DB::table(str_replace('-', '_', $jenisTransaksi) . 's')->where('idTransaksi', $idTransaksi)->first();
        return view('dashboard.detail', compact('recentTrx'));
    }

    // Return the page @verifikasi
    public function verifyPage()
    {
        // Pack data to the front 
        $data = [
            'generalPurchaseInfo' => GeneralPurchaseInfo::where([['sudahBayar', 0], ['status', 'VERIFY']])->orderByDesc('created_at')->paginate(15),
        ];
        // return the page 
        return view('dashboard.verify', $data);
    }

    // search the data which under verify process 
    public function verifySearch(Request $request)
    {
        // pack the data 
        $data = [
            'generalPurchaseInfo' => '',
            'queryTarget' => $request->searchQuery,
            'categoryTarget' => $request->filterKategori,
            'status' => 'VERIFY'
        ];
        // Filter the transaction data 
        if ($request->filterKategori == '') {
            $data['categoryTarget'] = 'null';
            if ($request->searchQuery != '') {
                $data['generalPurchaseInfo'] = GeneralPurchaseInfo::where([
                        ['status', $data['status']],
                        ['idTransaksi', $request->searchQuery]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['email', $request->searchQuery]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['hp', $request->searchQuery]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['totalBayar', $request->searchQuery]
                    ])->orderByDesc('created_at')->paginate(15);
            }
        } else {
            if ($request->searchQuery != '') {
                $data['generalPurchaseInfo'] = GeneralPurchaseInfo::where([
                        ['status', $data['status']],
                        ['idTransaksi', $request->searchQuery],
                        ['jenisTransaksi', $request->filterKategori]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['email', $request->searchQuery],
                        ['jenisTransaksi', $request->filterKategori]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['hp', $request->searchQuery],
                        ['jenisTransaksi', $request->filterKategori]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['totalBayar', $request->searchQuery],
                        ['jenisTransaksi', $request->filterKategori]
                    ])->orderByDesc('created_at')->paginate(15);
            } else {
                $data['generalPurchaseInfo'] = GeneralPurchaseInfo::where([
                        ['status', $data['status']],
                        ['jenisTransaksi', $request->filterKategori]
                    ])->orderByDesc('created_at')->paginate(15);
            }
        }
        // return the verify page 
        return view('dashboard.verify', $data);
    }

    // Get the detail of transaction 
    public function verifyDetail($jenisTransaksi, $idTransaksi)
    {
        $recentTrx = DB::table(str_replace('-', '_', $jenisTransaksi) . 's')->where('idTransaksi', $idTransaksi)->first();
        return view('dashboard.detail', compact('recentTrx'));
    }

    // Change transaction status to ONPROCESS
    public function verifyConfirm(Request $request)
    {
        // Get the origin URL 
        $originUrl = $_SERVER['HTTP_REFERER'];
        // Get general data 
        $temp = $this->generalGrabber($request->idTransaksi);
        // Check if the status VERIFY 
        if ($temp->status == 'VERIFY') {
            // update the status (DETAIL DATA)
            DB::table(str_replace('-', '_', $request->jenisTransaksi) . 's')->where('idTransaksi', $request->idTransaksi)->update(['sudahBayar' => 1, 'statusProses' => 'PROCESS']);
            // update the status (GENERAL DATA)
            GeneralPurchaseInfo::where('idTransaksi', $request->idTransaksi)->update(['sudahBayar' => 1, 'status' => 'PROCESS']);
            // Mail the user 
            Mail::to($temp->email)->send(new InvoiceMailer($temp->jenisTransaksi, $temp->idTransaksi, 'proses'));
            // Notify the user
            Alert::success('Berhasil', 'Pembayaran Berhasil Dikonfirmasi');
        } else {
            // Watch for conflicting transaction status 
            switch ($temp->status) {
                case 'PROCESS':
                    Alert::error('Oops!', 'Sebelumnya Pembayaran Sudah Dikonfirmasi dan Sekarang Sedang Diproses');
                    break;
                case 'CANCEL':
                    Alert::error('Oops!', 'Sebelumnya Transaksi Sudah Dibatalkan Oleh Pengguna');
                    break;
                case 'SUCCESS':
                    Alert::error('Oops!', 'Sebelumnya Transaksi Sudah Berhasil Diselesaikan');
                    break;
                case 'FAILED':
                    Alert::error('Oops!', 'Sebelumnya Transaksi Sudah Ditolak');
                    break;
            }
        }
        // return to the origin url 
        return new RedirectResponse($originUrl);
    }

    // Change transaction status to FAILED
    public function verifyDecline(Request $request)
    {
        // Get the origin URL 
        $originUrl = $_SERVER['HTTP_REFERER'];
        // Get general data 
        $temp = $this->generalGrabber($request->idTransaksi);
        // Check if the status is not CANCEL or FAILED 
        if ($temp->status != 'CANCEL') {
            if ($temp->status != 'FAILED') {
                // update the status (DETAIL DATA)
                DB::table(str_replace('-', '_', $request->jenisTransaksi) . 's')->where('idTransaksi', $request->idTransaksi)->update(['sudahBayar' => '0', 'statusProses' => 'FAILED', 'sebabTolak' => $request->sebab]);
                // update the status (GENERAL DATA)
                GeneralPurchaseInfo::where('idTransaksi', $request->idTransaksi)->update(['sudahBayar' => '0', 'status' => 'FAILED']);
                // Mail the user 
                Mail::to($temp->email)->send(new InvoiceMailer($temp->jenisTransaksi, $temp->idTransaksi, 'tolak'));
                // Notify the user
                Alert::success('Berhasil', 'Pembayaran Berhasil Ditolak dengan sebab: ' . str_replace('Oleh Admin: ', '', $request->sebab));
            } else {
                // Bail out if transaction was failed 
                Alert::error('Oops!', 'Sebelumnya Pembayaran Sudah Ditolak');
            }
        } else {
            // Bail out if transaction was canceled 
            Alert::error('Oops!', 'Sebelumnya Pembayaran Sudah Dibatalkan Oleh Pengguna');
        }
        // return to the origin url 
        return new RedirectResponse($originUrl);
    }

    // Return the page @proses
    public function process()
    {
        $data = [
            'generalPurchaseInfo' => GeneralPurchaseInfo::where('status', 'PROCESS')->orderByDesc('created_at')->paginate(15),
        ];
        return view('dashboard.process', $data);
    }

    // search the data which under process 
    public function processSearch(Request $request)
    {
        // Pack data 
        $data = [
            'generalPurchaseInfo' => '',
            'queryTarget' => $request->searchQuery,
            'categoryTarget' => $request->filterKategori,
            'status' => 'PROCESS'
        ];

        // Filter the transaction data 
        if ($request->filterKategori == '') {
            $data['categoryTarget'] = 'null';
            if ($request->searchQuery != '') {
                $data['generalPurchaseInfo'] = GeneralPurchaseInfo::where([
                        ['status', $data['status']],
                        ['idTransaksi', $request->searchQuery]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['email', $request->searchQuery]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['hp', $request->searchQuery]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['totalBayar', $request->searchQuery]
                    ])->orderByDesc('created_at')->paginate(15);
            }
        } else {
            if ($request->searchQuery != '') {
                $data['generalPurchaseInfo'] = GeneralPurchaseInfo::where([
                        ['status', $data['status']],
                        ['idTransaksi', $request->searchQuery],
                        ['jenisTransaksi', $request->filterKategori]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['email', $request->searchQuery],
                        ['jenisTransaksi', $request->filterKategori]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['hp', $request->searchQuery],
                        ['jenisTransaksi', $request->filterKategori]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['totalBayar', $request->searchQuery],
                        ['jenisTransaksi', $request->filterKategori]
                    ])->orderByDesc('created_at')->paginate(15);
            } else {
                $data['generalPurchaseInfo'] = GeneralPurchaseInfo::where([
                        ['status', $data['status']],
                        ['jenisTransaksi', $request->filterKategori]
                    ])->orderByDesc('created_at')->paginate(15);
            }
        }
        // return the @process page 
        return view('dashboard.process', $data);
    }

    // Get the detail of transaction 
    public function processDetail($jenisTransaksi, $idTransaksi)
    {
        $recentTrx = DB::table(str_replace('-', '_', $jenisTransaksi) . 's')->where('idTransaksi', $idTransaksi)->first();
        return view('dashboard.detail', compact('recentTrx'));
    }

    // Process the transaction through DjavaAPI 
    public function processAPIBuy(Request $request)
    {
        // Get origin URL
        $originUrl = $_SERVER['HTTP_REFERER'];
        // get the transaction data 
        $temp = JasaSosmed::where('idTransaksi', $request->idTransaksi)->first();
        // Get DjavaAPI profile 
        $dataAPI = $this->profile();
        // Get the service code 
        switch ($temp->kodeProduk) {
            case 'INSTA/FOLL/RANDOM':
                $serviceCode = '1';
                $target = $temp->username;
                break;
            case 'INSTA/FOLL/LOKAL':
                $serviceCode = '2';
                $target = $temp->username;
                break;
            case  'INSTA/VIEW/RANDOM':
                $serviceCode = '3';
                $target = $temp->linkPost;
                break;
            case  'INSTA/LIKE/RANDOM':
                $serviceCode = '4';
                $target = $temp->linkPost;
                break;
            case  'INSTA/COM/CUSTOM':
                $serviceCode = '5';
                $target = $temp->linkPost;
                break;
            case  'YT/SUBS/RANDOM':
                $serviceCode = '6';
                $target = $temp->username;
                break;
            case  'YT/lIKES':
                $serviceCode = '7';
                $target = $temp->linkPost;
                break;
            case  'YT/COM/CUSTOM':
                $serviceCode = '8';
                $target = $temp->linkPost;
                break;
            case  'YT/VIEWS/RANDOM':
                $serviceCode = '9';
                $target = $temp->linkPost;
                break;
            case  'TIKTOK/FOLL/RANDOM':
                $serviceCode = '10';
                $target = $temp->username;
                break;
            case  'TIKTOK/LIKES/LOKAL':
                $serviceCode = '11';
                $target = $temp->linkPost;
                break;
            case  'TIKTOK/VIEW/RANDOM':
                $serviceCode = '12';
                $target = $temp->linkPost;
                break;
            case  'TIKTOK/SHARE/RANDOM':
                $serviceCode = '13';
                $target = $temp->linkPost;
                break;
            case  'TIKTOK/COM/CUSTOM':
                $serviceCode = '14';
                $target = $temp->linkPost;
                break;
        }
        // Check if the account balance is sufficient to do the transaction 
        if ((int)$dataAPI['data']['balance'] > (int)$temp->totalBayar) {
            // pass the custom comment to API 
            if ($temp->kustomKomentar != null) {
                $orderData = array('service' => $serviceCode, 'target' => $target, 'quantity' => $temp->jumlahJasa, 'custom_comment' => $temp->kustomKomentar);
            } else {
                $orderData = array('service' => $serviceCode, 'target' => $target, 'quantity' => $temp->jumlahJasa);
            }
            // order the service 
            $dataAPIBuy = $this->order($orderData);
            // check if the purchase was successful 
            if ($dataAPIBuy['status'] != true) {
                // Bail if failed 
                Alert::error('Oops!', 'Pesanan gagal diproses. Penyebab: ' . $dataAPIBuy['data']);
            } else {
                // Add the djava order id to the table 
                JasaSosmed::where('idTransaksi', $request->idTransaksi)->update(['djavaid' => $dataAPIBuy['data']['id']]);
            }
        } else {
            // Bail if the balance is insufficient 
            Alert::error('Oops!', 'Operasi Gagal, Saldo Deposit Djava SMM kurang. Saldo: ' . $dataAPI['data']['balance']);
        }
        // redirect to origin URL 
        return new RedirectResponse($originUrl);
    }

    // Change the transaction status to SUCCESS
    public function processSuccess(Request $request)
    {
        // Get origin URL 
        $originUrl = $_SERVER['HTTP_REFERER'];
        // Get general data
        $temp = $this->generalGrabber($request->idTransaksi);
        // Check if status SUCCESS (Avoid conflict)
        if ($temp->status != 'SUCCESS') {
            // get real table 
            $mainTable = DB::table(str_replace('-', '_', $temp->jenisTransaksi) . 's')->where('idTransaksi', $request->idTransaksi);
            $generalTable = GeneralPurchaseInfo::where('idTransaksi', $request->idTransaksi);
            // Add special treatment for beli lisensi digital
            if (($temp->jenisTransaksi == 'lisensi-digital')) {
                // Check if license code is inputed
                if (!($request->kodeLisensi == '')) {
                    // update the transaction status (GENERAL RECORD)
                    $generalTable = $generalTable->update(['status' => 'SUCCESS']);
                    // update the transaction status and add the license code (REAL RECORD)
                    $mainTable = $mainTable->update(['statusProses' => 'SUCCESS', 'kodeLisensi' => $request->kodeLisesensi]);
                    // Notify user 
                    Alert::success('Berhasil', 'Transaksi Berhasil Diselesaikan');
                    // Mail the invoice 
                    Mail::to($temp->email)->send(new InvoiceMailer($temp->jenisTransaksi, $request->idTransaksi, 'berhasil'));
                } else {
                    // Bail if admin forgot input the code 
                    Alert::error('Oops!', 'Operasi Gagal, Harap Masukan Kode Lisensi / Akun Untuk Aktivasi');
                }
            } else {
                // check if the admin upload the file related to transaction (Eg. Bank Transfer)
                if ($request->file('fileBukti')) {
                    // Get file 
                    $fileToUp = $request->file('fileBukti');
                    // Get file extension
                    $fileExtension = '.' . $fileToUp->getClientOriginalExtension();
                    // Store the file 
                    if ($request->file('fileBukti')->storeAs('public/file-bukti', $request->jenisTransaksi . '_' . $request->idTransaksi . '_FINISHED_by-admin' . $fileExtension, 'local')) {
                        // Update the status (GENERAL RECORD)
                        $generalTable = $generalTable->update(['status' => 'SUCCESS']);
                        // Update the status (REAL RECORD)
                        $mainTable = $mainTable->update(['statusProses' => 'SUCCESS', 'fileBukti' => $request->idTransaksi . '_FINISHED_by-admin' . $fileExtension]);
                        // Create the receipt if the transaction was Transfer bank or Bayar VA 
                        if ($temp->jenisTransaksi == 'transfer-bank' or $temp->jenisTransaksi == 'bayar-virtual') {
                            Browsershot::url(route('createStruk', [$temp->jenisTransaksi, $request->idTransaksi]))->setNpmBinary("/laragon/bin/nodejs/node-v14/node_modules/npm")->windowSize(800, 1200)->save('storage/struk/transfer/struk-' . $request->idTransaksi . '.png');
                        }
                        // Mail the user
                        Mail::to($temp->email)->send(new InvoiceMailer($temp->jenisTransaksi, $request->idTransaksi, 'berhasil'));
                        // Notify the user 
                        Alert::success('Berhasil', 'Transaksi Berhasil Diselesaikan');
                    } else {
                        // Bail if file upload failed 
                        Alert::error('Oops!', 'Operasi Gagal, Upload File Gagal');
                    }
                } else {
                    // Bail if admin hadn't upload the file 
                    Alert::error('Oops!', 'Operasi Gagal, Harap Sertakan File Bukti');
                }
            }
        } else {
            // Bail if the transaction was successfuly processed earlier 
            Alert::error('Oops!', 'Operasi Gagal, Transaksi Sudah Berhasil Diproses Sebelumnya');
        }
        // return to the origin url 
        return new RedirectResponse($originUrl);
    }

    // Abort the transaction 
    public function processAbort(Request $request)
    {
        // Get origin URL 
        $originUrl = $_SERVER['HTTP_REFERER'];
        // Get general data
        $temp = $this->generalGrabber($request->idTransaksi);
        $request->validate(
            [
                "sebabTolak"  => "required"
            ],
            [
                "sebabTolak.required" => "Masukan sebab penolakan transaksi"
            ]
        );
        // check the transaction status 
        if ($temp->status != 'CANCEL' or $temp->status != 'FAILED') {
            // Update the status on real table 
            if (DB::table(str_replace('-', '_', $request->jenisTransaksi) . 's')->where('idTransaksi', $request->idTransaksi)->update(['statusProses' => 'FAILED', 'sebabTolak' => $request->sebab])) {
                // Update the status on general table 
                GeneralPurchaseInfo::where('idTransaksi', $request->idTransaksi)->update(['status' => 'FAILED']);
                // Mail the user 
                Mail::to($temp->email)->send(new InvoiceMailer($temp->jenisTransaksi, $temp->idTransaksi, 'tolak'));
                // Notify admin
                Alert::success('Berhasil', 'Pembayaran Berhasil Dibatalkan dengan sebab: ' . str_replace('Oleh Admin: ', '', $request->sebab));
            } else {
                // Bail if something was wrong 
                Alert::error('Oops!', 'Data gagal diubah');
            }
        } else {
            // Bail if the transaction was CANCELED or FAILED 
            Alert::error('Oops!', 'Sebelumnya Pembayaran Sudah Dibatalkan');
        }
        // return to the origin 
        return new RedirectResponse($originUrl);
    }

    // Return the page @selesai
    public function success()
    {
        $data = [
            'generalPurchaseInfo' => DB::table('general_purchase_infos')->where('status', 'SUCCESS')->orderByDesc('created_at')->paginate(15),
        ];
        return view('dashboard.success', $data);
    }

    // search the data which was finished
    public function successSearch(Request $request)
    {
        // pack the data 
        $data = [
            'generalPurchaseInfo' => '',
            'queryTarget' => $request->searchQuery,
            'categoryTarget' => $request->filterKategori,
            'status' => 'SUCCESS'
        ];
        // Filter the data 
        if ($request->filterKategori == '') {
            $data['categoryTarget'] = 'null';
            if ($request->searchQuery != '') {
                $data['generalPurchaseInfo'] = DB::table('general_purchase_infos')->where([
                        ['status', $data['status']],
                        ['idTransaksi', $request->searchQuery]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['email', $request->searchQuery]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['hp', $request->searchQuery]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['totalBayar', $request->searchQuery]
                    ])->orderByDesc('created_at')->paginate(15);
            }
        } else {
            if ($request->searchQuery != '') {
                $data['generalPurchaseInfo'] = DB::table('general_purchase_infos')->where([
                        ['status', $data['status']],
                        ['idTransaksi', $request->searchQuery],
                        ['jenisTransaksi', $request->filterKategori]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['email', $request->searchQuery],
                        ['jenisTransaksi', $request->filterKategori]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['hp', $request->searchQuery],
                        ['jenisTransaksi', $request->filterKategori]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['totalBayar', $request->searchQuery],
                        ['jenisTransaksi', $request->filterKategori]
                    ])->orderByDesc('created_at')->paginate(15);
            } else {
                $data['generalPurchaseInfo'] = DB::table('general_purchase_infos')->where([
                        ['status', $data['status']],
                        ['jenisTransaksi', $request->filterKategori]
                    ])->orderByDesc('created_at')->paginate(15);
            }
        }
        return view('dashboard.success', $data);
    }

    // Get the detail of transaction 
    public function successDetail($jenisTransaksi, $idTransaksi)
    {
        $recentTrx = DB::table(str_replace('-', '_', $jenisTransaksi) . 's')->where('idTransaksi', $idTransaksi)->first();
        return view('dashboard.detail', compact('recentTrx'));
    }

    // Return the page @batal
    public function cancel()
    {
        $data = [
            'generalPurchaseInfo' => GeneralPurchaseInfo::where('status', 'CANCEL')->orderByDesc('created_at')->paginate(15),
        ];
        return view('dashboard.cancel', $data);
    }

    // search the data which was cancelled
    public function cancelSearch(Request $request)
    {
        // pack the data 
        $data = [
            'generalPurchaseInfo' => '',
            'queryTarget' => $request->searchQuery,
            'categoryTarget' => $request->filterKategori,
            'status' => 'CANCEL'
        ];
        // filter the data 
        if ($request->filterKategori == '') {
            $data['categoryTarget'] = 'null';
            if ($request->searchQuery != '') {
                $data['generalPurchaseInfo'] = GeneralPurchaseInfo::where([
                        ['status', $data['status']],
                        ['idTransaksi', $request->searchQuery]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['email', $request->searchQuery]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['hp', $request->searchQuery]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['totalBayar', $request->searchQuery]
                    ])->orderByDesc('created_at')->paginate(15);
            }
        } else {
            if ($request->searchQuery != '') {
                $data['generalPurchaseInfo'] = GeneralPurchaseInfo::where([
                        ['status', $data['status']],
                        ['idTransaksi', $request->searchQuery],
                        ['jenisTransaksi', $request->filterKategori]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['email', $request->searchQuery],
                        ['jenisTransaksi', $request->filterKategori]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['hp', $request->searchQuery],
                        ['jenisTransaksi', $request->filterKategori]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['totalBayar', $request->searchQuery],
                        ['jenisTransaksi', $request->filterKategori]
                    ])->orderByDesc('created_at')->paginate(15);
            } else {
                $data['generalPurchaseInfo'] = GeneralPurchaseInfo::where([
                        ['status', $data['status']],
                        ['jenisTransaksi', $request->filterKategori]
                    ])->orderByDesc('created_at')->paginate(15);
            }
        }
        return view('dashboard.cancel', $data);
    }

    // Get the detail of transaction 
    public function cancelDetail($jenisTransaksi, $idTransaksi)
    {
        $recentTrx = DB::table(str_replace('-', '_', $jenisTransaksi) . 's')->where('idTransaksi', $idTransaksi)->first();
        return view('dashboard.detail', compact('recentTrx'));
    }

    // Return the page @ditolak
    public function abort()
    {
        $data = [
            'generalPurchaseInfo' => GeneralPurchaseInfo::where('status', 'FAILED')->orderByDesc('created_at')->paginate(15),
        ];
        return view('dashboard.abort', $data);
    }

    // search the data which was aborted by admin
    public function abortSearch(Request $request)
    {
        // pack the data 
        $data = [
            'generalPurchaseInfo' => '',
            'queryTarget' => $request->searchQuery,
            'categoryTarget' => $request->filterKategori,
            'status' => 'FAILED'
        ];
        // Filter the result 
        if ($request->filterKategori == '') {
            $data['categoryTarget'] = 'null';
            if ($request->searchQuery != '') {
                $data['generalPurchaseInfo'] = GeneralPurchaseInfo::where([
                        ['status', $data['status']],
                        ['idTransaksi', $request->searchQuery]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['email', $request->searchQuery]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['hp', $request->searchQuery]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['totalBayar', $request->searchQuery]
                    ])->orderByDesc('created_at')->paginate(15);
            }
        } else {
            if ($request->searchQuery != '') {
                $data['generalPurchaseInfo'] = GeneralPurchaseInfo::where([
                        ['status', $data['status']],
                        ['idTransaksi', $request->searchQuery],
                        ['jenisTransaksi', $request->filterKategori]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['email', $request->searchQuery],
                        ['jenisTransaksi', $request->filterKategori]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['hp', $request->searchQuery],
                        ['jenisTransaksi', $request->filterKategori]
                    ])
                    ->orWhere([
                        ['status', $data['status']],
                        ['totalBayar', $request->searchQuery],
                        ['jenisTransaksi', $request->filterKategori]
                    ])->orderByDesc('created_at')->paginate(15);
            } else {
                $data['generalPurchaseInfo'] = GeneralPurchaseInfo::where([
                        ['status', $data['status']],
                        ['jenisTransaksi', $request->filterKategori]
                    ])->orderByDesc('created_at')->paginate(15);
            }
        }
        return view('dashboard.abort', $data);
    }

    // Get the detail of transaction 
    public function abortDetail($jenisTransaksi, $idTransaksi)
    {
        $recentTrx = DB::table(str_replace('-', '_', $jenisTransaksi) . 's')->where('idTransaksi', $idTransaksi)->first();
        return view('dashboard.detail', compact('recentTrx'));
    }

    // Return the page @refund
    public function refund()
    {
        $data = [
            'refundData' => DB::table('refunds')->orderByDesc('created_at')->paginate(15),
        ];
        return view('dashboard.refund', $data);
    }

    // search the refund data
    public function refundSearch(Request $request)
    {
        // pack data 
        $data = [
            'refundData' => '',
            'queryTarget' => $request->searchQuery,
            'categoryTarget' => $request->filterKategori,
        ];
        // filter the data 
        if ($request->filterKategori != 'null') {
            if ($request->searchQuery != '') {
                $data['refundData'] = DB::table('refunds')->where([
                        ['statusProses', $request->filterKategori],
                        ['idTransaksi', $request->searchQuery],
                    ])
                    ->orWhere([
                        ['statusProses', $request->filterKategori],
                        ['email', $request->searchQuery],
                    ])
                    ->orWhere([
                        ['statusProses', $request->filterKategori],
                        ['hp', $request->searchQuery],
                    ])
                    ->orWhere([
                        ['statusProses', $request->filterKategori],
                        ['nama', $request->searchQuery],
                    ])
                    ->orWhere([
                        ['statusProses', $request->filterKategori],
                        ['idTerkait', $request->searchQuery],
                    ])
                    ->orderByDesc('created_at')->paginate(15);
            } else {
                $data['refundData'] = DB::table('refunds')->where([
                        ['statusProses', $request->filterKategori],
                    ])->orderByDesc('created_at')->paginate(15);
            }
        } else {
            if ($request->searchQuery != '') {
                $data['refundData'] = DB::table('refunds')->where([
                        ['idTransaksi', $request->searchQuery],
                    ])
                    ->orWhere([
                        ['email', $request->searchQuery],
                    ])
                    ->orWhere([
                        ['hp', $request->searchQuery],
                    ])
                    ->orWhere([
                        ['nama', $request->searchQuery],
                    ])
                    ->orWhere([
                        ['idTerkait', $request->searchQuery],
                    ])
                    ->orderByDesc('created_at')->paginate(15);
            }
        }
        return view('dashboard.refund', $data);
    }

    // Get the detail of refund
    public function refundDetail($idTransaksi)
    {
        $recentTrx = DB::table('refunds')->where('idTransaksi', $idTransaksi)->first();
        return view('dashboard.detail', compact('recentTrx'));
    }

    // get related transaction ID to refund 
    public function refundTerkait($idTransaksi)
    {
        // get the data 
        $generalData = DB::table('general_purchase_infos')->where('idTransaksi', $idTransaksi)->first();
        if ($generalData != null) {
            $recentTrx = DB::table(str_replace('-', '_', $generalData->jenisTransaksi) . 's')->where('idTransaksi', $idTransaksi)->first();
            return view('dashboard.terkait', compact('recentTrx'));
        } else {
            // bail if data was not found 
            return abort(404, 'Data tidak ditemukan');
        }
    }

    // Process the refund 
    public function refundProcess(Request $request)
    {
        // get origin URL 
        $originUrl = $_SERVER['HTTP_REFERER'];
        // check the refund status 
        if (GeneralPurchaseInfo::where('idTransaksi', $request->idTransaksi)->first()->status != 'FAILED' or GeneralPurchaseInfo::where('idTransaksi', $request->idTransaksi)->first()->status != 'SUCCESS') {
            // update the refund status 
            if (DB::table('refunds')->where('idTransaksi', $request->idTransaksi)->update(['statusProses' => 'PROCESS'])) {
                GeneralPurchaseInfo::where('idTransaksi', $request->idTransaksi)->update(['statusProses' => 'PROCESS']);
                // Notify admin 
                Alert::success('Berhasil', 'Status ' . $request->idTransaksi . ' telah diubah. Harap segera proses refund.');
            } else {
                // Warn the admin
                Alert::error('Oops!', 'Operasi Gagal, Data gagal diubah');
            }
        } else {
            if (GeneralPurchaseInfo::where('idTransaksi', $request->idTransaksi)->first()->status == 'FAILED') {
                // Warn the admin
                Alert::error('Oops!', 'Operasi Gagal, Permintaan Refund sebelumnya sudah dibatalkan');
            } else {
                // Warn the admin
                Alert::error('Oops!', 'Operasi Gagal, Permintaan Refund sebelumnya sudah berhasil diproses');
            }
        }
        // return to the origin 
        return new RedirectResponse($originUrl);
    }

    // Finish the refund 
    public function refundSuccess(Request $request)
    {
        // get origin URL 
        $originUrl = $_SERVER['HTTP_REFERER'];
        // check the refund status 
        if (GeneralPurchaseInfo::where('idTransaksi', $request->idTransaksi)->first()->status != 'FAILED' or GeneralPurchaseInfo::where('idTransaksi', $request->idTransaksi)->first()->status != 'SUCCESS') {
            // update the refund status 
            if (DB::table('refunds')->where('idTransaksi', $request->idTransaksi)->update(['statusProses' => 'SUCCESS'])) {
                GeneralPurchaseInfo::where('idTransaksi', $request->idTransaksi)->update(['statusProses' => 'SUCCESS']);
                // Notify admin 
                Alert::success('Berhasil', 'Status proses ' . $request->idTransaksi . ' telah berhasil.');
            } else {
                // Warm admin 
                Alert::error('Oops!', 'Operasi Gagal, Data gagal diubah');
            }
        } else {
            if (GeneralPurchaseInfo::where('idTransaksi', $request->idTransaksi)->first()->status == 'FAILED') {
                // Warm admin 
                Alert::error('Oops!', 'Operasi Gagal, Permintaan Refund sebelumnya sudah dibatalkan');
            } else {
                // Warm admin 
                Alert::error('Oops!', 'Operasi Gagal, Permintaan Refund sebelumnya sudah berhasil diproses');
            }
        }
        // redirect to it's origin 
        return new RedirectResponse($originUrl);
    }

    // Abort the refund 
    public function refundAbort(Request $request)
    {
        // get origin URL 
        $originUrl = $_SERVER['HTTP_REFERER'];
        // check the refund status 
        if (GeneralPurchaseInfo::where('idTransaksi', $request->idTransaksi)->first()->status != 'FAILED') {
            // update the refund status 
            if (DB::table('refunds')->where('idTransaksi', $request->idTransaksi)->update(['statusProses' => 'FAILED', 'sebabBatal' => $request->sebab])) {
                GeneralPurchaseInfo::where('idTransaksi', $request->idTransaksi)->update(['statusProses' => 'FAILED']);
                Alert::success('Berhasil', 'Refund Berhasil Ditolak dengan sebab: ' . str_replace('Oleh Admin: ', '', $request->sebab)); // Notify admin 
            } else {
                // Warm admin 
                Alert::error('Oops!', 'Operasi Gagal, Data gagal diubah');
            }
        } else {
            // Warm admin 
            Alert::error('Oops!', 'Operasi Gagal, Permintaan Refund sebelumnya sudah dibatalkan');
        }
        // return to it's origin 
        return new RedirectResponse($originUrl);
    }

    // Return the page @pesan
    public function pesan()
    {
        $data = [
            'openMessage' => DB::table('open_m_s_g_s')->where('status', 'CREATED')->orderByDesc('created_at')->paginate(10),
        ];
        return view('dashboard.pesan', $data);
    }

    // Ignore the submited message 
    public function ignoreMsg(Request $request)
    {
        // update the message status to IGNORED 
        if (DB::table('open_m_s_g_s')->where('idPesan', $request->idPesan)->update(['status' => 'IGNORED'])) {
            Alert::success('Berhasil', 'Pesan berhasil diabaikan');
        } else {
            Alert::error('Oops!', 'Operasi Gagal');
        }
        // return to pesan dasboard 
        return redirect()->route('pesanDashboard');
    }

    // reply the message via email (WA => Upcoming)
    public function emailBalasan(Request $request)
    {
        // get message data 
        $data = OpenMSG::where('idPesan', $request->idPesan)->first();
        // check the message data 
        if ($data->status == 'CREATED') {
            // Send an email with admin replies 
            Mail::to($data->email)->send(new OpenMSGMailer('Balasan Pesan Kak ' . $data->nama, $data->nama, $data->pesan, str_replace('\n', ' ', $request->balasan)));
            // update the message status 
            OpenMSG::where("idPesan", $request->idPesan)->update(["status" => "REPLIED"]);
            // notify admin 
            Alert::success('Berhasil', 'Email balasan terkirim');
        } else {
            // warn admin 
            Alert::error('Oops!', 'Pesan sudah dibalas sebelumnya');
        }
        // redirect to pesan dashboard
        return redirect()->route('pesanDashboard');
    }
}
