<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Page extends CI_Controller{

       public function __contruct(){

            parent::__construct();
            $data=array();
            $this->load->model('book_model','bm');  
        }

       public function get_books(){

            $data['item'] = $this->bm->get_books();    
            //var_dump($item);
            $this->load->view('home', $data);      
          }
        
       /* public function create_book(){
            $title = $this->input->post('title');

            $this->bm->create($title);
            redirect('home/create');
        }*/
    }
?>