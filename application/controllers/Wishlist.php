<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist extends CI_Controller {

	public function index()
	{
		$this->load->view('user/_partials/header');
	
		$this->load->view('user/_partials/email-template.php');
	
	}

}

/* End of file Wishlist.php */
/* Location: ./application/controllers/Wishlist.php */