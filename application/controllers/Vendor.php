<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('model_program');
        $this->load->model('model_products');
        if($this->session->userdata('status') != "vendor"){
			redirect(site_url("logvend"));
		}
$this->load->model('model_vendor');
    }

	public function index()
	{
		$pro['totalDonatur'] = $this->model_program->jumlahDonaturVendor();
		$pro['totalProgram'] = $this->model_program->jumlahProgramVendor();
		$pro['totalDonasi'] = $this->model_program->jumlahDonasiVendor();
		$this->load->view('vendor/include/header.php');
		$this->load->view('vendor/include/sidebar.php');
		$this->load->view('vendor/include/navbar.php');
		$this->load->view('vendor/dashboard', $pro);
		$this->load->view('vendor/include/footer.php');

	}

	public function accGalang($id = null)
	{
		$this->load->model('model_galang');
		  $product = $this->model_galang;
		
        $data["program"] = $product->getById2($id);
		$this->load->view('vendor/include/header');
		$this->load->view('vendor/include/sidebar');
		$this->load->view('vendor/include/navbar.php');
		$this->load->view('vendor/accGalang.php', $data);
		$this->load->view('vendor/include/footer');
	}

	
	public function product()
	{
		$this->load->model('model_products');
		$data['products'] = $this->model_products->justvend();
		$this->load->view('vendor/include/header.php');
		$this->load->view('vendor/include/sidebar.php');
		$this->load->view('vendor/include/navbar.php');
		$this->load->view('vendor/product', $data);
		$this->load->view('vendor/include/footer.php');
	}

	public function addProduct()
	{
		$this->load->view('vendor/include/header.php');
		$this->load->view('vendor/include/sidebar.php');
		$this->load->view('vendor/include/navbar.php');
		$this->load->view('vendor/addProduct.php');
		$this->load->view('vendor/include/footer.php');

}

	 public function editprogram($id = null)
    {
        if (!isset($id)) redirect('vendor');
       
        $product = $this->model_program;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();

        
        $this->load->view('vendor/include/header.php');
        $this->load->view('vendor/include/sidebar.php');
        $this->load->view('vendor/include/navbar.php');
        $this->load->view('vendor/editprogram.php', $data);
        $this->load->view('vendor/include/footer.php');
    }

	public function galangdana()
	{
		$this->load->model('model_galang');
		$data['program'] = $this->model_galang->accvendorprogram();
		$this->load->view('vendor/include/header.php');
		$this->load->view('vendor/include/sidebar.php');
		$this->load->view('vendor/include/navbar.php');
		$this->load->view('vendor/galangdana', $data);
		$this->load->view('vendor/include/footer.php');
	}

	public function detailprogramgalang($id = null)
	{
		$this->load->model('model_tambahgalang');
		$data['program'] = $this->model_tambahgalang->getById4($id);
		$this->load->view('vendor/include/header.php');
		$this->load->view('vendor/include/sidebar.php');
		$this->load->view('vendor/include/navbar.php');
		$this->load->view('vendor/detailprogrampenggalang', $data);
		$this->load->view('vendor/include/footer.php');
	}

	public function listgalangdana()
	{
		$this->load->model('model_galang');
		$data['program'] = $this->model_galang->accpenggalang();
		$this->load->view('vendor/include/header.php');
		$this->load->view('vendor/include/sidebar.php');
		$this->load->view('vendor/include/navbar.php');
		$this->load->view('vendor/listgalang', $data);
		$this->load->view('vendor/include/footer.php');
	}

	public function approvgalang()
	{
		$this->load->model('model_galang');
		$data['program'] = $this->model_galang->accvendor();
		$this->load->view('vendor/include/header.php');
		$this->load->view('vendor/include/sidebar.php');
		$this->load->view('vendor/include/navbar.php');
		$this->load->view('vendor/approvgalang', $data);
		$this->load->view('vendor/include/footer.php');
	}

	public function productorder()
	{
		$this->load->model('model_vendor');
		$data['order'] = $this->model_vendor->justvend();
		$this->load->view('vendor/include/header.php');
		$this->load->view('vendor/include/sidebar.php');
		$this->load->view('vendor/include/navbar.php');
		$this->load->view('vendor/productorder', $data);
		$this->load->view('vendor/include/footer.php');
	}

	public function donasi()
	{
		$pro['donasi'] = $this->model_program->join2();
		$this->load->view('vendor/include/header.php');
		$this->load->view('vendor/include/sidebar.php');
		$this->load->view('vendor/include/navbar.php');
		$this->load->view('vendor/donasi', $pro);
		$this->load->view('vendor/include/footer.php');
	}

	public function training()
	{
		$data['training'] = $this->model_program->training2();
		$this->load->view('vendor/include/header.php');
		$this->load->view('vendor/include/sidebar.php');
		$this->load->view('vendor/include/navbar.php');
		$this->load->view('vendor/training', $data);
		$this->load->view('vendor/include/footer.php');
	}
	public function program()
	{
		$this->load->model('model_program');
		$data['program'] = $this->model_program->justvend();
		$data['progra'] = $this->model_program->totaldonasiindex();
		$this->load->view('vendor/include/header.php');
		$this->load->view('vendor/include/sidebar.php');
		$this->load->view('vendor/include/navbar.php');
		$this->load->view('vendor/program',$data);
		$this->load->view('vendor/include/footer.php');
	}
	public function addProgram()
	{
		$this->load->model('model_vendor');
        $data['dd_bidang'] = $this->model_vendor->vendorr();
		$this->load->view('vendor/include/header.php');
		$this->load->view('vendor/include/sidebar.php');
		$this->load->view('vendor/include/navbar.php');
		$this->load->view('vendor/addProgram.php', $data);
		$this->load->view('vendor/include/footer.php');
	}

		public function addTraining()
	{
		$this->load->view('vendor/include/header.php');
		$this->load->view('vendor/include/sidebar.php');
		$this->load->view('vendor/include/navbar.php');
		$this->load->view('vendor/addTraining.php');
		$this->load->view('vendor/include/footer.php');

}

