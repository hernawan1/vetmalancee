<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class ProdukController extends Controller
{
    public function index()
    {
    	$produk = Produk::all();
    	return $produk->toJson();
    }

    public function store(Request $request)
    {

    	$produk = new Produk;
        $produk->nama = $request->nama;
        $produk->gambar = $request->gambar;
        $produk->harga = $request->harga;
        $produk->code_produksi = $request->code_produksi;
        $produk->tgl_exp = $request->tgl_exp;
        $produk->dosis = $request->dosis;
    	$produk->satuan_isi = $request->satuan_isi;
    	$produk->jenis_kategori =$request->jenis_kategori;
    	$produk->wadah = $request->wadah;
    	$produk->stock = $request->stock;
    	$produk->indikasi = $request->indikasi;
    	$produk->deskripsi = $request->deskripsi;
    	$produk->rasio_sedang = $request->rasio_sedang;
    	$produk->rasio_besar = $request->rasio_besar;
    	$produk->rasio_kecil = $request->rasio_kecil;
    	$produk->maks_besar = $request->maks_besar;
    	$produk->maks_sedang = $request->maks_sedang;
    	$produk->maks_kecil = $request->maks_kecil;
        $produk->save();
    	return response()->json($produk);
    }

}
