@extends('master')
@section('title','Data Perbaikan KTI')

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
          <th>Id Perbaikan</th>
          <th>Nomor Makalah</th>
          <th>Nomor Pemeriksa</th>
          <th>Pemeriksa</th>
          <th>Tanggal selesai periksa</th>
          <th>File Revisi</th>
          <th>Tanggal diperbaiki</th>
          <th>File Perbaikan</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $d)
        <tr>
          <td>{{$d->idperbaikan}}</td>
          <td>{{$d->nomormakalah}}</td>
          <td>{{$d->nopemeriksa}}</td>
          <td>{{$d->pemeriksa}}</td>
          <td>{{$d->tglselesaiperiksa}}</td>
          <td>{{$d->filerevisi}}</td>
          <td>{{$d->tglselesaiperbaikan}}</td>
          <td>{{$d->fileperbaikan}}</td>
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