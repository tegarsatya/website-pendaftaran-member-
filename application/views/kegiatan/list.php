<div class="page-title" style="background-image: url(assets/frontend/images/page-title.png)">
	<h1>Halaman Kegiatan</h1>
</div>
<section id="blog">
	<div class="blog container">
		<div class="row">
			<div class="col-md-12">
				<?php foreach ($kegiatan as $ke) { ?>
					<div class="blog-item">
						<a href="#"><img class="img-responsive img-blog" src="<?php echo base_url('assets/upload/kegiatan/' . $ke->gambar) ?>" width="50%" alt="" /></a>
						<div class="blog-content">
							<a href="#" class="blog_cat"></a>
							<h2><a href="<?php echo base_url('kegiatan/read/' . $ke->id_kegiatan)?>"><?php echo $ke->judul_kegiatan ?></a></h2>
							<h3><?php echo $ke->keterangan?></h3>
							<a class="readmore" href="blog-item.html">Read More <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		<!--/.row-->
		<div class="row">
			<div class="col-md-12 text-center">
				<ul class="pagination pagination-lg">
					<li><a href="#"><i class="fa fa-long-arrow-left"></i></a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#"><i class="fa fa-long-arrow-right"></i></a></li>
				</ul>
				<!--/.pagination-->
			</div>
		</div>
	</div>
</section>
