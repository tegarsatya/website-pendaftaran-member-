<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing data
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('kontak');
		$this->db->order_by('id_kontak');
		$query = $this->db->get();
		return $query->result();
	}

	// Delete
	public function delete($data)
	{
		$this->db->where('id_kontak', $data['id_kontak']);
		$this->db->delete('kontak', $data);
	}

	// insert data
	function insert($data)
	{
		$this->db->insert($this->table, $data);
	}

}

/* End of file Kontak_model.php */
