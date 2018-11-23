@section('title','Panduan Lihat Pengajuan Makalah/KTI')
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
        Panduan Lihat Pengajuan Makalah/KTI
      </h1>
      Menampilkan daftar data pengajuan Makalah/KTI, dimana Anda berpartisipasi sebagai penulis.
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
          <h3 class="box-title">A. Lihat Pengajuan Makalah/KTI</h3>
        </div>
        <div class="box-body">
          
          <ol>
            <b><li>Pilih Menu Lihat Pengajuan Makalah/KTI</li></b>
            <img src="{{ asset('img/plihatpengajuan/1.png') }}"style="width:900px"><br/><br/>
            <p>Akan tampil halaman Daftar Data Pengajuan Makalah/KTI, yang dimana Anda berpartisipasi sebagai penulisnya.</p><br/>
            <img src="{{ asset('img/plihatpengajuan/2.png') }}"style="width:900px"><br/><br/>
            <b><li>Klik tombol "Semua Makalah", untuk melihat semua daftar KTI/Makalah.</li></b>
            <img src="{{ asset('img/plihatpengajuan/3.png') }}"style="width:900px"><br/><br/>
            <b><li>Tampilan daftar data Pengajuan KTI/Makalah.</li></b>
            <img src="{{ asset('img/plihatpengajuan/4.png') }}"style="width:900px"><br/><br/>
            <b><li>Dari halaman Daftar Data Pengajuan Makalah/KTI. Pilih makalah/kti yang dimaksud. Klik tombol pada kolom detail atau link nomor makalah.</li></b>
            <p>Akan masuk pada halaman Detail Pengajuan Makalah/KTI.</p>
            <img src="{{ asset('img/plihatpengajuan/5.png') }}"style="width:900px"><br/><br/>
            <p>Halaman Detail Pengajuan Makalah/KTI.</p>
            <img src="{{ asset('img/plihatpengajuan/6.png') }}"style="width:900px"><br/><br/>
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