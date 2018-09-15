@extends('master')
@section('title','Edit KTI/Makalah')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="flash-message">
      @foreach(['danger','warning','success','info'] as $msg)
        @if(Session::has('alert-'.$msg))
          <p class="alert alert-{{ $msg }}">{{ Session::get('alert-'.$msg) }}
            <a href="#" class="close" data-dismiss="alert" aria-label="close"> &times;</a>
          </p>
        @endif
      @endforeach
    </div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Form Ubah Pengajuan KTI/Makalah
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i> Beranda</a></li>
        </li>
        <li class="breadcrumb-item active">@yield('title')</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content justify-center">
      <div class="row">
        <!-- left column -->
        <div class="col-md-11">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Silahkan isi formulir pengajuan.</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form" method="POST" action="{{ route('makalah.store') }}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="text">Nomor Makalah</label>
                  <input type="text" class="form-control" name="no" id="no" placeholder="*misal:012018" name="no" required autofocus>
                </div>
                <div class="form-group">
                  <label>Kode SNT</label>
                  <select class="form-control" name="kodesnt">
                    <option>SNT.1</option>
                    <option>SNT.2</option>
                    <option>SNT.3</option>
                    <option>SNT.4</option>
                    <option>SNT.5</option>
                    <option>SNT.6</option>
                    <option>SNT.7</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Kode KTI</label>
                  <select class="form-control" name="kodekti">
                    <option>KTI-1</option>
                    <option>KTI-2</option>
                    <option>KTI-3</option>
                    <option>KTI-4</option>
                    <option>KTI-5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="text">Sub. Bidang/ Kelompok</label>
                  <input type="text" class="form-control" name="subidnkelompok" placeholder="*misal: Teknologi Proses Radioisotop" >
                </div>
                <div class="form-group">
                  <label for="text">Judul</label>
                  <textarea type="text" class="form-control" name="judulmakalah" ></textarea>
                </div>
                <div class="form-group">
                  <label for="text">Tujuan</label>
                  <input type="text" class="form-control" name="tujuan" placeholder="*misal: Seminar Nasional" >
                </div>
                <div class="form-group">
                  <label for="text">Penulis</label>
                  <textarea type="text" class="form-control" name="penulis" ></textarea>
                </div>

                <div class="form-group">
                  <label for="text">Pemeriksa 1</label>
                  <input type="text" class="form-control" name="pemeriksa1" placeholder="" >
                </div>
                <div class="form-group">
                  <label for="text">Pemeriksa 2</label>
                  <input type="text" class="form-control" name="pemeriksa2" placeholder="" >
                </div>

                <div class="form-group">
                  <label for="text">Tanggal Daftar Awal</label>
                  <input type="date" class="form-control" name="tgldaftarawal" value="{{date("Y-m-d")}}" >
                </div>

                <div class="form-group">
                  <label for="text">Disetujui Ka.Subid/Kelompok</label>
                  <input type="date" class="form-control" name="accpsubidkapok" placeholder="{{date("Y-m-d")}}" >
                </div>

                <div class="form-group">
                  <label for="text">Disetujui Ka.Bid</label>
                  <input type="date" class="form-control" name="accpkabid" placeholder="{{date("Y-m-d")}}" >
                </div>

                <div class="form-group">
                  <label for="text">Diterima Pemeriksa 1</label>
                  <input type="date" class="form-control" name="tglterimap1" placeholder="{{date("Y-m-d")}}" >
                </div>
                <div class="form-group">
                  <label for="text">Diterima Pemeriksa 2</label>
                  <input type="date" class="form-control" name="tglterimap2" placeholder="{{date("Y-m-d")}}" >
                </div>

                <div class="form-group">
                  <label for="text">Tgl ACC P1</label>
                  <input type="date" class="form-control" name="tglaccp1" placeholder="{{date("Y-m-d")}}" >
                </div>
                <div class="form-group">
                  <label for="text">Tgl ACC P2</label>
                  <input type="date" class="form-control" name="tglaccp2" placeholder="{{date("Y-m-d")}}" >
                </div>
                
                <div class="form-group">
                  <label>Status P1</label>
                  <select class="form-control" name="statusp1">
                    <option>ACC</option>
                    <option>PERBAIKAN</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Status P2</label>
                  <select class="form-control" name="statusp2">
                    <option>ACC</option>
                    <option>PERBAIKAN</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="text">Tgl Selesai</label>
                  <input type="date" class="form-control" name="tglselesai" placeholder="{{date("Y-m-d")}}" >
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <div class="col-md-10">
                  <a href="/makalah"><button type="button" class="btn btn">Batal</button></a>
                </div>
                <button type="submit" class="btn btn-success">Simpan Data</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
