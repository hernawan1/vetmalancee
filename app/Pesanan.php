<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
	protected $table = 'pesanan';
    protected $fillable = ['id', 'id_pelanggan', 'id_produk_pelanggan', 'faktur_pesanan', 'tanggal_pesanan',	'alamat_pesanan', 'metode_pengiriman_pesanan', 'total_akhir', 'biaya_pengemasan', 'biaya_ongkir',	'grand_total', 'status_pesanan'];
    
}
