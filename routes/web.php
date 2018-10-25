<?php
// use DB;
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
//keadaan darurat
Route::get('/flush', function () {
    Session::flush();
    return redirect('/login');
})->name('flush');

//LINKS
Route::group(['middleware' => 'web'], function(){Route::auth();});

Route::get('/home', 'HomeController@index');

Route::get('/',function(){
    return view('selamatdatang');
});

Route::get('/infopegawai',function(){
    return view('infopegawai');
});

Route::get('/infousers',function(){
    return view('infousers');
});

Route::get('/infopengajuan',function(){
    return view('infopengajuan');
});

Route::get('/infopeminjaman',function(){
    return view('infopeminjaman');
});

Route::get('/informasipenting',function(){
    return view('informasipenting');
});

///////////////////////////////////////

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/master', function () {
    return view('master');
});

//PANDUAN
Route::get('/panduanbackup', function () {
    return view('panduan.panduanbackup');
});
Route::get('/panduankelolapegawai', function () {
    return view('panduan.panduankelolapegawai');
});
Route::get('/panduankelolausers', function () {
    return view('panduan.panduankelolausers');
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
    Route::get('/detail/{id}', 'MakalahController@show');
    

    //PEMINJAMAN
    Route::get('/pinjamkti', 'PeminjamanController@index');
    Route::get('/pinjamansaya/{id}', 'PeminjamanController@pinjamansaya');
    Route::get('/bookingkti', 'PeminjamanController@create');
});

//AUTENTIKASI KEPALA PSTNT
Route::group(['middleware'=>['auth','status:Kepala PSTNT']],function(){
    Route::get('/semuamakalah','MakalahController@index');
    //Route::get('/tampilmakalah/{id}', 'MakalahController@makalahsaya');
    Route::get('/detail/{id}', 'MakalahController@show');
    Route::get('/cetaklaporan/{id}', 'LaporanController@cetaklaporan');
    Route::get('pdf',  'LaporanController@makePDF');

    Route::resource('laporan','LaporanController');
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

Route::get('/grafik','grafikController@index');
Route::get('/tampilmakalah/{id}', 'MakalahController@makalahsaya');

//LINK
Route::get('/profil', function () {
    return view('profil');
});

