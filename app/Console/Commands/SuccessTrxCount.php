<?php

namespace App\Console\Commands;

use App\Models\GeneralPurchaseInfo;
use Illuminate\Support\Carbon;
use App\Models\User;
use Illuminate\Console\Command;

class SuccessTrxCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trx:success';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update every users success transaction';

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
        $data = User::all();
        for ($x = 0; $x < $data->count(); $x++){
            $trx_success = GeneralPurchaseInfo::where([['creator',$data[$x]->username],['status','SUCCESS']])->get()->count();
            if (User::where('username',$data[$x]->username)->update(['trx_success' => $trx_success])){
                file_put_contents('Public/Storage/Log/autorun.log',PHP_EOL.'['.Carbon::now()->isoFormat('dddd, D MMMM Y HH:mm:ss').']'." Trx Success on ".$data[$x]->username." has been updated",FILE_APPEND);
            } else {
                file_put_contents('Public/Storage/Log/autorun.log',PHP_EOL.'['.Carbon::now()->isoFormat('dddd, D MMMM Y HH:mm:ss').']'." Trx Success on ".$data[$x]->username." cant be updated",FILE_APPEND);
            }
            file_put_contents('Public/Storage/Log/autorun.log',PHP_EOL.'['.Carbon::now()->isoFormat('dddd, D MMMM Y HH:mm:ss').']'." Trx Success data has been updated",FILE_APPEND);
        }
    }
}
