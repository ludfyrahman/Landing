<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobFair extends Model
{
    use HasFactory;
    protected $table = 'job_dfair';
    private $path = 'storage/product/';
    protected $fillable = ['satuan_id', 'kategori_id', 'kode', 'nama', 'harga_beli', 'harga_jual', 'stok', 'foto', 'expired_date', 'status', 'deskripsi','is_available_in','store'];


}
