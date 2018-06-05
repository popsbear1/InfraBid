<?php 

	/**
	 * 
	 */
	class User_model extends CI_model
	{
		
		public function login($username, $password){
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('username', $username);

			if ($query = $this->db->get()) {
				return true;
			}else{
				return false;
			}
		}
	}
?>