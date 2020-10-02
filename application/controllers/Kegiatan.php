<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	//  Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kegiatan_model');
	}
	
	// Index 
	public function index() {
		$kegiatan	= $this->kegiatan_model->listing();
		
		$data	= array( 'title'			=> 'Kegiatan Komunitas ',
						 'keywords' 		=> 'kegiatan ',
						 'kegiatan'			=> $kegiatan,
						 'isi'				=> 'kegiatan/list');
		$this->load->view('layout/wrapper',$data); 
	}

	// Read
	public function read($id_kegiatan)
	{
		// $kegiatan	= $this->kegiatan_model->home();
		$listing 	= $this->kegiatan_model->listing();
		$read		= $this->kegiatan_model->read($id_kegiatan);
		$kegiatan	= $this->kegiatan_model->listing();

		$data	= array(
			'title'			=> $read->judul_kegiatan,
			'keywords'		=> $read->judul_kegiatan,
			'listing'		=> $listing,
			'kegiatan'		=> $kegiatan,
			'read'			=> $read,
			'isi'			=> 'kegiatan/read'
		);
		$this->load->view('layout/wrapper', $data);
	}


}

/* End of file Kegiatan.php */
