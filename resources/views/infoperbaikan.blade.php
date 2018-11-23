@section('title','Info Perbaikan KTI/Makalah')

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
        Informasi Pengelolaan Data Perbaikan KTI/Makalah
      </h1>
      Bagian untuk mengelola data perbaikan KTI/Makalah.
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i> Beranda</a></li>
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
              <h3 class="box-title">
                Mengelola data perbaikan KTI/Makalah seperti <b>tambah</b> data perbaikan KTI/Makalah, 
                <b>ubah</b> data perbaikan KTI/Makalah, <b>lihat</b> data perbaikan KTI/Makalah dan 
                <b>hapus</b> data perbaikan KTI/Makalah.</h3>
            </div>
            <div class="box-body">
              <ol>
                <li>Tambah Perbaikan KTI/Makalah : </li>
                <p>Menambah data perbaikan KTI/Makalah baru yang belum terdata dalam sistem.</p>
                <li>Ubah Perbaikan KTI/Makalah : </li>
                <p>Memperbaharui data perbaikan KTI/Makalah yang sudah terdata dalam sistem sebelumnya.</p>
                <li>Lihat Perbaikan KTI/Makalah : </li>
                <p>Melihat detail data perbaikan KTI/Makalah secara lengkap yang terdata dalam sistem.</p>
                <li>Hapus Perbaikan KTI/Makalah : </li>
                <p>Menghapus data perbaikan KTI/Makalah yang sudah terdata dalam sistem. Untuk keadaan darurat (ada kesalahan).</p>
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
              <h3 class="box-title">Manfaat mengelola data perbaikan KTI/Makalah dalam sistem.</h3>
            </div>
            <div class="box-body">
              <ul>
                <li>KTI/Makalah yang terlibat dalam sistem menjadi jelas terdefinisi.</li>
                <li>Keterkaitan dengan pengelolaan data lainnya menjadi jelas informasinya.</li>
                <li>Merekap data perbaikan selama pemeriksaan/pengusulan/pengajuan KTI/Makalah dilakukan.</li>
              </ul>
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
<!-- /.content-wrapper -->
@include('footer')