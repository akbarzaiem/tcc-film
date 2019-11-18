<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('form_validation');
        $this->load->helper(array('url'));	 
    }

    public function index()
    {
        $data["products"] = $this->product_model->getAll();
        $this->load->view("admin/product/list", $data);
    }

       public function awal()
    {
        $data["products"] = $this->product_model->getAll();
        $this->load->view("admin/product/list_awal", $data);
    }

    public function add()
    {
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/product/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/products');
       
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();
        
        $this->load->view("admin/product/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->product_model->delete($id)) {
            redirect(site_url('admin/products'));
        }
    }

    public function detail($id = null)
    {
        if (!isset($id)) redirect('admin/products');
       
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();
        
        $this->load->view("admin/product/detail_form", $data);
    }

    public function detail_awal($id = null)
    {
        if (!isset($id)) redirect('admin/products');
       
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();
        
        $this->load->view("admin/product/detail_awal", $data);
    }

/*    public function lakukan_download($id = null){	
        $this->load->helper('download');
        $this->load->database();
        $this->db->select('image');
        $this->db->where('id',$id);
        $data = $this->db->get('products')->result()[0]->image;
        
        
        $format = array('.jpg','.png','.pdf','.docx','.xlsx','.xls');
        foreach($format as $f){
             force_download(FCPATH.'/upload/product/'.$data.$f, null);
        }
        force_download(FCPATH.'/upload/product/'.$data, null); 
   
    }*/



   public function download()
     {
        $this->load->library('ftp');
        $config['hostname'] = '192.168.140.128';
        $config['username'] = 'root';
        $config['password'] = '123160150';
        $config['debug']        = TRUE;
        
        $image= 'Joker';
        $image= 'Balkan Line';
        
        $this->ftp->connect($config);
        $this->ftp->download('/mnt/akbarzaiem/'.$image.'.mp4', 'D:/'.$image.'.mp4', 'auto');
        $this->load->view('admin/product/hasil');

        // $this->ftp->close();
        // $list = $this->ftp->list_files('/mnt/volume1/');
        // print_r($list);

     }

      
}
    


