<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'produk_id',
        'nama_pembeli',
        'alamat',
        'no_telp',
        'deskripsi_kustom',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
