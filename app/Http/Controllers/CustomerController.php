<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Hash;
use Auth;
use DB;
use App\Customer;
use Validator;
use File;


class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        $kategoriproduk = DB::table('kategoriproduk')->get();
        return view('menuadmin.customer', ['customer'=>$customer, 'data_kategori'=>$kategoriproduk]);
    }

    public function create(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            array(
                "email"=>"unique:customer,email",
            )
        );
        if ($validator->passes()) {
            $photo = $request->file('gambar');
			$new_name = rand() . '.' . $photo->getClientOriginalExtension();
			$photo->move(public_path('images'), $new_name);
            $customer = new Customer;
            $customer->nama = $request->nama;
            $customer->gambar = $new_name;
            $customer->alamat = $request->alamat;
            $customer->telepon = $request->telepon;
            $customer->email = $request->email;
            $customer->token= Str::random(8);
            $customer->save();
            return redirect()->back()->with('success','Berhasil Tambah');
        }
        else {
            return redirect()->back()->with('danger','Gagal Tambah');
        }
    }

    public function update(Request $request,$id)
    {
        $customer = Customer::find($id);
        $customer->update($request->all());
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
            $customer->gambar = $request->file('gambar')->getClientOriginalName();
            $customer->save();
        }
        return redirect()->back()->with('update','Berhasil Update');
    }

    public function delete($id)
    {
        $customer = Customer::find($id);
        $customer->delete($customer);
        return redirect()->back()->with('delete','Berhasil Hapus');
    }
}
