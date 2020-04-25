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

    function delete_all_data_user(){
        $result=$this->db->query("DELETE FROM user");
        return $result;
    }
}