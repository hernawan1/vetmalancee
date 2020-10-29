<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Hash;
use Auth;
use App\User;
use DB;
use Validator;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        $kategoriproduk = DB::table('kategoriproduk')->get();
        return view('menuadmin.user', ['user'=>$user, 'data_kategori'=>$kategoriproduk]);
    }

    public function create(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            array(
                "username"=>"unique:user,username",
                "nama"=>"unique:user,nama"
            )
        );
        if ($validator->passes()) {
            $users = new User;
            $users->nama= $request->nama;
            $users->jabatan = $request->jabatan;
            $users->NIP = $request->NIP;
            $users->username = $request->username;
            $users->password=bcrypt ($request->input('password'));
            $users->remember_token= Str::random(8);
            $users->save();
            return redirect()->back()->with('success','Berhasil Tambah');
        }
        else {
            return redirect()->back()->with('danger','Gagal Tambah');
        }
    }

    public function update(Request $request,$id)
    {
        $users= User::find($id);
        $form_data = array(
            'nama' => $request->nama,
            'NIP' => $request->NIP,
            'jabatan' => $request->jabatan,
            'username' => $request->username,
        );
        User::whereId($request->id)->update($form_data);
        
        if ($request->password != '' && $request->password != null) {
            DB::table('user')->where('id', $request->id)->update(['password' => bcrypt($request->password)]);
        }
        return redirect()->back()->with('update','Berhasil Update');
    }

    public function delete($id)
    {
        $users = User::find($id);
        $users->delete($users);
        return redirect()->back()->with('delete','Berhasil Hapus');
    }
}
