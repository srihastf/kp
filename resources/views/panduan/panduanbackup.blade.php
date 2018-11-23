@section('title','Panduan Backup Data')
<!-- Header -->
@include('header2')
<!-- End Header -->
<!-- Left side column. contains the logo and sidebar -->
@include('navbar2')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Panduan Backup Data
      </h1>
      Backup data, dilakukan untuk menyimpan cadangan data, untuk sewaktu-waktu dibutuhkan atau dapat digunakan untuk pemulihan data jika terdapat hal yang tidak diinginkan pada SIP3KTI.
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i> Beranda</a></li>
        </li>
        <li class="breadcrumb-item active">@yield('title')</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- ./col -->
        

      <div class="col-md-11">
       <!-- Default box -->
       <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tahap-tahap untuk Backup data dari Database.</h3>
        </div>
        <div class="box-body">
          
          <ol>
            <b><li>Cari dan buka Aplikasi XAMPP.</li></b>
            <p>Buka Start dan cari Aplikasi XAMPP kemudian klik.</p>
            <img src="{{ asset('img/pbackup/1.png') }}"style="width:900px"><br/><br/>
            <b><li>Klik Start pada bagian Apache dan MySql</li></b>
            <p>Aktifkan Apache dan MySql agar host terhadap database dapat terhubung.</p>
            <img src="{{ asset('img/pbackup/2.png') }}"style="width:900px"><br/><br/>
            <b><li>Buka Browser Firefox atau Chrome</li></b>
            <p>Ketikan link <a>localhost/phpmyadmin</a></p>
            <img src="{{ asset('img/pbackup/3.png') }}"style="width:900px"><br/><br/>
            <b><li>Buka database "db_sip3kti"</li></b>
            <p>Cari pada sidebar database "db_sip3kti" kemudian klik</p>
            <img src="{{ asset('img/pbackup/4.png') }}"style="width:900px"><br/><br/>
            <b><li>Pilih Menu "Ekspor"/"Export", kemudian klik "Go"</li></b>
            <p>File database akan terunduh.</p>
            <img src="{{ asset('img/pbackup/5.png') }}"style="width:900px"><br/><br/>
            <b><li>Simpan pada File Explorer</li></b>
            <p>Simpan dan sesuaikan file dan nama file pada folder yang rapi, mudah dicari dan sesuai keinginan Anda.</p>
            <img src="{{ asset('img/pbackup/6.png') }}"style="width:900px"><br/><br/>
          </ol>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        <a href="/home"><button class="btn btn-primary"><i class="fa fa-home"></i> Beranda<button></a>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
      </div>
      <!-- /.box -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('footer')