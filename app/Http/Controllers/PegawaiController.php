<?php

namespace App\Http\Controllers;

use App\Pegawaimodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        return view('kelolapegawai');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampil()
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

        $validator= Validator::make($request->all(),[
            'nip' => 'bail|required|string|min:21|max:21|unique:pegawai',
            'nama' => 'required|string|max:30',
            'golongan' => 'required|string|min:3|max:5',
            'pendidikanakhir' => 'required|string|max:3',
            'jurusan' => 'required|string|max:40',
            'jabatan' => 'required|string|max:40',
            'status' => 'required|string|max:21',
        ]);

        if($validator->fails()){
            return redirect()->route('pegawai.create')
            ->withErrors($validator)
            ->withInput();
        }

        Pegawaimodel::create([
			'nip' => $request->nip,
			'namapegawai' =>  $request->nama,
            'golongan' => $request->golongan,
            'pendidikanakhir'=>$request->pendidikanakhir,
            'jurusan'=>$request->jurusan,
            'jabatan'=>$request->jabatan,
            'status'=>$request->status
        ]);

        $request->session()->flash('alert-success','Data Pegawai berhasil ditambahkan.');
        return redirect()->route('pegawai.show', $request->nip);
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
        $this->validate($request,[
            'nama' => 'required|string|max:30',
            'golongan' => 'required|string|min:3|max:5',
            'pendidikanakhir' => 'required|string|max:3',
            'jurusan' => 'required|string|max:40',
            'jabatan' => 'required|string|max:40',
            'status' => 'required|string|max:21',
        ]);

        $pegawai = Pegawaimodel::where('nip',$id)->first();
        $pegawai->namapegawai = $request->nama;
        $pegawai->golongan = $request->golongan;
        $pegawai->pendidikanakhir = $request->pendidikanakhir;
        $pegawai->jurusan = $request->jurusan;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->status = $request->status;
        $pegawai->save();

        $request->session()->flash('alert-success','Data Pegawai berhasil diubah.');
		return redirect()->route('pegawai.show', $pegawai->nip);
    } 

    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Pegawaimodel::find($id)->delete();

        $request->session()->flash('alert-warning','Data Pegawai berhasil dihapus.');
        return redirect('/tampilpegawai');
    }
}
