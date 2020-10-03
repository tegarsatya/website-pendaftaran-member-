<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{

	// Database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pendaftaran_model');
	}
	// api Get
	public function index()
	{
		$data	= array(
			'title'				=> 'Halaman Pendaftaran Member Komunitas Mobil Honda Jazz Bekasi',
			'isi'				=> 'pendaftaran/list'
		);
		$this->load->view('layout/wrapper', $data);
	}

	// Api Create 
	public function simpan_pendaftaran()
	{
		$valid = $this->form_validation;

		$valid->set_rules('nama', 'Nama Lengkap',
			'trim|required',
			array('required' 	=> 'wajib di isi'));
		$valid->set_rules('alamat', 'Alamat',
			'trim|required',
			array('required' 	=> 'wajib di isi'));
		$valid->set_rules('nomor_telepon', 'Nomor HP',
			'trim|required',
			array('required' 	=> 'wajib di isi'));
		$valid->set_rules('warna_mobil', 'Warna Mobil', 'trim|required',
		array('required' 	=> 'wajib di isi'));
		$valid->set_rules('plat_nomor', 'plat nomor',
			'trim|required',
			array('required' 	=> 'wajib di isi'));
		$valid->set_rules('keterangan', ' Keterangan',
			'trim|required',
			array('required' 	=> 'wajib di isi'));

		if ($valid->run() === FALSE) {
			// End validasi
			$data = array(
				'title'		=> 'Simpan Pendaftaran',
				'isi'		=> 'pendaftaran/list'
			);
			$this->load->view('layout/wrapper', $data, FALSE);
		} else {

			$data = array(
				
				'kode_member' 			=> $this->input->post('kode_member'),
				'nama'					=> $this->input->post('nama'),
				'alamat'			    => $this->input->post('alamat'),
				'nomor_telepon' 		=> $this->input->post('nomor_telepon'),
				'plat_nomor' 			=> $this->input->post('plat_nomor'),
				'warna_mobil' 			=> $this->input->post('warna_mobil'),
				'keterangan' 			=> $this->input->post('keterangan'),
			);

			$this->pendaftaran_model->insert($data);

			if ($data) {
				?>
				<script type="text/javascript">
					alert('Terima Kasih telah mendaftar !');
					window.location = '<?php echo base_url('pendaftaran/cetak_pendaftaran'); ?>'
				</script>
			<?php

			} else {
			?>
				<script type="text/javascript">
					alert('Oopss!!! Ada kesalahan, silahkan ulangi !');
					window.location = '<?php echo base_url('pendaftaran/cetak_pendaftaran'); ?>'
				</script>
			<?php
			}
		}
	}

	public function cetak_pendaftaran()
	{
		$data	= array(
			'title'				=> 'Cetak Pendaftaran',
			'isi'				=> 'pendaftaran/cetak_pendaftaran',
		);

		$this->load->view('layout/wrapper', $data);
	}
}

/* End of file Pendaftaran.php */
