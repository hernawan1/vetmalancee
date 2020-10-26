<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('menuadmin.produk');
});

Route::get('/admin','AdminController@home')->name('admin');

//PRODUK
Route::get('/produk/{id}', 'ProdukController@index')->name('produk');
Route::post('produk/create','ProdukController@addproduk')->name('addproduk');
Route::get('produk/delete/{id}','ProdukController@delete')->name('deleteproduk');
Route::post('produk/update/{id}', 'ProdukController@update')->name('updateproduk');

//STOCK
Route::get('/stock/{id}','ProdukController@stock')->name('stock');
Route::post('stock/create','ProdukController@addstock')->name('addstock');
Route::get('stock/delete/{id}', 'ProdukController@deletestock')->name('deletestock');

Route::get('/statusbarang', 'AdminController@status')->name('status');

Route::get('/pengemasan', 'AdminController@pengemasan')->name('pengemasan');
Route::get('/ongkir', 'AdminController@ongkir')->name('ongkir');

