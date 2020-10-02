<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('video_model');
	}

	// api Get
	public function index()
	{
		$video		= $this->video_model->listing();

		$data	= array(
			'title'				=> 'Halaman Video ',
			'judul'				=> 'Video Kegiatan Komunitas',
			'video'				=> $video,
			'isi'				=> 'video/list'
		);
		$this->load->view('layout/wrapper', $data);
	}

}

/* End of file Video.php */
