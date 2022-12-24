<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileCompany extends Model
{
    use HasFactory;
    protected $table = 'profil';
    protected $fillable = ['nama_perusahaan', 'logo', 'deskripsi', 'about', 'light_logo', 'address', 'phone', 'email'];
}
