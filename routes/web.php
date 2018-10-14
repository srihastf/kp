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

//LINKS
Route::group(['middleware' => 'web'], function(){Route::auth();});

Route::get('/home', 'HomeController@index');

Route::get('/',function(){
    return view('selamatdatang');
});

Route::get('/infopegawai',function(){
    return view('home');
});

Route::get('/infouser',function(){
    return view('home');
});

Route::get('/infopengajuan',function(){
    return view('home');
});

Route::get('/infopeminjaman',function(){
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

//AUTENTIKASI ADMIN
Route::group(['middleware' => ['auth','status:Admin']], function(){
    //PEGAWAI
    Route::resource('pegawai','PegawaiController');
    Route::get('/tampilpegawai','PegawaiController@tampil');
    Route::get('subbid/get/{id}', 'PegawaiController@getSubbid');

    //USER
    Route::resource('user','UserController');
    Route::get('/tampiluser','UserController@tampil');
    
});

//AUTENTIKASI SEKERTARIS KPTF/KPTP
Route::group(['middleware'=>['auth','status:Sekertaris KPTF/KPTP']],function(){
    //MAKALAH
    Route::resource('makalah','MakalahController');
    Route::get('mkedit/{id}', 'MakalahController@edit');

    //PERBAIKAN MAKALAH
    Route::resource('perbaikan','PerbaikanController');
});

//AUTENTIKASI PEGAWAI
Route::group(['middleware'=>['auth','status:Pegawai']],function(){
    //MAKALAH
    Route::get('/semuamakalah','MakalahController@index');
    Route::get('/tampilmakalah/{id}', 'MakalahController@makalahsaya');
    Route::get('/detail/{id}', 'MakalahController@show');

    //PEMINJAMAN
    Route::get('/pinjamkti', 'PeminjamanController@index');
    Route::get('/pinjamansaya/{id}', 'PeminjamanController@pinjamansaya');
    Route::get('/bookingkti', 'PeminjamanController@create');
});

//AUTENTIKASI KEPALA PSTNT
Route::group(['middleware'=>['auth','status:Kepala PSTNT']],function(){
    Route::get('/semuamakalah','MakalahController@index');
    Route::get('/tampilmakalah/{id}', 'MakalahController@makalahsaya');
    Route::get('/detail/{id}', 'MakalahController@show');

    Route::resource('laporan','LaporanController');
    Route::get('/carimakalah', 'LaporanController@carimakalah');
    Route::get('pdfmakalah',  'LaporanController@makePDF');
});

//PEMINJAMAN
Route::resource('peminjaman','PeminjamanController');

//KTI
Route::resource('kti','KtiController');

//BIDANGSNT
Route::resource('bidangsnt','BidangsntController');

//getInfo
Route::get('/infomakalah', 'PerbaikanController@getInfo');
Route::get('/infomakalah2', 'PeminjamanController@getInfo');
Route::get('/infouser', 'UserController@getInfo');
Route::get('subbid/get/{id}', 'PegawaiController@getSubbid');

//pdf
Route::get('generate-pdf','HomeController@generatePDF');