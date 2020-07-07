<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logvendor extends CI_Controller {

	public function index()
	{
		$this->load->model('model_vendor');
		$data['user'] = $this->model_vendor->tampil_data();
		$this->load->view('vendor/login', $data);

	}

	function aksi_login(){
		$this->load->model('model_vendor');
		$company = $this->input->post('company');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->model_vendor->cek_login("vendor",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'company' => $company,
				'nama' => $username,
				'status' => "vendor"
				);

			$this->session->set_userdata($data_session);

			redirect(site_url('vendor'));

		}else{
		   redirect(site_url('Logvend'));
		}
	}

function logout(){
		$this->session->sess_destroy();
		redirect(site_url('logvend'));
	}
}

/* End of file Logvend.php */
/* Location: ./application/controllers/Logvend.php */