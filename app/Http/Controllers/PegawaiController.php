<?php

namespace App\Http\Controllers;

use App\Pegawaimodel;
use Illuminate\Http\Request;

class PegawaiController extends Controller
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
        $data['data']=Pegawaimodel::Get();
        return view('tampilpegawai',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formpegawai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pegawaimodel::create([
			'nip' => $request->nip,
			'namapegawai' =>  $request->nama,
            'golongan' => $request->golongan,
            'pendidikanakhir'=>$request->pendidikanakhir,
            'jurusan'=>$request->jurusan,
            'jabatan'=>$request->jabatan,
            'status'=>$request->status
                ]);
        return redirect()->route('pegawai.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['data']=Pegawaimodel::find($id);
		return view('detailpegawai', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['data']=Pegawaimodel::find($id);
        return view('formeditpegawai', $data);
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
        Pegawaimodel::find($id)->update(['namapegawai'=>$request->nama]);
        Pegawaimodel::find($id)->update(['golongan'=>$request->golongan]);
        Pegawaimodel::find($id)->update(['pendidikanakhir'=>$request->pendidikanakhir]);
        Pegawaimodel::find($id)->update(['jurusan'=>$request->jurusan]);
        Pegawaimodel::find($id)->update(['jabatan'=>$request->jabatan]);
        Pegawaimodel::find($id)->update(['status'=>$request->status]);
		return redirect()->route('pegawai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $temp=Pegawaimodel::find($id)->value('nip');
        Pegawaimodel::find($id)->delete();

        return redirect()->route('pegawai.index',$temp)->with('message', 'Data berhasil di hapus');
    }
}
