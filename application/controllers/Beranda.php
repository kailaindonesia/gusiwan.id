<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_program');
		$this->load->model('model_products');
	}

	public function index()
	{
		
		$data['news'] = $this->model_program->news();
		$data['banner'] = $this->model_program->carousel();
		
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$data["program"] = $this->model_program->totaldonasiindex();
		
$data['products'] = $this->model_program->join1234();
$data['tani'] = $this->model_program->listtani();
$data['ternak'] = $this->model_program->listternak();
$data['dagang'] = $this->model_program->listdagang();
$data['uang'] = $this->model_program->listuang();

		$this->load->view('user/index.php', $data);
		$this->load->view('user/_partials/footer');
	}

	 function cek_status_username(){
        # ambil username dari form
        $username = $this->input->post('username');
         
                # select ke model member username yang diinput user
        $hasil_username = $this->model_program->cek_username($username);
         
                # pengecekan value $hasil_username
        if(count($hasil_username)!=0){
          # kalu value $hasil_username tidak 0
                  # echo 1 untuk pertanda username sudah ada pada db    
                        echo "1"; 
        }else{
                  # kalu value $hasil_username = 0
                  # echo 2 untuk pertanda username belum ada pada db
            echo "2";
        }
         
    }

	public function galangdana()
	{
        
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/galang_dana.php');
		$this->load->view('user/_partials/footer');
	}

	 function tambah_aksi(){
        $id = uniqid();
        $category = $this->input->post('category');
        $jenis_usaha = $this->input->post('jenis_usaha');
        $name = $this->input->post('name');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $no_telp = $this->input->post('no_telp');
        $password = $this->input->post('password');
 
        $data = array(
            'id' => $id,
            'category' => $category,
            'jenis_usaha' => $jenis_usaha,
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'no_telp' => $no_telp,
            'password' => $password
            );
        $this->model_program->input_galangan($data,'galangdata');

        $encrypted_id = md5($id);
 
//enkripsi id
$encrypted_id = md5($id);
$this->load->library('email');
$config = array();
$config['charset'] = 'utf-8';
$config['useragent'] = 'Codeigniter';
$config['protocol']= "smtp";
$config['mailtype']= "html";
$config['smtp_host']= "ssl://mail.kaila.tech";//pengaturan smtp
$config['smtp_port']= "465";
$config['smtp_timeout']= "400";
$config['smtp_user']= "admin@kaila.tech"; // isi dengan email kamu
$config['smtp_pass']= "bismilah01"; // isi dengan password kamu
$config['crlf']="\r\n";
$config['newline']="\r\n";
$config['wordwrap'] = TRUE;
 
//memanggil library email dan set konfigurasi untuk pengiriman email
$this->email->initialize($config);
 
//konfigurasi pengiriman
$this->email->from($config['smtp_user']);
$this->email->to($email);
$this->email->subject("Verifikasi Akun");
$this->email->message(
"Hai $name, Selamat datang di Gusiwan.ID silahkan verifikasi akun anda dengan cara klik link dibawah <br><br>".
site_url("beranda/verification/$encrypted_id")
);
 
//notifikasi registrasi berhasil
 
			if($this->email->send())
			{
			$this->load->view('user/_partials/header');
			$this->load->view('user/_partials/sidebar');
			$this->load->view('user/verifikasi.php');
			$this->load->view('user/_partials/footer');
				}
			else
				{
			echo $this->email->print_debugger();
}
}

public function verification($key)
{
$this->load->helper('url');
$this->load->model('model_program');
$this->model_program->changeActiveState($key);
echo '<span class="hljs-keyword">echo</span> <span class="hljs-string">"Selamat kamu telah memverifikasi akun kamu"</span>'; 

 
}
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */