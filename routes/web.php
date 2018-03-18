<?php

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
    return view('welcome');

});
Route::get('/harga', function () {
    return view('harga');

});

Route::get('/history', 'HomeController@history');
Route::get('/history/print', 'HomeController@print');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin','middleware'=>['auth']], function() {
	//Route diisi disini
	Route::resource('karyawan', 'KaryawanController');
	Route::resource('konsumen', 'KonsumenController');
	Route::resource('barang', 'BarangController');
	Route::resource('transaksi', 'TransaksiController');
	Route::resource('user', 'UserController');
	});
Route::get('karyawan','KaryawanController@index');
Route::post('karyawan','KaryawanController@search');
Route::get('konsumen','KonsumenController@index');
Route::post('konsumen','KonsumenController@search');
Route::get('barang','BarangController@index');
Route::post('barang','BarangController@search');
Route::get('tran','TransaksiController@index');
Route::post('tran','TransaksiController@search');

Route::group(['middleware'=>'cors'], function(){
	Route::get('/listdata','apiController');
});