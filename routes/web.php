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


Route::get('/','AuthController@index')->name('login');
Route::post('/postlogin', 'AuthController@postlogin')->name('postlogin');
Route::get('/logout','AuthController@logout')->name('logout');



    Route::group(['middleware' => 'auth'], function(){
        Route::get('/admin','AdminController@home')->name('admin');
    
        //USER
        Route::get('/user', 'UserController@index')->name('user');
        Route::post('user/create','UserController@create')->name('adduser');
        Route::get('user/delete/{id}','UserController@delete')->name('deleteuser');
        Route::post('user/update/{id}', 'UserController@update')->name('updateuser');
    

        //CUSTOMER
        Route::get('/customer', 'CustomerController@index')->name('customer');
        Route::post('customer/create','CustomerController@create')->name('addcustomer');
        Route::get('customer/delete/{id}','CustomerController@delete')->name('deletecustomer');
        Route::post('customer/update/{id}', 'CustomerController@update')->name('updatecustomer');

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

        //BERITA
        Route::get('/berita', 'BeritaController@index')->name('berita');
        Route::post('berita/create','BeritaController@create')->name('addberita');
        Route::get('berita/delete/{id}','BeritaController@delete')->name('deleteberita');
        Route::post('berita/update/{id}', 'BeritaController@update')->name('updateberita');

        Route::get('/statusbarang', 'AdminController@status')->name('status');

        //CART
        Route::get('/carts', 'CartController@carts')->name('carts');
        Route::get('/addcart/{id}', 'CartController@addcart')->name('addcart');

    });


// Route::get('/', function () {
//     return view('auth.register');
// });

// Route::get('/admin','AdminController@home')->name('admin');

// //USER
// Route::get('/user', 'UserController@index')->name('user');
// Route::post('user/create','UserController@create')->name('adduser');
// Route::get('user/delete/{id}','UserController@delete')->name('deleteuser');
// Route::post('user/update/{id}', 'UserController@update')->name('updateuser');

// //CUSTOMER
// Route::get('/customer', 'CustomerController@index')->name('customer');
// Route::post('customer/create','CustomerController@create')->name('addcustomer');
// Route::get('customer/delete/{id}','CustomerController@delete')->name('deletecustomer');
// Route::post('customer/update/{id}', 'CustomerController@update')->name('updatecustomer');

// //PRODUK
// Route::get('/produk/{id}', 'ProdukController@index')->name('produk');
// Route::post('produk/create','ProdukController@addproduk')->name('addproduk');
// Route::get('produk/delete/{id}','ProdukController@delete')->name('deleteproduk');
// Route::post('produk/update/{id}', 'ProdukController@update')->name('updateproduk');

// //STOCK
// Route::get('/stock/{id}','ProdukController@stock')->name('stock');
// Route::post('stock/create','ProdukController@addstock')->name('addstock');
// Route::get('stock/delete/{id}', 'ProdukController@deletestock')->name('deletestock');


// //PENGEMASAN
// Route::get('/pengemasan', 'PengemasanController@index')->name('pengemasan');
// Route::post('pengemasan/create','PengemasanController@create')->name('addpengemasan');
// Route::get('pengemasan/delete/{id}','PengemasanController@delete')->name('deletepengemasan');
// Route::post('pengemasan/update/{id}', 'PengemasanController@update')->name('updatepengemasan');

// //ONGKIR
// Route::get('/ongkir', 'OngkirController@index')->name('ongkir');
// Route::post('ongkir/create','OngkirController@create')->name('addongkir');
// Route::get('ongkir/delete/{id}','OngkirController@delete')->name('deleteongkir');
// Route::post('ongkir/update/{id}', 'OngkirController@update')->name('updateongkir');

// //BERITA
// Route::get('/berita', 'BeritaController@index')->name('berita');
// Route::post('berita/create','BeritaController@create')->name('addberita');
// Route::get('berita/delete/{id}','BeritaController@delete')->name('deleteberita');
// Route::post('berita/update/{id}', 'BeritaController@update')->name('updateberita');
//POINTOFSALE
Route::get('/pos','PosController@pos')->name('pos');

Route::get('/statusbarang', 'AdminController@status')->name('status');


Route::get('/statusbarang', 'AdminController@status')->name('status');

//PERCOBAAN
Route::get('/bismillah', 'PosController@coba1');