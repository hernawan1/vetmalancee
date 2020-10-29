<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Ongkir;
use Validator;
use Auth;

class OngkirController extends Controller
{
    public function index()
    {
        $ongkir = Ongkir::all();
        $kategoriproduk = DB::table('kategoriproduk')->get();
        return view('menuadmin.ongkir', ['ongkir'=>$ongkir, 'data_kategori'=>$kategoriproduk]);
    }

    public function create(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            array(
                "nama_kota_ongkir"=>"unique:ongkir,nama_kota_ongkir"
            )
        );
        if ($validator->passes()) {
            $ongkir = new ongkir;
            $ongkir->nama_kota_ongkir = $request->nama_kota_ongkir;
            $ongkir->harga = $request->harga;
            $ongkir->id_user = auth()->user()->id;
            $ongkir->save();
            return redirect()->back()->with('success','Berhasil Tambah');
        }
        else {
            return redirect()->back()->with('danger','Gagal Tambah');
        }
    }

    public function update(Request $request,$id)
    {
        $ongkir = ongkir::find($id);
        $ongkir->update($request->all());
        return redirect()->back()->with('update','Berhasil Update');
    }

    public function delete($id)
    {
        $ongkir = ongkir::find($id);
        $ongkir->delete($ongkir);
        return redirect()->back()->with('delete','Berhasil Hapus');
    }
}
