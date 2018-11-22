@section('title','Tentang Kami')
<!-- Header -->
@include('header2')
<!-- End Header -->
<!-- Left side column. contains the logo and sidebar -->
@include('navbar2')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Informasi Kontak
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i> Beranda</a></li>
        </li>
        <li class="breadcrumb-item active">@yield('title')</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- ./col -->
      <div class="col-md-12">
       <!-- Default box -->
       <div class="box">
        <div class="box-header" style="background:#c5f3fd" align="center">
            <img src="{{ asset('img/Logo_Baru_BATAN.png') }}" style="width:40px"><br/>
            <b>BADAN TENAGA NUKLIR NASIONAL<br/>
                    PUSAT SAINS DAN TEKNOLOGI NUKLIR TERAPAN<br/>Jl.Tamansari No.71 Bandung 40132<br/><br/></b>
            </div>
        </div>
       
       <div class="box">
       
        <div class="box-header with-border">
          <h3 class="box-title">PSTNT BATAN</h3>
        </div>
        <div class="box-body">
          <ul>
          <li>Alamat: Jl. Tamansari No.71, Lb. Siliwangi, Coblong, Kota Bandung, Jawa Barat 40132</li>
          <li>Provinsi: Jawa Barat</li>
          <li>Telepon: (022) 2504771 / (022) 2503997</li>
          <li>Fax. 022-2504081</li>
          </ul>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
      </div>
     </div>
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('footer')