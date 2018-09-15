@extends('master')
@section('title','Detail Makalah')

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
        Data Detail Pengajuan Pemeriksaan Karya Tulis Ilmiah/ Makalah
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i>Beranda</a></li>
        <li><a href="/makalah">Data KTI/Makalah</a></li>
        <li class="active">Detail KTI/Makalah</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr style="background:#c5f3fd">
                  <td colspan="3" align="center"><img src="{{ asset('img/Logo_Baru_BATAN.png') }}" style="width:90px"></td>
                  <td colspan="2" align="center"><b><h3>BADAN TENAGA NUKLIR NASIONAL</h3>
                    <small>PUSAT SAINS DAN TEKNOLOGI NUKLIR TERAPAN<br/>Jl.Tamansari No.71 Bandung 40132<br/><br/></small></b>
                  </td>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Judul</td>
                  <td>:</td>
                  <td>{{ $data->judulmakalah }}</td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Jenis Karangan</td>
                  <td>:</td>
                  <td>{{ $data->kodekti }}</td>
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
                  <td>{{ $data->subidnkelompok }}</td>
                </tr>
                <tr>
                  <td>5.</td>
                  <td>Bidang/Balai/Instalasi</td>
                  <td>:</td>
                  <td>{{ $data->kodesnt }}</td>
                </tr>
                <tr>
                  <td>6.</td>
                  <td>Untuk diterbitkan/disajikan</td>
                  <td>:</td>
                  <td>{{ $data->tujuan }}</td>
                </tr>
              </table>
            
              <table class="table table-bordered">
              <tr style="background:#f5f3a0">
                  <td><b>Nomor Makalah : {{substr($data->nomormakalah,0,2)}}/{{$data->kodesnt}}/{{$data->kodekti}}/{{substr($data->tgldaftarawal,0,4)}}
                    </b>
                  </td>
                  <td><b>Tanggal : {{ formatgl($data->tgldaftarawal) }}</b></td>
                </tr>
              </table>
              <br/>

              <div class="row">
              <div class="col-md-5">
              <table class="table table-bordered">               
                <tr style="background:#ebf9ff">
                  <td> Disetujui untuk diperiksa, oleh : </td>
                  <td>pada tanggal : </td>
                </tr>
                <tr>
                  <td>Ka.Subbid/Kelompok</td>
                  <td>{{formatgl($data->accpsubidkapok)}}</td>
                </tr>
                <tr>
                  <td>Ka.Bidang</td>
                  <td>{{formatgl($data->accpkabid)}}</td>
                </tr>
                </table>
              </div>

              <div class="col-md-7">
              <table class="table table-bordered">               
                <tr style="background:#ebf9ff">
                  <td colspan="2"> Pengesahan pengusulan/pengajuan : </td>
                </tr>
                <tr>
                  <td>Diterima Ka.KPTF/KPTP</td>
                  <td>{{formatgl($data->accpkabid)}}</td>
                </tr>
                </table>
              </div>
              </div>
              <div class="row">
              <div class="col-md-12">
              <table class="table table-bordered">               
                <tr style="background:#ebf9ff">
                  <b>Pemeriksaan Karya Tulis Ilmiah/ Makalah</b>
                </tr>
                <tr style="background:#ebf9ff">
                  <td>No</td>
                  <td>Pemeriksa</td>
                  <td>Tanggal diterima</td>
                  <td>Persetujuan Pemeriksa (selesai pemeriksaan)</td>
                  <td>Keterangan</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>{{$data->pemeriksa1}}</td>
                  <td>{{formatgl($data->tglterimap1)}}</td>
                  <td>{{formatgl($data->tglaccp1)}}</td>
                  <td>@if($data->statusp1!=""){{$data->statusp1}}
                  @else <a href="#"> Tambah Status</a>
                  @endif</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>{{$data->pemeriksa2}}</td>
                  <td>{{formatgl($data->tglterimap2)}}</td>
                  <td>{{formatgl($data->tglaccp2)}}</td>
                  <td>@if($data->statusp2!=""){{$data->statusp2}}
                  @else <a href="#"> Tambah Status</a>
                  @endif</td>
                </tr>
                </table>
              </div>
              </div>

              <table class="table table-bordered">
                <tr style="background:#ebf9ff">
                  <td colspan="2">Informasi KTI/Makalah</td>
                <tr>
                <tr>
                  <td>Diteruskan ke Ka.KPTF/KPTP</td>
                  <td>{{ formatgl($data->ttdkakptf)}}</td>
                </tr>
                <tr>
                  <td>Diteruskan ke Ka.PSTNT</td>
                  <td>{{ formatgl($data->tglselesai)}}</td>
                </tr>
                <tr>
                  <td>Makalah Selesai pada</td>
                  <td>{{ formatgl($data->tglselesai)}}</td>
                </tr>
                <tr>
                  <td>Berkas pada Arsip</td>
                  <td>
                  @if($data->arsip=="TERSEDIA")
                  <button type="button" class="btn btn-success btn-xs"><b>{{ $data->arsip }}</b></button>
                  @else
                  <button type="button" class="btn btn-danger btn-xs"><b>{{ $data->arsip }}</b></button>
                  @endif
                  </td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
              </ul>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <a href="/makalah"><button class="btn btn-block btn-sm btn-primary" type="button">Kembali ke Daftar KTI/Makalah</button></a>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection

<?php
function formatgl($tanggal){
  if($tanggal!=null){
  $date = date_create($tanggal);
  echo date_format($date,"d-m-Y");
  }else{
    echo" - <a href='#'>Isi tanggal</a> - ";
  }
}
?>