<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $fillable = ['id', 'id_user', 'nama', 'gambar',	'harga', 'dosis', 
    	'satuan_isi', 'jenis_kategori',	'wadah', 'indikasi', 'deskripsi', 'maks_besar',	'maks_sedang', 'maks_kecil', 'rasio_kecil','rasio_sedang','rasio_besar'];
}
