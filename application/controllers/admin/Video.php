<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {
	
	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('video_model');
		// Tambahkan proteksi halaman
		$url_pengalihan = str_replace('index.php/', '', current_url());
		$pengalihan 	= $this->session->set_userdata('pengalihan',$url_pengalihan);
		// Ambil check login dari simple_login
		$this->simple_login->check_login($pengalihan);
	}

	// Index
	public function index() {
		$video	= $this->video_model->listing();
		
		$data = array(	'title'	=> 'Video',
						'video'	=> $video,
						'isi'	=> 'admin/video/list');
		$this->load->view('admin/layout/wrapper',$data);
	}

	// Tambah
	public function tambah() {
		// Validasi
		$v = $this->form_validation;
		$v->set_rules('judul_video','Video title','required');
		
		if($v->run()=== FALSE) {
		$data = array(	'title'		=> 'Add Video',
						'isi'		=> 'admin/video/tambah');
		$this->load->view('admin/layout/wrapper', $data);
		// Masuk database
		}else{
				
			$i = $this->input;
			$data = array(	'judul_video'	=> $i->post('judul_video'),
							'keterangan'	=> $i->post('keterangan'),
							'video'			=> $i->post('video'),
							'id_user'		=> $this->session->userdata('id_user'),
							);
			$this->video_model->tambah($data);
			$this->session->set_flashdata('sukses','Data added successfully');
			redirect(base_url('admin/video'));
		}
	}
	
	// Edit
	public function edit($id_video) {
		// Dari database
		$video		= $this->video_model->detail($id_video);
		// Validasi
		$v = $this->form_validation;
		$v->set_rules('judul_video','Video title','required');
		
		if($v->run()=== FALSE) {
		$data = array(	'title'		=> 'Edit Video',
						'video'		=> $video,
						'isi'		=> 'admin/video/edit');
		$this->load->view('admin/layout/wrapper', $data);
		// Masuk database
		}else{
			$i = $this->input;
			$data = array(	'id_video'		=> $video->id_video,
							'judul_video'	=> $i->post('judul_video'),
							'keterangan'	=> $i->post('keterangan'),
							'video'			=> $i->post('video'),
							'id_user'		=> $this->session->userdata('id_user'),
				
							);
			$this->video_model->edit($data);
			$this->session->set_flashdata('sukses','Data updated successfully');
			redirect(base_url('admin/video'));
		}
	}

	// Api Delete
	public function delete($id_video)
	{

		$data = array('id_video'	=> $id_video);
		$this->video_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data Video telah didelete');
		redirect(base_url('admin/Video'));
	}
}
