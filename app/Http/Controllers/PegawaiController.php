<?php

namespace App\Http\Controllers;

use App\Pegawaimodel;
use App\Subbidmodel;
use App\Bidangsntmodel;
use DB;
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
        return view('pegawai.kelolapegawai');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampil()
    {
        $data['data']=Pegawaimodel::Get();
        return view('pegawai.tampilpegawai',$data);
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subbid['subbid']=Subbidmodel::Get();
        $bidang['bidang']=Bidangsntmodel::Get()->pluck("kodesnt","namabidang");
        //$bidang = DB::table('bidangsnt')->pluck("kodesnt","namabidang");
        //return view('pegawai.formpegawai',compact('bidang'),$subbid);
        return view('pegawai.formtambahpegawai',$subbid,$bidang);
    }

    public function getSubbid($id) {
        $subbid = DB::table("subbidang")->where("kodesnt",$id)->pluck("kodesubid","namasubid");
        return json_encode($subbid);
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
            'nip' => 'bail|required|string|min:5|max:21|unique:pegawai',
            'nama' => 'required|string|max:40',
            'pendidikanakhir' => 'required|string|max:3',
            'jurusan' => 'string|max:40',
            'jabatan' => 'required|string|max:40',
            'status' => 'required|string|max:21',
        ]);

        if($validator->fails()){
            return redirect()->route('pegawai.create')
            ->withErrors($validator)
            ->withInput();
        }
        
        if($request->bidang=="---Pilih Bidang---"){
            $bidang=null;
        }else{
            $bidang=$request->bidang;
        }

        if($request->subbid=="---Pilih Sub.Bidang---"){
            $isisubbid=null;
        }else{
            $isisubbid=$request->subbid;
        }

        Pegawaimodel::create([
            'nip' => $request->nip,
            'bidang'=>$bidang,
            'subbid'=>$isisubbid,
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
        $bidang = DB::table("bidangsnt")
            		->select("kodesnt","namabidang")
                    ->pluck("kodesnt","namabidang");
        $subbids = DB::table("subbidang")
            		->select("kodesubid","namasubid")
                    ->pluck("kodesubid","namasubid");
		return view('pegawai.detailpegawai', $data,compact('bidang','subbids'));
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
        $subbid['subbid']=Subbidmodel::Get();
        $bidang = DB::table('bidangsnt')->pluck("kodesnt","namabidang");
        return view('pegawai.formubahpegawai', $data,compact('bidang'),$subbid);
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
            'bidang' => 'required|string|max:5',
            'subbid' => 'string|max:15',
            'nama' => 'required|string|max:40',
            'pendidikanakhir' => 'required|string|max:3',
            'jurusan' => 'string|max:40',
            'jabatan' => 'required|string|max:40',
            'status' => 'required|string|max:21',
        ]);

        $pegawai = Pegawaimodel::where('nip',$id)->first();
        
        $pegawai->bidang = $request->bidang;
        $pegawai->subbid = $request->subbid;
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
