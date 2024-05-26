<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\NotificationCronMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class SendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:sendMail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send mail to all users by running this command';

    /**
     * Execute the console command.
     */
    // public function handle()
    // {
    //     $users = DB::table('users')->get();
    //     $latestJobs = DB::table('post_jobs')->latest()->first();
    //     $postJobs = $latestJobs ? [$latestJobs->skills]: [];

    //     foreach ($users as $user){
    //         $userSkills = DB::table('Skills')
    //         ->where('user_id' , $user->id)
    //         ->pluck('skill')
    //         ->toArray();

            
    //         $matchingSkills = array_intersect($postJobs, $userSkills);

    //         if(!empty($matchingSkills)){
    //             Mail::to ($user->email)->send(new NotificationCronMail);
    //         }
    //     }
        
    // }

    public function handle()
    {
        $oneWeekAgo = now()->subWeek();
        $today = now();
    
        $latestJobs = DB::table('post_jobs')
            ->whereBetween('created_at', [$oneWeekAgo, $today])
            ->latest()
            ->get();
    
        $users = DB::table('users')->get();
    
        foreach ($latestJobs as $job) {
            $postJobSkills = explode(',', $job->skills);
    
            $matchingUsers = $users->filter(function ($user) use ($postJobSkills) {
                $userSkills = DB::table('skills')
                    ->where('user_id', $user->id)
                    ->pluck('skill')
                    ->toArray();
    
                return count(array_intersect($postJobSkills, $userSkills)) > 0;
            });
    
            foreach ($matchingUsers as $user) {
                Mail::to($user->email)->send(new NotificationCronMail($postJobSkills));
            }
        }
    }
}
