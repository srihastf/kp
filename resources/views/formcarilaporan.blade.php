@extends('master')
@section('title','Form Laporan')

 <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Form Cari Laporan
      </h1>
      Laporan akan dicari berdasarkan tahun.
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
              <h3 class="box-title">Laporan Makalah</h3><br/>
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
            <form class="form" method="POST" action="{{ route('laporan.store') }}">
            {{ csrf_field() }}
              <div class="box-body">
              <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <table class="table" style="font-size:15px">
                    <tr>
                      <td><b>Dari tanggal:</b></td>
                      <td><b>Sampai tanggal:</b></td>
                    </tr>
                    <tr>
                      <td><input type="date" class="form-control" name="tahunktiawal"></td>
                      <td><input type="date" class="form-control" name="tahunktiakhir"></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <!-- /.row -->

              <!-- /.box-body -->
              <div class="box-footer">
                <div class="col-md-10">
                  <button type="submit" class="btn btn-success">Cari</button>
                </div>
                <a href="/home"><button type="button" class="btn btn">Batal</button></a>
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