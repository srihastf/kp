<!DOCTYPE html>
<html>
    <head>
        <title>Form Perkembangan Pengajuan Makalah/KTI</title>
        <style>
            table{
                border:0; 
            }

            th, td {
                padding: 1px;
            }
        </style>
    </head>
    <body>
    <font size="3" face="Times New Roman" >
    <table border="0" cellspacing="0"  >
        <tr><td></td><td></td><td>Lampiran 1</td></tr>
        <tr>
            <td width="100px" align="center" style="border-bottom: 0 solid black;"><img src="{{ asset('img/Logo_Baru_BATAN.png') }}" style="width:90px"></td>
            <td width="510px" colspan="0" align="center" style="border-bottom: 0 solid black;"><b><h2>BADAN TENAGA NUKLIR NASIONAL</h2>
            <small>PUSAT SAINS DAN TEKNOLOGI NUKLIR TERAPAN<br/>Jl.Tamansari No.71 Bandung 40132<br/></small>
            </td>
            <td style="border-bottom: 0 solid black;"></td>
        </tr>   
    </table>
    <table border="1" style="border: 2px solid black;" cellspacing="0" style="border:1 solid black;" >
        <tr>
            <td colspan="2" style="border: 2px solid black;" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FORMULIR USULAN PEMERIKSAAN KARYA TULIS ILMIAH / MAKALAH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2" style="border: 2px solid black;">
                <table>
                    <tr>
                        <td>1.</td>
                        <td>Judul</td>
                        <td>:</td>
                        <td width="476px">{{$data->judulmakalah}}</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Jenis Karangan</td>
                        <td>:</td>
                        <td>@foreach ($kti as $s => $key)@if($key==$data->kodekti){{$s}}@endif @endforeach</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Penulis</td>
                        <td>:</td>
                        <td>{{ $data->penulis }}</td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Sub. Bidang / Kelompok</td>
                        <td>:</td>
                        <?php $subidnkelompok=$data->subidnkelompok;?>
                        @foreach ($subbid as $s => $key)@if($key==$data->subidnkelompok) <?php $subidnkelompok = $s;?> @endif @endforeach
                        <td>{{$subidnkelompok}}</td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Bidang/Balai/Instalasi</td>
                        <td>:</td>
                        <td>@foreach ($bidang as $s => $key)@if($key==$data->kodesnt) {{$s}} @endif @endforeach</td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>Untuk diterbitkan/disajikan</td>
                        <td>:</td>
                        <td>{{ $data->tujuan }}</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="border: 2px solid black;" colspan="4">No. Makalah : {{substr($data->nomormakalah,0,2)}}/{{$data->kodesnt}}/{{$data->kodekti}}/{{substr($data->tgldaftarawal,0,4)}}</td>
        </tr>
        <tr>
            <td style="border: 2px solid black;" width="260px">
                <b>Ka. Subbid. / Kelompok : </b><br/><br/>
                <i>SETUJU/TIDAK SETUJU</i><br/>
                KOMENTAR : ....................................<br/>
                .............................................................<br/>
                <b>Tanda Tangan : </b>........ Tgl : {{formatgl($data->accpsubidkapok)}}<br/>
            </td>
            <td style="border: 2px solid black;">
                - Dikirim ke Sek. KPTF/KPTP, Tgl&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{formatgl($data->tglkesekertaris) }}<br/>
                - Diterima Ka. KPTF/KPTP, Tgl&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{formatgl($data->tglkekakptf)}}<br/>
                - Nama Pemeriksa : 1. @if($data->pemeriksa1!="") @foreach ($pegawai as $s => $key)@if($key==$data->pemeriksa1){{$s}}@endif @endforeach @endif<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. @if($data->pemeriksa2!="") @foreach ($pegawai as $s => $key)@if($key==$data->pemeriksa2){{$s}}@endif @endforeach @endif<br/><br/>
                - Paraf Ka.KPTF/KPTP : ......................Tgl : {{formatgl($data->acckakptf) }}
            </td>
        </tr>
        <tr>
            <td style="border: 2px solid black;">
                <b>Ka. Bidang : @foreach ($bidang as $s => $key)@if($key==$data->kodesnt) {{$s}} @endif @endforeach</b><br/><br/>
                <i>SETUJU/TIDAK SETUJU</i><br/>
                KOMENTAR : ....................................<br/>
                .............................................................<br/>
                <b>Tanda Tangan : </b>........ Tgl : {{formatgl($data->accpkabid) }}<br/><br/>
            </td>
            <td style="border: 2px solid black;">
                Diterima Pemeriksa 1 Tgl. (*) {{formatgl($data->tglterimap1 )}}<br/>
                CATATAN PEMERIKSA 1 : {{$data->cttp1}}..................<br/>
                ..........................................{{$data->statusp1}}............................................<br/>
                Persetujuan Pemeriksa 1 : Paraf..........................Tgl : {{$data->tglaccp1 }}<br/>
                <br/>
                Diterima Pemeriksa 2 Tgl. (*) {{formatgl($data->tglterimap2 )}}<br/>
                CATATAN PEMERIKSA 2 : {{$data->cttp2}}.......................<br/>
                ..........................................{{$data->statusp2}}............................................<br/>
                Persetujuan Pemeriksa 2 : Paraf..........................Tgl : {{$data->tglaccp2 }}<br/>
                <br/>
                Dikembalikan ke Sek.KPTF/KPTP,Tgl : ......................................<br/>
            </td>
        </tr>
        <tr>
            <td style="border: 2px solid black;" align="center">
                <b>Kepala PSTNT</b><br/>
                <br/>
                <br/>
                <br/>
                <b>
                    <!--<u>Dr.JUPITER SITORUS PANE, M.Sc</u><br/>-->
                    @foreach ($pegawai2 as $s)@if($s->jabatan=="Kepala PSTNT")<u>{{$s->namapegawai}}</u><br/> NIP. {{$s->nip}}@endif @endforeach
                </b>
            </td>
            <td width="200px" style="border-right: 2px solid black;border-left: 2px solid black;border-top: 2px solid black;border-bottom:0;">
                - Diterima Sek. KPTF/KPTP,dari Pemeriksa 1 Tgl : {{$data->tgltrmsekertarisp1}}<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dari Pemeriksa 2 Tgl : {{$data->tgltrmsekertarisp2}}<br/>
                - CATATAN Ketua. KPTF/KPTP(**)<br/>
                <i>
                1. DISETUJUI / TIDAK DISETUJUI<br/>
                2. HARUS DIPERBAIKI<br/>
                3. PENGARAHAN:
                </i>
                .............................................................<br/>
                .............................................................................................<br/>
            </td>
        </tr>
        <tr>
            <td style="border: 2px solid black;">
                <i><u>Catatan</u> :</i> ..........................................<br/>
                ..........................................................<br/>
                ..........................................................<br/>
            </td>
            <td style="border-right: 2px solid black;border-left: 2px solid black;border-bottom: 2px solid black;border-top:0;" align="right">
                <b>Ketua KPTF/KPTP, PSTNT, BATAN,</b><br/>
                <br/>
                <br/>
                <br/>
                <b>
                   @foreach ($pegawai2 as $s)@if(stripos($s->jabatan,"Kepala KPTF/KPTP")==TRUE)<u>{{$s->namapegawai}}</u><br/> NIP. {{$s->nip}} &nbsp;&nbsp;&nbsp;&nbsp;@endif @endforeach
                </b>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="border: 2px solid black;padding:2px;">PERSETUJUAN KABID/BALAI, BILA MAKALAH AKAN DISEMINARKAN. PARAF : ..............</td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:12px;border: 2px solid black;padding:2px;">
                <i><u>CATATAN : </u><br/>
                    1. FORMULIR dikembalikan bersama makalah (RANGKAP 2) yang telah diperbaiki;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(*) Diisi oleh Sek.KPTF/KPTP.<br/>
                    2. FORMULIR dilampirkan bila mengisi form C, mengisi SPPD; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(**) Diisi oleh Ka.KPTF/KPTP.<br/>
                    3. FORMULIR dilampirkan bila makalah akan diterbitkan di Majalah;<br/>
                    4. FORMULIR dilampirkan bila makalah akan diterbitkan diseminarkan;<br/>
                </i>
            </td>
        </tr>
    </table>
    <table>
    </table>
    </font>
    </font>
    </body>
</html>

<?php
function formatgl($tanggal){
  $date = date_create($tanggal);
  echo date_format($date,"d-m-Y");
}
?>