<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Struktur extends CI_Controller
{

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('struktur_model');
		// $this->log_user->add_log();
		// Tambahkan proteksi halaman
		$url_pengalihan = str_replace('index.php/', '', current_url());
		$pengalihan 	= $this->session->set_userdata('pengalihan', $url_pengalihan);
		// Ambil check login dari simple_login
		$this->simple_login->check_login($pengalihan);
	}

	public function index()
	{
		$struktur 	= $this->struktur_model->listing();
		// $total 	= $this->user_model->total();

		$data = array(
			'title'		=> 'Data Struktur Organisasi Komunitas Honda Jazz (' . count($struktur) . ')',
			'struktur'	=> $struktur,
			'isi'		=> 'admin/struktur/list'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Tambah
	public function tambah()
	{
		$struktur 	= $this->struktur_model->listing();

		// Validasi
		$v = $this->form_validation;


		$v->set_rules(
			'keterangan',
			'keterangan',
			'required',
			array('required'		=> 'keterangan harus diisi')
		);

		if ($v->run()) {
			$config['upload_path'] 		= './assets/upload/struktur/';
			$config['allowed_types'] 	= 'gif|jpg|png|svg';
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				// End validasi

				$data = array(
					'title'		=> 'Tambah Data Struktur Organisasi',
					'struktur'	=> $struktur,
					'error'		=> $this->upload->display_errors(),
					'isi'		=> 'admin/struktur/tambah'
				);
				$this->load->view('admin/layout/wrapper', $data);
				// Masuk database
			} else {
				$upload_data				= array('uploads' => $this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/' . $upload_data['uploads']['file_name'];
				$config['new_image'] 		= './assets/upload/struktur/';
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

					'keterangan'			=> $i->post('keterangan'),
					'nama'					=> $i->post('nama'),
					'gambar'				=> $upload_data['uploads']['file_name'],
				);

				$this->struktur_model->tambah($data);
				$this->session->set_flashdata('sukses', 'Struktur telah ditambah');
				redirect(base_url('admin/struktur'));
			}
		}
		// End masuk database
		$data = array(

			'title'		=> 'Tambah Data Struktur Organisasi',
			'struktur'	=> $struktur,
			'isi'		=> 'admin/struktur/tambah'

		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Edit galeri
	public function edit($id_struktur)
	{
		$struktur		 	= $this->struktur_model->detail($id_struktur);

		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules(
			'keterangan',
			'keterangan',
			'required',
			array('required'	=> 'keterangan harus diisi')
		);


		if ($valid->run()) {

			if (!empty($_FILES['gambar']['name'])) {

				$config['upload_path']   = './assets/upload/struktur/';
				$config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
				$config['max_size']      = '12000'; // KB  
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar')) {
					// End validasi

					$data = array(
						'title'				=> 'Edit Struktur Organisasi Komunitas Honda Jazz Bekasi',
						'struktur'			=> $struktur,
						'isi'				=> 'admin/struktur/edit'
					);
					$this->load->view('admin/layout/wrapper', $data, FALSE);
					// Masuk database
				} else {
					$upload_data        		= array('uploads' => $this->upload->data());
					// Image Editor
					$config['image_library']  	= 'gd2';
					$config['source_image']   	= './assets/upload/' . $upload_data['uploads']['file_name'];
					$config['new_image']     	= './assets/upload/struktur/';
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
						'id_struktur'			=> $id_struktur,
						'nama'					=> $i->post('nama'),
						'keterangan'			=> $i->post('keterangan'),
						'gambar'				=> $upload_data['uploads']['file_name'],
					);
					$this->struktur_model->edit($data);
					$this->session->set_flashdata('sukses', 'Data telah diedit');
					redirect(base_url('admin/struktur'), 'refresh');
				}
			} else {
				$i 		= $this->input;

				$data = array(
					'id_struktur'			=> $id_struktur,
					'nama'					=> $i->post('nama'),
					'keterangan'			=> $i->post('keterangan'),
					'gambar'				=> $upload_data['uploads']['file_name'],
				);
				$this->struktur_model->edit($data);
				$this->session->set_flashdata('sukses', 'Data telah diedit');
				redirect(base_url('admin/struktur'), 'refresh');
			}
			
		}
		// End masuk database
		$data = array(
						'title'				=> 'Edit Struktur Organisasi Komunitas Honda Jazz Bekasi',
						'struktur'			=> $struktur,
						'isi'				=> 'admin/struktur/edit'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}


	// Delete
	public function delete($id_struktur)
	{

		$data = array('id_struktur'	=> $id_struktur);
		$this->struktur_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data Struktur telah didelete');
		redirect(base_url('admin/struktur'));
	}
}

/* End of file Struktur.php */
