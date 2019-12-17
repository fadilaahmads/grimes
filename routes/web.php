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

Route::get('/', 'wel2controller@index');
Route::get('/welcome', function () {
    return view('welcome2');
});

///tambah homestay
Route::get('/tabel1', 'HomestayController@index');
Route::get('/formdh', function () {
    return view('formdh');
})->middleware('auth');


Route::get('/formlogin', function () {
    return view('formlogin');
})->name('login');
Route::get('/formsignup', function () {
    return view('formsignup');
});


Route::post('/homestay/kirim','HomestayController@kirim');
Route::get('/homestay/edit/{id}','HomestayController@edit');
Route::post('/homestay/update','HomestayController@update');
Route::get('/homestay/hapus/{id}','HomestayController@hapus');
Route::get('/homestay/jelajahi','HomestayController@jelajahi');
Route::get('/homestay/cari','HomestayController@cari');

Route::get('/detailHomestay/{id}','HomestayController@detailHomestay');


Route::get('/login',function(){
    return view('/login');
});
Route::get('/homeadmin',function(){
    return view('homeadmin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

//veriv admin
Route::get('/verivAdmin', 'HomestayController@index1');
Route::get('/homestay/edit/{id}','HomestayController@edit1');
Route::post('/homestay/update','HomestayController@update1');
Route::get('/homestay/hapus/{id}','HomestayController@hapus1');
Route::get('/homestay/terima/{id}','HomestayController@verifikasi');

///coba gambar
Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
Route::get('/upload/hapus/{id}', 'UploadController@hapus');


Route::get('/tunnguVerif', function () {
    return view('tunnguVerif');
});
