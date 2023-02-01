<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Majors extends Model
{
    use HasFactory;
    protected $table = 'majors';
    protected $fillable = [
        'name',
        'akronim',
        'logo',
        'video',
        'desc',
    ];

   
}
