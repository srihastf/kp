@section('title','Panduan Kelola Peminjaman Makalah/KTI')
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
        Panduan Kelola Peminjaman Makalah/KTI
      </h1>
      Kelola Peminjaman Makalah/KTI diakses oleh Sekertaris KPTF/KPTP. Mengelola data peminjaman Makalah/KTI seperti tambah peminjaman makalah/kti, ubah data peminjaman makalah/kti, lihat data peminjaman makalah/kti dan hapus data peminjaman makalah/kti.
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
          <h3 class="box-title">A. Tambah Peminjaman Makalah/KTI</h3>
        </div>
        <div class="box-body">
          
          <ol>
            <b><li>Login sebagai Sekertaris kemudian pilih Menu Kelola Peminjaman Makalah/KTI</li></b>
            <p>Akan tampil halaman Daftar Data Perbaikan Makalah/KTI</p>
            <img src="{{ asset('img/pkelolapeminjaman/0.png') }}"style="width:900px"><br/><br/>
            <b><li>Klik tombol "Tambah Data Baru"</li></b>
            <img src="{{ asset('img/pkelolaperbaikan/2.png') }}"style="width:900px"><br/><br/>
            <b><li>Isi data Perbaikan Makalah pada Form.</li></b>
            <img src="{{ asset('img/pkelolaperbaikan/3.png') }}"style="width:900px"><br/><br/>
            <b><li>Klik Simpan</li></b>
            <img src="{{ asset('img/pkelolaperbaikan/4.png') }}"style="width:900px"><br/><br/>
            <b><li>Setelah data berhasil Tersimpan"</li></b>
            <p>Data Perbaikan akan tampil pada Detail Pengajuan Makalah/KTI yang mendapat status "PERBAIKAN".</p>
            <img src="{{ asset('img/pkelolaperbaikan/5.png') }}"style="width:900px"><br/><br/>
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
          <h3 class="box-title">B. Ubah Perbaikan Makalah/KTI</h3>
        </div>
        <div class="box-body">
          
          <ol>
            <b><li>Dari halaman Daftar Data Perbaikan Makalah/KTI. Pilih makalah/kti yang dimaksud. Klik tombol "ubah".</li></b>
            <img src="{{ asset('img/pkelolaperbaikan/6.png') }}"style="width:900px"><br/><br/>
            <b><li>Perbaharui data kemudian Klik Simpan</li></b>
            <img src="{{ asset('img/pkelolaperbaikan/4.png') }}"style="width:900px"><br/><br/>
            <b><li>Setelah data berhasil diperbaharui"</li></b>
            <img src="{{ asset('img/pkelolaperbaikan/8.png') }}"style="width:900px"><br/><br/>
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
          <h3 class="box-title">C. Lihat Detail Pengajuan Makalah/KTI</h3>
        </div>
        <div class="box-body">
          
          <ol>
          <b><li>Dari halaman Daftar Data Pengajuan Makalah/KTI. Pilih makalah/kti yang dimaksud. Klik tombol pada kolom detail atau link nomor makalah.</li></b>
            <img src="{{ asset('img/pkelolaperbaikan/6.png') }}"style="width:900px"><br/><br/>
            <b><li>Tampilan data Detail Pegawai</p>
            <img src="{{ asset('img/pkelolaperbaikan/9.png') }}"style="width:900px"><br/><br/>
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
            <b><li>Dari halaman Daftar Data Pengajuan Makalah/KTI. Pilih makalah/kti yang dimaksud. Klik tombol pada kolom detail atau link nomor makalah.</li></b>
            <img src="{{ asset('img/pkelolaperbaikan/6.png') }}"style="width:900px"><br/><br/>
            <b><li>Klik tombol "Hapus" pada bagian bawah dari halaman detail pengajuan makalah/kti.</li></b>
            <p>Kemudian klik oke pada dialog konfirmasi.</p>
            <img src="{{ asset('img/pkelolaperbaikan/10.png') }}"style="width:900px"><br/><br/>
            <b><li>Setelah data berhasil dihapus"</li></b>
            <img src="{{ asset('img/pkelolaperbaikan/11.png') }}"style="width:900px"><br/><br/>
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