<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_program');
	}

	public function index()
	{
		$data["program"] = $this->model_program->totaldonasiindex2();
		
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/kategori_donasi.php', $data);
		$this->load->view('user/_partials/footer');
	}

	public function detail($id = null)
	{
		  $product = $this->model_program;
		
        $data["program"] = $product->getById($id);
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/d_detail.php', $data);
		$this->load->view('user/_partials/footer');
	}

	public function tracking($id = null)
	{
		$product = $this->model_program;
        $data["program"] = $product->getById($id);
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/tech_tracking', $data);
		$this->load->view('user/_partials/footer');
	}

	public function berdonasi($id = null)
	{

         if($this->session->userdata('status') != "user"){
			redirect(site_url("login"));
		}
		$product = $this->model_program;
        $data["program"] = $product->getById($id);

		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/berdonasi', $data);
		$this->load->view('user/_partials/footer');
	}
	public function donasikan($id=null)
	{
		$product = $this->model_program;
        $data["program"] = $product->getById($id);
$where = array(
						'id' => $id
					);

		$data3 = array(
					   'id'=> uniqid(),
					   'id_program'		=> $this->input->post('id_program'),
					   'username'      => $this->session->userdata('nama'),
					   'donatur'	 => $this->input->post('donatur'),
					   'email'   => $this->input->post('email'),
					   'donasi'    => $this->input->post('donasi'),
					   'niat' 		=> $this->input->post('niat')
					);

		$data2 = array('donasikumpul' => $this->input->post('donasi') );

		

		
 		$this->db->insert('donasi', $data3);
 		
	}

	 function donate(){
	 	
		$id2 = uniqid();
		$sesi = $this->session->userdata('nama');
        $id = $this->input->post('id_program');
        $donatur = $this->input->post('donatur');
        $donasi = $this->input->post('donasi');

        $niat = $this->input->post('niat');
 
        $data = array(
        	'id' => $id2,
            'id_program' => $id,
            'username' => $this->session->userdata('nama'),
            'donatur' => $donatur,
            'donasi' => $donasi,
            'niat' => $niat
            
            );
        $this->model_program->input_galangan($data,'donasi');
        redirect('order/donasi','refresh');
    }
}

/* End of file Donasi.php */
/* Location: ./application/controllers/Donasi.php */