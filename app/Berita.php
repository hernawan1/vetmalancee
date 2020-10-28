<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    protected $fillable = ['id', 'id_user', 'judul', 'deskripsi', 'gambar'];
}
