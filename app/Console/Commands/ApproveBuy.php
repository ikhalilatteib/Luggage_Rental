<?php

namespace App\Console\Commands;

use App\buy;
use Illuminate\Console\Command;

class ApproveBuy extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:buy-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Buy Approve';

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
        $buy = buy::all();
        $buy->each(function($data){
            $data->update([
                'is_approve'=>true
            ]);
        });
        return 0;
    }
}
