<?php
	class Posts extends CI_Controller{
		public function index(){
			$data['title'] = 'Companies';

			$data['posts'] = $this->post_model->get_posts();

			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
			
		}

		public function view($slug = NULL){
			$data['posts'] = $this->post_model->get_posts($slug);

			if(empty($data['posts'])){
				show_404();
			}

			$data['name'] = $data['posts']['name'];

			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}
	}