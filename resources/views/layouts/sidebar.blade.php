<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src=" {{ asset('dist/img/user2-160x160.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{session()->get('name')}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{route('dashboard')}}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li><a href="{{route('barang')}}"><i class="fa fa-cube"></i> <span>Data Barang</span></a></li>
        <li><a href="{{route('entry')}}"><i class="fa fa-cubes"></i> <span>Entry Barang</span></a></li>
        
        @if(null != session()->get('role'))
          @if(session()->get('role') == "ADMIN")
            <li><a href="{{route('user')}}"><i class="fa fa-user"></i> <span>Users</span></a></li>
          @endif
        @endif
        <li><a href="{{route('report')}}"><i class="fa fa-list"></i> <span>Laporan</span></a></li>
        <li><a href="{{route('login.reset')}}"><i class="fa fa-key"></i> <span>Ubah Password</span></a></li>
        <li><a href="/logout"><i class="fa fa-sign-out"></i><span>Log Out</span></a></li>
        <!--<li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>-->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>