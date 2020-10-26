<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengemasan;
use DB;
use Validator;

class PengemasanController extends Controller
{
    public function index()
    {
        $pengemasan = Pengemasan::all();
        $kategoriproduk = DB::table('kategoriproduk')->get();
        return view('menuadmin.pengemasan', ['pengemasan'=>$pengemasan, 'data_kategori'=>$kategoriproduk]);
    }

    public function create(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            array(
                "jenis_pengemasan"=>"unique:pengemasan,jenis_pengemasan"
            )
        );
        if ($validator->passes()) {
            $pengemasan = new Pengemasan;
            $pengemasan->jenis_pengemasan = $request->jenis_pengemasan;
            $pengemasan->harga_pengemasan = $request->harga;
            $pengemasan->save();
            return redirect()->back()->with('success','Berhasil Tambah');
        }
        else {
            return redirect()->back()->with('danger','Gagal Tambah');
        }
    }

    public function update(Request $request,$id)
    {
        $pengemasan = Pengemasan::find($id);
        $pengemasan->update($request->all());
        return redirect()->back()->with('update','Berhasil Update');
    }

    public function delete($id)
    {
        $pengemasan = Pengemasan::find($id);
        $pengemasan->delete($pengemasan);
        return redirect()->back()->with('delete','Berhasil Hapus');
    }
}
