<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			if($this->session->userdata('status') != "user"){
			redirect(site_url("Login"));
		}
		}

	public function index()
	{
		$this->load->model('model_loguser');
		$data['user'] = $this->model_loguser->all();
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/account.php', $data);
		$this->load->view('user/_partials/footer');
	}

	public function profile()
	{
		$this->load->model('model_loguser');
		$data['user'] = $this->model_loguser->all();
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/edit_profile.php', $data);
		$this->load->view('user/_partials/footer');
	}

	public function update_profile()
	{
		$this->load->model('model_loguser');

		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$no_telp = $this->input->post('no_telp');

		$data = array(
			'nama' => $nama,
			'username' => $username,
			'email' => $email,
			'no_telp' => $no_telp
		);

		$where = array(
			'id' => $id
		);
		$this->model_loguser->update_user($where,$data);
		redirect(site_url('account'));
	}

}

/* End of file Account.php */
/* Location: ./application/controllers/Account.php */