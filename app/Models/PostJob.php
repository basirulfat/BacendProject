<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostJob extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company_id',
        'jobTitle',
        'jobDescription',
        'applyLink',
        'jobType',
        'location',
        'skills',
        'logo',
        'experience',
        'seniority',
        'salary',
        'postingTime',
        'expairTime',
    ];
   
        // The table associated with the model.
        protected $table = 'post_jobs';

        /**
         * Get the user that created the job post.
         */
        public function user()
        {
            return $this->belongsTo(User::class);
        }
    
        /**
         * Get the company associated with the job post.
         */
        public function company()
        {
            return $this->belongsTo(Company::class);
        }
    
}
