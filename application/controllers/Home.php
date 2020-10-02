<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('profil_model');
		$this->load->model('struktur_model');
		$this->load->model('galeri_model');
		$this->load->model('kontak_model');
	
	}

	public function index ()
	{
		$profil 		= $this->profil_model->listing();
		$struktur 		= $this->struktur_model->listing();
		$galeri 		= $this->galeri_model->listing();
		$kontak 		= $this->kontak_model->listing();

		$data = array(

			'title'					=> 'Halaman Home',
			'profil'				=> $profil,
			'struktur'				=> $struktur,
			'galeri'				=> $galeri,
			'kontak'				=> $kontak,
			'isi'					=> 'home/list'

		);
		$this->load->view('layout/wrapper', $data, FALSE);
	}
}

/* End of file Home.php */

