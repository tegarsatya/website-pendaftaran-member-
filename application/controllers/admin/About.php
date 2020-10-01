<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	// load data
	public function __construct()
	{
		parent::__construct();
		$this->load->model('about_model');
		// Tambahkan proteksi halaman
		$url_pengalihan = str_replace('index.php/', '', current_url());
		$pengalihan 	= $this->session->set_userdata('pengalihan', $url_pengalihan);
		// Ambil check login dari simple_login
		$this->simple_login->check_login($pengalihan);
	}

	public function index()
	{
		
	}

}

/* End of file Abaout.php */
