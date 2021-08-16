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
			$post_id = $data['post']['cid'];
			$data['comments'] = $this->comment_model->get_comments($post_id);

			if(empty($data['post'])){
				show_404();
			}

			$data['title'] = $data['post']['name'];

			$this->load->view('templates/header');
			$this->load->view('posts/view', $data);
			$this->load->view('templates/footer');
		}

		public function create(){
			if (!$this->session->userdata('logged_in')) {
				redirect('users/login');
			}


			$data['title'] = 'Post a website';

			$this->form_validation->set_rules('name', 'Company name', 'required');
			$this->form_validation->set_rules('summary', 'Summary', 'required');
			$this->form_validation->set_rules('website', 'Website', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('posts/create', $data);
				$this->load->view('templates/footer');
			} else {
				// upload image

				$config['upload_path'] = './assets/images';
				$config['allowed_types'] = 'gif|jpg|png';

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload()) {
					$errors = array('error' => $this->upload->display_errors());
					print_r($errors);
					$post_image = 'noimage.jpg';
				} else {
					$data = array('upload_data' => $this->upload->data());
					$post_image = $_FILES['userfile']['name'];
				}
				

				$this->post_model->create_post($post_image);

				$this->session->set_flashdata('post_created', 'Your website has been submitted');

				redirect('posts');
			}
		}

		public function delete($cid){
			$this->post_model->delete_post($cid);

			$this->session->set_flashdata('post_deleted', 'Entry has been deleted');

			redirect('posts');
		}

	}