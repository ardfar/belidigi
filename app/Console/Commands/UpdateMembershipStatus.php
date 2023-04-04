<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Carbon;

class UpdateMembershipStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'membership:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updating registered users membership status';

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
            if ($data[$x]->trx_success < 50){
                $membership = 'pendatang';
            } elseif ($data[$x]->trx_success >= 50 and $data[$x]->trx_success < 150){
                $membership = 'warga tetap';
            } else {
                $membership = 'juragan';
            }

            if ($data[$x]->membership != $membership){
                if (User::where('username',$data[$x]->username)->update(['membership' => $membership])){
                    print_r(PHP_EOL.'['.Carbon::now()->isoFormat('dddd, D MMMM Y HH:mm:ss').'] '.$data[$x]->username."'s membership status has been updated to ".$membership);
                } else {
                    print_r(PHP_EOL.'['.Carbon::now()->isoFormat('dddd, D MMMM Y HH:mm:ss').'] '.$data[$x]->username."'s membership status cant be updated to ".$membership);
                }   
            }
        }
        print_r(PHP_EOL.'['.Carbon::now()->isoFormat('dddd, D MMMM Y HH:mm:ss').']'." Membership status update run successfully");
    }
}
