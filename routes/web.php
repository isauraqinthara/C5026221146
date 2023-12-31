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
    return view('website');
});

Route::get('halo', function () {
    return "Halo Apa Kabar";
});

Route::get('halo', function () {
    return "<h1>Halo Apa Kabar</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('contoh', function () {
	return view('contoh');
});

Route::get('hello', function () {
	return view('hello');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('js2', function () {
	return view('js2');
});

Route::get('link', function () {
	return view('link');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('navbarAliyah', function () {
	return view('navbarAliyah');
});

Route::get('navbarQin', function () {
	return view('navbarQin');
});

Route::get('responsive', function () {
	return view('responsive');
});

Route::get('responsive2', function () {
	return view('responsive2');
});

Route::get('style', function () {
	return view('style');
});

Route::get('tugas3', function () {
	return view('tugas3');
});

Route::get('perkalian', 'App\Http\Controllers\QinController@index');
Route::get('biodata', 'App\Http\Controllers\QinController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\QinController@showtime');

Route::get('/blog2', function () {
    return view('blog');
});

Route::get('formulir', 'App\Http\Controllers\QinController@formulir');
Route::get('/formulir/proses', 'App\Http\Controllers\QinController@proses');

Route::get('/blog/tentang', function () {
    return view('blog');
});


//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('/KeranjangBelanja','App\Http\Controllers\KeranjangBelanjaController@indexKB');
Route::get('/KeranjangBelanja/beli','App\Http\Controllers\KeranjangBelanjaController@beli');
Route::get('/KeranjangBelanja/batal/{ID}','App\Http\Controllers\KeranjangBelanjaController@batal');
Route::post('/KeranjangBelanja/store','App\Http\Controllers\KeranjangBelanjaController@store');


//route CRUD bank
Route::get('/bank','App\Http\Controllers\BankController@IndexBank');
Route::get('/bank/tambah','App\Http\Controllers\BankController@TambahBank');
Route::post('/bank/StoreBank','App\Http\Controllers\BankController@StoreBank');
Route::post('/bank/view','App\Http\Controllers\BankController@ViewBank');
Route::get('/bank/edit/{KodeBank}','App\Http\Controllers\BankController@EditBank');
Route::post('/bank/update','App\Http\Controllers\BankController@update');
Route::get('/bank/hapus/{KodeBank}','App\Http\Controllers\BankController@hapus');
Route::get('/bank/cari','App\Http\Controllers\BankController@cari');

//Route Chat
Route::get('/chat','App\Http\Controllers\ChatController@IndexChat');
Route::get('/chat/TambahChat','App\Http\Controllers\ChatController@TambahChat');
Route::post('/chat/StoreChat','App\Http\Controllers\ChatController@StoreChat');
Route::post('/chat/ViewChat','App\Http\Controllers\ChatController@ViewChat');
Route::get('/chat/edit/{id}','App\Http\Controllers\ChatController@EditChat');
Route::post('/chat/update','App\Http\Controllers\ChatController@update');
Route::get('/chat/hapus/{id}','App\Http\Controllers\ChatController@hapus');
Route::get('/chat/cari','App\Http\Controllers\ChatController@cari');
