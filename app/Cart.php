<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'keranjang';
    protected $fillable = ['id', 'id_pelanggan', 'nama_produk', 'gambar_produk', 'jumlah','harga'];

}
