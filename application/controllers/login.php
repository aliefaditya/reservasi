<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('login');
	}
	/*
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array( 
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("user",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

            //create a session if successful
			$this->session->set_userdata($data_session);

            //redirect to user's controller
			redirect(base_url("user"));

		}else{
			redirect(base_url("login"));
		}
	}
	
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array( 
			'username' => $username,
			'password' => $password
			);
		
		
		$cek = $this->m_login->cek_login("user",$where)->num_rows();

		if($cek > 0){
			$level = $cek['level'];
			$data_session = array(
				'nama' => $username,
				'status' => "login"		
			);
			
			//create a session if successful
			$this->session->set_userdata($data_session);
			if($cek['level']=='1'){
				//admin
				$this->session->set_userdata('akses','1');
			}
			else{
				//redirect to user's controller
				$this->session->set_userdata('akses','0');
			}
			redirect(base_url("user"));
		}
		else{
			redirect(base_url("login"));
		}
	}
	*/

	function auth(){
		$username    = $this->input->post('username');
		$password = $this->input->post('password');
		$validate = $this->m_login->validate($username,$password);
		if($validate->num_rows() > 0){
			$data  = $validate->row_array();
			$username  = $data['username'];
			$level = $data['level'];
			$sesdata = array(
				'nama'  => $username,
				'level'     => $level,
				'status' => "login"
			);
			$this->session->set_userdata($sesdata);
			// access login for admin
			if($level == '1'){
				redirect('user');
	 
			// access login for staff
			}elseif($level == '0'){
				redirect('user/user');
	 		}
		}else{
			echo $this->session->set_flashdata('msg','Username or Password is Wrong');
			redirect('login');
		}
	}
    
    function register(){
        $this->load->view('register');
    }

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}