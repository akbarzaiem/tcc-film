<?php
class Grafik extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('admin/product/m_grafik');
    }
    function index(){
        $x['data']=$this->m_grafik->get_data_stok();
        $this->load->view('admin/product/v_grafik',$x);
    }
}