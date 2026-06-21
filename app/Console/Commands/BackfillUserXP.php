<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\BackfillUserXpJob;

class BackfillUserXP extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:backfill-xp';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dispatches the job to backfill users with XP based on total hours watched';

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
        $this->info('Dispatching BackfillUserXpJob to the queue...');
        BackfillUserXpJob::dispatch();
        $this->info('Job successfully dispatched! Run php artisan queue:work to process it.');
        
        return 0;
    }
}
