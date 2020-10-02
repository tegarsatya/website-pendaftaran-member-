  <section id="testimonial">
  	<div class="container">
  		<div class="center fadeInDown">
  			<h2>Halaman Struktur</h2>
  			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
  		</div>
  		<div class="testimonial-slider owl-carousel">
  			<?php foreach ($struktur as $str) { ?>
  				<div class="single-slide">
  					<div class="slide-img">
  						<img src="<?php echo base_url('assets/upload/struktur/' . $str->gambar) ?>" alt="">
  					</div>
  					<div class=" content">
  						<img src="assets/frontend/images/review.png" alt="">
  						<p><?php echo $str->keterangan ?></p>
  						<h4><?php echo $str->nama ?></h4>
  					</div>
  				</div>
  			<?php } ?>
  		</div>
  	</div>
  </section>
