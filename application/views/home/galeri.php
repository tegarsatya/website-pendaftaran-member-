<section id="recent-works">
	<div class="container">
		<div class="center fadeInDown">
			<h2>Galeri Komunitas</h2>
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
		</div>

		<div class="row">
			<?php foreach ($galeri as $ga) { ?>
				<div class="col-xs-12 col-sm-6 col-md-4 single-work">
					<div class="recent-work-wrap">
						<img class="img-responsive" src="<?php echo base_url('assets/upload/galeri/' . $ga->gambar) ?>" alt="">
						<div class="overlay">
							<div class="recent-work-inner">
								<a class="preview" href="<?php echo base_url('assets/upload/galeri/' . $ga->gambar) ?>" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
								<p><?php echo $ga->isi ?></p>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		<!--/.row-->
		<div class="clearfix text-center">
			<br>
			<br>
			<a href="#" class="btn btn-primary">Show More</a>
		</div>
	</div>
	<!--/.container-->
</section>
<!--/#recent-works-->
