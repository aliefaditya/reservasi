<?php 
 
class M_admin extends CI_Model{

    function tampil_data_antrean(){
        return $this->db->get('antrean');
    }

    function tampil_data_rs(){
        return $this->db->get('rumah_sakit');
    }

    function tampil_data_poli(){
        return $this->db->get('poli');
    }

    function tampil_data_user(){
        return $this->db->get('user');
    }
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
}