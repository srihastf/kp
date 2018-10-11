@extends('master')
@section('title','Detail User')

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
        Data Detail User
      </h1>
      Data lengkap dari setiap User.
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i>Beranda</a></li>
        <li><a href="/user">User</a></li>
        <li class="active">Detail User</li>
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
                  <td width="3">1.</td>
                  <td width="200">Nama User</td>
                  <td width="3">:</td>
                  <td>{{ $data->name }}</td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>NIP</td>
                  <td>:</td>
                  <td>{{ $data->nip }}</td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Email</td>
                  <td>:</td>
                  <td>{{ $data->email }}</td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Status sebagai</td>
                  <td>:</td>
                  <td>{{ $data->status }}</td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
              </ul>
             <a href="/tampiluser"><button class="btn btn-block btn-sm btn-primary" type="button">Kembali ke Daftar User</button></a>
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
