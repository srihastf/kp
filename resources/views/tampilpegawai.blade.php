@extends('master')
@section('title','Data Pegawai')

@section('style')
<!-- DataTables -->
<link rel="stylesheet" href="{{url('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Data Pegawai
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('pegawai.create')}}"><button type="button" class="btn btn-block btn-success btn-sm">Tambah Data Pegawai</button></a></li>
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
                    <th>NIP</th>
                    <th>Nama Pegawai</th>
                    <th>Jabatan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $d)
                  <tr>
                    <td>{{$d->nip}}</td>
                    <td>{{$d->namapegawai}}</td>
                    <th>{{$d->jabatan}}</th>
                    <th>{{$d->status}}</th>
                    <th>
                      <form action="{{ route('pegawai.destroy', ['pegawai'=>$d->nip]) }}" method="post">
                        <a href="{{ route('pegawai.show', ['pegawai'=>$d->nip]) }}"><button type="button" class="btn btn-info btn-xs"><i class="fa fa-search"></i> Detail</button></a>
                        <a href="{{ route('pegawai.edit', ['pegawai'=>$d->nip]) }}"><button type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit</button></a>
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
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection