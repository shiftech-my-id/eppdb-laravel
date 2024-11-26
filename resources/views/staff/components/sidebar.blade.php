<?php
$menu_active = $menu_active ?? null;
$nav_active = $nav_active ?? null;
?>
<aside class="main-sidebar sidebar-light-primary elevation-4">
  <a href="{{ route('staff.home') }}" class="brand-link">
    <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="App Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text">{{ env('APP_NAME') }}</span>
  </a>
  <div class="sidebar">
    <nav class="mt-2">
      <div class="user-panel d-flex mb-3 mt-3 pb-3">
        <div class="image">
          <img src="dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('staff.profile') }}" class="d-block">{{ Auth::guard('staff')->user()->name }}</a>
        </div>
      </div>
      <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-flat nav-collapse-hide-child" data-widget="treeview"
        role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('staff.home') }}" class="nav-link {{ $nav_active == 'dashboard' ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-item {{ $menu_active == 'siswa' ? 'menu-open' : '' }}">
          <a href="#" class="nav-link {{ $menu_active == 'siswa' ? 'active' : '' }}">
            <i class="nav-icon fas fa-square"></i>
            <p>Master<i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link {{ $nav_active == 'siswa' ? 'active' : '' }}">
                <i class="nav-icon fas fa-circle"></i>
                <p>Tahun Ajaran</p>
              </a>
            </li>
          </ul>
        </li>

        {{-- Report Menu --}}
        <li class="nav-item {{ $menu_active == 'report' ? 'menu-open' : '' }}">
          <a href="#" class="nav-link {{ $menu_active == 'report' ? 'active' : '' }}">
            <i class="nav-icon fas fa-file-waveform"></i>
            <p>Laporan<i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link {{ $nav_active == 'report-1' ? 'active' : '' }}">
                <i class="nav-icon fas fa-file-waveform"></i>
                <p>Laporan 1</p>
              </a>
            </li>
          </ul>
        </li>
        {{-- End Report Menu --}}

        {{-- System Menu --}}
        <li class="nav-item {{ $menu_active == 'system' ? 'menu-open' : '' }}">
          <a href="#" class="nav-link {{ $menu_active == 'system' ? 'active' : '' }}">
            <i class="nav-icon fas fa-gears"></i>
            <p>
              Sistem
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ url('/staff/user-activity') }}"
                class="nav-link {{ $nav_active == 'user-activity' ? 'active' : '' }}">
                <i class="nav-icon fas fa-file-waveform"></i>
                <p>Log Aktivitas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/staff/user') }}" class="nav-link {{ $nav_active == 'user' ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>Pengguna</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/staff/settings') }}" class="nav-link {{ $nav_active == 'settings' ? 'active' : '' }}">
                <i class="nav-icon fas fa-gear"></i>
                <p>Pengaturan</p>
              </a>
            </li>
          </ul>
        </li>
        {{-- End of System  menu --}}
        <li class="nav-item">
          <a href="{{ route('staff.logout') }}" class="nav-link">
            <i class="nav-icon fas fa-right-from-bracket"></i>
            <p>Keluar</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>
