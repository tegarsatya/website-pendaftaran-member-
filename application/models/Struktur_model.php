<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing data
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('struktur');
		$this->db->order_by('id_struktur');
		$query = $this->db->get();
		return $query->result();
	}

	// // Read data
	// public function read($id_struktur)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('profil');
	// 	$this->db->order_by('id_profil');
	// 	$query = $this->db->get();
	// 	return $query->row();
	// }

	// Tambah
	public function tambah($data)
	{
		$this->db->insert('struktur', $data);
	}

	// Edit
	public function edit($data)
	{
		$this->db->where('id_struktur', $data['id_struktur']);
		$this->db->update('struktur', $data);
	}

	// detail perkategori_berita
	public function detail($id_struktur)
	{
		$query = $this->db->get_where('struktur', array('id_struktur'  => $id_struktur));
		return $query->row();
	}

	// Delete
	public function delete($data)
	{
		$this->db->where('id_struktur', $data['id_struktur']);
		$this->db->delete('struktur', $data);
	}
	

}

/* End of file Struktur_model.php */
