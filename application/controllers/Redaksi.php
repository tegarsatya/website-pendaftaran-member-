<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Redaksi extends CI_Controller {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('redaksi_model');
		$this->load->model('kategori_redaksi_model');
	}

	public function index()
	{
		$kategori	= $this->kategori_redaksi_model->listing();

		$this->load->library('pagination');

		$config['base_url'] 		= base_url() . 'redaksi/index/';
		$config['total_rows'] 		= count($this->redaksi_model->total());
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

		$limit 						= $config['per_page'] ;
		$start 						= ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;

		$this->pagination->initialize($config);
		$redaksi 	= $this->redaksi_model->redaksi($limit, $start);

		$data	= array(
			'title'				=> 'Redaksi ' ,
			'keywords'			=> 'redaksi ',
			'redaksi'			=> $redaksi,
			'pagin' 			=> $this->pagination->create_links(),
			'kategori_redaksi'	=> $kategori,
			'isi'				=> 'redaksi/list'
		);
		$this->load->view('layout/wrapper', $data); 
	}

	// Kategori 
	public function kategori($slug_redaksi)
	{
		$kategori				= $this->kategori_redaksi_model->read($slug_redaksi);
		$id_kategori_redaksi	= $kategori->id_kategori_redaksi;
		$redaksi				= $this->redaksi_model->kategori($id_kategori_redaksi);

		$data	= array(
			'title'				=> 'Kategori Redaksi ' . $kategori->nama_redaksi,
			'keywords' 			=> 'Kategori redaksi ' . $kategori->nama_redaksi,
			'kategori_redaksi'	=> $kategori,
			'redaksi'			=> $redaksi,
			'isi'				=> 'redaksi/list'
		);
		$this->load->view('layout/wrapper', $data);
	}

	// Read
	public function read($slug_redaksi)
	{

		// $redaksi	= $this->redaksi_model->home();
		$redaksi		= $this->redaksi_model->read($slug_redaksi);
		$kategori		= $this->kategori_redaksi_model->listing();

		$data	= array(
			'title'				=> $redaksi->nama_redaksi,
			'keywords' 			=> $redaksi->nama_redaksi,
			'redaksi'			=> $redaksi,
			'kategori_redaksi'	=> $kategori,
			// 'read'				=> $read,
			'isi'				=> 'redaksi/read'
		);
		$this->load->view('layout/wrapper', $data);
	}

}

/* End of file Redaksi.php */
