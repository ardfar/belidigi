<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DjavaStatusCheker extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'djava:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check status from Djava server then update yours';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public $api_url = 'https://djavapanel.com/api/';
    public $api_id = '24834';
    public $api_key = 'c5923d-3e3fec-f4b1cb-135d8e-f9dfd7';

    function connect($end_point, $post) {
        $_post = Array();
        if (is_array($post)) {
            foreach ($post as $name => $value) {
                $_post[] = $name.'='.urlencode($value);
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
    public function status($order_id) {
		return json_decode($this->connect($this->api_url.'status', array('api_id' => $this->api_id, 'api_key' => $this->api_key, 'id' => $order_id)), true);
    }
    public function handle()
    {
        $data = DB::table('jasa_sosmeds')->where('statusProses','PROCESS')->get();
        for ($x = 0;$x < $data->count(); $x++){
            if ($data[$x]->djavaid != ''){
                $api_data = $this->status($data[$x]->djavaid);
                if ($api_data['data']['status'] == 'Success'){
                    DB::table('jasa_sosmeds')->where('idTransaksi',$data[$x]->idTransaksi)->update(['statusProses' => 'SUCCESS']);
                    DB::table('general_purchase_infos')->where('idTransaksi',$data[$x]->idTransaksi)->update(['status' => 'SUCCESS']);
                } else {
                    print_r(PHP_EOL.'['.Carbon::now()->isoFormat('dddd, D MMMM Y HH:mm:ss').']'." Failed To Fetch API Data");
                }
            }
        }
        print_r(PHP_EOL.'['.Carbon::now()->isoFormat('dddd, D MMMM Y HH:mm:ss').']'." DjavaAPI Check Status - Complete");
    }
}
