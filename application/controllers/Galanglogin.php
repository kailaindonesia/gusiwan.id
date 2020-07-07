<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galanglogin extends CI_Controller {

	public function index()
	{
		$this->load->view('galang/login');
	}

	function aksi_login(){
		$this->load->model('model_loguser');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(

			'username' => $username,
			'password' => $password
			);
		$cek = $this->model_loguser->cek_login("galangdata",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "galanger"
				);

			$this->session->set_userdata($data_session);

			redirect(site_url('galangdana'));

		}else{
			
		   redirect('galanglogin','refresh');
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(site_url('galanglogin'));
	}

}

/* End of file Galanglogin.php */
/* Location: ./application/controllers/Galanglogin.php */