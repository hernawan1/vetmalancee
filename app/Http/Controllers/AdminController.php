<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function home(){
        $kategoriproduk = DB::table('kategoriproduk')->get();
        return view('menuadmin/dashboard', ['data_kategori'=>$kategoriproduk]);
    }
    public function produk(){
        $kategoriproduk = DB::table('kategoriproduk')->get();
        return view('menuadmin/produk', ['data_kategori'=>$kategoriproduk]);
    }
    public function pengemasan(){
        $kategoriproduk = DB::table('kategoriproduk')->get();
        return view('menuadmin/pengemasan', ['data_kategori'=>$kategoriproduk]);
    }
    public function ongkir(){
        $kategoriproduk = DB::table('kategoriproduk')->get();
        return view('menuadmin/ongkir', ['data_kategori'=>$kategoriproduk]);
    }
    public function status(){
        $kategoriproduk = DB::table('kategoriproduk')->get();
        return view('menuadmin/statusbarang', ['data_kategori'=>$kategoriproduk]);
    }
}
