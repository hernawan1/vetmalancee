<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $fillable = ['id', 'id_user', 'nama', 'gambar',	'harga', 'code_produksi', 'tgl_exp', 'dosis', 
    	'satuan_isi', 'jenis_kategori',	'wadah', 'stock', 'indikasi', 'deskripsi', 'rasio_sedang', 
    	'rasio_besar', 'rasio_kecil', 'maks_besar',	'maks_sedang', 'maks_kecil'];
}
