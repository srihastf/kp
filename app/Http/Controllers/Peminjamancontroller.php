<?php

namespace App\Http\Controllers;

use App\Peminjamanmodel;
use App\Pegawaimodel;
use App\Makalahmodel;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PeminjamanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data']=Peminjamanmodel::get();
        $pegawai['pegawai']=Pegawaimodel::get()->pluck("nip","namapegawai");
        $makalah['makalah']=Makalahmodel::get()->pluck("nomormakalah","judulmakalah");
        return view('peminjaman.tampilpeminjaman',$data)
        ->with($pegawai)
        ->with($makalah);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pinjamansaya($id)
    {
        $data['data']=Peminjamanmodel::where('nip',$id)->get();
        $pegawai['pegawai']=Pegawaimodel::get()->pluck("nip","namapegawai");
        $makalah['makalah']=Makalahmodel::get()->pluck("nomormakalah","judulmakalah");
        return view('peminjaman.tampilpeminjaman',$data)
        ->with($pegawai)
        ->with($makalah);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peminjaman.formtambahpeminjaman');
    }

            /**
     * Show the application dataAjax.
     *
     * @return \Illuminate\Http\Response
     */
    public function getInfo(Request $request)
    {
        $data = [];
        
        if($request->has('q')){
            $search = $request->q;
            //$data = DB::table("pegawai")
            $data = Makalahmodel::Select("nomormakalah","judulmakalah")
                    ->where('arsip',"TERSEDIA")
            		->get();
        }
        return response()->json($data);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nomormakalah'=>'bail|required|string|min:6|max:6',
        ]);

        if($validator->fails()){
            return redirect()->route('peminjaman.create')
            ->withErrors($validator)
            ->withInput();
        }

        Peminjamanmodel::create([
            'nomormakalah'=>$request->nomormakalah,
            'nip'=>$request->nip,
            'tglbooking'=>$request->tglbooking,
            'status'=>$request->status,
            'tglpinjam'=>$request->tglpinjam,
            'tglkembali'=>$request->tglkembali,
        ]);

        $request->session()->flash('alert-success','Data Peminjaman berhasil ditambahkan.');
        return redirect()->route('peminjaman.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['data']=Peminjamanmodel::find($id);
        $makalah['makalah']=Makalahmodel::get()->pluck("nomormakalah","judulmakalah","kodesnt","kodekti");
        $maka['maka']=Makalahmodel::get();
        $pegawai['pegawai']=Pegawaimodel::get()->pluck("nip","namapegawai");
        return view('peminjaman.detailpeminjaman', $data)
            ->with($makalah)
            ->with($maka)
            ->with($pegawai);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['data']=Peminjamanmodel::find($id);
        $makalah['makalah']=Makalahmodel::Get();
        return view('peminjaman.formubahpeminjaman',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $peminjaman = Peminjamanmodel::where('idpinjam',$id)->first();
        $peminjaman->tglpinjam = $request->tglpinjam;
        $peminjaman->tglkembali = $request->tglkembali;
        $peminjaman->status = $request->status;
        $mk = $request->nomormakalah;

        $peminjaman->save();
        //DB::statement("UPDATE makalah SET arsip=TERSEDIA where nomormakalah=$mk");
        DB::update('update makalah set arsip = "TERSEDIA" where nomormakalah = ?', [$mk]);
        $request->session()->flash('alert-success','Data Perminjaman KTI berhasil diperbaharui.');
        return redirect()->route('peminjaman.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Peminjamanmodel::find($id)->delete();
        $max = DB::table('pinjamkti')->max('idpinjam')+1;
        DB::statement("ALTER TABLE pinjamkti AUTO_INCREMENT = $max");
        $request->session()->flash('alert-warning','Data Peminjaman berhasil dihapus.');
        return redirect()->route('peminjaman.index');
    }
}
