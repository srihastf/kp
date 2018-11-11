<?php
namespace App\Http\Controllers;

use App\Makalahmodel;
use App\Ktimodel;
use App\Bidangsntmodel;
use App\Subbidmodel;
use App\Pegawaimodel;
use DB;
use Illuminate\Http\Request;
use PDF;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formcarilaporan');
    }

   /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cetaklaporan($id)
    {
        $tahunkti = $id;
        $Data = DB::select("SELECT count(pegawai.bidang) as jumlah, bidang FROM `pegawai` GROUP by pegawai.bidang");
        // print_r(array_column($Data,'jumlah'));

        $data2 = DB::select("SELECT count(makalah.kodesnt) as jumlah2, kodesnt FROM `makalah` WHERE makalah.tgldaftarawal LIKE '%$tahunkti%' GROUP by makalah.kodesnt");
        // print_r(array_column($data2,'jumlah2'));

        // $data3 = DB::select("SELECT count(*) as jumlah3 FROM `makalah` WHERE tglselesai LIKE %$tahunkti% GROUP by kodesnt");
        $data3 = DB::select("SELECT count(makalah.kodesnt) as jumlah3, kodesnt FROM `makalah` WHERE makalah.tglselesai LIKE '%$tahunkti%' GROUP by makalah.kodesnt");
        // print_r(array_column($data3,'jumlah3'));                         

        return view('cetakgrafik',compact('tahunkti'))->with('data', json_encode(array_column($Data,'jumlah')))
        ->with('data2',json_encode(array_column($data2,'jumlah2')))
        ->with('data3',json_encode(array_column($data3,'jumlah3')))
        ->with($tahunkti);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tahunktiawal = $request->tahunktiawal;
        $tahunktiakhir = $request->tahunktiakhir;
        $Data = DB::select("SELECT count(pegawai.bidang) as jumlah, bidang FROM `pegawai` GROUP by pegawai.bidang");
        // print_r(array_column($Data,'jumlah'));

        $data2 = DB::select("SELECT count(makalah.kodesnt) as jumlah2, kodesnt FROM `makalah` WHERE makalah.acckakptf BETWEEN '$tahunktiawal' AND '$tahunktiakhir' GROUP by makalah.kodesnt");
        // print_r(array_column($data2,'jumlah2'));

        // $data3 = DB::select("SELECT count(*) as jumlah3 FROM `makalah` WHERE tglselesai LIKE %$tahunkti% GROUP by kodesnt");
        $data3 = DB::select("SELECT count(makalah.kodesnt) as jumlah3, kodesnt FROM `makalah` WHERE makalah.tglselesai  BETWEEN '$tahunktiawal' AND '$tahunktiakhir' GROUP by makalah.kodesnt");
        // print_r(array_column($data3,'jumlah3'));

        return view('grafik',compact('tahunktiawal','tahunktiakhir'))->with('data', json_encode(array_column($Data,'jumlah')))
                            ->with('data2',json_encode(array_column($data2,'jumlah2')))
                            ->with('data3',json_encode(array_column($data3,'jumlah3')));
    }
}
