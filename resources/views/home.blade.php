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
        @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
        @endif
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
     <div class="col-md-8">
       <!-- Default box -->
       <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">SIP3KTI berfungsi untuk mengelola data diantaranya:</h3>
        </div>
        <div class="box-body">
          <ol>
            <li>Mengelola data Pengajuan Makalah/Karya Tulis Ilmiah (Kti)</li>
            <p>Pengajuan/Pengusulan Kti sebelum Kti dipublikasikan ditujukan untuk dilakukan pemeriksaan terlebih dahulu
            oleh tim KPTF/KPTP. Sistem ini akan membantu pekerjaan Sekertaris KPTF/KPTP dalam mencatat/merekap data 
            perkembangan pengajuan/pengusulan Kti dari awal Kti didaftarkan hingga layak untuk publikasi.</p>

            <li>Mengelola data Peminjaman Makalah/Kti.</li>
            <p>Mendata siapa saja yang meminjam Kti dari arsip, makalah/Kti apa yang akan dipinjam, pada tanggal berapa 
            Kti dipinjam dan pada tanggal berapa Kti dikembalikan.</p>

            <br/>
            <b>Pengelolaan tambahan : </b>

            <li>Mengelola data Pegawai</li>
            <p>Pengelolaan data Pegawai dilakukan oleh Admin agar jelas siapa saja pegawai yang terlibat dalam sistem.</p>

            <li>Mengelola data User</li>
            <p>Pengelolaan data User dilakukan oleh Admin agar para pejabat fungsional memiliki hak akses terhadap sistem.</p>

            <li>Mengelola data Perbaikan Kti</li>
            <p>Pengelolaan data Perbaikan Kti oleh sekertaris KPTF/KPTP
            untuk data pengajuan Kti yang statusnya belum disetujui atau "PERBAIKAN". Sehingga informasi revisi juga harus dicatat perkembangannya.</p>
          </ol>

          <p>SIP3KTI akan membantu proses pencatatan/perekapan dalam pengajuan/pengusulan Kti yang akan diperiksa.</p>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <p class="meta">
          <?php 
            $tgl=mktime(date("m"),date("d"),date("Y"));
            echo "Tanggal : <b>".date("d-m-Y", $tgl)."</b> ";
            date_default_timezone_set('Asia/Jakarta');
            $jam=date("H:i:s");
            echo "| Pukul : <b>". $jam." WIB "."</b>";
          ?>
          </p>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
     </div>

     <div class="col-md-4">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Akses ke : </h3>
        </div>
        <div class="box-body">
        <img src="{{ asset('img/mn-satn.jpg') }}">
          <ul>
          <br/>
            <li><a href="http://www.batan.go.id/pstbm"> Sains & Teknologi Bahan Maju </a></li>
            <li><a href="http://www.batan.go.id/index.php/kedeputian/sains-aplikasi-teknologi-nuklir/sains-teknologi-nuklir-terapan">Sains & Teknologi Nuklir Terapan</a></li>
            <li><a href="http://www.batan.go.id/index.php/kedeputian/sains-aplikasi-teknologi-nuklir/sains-teknologi-akselerator">Sains & Teknologi Akselerator</a></li>
            <li><a href="http://www.batan.go.id/index.php/kedeputian/sains-aplikasi-teknologi-nuklir/aplikasi-isotop-dan-radiasi">Aplikasi Isotop dan Radiasi</a></li>
            <li><a href="http://www.batan.go.id/index.php/id/berita-ptkmr">Keselamatan & Metrologi Radiasi</a></li>
            <li><a href="http://www.batan.go.id/index.php/id/pstnt-id/profil-pstnt/3281-pusat-sains-dan-teknologi-nuklir-terapan-pstnt">PSTNT BATAN BANDUNG</a></li>     
          </ul>
        </div>
        <div class="box-footer">
        </div>        
      </div>
     </div>
     </div>
    </section>
    <!-- /.content -->
  </div>

@endsection
