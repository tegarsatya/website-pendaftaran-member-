 <script>
 	function printContent(el) {
 		var restorepage = document.body.innerHTML;
 		var printcontent = document.getElementById(el).innerHTML;
 		document.body.innerHTML = printcontent;
 		window.print();
 		document.body.innerHTML = restorepage;
 	}
 </script>
 <div class="about_trainer">
 	<h3 class="m_2">Pendaftaran</h3>
 	<div class="row about_box">
 		<div class="col-md-12">
 			<div class="panel panel-info">

 				<div class="panel-body">
 					<p>
 						<b>Terima kasih telah melakukan pendaftaran, silahkan klik tombol cetak untuk mencetak !
 						</b>
 					</p>
 					<?php
						$row = $this->db->query("SELECT * from pendaftaran order by id_pendaftaran desc")->row();
						?>
 					<div id="data">
 						<div style="border: 1px solid black;">
 							<img src="<?php echo base_url() ?>assets/frontend/images/IMG-20200215-WA0028.jpg" width="800px" height="400px" style="display: block; margin: auto;">
 							<center>
 								<h1>Komunitas Mobil Honda Jazz </h1>
 								<h5>Bekasi
 									Jawa Barat </h5>
 							</center>
 						</div>
 						<table class="table">
 							<tr>
 								<td>Kode Member</td>
 								<td>:</td>
 								<td><?php echo $row->kode_member; ?></td>
 							</tr>
 							<tr>
 								<td>Nama Lengkap</td>
 								<td>:</td>
 								<td><?php echo $row->nama; ?></td>
 							</tr>
 							<tr>
 								<td>Alamat</td>
 								<td>:</td>
 								<td><?php echo $row->alamat; ?></td>
 							</tr>
 							<tr>
 								<td>No Hp</td>
 								<td>:</td>
 								<td><?php echo $row->nomor_telepon; ?></td>
 							</tr>
 							<tr>
 								<td>warna mobil</td>
 								<td>:</td>
 								<td><?php echo $row->warna_mobil; ?></td>
 							</tr>
 							<tr>
 								<td>plat nomor</td>
 								<td>:</td>
 								<td><?php echo $row->plat_nomor; ?></td>
 							</tr>
 							<tr>
 								<td>Keterangan</td>
 								<td>:</td>
 								<td><?php echo $row->keterangan; ?></td>
 							</tr>

 						</table>
 					</div>
 					<button id="cetak" onclick="printContent('data')" class="btn btn-info">Cetak</button>
 				</div>
 			</div>
 		</div>

 		<div class="clear"></div>
 	</div>
 </div>
