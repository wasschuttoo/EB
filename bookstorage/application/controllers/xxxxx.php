<?php
	class Pages extends CI_Controller{
		public function view($page= 'home'){
			if(!file_exists(APPPATH.'views/page/'.$page.'.php')){
				show_404();
			}

			$data['title']= ucfirst($page);

			//$this->load->view('templates/header');
			$this->load->view('page/'.$page, $data);
			//$this->load->view('templates/footer');
		}
	}
?>