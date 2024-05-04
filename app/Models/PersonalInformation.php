<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'second_name',
        'email',
        'phone',
        'address',
        'image',
        'gender',
        'date_of_birth',
        'military_service_status',
        'country',
        'city',
        'password',
        
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
