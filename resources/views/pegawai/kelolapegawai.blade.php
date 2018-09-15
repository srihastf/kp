@extends('master')
@section('title','Kelola Pegawai')

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
        Kelola Data Pegawai
      </h1>
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
            <a href="{{url('/tampilpegawai')}}" class="small-box-footer"><h4>Daftar Pegawai</h4> <i class="fa fa-arrow-circle-right"></i></a>
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
            <a href="{{route('pegawai.create')}}" class="small-box-footer"><h4>Tambah Pegawai</h4> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- right col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
