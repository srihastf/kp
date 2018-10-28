@section('title','Laporan Pusat Sains Tenaga Nuklir Terapan BATAN BANDUNG')
@extends('master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Grafik Penelitian PSTNT BATAN BANDUNG</br>
        <small>Penelitian yang dikerjakan di PSTNT BATAN BANDUNG </small>
      </h1>



      <div class="card-body">
      <div class="flash-message">
      @foreach(['danger','warning','success','info'] as $msg)
        @if(Session::has('alert-'.$msg))
          <p class="alert alert-{{ $msg }}">{{ Session::get('alert-'.$msg) }}
            <a href="#" class="close" data-dismiss="alert" aria-label="close"> &times;</a>
          </p>
        @endif
      @endforeach
    </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-10">
        <div class="box">
        <div class="box-header" style="background:#c5f3fd" align="center">
            <img src="{{ asset('img/Logo_Baru_BATAN.png') }}" style="width:40px"><br/>
            <b>BADAN TENAGA NUKLIR NASIONAL<br/>
                    PUSAT SAINS DAN TEKNOLOGI NUKLIR TERAPAN<br/>Jl.Tamansari No.71 Bandung 40132<br/><br/></b>
            </div>
        </div>
        <!-- Pie CHART -->
        <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Pegawai PSTNT BATAN BANDUNG</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
                <canvas id="pie-chart1" width="380" height="200"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <br/><br/>

        <div class="col-md-5">
        <!-- Pie CHART -->
        <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Makalah/KTI yang telah diajukan</h3><br/>
              <small><b>Dari: <?php echo $tahunktiawal;?>   -    Sampai: <?php echo $tahunktiakhir;?></b></small>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
                <canvas id="myChart2" width="300" height="250"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <div class="col-md-5">
        <!-- Pie CHART -->
        <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Makalah/KTI yang telah dipublikasi </h3><br/>
              <small><b>Dari: <?php echo $tahunktiawal;?>   -    Sampai: <?php echo $tahunktiakhir;?></b></small>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
                <!--<canvas id="pie-chart3" width="300" height="250"></canvas>-->
                <canvas id="myChart3" width="300" height="250"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('jsstyle')
<script src="js/Chart.min.js"></script>

<!-- Chart code -->
<script>
    new Chart(document.getElementById("pie-chart1"), {
    type: 'bar',
    data: {
      labels: ["Tanpa Bidang","Tata Usaha", "Senyawa Bertanda dan Radiometri", "Teknofisika", "Reaktor", "Keselamatan Kerja dan Keteknikan","Unit Jaminan Mutu","Unit Pengamanan Mutu"],
      datasets: [{
        label: "Jumlah Pegawai per-bidang",
        backgroundColor: ["#ff9a9a", "#fff9be","#cdffbe","#b0fdff","#f5bfff","#d8bcb5","#727272"],
        data: <?php echo $data;?>,
      }]
    },
    
    options: {
      legend:{display:false},
      title: {
        display: true,
        text: 'Jumlah Pegawai per-bidang'
      }
    }
});
</script>

<script>
var ctx = document.getElementById("myChart2").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["Senyawa Bertanda dan Radiometri", "Teknofisika", "Reaktor"],
      datasets: [{
        label: "Jumlah Makalah/KTI Penelitian",
        backgroundColor: ["#fff960","#c45850","#e8c3b9"],
        data: <?php echo $data2;?>,
      }]
    },
    options: {
      legend:{display:false},
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true,
                }
            }]
        }
    }
});
</script>


<script>
var ctx = document.getElementById("myChart3").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["Senyawa Bertanda dan Radiometri", "Teknofisika", "Reaktor"],
      datasets: [{
        label: "Makalah yang selesai",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        data: <?php echo $data3;?>,
      }]
    },
    options: {
      legend:{display:false},
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

@endsection
