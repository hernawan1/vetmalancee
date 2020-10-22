<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
        return view('menuadmin/dashboard');
    }
    public function produk(){
        return view('menuadmin/produk');
    }
    public function pengemasan(){
        return view('menuadmin/pengemasan');
    }
    public function ongkir(){
        return view('menuadmin/ongkir');
    }
}
