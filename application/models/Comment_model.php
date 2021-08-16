<?php
	class Comment_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function create_comment($cid){
			$data = array (
				'cid' => $cid,
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'body' => $this->input->post('body'),
				'rating' => $this->input->post('rating')
			);
			return $this->db->insert('Reviews', $data);
		}

		public function get_comments($post_id){
			$query = $this->db->get_where('Reviews', array('cid' => $post_id));
			return $query->result_array();
		}
	}