@section('title','Panduan Lihat Laporan')
<!-- Header -->
@include('header2')
<!-- End Header -->
<!-- Left side column. contains the logo and sidebar -->
@include('navbar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Panduan Lihat Laporan
      </h1>
      Menampilkan daftar data laporan.
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
          <h3 class="box-title">A. Lihat Laporan</h3>
        </div>
        <div class="box-body">
          
          <ol>
            <b><li>Pilih Menu Lihat Laporan</li></b>
            <img src="{{ asset('img/plihatlaporan/1.png') }}"style="width:900px"><br/><br/>
            <p>Akan tampil halaman form untuk mencari rentang laporan. Isi form untuk tanggal awal hingga tanggal akhir untuk menentukan rentang waktu laporan. Kemudian <b>klik tombol "Cari"</b>.</p><br/>
            <img src="{{ asset('img/plihatlaporan/2.png') }}"style="width:900px"><br/><br/>
            <b><li>Halaman grafik Laporan</li></b>
            <p>Menampilkan grafik pegawai PSTNT BATAN, grafik KTI yang diajukan, dan grafik KTI yang telah selesai(layak dipublikasikan).</p>
            <img src="{{ asset('img/plihatlaporan/3.png') }}"style="width:900px"><br/>
            <img src="{{ asset('img/plihatlaporan/4.png') }}"style="width:900px"><br/><br/>
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
      <!-- /.row -->
        <!-- /.box-body -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('footer')