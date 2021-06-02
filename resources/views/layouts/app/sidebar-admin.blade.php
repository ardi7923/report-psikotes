 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-text mx-3">Psikotes 2021</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}" id="home">
  <a class="nav-link" href="{{ url('dashboard') }}">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<li class="nav-item {{ Request::is('school') ? 'active' : '' }}" id="organization-committee">
  <a class="nav-link" href="{{ url('school') }}">
    <i class="fas fa-fw fa-school"></i>
    <span>Data Sekolah</span></a>
</li>

<li class="nav-item {{ Request::is('import-data') ? 'active' : '' }}" id="post">
  <a class="nav-link" href="{{ url('import-data') }}">
    <i class="fas fa-fw fa-file-excel"></i>
    <span>Import Data</span></a>
</li>

<li class="nav-item {{ Request::is('result') ? 'active' : '' }}" id="organization-committee">
  <a class="nav-link" href="{{ url('result') }}">
    <i class="fas fa-fw fa-download"></i>
    <span>Download Hasil Ujian</span></a>
</li>

<li class="nav-item {{ Request::is('user-school') ? 'active' : '' }}" id="organization-committee">
  <a class="nav-link" href="{{ url('user-school') }}">
    <i class="fas fa-fw fa-users"></i>
    <span>User Sekolah</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->