<?php 

	/**
	 * 
	 */
	class Admin_model extends CI_model
	{
		public function getProcurementProjects(){
			$this->db->select('*');
			$this->db->from('procact');
			$this->db->join('plan', 'procact.project_no = plan.project_no');
			$this->db->order_by('procact.project_no', 'DESC');

			$query = $this->db->get();

			return $query->result_array();
		}
	}
?>