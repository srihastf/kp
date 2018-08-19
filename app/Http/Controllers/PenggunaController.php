<?php

namespace App\Http\Controllers;

use App\User;
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
        return view('kelolapengguna');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampil()
    {
        $data['data']=User::Get();
        return view('tampilpengguna',$data);
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
            $data = DB::table("pegawai")
            		->select("nip","namapegawai")
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
        $data['data']=User::get();
        return view('formpengguna',$data);
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

        User::create([
            'nip'=>$request->nip,
            'name'=>$data->namapegawai,
            'email'=>$request->email,
            'status'=>$request->status,
            'password'=>Hash::make("batan"), //(pass awal / default)
        ]);

        $request->session()->flash('alert-success','Data Pengguna berhasil ditambahkan.');
        return redirect()->route('pegawai.show',$request->nip);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['data']=User::find($id);
		return view('detailpengguna', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['data']=User::find($id);
        return view('formeditpengguna', $data);
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
            'email'=>'required|email|unique:users',
            'status'=>'required|string|max:30',
        ]);

        $pengguna = User::where('nip',$id)->first();
        $pengguna->email = $request->email;
        $pengguna->status = $request->status;
        $pengguna->save();

        $request->session()->flash('alert-success','Data Pengguna berhasil diubah.');
		return redirect()->route('pengguna.show', $pegawai->nip);
    } 

    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        User::find($id)->delete();

        $request->session()->flash('alert-warning','Data Pengguna berhasil dihapus.');
        return redirect('/tampilpengguna');
    }
}
