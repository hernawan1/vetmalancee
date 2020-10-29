<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = DB::table('berita')
                    ->join('user', 'user.id', '=', 'berita.id_user')
                    ->select('user.nama', 'berita.judul', 'berita.gambar', 'berita.deskripsi','berita.id')
                    ->get();
        $kategoriproduk = DB::table('kategoriproduk')->get();
        return view('menuadmin.berita', ['berita'=>$berita, 'data_kategori'=>$kategoriproduk]);
    }

    public function create(Request $request)
    {
            $photo = $request->file('gambar');
            $new_name = rand() . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('images'), $new_name);

            $berita = new Berita;
            $berita->judul = $request->judul;
            $berita->deskripsi = $request->deskripsi;
            $berita->gambar = $new_name;
            $berita->id_user = auth()->user()->id;
            $berita->save();
            return redirect()->back()->with('success','Berhasil Tambah');
    }

    public function update(Request $request,$id)
    {
        $berita = Berita::find($id);
        $berita->update($request->all());
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
            $berita->gambar = $request->file('gambar')->getClientOriginalName();
            $berita->save();
        }
        return redirect()->back()->with('update','Berhasil Update');
    }

    public function delete($id)
    {
        $berita = Berita::find($id);
        $berita->delete($berita);
        return redirect()->back()->with('delete','Berhasil Hapus');
    }
}
