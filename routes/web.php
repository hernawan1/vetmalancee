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
    return view('/auth/register');
});
Route::get('/admin','AdminController@home')->name('admin');

Route::get('/produk', 'ProdukController@index')->name('produk');

Route::post('produk/create','ProdukController@store');
Route::get('produk/delete/{id}','ProdukController@delete');
Route::get('produk/view/{id}', 'ProdukController@view');
Route::post('produk/update/{id}', 'ProdukController@update');

Route::get('/pengemasan', 'AdminController@pengemasan')->name('pengemasan');
Route::get('/ongkir', 'AdminController@ongkir')->name('ongkir');