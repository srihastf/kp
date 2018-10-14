@extends('master')
@section('title','Edit Pegawai')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Form Edit Pegawai
      </h1>
      Untuk memperbaharui data baru pegawai yang terdaftar pada sistem.
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
              <h3 class="box-title">Silahkan isi dengan data yang sesuai.</h3>
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
            <form class="form" action="{{ route('pegawai.update', $data->nip) }}" method="post" 
            onsubmit="return confirm('Simpan perubahan?')">
              {{csrf_field()}}
              {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <label for="text">Nomor Induk Pegawai</label>
                  <input type="text" class="form-control" name="nip" value="{{ $data->nip }}" readonly>
                </div>
                <div class="form-group">
                  <label>Bidang</label>
                  <select name="bidang" class="form-control" value="{{ $data->bidang }}">
                    @if($data->bidang=="SNT.1") <option value="SNT.1" selected>Tata Usaha</option>
                    @elseif($data->bidang=="SNT.2") <option value="SNT.2" selected>Senyawa Bertanda dan Radiometri</option>
                    @elseif($data->bidang=="SNT.3") <option value="SNT.3" selected>Teknofisika</option>
                    @elseif($data->bidang=="SNT.4") <option value="SNT.4" selected>Reaktor</option>
                    @elseif($data->bidang=="SNT.5") <option value="SNT.5" selected>Keselamatan Kerja dan Keteknikan</option>
                    @elseif($data->bidang=="SNT.6") <option value="SNT.6" selected>Unit Jaminan Mutu</option>
                    @elseif($data->bidang=="SNT.7") <option value="SNT.7" selected>Unit Pengamanan Nuklir</option>
                    @endif
                    @foreach ($bidang as $b => $key)
                      <option value="{{ $key }}"> {{ $b }}</option>   
                    @endforeach
                  </select>
                  </div>
                  <div class="form-group">
                  <label>Sub.Bidang</label>
                  <select name="subbid" class="form-control" value="{{ $data->subbid }}">
                    @if($data->subbid=="ABNPD") <option value="ABNPD" selected>AKUNTANSI BAHAN NUKLIR DAN PERENCANAAN DEKOMISIONING</option>
                    @elseif($data->subbid=="KETEKNIKAN") <option value="KETEKNIKAN"  selected>KETEKNIKAN</option>
                    @elseif($data->subbid=="KEUANGAN") <option value="KEUANGAN"  selected>KEUANGAN</option>
                    @elseif($data->subbid=="KKPR") <option value="KKPR"  selected>KESELAMATAN KERJA DAN PROTEKSI RADIASI</option>
                    @elseif($data->subbid=="OP") <option value="OP"  selected>OPERASI DAN PERAWATAN</option>
                    @elseif($data->subbid=="PERLENGKAPAN") <option value="PERLENGKAPAN"  selected>PERLENGKAPAN</option>
                    @elseif($data->subbid=="PKDI") <option value="PKDI"  selected>PERSURATAN, KEPEGAWAIAN DAN DOKUMENTASI ILMIAH</option>
                    @endif
                    
                  </select>
                  </div>
                <div class="form-group">
                  <label for="text">Nama Lengkap</label>
                  <input type="text" class="form-control" name="nama" value="{{ $data->namapegawai }}" required>
                </div>
                <div class="form-group">
                  <label for="text">Golongan</label>
                  <input type="text" class="form-control" name="golongan" value="{{ $data->golongan }}" required>
                </div>
                <div class="form-group">
                  <label>Pendidikan Akhir</label>
                  <select class="form-control" name="pendidikanakhir" value="{{ $data->pendidikanakhir }}" required>
                    @if($data->pendidikanakhir=="SD")<option selected>SD</option>
                    @elseif($data->pendidikanakhir=="SMP")<option selected>SMP</option>
                    @elseif($data->pendidikanakhir=="SMA")<option selected>SMA</option>
                    @elseif($data->pendidikanakhir=="SMK")<option selected>SMK</option>
                    @elseif($data->pendidikanakhir=="STM")<option selected>STM</option>
                    @elseif($data->pendidikanakhir=="D1")<option selected>D1</option>
                    @elseif($data->pendidikanakhir=="D2")<option selected>D2</option>
                    @elseif($data->pendidikanakhir=="D3")<option selected>D3</option>
                    @elseif($data->pendidikanakhir=="D4")<option selected>D4</option>
                    @elseif($data->pendidikanakhir=="S1")<option selected>S1</option>
                    @elseif($data->pendidikanakhir=="S2")<option selected>S2</option>
                    @elseif($data->pendidikanakhir=="S3")<option selected>S3</option>
                    @endif
                    
                    <option>SD</option>
                    <option>SMP</option>
                    <option>SMA</option>
                    <option>SMK</option>
                    <option>STM</option>
                    <option>D1</option>
                    <option>D2</option>
                    <option>D3</option>
                    <option>D4</option>
                    <option>S1</option>
                    <option>S2</option>
                    <option>S3</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="text">Jurusan</label>
                  <input type="text" class="form-control" name="jurusan" value="{{ $data->jurusan }}" required>
                </div>
                <div class="form-group">
                  <label for="text">Jabatan</label>
                  <input type="text" class="form-control" name="jabatan" value="{{ $data->jabatan }}" required>
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status" value="{{ $data->status }}">
                    @if($data->status=="PNS") <option selected>PNS</option>
                    @elseif($data->status=="CPNS") <option selected>CPNS</option>
                    @elseif($data->status=="PEGAWAI KONTRAK") <option selected>PEGAWAI KONTRAK</option>
                    @endif
                    <option>PNS</option>
                    <option>CPNS</option>
                    <option>PEGAWAI KONTRAK</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <div class="col-md-10">
                  <a href="/tampilpegawai"><button type="button" class="btn btn">Batal</button></a>
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
<script type="text/javascript">
$(document).ready(function() {

$('select[name="bidang"]').on('change', function(){
    var Id_bidang = $(this).val();
    if(Id_bidang) {
        $.ajax({
            url: '/subbid/get/'+Id_bidang,
            type:"GET",
            dataType:"json",
            beforeSend: function(){
                $('#loader').css("visibility", "visible");
            },
            success:function(data) {
                $('select[name="subbid"]').empty();
                $.each(data, function(key, value){
                    $('select[name="subbid"]').append('<option value="'+ value +'">' + key + '</option>');
                });
            },
            complete: function(){
                $('#loader').css("visibility", "hidden");
            }
        });
    } else {
        $('select[name="subbid"]').empty();
    }
});
});
</script>
@endsection