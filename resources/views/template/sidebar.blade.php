<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    <img src="{{asset('Gambar/hira.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">HIRADC</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="{{asset('Gambar/semen.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">NADIA DWI NURISTI</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route ('data-timk3lh') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DATA TIMK3</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route ('data-kegiatan') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>KEGIATAN </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route ('data-kategori') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>KATEGORI </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route ('data-kemungkinan') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>KEMUNGKINAN </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route ('data-kondisi') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>KONDISI</p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="{{route ('data-istilah') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ISTILAH</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route ('data-threat') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>THREAT</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route ('data-vulnerability') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>VULNERABILITY</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route ('data-konsekuensi') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>KONSEKUENSI</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route ('data-register') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>REGISTER</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logout
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>