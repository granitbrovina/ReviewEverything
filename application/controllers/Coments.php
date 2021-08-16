<?php 
	class Comments extends CI_Controller{
		public function create($cid){
			$slug = $this->input->post('slug');
			$data['post'] = $this->post_model->get_posts($slug);

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('body', 'Review', 'required');
			$this->form_validation->set_rules('rating', 'rating', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('posts/view', $data);
				$this->load->view('templates/footer');

			} else {
				$this->comment_model->create_comment($cid);
				redirect('posts/'.$slug); 

			}
		}
	}