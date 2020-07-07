<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracking extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_program');
		$this->load->model('model_products');
	}

	
	

}

/* End of file Tracking.php */
/* Location: ./application/controllers/Tracking.php */