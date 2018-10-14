@extends('master')
@section('title','Detail Peminjaman')

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
        Data Detail Peminjaman Makalah/KTI.
      </h1>
      Data lengkap dari setiap Peminjaman Makalah/KTI.
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i>Beranda</a></li>
        <li><a href="/peminjaman">Peminjaman</a></li>
        <li class="active">Detail Peminjaman</li>
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
                  <td width="250">No</td>
                  <td>:</td>
                  <td><b>{{ $data->idpinjam }}</b></td>
                </tr>
                
                <tr>
                  <td>Nomor Makalah</td>
                  <td>:</td>
                  <td>@foreach($maka as $mk)
                  <b>{{substr($data->nomormakalah,0,2)}}/{{$mk->kodesnt}}/{{$mk->kodekti}}/{{substr($mk->tgldaftarawal,0,4)}}<b>
                    @endforeach
                  </td>
                </tr>
                <tr>
                  <td>Judul Makalah</td>
                  <td>:</td>
                  <td><b>@foreach ($makalah as $s => $key)@if($key==$data->nomormakalah){{$s}}@endif @endforeach<b></td>
                </tr>
                <tr>
                  <td>Peminjam</td>
                  <td>:</td>
                  <td><b>@foreach ($pegawai as $s => $key)@if($key==$data->nip){{$s}}@endif @endforeach <b></td>
                </tr>
                <tr>
                  <td>Tanggal Booking</td>
                  <td>:</td>
                  <td><b>{{ $data->tglbooking }}</b></td>
                </tr>
                <tr>
                  <td>Konfirmasi Peminjaman</td>
                  <td>:</td>
                  <td><b>{{ $data->status }}</b></td>
                </tr>
                <tr>
                  <td>Tanggal Pinjam</td>
                  <td>:</td>
                  <td><b>{{ $data->tglpinjam }}</b></td>
                </tr>
                <tr>
                  <td>Tanggal Dikembalikan</td>
                  <td>:</td>
                  <td><b>{{ $data->tglkembali }}</b></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
              </ul>
             <a href="{{route('peminjaman.index')}}"><button class="btn btn-block btn-sm btn-primary" type="button">Kembali ke Daftar Peminjaman</button></a>
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