public function app()

    {  
    $id = $this->input->post('id');
    $status = $this->input->post('status');
    $id_vendor = $this->input->post('id_vendor');
 
    $data = array(
        'status' => $status,
        'id_vendor' =>$id_vendor
    );
 
    $where = array(
        'id' => $id
    );
 
    $this->model_program->update_data($where,$data,'galangdata');
    $this->session->set_flashdata('success', 'Penggalang berhasil di approv!');
    redirect('vendor/approvgalang');
    
}

public function appProgram()

    {  
    $id = $this->input->post('id');
    $status = $this->input->post('status');
 
    $data = array(
        'status' => $status,
    );
 
    $where = array(
        'id' => $id
    );
 
    $this->model_program->update_data($where,$data,'program');
    $this->session->set_flashdata('success', 'Program sudah live!');
   
    
}
public function deleteProgram($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->model_program->deleteProgram($id)) {
            redirect(site_url('vendor/program'));
        }
    }

    public function deleteTraining($id=null)
    {
    	$this->load->model('model_galang');
        if (!isset($id)) show_404();
        
        if ($this->model_galang->deleteTraining($id)) {
            redirect(site_url('vendor/training'));
        }
    }


	public function addProg()
    {
        $product = $this->model_program;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        redirect('vendor/addprogram');
    }

    public function add()
    {
        $product = $this->model_products;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        redirect('vendor/addproduct');
    }

    public function addTrain()
    {
    	$this->load->model('model_training');
        $product = $this->model_training;
        $validation = $this->form_validation;
        $validation->set_rules($product->aturan());

        if ($validation->run()) {
            $product->savetrain();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        redirect('vendor/addTraining');
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->model_products->delete($id)) {       
            redirect(site_url('vendor/product'));
        }
    }


}

/* End of file Vendor.php */
/* Location: ./application/controllers/Vendor.php */