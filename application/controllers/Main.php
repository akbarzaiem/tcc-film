<?php 
 defined('BASEPATH') OR exit('no direct script access allowed'); 

 class Main extends CI_Controller{
 public function __construct(){
 parent::__construct(); 

 $this->load->model('m_provinsi'); 
 $this->load->model('m_kota'); 
 }

 /**
 * tampilan awal combobox
 */
 public function index(){ 
 $data['provinsi'] = $this->m_provinsi->get(); 
 
 $this->load->view('v_combobox', $data); 
 }

 /**
 * AJAX ambil data kota 
 */
 public function kota(){
 $kota = $this->m_kota->by_provinsi(
 $this->input->post('id_provinsi')
 ); 
 
 echo '<option> Pilih kota </option>';
 foreach ($kota as $r){
 echo '<option>'.$r->nama.'</option>'; 
 }
 }
 }