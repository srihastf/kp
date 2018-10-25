@section('title','Informasi Penting')
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
        Informasi Penting
      </h1>
      Hal-hal yang disarankan untuk diikuti pada penggunaan Sistem Informasi Pengelolaan Pengajuan dan Peminjaman Karya Tulis Ilmiah(SIP3KTI).
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
      <div class="col-md-12">
       <!-- Default box -->
       <div class="box">
        <div class="box-header" style="background:#c5f3fd" align="center">
            <img src="{{ asset('img/Logo_Baru_BATAN.png') }}" style="width:40px"><br/>
            <b>BADAN TENAGA NUKLIR NASIONAL<br/>
                    PUSAT SAINS DAN TEKNOLOGI NUKLIR TERAPAN<br/>Jl.Tamansari No.71 Bandung 40132<br/><br/></b>
            </div>
        </div>

       <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Penggunaan Sistem SIP3KTI</h3>
        </div>
        <div class="box-body">
          <ol>
            <b><li>Setiap pengguna sistem sudah mengetahui tata cara penggunaan SIP3KTI.</li></b>
            <p>Menu Halaman Panduan disediakan, dan dapat diakses setelah login.</p>
            <b><li>Setiap pengguna menggunakan SIP3KTI sesuai aktornya.</li></b>
            <p>Hak Akses yang berbeda akan memiliki peran yang berbeda pula dalam penggunaan SIP3KTI</p>
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
          <h3 class="box-title">Maintenance / Perawatan SIP3KTI</h3>
        </div>
        <div class="box-body">
          <ol>
          <b><li>Lakukan Back-up database minimal 1 tahun sekali.</li></b>
            <p>Cara melakukan backup (export data), <a href="/panduanbackup">dapat dilihat disini.</a><br/>
            Backup data berguna untuk memulihkan data terakhir jika terjadi hal yang tidak diinginkan.</p>
          </ol>
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