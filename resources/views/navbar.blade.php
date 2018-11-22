<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
      <li>
          <a href="/home">
            <i class="fa fa-home"></i> <span>Beranda</span>
          </a>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Menu Kelola</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <!--Menu Per/Aktor-->
          @if(Auth::user()->status=="Admin")
          <ul class="treeview-menu">
            <li><a href="{{route('pegawai.index')}}"><i class="fa fa-user"></i> Pegawai</a></li>
            <li><a href="/user"><i class="fa fa-users"></i> Users</a></li>
          </ul>
          @elseif(Auth::user()->status=="Sekertaris KPTF/KPTP")
          <ul class="treeview-menu">
            <li><a href="{{route('makalah.index')}}"><i class="fa fa-file-o"></i> Pengajuan KTI/Makalah</a></li>
            <li><a href="{{route('perbaikan.index')}}"><i class="fa fa-file-text"></i> Perbaikan KTI/Makalah</a></li>
            <li><a href="{{route('peminjaman.index')}}"><i class="fa fa-files-o"></i> Peminjaman KTI/Makalah</a></li>
            <li><a href="/cariLogbook"><i class="fa fa-files-o"></i> Laporan</a></li>
          </ul>
          @elseif(Auth::user()->status=="Pegawai")
          <ul class="treeview-menu">
            <li><a href="/tampilmakalah/{{Auth::user()->name}}"><i class="fa fa-file-text"></i>Lihat Pengajuan KTI/Makalah</a></li>
            <li><a href="/pinjamansaya/{{Auth::user()->nip}}"><i class="fa fa-files-o"></i> Peminjaman KTI/Makalah</a></li><li>
          </ul>
          @elseif(Auth::user()->status=="Kepala PSTNT")
          <ul class="treeview-menu">
          <li><a href="/tampilmakalah/{{Auth::user()->name}}"><i class="fa fa-file-text"></i> Pengajuan KTI/Makalah</a></li>
            <li><a href="{{route('laporan.index')}}"><i class="fa fa-files-o"></i> Laporan</a></li>
          </ul>
          @endif

        </li>
        <li class="header">Halaman</li>
        <li><a href="/informasipenting"><i class="fa fa-circle-o text-red"></i> <span>Informasi Penting</span></a></li>
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-circle-o text-yellow"></i> <span>Panduan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          @if(Auth::user()->status=="Admin")
          <ul class="treeview-menu">
            <li class="active"><a href="/panduankelolapegawai">Kelola Pegawai</a></li>
            <li><a href="/panduankelolausers">Kelola Users</a></li>
          </ul>
          @elseif(Auth::user()->status=="Sekertaris KPTF/KPTP")
          <ul class="treeview-menu">
            <li class="active"><a href="/panduankelolapengajuan">Kelola Pengajuan KTI/Makalah</a></li>
            <li><a href="/panduankelolaperbaikan">Kelola Perbaikan KTI/Makalah</a></li>
            <li><a href="/panduankelolapeminjaman">Kelola Peminjaman Makalah</a></li>
          </ul>
          @endif
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>