@section('title','Panduan Kelola Users')
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
        Panduan Kelola Users
      </h1>
      Kelola Users diakses oleh Admin. engelola data Users seperti tambah Users, ubah data Users, lihat data Users dan hapus data Users.
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
          <h3 class="box-title">A. Tambah Users</h3>
        </div>
        <div class="box-body">
          
          <ol>
            <b><li>Login sebagai Admin kemudian pilih Menu Kelola Users, klik Tambah Users</li></b>
            <p>Klik menu Kelola Users.</p>
            <img src="{{ asset('img/pkelolausers/1.png') }}"style="width:900px"><br/><br/>
            <b><li>Isi data Users pada Form.</li></b>
            <p>Isi dengan data yang Relevan.</p>
            <img src="{{ asset('img/pkelolausers/2.png') }}"style="width:900px"><br/><br/>
            <b><li>Klik Simpan</li></b>
            <img src="{{ asset('img/pkelolausers/3.png') }}"style="width:900px"><br/><br/>
            <b><li>Setelah data berhasil Tersimpan"</li></b>
            <img src="{{ asset('img/pkelolausers/4.png') }}"style="width:900px"><br/><br/>
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
          <h3 class="box-title">B. Ubah Users</h3>
        </div>
        <div class="box-body">
          
          <ol>
            <b><li>Cari dalam "daftar data Users" dan pilih data Users, kemudian klik ubah.</li></b>
            <img src="{{ asset('img/pkelolausers/5.png') }}"style="width:900px"><br/><br/>
            <b><li>Perbaharui data Users pada Form.</li></b>
            <p>Isi dengan data yang Relevan. Isi kembali "password".</p>
            <img src="{{ asset('img/pkelolausers/6.png') }}"style="width:900px"><br/><br/>
            <b><li>Setelah data berhasil Tersimpan"</li></b>
            <img src="{{ asset('img/pkelolausers/8.png') }}"style="width:900px"><br/><br/>
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
          <h3 class="box-title">C. Lihat Users</h3>
        </div>
        <div class="box-body">
          
          <ol>
            <b><li>Cari dalam "daftar data Users" dan pilih data Users, kemudian klik lihat.</li></b>
            <img src="{{ asset('img/pkelolausers/9.png') }}"style="width:900px"><br/><br/>
            <b><li>Tampilan data Detail Users</p>
            <img src="{{ asset('img/pkelolausers/13.png') }}"style="width:900px"><br/><br/>
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
          <h3 class="box-title">D. Hapus Users</h3>
        </div>
        <div class="box-body">
          
          <ol>
            <b><li>Cari dalam "daftar data Users" dan pilih data Users, kemudian klik hapus.</li></b>
            <img src="{{ asset('img/pkelolausers/10.png') }}"style="width:900px"><br/><br/>
            <b><li>Konfirmasi "hapus"</li></b>
            <img src="{{ asset('img/pkelolausers/11.png') }}"style="width:900px"><br/><br/>
            <b><li>Data berhasil dihapus</p>
            <img src="{{ asset('img/pkelolausers/12.png') }}"style="width:900px"><br/><br/>
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