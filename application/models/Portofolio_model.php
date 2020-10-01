<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolio_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing data
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('portofolio');
		$this->db->order_by('id_portofolio');
		$query = $this->db->get();
		return $query->result();
	}

	// Read data
	public function read($id_portofolio)
	{
		$this->db->select('*');
		$this->db->from('portofolio');
		$this->db->order_by('id_portofolio');
		$query = $this->db->get();
		return $query->row();
	}

	// Tambah
	public function tambah($data)
	{
		$this->db->insert('portofolio', $data);
	}

	// Edit
	public function edit($data)
	{
		$this->db->where('id_portofolio', $data['id_portofolio']);
		$this->db->update('portofolio', $data);
	}

	// detail perkategori_berita
	public function detail($id_portofolio)
	{
		$query = $this->db->get_where('portofolio', array('id_portofolio'  => $id_portofolio));
		return $query->row();
	}

	// Delete
	public function delete($data)
	{
		$this->db->where('id_portofolio', $data['id_portofolio']);
		$this->db->delete('portofolio', $data);
	}

}

/* End of file Portofolio_model.php */
