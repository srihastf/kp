@section('title','Panduan Kelola Pegawai')
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
        Panduan Kelola Pegawai
      </h1>
      Kelola Pegawai diakses oleh Admin. engelola data pegawai seperti tambah pegawai, ubah data pegawai, lihat data pegawai dan hapus data pegawai.
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
          <h3 class="box-title">A. Tambah Pegawai</h3>
        </div>
        <div class="box-body">
          
          <ol>
            <b><li>Login sebagai Admin kemudian pilih Menu Kelola Pegawai, klik Tambah Pegawai</li></b>
            <p>Klik menu Kelola Pegawai.</p>
            <img src="{{ asset('img/pkelolapegawai/1.png') }}"style="width:900px"><br/><br/>
            <b><li>Isi data Pegawai pada Form.</li></b>
            <p>Isi dengan data yang Relevan.</p>
            <img src="{{ asset('img/pkelolapegawai/2.png') }}"style="width:900px"><br/><br/>
            <b><li>Klik Simpan</li></b>
            <img src="{{ asset('img/pkelolapegawai/3.png') }}"style="width:900px"><br/><br/>
            <b><li>Setelah data berhasil Tersimpan"</li></b>
            <img src="{{ asset('img/pkelolapegawai/4.png') }}"style="width:900px"><br/><br/>
          </ol>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->



        <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">B. Ubah Pegawai</h3>
        </div>
        <div class="box-body">
          
          <ol>
            <b><li>Cari dalam "daftar data pegawai" dan pilih data pegawai, kemudian klik ubah.</li></b>
            <img src="{{ asset('img/pkelolapegawai/5.png') }}"style="width:900px"><br/><br/>
            <b><li>Perbaharui data Pegawai pada Form.</li></b>
            <p>Isi dengan data yang Relevan.</p>
            <img src="{{ asset('img/pkelolapegawai/6.png') }}"style="width:900px"><br/><br/>
            <b><li>Klik Simpan</li></b>
            <img src="{{ asset('img/pkelolapegawai/7.png') }}"style="width:900px"><br/><br/>
            <b><li>Setelah data berhasil Tersimpan"</li></b>
            <img src="{{ asset('img/pkelolapegawai/8.png') }}"style="width:900px"><br/><br/>
          </ol>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->



       <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">C. Lihat Pegawai</h3>
        </div>
        <div class="box-body">
          
          <ol>
            <b><li>Cari dalam "daftar data pegawai" dan pilih data pegawai, kemudian klik lihat.</li></b>
            <img src="{{ asset('img/pkelolapegawai/9.png') }}"style="width:900px"><br/><br/>
            <b><li>Tampilan data Detail Pegawai</p>
            <img src="{{ asset('img/pkelolapegawai/13.png') }}"style="width:900px"><br/><br/>
          </ol>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

       <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">D. Hapus Pegawai</h3>
        </div>
        <div class="box-body">
          
          <ol>
            <b><li>Cari dalam "daftar data pegawai" dan pilih data pegawai, kemudian klik hapus.</li></b>
            <img src="{{ asset('img/pkelolapegawai/10.png') }}"style="width:900px"><br/><br/>
            <b><li>Konfirmasi "hapus"</li></b>
            <img src="{{ asset('img/pkelolapegawai/11.png') }}"style="width:900px"><br/><br/>
            <b><li>Data berhasil dihapus</p>
            <img src="{{ asset('img/pkelolapegawai/12.png') }}"style="width:900px"><br/><br/>
          </ol>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        <a href="/home"><button class="btn btn-block btn-sm btn-primary" type="button">Kembali ke Beranda</button></a>
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