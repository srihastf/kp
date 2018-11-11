<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LogbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formbuatlogbook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function makeLogbook(Request $request){
        $tahunktiawal = $request->tahunktiawal;
        $tahunktiakhir = $request->tahunktiakhir;

        $dataLogbook = DB::select("SELECT * FROM `makalah` WHERE makalah BETWEEN '$tahunktiawal' AND '$tahunktiakhir'");

    }
}
