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
Route::get('/produk', 'AdminController@produk')->name('produk');
Route::get('/pengemasan', 'AdminController@pengemasan')->name('pengemasan');
Route::get('/ongkir', 'AdminController@ongkir')->name('ongkir');