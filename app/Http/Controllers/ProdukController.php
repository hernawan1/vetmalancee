<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Produk;

class ProdukController extends Controller
{
    public function index()
    {
		$produk = Produk::all();
    	return view('produk.index',['produk'=>$produk]);
    }

    public function store(Request $request)
    {
    	$produk = new Produk;
        $produk->nama = $request->nama;
        $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
        $produk->gambar = $request->file('gambar')->getClientOriginalName();
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
    	$produk->maks_besar = $request->maks_besar;
    	$produk->maks_sedang = $request->maks_sedang;
		$produk->maks_kecil = $request->maks_kecil;
		$produk->rasio_sedang = 1/$request->maks_sedang*100;
    	$produk->rasio_besar = 1/$request->maks_besar*100;
    	$produk->rasio_kecil = 1/$request->maks_kecil*100;
        $produk->save();
    	return redirect('/produk')->with('sukses','Data berhasil diinput');
	}
	
	public function view($id)
    {
    	$produk= Produk::find($id);
    	return view('produk/view', ['produk'=>$produk]);
	}
	
	public function update(Request $request,$id)
    {
    	$produk= Produk::find($id);
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
            $produk->gambar = $request->file('gambar')->getClientOriginalName();
            $produk->save();
        }
		$produk->update($request->all());

		$rasio_kecil = 1/$request->maks_kecil*100;
		$rasio_sedang = 1/$request->maks_sedang*100;
		$rasio_besar = 1/$request->maks_besar*100;
		DB::table('produk')->where('id', $id)->update(
			[
				'rasio_besar' => $rasio_besar,
				'rasio_sedang' => $rasio_sedang,
				'rasio_kecil' => $rasio_kecil,
			]);
    	return redirect('/produk')->with('sukses','Data berhasil diupdate');
	}
	
	public function delete($id)
    {
    	$produk= Produk::find($id);
    	$produk->delete($produk);
    	return redirect('/produk')->with('sukses','Data berhasil dihapus');
	}

}
