@section('title','Home')
@extends('master')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      SIP3KTI</br>
      <small>Sistem Informasi Pengelolaan Pengajuan dan Peminjaman Karya Tulis Ilmiah</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
    </ol>

    <div class="card-body">
      <div class="flash-message">
        @foreach(['danger','warning','success','info'] as $msg)
        @if(Session::has('alert-'.$msg))
        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-'.$msg) }}
          <a href="#" class="close" data-dismiss="alert" aria-label="close"> &times;</a>
        </p>
        @endif
        @endforeach
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">SIP3KTI berfungsi untuk mengelola data diantaranya:</h3>
        </div>
        <div class="box-body">
          <ol>
            <li><b>Mengelola data Pengajuan Makalah/Karya Tulis Ilmiah (Kti)</b></li>
            <p>Pengajuan/Pengusulan Kti sebelum Kti dipublikasikan ditujukan untuk dilakukan pemeriksaan terlebih dahulu
            oleh tim KPTF/KPTP. Sistem ini akan membantu pekerjaan Sekertaris KPTF/KPTP dalam mencatat/merekap data 
            perkembangan pengajuan/pengusulan Kti dari awal Kti didaftarkan hingga layak untuk publikasi.</p>

            <li><b>Mengelola data Peminjaman Makalah/Kti.</b></li>
            <p>Mendata siapa saja yang meminjam Kti dari arsip, makalah/Kti apa yang akan dipinjam, pada tanggal berapa 
            Kti dipinjam dan pada tanggal berapa Kti dikembalikan.</p>

            <br/>
            <b>PENGELOLAAN TAMBAHAN : </b>

            <li><b>Mengelola data Pegawai</b></li>
            <p>Pengelolaan data Pegawai dilakukan oleh Admin agar jelas siapa saja pegawai yang terlibat dalam sistem.</p>

            <li><b>Mengelola data User</b></li>
            <p>Pengelolaan data User dilakukan oleh Admin agar para pejabat fungsional memiliki hak akses terhadap sistem.</p>

            <li><b>Mengelola data Perbaikan Kti</b></li>
            <p>Pengelolaan data Perbaikan Kti oleh sekertaris KPTF/KPTP
            untuk data pengajuan Kti yang statusnya belum disetujui atau "PERBAIKAN". Sehingga informasi revisi juga harus dicatat perkembangannya.</p>
          </ol>

          <p>SIP3KTI akan membantu proses pencatatan/perekapan dalam pengajuan/pengusulan Kti yang akan diperiksa.</p>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
     </div>
    </div>
  </section>
  <!-- /.content -->
</div>

@endsection
