@section('title','Grafik')
<!-- Header -->
@include('header2')
<!-- End Header -->
<!-- Left side column. contains the logo and sidebar -->
@include('navbar2')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Grafik Penelitian PSTNT BATAN BANDUNG (<?php 
            $tgl=mktime(date("m"),date("d"),date("Y"));
            echo "<b>".date("Y", $tgl)."</b>";
            date_default_timezone_set('Asia/Jakarta');
          ?>)</br>
        <small>Penelitian yang dikerjakan di PSTNT BATAN BANDUNG</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i> Beranda</a></li>
      </ol>

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
        <div class="col-md-12">
        <!-- Pie CHART -->
        <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Pegawai</h3>
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

        <div class="col-md-6">
        <!-- Pie CHART -->
        <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Makalah/KTI yang diajukan</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
                <canvas id="pie-chart2" width="300" height="250"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-md-6">
        <!-- Pie CHART -->
        <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Makalah/KTI yang dipublikasi</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
                <canvas id="pie-chart3" width="300" height="250"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
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
    new Chart(document.getElementById("pie-chart2"), {
    type: 'pie',
    data: {
      labels: ["Senyawa Bertanda dan Radiometri", "Teknofisika", "Reaktor"],
      datasets: [{
        label: "Jumlah Makalah/KTI Penelitian",
        backgroundColor: ["#ff9a9a", "#fff9be","#cdffbe","#b0fdff","#f5bfff","#d8bcb5","#727272"],
        data: <?php echo $data2;?>,
      }]
    },
    options: {
      title: {
        display: false,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
</script>


<script>
    new Chart(document.getElementById("pie-chart3"), {
    type: 'pie',
    data: {
      labels: ["Senyawa Bertanda dan Radiometri", "Teknofisika", "Reaktor"],
      datasets: [{
        label: "Makalah yang selesai",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        data: <?php echo $data3;?>,
      }]
    },
    options: {
      title: {
        display: false,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
</script>
@include('footer')


