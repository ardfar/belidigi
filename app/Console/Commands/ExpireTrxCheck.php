<?php

namespace App\Console\Commands;

use App\Models\GeneralPurchaseInfo;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

class ExpireTrxCheck extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checking for expired transaction';

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
    public function handle()
    {
        $data = GeneralPurchaseInfo::all();
        for ($x = 0; $x < $data->count(); $x++){
            if (Carbon::now() > Carbon::parse($data[$x]->created_at)->addHours(3) and $data[$x]->sudahBayar == 0){
                if (GeneralPurchaseInfo::where('idTransaksi',$data[$x]->idTransaksi)->update(['status' => 'FAILED'])){
                    if (DB::table(str_replace('-','_',$data[$x]->jenisTransaksi).'s')->where('idTransaksi',$data[$x]->idTransaksi)->update(['statusProses' => 'FAILED','sebabTolak' => 'Transaksi melewati batas waktu pembayaran'])){
                        print_r(PHP_EOL.'['.Carbon::now()->isoFormat('dddd, D MMMM Y HH:mm:ss').']'." Database of ".$data[$x]->idTransaksi." on ".str_replace('-','_',$data[$x]->jenisTransaksi).'s'." table has been expired");
                    } else {
                        print_r(PHP_EOL.'['.Carbon::now()->isoFormat('dddd, D MMMM Y HH:mm:ss').']'." Database of ".$data[$x]->idTransaksi." can't be changed");
                    }
                } else {
                    print_r(PHP_EOL.'['.Carbon::now()->isoFormat('dddd, D MMMM Y HH:mm:ss').']'." Database of ".$data[$x]->idTransaksi." on general table can't be changed");
                }
            }
        }
        print_r(PHP_EOL.'['.Carbon::now()->isoFormat('dddd, D MMMM Y HH:mm:ss').']'." Check Expired Transaction - Complete");
    }
}
