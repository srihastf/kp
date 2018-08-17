@section('title','Home')
@extends('master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SIP3KTI</br>
        <small>Sistem Pengelolaan Pengajuan dan Peminjaman Karya Tulis Ilmiah</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
      </ol>

      <div class="card-body">
        @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
        @endif
      </div>
    </section>

    <!-- Main content -->
    <section class="content">


    </section>
    <!-- /.content -->
  </div>

@endsection
