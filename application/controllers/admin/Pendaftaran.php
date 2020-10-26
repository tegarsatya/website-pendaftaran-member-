<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pendaftaran_model');

		// Tambahkan proteksi halaman
		$url_pengalihan = str_replace('index.php/', '', current_url());
		$pengalihan 	= $this->session->set_userdata('pengalihan', $url_pengalihan);

		// Ambil check login dari simple_login (Jwt library- benteng baja)
		$this->simple_login->check_login($pengalihan);
	}

	// APi Get 
	public function index()
	{
		$pendaftaran	= $this->pendaftaran_model->listing();
		
		$data = array(
			'title'			=> 'Data Pendaftaran Member (' . count($pendaftaran) . ')',
			'pendaftaran'	=> $pendaftaran,
			'isi'			=> 'admin/pendaftaran/list'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function delete($id_pendaftaran)
	{
		$data = array('id_pendaftaran'	=> $id_pendaftaran);
		$this->pendaftaran_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data Pendaftaran telah di hapus');
		redirect(base_url('admin/pendaftaran'));
	}

}

/* End of file Pendaftaran.php */
