@extends('master')
@section('title','Detail Pegawai')

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
        Data Detail Pegawai
      </h1>
      Data lengkap dari setiap Pegawai.
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i>Beranda</a></li>
        <li><a href="/pegawai">Pegawai</a></li>
        <li class="active">Detail Pegawai</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header" style="background:#c5f3fd" align="center">
            <img src="{{ asset('img/Logo_Baru_BATAN.png') }}" style="width:40px">      <br/>
            <b>BADAN TENAGA NUKLIR NASIONAL<br/>
                    PUSAT SAINS DAN TEKNOLOGI NUKLIR TERAPAN<br/>Jl.Tamansari No.71 Bandung 40132<br/><br/></b>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <td width="250">Nama Pegawai</td>
                  <td>:</td>
                  <td><b><a href="">{{ $data->namapegawai }}</a></b></td>
                </tr>
                <tr>
                  <td>NIP</td>
                  <td>:</td>
                  <td><b>{{ $data->nip }}<b></td>
                </tr>
                <tr>
                  <td>Bidang</td>
                  <td>:</td>
                  <td><b>@foreach ($bidang as $b => $key)@if($key==$data->bidang){{$b}}@endif @endforeach </b></td>
                </tr>
                <tr>
                  <td>Sub. Bidang</td>
                  <td>:</td>
                  <td><b>@foreach ($subbids as $s => $key)@if($key==$data->subbid){{$s}}@endif @endforeach </b></td>
                </tr>
                <tr>
                  <td>Golongan</td>
                  <td>:</td>
                  <td><b>{{ $data->golongan }}</b></td>
                </tr>
                <tr>
                  <td>Pendidikan Akhir</td>
                  <td>:</td>
                  <td><b>{{ $data->pendidikanakhir }} - {{ $data->jurusan }}</b></td>
                </tr>
                <tr>
                  <td>Jabatan Fungsional</td>
                  <td>:</td>
                  <td><b>{{ $data->jabatan }}</b></td>
                </tr>
                <tr>
                  <td>Status</td>
                  <td>:</td>
                  <td><b>{{ $data->status }}</b></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
              </ul>
             <a href="/tampilpegawai"><button class="btn btn-block btn-sm btn-primary" type="button">Kembali ke Daftar Pegawai</button></a>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.box-footer-->
        </div>
      <!-- /.box -->
      </div>
      
    </section>
    <!-- /.content -->
  </div>
@endsection
