<?php 

	/**
	 * 
	 */
	class User_model extends CI_model
	{
		
		public function login($username, $password){
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('username like binary', $username);
			$this->db->where('password', $password);

			if ($query = $this->db->get()) {
				if (count($query->result_array()) > 0) {
					return $query->row_array();
				}else{
					return false;
				}
			}else{
				return false;
			}
		}

	}
?>