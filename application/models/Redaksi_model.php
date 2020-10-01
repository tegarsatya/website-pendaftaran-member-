<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Redaksi_model extends CI_Model
{

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//Listing
	public function listing()
	{
		$this->db->select('redaksi.*, kategori_redaksi.nama_redaksi, users.nama');
		$this->db->from('redaksi');
		// Join
		$this->db->join('kategori_redaksi', 'kategori_redaksi.id_kategori_redaksi = redaksi.id_kategori_redaksi', 'LEFT');
		$this->db->join('users', 'users.id_user = redaksi.id_user', 'LEFT');
		// End join
		$this->db->order_by('id_redaksi', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	//Read
	public function read($slug_redaksi)
	{
		$this->db->select('redaksi.*, kategori_redaksi.nama_redaksi, users.nama');
		$this->db->from('redaksi');
		// Join
		$this->db->join('kategori_redaksi', 'kategori_redaksi.id_kategori_redaksi = redaksi.id_kategori_redaksi', 'LEFT');
		$this->db->join('users', 'users.id_user = redaksi.id_user', 'LEFT');
		// End join
		$this->db->where('slug_redaksi', $slug_redaksi);
		$this->db->order_by('id_redaksi', 'DESC');
		$query = $this->db->get();
		return $query->row();
	}

	//Kategori
	public function kategori($id_kategori_redaksi)
	{
		$this->db->select('redaksi.*, kategori_redaksi.nama_redaksi, users.nama');
		$this->db->from('redaksi');
		// Join
		$this->db->join('kategori_redaksi', 'kategori_redaksi.id_kategori_redaksi = redaksi.id_kategori_redaksi', 'LEFT');
		$this->db->join('users', 'users.id_user = redaksi.id_user', 'LEFT');
		// End join
		$this->db->where('redaksi.id_kategori_redaksi', $id_kategori_redaksi);
		$this->db->order_by('id_redaksi', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	//Home
	public function home()
	{
		$this->db->join('kategori_redaksi', 'kategori_redaksi.id_kategori_redaksi = redaksi.id_kategori_redaksi', 'LEFT');
		$this->db->join('users', 'users.id_user = redaksi.id_user', 'LEFT');
		// End join
		$this->db->where('redaksi.status_redaksi', 'Publish');
		$this->db->order_by('id_redaksi', 'DESC');
		$this->db->limit(6);
		$query = $this->db->get();
		return $query->result();
	}

	// detail perberita
	public function detail($id_redaksi)
	{
		$query = $this->db->get_where('redaksi', array('id_redaksi'  => $id_redaksi));
		return $query->row();
	}

	// Tambah
	public function tambah($data)
	{
		$this->db->insert('redaksi', $data);
	}

	// Edit 
	public function edit($data)
	{
		$this->db->where('id_redaksi', $data['id_redaksi']);
		$this->db->update('redaksi', $data);
	}

	// Delete
	public function delete($data)
	{
		$this->db->where('id_redaksi', $data['id_redaksi']);
		$this->db->delete('redaksi', $data);
	}
}
