<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galangdana extends CI_Controller {
    public function __construct()
    {
         
        parent::__construct();
      
        $this->load->model('model_training');
        $this->load->model('model_tambahgalang');
        $this->load->model('model_program');
        $this->load->model('model_galang');
    }


    public function campaign()
    {
        $this->load->model('model_program');
        $data['program'] = $this->model_program->khususgalang1();

        $this->load->view('galang/include/header.php');
        $this->load->view('galang/include/sidebar.php');
        $this->load->view('galang/include/navbar.php');
        $this->load->view('galang/program.php', $data);
        $this->load->view('galang/include/footer.php');
    }

    public function webminar()
    {
    

        $this->load->view('galang/include/header.php');
       
        $this->load->view('galang/webminar.php');
        $this->load->view('galang/include/footer.php');
    }

    public function webrtc()
    {
    

        $this->load->view('galang/include/header.php');
       
        $this->load->view('galang/webrtc.php');
        $this->load->view('galang/include/footer.php');
    }

    public function anggota()
    {
        $data['profil'] = $this->model_program->anggotagalang1();
        $data['anggota'] = $this->model_program->anggotagalang();
        $this->load->view('galang/include/header.php');
        $this->load->view('galang/include/sidebar.php');
        $this->load->view('galang/include/navbar.php');
        $this->load->view('galang/anggota.php', $data);
        $this->load->view('galang/include/footer.php');
    }


    public function addProgram()
    {
        

        $data['dd_bidang'] = $this->model_program->get1();
        $this->load->view('galang/include/header.php');
        $this->load->view('galang/include/sidebar.php');
        $this->load->view('galang/include/navbar.php');
        $this->load->view('galang/addProgram.php',$data);
        $this->load->view('galang/include/footer.php');
    }

    public function detailAnggota($id)
    {
        

        $product = $this->model_tambahgalang;
        
        $data["program"] = $product->getById($id);
        $this->load->view('galang/include/header.php');
        $this->load->view('galang/include/sidebar.php');
        $this->load->view('galang/include/navbar.php');
        $this->load->view('galang/detailanggota.php',$data);
        $this->load->view('galang/include/footer.php');
    }

    public function onlinetest($id_train)
    {
        

        $product = $this->model_training;
        
        $data["program"] = $product->getById($id_train);
        $this->load->view('galang/include/header.php');
        $this->load->view('galang/include/sidebar.php');
        $this->load->view('galang/include/navbar.php');
        $this->load->view('galang/onlinetest.php',$data);
        $this->load->view('galang/include/footer.php');
    }


    public function addAnggota()
    {
        

        $data['dd_bidang'] = $this->model_program->get1();
        $this->load->view('galang/include/header.php');
        $this->load->view('galang/include/sidebar.php');
        $this->load->view('galang/include/navbar.php');
        $this->load->view('galang/addAnggota.php',$data);
        $this->load->view('galang/include/footer.php');
    }

   

    public function addProg()
    {
        $product = $this->model_galang;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save1();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        redirect('galangdana/addProgram');
    }

    public function index()
    {

        $pro['totalDonatur'] = $this->model_program->jumlahDonaturVendor();
        $pro['totalProgram'] = $this->model_program->jumlahProgramVendor();
        $pro['totalDonasi'] = $this->model_program->jumlahDonasiVendor();
        $pro['program'] = $this->model_program->get1();
        $this->load->view('galang/include/header.php');
        $this->load->view('galang/include/sidebar.php');
        $this->load->view('galang/include/navbar.php');
        $this->load->view('galang/dashboard', $pro);
        $this->load->view('galang/include/footer.php');
    }

    public function training()
    {
        $data['training'] = $this->model_program->training();
        $this->load->view('galang/include/header.php');
        $this->load->view('galang/include/sidebar.php');
        $this->load->view('galang/include/navbar.php');
        $this->load->view('galang/training', $data);
        $this->load->view('galang/include/footer.php');
    }

    public function addAng()
    {
        $this->load->model('model_tambahgalang');
        $product = $this->model_tambahgalang;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        

        redirect('galangdana/addAnggota');
    }
    public function tes()
    {
        $product = $this->model_tambahgalang;
         $product->savektp();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
    }

    public function tambahKtp($id = null)
    {
        if (!isset($id)) redirect('galangdana/anggota');
       
        $product = $this->model_tambahgalang;

        $data["vendor"] = $product->getById($id);
        if (!$data["vendor"]) show_404();

        
         $this->load->view('galang/include/header.php');
        $this->load->view('galang/include/sidebar.php');
        $this->load->view('galang/include/navbar.php');
        $this->load->view('galang/tambahktp.php',$data);
        $this->load->view('galang/include/footer.php');
    }

    public function deleteAnggota($id=null)
    {
        $this->load->model('model_galang');
        if (!isset($id)) show_404();

        if ($this->model_galang->deleteAnggota($id)) {
            redirect(site_url('galangdana/anggota'));
        }
    }

     public function editAnggota($id = null)
    {
        if (!isset($id)) redirect('galang/anggota');
       
        $product = $this->model_tambahgalang;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["vendor"] = $product->getById($id);
        if (!$data["vendor"]) show_404();

        
        $this->load->view('galang/include/header.php');
        $this->load->view('galang/include/sidebar.php');
        $this->load->view('galang/include/navbar.php');
        $this->load->view('galang/editAnggota.php', $data);
        $this->load->view('galang/include/footer.php');
    }


}

/* End of file Galangdana.php */
/* Location: ./application/controllers/Galangdana.php */