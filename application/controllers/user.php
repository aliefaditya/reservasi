<?php 
    class User extends CI_Controller{
        function __construct(){
            parent::__construct();
        
            if($this->session->userdata('status') != "login"){
                redirect(base_url("login"));
            }
        }
        
        function index(){
            if($this->session->userdata('level')=='1'){
                $this->load->view('dashboard_admin');
            }
        }

        function user(){
            if($this->session->userdata('level')=='0'){
                $this->load->view('dashboard');
            }
        }
    }
?>