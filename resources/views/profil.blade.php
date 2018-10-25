@extends('master')
@section('title','Profil User')

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
        Profil Pengguna(user).
      </h1>
      Informasi lainnya dari akun Anda.
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
                  <td><b><a href="">{{ Auth::user()->name }}</a></b></td>
                </tr>
                <tr>
                  <td>NIP</td>
                  <td>:</td>
                  <td><b>{{ Auth::user()->nip }}<b></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>:</td>
                  <td><b>{{ Auth::user()->email }}</b></td>
                </tr>
                <tr>
                  <td>Sebagai</td>
                  <td>:</td>
                  <td><b>{{ Auth::user()->status }}</b></td>
                </tr>
                <tr>
                  <td>Bergabung sejak:</td>
                  <td>:</td>
                  <td><b>{{ Auth::user()->created_at  }}</b></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
              </ul>
             <a href="/home"><button class="btn btn-block btn-sm btn-primary" type="button">Kembali ke Beranda</button></a>
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
