<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_program');
		$this->load->model('model_products');
	}

	public function index()
	{
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/kategori_order.php');
		$this->load->view('user/_partials/footer');
	}
	public function belanja()
	{
		if($this->session->userdata('status') != "user"){
			redirect(site_url("Login"));
		}
		$this->load->model('model_products');
		$data['product'] = $this->model_products->allorder();
		$data['product1'] = $this->model_products->kelaskosong();
		$data['produc'] = $this->model_products->sudahkelas();
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/my_order.php', $data);
		$this->load->view('user/_partials/footer');
	}

	public function donasi()
	{
		if($this->session->userdata('status') != "user"){
			redirect(site_url("Login"));
		}
		$this->load->model('model_program');
		$data['program'] = $this->model_program->alldonasi();
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/track_donasi.php', $data);
		$this->load->view('user/_partials/footer');
	}

	public function donasidetail($id = null)
	{
		$product = $this->model_products;
        $data["product"] = $product->getById2($id);
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/detaildonasi.php', $data);
		$this->load->view('user/_partials/footer');
	}

	public function belanjadetail($id = null)
	{
		$product = $this->model_products;
        $data["product"] = $product->getById2($id);
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/detailbelanja.php', $data);
		$this->load->view('user/_partials/footer');
	}

	public function Bayar()
	{


	$id = $this->input->post('id');
	$qty = $this->input->post('qty');
	$price = $this->input->post('price');
	$name = $this->input->post('name');
		$data = array(
						   'id'      => $id,
						   'qty'     => $qty,
						   'price'   => $price,
						   'name'    => $name
						);

			$this->cart->insert($data);

	}

}

/* End of file Order.php */
/* Location: ./application/controllers/Order.php */