<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_redaksi_model extends CI_Model {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//Listing
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('kategori_redaksi');
		$this->db->order_by('id_kategori_redaksi');
		$query = $this->db->get();
		return $query->result();
	}

	//Read
	public function read($slug_redaksi)
	{
		$this->db->select('*');
		$this->db->from('kategori_redaksi');
		$this->db->where('slug_redaksi', $slug_redaksi);
		$this->db->order_by('id_kategori_redaksi');
		$query = $this->db->get();
		return $query->row();
	}

	// detail perkategori_berita
	public function detail($id_kategori_redaksi)
	{
		$query = $this->db->get_where('kategori_redaksi', array('id_kategori_redaksi'  => $id_kategori_redaksi));
		return $query->row();
	}

	// Tambah
	public function tambah($data)
	{
		$this->db->insert('kategori_redaksi', $data);
	}

	// Edit 
	public function edit($data)
	{
		$this->db->where('id_kategori_redaksi', $data['id_kategori_redaksi']);
		$this->db->update('kategori_redaksi', $data);
	}

	// Delete
	public function delete($data)
	{
		$this->db->where('id_kategori_redaksi', $data['id_kategori_redaksi']);
		$this->db->delete('kategori_redaksi', $data);
	}

}

/* End of file Kategori_redaksi_model.php */
