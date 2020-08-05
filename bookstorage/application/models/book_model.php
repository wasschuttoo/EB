<?php
    class book_model extends CI_Model{

        function return_books(){
            $this->load->database();

            $query = $this->db->query("SELECT * FROM book");

            $query->result_array();
            return $query->result_array();
        }
    }
?>