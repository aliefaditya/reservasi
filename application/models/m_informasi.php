<?php 
 
class M_informasi extends CI_Model{
    function tampil_data(){
        return  $this->db->get('antrean');
    }

    function tampil_data_rs(){
        return $this->db->get('rumah_sakit');
    }

    function tampil_data_poli(){
        return $this->db->get('poli');
    }
}