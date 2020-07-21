    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-parking"></i>
        </div>
        <div class="sidebar-brand-text mx-3">UIN JKT Parking</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <!-- Nav Item - Utilities Collapse Menu -->

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-user"></i>
          <span>Admin</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">pengaturan Akun</h6>
            <a class="collapse-item" href="tambah_admin.php">Tambah Admin</a>
            <a class="collapse-item" href="ubah_admin.php">Daftar Admin</a>
        </div>
      </li>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-user"></i>
          <span>Operator</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pengaturan</h6>
            <a class="collapse-item" href="tambah_operator.php">Tambah Operator</a>
            <a class="collapse-item" href="daftar_operator.php">Daftar Operator</a>
          </div>
        </div>
      </li>

      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-user"></i>
          <span>Member</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Registrasi</h6>
            <a class="collapse-item" href="register.php">Registrasi</a>
            <a class="collapse-item" href="daftar_member.php">Daftar Member</a>
            <a class="collapse-item" href="ubah_data.php">Ubah Data</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="isi_kuota.php">
          <i class="fas fa-fw fa-wallet"></i>
          <span>Isi Kuota</span></a>
      </li>


      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="log.php">
          <i class="fas fa-fw fa-history"></i>
          <span>Log Parkir</span></a>
      </li>

            <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="aktivitas.php">
          <i class="fas fa-fw fa-history"></i>
          <span>Aktivitas</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->