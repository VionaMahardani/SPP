<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset ('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PAY SPP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset ('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-header">DASHBOARD</li>
          <li class="nav-item">
            <a href="{{ url('dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">DATA</li>
          <li class="nav-item">
            <a href="{{ url('data-siswa') }}" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Data Siswa
              </p>
            </a>
          <li class="nav-item">
          <a href="{{ url('data-kelas') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Data Kelas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('data-spp') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data SPP
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('data-petugas') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data Petugas
              </p>
            </a>
          </li>
          <li class="nav-header">PEMBAYARAN</li>
          <li class="nav-item">
            <a href="{{ route('data-pembayaran.index') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pembayaran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('data-pembayaran.index') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                History Pembayaran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('data-pembayaran.index') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>