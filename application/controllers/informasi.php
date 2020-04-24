<?php 
    class Informasi extends CI_Controller{
        
        function __construct(){
            parent::__construct();		
            $this->load->model('m_informasi');
            $this->load->helper('url');
        }
        
        function index(){
            $data['antrean'] = $this->m_informasi->tampil_data()->result();
            $data['rumah_sakit'] = $this->m_informasi->tampil_data_rs()->result();
            $data['poli'] = $this->m_informasi->tampil_data_poli()->result();
            $this->load->view('informasi',$data);
        }
    }
?>