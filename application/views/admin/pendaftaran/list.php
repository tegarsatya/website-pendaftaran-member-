<?php
// Form buka utk delete multiple
echo form_open(base_url('admin/pendaftaran/proses'));
?>

<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800"><?php echo $title ?></h1>
	<p>
	</p>


	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary"><?php echo $title ?></h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>NO</th>
							<th>Nama</th>
							<th>alamat</th>
							<th>Plat nomor</th>
							<th>Nomor Telepon</th>
							<th>ACTION</th>
						</tr>
					</thead>
					<tbody>
						<?php
						// Looping data user dg foreach
						$i = 1;
						foreach ($pendaftaran as $pen) {
						?>

							<tr>
								<td class="text-center">
									<input type="checkbox" name="id_pendaftaran[]" value="<?php echo $pen->id_pendaftaran ?>">
								</td>
								<td><?php echo $pen->nama ?></td>
								<td><?php echo $pen->alamat ?></td>
								<td><?php echo $pen->plat_nomor?></td>
								<td><?php echo $pen->nomor_telepon ?></td>
								<td>
									<div class="btn-group">
										<a href="<?php echo base_url('admin/pendaftaran/delete/' . $pen->id_pendaftaran) ?>" class="btn btn-danger btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i> Hapus</a>
									</div>
								</td>
							</tr>

						<?php $i++;
						} //End looping 
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->

<?php
// Form tutup
echo form_close();
?>
