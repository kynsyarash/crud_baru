<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{   
    public $timestamps = false;
    protected $fillable = [
        'nama_produk',
        'path_img',
        'judul',
        'deskripsi',
        'harga',
    ];
}
