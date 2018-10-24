<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class grafikController extends Controller
{
    public function index(){

        $Data = DB::select("SELECT count(pegawai.bidang) as jumlah, bidang FROM `pegawai` GROUP by pegawai.bidang");
        // print_r(array_column($Data,'jumlah'));

        $data2 = DB::select("SELECT count(makalah.kodesnt) as jumlah2, kodesnt FROM `makalah` GROUP by makalah.kodesnt");
        // print_r(array_column($data2,'jumlah2'));

        $data3 = DB::select("SELECT count(*) as jumlah3 FROM `makalah` WHERE tglselesai NOT LIKE '%0000%' GROUP by kodesnt");
        // print_r(array_column($data3,'jumlah3'));

        return view('grafikpublik')->with('data', json_encode(array_column($Data,'jumlah')))
                            ->with('data2',json_encode(array_column($data2,'jumlah2')))
                            ->with('data3',json_encode(array_column($data3,'jumlah3')));

    }
}
