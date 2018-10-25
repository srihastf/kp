@section('title','Info Peminjaman Makalah/KTI')
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
        Kelola Data Peminjaman Makalah/KTI
      </h1>
      Bagian untuk mengelola data perkembangan peminjaman Makalah/KTI.
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
        

      <div class="col-md-7">
       <!-- Default box -->
       <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Mengelola data peminjaman makalah seperti tambah peminjaman makalah, ubah data peminjaman makalah,
           lihat data peminjaman makalah dan hapus data peminjaman makalah.</h3>
        </div>
        <div class="box-body">
          
          <ol>
            <li>Tambah Peminjaman Makalah/KTI : </li>
            <p>Menambah data peminjaman makalah baru yang belum terdata dalam sistem.</p>
            <li>Ubah Peminjaman Makalah/KTI : </li>
            <p>Memperbaharui data peminjaman makalah yang sudah terdata dalam sistem sebelumnya.</p>
            <li>Lihat Peminjaman Makalah/KTI : </li>
            <p>Melihat detail data perkembangan peminjaman makalah secara lengkap yang terdata dalam sistem.</p>
            <li>Hapus Peminjaman Makalah : </li>
            <p>Menghapus data peminjaman makalah yang sudah terdata dalam sistem. Untuk keadaan darurat (ada kesalahan).</p>
          </ol>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
      </div>
     </div>
      <!-- /.row -->
      <div class="row">
      <div class="col-md-11">
       <!-- Default box -->
       <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Manfaat mengelola data peminjaman makalah/kti dalam sistem.</h3>
        </div>
        <div class="box-body">
          
          <ul>
            <li>Data peminjaman makalah/kti dari arsip jelas tersimpan dan terdefinisi</li>
            <li>Keterkaitan dengan pengelolaan data lainnya juga jelas informasinya.</li>
          </ul>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('footer')