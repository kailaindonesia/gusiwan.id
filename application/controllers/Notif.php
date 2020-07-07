<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notif extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('status') != "user"){
			redirect(site_url("Login"));
		}
		$this->load->model('model_program');
		$data['program'] = $this->model_program->notif();
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/notif.php', $data);
		$this->load->view('user/_partials/footer');
	}

	

}

/* End of file Notif.php */
/* Location: ./application/controllers/Notif.php */