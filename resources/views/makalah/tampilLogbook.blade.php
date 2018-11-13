@extends('master')
@section('title','Form Cari Logbook')

 <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Logbook Perkembangan Pengajuan Makalah
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i> Beranda</a></li>
        </li>
        <li class="breadcrumb-item active">@yield('title')</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content justify-center">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              @if($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
            </div>
            <!-- /.box-header -->
            
            <table class="table table-bordered table-striped" style="font-size:14px">
                <tr>
                    <td width="150px" align="center" style="border-bottom: 2px solid black;"><img src="{{ asset('img/Logo_Baru_BATAN.png') }}" style="width:90px"></td>
                    <td colspan="7" align="center" style="border-bottom: 2px solid black;"><b><h2>BADAN TENAGA NUKLIR NASIONAL</h2>
                    <small>PUSAT SAINS DAN TEKNOLOGI NUKLIR TERAPAN<br/>Jl.Tamansari No.71 Bandung 40132<br/><br/></small>
                    <small>Periode : {{$tahunkti}}</small></b></td>
                    <td style="border-bottom: 2px solid black;">
                    <form class="form" method="POST" action="exportLogbook">
                    {{ csrf_field() }}
                    <input type="hidden" class="form-control" name="tahunkti" value="{{$tahunkti}}" hide>
                    <button type="submit" class="btn btn-success">PDF</button>
                    </form>
                    </td>
                </tr>      
                <tr style="background:lightgray">
                    <th rowspan="2" style="border-bottom: 2px solid black;">Nomor Makalah</th>
                    <th rowspan="2" style="border-bottom: 2px solid black;" width="300px">Judul Makalah</th>
                    <th rowspan="2" style="border-bottom: 2px solid black;" width="100px">Penulis</th>
                    <th colspan="4">Perkembangan Pemeriksaan</th>
                    <th rowspan="2" style="border-bottom: 2px solid black;">Keterangan</th>
                    <th rowspan="2" style="border-bottom: 2px solid black;">Status</th>
                </tr>
                <tr style="background:lightgray">
                    <td style="border-bottom: 2px solid black;"><b>No</b></td>
                    <td style="border-bottom: 2px solid black;"><b>Mulai</b></td>
                    <td style="border-bottom: 2px solid black;"><b>Pemeriksa</b></td>
                    <td style="border-bottom: 2px solid black;"><b>Selesai</b></td>
                </tr>

                @foreach($data as $d)
                    @if($d->statusp1=="ACC" || $d->statusp2=="ACC")
                    <tr>
                        <td rowspan="6" style="border-bottom: 2px solid black;">{{substr($d->nomormakalah,0,2)}}/{{$d->kodesnt}}/{{$d->kodekti}}/{{substr($d->tgldaftarawal,0,4)}}</a></td>
                        <td rowspan="6" style="border-bottom: 2px solid black;">{{$d->judulmakalah}}<br/><br/>
                            Ditujukan untuk : <b>{{$d->tujuan}}</b></td>
                        <td rowspan="6" style="border-bottom: 2px solid black;">{{$d->penulis}}</td>

                        <td></td>
                        <td><b>Daftar : {{formatgl($d->tgldaftarawal)}}</b><br/></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>{{formatgl($d->tglterimap1)}}</td>
                        <td>@if($d->pemeriksa1!="") @foreach ($pegawai as $s => $key)@if($key==$d->pemeriksa1){{$s}}@endif @endforeach @endif</td>
                        <td>{{formatgl($d->tglaccp1)}}</td>
                        <td>{{$d->cttp1}}</td>
                        <td>{{$d->statusp1}}</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>{{formatgl($d->tglterimap2)}}</td>
                        <td>@if($d->pemeriksa2!="") @foreach ($pegawai as $s => $key)@if($key==$d->pemeriksa2){{$s}}@endif @endforeach @endif</td>
                        <td>{{formatgl($d->tglaccp2)}}</td>
                        <td>{{$d->cttp2}}</td>
                        <td>{{$d->statusp2}}</td>
                    </tr>
                    <tr>
                        <td>-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>{{formatgl($d->ttdkakptf)}}</td>
                        <td></td>
                        <td>Ketua KPTF/KPTP</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="border-bottom: 2px solid black;"></td>
                        <td style="border-bottom: 2px solid black;">{{formatgl($d->tglselesai)}}</td>
                        <td style="border-bottom: 2px solid black;"></td>
                        <td style="border-bottom: 2px solid black;">Kepala PSTNT</td>
                        <td style="border-bottom: 2px solid black;"></td>
                        @if($d->tglselesai!=null)
                            <td style="border-bottom: 2px solid black;">Selesai</td>
                        @else <td style="border-bottom: 2px solid black;"></td>
                        @endif
                    </tr>
                    @else
                    <tr>
                        <td rowspan="10" style="border-bottom: 2px solid black;">{{substr($d->nomormakalah,0,2)}}/{{$d->kodesnt}}/{{$d->kodekti}}/{{substr($d->tgldaftarawal,0,4)}}</a></td>
                        <td rowspan="10" style="border-bottom: 2px solid black;">{{$d->judulmakalah}}<br/><br/>
                            Ditujukan untuk : <b>{{$d->tujuan}}</b></td>
                        <td rowspan="10" style="border-bottom: 2px solid black;">{{$d->penulis}}</td>

                        <td></td>
                        <td><b>Daftar : {{formatgl($d->tgldaftarawal)}}</b><br/></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>{{formatgl($d->tglterimap1)}}</td>
                        <td>@if($d->pemeriksa1!="") @foreach ($pegawai as $s => $key)@if($key==$d->pemeriksa1){{$s}}@endif @endforeach @endif</td>
                        <td>{{formatgl($d->tglaccp1)}}</td>
                        <td>{{$d->cttp1}}</td>
                        <td>{{$d->statusp1}}</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>{{formatgl($d->tglterimap2)}}</td>
                        <td>@if($d->pemeriksa2!="") @foreach ($pegawai as $s => $key)@if($key==$d->pemeriksa2){{$s}}@endif @endforeach @endif</td>
                        <td>{{formatgl($d->tglaccp2)}}</td>
                        <td>{{$d->cttp2}}</td>
                        <td>{{$d->statusp2}}</td>
                    </tr>
                    <tr>
                        <td>-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>@foreach ($perbaikan as $s)@if($s->nomormakalah==$d->nomormakalah){{formatgl($s->tglperiksap1)}}@endif @endforeach </td>
                        <td>@if($d->pemeriksa1!="") @foreach ($pegawai as $s => $key)@if($key==$d->pemeriksa1){{$s}}@endif @endforeach @endif</td>
                        <td>@foreach ($perbaikan as $s)@if($s->nomormakalah==$d->nomormakalah){{formatgl($s->tglselesaip1)}}@endif @endforeach </td>
                        <td></td>
                        <td>@foreach ($perbaikan as $s)@if($s->nomormakalah==$d->nomormakalah){{$s->statusp1}}@endif @endforeach </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>@foreach ($perbaikan as $s)@if($s->nomormakalah==$d->nomormakalah){{formatgl($s->tglperiksap2)}}@endif @endforeach </td>
                        <td>@if($d->pemeriksa2!="") @foreach ($pegawai as $s => $key)@if($key==$d->pemeriksa2){{$s}}@endif @endforeach @endif</td>
                        <td>@foreach ($perbaikan as $s)@if($s->nomormakalah==$d->nomormakalah){{formatgl($s->tglselesaip2)}}@endif @endforeach </td>
                        <td></td>
                        <td>@foreach ($perbaikan as $s)@if($s->nomormakalah==$d->nomormakalah){{$s->statusp2}}@endif @endforeach </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>@if($s->tglperiksakapstnt!==null) @foreach ($perbaikan as $s)@if($s->nomormakalah==$d->nomormakalah){{formatgl($s->tglperiksakapstnt)}}@endif @endforeach @endif</td>
                        <td>Kepala PSTNT</td>
                        <td>@if($s->tglperiksakapstnt!==null) @foreach ($perbaikan as $s)@if($s->nomormakalah==$d->nomormakalah){{formatgl($s->tglselesaikapstnt )}}@endif @endforeach @endif</td>
                        <td></td>
                        <td>@foreach ($perbaikan as $s)@if($s->nomormakalah==$d->nomormakalah){{$s->statuskapstnt }}@endif @endforeach </td>
                    </tr>
                    <tr>
                        <td>-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>{{formatgl($d->ttdkakptf)}}</td>
                        <td></td>
                        <td>Ketua KPTF/KPTP</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="border-bottom: 2px solid black;"></td>
                        <td style="border-bottom: 2px solid black;">{{formatgl($d->tglselesai)}}</td>
                        <td style="border-bottom: 2px solid black;"></td>
                        <td style="border-bottom: 2px solid black;">Kepala PSTNT</td>
                        <td style="border-bottom: 2px solid black;"></td>
                        @if($d->tglselesai!=null)
                            <td style="border-bottom: 2px solid black;">Selesai</td>
                        @else <td style="border-bottom: 2px solid black;"></td>
                        @endif
                    </tr>
                    @endif
                @endforeach
            </table>
                    
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('jsstyle')

<?php
function formatgl($tanggal){
  $date = date_create($tanggal);
  echo date_format($date,"d-m-Y");
}
?>

<script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>
<script type="text/javascript">
$('.itemName').select2({
  placeholder: 'Masukan Nama',
  ajax: {
    url: '/infouser',
    dataType: 'json',
    delay: 250,
    processResults: function (data) {
      return {
        results:  $.map(data, function (item) {
              return {
                  text: item.namapegawai,
                  id: item.nip
              }
          })
      };
    },
  }
});
</script>
@endsection