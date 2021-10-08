<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Events\NewOrder;

class DispatchOrder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dispatch:neworder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Broadcast new order';

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
        echo "Dispatching event...\n";
        NewOrder::dispatch([
            "id" => 1
        ]);
        echo "Event dispatched!\n";
    }
}
