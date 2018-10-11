<?php

namespace App\Http\Controllers;

use App\Usermodel;
use App\Pegawaimodel;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
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
        return view('user.kelolauser');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampil()
    {
        $data['data']=Usermodel::Get();
        return view('user.tampiluser',$data);
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
        $data['data']=Usermodel::get();
        return view('user.formuser');
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
            return redirect()->route('user.create')
            ->withErrors($validator)
            ->withInput();
        }

        Usermodel::create([
            'nip'=>$request->nip,
            'name'=>$data->namapegawai,
            'email'=>$request->email,
            'status'=>$request->status,
            'password'=>Hash::make($request->password),
        ]);

        $request->session()->flash('alert-success','Data Pengguna berhasil ditambahkan.');
        return redirect('/tampiluser');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['data']=Usermodel::find($id);
		return view('user.detailuser', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['data']=Usermodel::find($id);
        return view('user.formedituser', $data);
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
        $user = Usermodel::where('id',$id)->first();
        $user->name = $request->name;
        $user->nip = $request->nip;
        $user->email = $request->email;
        $user->status = $request->status;
        $user->password = Hash::make($request->password);
        $user->save();

        $request->session()->flash('alert-success','Data User berhasil diubah.');
		return redirect()->route('user.show', $id);
    } 

    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Usermodel::find($id)->delete();
        $max = DB::table('users')->max('id')+1;
        DB::statement("ALTER TABLE users AUTO_INCREMENT = $max");
        $request->session()->flash('alert-warning','Data User berhasil dihapus.');
        return redirect('/tampiluser');
    }
}
