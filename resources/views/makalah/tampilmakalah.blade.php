@extends('master')
@section('title','Data Pengajuan Karya Tulis Ilmiah')

@section('style')
<!-- DataTables -->
<link rel="stylesheet" href="{{url('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="flash-message">
      @foreach(['danger','warning','success','info'] as $msg)
        @if(Session::has('alert-'.$msg))
          <p class="alert alert-{{ $msg }}">{{ Session::get('alert-'.$msg) }}
            <a href="#" class="close" data-dismiss="alert" aria-label="close"> &times;</a>
          </p>
        @endif
      @endforeach
    </div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Data Pengajuan KTI/Makalah
      </h1>
      Mencatat perkembangan proses pengajuan/pengusulan KTI/Makalah Penelitian.
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i> Beranda</a></li>
        <li class="breadcrumb-item active">@yield('title')</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <!-- /.row -->
      <div class="row">
       <div class="col-md-10"></div>
        <div class="col-md-2" style="padding-bottom:10px">
        @if(Auth::user()->status=="Sekertaris KPTF/KPTP")
        <a href="{{route('makalah.create')}}"><button class="btn btn-block btn-sm btn-success" type="button">Tambah Data Baru</button></a>
        @else
        <a href="/semuamakalah"><button class="btn btn-block btn-sm btn-success" type="button">Semua Makalah</button></a>
        @endif
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
              <thead>
                  <tr>
                    <th>Nomor Makalah</th>
                    <th>Judul Makalah</th>
                    <th>Penulis</th>
                    <th>Detail</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $d)
                  <tr>
                    <td>
                    @if(Auth::user()->status=="Sekertaris KPTF/KPTP")
                    <a href="{{ route('makalah.show', ['makalah'=>$d->nomormakalah]) }}">
                    @else
                    <a href="/detail/{{$d->nomormakalah}}">
                    @endif
                    {{substr($d->nomormakalah,0,2)}}/{{$d->kodesnt}}/{{$d->kodekti}}/{{substr($d->tgldaftarawal,0,4)}}</a></td> <!--dsdddc-->

                    @if($d->arsip!="TERSEDIA")<th style="background:#ffcaae">
                    @else <th> @endif {{$d->judulmakalah}} 
                      <br/><small><a>@foreach ($bidang as $s => $key)@if($key==$d->kodesnt) {{$s}} @endif @endforeach</a></small></th>
                      <th>{{$d->penulis}}</th>
                    <th>
                      @if(Auth::user()->status=="Sekertaris KPTF/KPTP")
                      <a href="{{ route('makalah.show', ['makalah'=>$d->nomormakalah]) }}">
                      @else
                      <a href="/detail/{{$d->nomormakalah}}">
                      @endif
                      @if($d->tglselesai!=null)
                        <button type="button" class="btn btn-success btn-xs"><b>Selesai</b><br/>{{formatgl($d->tglselesai)}}</button>
                      @elseif($d->tglaccperiksa!=null)
                        <button type="button" class="btn btn-warning btn-xs"><b>Review</b>
                        <br/>{{formatgl($d->tglaccperiksa)}}
                        <br/>-----------------------
                        <br/>P1: {{formatgl($d->tglterimap1)}}
                        <br/>acc :{{formatgl($d->tglaccp1)}}
                        <br/>-----------------------
                        <br/>P2: {{formatgl($d->tglterimap1)}}
                        <br/>acc :{{formatgl($d->tglaccp2)}}
                        </button>
                        @elseif($d->tgldaftarawal!=null)
                          <button type="button" class="btn btn-info btn-xs"><b>Awal Pengajuan</b><br/>{{formatgl($d->tgldaftarawal)}}</button>
                        @endif
                        </a>
                    </th>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            @if(Auth::user()->status=="Admin")
            <a href="/pdfmakalah">Print</a>
            @endif
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

<?php
function formatgl($tanggal){
  $date = date_create($tanggal);
  echo date_format($date,"d-m-Y");
}
?>

@section('jsstyle')
<!-- DataTables -->
<script src="{{url('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })

</script>
@endsection