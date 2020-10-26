<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = "stock";
    protected $fillable = ['id','id_produk','code_produksi', 'tgl_exp', 'stock'];
}
