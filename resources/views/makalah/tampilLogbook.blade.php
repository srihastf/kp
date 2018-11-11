<!DOCTYPE html>
<html>
    <head>
        <title>Logbook Tahun {{$tahunkti}}</title>
        <style>
            table{
                border : 3px solid;
            }
        </style>
    </head>
    <body>
    <table border=1>
        <thead>
            <tr>
                <td width="150px" align="center"><img src="{{ asset('img/Logo_Baru_BATAN.png') }}" style="width:90px"></td>
                <td colspan="10" align="center"><b><h2>BADAN TENAGA NUKLIR NASIONAL</h2>
                <small>PUSAT SAINS DAN TEKNOLOGI NUKLIR TERAPAN<br/>Jl.Tamansari No.71 Bandung 40132<br/><br/></small>
                <small>Periode : {{$tahunkti}}</small></b>
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Nomor Makalah</th>
                <th width="300px">Judul Makalah</th>
                <th width="100px">Penulis</th>
                <th>Pemeriksaan</th>
            </tr>
        @foreach($data as $d)
            <tr>
                <td>{{substr($d->nomormakalah,0,2)}}/{{$d->kodesnt}}/{{$d->kodekti}}/{{substr($d->tgldaftarawal,0,4)}}</a></td>
                <td>{{$d->judulmakalah}}<br/><br/>
                    Ditujukan untuk : <b>{{$d->tujuan}}</b></td>
                <td>{{$d->penulis}}</td>
                <td>Tanggal Daftar : {{$d->tgldaftarawal}}<br/></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </body>
</html>