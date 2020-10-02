<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing data
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('kegiatan');
		$this->db->order_by('id_kegiatan');
		$query = $this->db->get();
		return $query->result();
	}

	// Read data
	public function read($id_kegiatan)
	{
		$this->db->select('*');
		$this->db->from('kegiatan');
		$this->db->where('id_kegiatan', $id_kegiatan);
		$this->db->order_by('id_kegiatan', 'DESC');
		$query = $this->db->get();
		return $query->row();
	}

	// Tambah
	public function tambah($data)
	{
		$this->db->insert('kegiatan', $data);
	}

	// Edit
	public function edit($data)
	{
		$this->db->where('id_kegiatan', $data['id_kegiatan']);
		$this->db->update('kegiatan', $data);
	}

	// detail perkategori_berita
	public function detail($id_kegiatan)
	{
		$query = $this->db->get_where('kegiatan', array('id_kegiatan'  => $id_kegiatan));
		return $query->row();
	}

	// Delete
	public function delete($data)
	{
		$this->db->where('id_kegiatan', $data['id_kegiatan']);
		$this->db->delete('kegiatan', $data);
	}
	

}

/* End of file Kegiatan_model.php */
