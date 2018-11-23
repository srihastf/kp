@section('title','Selamat Datang')

<!-- Header -->
@include('header2')
<!-- End Header -->

<!-- Left side column. contains the logo and sidebar -->
@include('navbar2')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Selamat Datang di
      <small> Sistem Informasi Pengelolaan Pengajuan dan Peminjaman Karya Tulis Ilmiah </small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-navy">
          <div class="inner">
            <h2>BATAN</h2>
            <p>Informasi mengenai <b>Badan Tenaga Nuklir Nasiona Bandung</b>.</p>
          </div>
          <div class="icon">
            <i class="fa fa-building-o"></i>
          </div>
          <a class="small-box-footer" href="http://www.batan.go.id/index.php/id/">Informasi Lainnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-blue">
          <div class="inner">
            <h2>PSTNT BATAN</h2>
            <p>Informasi mengenai <b>Pusat Sains dan Teknologi Nuklir Terapan</b> (PSTNT) BATAN BANDUNG.</p>
          </div>
          <div class="icon">
            <i class="fa fa-building"></i>
          </div>
          <a class="small-box-footer" href="http://www.batan.go.id/index.php/id/pstnt-id/profil-pstnt/3281-pusat-sains-dan-teknologi-nuklir-terapan-pstnt">Informasi Lainnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-aqua">
          <div class="inner">
            <h2>GRAFIK PENELITIAN</h2>
            <p>Informasi mengenai <b>Grafik Penelitian</b> di PSTNT BATAN BANDUNG.</p>
          </div>
          <div class="icon">
            <i class="fa fa-bar-chart"></i>
          </div>
          <a class="small-box-footer" href="/grafik">Informasi Lainnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
    

      <!-- Default box -->
      <div class="row">
        <div class="col-md-8">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Sekilas mengenai SIP3KTI.</h3>
            </div>
            <div class="box-body">
              &nbsp;&nbsp;&nbsp;&nbsp;Sistem Informasi Pengelolaan Pengajuan dan Peminjaman Karya Tulis Ilmiah (SIP3KTI)
              berfungsi untuk membantu menyimpan dan mengelola data diantaranya:<br/><br/>
              <ol>
                <li>Mengelola data perkembangan <b>Pengajuan Makalah/Karya Tulis Ilmiah (Kti).</b></li>
                <li>Mengelola data perkembangan <b>Perbaikan Makalah/Kti.</b></li>
                <li>Mengelola data <b>Peminjaman Makalah/Kti.</b></li>
                <li>Mengelola data pendukung yakni <b>Data Pegawai</b> dan <b>Data Users.</b></li>
              </ol>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
            </div>
            <!-- /.box-footer-->
          </div>
        </div>
        <!-- /.box -->
        
        <div class="col-md-4">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Akses ke : </h3>
            </div>
            <div class="box-body">
              <img src="{{ asset('img/mn-satn.jpg') }}">
              <ul>
                <br/>
                <li><a href="http://www.batan.go.id/pstbm"> Sains & Teknologi Bahan Maju </a></li>
                <li><a href="http://www.batan.go.id/index.php/kedeputian/sains-aplikasi-teknologi-nuklir/sains-teknologi-nuklir-terapan">Sains & Teknologi Nuklir Terapan</a></li>
                <li><a href="http://www.batan.go.id/index.php/kedeputian/sains-aplikasi-teknologi-nuklir/sains-teknologi-akselerator">Sains & Teknologi Akselerator</a></li>
                <li><a href="http://www.batan.go.id/index.php/kedeputian/sains-aplikasi-teknologi-nuklir/aplikasi-isotop-dan-radiasi">Aplikasi Isotop dan Radiasi</a></li>
                <li><a href="http://www.batan.go.id/index.php/id/berita-ptkmr">Keselamatan & Metrologi Radiasi</a></li>
                <li><a href="http://www.batan.go.id/index.php/id/pstnt-id/profil-pstnt/3281-pusat-sains-dan-teknologi-nuklir-terapan-pstnt">PSTNT BATAN BANDUNG</a></li>     
              </ul>
            </div>
            <div class="box-footer">
            </div>        
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@include('footer')