<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produkpesanan extends Model
{
    protected $table = 'produkpesanan';
    protected $fillable = ['id', 'gambar_produk', 'nama_produk', 'harga_produk', 'jumlah_produk',	
    'total_harga'];
}
