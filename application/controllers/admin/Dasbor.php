<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		// Tambahkan proteksi halaman
		$url_pengalihan = str_replace('index.php/', '', current_url());
		$pengalihan 	= $this->session->set_userdata('pengalihan', $url_pengalihan);
		// Ambil check login dari simple_login
		$this->simple_login->check_login($pengalihan);
		$this->load->model('pendaftaran_model');
		$this->load->model('kegiatan_model');
		$this->load->model('redaksi_model');
		$this->load->model('video_model');
		// $this->load->model('geleri_model');
		$this->load->model('kontak_model');
		$this->load->model('dasbor_model');
	}

	// Halaman dasbor
	public function index()
	{
		$data = array(

			'title'					=> 'Halaman Dasbor',
			'isi'					=> 'admin/dasbor/list'
			
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file Dasbor.php */
