<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
	tinymce.init({
		file_browser_callback: function(field, url, type, win) {
			tinyMCE.activeEditor.windowManager.open({
				file: '<?php echo base_url() ?>assets/kcfinder/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
				title: 'KCFinder',
				width: 700,
				height: 500,
				inline: true,
				close_previous: false
			}, {
				window: win,
				input: field
			});
			return false;
		},
		selector: "#isi",
		height: 150,
		plugins: [
			"advlist autolink lists link image charmap print preview anchor",
			"searchreplace visualblocks code fullscreen",
			"insertdatetime media table contextmenu paste"
		],
		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
	});
</script>

<?php
// Error
if (isset($error)) {
	echo '<div class="alert alert-warning">';
	echo $error;
	echo '</div>';
}
// Validasi
echo validation_errors('<div class="alert alert-success">', '</div>');

// Form
echo form_open(base_url('admin/redaksi/edit/' . $redaksi->id_redaksi));
?>
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary"><?php echo $title ?></h6>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Nama Redaksi <span class="text-danger">*</span></label>
						<input type="text" name="nama_redaksi" class="form-control form-control-lg" value="<?php echo $redaksi->nama_redaksi ?>" placeholder="Nama Berita" required>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group form-group-lg">
						<label>Status Berita</label>
						<select name="status_redaksi" class="form-control">
							<option value="Publish">Publikasikan</option>
							<option value="Draft">Simpan sebagai Draft</option>
						</select>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Kategori Redaksi</label>
						<select name="id_kategori_redaksi" class="form-control">
							<?php foreach ($kategori_redaksi as $kategori) { ?>
								<option value="<?php echo $kategori->id_kategori_redaksi ?>">
									<?php if ($redaksi->id_kategori_redaksi == $kategori->id_kategori_redaksi) {
										echo "selected";
									} ?>
									<?php echo $kategori->nama_redaksi ?></option>
							<?php } ?>
						</select>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Upload gambar</label>
						<input type="file" name="gambar" class="form-control">
					</div>
				</div>

				<div class="col-md-12">
					<div class="form-group">
						<label>Keterangan</label>
						<textarea name="keterangan" class="form-control" placeholder="isi" id="isi"><?php echo $redaksi->keterangan ?></textarea>
					</div>
				</div>
			</div>

			<div class="col-md-12">
				<div class="form-group">
					<div class="btn-group">
						<button class="btn btn-success btn-lg" name="submit" type="submit">
							<i class="fa fa-save"></i> Simpan
						</button>
						<button class="btn btn-info btn-lg" name="reset" type="reset">
							<i class="fa fa-times"></i> Reset
						</button>
						<a href="<?php echo base_url('admin/berita') ?>" class="btn btn-warning btn-lg">
							<i class="fa fa-backward"></i> Kembali
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
// Form close
echo form_close();
?>
