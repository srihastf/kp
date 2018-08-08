@extends('master')
@section('title','Data Pemeriksaan Makalah/KTI')

@section('content')
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Beranda</a>
  </li>
  <li class="breadcrumb-item active">@yield('title')</li>
</ol>

<div class="panel panel-default">
  <div class="panel-heading">
    <i class="fa fa-table"></i> @yield('title')
  </div>
  <!-- /.panel-heading -->
  <div class="panel-body">
    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
      <thead>
        <tr>
          <th>Nomor Makalah</th>
          <th>Bidang SNT</th>
          <th>Jenis KTI</th>
          <th>Judul Makalah</th>
          <th>Penulis</th>
          <th>Status</th>
          <th>Aksi</th>
          <button class="btn btn-block btn-success" type="button"><i class="fa-file-text-o"></i>Detail</button>
        </tr>
      </thead>
      <tbody>
      @foreach($data as $d)
        <tr>
          <td>{{$d->nomormakalah}}</td>
          <td>{{$d->kodesnt}}</td>
          <th>{{$d->kodekti}}</th>
          <th>{{$d->judulmakalah}}</th>
          <th>{{$d->penulis}}</th>
          <th>{{$d->tglselesai}}</th>
          <th></th>
        </tr>
      @endforeach
      </tbody>
    </table>
  <!-- /.table-responsive -->
  </div>
<!-- /.panel-body -->
</div>
<!-- /.panel -->
@endsection