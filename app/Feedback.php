<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
	protected $table = 'feedback';
    protected $fillable = ['id', 'id_pesanan', 'id_pelanggan', 'jenis_keadaan', 'temperatur', 'jumlah_kemasan', 'ket_tambahan', 'gambar'];
}
