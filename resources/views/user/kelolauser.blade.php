@extends('master')
@section('title','Kelola Users')

@section('style')
<style>
.icon2{
    -webkit-transition: all .3s linear;
    -o-transition: all .3s linear;
    transition: all .3s linear;
    position: auto;
    font-size: 150px;
    color: rgba(255,255,255,0.85);
}
</style>
@endsection

@section('content')
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
        <div class="col-lg-2 col-xs-6" style="width:210px">
          <!-- small box -->
          <div class="small-box bg-aqua" style="margin: 0 0 10px">
            <div class="inner">
                <div class="icon2" style="font-size:150px">
                 <i class="fa fa-users" ></i>
                </div>
            </div>           
            <a href="{{url('/tampiluser')}}" class="small-box-footer"><h4>Daftar Users</h4> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green" style="margin: 0 0 10px">
            <div class="inner">
                <div class="icon2">
                 <i class="ion ion-person-add" style=""></i>
                </div>
            </div>           
            <a href="{{route('user.create')}}" class="small-box-footer"><h4>Tambah Users</h4> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- right col -->
     

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
            <p>Memperbaharui data users yang sudah terdata dalam sistem sebelumnya.Untuk keadaan jika pegawai 
            misalnya lupa password atau mengubah emailnya, dan menghubungi Admin untuk membantu memperbaharui datanya.</p>
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
          <h3 class="box-title">Manfaat mengelola data user dalam sistem.</h3>
        </div>
        <div class="box-body">
          
          <ul>
            <li>Pegawai yang terlibat mendapatkan hak akses untuk menggunakan sistem.</li>
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
@endsection
