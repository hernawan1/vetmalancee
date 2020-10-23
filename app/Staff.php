<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
	protected $table = 'staff';
    protected $fillable = ['id', 'id_user', 'nama_staff', 'nip_staff', 'no_hp_staff'];
    
}
