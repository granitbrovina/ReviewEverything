<?php 
	class User_model extends CI_Model{
		public function register($enc_password){

			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => $enc_password
			);

			return $this->db->insert('user', $data);
		}

		public function check_username_exists($username){
			$query = $this->db->get_where('user', array('username' => $username));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

		public function check_email_exists($email){
			$query = $this->db->get_where('user', array('email' => $email));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}
	}