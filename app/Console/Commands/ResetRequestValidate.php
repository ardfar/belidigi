<?php

namespace App\Console\Commands;

use App\Models\ResetRequest;
use Carbon\Carbon;
use Illuminate\Console\Command;

class ResetRequestValidate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'resetreq:validate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'revalidate the hash key of reset password request';

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
        ResetRequest::where("created_at","<=",Carbon::now()->subMinutes(5))->delete();
    }
}
