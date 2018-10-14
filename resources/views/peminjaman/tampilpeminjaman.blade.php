@extends('master')
@section('title','Data Peminjaman')

@section('style')
<!-- DataTables -->
<link rel="stylesheet" href="{{url('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

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
        Daftar Data Peminjaman Makalah/KTI
      </h1>
      Data Peminjaman Makalah/KTI yang tercatat dalam sistem.
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i> Beranda</a></li>
        <li class="breadcrumb-item active">@yield('title')</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>Makalah</th>
                    <th>Status</th>
                    <th width="160">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $d)
                  <tr>
                    <td><b>{{$d->idpinjam}}</b></td>
                    <td>@foreach ($makalah as $s => $key)@if($key==$d->nomormakalah)<b>{{$s}}</b>@endif @endforeach<br/>
                    Dipinjam oleh : @foreach ($pegawai as $s => $key)@if($key==$d->nip){{$s}}@endif @endforeach</th>
                    <th>{{$d->status}}</th>
                    <th>
                      <form action="{{ route('peminjaman.destroy', ['peminjaman'=>$d->idpinjam]) }}" method="post"
                      onsubmit="return confirm('Anda yakin akan menghapus data?')">
                        <a href="{{ route('peminjaman.show', ['peminjaman'=>$d->idpinjam]) }}"><button type="button" class="btn btn-info btn-xs"><i class="fa fa-search"></i> Lihat</button></a>
                        <a href="{{ route('peminjaman.edit', ['peminjaman'=>$d->idpinjam]) }}"><button type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Ubah</button></a>
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-minus-square"></i> Hapus</button>
                      </form>
                    </th>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-2">
          <a href="{{route('peminjaman.create')}}"><button class="btn btn-block btn-sm btn-success" type="button">Tambah Data Baru</button></a>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('jsstyle')
<!-- DataTables -->
<script src="{{url('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
  })

</script>
@endsection