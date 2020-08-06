<?php
    class book_model extends CI_Model{

        public function get_books(){

            $query="SELECT * FROM book";
            $sql= $this->db->query($query);
            return $sql->result_object();
            
        }
    }
?>