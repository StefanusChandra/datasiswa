<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Home') ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-solid fa-graduation-cap"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin<sup> SD</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Home
    </div>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Home') ?>">
            <i class="fas fa-solid fa-house-user"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Entry Data
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Home/TambahSiswa') ?>">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Entry Data Siswa</span></a>
        <a class="nav-link" href="<?= base_url('Home/TambahGuru ') ?>">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Entry Data Guru</span></a>
        <a class="nav-link" href="<?= base_url('Home/TambahNilai ') ?>">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Entry Data Nilai</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        List Data
    </div>

    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Home/TampilSiswa') ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>List Data Siswa</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Home/TampilGuru') ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>List Data Guru</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Home/TampilNilai') ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>List Data Nilai</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->