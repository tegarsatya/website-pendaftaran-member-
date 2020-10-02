 <div class="page-title" style="background-image: url(<?php echo base_url() ?>assets/frontend/images/page-title.png)">
 	<h1>Contact us</h1>
 </div>

 <section id="contact-page">
 	<div class="container">
 		<div class="large-title text-center">
 			<h2>Drop Your Message</h2>
 			<p>All users on MySpace will know that there are millions of people out there. Every day <br> besides so many people joining this community.</p>
 		</div>
 		<div class="row contact-wrap">
 			<div  style="display: none"></div>
 			<form method="post" action="<?php echo base_url() ?>kontak/simpan_kontak">
 				<div class="col-sm-5 col-sm-offset-1">
 					<div class="form-group">
 						<label>Name *</label>
 						<input type="text" name="nama" class="form-control" required="required">
 					</div>
 					<div class="form-group">
 						<label>Email *</label>
 						<input type="email" name="email" class="form-control" required="required">
 					</div>
 					<div class="form-group">
 						<label>Phone</label>
 						<input type="number" name="telepon" class="form-control">
 					</div>
 				</div>
 				<div class="col-sm-5">
 					<div class="form-group">
 						<label>Message *</label>
 						<textarea name="pesan" id="message" required="required" class="form-control" rows="8"></textarea>
 					</div>
 					<div class="form-group">
 						<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
 					</div>
 				</div>
 			</form>
 		</div>
 		<!--/.row-->
 	</div>
 	<!--/.container-->
 </section>
 <!--/#contact-page-->


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
