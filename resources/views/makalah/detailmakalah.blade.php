@extends('master')
@section('title','Detail Makalah')

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
        Data Detail Pengajuan Pemeriksaan Karya Tulis Ilmiah/ Makalah
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i>Beranda</a></li>
        <li><a href="/makalah">Data KTI/Makalah</a></li>
        <li class="active">Detail KTI/Makalah</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr style="background:#c5f3fd">
                  <td colspan="3" align="center"><img src="{{ asset('img/Logo_Baru_BATAN.png') }}" style="width:90px"></td>
                  <td colspan="2" align="center"><b><h3>BADAN TENAGA NUKLIR NASIONAL</h3>
                    <small>PUSAT SAINS DAN TEKNOLOGI NUKLIR TERAPAN<br/>Jl.Tamansari No.71 Bandung 40132<br/><br/></small></b>
                  </td>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Judul</td>
                  <td>:</td>
                  <td>{{ $data->judulmakalah }}</td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Jenis Karangan</td>
                  <td>:</td>
                  <td>@foreach ($kti as $s => $key)@if($key==$data->kodekti){{$s}}@endif @endforeach</td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Penulis</td>
                  <td>:</td>
                  <td>{{ $data->penulis }}</td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Sub. Bidang / Kelompok</td>
                  <td>:</td>
                  <?php $subidnkelompok=$data->subidnkelompok;?>
                  <td>@foreach ($subbid as $s => $key)@if($key==$data->subidnkelompok) $subidnkelompok = $s @endif @endforeach {{$subidnkelompok}}</td>
                </tr>
                <tr>
                  <td>5.</td>
                  <td>Bidang/Balai/Instalasi</td>
                  <td>:</td>
                  <td>@foreach ($bidang as $s => $key)@if($key==$data->kodesnt) {{$s}} @endif @endforeach</td>
                </tr>
                <tr>
                  <td>6.</td>
                  <td>Untuk diterbitkan/disajikan</td>
                  <td>:</td>
                  <td>{{ $data->tujuan }}</td>
                </tr>
              </table>
            
              <table class="table table-bordered">
              <tr style="background:#f5f3a0">
                  <td><b>Nomor Makalah : {{substr($data->nomormakalah,0,2)}}/{{$data->kodesnt}}/{{$data->kodekti}}/{{substr($data->tgldaftarawal,0,4)}}
                    </b>
                  </td>
                  <td><b>Tanggal : {{ formatgl($data->tgldaftarawal) }}</b></td>
                </tr>
              </table>
              <br/>

              <div class="row">
              <div class="col-md-5">
              <table class="table table-bordered">               
                <tr style="background:#ebf9ff">
                  <td> Disetujui untuk diperiksa, oleh : </td>
                  <td>pada tanggal : </td>
                </tr>
                <tr>
                  <td>Ka.Subbid/Kelompok</td>
                  <td>
                  @if($data->accpsubidkapok!="")
                    {{formatgl($data->accpsubidkapok)}}
                  @else
                    <a href="{{ route('makalah.edit',['makalah'=>$data->nomormakalah])}}"> - Isi Tanggal -</a>
                  @endif
                  </td>
                </tr>
                <tr>
                  <td>Ka.Bidang</td>
                  <td>
                  @if($data->accpkabid!="")
                    {{formatgl($data->accpkabid)}}
                  @else
                    <a href="{{route('makalah.edit',['makalah'=>$data->nomormakalah])}}"> - Isi Tanggal -</a>
                  @endif
                  </td>
                </tr>
                </table>
              </div>

              <div class="col-md-7">
              <table class="table table-bordered">               
                <tr style="background:#ebf9ff">
                  <td colspan="2"> Pengesahan pengusulan/pengajuan : </td>
                </tr>
                <tr>
                  <td>Diterima Ka.KPTF/KPTP</td>
                  <td>
                  @if($data->acckakptf!="")
                    {{formatgl($data->acckakptf)}}
                  @else
                    <a href="{{route('makalah.edit',['makalah'=>$data->nomormakalah])}}"> - Isi Tanggal -</a>
                  @endif
                  </td>
                </tr>
                </table>
              </div>
              </div>
              <div class="row">
              <div class="col-md-12">
              <table class="table table-bordered">               
                <tr style="background:#ebf9ff">
                  <b>Pemeriksaan Karya Tulis Ilmiah/ Makalah</b>
                </tr>
                <tr style="background:#ebf9ff">
                  <td>No</td>
                  <td>Pemeriksa</td>
                  <td>Tanggal diterima</td>
                  <td width="400">Persetujuan Pemeriksa (selesai pemeriksaan)</td>
                  <td>Keterangan</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>
                    @if($data->pemeriksa1!="") @foreach ($pegawai as $s => $key)@if($key==$data->pemeriksa1){{$s}}@endif @endforeach 
                    @else 
                    @if(Auth::user()->status=="Sekertaris KPTF/KPTP")
                        <a href="{{route('makalah.edit',['makalah'=>$data->nomormakalah])}}"> Isi Pemeriksa</a>
                      @endif
                    @endif
                  </td>
                  <td>
                    @if($data->tglterimap1!="") {{formatgl($data->tglterimap1)}}
                    @else
                    @if(Auth::user()->status=="Sekertaris KPTF/KPTP")
                        <a href="{{route('makalah.edit',['makalah'=>$data->nomormakalah])}}"> - Isi Tanggal -</a>
                      @endif
                    @endif
                  </td>
                  <td>
                    @if($data->tglaccp1!="") {{formatgl($data->tglaccp1)}}
                    @else 
                      @if(Auth::user()->status=="Sekertaris KPTF/KPTP")
                        <a href="{{route('makalah.edit',['makalah'=>$data->nomormakalah])}}"> - Isi Tanggal -</a>
                      @endif
                    @endif
                  </td>
                  <td>@if($data->statusp1!=""){{$data->statusp1}}
                  @else 
                    @if(Auth::user()->status=="Sekertaris KPTF/KPTP")
                      <a href="{{route('makalah.edit',['makalah'=>$data->nomormakalah])}}">Tambah Status</a>
                    @endif
                  @endif</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>
                    @if($data->pemeriksa2!="") @foreach ($pegawai as $s => $key)@if($key==$data->pemeriksa2){{$s}}@endif @endforeach
                    @else 
                      @if(Auth::user()->status=="Sekertaris KPTF/KPTP")
                        <a href="{{route('makalah.edit',['makalah'=>$data->nomormakalah])}}">Isi Pemeriksa</a>
                      @endif
                    @endif
                  </td>
                  <td>
                    @if($data->tglterimap2!="") {{formatgl($data->tglterimap2)}}
                    @else 
                      @if(Auth::user()->status=="Sekertaris KPTF/KPTP")
                        <a href="{{route('makalah.edit',['makalah'=>$data->nomormakalah])}}"> - Isi Tanggal -</a>
                      @endif
                    @endif
                  </td>
                  <td>
                    @if($data->tglaccp2!="") {{formatgl($data->tglaccp2)}}
                    @else 
                      @if(Auth::user()->status=="Sekertaris KPTF/KPTP")
                        <a href="{{route('makalah.edit',['makalah'=>$data->nomormakalah])}}"> - Isi Tanggal -</a>
                      @endif
                    @endif
                  </td>
                  <td>
                    @if($data->statusp2!=""){{$data->statusp2}}
                    @else 
                      @if(Auth::user()->status=="Sekertaris KPTF/KPTP")
                        <a href="{{route('makalah.edit',['makalah'=>$data->nomormakalah])}}"> Tambah Status</a>
                      @endif
                  @endif</td>
                </tr>
              </table>
              </div>
              </div>

            @if($data->statusp1=="PERBAIKAN" || $data->statusp2=="Perbaikan")
              <table class="table table-bordered">               
                <tr style="background:#ebf9ff">
                  <b>Perbaikan Karya Tulis Ilmiah/ Makalah</b>
                </tr>
                <tr style="background:#ebf9ff">
                  <td width="250">Oleh Pemeriksa : </td>
                  <td>Tanggal diperiksa</td>
                  <td width="400">Selesai diperiksa</td>
                  <td width="150">Status</td>
                </tr>
                
                @foreach($perbaikan as $s)
                  @if($s->statusp1!=null)
                  <tr>
                    <td>1</td>
                    <td>{{formatgl($s->tglperiksap1)}}</td>
                    <td>{{formatgl($s->tglselesaip1)}}</td>
                    <td>{{$s->statusp1}}</td>
                  </tr>
                  @endif
                  @if($s->statusp2!=null)
                  <tr>
                    <td>2</td>
                    <td>{{formatgl($s->tglperiksap2)}}</td>
                    <td>{{formatgl($s->tglselesaip2)}}</td>
                    <td>{{$s->statusp2}}</td>
                  </tr>
                  @endif
                  @if($s->statuskapstnt!=null)
                  <tr>
                    <td>Ka.PSTNT</td>
                    <td>{{formatgl($s->tglperiksakapstnt)}}</td>
                    <td>{{formatgl($s->tglselesaikapstnt)}}</td>
                    <td>{{$s->statuskapstnt}}</td>
                  </tr>
                  @endif
                @endforeach
            </table>
            @endif
            <br/>

              <table class="table table-bordered">
                <tr style="background:#ebf9ff">
                  <td colspan="2">Informasi KTI/Makalah</td>
                <tr>
                <tr>
                  <td>Diteruskan ke Ka.KPTF/KPTP</td>
                  <td>
                    @if($data->ttdkakptf!="") {{formatgl($data->ttdkakptf)}}
                    @else 
                    @if(Auth::user()->status=="Sekertaris KPTF/KPTP")
                        <a href="{{route('makalah.edit',['makalah'=>$data->nomormakalah])}}"> - Isi Tanggal -</a>
                      @endif
                    @endif
                  </td>
                </tr>
                <tr>
                  <td>Diteruskan ke Ka.PSTNT</td>
                  <td>
                    @if($data->tglselesai!="") {{formatgl($data->tglselesai)}}
                    @else 
                    @if(Auth::user()->status=="Sekertaris KPTF/KPTP")
                        <a href="{{route('makalah.edit',['makalah'=>$data->nomormakalah])}}"> - Isi Tanggal -</a>
                      @endif
                    @endif
                  </td>
                </tr>
                <tr>
                  <td>Makalah Selesai pada</td>
                  <td>
                    @if($data->tglselesai!="") {{formatgl($data->tglselesai)}}
                    @else
                      @if(Auth::user()->status=="Sekertaris KPTF/KPTP")
                        <a href="{{route('makalah.edit',['makalah'=>$data->nomormakalah])}}"> - Isi Tanggal -</a>
                      @endif
                    @endif
                  </td>
                </tr>
                <tr>
                  <td>Berkas pada Arsip</td>
                  <td>
                  @if($data->arsip=="TERSEDIA")
                  <button type="button" class="btn btn-success btn-xs"><b>{{ $data->arsip }}</b></button>
                  @else
                  <button type="button" class="btn btn-danger btn-xs"><b>{{ $data->arsip }}</b></button>
                  @endif
                  </td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
              
              <form action="{{ route('makalah.destroy', ['makalah'=>$data->nomormakalah]) }}" method="post"
                  onsubmit="return confirm('Anda yakin akan menghapus data?')">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                @if(Auth::user()->status=="Sekertaris KPTF/KPTP")
                <a href="{{route('makalah.edit',['makalah'=>$data->nomormakalah])}}">
                  <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-minus-square"></i> Ubah</button>
                </a>
                <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-minus-square"></i> Hapus</button>
                @endif
              </form>
              </ul>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
      @if(Auth::user()->status=="Sekertaris KPTF/KPTP")
      <div class="row">
        <div class="col-md-3">
          <a href="/makalah"><button class="btn btn-block btn-sm btn-primary" type="button">Kembali ke Daftar KTI/Makalah</button></a>
        </div>
      </div>
      @elseif(Auth::user()->status=="Pegawai")
      <div class="row">
        <div class="col-md-3">
          <a href="/tampilmakalah/{{Auth::user()->name}}"><button class="btn btn-block btn-sm btn-primary" type="button"> Kembali ke Daftar KTI/Makalah</button></a>
        </div>
      </div>
      @endif
    </section>
    <!-- /.content -->
  </div>
@endsection

<?php
function formatgl($tanggal){
  if($tanggal!=null){
  $date = date_create($tanggal);
  echo date_format($date,"d-m-Y");
  }
}
?>