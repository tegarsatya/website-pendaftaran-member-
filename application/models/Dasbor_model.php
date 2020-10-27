<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Total profil
	public function kegiatan()
	{
		$this->db->select('COUNT(*) AS total');
		$this->db->from('kegiatan');
		$query = $this->db->get();
		return $query->row();
	}

	// total pendaftaran member
	public function pendaftaran()
	{
		$this->db->select('COUNT(*) AS total');
		$this->db->from('pendaftaran');
		$query = $this->db->get();
		return $query->row();
	}

	// total redaksi
	public function redaksi()
	{
		$this->db->select('COUNT(*) AS total');
		$this->db->from('redaksi');
		$query = $this->db->get();
		return $query->row();
	}

	// total kontak
	public function kontak()
	{
		$this->db->select('COUNT(*) AS total');
		$this->db->from('kontak');
		$query = $this->db->get();
		return $query->row();
	}

	// total galeri
	public function galeri()
	{
		$this->db->select('COUNT(*) AS total');
		$this->db->from('galeri');
		$query = $this->db->get();
		return $query->row();
	}

	// total video
	public function video()
	{
		$this->db->select('COUNT(*) AS total');
		$this->db->from('video');
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file Dasbor_model.php */
