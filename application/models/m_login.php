<?php 
    class M_login extends CI_Model{	
        function cek_login($table,$where){		
            return $this->db->get_where($table,$where);
        }

        function validate($username,$password){
            $this->db->where('username',$username);
            $this->db->where('password',$password);
            return $this->db->get('user');
        }

        function edit_data_user($where,$table){
            return $this->db->get_where($table,$where);
        }
    }
?>