<?php 
    class Admin extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('m_admin');
            $this->load->helper('url');
        }
        function index(){
            $data['user'] = $this->m_admin->tampil_data_user()->result();
            $this->load->view('dashboard_admin',$data);
        }
        function antrean(){
            $data['antrean'] = $this->m_admin->tampil_data_antrean()->result();
            $this->load->view('antrean',$data);
        }
        function rumah_sakit(){
            $data['rumah_sakit'] = $this->m_admin->tampil_data_rs()->result();
            $this->load->view('rumah_sakit',$data);
        }
        function poli(){
            $data['poli'] = $this->m_admin->tampil_data_poli()->result();
            $this->load->view('poli',$data);
        }

        function aksi_add_user(){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $nama_lengkap = $this->input->post('nama_lengkap');
            $umur = $this->input->post('umur');
    
            $data = array(
                'username' => $username,
                'password' => $password,
                'nama_lengkap' => $nama_lengkap,
                'umur' => $umur
                );
            $this->m_admin->input_data($data,'user');
            redirect(base_url("admin"));
        }
    }
?>