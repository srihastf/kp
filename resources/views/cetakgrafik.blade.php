<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CetakLaporanGrafik</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body>
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<center>
<br/>
<h1>
LAPORAN PUSAT SAINS DAN TEKNOLOGI NUKLIR TERAPAN</br>
<small>BADAN TENAGA NUKLIR NASIONAL BANDUNG</small>
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
        <!-- Pie CHART -->
        <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Pegawai</h3>
            </div>
            <div class="box-body chart-responsive">
                <canvas id="pie-chart1" width="380" height="200"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-md-5">
        <!-- Pie CHART -->
        <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Makalah/KTI yang diajukan</h3>
            </div>
            <div class="box-body chart-responsive">
                <canvas id="pie-chart2" width="300" height="250"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-md-5">
        <!-- Pie CHART -->
        <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Makalah/KTI yang dipublikasi</h3>
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
  </div>

<script src="js/Chart.min.js"></script>

<!-- Chart code -->
<script>
    new Chart(document.getElementById("pie-chart1"), {
    type: 'bar',
    data: {
      labels: ["","Tata Usaha", "Senyawa Bertanda dan Radiometri", "Teknofisika", "Reaktor", "Keselamatan Kerja dan Keteknikan","Unit Jaminan Mutu","Unit Pengamanan Mutu"],
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
</body>
</html>

