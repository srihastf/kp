@section('title','Panduan Peminjaman KTI/Makalah')
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
        Panduan Peminjaman KTI/Makalah
      </h1>
     Tahapan bagaimana pegawai melakukan peminjaman KTI/Makalah.
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
          <h3 class="box-title">A. Peminjaman KTI/Makalah</h3>
        </div>
        <div class="box-body">
          
          <ol>
            <b><li>Pilih Menu Peminjaman KTI/Makalah.</li></b>
            <img src="{{ asset('img/ppeminjaman/1.png') }}"style="width:900px"><br/><br/>
            <p> Klik Tambah Data Baru..</p><br/>
            <img src="{{ asset('img/ppeminjaman/2.png') }}"style="width:900px"><br/><br/>
            <b><li>Halaman Form Isi Peminjaman KTI/Makalah.</li></b>
            <br/><p> Isi form kemudian simpan data.</p>
            <img src="{{ asset('img/ppeminjaman/3.png') }}"style="width:900px"><br/>
            <br/><p> Data peminjaman berhasil tersimpan.</p>
            <img src="{{ asset('img/ppeminjaman/4.png') }}"style="width:500px"><br/><br/>
            <b><li>Lihat Detail data peminjaman KTI/Makalah.</li></b>
            <img src="{{ asset('img/ppeminjaman/5.png') }}"style="width:900px"><br/><br/>
            <br/><p> Tampilan Detail Data peminjaman</p>
            <img src="{{ asset('img/ppeminjaman/6.png') }}"style="width:900px"><br/><br/>
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