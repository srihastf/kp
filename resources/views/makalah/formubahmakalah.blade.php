@extends('master')
@section('title','Edit Makalah/KTI')

<link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">

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
    <h1>Form Ubah Pengajuan KTI/Makalah</h1>
    <ol class="breadcrumb">
      <li><a href="/home"><i class="fa fa-home"></i> Beranda</a></li>
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
            <h3 class="box-title">Silahkan tambah informasi pengajuan dalam formulir.</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form" method="POST" action="{{ route('makalah.update', $data->nomormakalah) }}">
          {{csrf_field()}}
          {{method_field('PUT')}}
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <table class="table table-bordered" style="font-size:15px"><tr style="background:#ebf9ff"><td>
                  <label for="text">Nomor Makalah/KTI :</label>
                  <b style="color:#3c8dbc" >{{substr($data->nomormakalah,0,2)}}/{{$data->kodesnt}}/{{$data->kodekti}}/{{substr($data->tgldaftarawal,0,4)}}</b>
                </td></tr></table>
              </div>
            </div>

            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                  <label for="text">Judul Makalah/KTI</label>
                  <textarea type="text" rows="7" col="3"class="form-control" name="judulmakalah">{{$data->judulmakalah}}</textarea>
                </div>
              </div>
            
              <div class="col-md-7">
                <div class="form-group">
                  <label for="text">Tujuan</label>
                  <input type="text" class="form-control" name="tujuan" placeholder="*misal: Seminar Nasional" value="{{$data->tujuan}}">
                </div>
                <div class="form-group">
                  <label for="text">Penulis</label>
                  <textarea type="text" rows="3" class="form-control" name="penulis" readonly>{{$data->penulis}}</textarea>
                </div>
              </div>
            </div>
            <!-- /.row -->
            
            <div class="row"><div class="col-md-12" style="color:#f22155">Silahkan lewati bagian di bawah ini jika informasi belum lengkap.<br/><br/></div></div>
            
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="text">Persetujuan Ka.Subbid atau Ka.Kelompok</label>
                  <input type="date" class="form-control" name="accpsubidkapok" placeholder="{{$data->accpsubidkapok}}" value="{{$data->accpsubidkapok}}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="text">Persetujuan Ka.Bidang</label>
                  <input type="date" class="form-control" name="accpkabid" placeholder="{{$data->accpkabid}}" value="{{$data->accpkabid}}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="text">Persetujuan Ka.KPTF/KPTP</label>
                  <input type="date" class="form-control" name="acckakptf" placeholder="{{$data->acckakptf}}" value="{{$data->acckakptf}}">
                </div>
              </div>
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="text">Pemeriksa 1</label>
                  @if($data->pemeriksa1=="")
                    <select class="itemName form-control" name="pemeriksa1" id="pemeriksa"></select>  
                  @else
                    <input type="text" class="form-control" name="pemeriksa1" value="{{$data->pemeriksa1}}">
                  @endif
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="form-group">
                  <label for="text">Pemeriksa 2</label>
                  @if($data->pemeriksa1=="")
                    <select class="itemName form-control" name="pemeriksa2" id="pemeriksa"></select>  
                  @else
                    <input type="text" class="form-control" name="pemeriksa2" value="{{$data->pemeriksa2}}">
                  @endif
                </div>
              </div>
            </div>
            <!-- /.row -->

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <table class="table table-bordered" style="font-size:15px">               
                  <tr>
                    <b>Pemeriksaan Karya Tulis Ilmiah/ Makalah</b>
                  </tr>
                  <tr style="background:#ebf9ff">
                    <td>No</td>
                    <td>Tanggal diterima</td>
                    <td>Persetujuan Pemeriksa / selesai pemeriksaan </td>
                    <td>Keterangan</td>
                  </tr>
                  <tr>
                    <td>Pemeriksa 1</td>
                    <td><input type="date" class="form-control" name="tglterimap1" placeholder="{{$data->tglterimap1}}" value="{{$data->tglterimap1}}"></td>
                    <td><input type="date" class="form-control" name="tglaccp1" placeholder="{{$data->tglaccp1}}" value="{{$data->tglaccp1}}"></td>
                    <td><select name="statusp1" class="form-control">
                          @if($data->statusp1=="ACC")<option selected>ACC</option><option>PERBAIKAN</option>
                          @elseif($data->statusp1=="PERBAIKAN")<option selected>PERBAIKAN</option><option>ACC</option>
                          @else($data->statusp1=="")<option>ACC</option><option>PERBAIKAN</option>
                          @endif
                        </select></td>
                  </tr>
                  <tr>
                    <td>Pemeriksa 2</td>
                    <td><input type="date" class="form-control" name="tglterimap2" placeholder="{{$data->tglterimap2}}" value="{{$data->tglterimap2}}"></td>
                    <td><input type="date" class="form-control" name="tglaccp2" placeholder="{{$data->tglaccp2}}" value="{{$data->tglaccp2}}"></td>
                    <td><select name="statusp2" class="form-control">
                          @if($data->statusp2=="ACC")<option selected>ACC</option><option>PERBAIKAN</option>
                          @elseif($data->statusp2=="PERBAIKAN")<option selected>PERBAIKAN</option><option>ACC</option>
                          @else($data->statusp2=="")<option>ACC</option><option>PERBAIKAN</option>
                          @endif
                        </select></td>
                  </tr>
                  </table>
                </div>
              </div>
            </div>
            <!-- /.row -->

            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <table class="table table-bordered" style="font-size:15px">
                    <tr style="background:#ebf9ff">
                      <td colspan="2"><b>Informasi KTI/Makalah</b></td>
                    <tr>
                    <tr>
                      <td>Diteruskan ke Ka.KPTF/KPTP</td>
                      <td><input type="date" class="form-control" name="ttdkakptf" placeholder="{{$data->ttdkakptf}}" value="{{$data->ttdkakptf}}"></td>
                    </tr>
                    <tr>
                      <td>Diteruskan ke Ka.PSTNT (Makalah/KTI Selesai)</td>
                      <td><input type="date" class="form-control" name="tglselesai" placeholder="{{$data->tglselesai}}" value="{{$data->tglselesai}}"></td>
                    </tr>
                    <tr>
                      <td>Berkas pada Arsip</td>
                      <td><select name="arsip" class="form-control">
                          @if($data->arsip=="TERSEDIA")<option selected>TERSEDIA</option><option>TIDAK TERSEDIA</option>
                          @elseif($data->arsip=="TIDAK TERSEDIA")<option selected>TIDAK TERSEDIA</option><option>TERSEDIA</option>
                          @endif
                        </select></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <!-- /.row -->

            <!-- /.box-body -->              
            <div class="box-footer">
              <div class="col-md-10">
                <button type="submit" class="btn btn-success">Simpan Data</button>
              </div>
              <a href="{{ route('makalah.show', ['makalah'=>$data->nomormakalah]) }}"><button type="button" class="btn btn">Batal</button></a>
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