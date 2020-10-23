<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengemasan extends Model
{
    protected $table = 'pengemasan';
    protected $fillable = ['id', 'id_user', 'jenis_pengemasan', 'harga_pengemasan'];
}
