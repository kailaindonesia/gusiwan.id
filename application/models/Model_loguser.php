<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_loguser extends CI_Model {

function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	
 public function all(){
        $data = $this->session->userdata('nama');
  		$this->db->select('*');
 		$this->db->where('username', $data);//
  		$this->db->from('user');
  		$query = $this->db->get();
  		return $query->result();
}


 public function login(){
        $data = $this->session->userdata('nama');
  		$this->db->select('*');
 		$this->db->where('username', $data);//
  		$this->db->from('user');
  		$query = $this->db->get();
  		return $query->result();
}

private $_table = "news";

    public $id;
    public $vendor;
    public $judul;
    public $news;
    public $image = "default.jpg";
    public $category;
    public $status;


    public function rules()
    {
        return [
            ['field' => 'vendor',
            'label' => 'vendor',
            'rules' => 'required'],

            ['field' => 'judul',
            'label' => 'judul',
            'rules' => 'required'],

            ['field' => 'news',
            'label' => 'news',
            'rules' => 'required'],

            ['field' => 'category',
            'label' => 'category',
            'rules' => 'required'],

            ['field' => 'status',
            'label' => 'status',
            'rules' => 'numeric']
        ];
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->vendor = $post["vendor"];
        $this->judul = $post["judul"];
        $this->image = $this->_uploadImage();
        $this->news = $post["news"];
        $this->category = $post["category"];
        $this->status = $post["status"];
        
        $this->db->insert($this->_table, $this);
    }

     public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->vendor = $post["vendor"];
        $this->judul = $post["judul"];
        $this->image = $this->_uploadImage();
        $this->news = $post["news"];
        $this->category = $post["category"];
        $this->status = $post["status"];
        
          if (!empty($_FILES["image"]["name"])) {
        $this->image = $this->_uploadImage();
  } else {
        $this->image = $post["old_image"];
}   

        
        
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function deleteNews($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }

    private function _uploadImage()
{
    $config['upload_path']          = './img/news/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
    $config['file_name']            = $this->id;
    $config['overwrite']            = true;
   // $config['max_size']             = 2048; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}

}



/* End of file modelName.php */
/* Location: ./application/models/modelName.php */