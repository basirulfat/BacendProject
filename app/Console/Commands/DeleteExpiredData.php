<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\PostJob;

class DeleteExpiredData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    
    protected $signature = 'app:delete-expired-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Deleting expired post jobs...');
        PostJob::where('expairTime ', '<', now())->delete();
        
        $this->info('Expired post jobs deleted successfully.');
    }
}
