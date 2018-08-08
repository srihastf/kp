@extends('master')
@section('title','Data Pegawai')

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
          <th>NIP</th>
          <th>Nama Pegawai</th>
				  <th>Golongan</th>
				  <th>Pendidikan Akhir</th>
				  <th>Jurusan</th>
				  <th>Jabatan</th>
				  <th>Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $d)
        <tr>
          <td>{{$d->nip}}</td>
          <td>{{$d->namapegawai}}</td>
				  <th>{{$d->golongan}}</th>
				  <th>{{$d->pendidikanakhir}}</th>
				  <th>{{$d->jurusan}}</th>
				  <th>{{$d->jabatan}}</th>
				  <th>{{$d->status}}</th>
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
