<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ongkir extends Model
{
    protected $table = 'ongkir';
    protected $fillable = ['id', 'id_user', 'nama_kota_ongkir', 'harga'];
}
