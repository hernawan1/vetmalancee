<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Produk;
use App\Stock;
use File;
use Validator;

class ProdukController extends Controller
{

    public function index(Request $request, $id)
    {
		$kategoriproduk = DB::table('kategoriproduk')->get();
		$kategori = DB::table('kategoriproduk')->select('nama')->where('id',$id)->get();
		$kate='';
		foreach($kategori as $kt){
			$kate=$kt->nama;
		}
		$produk = DB::table('produk')->where('jenis_kategori',$kate)->get();
    	return view('menuadmin.produk',['data_kategori'=>$kategoriproduk, 'produk'=>$produk, 'kategori'=>$kate]);
	}
    public function addproduk(Request $request)
    {
		$validator = Validator::make(
			$request->all(),
			array(
				"nama"=> "unique:produk,nama"
			)
		);
		if($validator->passes())
		{
			$photo = $request->file('gambar');
			$new_name = rand() . '.' . $photo->getClientOriginalExtension();
			$photo->move(public_path('images'), $new_name);
			$produk = new Produk;
			$produk->stock = 0;
			$produk->nama = $request->nama;
			$produk->gambar = $new_name;
			$produk->harga = $request->harga;
			$produk->dosis = $request->dosis;
			$produk->satuan_isi = $request->satuan_isi;
			$produk->jenis_kategori =$request->jenis_kategori;
			$produk->wadah = $request->wadah;
			$produk->indikasi = $request->indikasi;
			$produk->deskripsi = $request->deskripsi;
			$produk->maks_besar = $request->maks_besar;
			$produk->maks_sedang = $request->maks_sedang;
			$produk->maks_kecil = $request->maks_kecil;
			$produk->rasio_kecil = 1/$request->maks_kecil;
			$produk->rasio_sedang = 1/$request->maks_sedang;
			$produk->rasio_besar = 1/$request->maks_besar;
			$produk->save();
			return redirect()->back()->with('success','Data berhasil diinput');
		}else{
			return redirect()->back()->with(['danger' => 'Produk yang Anda tambahkan telah ada']);
		}
	}

	public function stock(Request $request){
		$kategoriproduk = DB::table('kategoriproduk')->get();
		$stock = DB::table('stock')->where('id_produk',$request->id)->get();
		$kategori = DB::table('produk')->select('nama','id')->where('id',$request->id)->get();
		$nama='';
		$id='';
		foreach($kategori as $kt){
			$nama=$kt->nama;
			$id=$kt->id;
		}
		return view('menuadmin.stock',['data_kategori'=>$kategoriproduk, 'stock'=>$stock, 'nama'=>$nama, 'id'=>$id]);
	}

	public function addstock(Request $request){
		$stock = new stock;
		$stock->id_produk = $request->id;
		$stock->code_produksi = $request->code_produksi;
		$stock->tgl_exp = $request->tgl_exp;
		$stock->stock = $request->stock;
		$stock->save();

		$stocklama = DB::table('produk')->select('stock')->where('id', $request->id)->first();
		$stocklam = '';
		foreach($stocklama as $stklam){
			$stocklam = $stklam;
		}
		$stockbaru = $stocklam + $request->stock;
		$form_data = array(
            'stock' => $stockbaru ,
          );
		DB::table('produk')->where('id',$request->id)->update($form_data);
		return redirect()->back()->with('berhasil','Stock Berhasil Ditambahkan');
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
    	return redirect()->back()->with('update','Data berhasil diupdate');
	}
	
	public function delete($id)
    {
    	$produk= Produk::find($id);
		$produk->delete($produk);
		
		$stock = DB::table('stock')->where('id_produk',$id)->delete();
		

    	return redirect()->back()->with('delete','Data berhasil dihapus');
	}

	public function deletestock($id)
	{
		$stock = Stock::find($id);
		$stock->delete($stock);
		return redirect()->back()->with('sukses','Data Berhasil Dihapus');
	}

}
