@extends('master')
@section('title','Ubah User')

 <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Form Ubah User
      </h1>
      Untuk memperbaharui data baru user yang terdaftar pada sistem.
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
            <form class="form" action="{{ route('user.update', $data->id) }}" method="post">
              {{ csrf_field() }}
              {{method_field('PUT')}}
              <div class="box-body">

                <div class="form-group">
                  <label for="text">Nama Lengkap</label>
                  <input type="text" class="form-control" name="name" id="name" value="{{$data->name}}" required>
                  <input type="text" name="nip" id="nip" value="{{$data->nip}}" hidden>
                </div>
                <div class="form-group">
                  <label for="email">E-mail</label>
                  <input type="email" class="form-control" name="email" placeholder="*misal: admin@mail.com" value="{{$data->email}}" required>
                </div>
                <div class="form-group">
                  <label>Sebagai</label>
                  <select class="form-control" name="status">
                    @if($data->status=="Admin")<option selected>Admin</option>
                    @elseif($data->status=="Sekertaris KPTF/KPTP")<option selected>Sekertaris KPTF/KPTP</option>
                    @elseif($data->status=="Pegawai")<option selected>Pegawai</option>
                    @elseif($data->status=="Kepala PSTNT")<option selected>Kepala PSTNT</option>
                    @endif
                    <option>Admin</option>
                    <option>Sekertaris KPTF/KPTP</option>
                    <option>Pegawai</option>
                    <option>Kepala PSTNT</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="text">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password" required>
                  <small></small>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="col-md-10">
                  <button type="submit" class="btn btn-success">Simpan Data</button>
                </div>
                <a href="/user"><button type="button" class="btn btn">Batal</button></a>
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
