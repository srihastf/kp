@extends('master')
@section('title','Tambah Peminjaman')

 <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Form Tambah Peminjaman Makalah/KTI
      </h1>
      Untuk melakukan booking peminjaman makalah/KTI.
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
              <h3 class="box-title">Silahkan isi untuk melakukan booking.</h3><br/>
              @if($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form" method="POST" action="{{ route('peminjaman.store') }}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="text">Makalah</label>
                  <select class="itemName form-control" name="nomormakalah" id="nomormakalah" required></select>  
                </div>

                <div class="form-group">
                  <label for="text">Nama Lengkap</label>
                  <select class="itemName2 form-control" name="nip" id="nip" required></select>  
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="text">Tgl Booking</label>
                      <input type="date" class="form-control" name="tglbooking" >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="text">Konfirmasi Peminjman</label>
                      <select name="status" class="form-control">
                        <option>ACC</option>
                        <option>PERBAIKAN</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="text">Tgl dipinjam</label>
                      <input type="date" class="form-control" name="tglpinjam" >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="text">Tgl dikembalikan</label>
                      <input type="date" class="form-control" name="tglkembali" >
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="col-md-10">
                  <button type="submit" class="btn btn-success">Simpan Data</button>
                </div>
                <a href="/perbaikan"><button type="button" class="btn btn">Batal</button></a>
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

@section('jsstyle')
<script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>
<script type="text/javascript">
$('.itemName').select2({
  placeholder: 'Masukan Nama',
  ajax: {
    url: '/infomakalah2',
    dataType: 'json',
    delay: 250,
    processResults: function (data) {
      return {
        results:  $.map(data, function (item) {
              return {
                  text: item.judulmakalah,
                  id: item.nomormakalah
              }
          })
      };
    },
  }
});
</script>
<script type="text/javascript">
$('.itemName2').select2({
  placeholder: 'Masukan Nama',
  ajax: {
    url: '/infouser',
    dataType: 'json',
    delay: 250,
    processResults: function (data) {
      return {
        results:  $.map(data, function (item) {
              return {
                  text: item.namapegawai,
                  id: item.nip
              }
          })
      };
    },
  }
});
</script>
@endsection