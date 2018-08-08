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
    return view('selamatdatang');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/master', function () {
    return view('master');
});

//AUTENTIKASI
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//KTI
Route::resource('kti','KtiController');

//BIDANGSNT
Route::resource('bidangsnt','BidangsntController');

//PEGAWAI
Route::resource('pegawai','PegawaiController');

//MAKALAH
Route::resource('makalah','MakalahController');

//PERBAIKAN MAKALAH
Route::resource('perbaikan','PerbaikanController');
