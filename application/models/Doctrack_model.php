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

		public function getProjectPlans($year){
			$this->db->select('*');
			$this->db->from('project_plan');
			$this->db->join('municipalities', 'project_plan.municipality_id = municipalities.municipality_id');
			$this->db->join('barangays', 'project_plan.barangay_id = barangays.barangay_id');
			$this->db->join('projtype', 'project_plan.projtype_id = projtype.projtype_id');
			$this->db->join('procurement_mode', 'project_plan.mode_id = procurement_mode.mode_id');
			$this->db->join('funds', 'project_plan.fund_id = funds.fund_id');
			$this->db->join('account_classification', 'project_plan.account_id = account_classification.account_id');
			$this->db->where('YEAR(date_added)', $year);

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getProjectDocuments($plan_id, $user_type){
			$this->db->select('*');
			$this->db->from('project_document');
			$this->db->join('document_type', 'project_document.doc_type_id = document_type.doc_type_id');
			$this->db->where('project_document.plan_id', $plan_id);
			$this->db->where('doc_loc', $user_type);

			$query = $this->db->get();

			return $query->result_array();
		}

		/**
		* Update Documents
		*/

		public function addProjectDocument($plan_id, $doc_type_id, $user_id, $department){
			$data = array(
				'plan_id' => $plan_id,
				'doc_type_id' => $doc_type_id,
				'user_added_document' => $user_id,
				'doc_loc' => $department,
				'status' => 'sent'
			);

			$this->db->insert('project_document', $data);
		}
	}
?>