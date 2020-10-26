<div class="page-title" style="background-image: url(<?php echo base_url() ?>assets/frontend/images/page-title.png)">
	<h1><?php echo $title ?></h1>
</div>

<section id="blog">

	<div class="blog container">
		<div class="row">
			<div class="col-md-12">
				<div class="blog-item">
						<a href="#"><img class="img-responsive img-blog" src="<?php echo base_url('assets/upload/kegiatan/' . $kegiatan->gambar) ?>" width="75%" alt="" /></a>
						<div class="blog-content">
							<a href="#" class="blog_cat"><?php echo $kegiatan->judul_kegiatan ?></a>
							<h2><a href="blog-item.html"><?php echo $kegiatan->keterangan ?></a></h2>
							<div class="post-meta">
								<p><i class="fa fa-clock-o"></i> <a href="#"><?php echo $kegiatan->tanggal ?></a></p>
								<p>
									share:
									<a href="#" class="fa fa-facebook"></a>
									<a href="#" class="fa fa-twitter"></a>
									<a href="#" class="fa fa-linkedin"></a>
									<a href="#" class="fa fa-pinterest"></a>
								</p>
							</div>
							<div class="inner-meta">
								<div class="social-btns">
									<a href="#"> <i class="fa fa-heart"></i> Like</a>
									<a href="#" class="tweet-bg"> <i class="fa fa-twitter"></i> tweet</a>
									<a href="#" class="facebook-bg"> <i class="fa fa-facebook"></i> facebook</a>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</section>
