<?php 
    class M_register extends CI_Model{
        function input_data($data,$table){
            $this->db->insert($table,$data);
        }

        // Insert json data into database
        public function insert_json_in_db($json_data) {
            $this->db->insert('user', $json_data);
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }
    }
?>