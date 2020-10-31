<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class CartController extends Controller
{
    public function carts(){
        $kategoriproduk = DB::table('kategoriproduk')->get();
        $data_keranjang = DB::table('keranjang')->where('id_pelanggan','=','1')->get();
        // $total = [];
        // foreach($data_keranjang as $keranjang=>$value){
        //     $total = $value->sub_total;
        // }
        return view('menuadmin/cart', ['data_kategori'=>$kategoriproduk, 'data_keranjang'=>$data_keranjang]);
    }
    public function addcart(Request $request, $id){
        $addcart = DB::table('produk')->where('id', $id)->get();
        foreach($addcart as $cart){
            if($cart->stock == 0){
                return redirect()->back()->with('kosong','Stock Produk Kosong');
            }else{
                $keranjang = new \App\Cart;
                $keranjang -> id_pelanggan = auth()->user()->id;
                $keranjang -> nama_produk = $cart -> nama;
                $keranjang -> gambar_produk = $cart -> gambar;
                $keranjang -> jumlah = 1;
                $keranjang -> harga = $cart -> harga;
                $jumlah = 1;
                $harga = $cart -> harga;
                $sub_total = $jumlah * $harga;
                $keranjang -> sub_total = $sub_total;
                $keranjang -> save();
            }
           
        }
        return redirect('/carts');
    }
}
