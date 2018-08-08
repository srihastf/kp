@extends('master')
@section('title','Data Bidang SNT')

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
          <th>Nomor SNT</th>
          <th>Nama Bidang</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $d)
        <tr>
          <td>{{$d->kodesnt}}</td>
          <td>{{$d->namabidang}}</td>
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