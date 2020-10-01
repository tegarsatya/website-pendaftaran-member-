<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('struktur_model');
	}

	// api Get
	public function index()
	{
		$struktur	= $this->struktur_model->listing();

		$data	= array(
			'title'				=> 'Halaman Struktur Organisasi Komunitas ',
			'struktur'			=> $struktur,
			'isi'				=> 'struktur/list'
		);
		$this->load->view('layout/wrapper', $data);
	}

}

/* End of file Struktur.php */
