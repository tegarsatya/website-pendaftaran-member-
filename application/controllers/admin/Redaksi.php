<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Redaksi extends CI_Controller {


	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('redaksi_model');
		$this->load->model('kategori_redaksi_model');

		$url_pengalihan = str_replace('index.php/', '', current_url());
		$pengalihan 	= $this->session->set_userdata('pengalihan', $url_pengalihan);
		// Ambil check login dari simple_login
		$this->simple_login->check_login($pengalihan);
	}

	public function index()
	{
		$redaksi = $this->redaksi_model->listing();

		$data = array(
			'title'		=> 'Data Redaksi (' . count($redaksi) . ')',
			'redaksi'	=> $redaksi,
			'isi'		=> 'admin/redaksi/list'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Tambah
	public function tambah()
	{
		$kategori	= $this->kategori_redaksi_model->listing();

		// Validasi
		$v = $this->form_validation;

		$v->set_rules(
			'nama_redaksi',
			'Nama redaksi',
			'required|is_unique[redaksi.nama_redaksi]',
			array(
				'required'		=> 'Nama reedaksi harus diisi',
				'is_unique'		=> 'Nama redaksi: <strong>' . $this->input->post('nama_redaksi') .
					'</strong> sudah ada. Buat nama yang berbeda'
			)
		);

		$v->set_rules(
			'keterangan',
			'keterangan',
			'required',
			array('required'		=> 'keterangan redaksi harus diisi')
		);

		if ($v->run()) {
			$config['upload_path'] 		= './assets/upload/redaksi/';
			$config['allowed_types'] 	= 'gif|jpg|png|svg';
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				// End validasi

				$data = array(
					'title'				=> 'Tambah redaksi',
					'kategori_redaksi'	=> $kategori,
					'error'				=> $this->upload->display_errors(),
					'isi'				=> 'admin/redaksi/tambah'
				);
				$this->load->view('admin/layout/wrapper', $data);
				// Masuk database
			} else {
				$upload_data				= array('uploads' => $this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/' . $upload_data['uploads']['file_name'];
				$config['new_image'] 		= './assets/upload/redaksi/';
				$config['create_thumb'] 	= TRUE;
				$config['quality'] 			= "100%";
				$config['maintain_ratio'] 	= TRUE;
				$config['width'] 			= 360; // Pixel
				$config['height'] 			= 200; // Pixel
				$config['x_axis'] 			= 0;
				$config['y_axis'] 			= 0;
				$config['thumb_marker'] 	= '';
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				// Proses ke database
				$i = $this->input;
				$data = array(

					'id_user'				=> $this->session->userdata('id_user'),
					'id_kategori_redaksi'	=> $i->post('id_kategori_redaksi'),
					'slug_redaksi'			=> url_title($i->post('nama_redaksi'), 'dash', TRUE),
					'nama_redaksi'			=> $i->post('nama_redaksi'),
					'keterangan'			=> $i->post('keterangan'),
					'status_redaksi'		=> $i->post('status_redaksi'),
					'gambar'				=> $upload_data['uploads']['file_name'],
				);

				$this->redaksi_model->tambah($data);
				$this->session->set_flashdata('sukses', 'data Redaksi telah ditambahkan');
				redirect(base_url('admin/redaksi'));
			}
		}
		// End masuk database
		$data = array(

			'title'				=> 'Tambah redaksi',
			'kategori_redaksi'	=> $kategori,
			'isi'				=> 'admin/redaksi/tambah'

		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Api Edit
	// Edit
	public function edit($id_redaksi)
	{
		$redaksi	= $this->redaksi_model->detail($id_redaksi);
		$kategori	= $this->kategori_redaksi_model->listing();

		// Validasi
		$v = $this->form_validation;

		$v->set_rules(
			'nama_redaksi',
			'Nama redaksi',
			'required',
			array('required'		=> 'Nama redaksi harus diisi')
		);

		$v->set_rules(
			'keterangan',
			'Keterangan ',
			'required',
			array('required'		=> 'Keterangan harus diisi')
		);

		if ($v->run()) {
			if (!empty($_FILES['gambar']['name'])) {
				$config['upload_path'] 		= './assets/upload/redaksi/';
				$config['allowed_types'] 	= 'gif|jpg|png|svg';
				$config['max_size']			= '12000'; // KB	
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar')) {
					// End validasi

					$data = array(
						'title'				=> 'Edit berita',
						'kategori_redaksi'	=> $kategori,
						'redaksi'			=> $redaksi,
						'error'				=> $this->upload->display_errors(),
						'isi'				=> 'admin/redaksi/edit'
					);
					$this->load->view('admin/layout/wrapper', $data);
					// Masuk database
				} else {
					$upload_data				= array('uploads' => $this->upload->data());
					// Image Editor
					$config['image_library']	= 'gd2';
					$config['source_image'] 	= './assets/upload/' . $upload_data['uploads']['file_name'];
					$config['new_image'] 		= './assets/upload/redaksi/';
					$config['create_thumb'] 	= TRUE;
					$config['quality'] 			= "100%";
					$config['maintain_ratio'] 	= TRUE;
					$config['width'] 			= 360; // Pixel
					$config['height'] 			= 200; // Pixel
					$config['x_axis'] 			= 0;
					$config['y_axis'] 			= 0;
					$config['thumb_marker'] 	= '';
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

					// Proses ke database
					$i = $this->input;
					$data = array(
						'id_redaksi'			=> $id_redaksi,
						'id_user'				=> $this->session->userdata('id_user'),
						'id_kategori_redaksi'	=> $i->post('id_kategori_redaksi'),
						'slug_redaksi'			=> url_title($i->post('nama_redaksi'), 'dash', TRUE),
						'nama_redaksi'			=> $i->post('nama_redaksi'),
						'keterangan'			=> $i->post('keterangan'),
						'status_redaksi'		=> $i->post('status_redaksi'),
						'gambar'				=> $upload_data['uploads']['file_name'],
					);
					$this->redaksi_model->edit($data);
					$this->session->set_flashdata('sukses', 'redaksi telah diedit');
					redirect(base_url('admin/redaksi'));
				}
			} else {
				// Proses ke database
				$i = $this->input;
				$data = array(
					'id_redaksi'			=> $id_redaksi,
					'id_user'				=> $this->session->userdata('id_user'),
					'id_kategori_redaksi'	=> $i->post('id_kategori_redaksi'),
					'slug_redaksi'			=> url_title($i->post('nama_redaksi'), 'dash', TRUE),
					'nama_redaksi'			=> $i->post('nama_redaksi'),
					'keterangan'			=> $i->post('keterangan'),
					'status_redaksi'		=> $i->post('status_redaksi'),
					'gambar'				=> $upload_data['uploads']['file_name'],
				);
				$this->redaksi_model->edit($data);
				$this->session->set_flashdata('sukses', 'redaksi telah diedit');
				redirect(base_url('admin/redaksi'));
			}
		}
		// End masuk database
		$data = array(
			'title'				=> 'Edit Redaksi',
			'kategori_redaksi'	=> $kategori,
			'redaksi'			=> $redaksi,
			'isi'				=> 'admin/redaksi/edit'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}


	// APi Delete
	public function delete($id_redaksi)
	{
		$data = array('id_redaksi'	=> $id_redaksi);
		$this->redaksi_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah di hapus');
		redirect(base_url('admin/redaksi'));
	}


}

/* End of file Redaksi.php */
