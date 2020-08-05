<?php
    class book_details extends CI_Controller{

        function index(){

            $this->load->model("book_model");
            $data["UserArray"]= $this->book_model->return_books();
            $this->load->view("home",$data);
        }
    }
?>