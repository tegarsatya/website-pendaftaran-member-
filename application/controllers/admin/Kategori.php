<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {


	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kategori_redaksi_model');
		// $this->log_user->add_log();
		// Tambahkan proteksi halaman
		$url_pengalihan = str_replace('index.php/', '', current_url());
		$pengalihan 	= $this->session->set_userdata('pengalihan', $url_pengalihan);
		// Ambil check login dari simple_login
		$this->simple_login->check_login($pengalihan);
	}

	// api get all
	public function index()
	{
		$kategori_redaksi 	= $this->kategori_redaksi_model->listing();
		// $total 	= $this->user_model->total();

		$data = array(
			'title'				=> 'Data Kategori Redaksi (' . count($kategori_redaksi) . ')',
			'kategori_redaksi'	=> $kategori_redaksi,
			'isi'				=> 'admin/kategori/list'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// api create
	public function tambah()
	{

		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules(
			'nama_redaksi',
			'Nama redaksi',
			'required|is_unique[kategori_redaksi.nama_redaksi]',
			array(
				'required'		=> 'Nama redaksi harus diisi',
				'is_unique'		=> 'Nama Redaksi sudah ada. Buat Nama kategori baru!'
			)
		);


		if ($valid->run() === FALSE) {
			// End validasi

			$data = array(
				'title'				=> 'Tambah Kategori Redaksi',
				'kategori_redaksi'	=> $this->kategori_redaksi_model->listing(),
				'isi'				=> 'admin/kategori/tambah'
			);

			$this->load->view('admin/layout/wrapper', $data, FALSE);

			// Proses masuk ke database
		} else {

			$i 	= $this->input;
			$slug 	= url_title($i->post('nama_redaksi'), 'dash', TRUE);

			$data = array(
				'nama_redaksi'	=> $i->post('nama_redaksi'),
				'slug_redaksi'	=> $slug,

			);
			$this->kategori_redaksi_model->tambah($data);

			$this->session->set_flashdata('sukses', 'Data telah ditambah');

			redirect(base_url('admin/kategori'), 'refresh');
		}
		// End proses masuk database
	}

	// Edit
	public function edit($id_kategori_redaksi)
	{
		$kategori_redaksi = $this->kategori_redaksi_model->detail($id_kategori_redaksi);

		// Validasi
		$this->form_validation->set_rules(
			'nama_redaksi',
			'Nama kategori',
			'required',
			array('required'	=> 'Nama Redaksi berita harus diisi')
		);

		if ($this->form_validation->run() === FALSE) {
			// End validasi

			$data = array(
				'title'				=> 'Edit Kategori Redaksi',
				'kategori_redaksi'	=> $kategori_redaksi,
				'isi'				=> 'admin/kategori/edit'
			);
			$this->load->view('admin/layout/wrapper', $data);
			// Masuk database
		} else {
			$i 				= $this->input;
			$slug_redaksi	= url_title($i->post('nama_redaksi'), 'dash', TRUE);
			$data = array(
				'id_kategori_redaksi'	=> $id_kategori_redaksi,
				'slug_redaksi'			=> $slug_redaksi,
				'nama_redaksi'			=> $i->post('nama_redaksi'),
			);
			$this->kategori_redaksi_model->edit($data);
			$this->session->set_flashdata('sukses', 'Kategori Redaksi telah diedit');
			redirect(base_url('admin/kategori'));
		}
		// End masuk database
	}

	// Delete
	public function delete($id_kategori_redaksi)
	{

		$data = array('id_kategori_redaksi'	=> $id_kategori_redaksi);
		$this->kategori_model->delete($data);
		$this->session->set_flashdata('sukses', 'Kategori Redaksi telah didelete');
		redirect(base_url('admin/kategori'));
	}


}

/* End of file Kategori_redaksi.php */
