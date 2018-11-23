@section('title','Info Pengajuan KTI/Makalah')

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
        Informasi Pengelolaan Data Pengajuan KTI/Makalah
      </h1>
      Bagian untuk mengelola data perkembangan pengajuan KTI/Makalah.
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
                Mengelola data pengajuan KTI/Makalah seperti <b>tambah</b> data pengajuan KTI/Makalah, 
                <b>ubah</b> data pengajuan KTI/Makalah, <b>lihat</b> data pengajuan KTI/Makalah dan 
                <b>hapus</b> data pengajuan KTI/Makalah.</h3>
            </div>
            <div class="box-body">
              <ol>
                <li>Tambah Pengajuan KTI/Makalah : </li>
                <p>Menambah data pengajuan KTI/Makalah baru yang belum terdata dalam sistem.</p>
                <li>Ubah Pengajuan KTI/Makalah : </li>
                <p>Memperbaharui data pengajuan KTI/Makalah yang sudah terdata dalam sistem sebelumnya.</p>
                <li>Lihat Pengajuan KTI/Makalah : </li>
                <p>Melihat detail data pengajuan KTI/Makalah secara lengkap yang terdata dalam sistem.</p>
                <li>Hapus Pengajuan KTI/Makalah : </li>
                <p>Menghapus data pengajuan KTI/Makalah yang sudah terdata dalam sistem. Untuk keadaan darurat (ada kesalahan).</p>
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
              <h3 class="box-title">Manfaat mengelola data pengajuan KTI/Makalah dalam sistem.</h3>
            </div>
            <div class="box-body">
              <ul>
                <li>KTI/Makalah yang terlibat dalam sistem menjadi jelas terdefinisi.</li>
                <li>Keterkaitan dengan pengelolaan data lainnya menjadi jelas informasinya.</li>
                <li>Merekap data perkembangan pemeriksaan/pengusulan/pengajuan KTI/Makalah.</li>
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