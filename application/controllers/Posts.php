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
			$data['post'] = $this->post_model->get_posts($slug);

			if(empty($data['post'])){
				show_404();
			}

			$data['title'] = $data['post']['name'];

			$this->load->view('templates/header');
			$this->load->view('posts/view', $data);
			$this->load->view('templates/footer');
		}

		public function create(){
			$data['title'] = 'Sign up as Vendor';

			$this->form_validation->set_rules('name', 'Company name', 'required');
			$this->form_validation->set_rules('summary', 'Summary', 'required');
			$this->form_validation->set_rules('website', 'Website', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('posts/create', $data);
				$this->load->view('templates/footer');
			} else {
				$config['upload_path'] = './assets/images/posts';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$logo = 'noimage.jpg';
				} else {
					$data = array('upload_data' => $this->upload->data());
					$logo = $_FILES['userfile']['name'];
				}

				$this->post_model->create_post($logo);

				redirect('posts');
			}
		}

		public function delete($cid){
			$this->post_model->delete_post($cid);
			redirect('posts');
		}

	}