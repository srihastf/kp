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
        Informasi Tentang Kami
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
          <h3 class="box-title">Seputar SIP3KTI</h3>
        </div>
        <div class="box-body">
          
          <ul>
            <li>SIP3KTI adalah sebuah sistem untuk membantu mengelola data perkembangan pengajuan KTI.</li>
            <p>Pencatatan perkembangan aliran pengajuan yang diusulkan untuk diperiksa oleh tim KPTF/KPTP</p>
            <li>SIP3KTI diimplementasikan untuk PSTNT BATAN BANDUNG</li>
            <p></p>
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
      <!-- /.row -->
      <div class="row">
      <div class="col-md-11">
       <!-- Default box -->
       <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Seputar developer sistem.</h3>
        </div>
        <div class="box-body">
          
          <ul>
            <li>SIP3KTI sebagai implementasi dari Kerja Praktek mahasiswa.</li>
            <li>Arifah Ummul Fadiyah & Sri Hastuti Fatimah, Universitas Jenderal Achmad Yani Cimahi, '2015</li>
            <li>email&kontak :</li>
            <p>Arifah : (Whatsapp) : 0813-9521-2278</p>
            <p>Sri : srihastf@gmail.com / (Whatsapp) : 0859-5006-7243</p>
            <li>Jurusan Informatika, Fakultas Sains dan Informatika</li>
          </ul>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('footer')