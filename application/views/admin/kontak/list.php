<?php
// Form buka utk delete multiple
echo form_open(base_url('admin/kontak/proses'));
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
							<th>pesan</th>
							<th>Nomor Telepon</th>
							<th>ACTION</th>
						</tr>
					</thead>
					<tbody>
						<?php
						// Looping data user dg foreach
						$i = 1;
						foreach ($kontak as $kon) {
						?>

							<tr>
								<td class="text-center">
									<input type="checkbox" name="id_struktur[]" value="<?php echo $kon->id_kontak ?>">
								</td>
								<td><?php echo $kon->nama?></td>
								<td><?php echo $kon->pesan ?></td>
								<td><?php echo $kon->telepon?></td>
								<td>
									<div class="btn-group">
										<a href="<?php echo base_url('admin/kontak/delete/' . $kon->id_kontak) ?>" class="btn btn-danger btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i> Hapus</a>
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
