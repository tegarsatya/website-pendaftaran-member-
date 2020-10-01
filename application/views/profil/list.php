<div class="page-title" style="background-image: url(assets/frontend/images/page-title.png)">
	<h1><?php echo $title ?></h1>
</div>

<section id="about-us">
	<div class="container">
		<div class="row">
			<?php foreach ($profil as $pr) { ?>
				<div class="col-md-7">
					<div class="about-img">
						<img src="<?php echo base_url('assets/upload/profil/' . $pr->gambar) ?>"" alt="">
					</div>
				</div>
				<div class=" col-md-5">
						<div class="about-content">
							<h2><?php echo $judul ?></h2>
							<p><?php echo $pr->isi ?></p>
						</div>
					</div>
				<?php } ?>
				</div>
		</div>
</section>
