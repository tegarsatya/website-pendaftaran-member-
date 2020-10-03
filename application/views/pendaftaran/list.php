 <div class="page-title" style="background-image: url(<?php echo base_url() ?>assets/frontend/images/page-title.png)">
 	<h1>Pendaftaran Member</h1>
 </div>

 <section id="contact-page">
 	<div class="container">
 		<div class="large-title text-center">
 			<h2>Formulir Pendaftaran Member</h2>
 			<p>All users on MySpace will know that there are millions of people out there. Every day <br> besides so many people joining this community.</p>
 		</div>
 		<div class="row contact-wrap">
 			<div style="display: none"></div>
 			<form action="<?php echo base_url() ?>pendaftaran/simpan_pendaftaran" method="post">
 				<div class="col-sm-5 col-sm-offset-1">
 					<div class="form-group">
 						<label>Kode member *</label>

 						<?php
							$cek = $this->db->get('pendaftaran')->num_rows();
							if ($cek == 0) {
								$data = 'ID001';
							} else {
								$this->db->order_by('id_pendaftaran', 'DESC');
								$cekdb = $this->db->get('pendaftaran')->row();
								$data = $cekdb->kode_member;
								$no_urut = (int)substr($data, 3, 3);
								$no_urut++;

								$char = "ID";
								$data = $char . sprintf("%03s", $no_urut);
							}
							?>
 						<input type="text" name="kode_member" class="form-control" value="<?php echo $data; ?>" readonly>
 					</div>

 					<div class="form-group">
 						<label>Name *</label>
 						<input type="text" name="nama" class="form-control" required="required">
 					</div>
 					<div class="form-group">
 						<label>Warna Mobil *</label>
 						<input type="text" name="warna_mobil" class="form-control" required="required">
 					</div>
 					<div class="form-group">
 						<label>Phone</label>
 						<input type="number" name="nomor_telepon" class="form-control">
 					</div>
 					<div class="form-group">
 						<label>alamat</label>
 						<input type="text" name="alamat" class="form-control" required="required">
 					</div>
 					<div class="form-group">
 						<label>Plat Nomor</label>
 						<input type="text" name="plat_nomor" class="form-control" required="required">
 					</div>
 				</div>
 				<div class="col-sm-5">
 					<div class="form-group">
 						<label>Keterangan *</label>
 						<textarea name="keterangan" id="keterangan" required="required" class="form-control" rows="20"></textarea>
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
