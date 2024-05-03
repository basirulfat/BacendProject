<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;


 protected $table = 'companies';

protected $fillable = [
    'owner',
    'company_name',
    'phone',
    'email',
    'image',
    'company_size',
    'position',
];
    /**
     * Get the job posts associated with the company.
     */
    public function jobPosts()
    {
        return $this->hasMany(PostJob::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }




}
