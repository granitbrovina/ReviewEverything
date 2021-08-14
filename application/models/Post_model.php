<?php
	class Post_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_posts($slug = FALSE){
			if($slug === FALSE){
				$this->db->order_by('cid', 'DESC');
				$query = $this->db->get('Company');
				return $query->result_array();
			}

			$query = $this->db->get_where('Company', array('slug' => $slug));
			return $query->row_array();
		}

		public function create_post($logo){
			$slug = url_title($this->input->post('name'));

			$data = array (
				'name' => $this->input->post('name'),
				'slug' => $slug,
				'summary' => $this->input->post('summary'),
				'website' => $this->input->post('website'),
				'contactEmail' => $this->input->post('email'),
				'logo' => $logo
			);
			return $this->db->insert('Company', $data);
		}

		public function delete_post($cid){
			$this->db->where('cid', $cid);
			$this->db->delete('Company');
			return true;
		}
	}