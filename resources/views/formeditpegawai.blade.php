@extends('master')
@section('title','Tambah Pegawai')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Form Tambah Pegawai
      </h1>
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
                  <input type="text" class="form-control" name="nip" value="{{ $data->nip }}" disable>
                </div>
                <div class="form-group">
                  <label for="text">Nama Lengkap</label>
                  <input type="text" class="form-control" name="nama" value="{{ $data->namapegawai }}" required>
                </div>
                <div class="form-group">
                  <label for="text">Golongan</label>
                  <input type="text" class="form-control" name="golongan" value="{{ $data->golongan }}" required>
                </div>
                <div class="form-group">
                  <label>Pendidikan Akhir</label>
                  <select class="form-control" name="pendidikanakhir" value="{{ $data->pendidikanakhir }}" required>
                    <option>SD</option>
                    <option>SMP</option>
                    <option>SMA</option>
                    <option>SMK</option>
                    <option selected>STM</option>
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
                  <input type="text" class="form-control" name="jurusan" value="{{ $data->jurusan }}" required>
                </div>
                <div class="form-group">
                  <label for="text">Jabatan</label>
                  <input type="text" class="form-control" name="jabatan" value="{{ $data->jabatan }}" required>
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status" value="{{ $data->status }}">
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
