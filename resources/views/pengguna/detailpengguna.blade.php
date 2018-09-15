@extends('master')
@section('title','Detail Pengguna')

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
        Data Detail Pengguna
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i>Beranda</a></li>
        <li><a href="/pegawai">Pengguna</a></li>
        <li class="active">Detail Pengguna</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-9">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <td>1.</td>
                  <td>Nama</td>
                  <td>:</td>
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
            </div>
          </div>
          <!-- /.box -->
        </div>

        <div class="col-md-3">
          <a href="/tampilpegawai"><button class="btn btn-block btn-sm btn-primary" type="button">Kembali ke Daftar Pengguna</button></a>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection
