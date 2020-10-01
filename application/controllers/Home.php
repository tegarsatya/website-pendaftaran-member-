<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	
	}

	public function index ()
	{
		$data = array(

			'title'					=> 'Halaman Home',
			'isi'					=> 'home/list'

		);
		$this->load->view('layout/wrapper', $data, FALSE);
	}
}

/* End of file Home.php */

