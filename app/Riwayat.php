<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
	protected $table = 'riwayat';
    protected $fillable = ['id', 'id_pesanan', 'tanggal', 'alamat', 'metode_pengiriman', 'total_akhir',	
    'biaya_pengemasan', 'biaya_ongkir', 'grand_total'];
    
}
