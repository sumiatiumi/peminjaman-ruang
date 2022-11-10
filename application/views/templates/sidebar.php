
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav" style="box-shadow: 2px 2px 2px 2px #333333;">

    <!-- jadwal -->
      <li class="nav-item ">
        <a class="nav-link " href="<?php echo site_url('listdata') ?>"  role="button" >
          <i class="fas fa-fw fa-list"></i>
          <span>Jadwal Peminjaman</span>
        </a>
        <!--dropdown-->
      </li>

    <!-- manajemen ruang -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-list"></i>
          <span>Manajemen Ruang</span>
        </a>
        <!--dropdown -->
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
           <a class="dropdown-item" href="<?php echo site_url('list_ruang') ?>">Data Ruang</a>
           <a class="dropdown-item" href="<?php echo site_url('list_carousel') ?>">Gambar Carousel</a>
           <a class="dropdown-item" href="<?php echo site_url('home') ?>">Pengumuman</a>
          </div>
      </li>

      <!-- User 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>User</span></a>
         
           <div class="dropdown-menu" aria-labelledby="pagesDropdown">
           <a class="dropdown-item" href="#">Admin</a>
           <a class="dropdown-item" href="#">User Ruang</a>
           </div>
      </li>-->


      <li class="nav-item ">
        <a class="nav-link "  href='<?php echo site_url("ruang/ruang");?>'  role="button" >
          <i class="fas fa-fw fa-home"></i>
          <span>Pilih Ruang</span> 
        </a>
        <!--dropdown-->
      </li>
      <!-- logout -->
      <li class="nav-item ">
        <a class="nav-link "  href='<?php echo site_url("login/keluar");?>'  role="button" onclick="return confirm('Apakah anda yakin ingin keluar ?')">
          <i class="fas fa-fw fa-door"></i>
          <span>LOGOUT</span>
        </a>
        <!--dropdown-->
      </li>
          

     
    </ul>