<?php

namespace App\Http\Controllers;

use App\Penggunamodel;
use App\Pegawaimodel;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PenggunaController extends Controller
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
        return view('pengguna.kelolapengguna');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampil()
    {
        $data['data']=Penggunamodel::Get();
        return view('pengguna.tampilpengguna',$data);
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
            $data = Pegawaimodel::Select("nip","namapegawai")
            		->where('namapegawai','LIKE',"%$search%")
            		->get();
        }
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$data['data']=User::get();
        //return view('pengguna.formpengguna',$data);
        $data['data']=Penggunamodel::get();
        return view('pengguna.formpengguna');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $search = $request->nip;
        $data = DB::table("pegawai")
            		->select("nip","namapegawai")
            		->where('nip',$search)
                    ->first();
                    
        $validator = Validator::make($request->all(),[
            'nip'=>'required|string|min:21|max:21|unique:users',
            'email'=>'required|email|unique:users',
            'status'=>'required|string|max:30',
        ]);

        if($validator->fails()){
            return redirect()->route('pengguna.create')
            ->withErrors($validator)
            ->withInput();
        }

        Penggunamodel::create([
            'nip'=>$request->nip,
            'name'=>$data->namapegawai,
            'email'=>$request->email,
            'status'=>$request->status,
            'password'=>Hash::make($request->password),
        ]);

        $request->session()->flash('alert-success','Data Pengguna berhasil ditambahkan.');
        return redirect('/tampilpengguna');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['data']=Penggunamodel::find($id);
		return view('pengguna.detailpengguna', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['data']=Penggunamodel::find($id);
        return view('pengguna.formeditpengguna', $data);
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
        $pengguna = Penggunamodel::where('id',$id)->first();
        $pengguna->name = $request->name;
        $pengguna->nip = $request->nip;
        $pengguna->email = $request->email;
        $pengguna->status = $request->status;
        $pengguna->password = Hash::make($request->password);
        $pengguna->save();

        $request->session()->flash('alert-success','Data Pengguna berhasil diubah.');
		return redirect()->route('pengguna.show', $id);
    } 

    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Penggunamodel::find($id)->delete();

        $request->session()->flash('alert-warning','Data Pengguna berhasil dihapus.');
        return redirect('/tampilpengguna');
    }
}
