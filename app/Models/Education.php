<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable = [
        'school_name',
        'field_of_study',
        'degree_level',
        'start_year',
        'end_year',
        'university_name',
        'university_type',
        'country',
        'city',
        'description',
        'password',
        
    ];
}
