<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PosController extends Controller
{
    public function pos(){
        $data_vaksin = DB::table('produk')->where('jenis_kategori','=','Vaksin')->get();
        $kategoriproduk = DB::table('kategoriproduk')->get();
        return view('menuadmin/pos', ['data_kategori'=>$kategoriproduk,'data_vaksin'=>$data_vaksin]);
    }
    public function produkpos(){
        $data_vaksin = DB::table('produk')->where('jenis_kategori','=','Vaksin')->get();
        return view('produk/vaksin',['data_vaksin'=>$data_vaksin]);
    }
    public function coba1(){
        // $produk = DB::table('produk')->select('id')->where('id','=','1')->get();
        $count = DB::table('stock')->where('id_produk','=','1')->count();
       
        $stock = DB::table('stock')->where('id_produk','=','1')->orderBy('tgl_exp','asc')->get();
        $arraystock = [];
        foreach ($stock as $stk){
            $arraystock[] = $stk;
        }
        $getexp = [$arraystock[0]];
        $id_exp = '';
        $stock_exp = '';
        foreach ($getexp as $exp=>$value){
            $id_exp = $value->id;
            $stock_exp = $value->stock;
        }
        $jumlah = 50;
        $new_stock = $stock_exp - $jumlah;
        
            // dd($new_stock);
        do{
            DB::table('stock')->where('id', $id_exp)->delete();
            $stock = DB::table('stock')->where('id_produk','=','1')->orderBy('tgl_exp','asc')->get();
            $arraystock = [];
            foreach ($stock as $stk){
                $arraystock[] = $stk;
            }
            $getexp = [$arraystock[0]];
            foreach ($getexp as $exp=>$values){
                $id_exp = $values->id;
                $stock_exp = $values->stock;
            }
            $temp = abs($new_stock);
            // dd($temp);
            $new_stock = $stock_exp - $temp;
        }while($new_stock <= 0);

        // if($new_stock <= 0){
        //     for($i = 0;$i<=$count;$i++ ){
        //         $coba = [$id_exp];
        //         dd($coba);
        //         DB::table('stock')->where('id',$id_exp)->delete();
        //         $stocks = DB::table('stock')->where('id', $id_exp)->get();
        //         $id_exps = '';
        //         $stock_exps = '';
        //         foreach ($stocks as $stks=>$values){
        //             $id_exps = $values->id;
        //             $stock_exps = $values->stock;
        //         }
              
        //         $new_stocks = $stock_exps - ($new_stock * -1);
        //         $form_stock = array(
        //             'stock' =>$new_stocks
        //         );
        //         $berhasil2= DB::table('stock')->where('id',$id_exp)->update($form_stock);
              
        //     }
        // }else{
           
        // }
        $form_stock = array(
            'stock' =>$new_stock
        );
        $berhasil2= DB::table('stock')->where('id',$id_exp)->update($form_stock);
        $stocklama = DB::table('produk')->select('stock')->where('id', '=','1')->first();
        $stocklam = '';
        foreach($stocklama as $stklam){
            $stocklam = $stklam;
        }
        $stockbaru = $stocklam - $jumlah;
        $form_data = array(
            'stock' => $stockbaru ,
          );
        $berhasil1=DB::table('produk')->where('id','=','1')->update($form_data);
        // dd($berhasil1, $form_stock);

    }
}
