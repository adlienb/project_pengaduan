<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>PENGADUAN </h3>
                    </div>
                    
                </div>
            </div>


            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    
                <?php if ($_SESSION['level']=="Rakyat") {?>
                    <li class="sidebar-item">
                    <a href="pengaduan.php" class='sidebar-link'>
                        <i class="bi bi-exclamation-triangle-fill"></i>
                        <span>Pengaduan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="pengaduan_lihat.php" class='sidebar-link'>
                        <i class="bi bi-exclamation-triangle-fill"></i>
                        <span>Lihat Pengaduan</span>
                    </a>
                </li>
                <?php } ?>
                

                <?php if (($_SESSION['level']=="admin")OR ($_SESSION['level']=="petugas")){ ?>
                        <li class="sidebar-item">
                        <a href="index.php" class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                            <span>Data Masyarakat</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="index.php" class='sidebar-link'>
                            <i class="bi bi-person-fill"></i>
                            <span>Data Petugas</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="tanggapan.php" class='sidebar-link'>
                            <i class="bi bi-envelope-open-fill"></i>
                            <span>Tanggapan</span>
                        </a>
                    </li> 
                    <?php } ?>

                    <li class="sidebar-title">Kelola Akun</li>

                            <li class="sidebar-item">
                                <a href="logout.php" class='sidebar-link'>
                                    <i class="bi bi-box-arrow-left"></i>
                                    <span>Log Out</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="profil.php" class='sidebar-link'>
                                    <i class="bi bi-person-square"></i>
                                    <span>Profilku</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>