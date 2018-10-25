@section('title','Info Users')
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
        Kelola Data Users
      </h1>
      Bagian untuk mengelola data users.
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
          <h3 class="box-title">Mengelola data users seperti tambah users, ubah data users, lihat data users dan hapus data users.</h3>
        </div>
        <div class="box-body">
          
          <ol>
            <li>Tambah Users : </li>
            <p>Menambah data users baru yang belum terdata dalam sistem.</p>
            <li>Ubah Users : </li>
            <p>Memperbaharui data users yang sudah terdata dalam sistem sebelumnya.</p>
            <li>Lihat Users : </li>
            <p>Melihat detail data users secara lengkap yang terdata dalam sistem.</p>
            <li>Hapus Users : </li>
            <p>Menghapus data users yang sudah terdata dalam sistem. Untuk keadaan darurat (ada kesalahan).</p>
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
          <h3 class="box-title">Manfaat mengelola data users dalam sistem.</h3>
        </div>
        <div class="box-body">
          
          <ul>
            <li>Users atau pengguna yang terlibat dalam sistem menjadi jelas terdefinisi.</li>
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