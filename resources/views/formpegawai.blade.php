@extends('master')
@section('title','Tambah Pegawai')

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
       Form Tambah Pegawai
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
              <h3 class="box-title">Silahkan isi dengan data yang sesuai.</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form" method="POST" action="{{ route('pegawai.store') }}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="text">Nomor Induk Pegawai</label>
                  <input type="text" class="form-control" name="nip" id="nip" placeholder="*misal: 19620144 199503 1 001" name="nip" required autofocus>
                </div>
                <div class="form-group">
                  <label for="text">Nama Lengkap</label>
                  <input type="text" class="form-control" name="nama" id="nama" required>
                </div>
                <div class="form-group">
                  <label for="text">Golongan</label>
                  <input type="text" class="form-control" name="golongan" placeholder="*misal: IV/a" required>
                </div>
                <div class="form-group">
                  <label>Pendidikan Akhir</label>
                  <select class="form-control" name="pendidikanakhir">
                    <option>SD</option>
                    <option>SMP</option>
                    <option>SMA</option>
                    <option>SMK</option>
                    <option>STM</option>
                    <option>D1</option>
                    <option>D2</option>
                    <option>D3</option>
                    <option>D4</option>
                    <option>S1</option>
                    <option>S2</option>
                    <option>S3</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="text">Jurusan</label>
                  <input type="text" class="form-control" name="jurusan" placeholder="*misal: IPA/IPS/Ekonomi/dsb.." required>
                </div>
                <div class="form-group">
                  <label for="text">Jabatan</label>
                  <input type="text" class="form-control" name="jabatan" placeholder="*misal: Peneliti Ahli Utama" required>
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status">
                    <option>PNS</option>
                    <option>CPNS</option>
                    <option>PEGAWAI KONTRAK</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <div class="col-md-10">
                  <a href="/pegawai"><button type="button" class="btn btn">Batal</button></a>
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
