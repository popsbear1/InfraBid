<?php 
	class Doctrack_model extends CI_model
	{

		public function getHistory(){
			$this->db->select('*');
			$this->db->from('logs');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getDocumentTypes(){
			$this->db->select('*');
			$this->db->from('document_type');

			$query = $this->db->get();

			return $query->result_array();
		}
	}
?>