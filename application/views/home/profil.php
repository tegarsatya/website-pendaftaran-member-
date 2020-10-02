<section id="about-us">
	<div class="container">
		<div class="center fadeInDown">
			<h2>Profil</h2>
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
		</div>
		<div class="row">
			<?php foreach ($profil as $pr) { ?>
				<div class="col-md-7">
					<div class="about-img">
						<img width="400px" height="400px" style="display: block; margin: auto;" src=" <?php echo base_url('assets/upload/profil/' . $pr->gambar) ?>">
					</div>
				</div>
				<div class=" col-md-5">
					<div class="about-content">
						<p><?php echo $pr->isi ?></p>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
