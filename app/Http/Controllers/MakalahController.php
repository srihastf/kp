<?php

namespace App\Http\Controllers;

use App\Makalahmodel;
use App\Subbidmodel;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MakalahController extends Controller
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
        $data['data']=Makalahmodel::get();
        return view('makalah.tampilmakalah',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subbid['subbid']=Subbidmodel::Get();
        $bidang = DB::table('bidangsnt')->pluck("kodesnt","namabidang");
        $kti = DB::table('kti')->pluck("kodekti","jeniskti");
        $hitungmakalah = DB::table('makalah')->where('nomormakalah','LIKE',"%".date('Y')."%")->count();
        $n=$hitungmakalah+1;
        if($n<10){
            $nm = "0".$n.date('Y');
        }else{
            $nm = $n.date('Y'); 
        }
        return view('makalah.formmakalah',compact('bidang','kti','nm'),$subbid);
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

        ]);

        if($validator->fails()){
            return redirect()->route('makalah.create')
            ->withError($validator)
            ->withInput();
        }

        if($request->subbid!=null){
            $subidnkelompok = $request->subbid;
        }elseif($request->kelompok!=null){
            $subidnkelompok = $request->kelompok;
        }

        if($request->arsip!=null){
            $arsip = $request->arsip;
        }else{
            $arsip = "TIDAK TERSEDIA";
        }

        if($request->tglaccp1!=null && $request->tglaccp2!=null){
            $statusp1 = $request->statusp1;
            $statusp2 = $request->statusp2;
        }else{
            $statusp1 = null;
            $statusp2 = null;
        }

        Makalahmodel::create([
            'nomormakalah'=>$request->no,
            'kodesnt'=>$request->kodesnt,
            'kodekti'=>$request->kodekti,
            'subidnkelompok'=>$subidnkelompok,
            'judulmakalah'=>$request->judulmakalah,
            'tujuan'=>$request->tujuan,
            'penulis'=>$request->penulis,
            'pemeriksa1'=>$request->pemeriksa1,
            'pemeriksa2'=>$request->pemeriksa2,
            'tgldaftarawal'=>$request->tgldaftarawal,
            'accpsubidkapok'=>$request->accpsubidkapok,
            'accpkabid'=>$request->accpkabid,
            'tglterimap1'=>$request->tglterimap1,
            'tglterimap2'=>$request->tglterimap2,
            'tglaccp1'=>$request->tglaccp1,
            'tglaccp2'=>$request->tglaccp2,
            'statusp1'=>$statusp1,
            'statusp2'=>$statusp2,
            'ttdkakptf'=>$request->ttdkakptf,
            'tglselesai'=>$request->tglselesai,
            'arsip'=>$arsip,
        ]);

        $request->session()->flash('alert-success','Data Makalah berhasil ditambahkan.');
        return redirect()->route('makalah.show', $request->no);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['data']=Makalahmodel::find($id);
        //perbaikan model
		return view('makalah.detailmakalah', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['data']=Makalahmodel::find($id);
        return view('makalah.formeditmakalah',$data);
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
        $makalah = Makalahmodel::where('nomormakalah',$id)->first();
        
        $makalah->judulmakalah = $request->judulmakalah;
        $makalah->tujuan = $request->tujuan;
        $makalah->pemeriksa1 = $request->pemeriksa1;
        $makalah->pemeriksa2 = $request->pemeriksa2;
        $makalah->accpsubidkapok = $request->accpsubidkapok;
        $makalah->accpkabid = $request->accpkabid;
        $makalah->tglterimap1 = $request->tglterimap1;
        $makalah->tglterimap2 = $request->tglterimap2;
        $makalah->tglaccp1 = $request->tglaccp1;
        $makalah->tglaccp2 = $request->tglaccp2;
        $makalah->statusp1 = $request->statusp1;
        $makalah->statusp2 = $request->statusp2;
        $makalah->ttdkakptf = $request->ttdkakptf;
        $makalah->tglselesai = $request->tglselesai;
        $makalah->arsip = $request->arsip;

        $makalah->save();

        $request->session()->flash('alert-success','Data Makalah berhasil diubah.');
		return redirect()->route('makalah.show', $makalah->nomormakalah);
    }

    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Makalahmodel::find($id)->delete();

        $request->session()->flash('alert-warning','Data Makalah berhasil dihapus.');
        return redirect()->route('makalah.index');
    }
}