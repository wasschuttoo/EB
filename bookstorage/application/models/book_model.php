<?php
    class book_model extends CI_Model{

        public function get_books(){

            $this->db->select('*');
            $this->db->from('book');

            $query = $this->db->get();
            return $query->result_array();  
        }   
    }
?>