@section('title','Panduan Lihat Laporan Logbook')
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
        Panduan Lihat Laporan Logbook
      </h1>
      Menampilkan daftar data logbook pencatatan pengajuan KTI/Makalah.
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
          <h3 class="box-title">A. Lihat Laporan Logbook</h3>
        </div>
        <div class="box-body">
          
          <ol>
            <b><li>Pilih Menu Lihat Logbook</li></b>
            <img src="{{ asset('img/plihatlogbook/1.png') }}"style="width:900px"><br/><br/>
            <p>Akan tampil halaman form untuk mencari periode Logbook.
            Isi form dengan tahun untuk menentukan waktu laporan logbook.
            Kemudian <b>klik tombol "Cari"</b>.</p><br/>
            <img src="{{ asset('img/plihatlogbook/2.png') }}"style="width:900px"><br/><br/>
            <b><li>Halaman Laporan Logbook</li></b>
            <p>Menampilkan logbook dari data Perkembangan Pengajuan KTI/Makalah. Klik tombol "Print" untuk mendapatkan tampilan logbook siap cetak.</p>
            <img src="{{ asset('img/plihatlogbook/3.png') }}"style="width:900px"><br/>
            <br/><p>Tampilan siap cetak dari Logbook.</p>
            <img src="{{ asset('img/plihatlogbook/4.png') }}"style="width:900px"><br/><br/>
            <br/><p>Tekan "Ctrl+P" pada keyboard, jika menggunakan Chrome maka akan terdapat tampilan seperti berikut.</p>
            <img src="{{ asset('img/plihatlogbook/5.png') }}"style="width:900px"><br/><br/>
            <br/><p>Anda dapat langsung mencetaknya pada printer atau menyimpannya sebagai file pdf.</p>
            <img src="{{ asset('img/plihatlogbook/6.png') }}"style="width:900px"><br/><br/>
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