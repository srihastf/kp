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
            <li><a href="/pengguna"><i class="fa fa-users"></i> Pengguna</a></li>
          </ul>
          
          <ul class="treeview-menu">
            <li><a href="{{route('makalah.index')}}"><i class="fa fa-file-text"></i>Pengajuan KTI/Makalah</a></li>
            <li><a href="#"><i class="fa fa-files-o"></i> Peminjaman KTI/Makalah</a></li>
          </ul>
          @endif

        </li>
        <li class="header">Informasi</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Penting</span></a></li>
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-circle-o text-yellow"></i> <span>Panduan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          @if(Auth::user()->status=="Admin")
          <ul class="treeview-menu">
            <li class="active"><a href="#">Kelola Pegawai</a></li>
            <li><a href="#">Kelola Pengguna</a></li>
          </ul>
          @elseif(Auth::user()->status=="Sekertaris KPTF/KPTP")
          <ul class="treeview-menu">
            <li class="active"><a href="#">Kelola Pengajuan KTI/Makalah</a></li>
            <li><a href="#">Kelola Peminjaman KTI/Makalah</a></li>
          </ul>
          @endif
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>