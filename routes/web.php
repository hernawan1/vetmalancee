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

//PENGEMASAN
Route::get('/pengemasan', 'PengemasanController@index')->name('pengemasan');
Route::post('pengemasan/create','PengemasanController@create')->name('addpengemasan');
Route::get('pengemasan/delete/{id}','PengemasanController@delete')->name('deletepengemasan');
Route::post('pengemasan/update/{id}', 'PengemasanController@update')->name('updatepengemasan');

//ONGKIR
Route::get('/ongkir', 'OngkirController@index')->name('ongkir');
Route::post('ongkir/create','OngkirController@create')->name('addongkir');
Route::get('ongkir/delete/{id}','OngkirController@delete')->name('deleteongkir');
Route::post('ongkir/update/{id}', 'OngkirController@update')->name('updateongkir');

Route::get('/statusbarang', 'AdminController@status')->name('status');

