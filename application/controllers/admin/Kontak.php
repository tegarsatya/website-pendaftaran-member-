<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {


	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kontak_model');

		// Tambahkan proteksi halaman
		$url_pengalihan = str_replace('index.php/', '', current_url());
		$pengalihan 	= $this->session->set_userdata('pengalihan', $url_pengalihan);

		// Ambil check login dari simple_login (Jwt library- benteng baja)
		$this->simple_login->check_login($pengalihan);
	}

	// APi Get 
	public function index()
	{
		$kontak		= $this->kontak_model->listing();
		// $total 	= $this->user_model->total();

		$data = array(
			'title'		=> 'Data Kontak (' . count($kontak) . ')',
			'kontak'	=> $kontak,
			'isi'		=> 'admin/kontak/list'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function delete($id_kontak)
	{
		$data = array('id_kontak'	=> $id_kontak);
		$this->kontak_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data kontak telah didelete');
		redirect(base_url('admin/kontak'));
	}

}

/* End of file Kontak.php */
