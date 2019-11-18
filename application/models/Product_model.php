<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "products";
    public $product_id;
    public $genre;
    public $namafilm;
    public $nama;
    public $price;
    public $gol;
    //public $jabatan;
    //public $instansi;
    //public $alamat;
     //public $nip;
    //public $hp;
    //public $bank;
    public $image = "default.jpg";
  

 

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Price',
            'rules' => 'required'],

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["product_id" => $id])->row();
    }

    public function save()
    {
      
  
        $post = $this->input->post();
        $this->product_id = uniqid();
        $this->genre = $post["genre"];
        $this->namafilm = $post["namafilm"];
        $this->nama = $post["nama"];
        //$this->nip = $post["nip"];
        //$this->tempat = $post["tempat"];
       $this->price = $post["price"];
        $this->gol = $post["gol"];
        //$this->jabatan = $post["jabatan"];
        //$this->instansi = $post["instansi"];
        //$this->alamat = $post["alamat"];
       //$this->hp = $post["hp"];
        //$this->bank = $post["bank"];
        //$this->rekening = $post["rekening"];
        $this->image = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
        
    }

    public function update()
    {
        $post = $this->input->post();
        $this->product_id = $post["id"];
        $this->genre = $post["genre"];
        $this->namafilm = $post["namafilm"];
        $this->nama = $post["nama"];
        //$this->nip = $post["nip"];
        $this->tempat = $post["tempat"];
        $this->price = $post["price"];
        $this->gol = $post["gol"];
        //$this->jabatan = $post["jabatan"];
        //$this->instansi = $post["instansi"];
        //$this->alamat = $post["alamat"];
        //$this->hp = $post["hp"];
        //$this->bank = $post["bank"];
        //$this->rekening = $post["rekening"];

        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }
        
        $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    }

    

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("product_id" => $id));
    }

    private function _uploadImage()
{
    $config['upload_path']          = 'upload/product';
    //$config['upload_path']          = 'Z:/';
    $config['allowed_types']        = 'doc|docx|pdf|xlsx|xls|jpg|png|mp4|jpeg';
    $config['file_name']            = $this->namafilm;
    $config['overwrite']			= true;
    $config['max_size']             = '0'; 
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

        
    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    }
 
    return "default.jpg";
}


private function _deleteImage($id)
{
    $product = $this->getById($id);
    if ($product->image != "default.jpg") {
	    $filename = explode(".", $product->image)[0];
		return array_map('unlink', glob(FCPATH."upload/product/$filename.*"));
    }
}







}
