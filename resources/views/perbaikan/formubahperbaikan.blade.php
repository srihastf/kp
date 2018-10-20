@extends('master')
@section('title','Tambah Perbaikan')

 <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Form Tambah Data Perbaikan Makalah/KTI
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
            <form class="form" method="POST" action="{{ route('perbaikan.update',$data->idperbaikan) }}">
              {{ csrf_field() }}
              {{method_field('PUT')}}
              <div class="box-body">
                <label for="text">Makalah : {{$data->nomormakalah}}</label>
                <input type="text" class="form-control" name="nomormakalah" value="{{$data->nomormakalah}}" hide>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="text">Tgl Periksa P1</label>
                      <input type="date" class="form-control" name="tglperiksap1" value="{{$data->tglperiksap1}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="text">Tgl Periksa P2</label>
                      <input type="date" class="form-control" name="tglperiksap2" value="{{$data->tglperiksap2}}">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="text">Tgl Selesai Periksa P1</label>
                      <input type="date" class="form-control" name="tglselesaip1" value="{{$data->tglselesaip1}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="text">Tgl Selesai Periksa P2</label>
                      <input type="date" class="form-control" name="tglselesaip2" value="{{$data->tglselesaip2}}">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                    <label for="text">Status P1</label>
                      <select name="statusp1" class="form-control">
                          @if($data->statusp1=="ACC")<option selected>ACC</option><option>PERBAIKAN</option>
                          @elseif($data->statusp1=="PERBAIKAN")<option selected>PERBAIKAN</option><option>ACC</option>
                          @else($data->statusp1=="")<option>--Pilih--</option><option>ACC</option><option>PERBAIKAN</option>
                          @endif
                        </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    <label for="text">Status P2</label>
                    <select name="statusp2" class="form-control">
                          @if($data->statusp2=="ACC")<option selected>ACC</option><option>PERBAIKAN</option>
                          @elseif($data->statusp2=="PERBAIKAN")<option selected>PERBAIKAN</option><option>ACC</option>
                          @else($data->statusp2=="")<option>--Pilih--</option><option>ACC</option><option>PERBAIKAN</option>
                          @endif
                        </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
                <h4> &nbsp;&nbsp;&nbsp;Pemeriksaan oleh Kepala PSTNT</h4><br/>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="text">Tgl Periksa Ka.PSTNT</label>
                      <input type="date" class="form-control" name="tglperiksakapstnt" value="{{$data->tglperiksakapstnt}}">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="text">Tgl Selesai Periksa Ka.PSTNT</label>
                      <input type="date" class="form-control" name="tglselesaikapstnt" value="{{$data->tglselesaikapstnt}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    <label for="text">Status Ka.PSTNT</label>
                    <select name="statuskapstnt" class="form-control">
                          @if($data->statuskapstnt=="ACC")<option selected>ACC</option><option>PERBAIKAN</option>
                          @elseif($data->statuskapstnt=="PERBAIKAN")<option selected>PERBAIKAN</option><option>ACC</option>
                          @else($data->statuskapstnt=="")<option>--Pilih--</option><option>ACC</option><option>PERBAIKAN</option>
                          @endif
                        </select>
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
    url: '/infomakalah',
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
@endsection

<?php
function formatgl($tanggal){
  if($tanggal!=null){
  $date = date_create($tanggal);
  echo date_format($date,"d-m-Y");
  }
}
?>