<?php

namespace App\Jobs;

use App\Models\PostJob;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

use Carbon\Carbon;
use Illuminate\Console\Command;




class DeletePostJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
      
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
    

        $expiredPosts = PostJob::where('expairTime', '<', Carbon::now())->get();
        foreach ($expiredPosts as $post) {
            dispatch(new DeletePostJob($post));
        }
        
    }
    
}
