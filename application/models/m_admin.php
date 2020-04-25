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

    function edit_data_user($where, $table){
        return $this->db->get_where($table, $where);
    }

    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
    }
    
    function hapus_user($id_user){
        $result=$this->db->query("DELETE FROM user WHERE id_user='$id_user'");
        return $result;
    }

    function hapus_rs($id_rs){
        $result=$this->db->query("DELETE FROM rumah_sakit WHERE id_rs='$id_rs'");
        return $result;
    }

    function hapus_poli($id_poli){
        $result=$this->db->query("DELETE FROM poli WHERE id_poli='$id_poli'");
        return $result;
    }

    function hapus_antrean($id_antrean){
        $result=$this->db->query("DELETE FROM antrean WHERE id_antrean='$id_antrean'");
        return $result;
    }

    function delete_all_data_user(){
        $result=$this->db->query("DELETE FROM user");
        return $result;
    }

    function delete_all_data_rs(){
        $result=$this->db->query("DELETE FROM rumah_sakit");
        return $result;
    }

    function delete_all_data_poli(){
        $result=$this->db->query("DELETE FROM poli");
        return $result;
    }

    function delete_all_data_antrean(){
        $result=$this->db->query("DELETE FROM antrean");
        return $result;
    }
}