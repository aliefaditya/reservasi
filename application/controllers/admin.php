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
            $data['rumah_sakit'] = $this->m_admin->tampil_data_rs()->result();
            $data['antrean'] = $this->m_admin->tampil_data_antrean()->result();
            $data['poli'] = $this->m_admin->tampil_data_poli()->result();
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

        function aksi_add_rs(){
            $nama_rs = $this->input->post('nama_rs');
            $alamat = $this->input->post('alamat');
            $kota = $this->input->post('kota');
            $jam_operasional = $this->input->post('jam_operasional');
    
            $data = array(
                'nama_rs' => $nama_rs,
                'alamat' => $alamat,
                'kota' => $kota,
                'jam_operasional' => $jam_operasional
                );
            $this->m_admin->input_data($data,'rumah_sakit');
            redirect(base_url("admin/rumah_sakit"));
        }

        function aksi_add_poli(){
            $nama_poli = $this->input->post('nama_poli');
            $nama_dokter = $this->input->post('nama_dokter');
            $ruangan = $this->input->post('ruangan');
            $jam_operasional = $this->input->post('jam_operasional');
    
            $data = array(
                'nama_poli' => $nama_poli,
                'nama_dokter' => $nama_dokter,
                'ruangan' => $ruangan,
                'jam_operasional' => $jam_operasional
                );
            $this->m_admin->input_data($data,'poli');
            redirect(base_url("admin/poli"));
        }

        function aksi_add_antrean(){
            $nama_lengkap = $this->input->post('nama_lengkap');
            $nama_rs = $this->input->post('nama_rs');
            $poli = $this->input->post('poli');
            $no_antrean = $this->input->post('no_antrean');
    
            $data = array(
                'nama_lengkap' => $nama_lengkap,
                'nama_rs' => $nama_rs,
                'poli' => $poli,
                'no_antrean' => $no_antrean
                );
            $this->m_admin->input_data($data,'antrean');
            redirect(base_url("admin/antrean"));
        }
        /*
        function hapus_user($id_user){
            $where = array('id_user' => $id_user);
            $this->m_admin->hapus_user($where,'user');
            redirect('admin');
        }
        
        function edit_user($id_user){
            $where = array('id_user' => $id_user);
            $data['user'] = $this->m_admin->edit_data_user($where,'user')->result();
            $this->load->view('dashboard_admin',$data);
        }
        */
        

        function update_user(){
            //nama_lengkap, umur, username, password
            $id_user = $this->input->post('id_user');
            $nama_lengkap = $this->input->post('nama_lengkap');
            $umur = $this->input->post('umur');
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $data = array(
                'id_user' => $id_user,
                'nama_lengkap' => $nama_lengkap,
                'umur' => $umur,
                'username' => $username,
                'password' => $password
            );
        
            $where = array(
                'id_user' => $id_user
            );
        
            $this->m_admin->update_data($where,$data,'user');
            redirect('admin');
        }

        function update_poli(){
            $id_poli = $this->input->post('id_poli');
            $nama_poli = $this->input->post('nama_poli');
            $nama_dokter = $this->input->post('nama_dokter');
            $ruangan = $this->input->post('ruangan');
            $jam_operasional = $this->input->post('jam_operasional');

            $data = array(
                'id_poli' => $id_poli,
                'nama_poli' => $nama_poli,
                'nama_dokter' => $nama_dokter,
                'ruangan' => $ruangan,
                'jam_operasional' => $jam_operasional
            );
        
            $where = array(
                'id_poli' => $id_poli
            );
        
            $this->m_admin->update_data($where,$data,'poli');
            redirect('admin/poli');
        }

        function update_rs(){
            $id_rs = $this->input->post('id_rs');
            $nama_rs = $this->input->post('nama_rs');
            $alamat = $this->input->post('alamat');
            $kota = $this->input->post('kota');
            $jam_operasional = $this->input->post('jam_operasional');

            $data = array(
                'id_rs' => $id_rs,
                'nama_rs' => $nama_rs,
                'alamat' => $alamat,
                'kota' => $kota,
                'jam_operasional' => $jam_operasional
            );
        
            $where = array(
                'id_rs' => $id_rs
            );
        
            $this->m_admin->update_data($where,$data,'rumah_sakit');
            redirect('admin/rumah_sakit');
        }
        
        function update_antrean(){
            $id_antrean = $this->input->post('id_antrean');
            $nama_lengkap = $this->input->post('nama_lengkap');
            $nama_rs = $this->input->post('nama_rs');
            $poli = $this->input->post('poli');
            $no_antrean = $this->input->post('no_antrean');

            $data = array(
                'id_antrean' => $id_antrean,
                'nama_lengkap' => $nama_lengkap,
                'nama_rs' => $nama_rs,
                'poli' => $poli,
                'no_antrean' => $no_antrean
            );
        
            $where = array(
                'id_antrean' => $id_antrean
            );
        
            $this->m_admin->update_data($where,$data,'antrean');
            redirect('admin/antrean');
        }

        function hapus_user(){
            $id_user=$this->input->post('id_user');
            $this->m_admin->hapus_user($id_user);
            redirect('admin');
        }

        function hapus_rs(){
            $id_rs=$this->input->post('id_rs');
            $this->m_admin->hapus_rs($id_rs);
            redirect('admin/rumah_sakit');
        }

        function hapus_poli(){
            $id_poli=$this->input->post('id_poli');
            $this->m_admin->hapus_poli($id_poli);
            redirect('admin/poli');
        }

        function hapus_antrean(){
            $id_antrean=$this->input->post('id_antrean');
            $this->m_admin->hapus_antrean($id_antrean);
            redirect('admin/antrean');
        }

        function delete_all_data(){
            $this->m_admin->delete_all_data_user();
            redirect('admin');
        }

        function delete_all_data_rs(){
            $this->m_admin->delete_all_data_rs();
            redirect('admin/rumah_sakit');
        }

        function delete_all_data_poli(){
            $this->m_admin->delete_all_data_poli();
            redirect('admin/poli');
        }

        function delete_all_data_antrean(){
            $this->m_admin->delete_all_data_antrean();
            redirect('admin/antrean');
        }

    }
?>