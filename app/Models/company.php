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
    'company name',
    'pashto name',
    'phone',
    'email',
    'company size',
    'position',
];




}
