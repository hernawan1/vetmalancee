<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $table = 'customer';
    protected $fillable = ['id', 'nama', 'alamat', 'telepon', 'email', 'token'];
    
}
