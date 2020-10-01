<nav class="navbar navbar-inverse" role="banner">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html"><img src="assets/frontend/images/logo.png" alt="logo"></a>
		</div>

		<div class="collapse navbar-collapse navbar-right">
			<ul class="nav navbar-nav">
				<li class="active"><a href="<?php echo base_url('home') ?>">Home</a></li>
				<li><a href="<?php echo base_url('profil') ?>">Profil</a></li>
				<li><a href="<?php echo base_url('struktur') ?>">Struktur</a></li>
				<li><a href="<?php echo base_url('kegiatan') ?>">Kegiatan</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Galeri <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url('galeri') ?>">Foto</a></li>
						<li><a href="<?php echo base_url('video') ?>">Video</a></li>
					</ul>
				</li>
				<li><a href="<?php echo base_url('redaksi') ?>">Redaksi</a></li>
				<li><a href="<?php echo base_url('kontak') ?>">Hubungi</a></li>
				<li><a href="<?php echo base_url('login') ?>">Login</a></li>
			</ul>
		</div>
	</div>
	<!--/.container-->
</nav>
<!--/nav-->

</header>
<!--/header-->
