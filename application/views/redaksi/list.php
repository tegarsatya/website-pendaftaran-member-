 <div class="page-title" style="background-image: url(assets/frontend/images/page-title.png)">
 	<h1>Blog</h1>
 </div>

 <section id="blog">
 	<div class="blog container">
 		<div class="row">
 			<div class="col-md-8">
 				<?php foreach ($redaksi as $re) { ?>
 					<div class="blog-item">
 						<a href="#"><img src="<?php echo base_url('assets/upload/redaksi/' . $re->gambar) ?>" width="100%" alt="" /></a>
 						<div class="blog-content">
 							<a href="#" class="blog_cat"></a>
 							<h2><a href="<?php echo base_url('redaksi/read/' . $re->slug_redaksi) ?>"><?php echo $re->nama_redaksi ?></a></h2>
 							<h3><?php echo $re->tanggal ?> - <?php echo $re->nama ?> </h3>
 							<h4><?php echo character_limiter(strip_tags($re->keterangan), 100); ?></h4>
 							<br>
 							<a class=" readmore" href="<?php echo base_url('redaksi/read/' . $re->slug_redaksi) ?>">Read More <i class="fa fa-long-arrow-right"></i></a>
 						</div>
 					</div>
 				<?php } ?>
 			</div>

 			<!-- category redaksi -->
 			<aside class="col-md-4">
 				<div class="widget search">
 					<form role="form">
 						<input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
 						<button type="submit"><i class="fa fa-search"></i></button>
 					</form>
 				</div>

 				<div class="widget archieve">
 					<h3>Kategory</h3>
 					<div class="row">
 						<?php foreach  ($kategori_redaksi as $ka) { ?>
 							<div class="col-sm-12">
 								<ul class="blog_archieve">
 									<li><a href="<?php echo base_url('redaksi/kategori/' . $ka->slug_redaksi) ?>"><?php echo $ka->nama_redaksi ?><span class="pull-right">(97)</span></a></li>
 								</ul>
 							</div>
 						<?php } ?>
 					</div>
 				</div>

 				<div class="widget social_icon">
 					<a href="#" class="fa fa-facebook"></a>
 					<a href="#" class="fa fa-twitter"></a>
 					<a href="#" class="fa fa-linkedin"></a>
 					<a href="#" class="fa fa-pinterest"></a>
 					<a href="#" class="fa fa-github"></a>
 				</div>
 			</aside>
 		</div>
 		<!--/.row-->
 		<div class="row">
 			<div class="col-md-12 text-center">
 				<?php if (isset($pagin)) {
						echo $pagin;
					}  ?>
 				<!-- <ul class="pagination pagination-lg">
 					<li><a href="#"><i class="fa fa-long-arrow-left"></i></a></li>
 					<li class="active"><a href="#">1</a></li>
 					<li><a href="#">2</a></li>
 					<li><a href="#">3</a></li>
 					<li><a href="#">4</a></li>
 					<li><a href="#">5</a></li>
 					<li><a href="#"><i class="fa fa-long-arrow-right"></i></a></li>
 				</ul> -->
 				<!--/.pagination-->
 			</div>
 		</div>
 	</div>
 </section>
 <!--/#blog-->



 <section id="bottom">
 	<div class="container fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
 		<div class="row">
 			<div class="col-md-2">
 				<a href="#" class="footer-logo">
 					<img src="images/logo-black.png" alt="logo">
 				</a>
 			</div>
 			<div class="col-md-10">
 				<div class="row">
 					<div class="col-md-3 col-sm-6">
 						<div class="widget">
 							<h3>Company</h3>
 							<ul>
 								<li><a href="#">About us</a></li>
 								<li><a href="#">We are hiring</a></li>
 								<li><a href="#">Meet the team</a></li>
 								<li><a href="#">Copyright</a></li>
 								<li><a href="#">Terms of use</a></li>
 								<li><a href="#">Privacy policy</a></li>
 								<li><a href="#">Contact us</a></li>
 							</ul>
 						</div>
 					</div>
 					<!--/.col-md-3-->

 					<div class="col-md-3 col-sm-6">
 						<div class="widget">
 							<h3>Support</h3>
 							<ul>
 								<li><a href="#">Faq</a></li>
 								<li><a href="#">Blog</a></li>
 								<li><a href="#">Forum</a></li>
 								<li><a href="#">Documentation</a></li>
 								<li><a href="#">Refund policy</a></li>
 								<li><a href="#">Ticket system</a></li>
 								<li><a href="#">Billing system</a></li>
 							</ul>
 						</div>
 					</div>
 					<!--/.col-md-3-->

 					<div class="col-md-3 col-sm-6">
 						<div class="widget">
 							<h3>Developers</h3>
 							<ul>
 								<li><a href="#">Web Development</a></li>
 								<li><a href="#">SEO Marketing</a></li>
 								<li><a href="#">Theme</a></li>
 								<li><a href="#">Development</a></li>
 								<li><a href="#">Email Marketing</a></li>
 								<li><a href="#">Plugin Development</a></li>
 								<li><a href="#">Article Writing</a></li>
 							</ul>
 						</div>
 					</div>
 					<!--/.col-md-3-->

 					<div class="col-md-3 col-sm-6">
 						<div class="widget">
 							<h3>Our Partners</h3>
 							<ul>
 								<li><a href="#">Adipisicing Elit</a></li>
 								<li><a href="#">Eiusmod</a></li>
 								<li><a href="#">Tempor</a></li>
 								<li><a href="#">Veniam</a></li>
 								<li><a href="#">Exercitation</a></li>
 								<li><a href="#">Ullamco</a></li>
 								<li><a href="#">Laboris</a></li>
 							</ul>
 						</div>
 					</div>
 					<!--/.col-md-3-->
 				</div>
 			</div>


 		</div>
 	</div>
 </section>
