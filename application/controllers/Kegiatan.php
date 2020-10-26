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

		$this->load->library('pagination');

		$config['base_url'] 		= base_url() . 'kegiatan/index/';
		$config['total_rows'] 		= count($this->kegiatan_model->total());
		$config['use_page_numbers'] = TRUE;
		$config['per_page'] 		= 2;
		$config['uri_segment'] 		= 3;
		$config['full_tag_open'] 	= '<ul class="pagination pagination-lg">';
		$config['full_tag_close'] 	= '</ul>';
		$config['first_link'] 		= 'Awal';
		$config['first_tag_open'] 	= '<li class="fa fa-long-arrow-left">';
		$config['first_tag_close'] 	= '</li>';

		$config['last_link'] 		= 'Akhir';
		$config['last_tag_open'] 	= '<li class="next page">';
		$config['last_tag_close'] 	= '</li>';

		$config['next_link'] 		= 'Selanjutnya';
		$config['next_tag_open'] 	= '<li class="next page">';
		$config['next_tag_close'] 	= '</li>';

		$config['prev_link'] 		= ' Sebelumnya';
		$config['prev_tag_open'] 	= '<li class="prev page">';
		$config['prev_tag_close'] 	= '</li>';

		$config['cur_tag_open'] 	= '<li class="active"><a href="">';
		$config['cur_tag_close'] 	= '</a></li>';

		$config['num_tag_open'] 	= '<li class="page">';
		$config['num_tag_close'] 	= '</li>';

		$limit 						= $config['per_page'];
		$start 						= ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;

		$this->pagination->initialize($config);
		$kegiatan 	= $this->kegiatan_model->kegiatan($limit, $start);

		
		$data	= array( 'title'			=> 'Kegiatan Komunitas ',
						 'keywords' 		=> 'kegiatan ',
						'pagin' 			=> $this->pagination->create_links(),
						 'kegiatan'			=> $kegiatan,
						 'isi'				=> 'kegiatan/list');
		$this->load->view('layout/wrapper',$data); 
	}

	// Read
	public function read($id_kegiatan)
	{
		// $kegiatan	= $this->kegiatan_model->home();
		$kegiatan		= $this->kegiatan_model->read($id_kegiatan);

		$data	= array(
			'title'				=> $kegiatan->judul_kegiatan,
			'keywords' 			=> $kegiatan->judul_kegiatan,
			'kegiatan'			=> $kegiatan,
			'isi'				=> 'kegiatan/read'
		);
		$this->load->view('layout/wrapper', $data);

	}
}

/* End of file Kegiatan.php */
