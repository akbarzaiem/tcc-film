<?php
 class Login extends CI_Controller
 {
     public function __construct()
     {
            parent::__construct();
            $this->load->library('session');
     }

     public function index()
     {
            $username=$this->input->post('username');
            $password=$this->input->post('password');

            if($username=='admin' && $password=='admin')
            {
                $this->session->set_userdata('username' , $username);

                redirect('admin');
            }

            else
            {
                $this->load->view('login/index');
            }
     }

     public function admin_page()
     {
            $this->load->view('login/admin_page');
     }

     public function logout()
     {

     }
 }

?>