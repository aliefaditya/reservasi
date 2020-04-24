<?php 
    class Registrasi extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('m_registrasi');
            $this->load->helper('url');
            if($this->session->userdata('status') != "login"){
                redirect(base_url("login"));
            }
        }
        
        function index(){
            $data['antrean'] = $this->m_registrasi->tampil_data()->result();
            $data['rumah_sakit'] = $this->m_registrasi->get_rs()->result();
            $data['poli'] = $this->m_registrasi->get_poli()->result();
            $this->load->view('registrasi',$data);
            //$this->load->view('registrasi');
        }

        function get_sub_rs(){
            $id_rs = $this->input->post('id_rs',TRUE);
            $data = $this->m_registrasi->get_sub_rs($id_rs)->result();
            echo json_encode($data);
        }

        function get_sub_poli(){
            $id_rs = $this->input->post('id_poli',TRUE);
            $data = $this->m_registrasi->get_sub_poli($id_poli)->result();
            echo json_encode($data);
        }

        //save product to database
        function save_antrean(){
            $nama_lengkap = $this->input->post('nama_lengkap',TRUE);
            $nama_rs = $this->input->post('rumah_sakit',TRUE);
            $poli = $this->input->post('poli',TRUE);
            $no_antrean = $this->input->post('no_antrean',TRUE);
            $this->m_registrasi->save_antrean($nama_lengkap,$nama_rs,$poli,$no_antrean);
            $this->session->set_flashdata('msg','<div class="alert alert-success">Product Saved</div>');
            redirect('registrasi/index');
        }

        function aksi_registrasi(){
            //nama_lengkap, rumah_sakit, poli,
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
            echo $data['name'];
            $this->m_register->input_data($data,'user');
            redirect(base_url("login"));
        }
    }
?>