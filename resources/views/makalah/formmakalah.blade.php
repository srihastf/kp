@extends('master')
@section('title','Tambah KTI/Makalah')
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
    <h1>Form Tambah Pengajuan KTI/Makalah</h1>
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
            <h3 class="box-title">Silahkan isi formulir pengajuan.</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form" method="POST" action="{{ route('makalah.store') }}">
          {{ csrf_field() }}
          <div class="box-body">
            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                  <label for="text">Nomor Makalah/KTI</label><br/>
                  <input name="no" type="text" class="form-control"  id="no" placeholder="*contoh:012018 ||  01:no urut kti  2018:tahun kti diajukan" value="{{$nm}}" required autofocus>
                  <small style="color:#3c8dbc">#contoh : <b>012018</b> ||  <b>01</b> : No urut KTI  <b>2018</b> : Tahun KTI diajukan</small>
                </div>
              </div>

              <div class="col-md-7">
                <div class="form-group">
                  <label>Bidang Penelitian</label>
                  <select class="form-control" name="kodesnt" required>
                  <option>---Pilih Bidang---</option>
                  @foreach ($bidang as $namabidang => $kode)
                    <option value="{{ $kode }}"> {{ $kode }} - {{ $namabidang }}</option>   
                  @endforeach
                  </select>
                </div>
              </div>
            </div>
            <!-- /.row -->
            
            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                  <label>Kode KTI</label>
                  <select class="form-control" name="kodekti" required>
                  <option>---Pilih Jenis KTI---</option>
                  @foreach ($kti as $k => $key)
                    <option value="{{ $key }}">{{$key}} - {{ $k }}</option>   
                  @endforeach
                  </select>
                </div>
              </div>

              <div class="col-md-7">
                <div id="sb" class="form-group" style="display:none">
                  <label for="text">Sub. Bidang</label>
                  <select name="subbid" class="form-control" id="subbid">
                    <option>---Pilih Sub.Bidang---</option>
                  </select>
                </div>

                <div id="kl" class="form-group" style="display:none">
                  <label for="text">Kelompok</label>
                  <input type="text" class="form-control" name="kelompok">
                </div>
              </div>
            </div>
            <!-- /.row -->

            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                  <label for="text">Judul Makalah/KTI</label>
                  <textarea type="text" rows="7" class="form-control" name="judulmakalah" required></textarea>
                </div>
              </div>
            
              <div class="col-md-7">
                <div class="form-group">
                  <label for="text">Tujuan</label>
                  <input type="text" class="form-control" name="tujuan" placeholder="*misal: Seminar Nasional" required>
                </div>
                <div class="form-group">
                  <label for="text">Penulis</label>
                  <textarea type="text" rows="3" class="form-control" name="penulis" required></textarea>
                </div>
              </div>
            </div>
            <!-- /.row -->

            <div class="form-group">
              <label for="text">Tanggal Daftar Awal</label>
              <input type="date" class="form-control" name="tgldaftarawal" required>
            </div>

            <div class="row"><div class="col-md-12" style="color:#f22155">Silahkan lewati bagian di bawah ini jika informasi belum lengkap.<br/><br/></div></div>
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="text">Persetujuan Ka.Subbid atau Ka.Kelompok</label>
                  <input type="date" class="form-control" name="accpsubidkapok" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="text">Persetujuan Ka.Bidang</label>
                  <input type="date" class="form-control" name="accpsubidkapok" >
                </div>
              </div>
            </div>
            <!-- /.row -->
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="text">Pemeriksa 1</label>
                  <select class="itemName form-control" name="pemeriksa1" id="pemeriksa"></select>  
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="form-group">
                  <label for="text">Pemeriksa 2</label>
                  <select class="itemName form-control" name="pemeriksa2" id="pemeriksa"></select>  
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
                    <td><input type="date" class="form-control" name="tglterimap1" ></td>
                    <td><input type="date" class="form-control" name="tglaccp1" ></td>
                    <td><select name="statusp1" class="form-control" id="subbid">
                          <option>ACC</option>
                          <option>PERBAIKAN</option>
                        </select></td>
                  </tr>
                  <tr>
                    <td>Pemeriksa 2</td>
                    <td><input type="date" class="form-control" name="tglterimap2" ></td>
                    <td><input type="date" class="form-control" name="tglaccp2" ></td>
                    <td><select name="statusp2" class="form-control" id="subbid">
                          <option>ACC</option>
                          <option>PERBAIKAN</option>
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
                      <td><input type="date" class="form-control" name="ttdkakptf" ></td>
                    </tr>
                    <tr>
                      <td>Diteruskan ke Ka.PSTNT (Makalah/KTI Selesai)</td>
                      <td><input type="date" class="form-control" name="tglselesai" ></td>
                    </tr>
                    <tr>
                      <td>Berkas pada Arsip</td>
                      <td><select name="arsip" class="form-control" id="subbid">
                          <option>TERSEDIA</option>
                          <option>TIDAK TERSEDIA</option>
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
                <a href="/makalah"><button type="button" class="btn btn">Batal</button></a>
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
  $('select[name="kodesnt"]').on('change', function(){
    var Id_bidang = $(this).val();
    if(Id_bidang) {
        $.ajax({
          url: '/subbid/get/'+Id_bidang,
          type:"GET",
          dataType:"json",
          success:function(data) {
            if(!$.trim(data)){
              $('#sb').hide();
              $('select[name="subbid"]').empty();
              $('#kl').css("display","block");
            }else{
              $('#sb').css("display","block");
              $('select[name="subbid"]').empty();
              $.each(data, function(key, value){
                $('select[name="subbid"]').append('<option value="'+ value +'">' + key + '</option>');
              });
              $('#kl').hide();
            }
          },
        });
    } else {
      $('#sb').hide();
      $('select[name="subbid"]').empty();
      $('#kl').css("display","block");
    }
  });

  $('input[name="no"]').on('change', function(){
    var no=$(this).val();
      $.ajax({
        success:function(data) {
          $('input[name="nomormakalah"]').val(no);
        },
      });
  });
});
</script>
<script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>
<script type="text/javascript">
$('.itemName').select2({
  placeholder: 'Masukan Nama',
  ajax: {
    url: '/infopengguna',
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