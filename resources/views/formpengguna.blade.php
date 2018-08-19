@extends('master')
@section('title','Tambah Pengguna')

 <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Form Tambah Pengguna
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
              <h3 class="box-title">Silahkan isi dengan data yang sesuai.</h3><br/>
              <small>*diharuskan menambah data pegawai terlebih dahulu.</small>
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
            <form class="form" method="POST" action="{{ route('pengguna.store') }}">
              {{ csrf_field() }}
              <div class="box-body">

                <div class="form-group">
                  <label for="text">Nama Lengkap</label>
                  <!--<input type="text" class="form-control" name="name" id="name" required>-->
                  <select class="itemName form-control" name="nip" id="nip" required></select>  
                </div>
                <div class="form-group">
                  <label for="email">E-mail</label>
                  <input type="email" class="form-control" name="email" placeholder="*misal: admin@mail.com" required>
                </div>
                <div class="form-group">
                  <label>Sebagai</label>
                  <select class="form-control" name="status">
                    <option>Admin</option>
                    <option>Sekertaris KPTF/KPTP</option>
                    <option>Pegawai</option>
                    <option>Kepala PSTNT</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <div class="col-md-10">
                  <a href="/pengguna"><button type="button" class="btn btn">Batal</button></a>
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

@section('jsstyle')
<script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>
<script type="text/javascript">
$('.itemName').select2({
  placeholder: 'Masukan Nama',
  ajax: {
    url: '/infopengguna',
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