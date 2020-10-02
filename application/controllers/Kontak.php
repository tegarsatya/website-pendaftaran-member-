<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{

	// Database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kontak_model');
	}
	// api Get
	public function index()
	{
		$data	= array(
			'title'				=> 'Halaman Kontak ',
			'isi'				=> 'kontak/list'
		);
		$this->load->view('layout/wrapper', $data);
	}

	public function simpan_kontak()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'telepon'	=> $this->input->post('telepon'),
			'pesan' => $this->input->post('pesan'),
		);
		$simpan = $this->db->insert('kontak', $data);
		if ($simpan) {
?>
			<script type="text/javascript">
				alert('Terima Kasih telah Menghubungi!');
				window.location = '<?php echo base_url('kontak'); ?>'
			</script>
		<?php
		} else {
		?>
			<script type="text/javascript">
				alert('Oopps ! Ada kesalahan, silahkan ulangi !');
				window.location = '<?php echo base_url('kontak'); ?>'
			</script>
<?php
		}
	}
}

/* End of file Kontak.php */
