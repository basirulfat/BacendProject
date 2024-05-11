<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Prunable;
use Illuminate\Support\Facades\DB;

class PostJob extends Model
{
    use HasFactory;
    use Prunable; 

    protected $fillable = [
        'user_id',
        'jobTitle',
        'jobDescription',
        'category',
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
            return $this->belongsTo(Company::class, 'company_id');
        }
        public function getProductsByCategory()
        {
            return $this->select('company_id', DB::raw('COUNT(*) as count'))
                        ->groupBy('company_id')
                        ->get();
        }



/*--------- suto delete data form  table--------*/
        public function prunable()
        {
            return $this->where('created_at', '<', now()->subDays(7));
         
        }
}
