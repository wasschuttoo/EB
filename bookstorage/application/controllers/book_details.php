<?php
    //defined('BASEPATH') OR exit('No direct script access allowed');

    class book_details extends CI_Controller{

       public function __contruct(){

            parent::__construct();
            $this->load->model('book_model','bm');  
        }

        public function index(){
            $data['info']= $this->bm->get_books();

            $this->load->view('home',$data);
        }
    }
?>