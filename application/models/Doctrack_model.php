<?php 
	class Doctrack_model extends CI_model
	{

		public function getDocTrack(){
			$this->db->select('*');
			$this->db->from('logs');
			$this->db->join('users', 'logs.municipality_id = municipalities.municipality_id');
			$this->db->join('barangays', 'logs.barangay_id = barangays.barangay_id');
			$this->db->join('projtype', 'logs.projtype_id = projtype.projtype_id');
			$this->db->join('procurement_mode', 'logs.mode_id = procurement_mode.mode_id');
			$this->db->join('funds', 'logs.fund_id = funds.fund_id');
			$this->db->order_by('log_id', 'DESC');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getDocTrack(){
			$this->db->select
		}
	}
?>