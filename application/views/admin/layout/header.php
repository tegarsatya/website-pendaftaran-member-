 <!-- Page Wrapper -->
 <div id="wrapper">

 	<!-- Sidebar -->
 	<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

 		<!-- Sidebar - Brand -->
 		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/dasbor') ?>">
 			<div class="sidebar-brand-icon rotate-n-15">
 				<i class="fas fa-laugh-wink"></i>
 			</div>
 			<div class="sidebar-brand-text mx-3">SB Admin <sup>Honda Jazz</p>
 			</div>
 		</a>

 		<!-- Divider -->
 		<hr class="sidebar-divider my-0">

 		<!-- Nav Item - Dashboard -->
 		<li class="nav-item">
 			<a class="nav-link" href="<?= base_url('admin/dasbor') ?>">
 				<i class="fas fa-fw fa-tachometer-alt"></i>
 				<span>Dashboard</span></a>
 		</li>
 		<!-- DAta Profil sekolah -->
 		<hr class="sidebar-divider">

 		<!-- Heading -->
 		<div class="sidebar-heading">
 			Data Profil
 		</div>

 		<!-- Nav Item - Pages Collapse Menu -->
 		<li class="nav-item">
 			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
 				<i class="fas fa-fw fa-folder"></i>
 				<span>Profil</span>
 			</a>
 			<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
 				<div class="bg-white py-2 collapse-inner rounded">
 					<a class="collapse-item" href="<?= base_url('admin/profile') ?>">Data Profil</a>
 					<a class="collapse-item" href="<?= base_url('admin/profile/tambah') ?>">Tambah Data Profil</a>
 				</div>
 			</div>
 		</li>


 		<!-- galeri -->
 		<hr class="sidebar-divider">

 		<!-- Heading -->
 		<div class="sidebar-heading">
 			Data Galeri
 		</div>

 		<!-- Nav Item - Utilities Collapse Menu -->
 		<li class="nav-item">
 			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsega" aria-expanded="true" aria-controls="collapseUtilities">
 				<i class="fas fa-fw fa-wrench"></i>
 				<span>Data Galeri</span>
 			</a>
 			<div id="collapsega" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
 				<div class="bg-white py-2 collapse-inner rounded">
 					<h6 class="collapse-header">Galeri</h6>
 					<a class="collapse-item" href="<?= base_url('admin/galeri') ?>">Data galeri</a>
 					<a class="collapse-item" href="<?= base_url('admin/galeri/tambah') ?>">Tambah Data Galeri</a>
 				</div>
 			</div>
 		</li>

 		<!-- pengajar-->
 		<hr class="sidebar-divider">

 		<!-- Heading -->
 		<div class="sidebar-heading">
 			Struktur Organisasi Komunitas
 		</div>

 		<!-- Nav Item - Utilities Collapse Menu -->
 		<li class="nav-item">
 			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsepa" aria-expanded="true" aria-controls="collapseUtilities">
 				<i class="fas fa-fw fa-wrench"></i>
 				<span>Data Struktur</span>
 			</a>
 			<div id="collapsepa" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
 				<div class="bg-white py-2 collapse-inner rounded">
 					<h6 class="collapse-header">Galeri</h6>
 					<a class="collapse-item" href="<?= base_url('admin/struktur') ?>">Data Struktur</a>
 					<a class="collapse-item" href="<?= base_url('admin/struktur/tambah') ?>">Tambah Data Struktur</a>
 				</div>
 			</div>
 		</li>

 		<!-- Data Berita dan Kategori Berita -->

 		<hr class="sidebar-divider">

 		<!-- Heading -->
 		<div class="sidebar-heading">
 			Data Redaksi & Kategori Redaksi
 		</div>

 		<!-- Nav Item - Utilities Collapse Menu -->
 		<li class="nav-item">
 			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#redaksi" aria-expanded="true" aria-controls="collapseUtilities">
 				<i class="fas fa-fw fa-wrench"></i>
 				<span>Redaksi </span>
 			</a>
 			<div id="redaksi" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
 				<div class="bg-white py-2 collapse-inner rounded">
 					<h6 class="collapse-header">Berita & Kategori Berita:</h6>
 					<a class="collapse-item" href="<?= base_url('admin/redaksi') ?>">Data Redaksi</a>
 					<a class="collapse-item" href="<?= base_url('admin/redaksi/tambah') ?>">Tambah Data Redaksi</a>
 					<a class="collapse-item" href="<?= base_url('admin/kategori') ?>">Data Kategori</a>
 					<a class="collapse-item" href="<?= base_url('admin/kategori/tambah') ?>">Tambah Data Kategori</a>
 				</div>
 			</div>
 		</li>

 		<!-- Penerimaan siswa -->
 		<hr class="sidebar-divider">

 		<!-- Heading -->
 		<div class="sidebar-heading">
 			Data Video Komunitas
 		</div>

 		<!-- Nav Item - Utilities Collapse Menu -->
 		<li class="nav-item">
 			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#opps" aria-expanded="true" aria-controls="collapseUtilities">
 				<i class="fas fa-fw fa-wrench"></i>
 				<span>Video</span>
 			</a>
 			<div id="opps" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
 				<div class="bg-white py-2 collapse-inner rounded">
 					<h6 class="collapse-header">Galeri</h6>
 					<a class="collapse-item" href="<?= base_url('admin/video') ?>">Data Video</a>
 					<a class="collapse-item" href="<?= base_url('admin/video/tambah') ?>">Tambah Data Video</a>
 				</div>
 			</div>
 		</li>

 		<!-- Data pengguna Sistem -->
 		<hr class="sidebar-divider">

 		<!-- Heading -->
 		<div class="sidebar-heading">
 			Data Pendaftaran Member
 		</div>

 		<!-- Nav Item - Pages Collapse Menu -->
 		<li class="nav-item">
 			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#c" aria-expanded="true" aria-controls="collapseTwo">
 				<i class="fas fa-fw fa-cog"></i>
 				<span>Pendaftaran Member</span>
 			</a>
 			<div id="c" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
 				<div class="bg-white py-2 collapse-inner rounded">
 					<h6 class="collapse-header">Pendaftaran :</h6>
 					<a class="collapse-item" href="<?= base_url('admin/Pendaftaran') ?>">Pendaftaran </a>
 				</div>
 			</div>
 		</li>

 		<!-- Penerimaan siswa -->
 		<hr class="sidebar-divider">

 		<!-- Heading -->
 		<div class="sidebar-heading">
 			Data Kegiatan Komunitas
 		</div>

 		<!-- Nav Item - Utilities Collapse Menu -->
 		<li class="nav-item">
 			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#opp" aria-expanded="true" aria-controls="collapseUtilities">
 				<i class="fas fa-fw fa-wrench"></i>
 				<span>Kegiatan</span>
 			</a>
 			<div id="opp" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
 				<div class="bg-white py-2 collapse-inner rounded">
 					<h6 class="collapse-header">Galeri</h6>
 					<a class="collapse-item" href="<?= base_url('admin/kegiatan') ?>">Data Kegiatan</a>
 					<a class="collapse-item" href="<?= base_url('admin/kegiatan/tambah') ?>">Tambah Data Kegiatan</a>
 				</div>
 			</div>
 		</li>

 		<!-- Heading -->
 		<div class="sidebar-heading">
 			Data Yang Menghubungi
 		</div>

 		<!-- Nav Item - Utilities Collapse Menu -->
 		<li class="nav-item">
 			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#hu" aria-expanded="true" aria-controls="collapseUtilities">
 				<i class="fas fa-fw fa-wrench"></i>
 				<span>Hubungi</span>
 			</a>
 			<div id="hu" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
 				<div class="bg-white py-2 collapse-inner rounded">
 					<h6 class="collapse-header">Kontak</h6>
 					<a class="collapse-item" href="<?= base_url('admin/kontak') ?>">Data Kontak</a>
 				</div>
 			</div>
 		</li>

 		<!-- Data pengguna Sistem -->
 		<hr class="sidebar-divider">

 		<!-- Heading -->
 		<div class="sidebar-heading">
 			Data Admin
 		</div>

 		<!-- Nav Item - Pages Collapse Menu -->
 		<li class="nav-item">
 			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
 				<i class="fas fa-fw fa-cog"></i>
 				<span>Pengguna Sistem</span>
 			</a>
 			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
 				<div class="bg-white py-2 collapse-inner rounded">
 					<h6 class="collapse-header">Data Pengguna Sistem :</h6>
 					<a class="collapse-item" href="<?= base_url('admin/user') ?>">Pengguna Sistem </a>
 					<a class="collapse-item" href="<?= base_url('admin/user/tambah') ?>">Tambah Pengguna Sistem</a>
 				</div>
 			</div>
 		</li>
 		<!-- Divider -->
 		<hr class="sidebar-divider d-none d-md-block">

 		<!-- Sidebar Toggler (Sidebar) -->
 		<div class="text-center d-none d-md-inline">
 			<button class="rounded-circle border-0" id="sidebarToggle"></button>
 		</div>

 	</ul>
 	<!-- End of Sidebar -->
