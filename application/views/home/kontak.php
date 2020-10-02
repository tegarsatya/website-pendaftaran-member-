<section id="contact-page">
	<div class="container">
		<div class="large-title text-center">
			<h2>Drop Your Message</h2>
			<p>All users on MySpace will know that there are millions of people out there. Every day <br> besides so many people joining this community.</p>
		</div>
		<div class="row contact-wrap">
			<div style="display: none"></div>
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
