<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolProfile extends Model
{
    use HasFactory;
    protected $table = 'school_profile';
    protected $fillable = ['name', 'address', 'logo', 'visi', 'misi', 'intro', 'phone', 'banner', 'headmaster_photo'];

    public function getLogoAttribute($value)
    {
        return $value ? asset('storage/' . $value) : asset('storage/logo/default.png');
    }
    public function getBannerAttribute($value)
    {
        return $value ? asset('storage/' . $value) : asset('storage/banner/default.png');
    }
    public function getHeadmasterPhotoAttribute($value)
    {
        return $value ? asset('storage/' . $value) : asset('storage/headmaster/default.png');
    }
}
