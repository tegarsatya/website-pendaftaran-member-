<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kegiatan_model');
		// $this->log_user->add_log();
		// Tambahkan proteksi halaman
		$url_pengalihan = str_replace('index.php/', '', current_url());
		$pengalihan 	= $this->session->set_userdata('pengalihan', $url_pengalihan);
		// Ambil check login dari simple_login
		$this->simple_login->check_login($pengalihan);
	}

	public function index()
	{
		$kegiatan 	= $this->kegiatan_model->listing();
		// $total 	= $this->user_model->total();

		$data = array(
			'title'		=> 'Data Kegiatan Komunitas Honda Jazz (' . count($kegiatan) . ')',
			'kegiatan'	=> $kegiatan,
			'isi'		=> 'admin/kegiatan/list'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Tambah
	public function tambah()
	{
		$kegiatan 	= $this->kegiatan_model->listing();

		// Validasi
		$v = $this->form_validation;
		$v->set_rules(
			'judul_kegiatan',
			'Judul',
			'required',
			array('required'		=> 'Judul Kegiatan harus diisi')
		);

		$v->set_rules(
			'keterangan',
			'keterangan',
			'required',
			array('required'		=> 'keterangan harus diisi')
		);

		if ($v->run()) {
			$config['upload_path'] 		= './assets/upload/kegiatan/';
			$config['allowed_types'] 	= 'gif|jpg|png|svg';
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				// End validasi

				$data = array(
					'title'		=> 'Tambah Data Kegiatan Komunitas',
					'kegiatan'	=> $kegiatan,
					'isi'		=> 'admin/kegiatan/tambah',
					'error'		=> $this->upload->display_errors(),
				
				);
				$this->load->view('admin/layout/wrapper', $data);
				// Masuk database
			} else {
				$upload_data				= array('uploads' => $this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/' . $upload_data['uploads']['file_name'];
				$config['new_image'] 		= './assets/upload/kegiatan/';
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

					'judul_kegiatan'		=> $i->post('judul_kegiatan'),
					'keterangan'			=> $i->post('keterangan'),
					'gambar'				=> $upload_data['uploads']['file_name'],
				);

				$this->kegiatan_model->tambah($data);
				$this->session->set_flashdata('sukses', 'Kegiatan telah ditambah');
				redirect(base_url('admin/kegiatan'));
			}
		}
		// End masuk database
		$data = array(

			'title'		=> 'Tambah Data Kegiatan Komunitas',
			'kegiatan'	=> $kegiatan,
			'isi'		=> 'admin/kegiatan/tambah',

		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Edit galeri
	public function edit($id_kegiatan)
	{
		$kegiatan		 	= $this->kegiatan_model->detail($id_kegiatan);

		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules(
			'judul_kegiatan',
			'Judul',
			'required',
			array('required'		=> 'Judul Kegiatan harus diisi')
		);

		$valid->set_rules(
			'keterangan',
			'keterangan',
			'required',
			array('required'	=> 'keterangan harus diisi')
		);


		if ($valid->run()) {

			if (!empty($_FILES['gambar']['name'])) {

				$config['upload_path']   = './assets/upload/kegiatan/';
				$config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
				$config['max_size']      = '12000'; // KB  
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar')) {
					// End validasi

					$data = array(
						'title'				=> 'Edit Kegiatan Komunitas',
						'kegiatan'			=> $kegiatan,
						'isi'				=> 'admin/kegiatan/edit'
					);
					$this->load->view('admin/layout/wrapper', $data, FALSE);
					// Masuk database
				} else {
					$upload_data        		= array('uploads' => $this->upload->data());
					// Image Editor
					$config['image_library']  	= 'gd2';
					$config['source_image']   	= './assets/upload/' . $upload_data['uploads']['file_name'];
					$config['new_image']     	= './assets/upload/kegiatan/';
					$config['create_thumb']   	= TRUE;
					$config['quality']       	= "100%";
					$config['maintain_ratio']   = TRUE;
					$config['width']       		= 360; // Pixel
					$config['height']       	= 360; // Pixel
					$config['x_axis']       	= 0;
					$config['y_axis']       	= 0;
					$config['thumb_marker']   	= '';
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

					$i 		= $this->input;

					$data = array(

						'id_kegiatan'			=> $id_kegiatan,
						'judul_kegiatan'		=> $i->post('judul_kegiatan'),
						'keterangan'			=> $i->post('keterangan'),
						'gambar'				=> $upload_data['uploads']['file_name'],
					);
					$this->kegiatan_model->edit($data);
					$this->session->set_flashdata('sukses', 'Data telah diedit');
					redirect(base_url('admin/kegiatan'), 'refresh');
				}
			} else {
				$i 		= $this->input;

				$data = array(

					'id_kegiatan'			=> $id_kegiatan,
					'judul_kegiatan'		=> $i->post('judul_kegiatan'),
					'keterangan'			=> $i->post('keterangan'),
				);
				$this->kegiatan_model->edit($data);
				$this->session->set_flashdata('sukses', 'Data telah diedit');
				redirect(base_url('admin/kegiatan'), 'refresh');
			}
		}
		// End masuk database
		$data = array(
			'title'				=> 'Edit Kegiatan Komunitas',
			'kegiatan'			=> $kegiatan,
			'isi'				=> 'admin/kegiatan/edit'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}


	// Delete
	public function delete($id_kegiatan)
	{

		$data = array('id_kegiatan'	=> $id_kegiatan);
		$this->kegiatan_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data Struktur telah didelete');
		redirect(base_url('admin/kegiatan'));
	}
}

/* End of file Kegiatan.php */
