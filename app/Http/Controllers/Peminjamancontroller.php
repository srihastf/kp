<?php

namespace App\Http\Controllers;

use App\Peminjamanmodel;
use Illuminate\Http\Request;

class Peminjamancontroller extends Controller
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
        return view('peminjaman.tampilpeminjaman',$data);
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
            'idpinjam'=>$request->idpinjam,
            'nomormakalah'=>$request->nomormakalah,
            'nip'=>$request->nip,
            'tglbooking'=>$request->tglbooking,
            'status'=>$request->status,
            'tglpinjam'=>$request->tglpinjam,
            'tglkembali'=>$request->tglkembali,
        ]);

        $request->session()->flash('alert-success','Data Peminjaman berhasil ditambahkan.');
        return redirect()->route('peminjaman.show', $request->idpinjam);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('Peminjaman.show', $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['data']=Peminjamannmodel::find($id);
        $makalah['makalah']=Makalahmodel::Get();
        return view('perbaikan.formeditpeminjaman',$data,$makalah);
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
        $peminjaman->tglbooking = $request->tglbooking;
        $peminjaman->tglpinjam = $request->tglpinjam;
        $peminjaman->tglkembali = $request->tglkembali;
        $peminjaman->status = $request->status;

        $peminjaman->save();

        $request->session()->flash('alert-success','Data Perminjaman KTI berhasil diperbaharui.');
        return redirect()->route('peminjaman.show',$nomakalah);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Peminjamanmodel::find($id)->delete();

        $request->session()->flash('alert-warning','Data Peminjaman berhasil dihapus.');
        return redirect()->route('peminjaman.index');
    }
}
