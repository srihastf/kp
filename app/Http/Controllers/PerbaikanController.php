<?php

namespace App\Http\Controllers;

use App\Perbaikanmodel;
use App\Makalahmodel;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PerbaikanController extends Controller
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
        $data['data']=Perbaikanmodel::get();
        $makalah['makalah']=Makalahmodel::get()->pluck("nomormakalah","judulmakalah");
        return view('perbaikan.tampilperbaikan',$data)
            ->with($makalah);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perbaikan.formtambahperbaikan');
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
                    //->where('tglselesai',null)
                    ->where('judulmakalah','LIKE',"%$search%")
                    ->where('statusp1','LIKE','PERBAIKAN')
                    ->orWhere('statusp2','LIKE','PERBAIKAN')
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
        $statusp1 = null;
        $statusp2 = null;

        if($request->statusp1!="--Pilih--"){
            $statusp1 = $request->statusp1;
        }
        if($request->statusp2!="--Pilih--"){
            $statusp2 = $request->statusp2;
        }

        $validator = Validator::make($request->all(),[
            'nomormakalah'=>'bail|required|string|min:6|max:6',
        ]);

        if($validator->fails()){
            return redirect()->route('perbaikan.create')
            ->withErrors($validator)
            ->withInput();
        }

        Perbaikanmodel::create([
            'nomormakalah'=>$request->nomormakalah,
            'tglperiksap1'=>$request->tglperiksap1,
            'tglperiksap2'=>$request->tglperiksap2,
            'tglselesaip1'=>$request->tglselesaip1,
            'tglselesaip2'=>$request->tglselesaip2,
            'statusp1'=>$statusp1,
            'statusp2'=>$statusp2,
        ]);

        $request->session()->flash('alert-success','Data Perbaikan berhasil ditambahkan.');
        return redirect()->route('perbaikan.show', $request->nomormakalah);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('makalah.show', $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['data']=Perbaikanmodel::find($id);
        $makalah['makalah']=Makalahmodel::Get();
        return view('perbaikan.formubahperbaikan',$data,$makalah);
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
        $perbaikan = Perbaikanmodel::where('idperbaikan',$id)->first();
        $nomakalah = $request->nomormakalah;
        $perbaikan->tglselesaip1 = $request->tglselesaip1;
        $perbaikan->tglselesaip2 = $request->tglselesaip2;
        $perbaikan->statusp1 = $request->statusp1;
        $perbaikan->statusp2 = $request->statusp2;

        $perbaikan->save();

        $request->session()->flash('alert-success','Data Perbaikan KTI berhasil diperbaharui.');
        return redirect()->route('perbaikan.show',$nomakalah);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        Perbaikanmodel::find($id)->delete();
        $max = DB::table('perbaikan')->max('idperbaikan')+1;
        DB::statement("ALTER TABLE perbaikan AUTO_INCREMENT = $max");
        $request->session()->flash('alert-warning','Data Perbaikan berhasil dihapus.');
        return redirect()->route('perbaikan.index');
    }
}
