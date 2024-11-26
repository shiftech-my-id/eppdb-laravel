<?php

if (!isset($menu_active)) {
    $menu_active = null;
}

if (!isset($nav_active)) {
    $nav_active = null;
}

?>
<aside class="main-sidebar sidebar-light-primary elevation-4">
  <a href="{{ route('student.home') }}" class="brand-link">
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
          <a href="{{ route('student.profile') }}" class="d-block">{{ Auth::guard('student')->user()->name }}</a>
        </div>
      </div>
      <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-flat nav-collapse-hide-child" data-widget="treeview"
        role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-pen"></i>
            <p>Status Pendaftaran</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('student.logout') }}" class="nav-link">
            <i class="nav-icon fas fa-right-from-bracket"></i>
            <p>Log Out</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>
