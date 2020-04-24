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
    }
?>