<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// get all
	function get_all()
	{
		$this->db->order_by($this->id, $this->order);
		return $this->db->get($this->table)->result();
	}

	// Listing data
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('pendaftaran');
		$this->db->order_by('id_pendaftaran');
		$query = $this->db->get();
		return $query->result();
	}

	// Delete
	public function delete($data)
	{
		$this->db->where('id_pendaftaran', $data['id_pendaftaran']);
		$this->db->delete('pendaftaran', $data);
	}

	// Tambah
	public function insert($data)
	{
		$this->db->insert('pendaftaran', $data);
	}


}

/* End of file Pendaftaran_model.php */
