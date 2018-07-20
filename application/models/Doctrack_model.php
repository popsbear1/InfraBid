<?php 
	class Doctrack_model extends CI_model
	{

		public function getHistory(){
			$this->db->select('*');
			$this->db->from('logs');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getProjectPlanDetails($plan_id){
			$this->db->select('*');
			$this->db->from('project_plan');
			$this->db->join('municipalities', 'project_plan.municipality_id = municipalities.municipality_id');
			$this->db->join('barangays', 'project_plan.barangay_id = barangays.barangay_id');
			$this->db->join('projtype', 'project_plan.projtype_id = projtype.projtype_id');
			$this->db->join('procurement_mode', 'project_plan.mode_id = procurement_mode.mode_id');
			$this->db->join('funds', 'project_plan.fund_id = funds.fund_id');
			$this->db->join('account_classification', 'project_plan.account_id = account_classification.account_id');
			$this->db->where('plan_id', $plan_id);

			$query = $this->db->get();

			return $query->row();
		}

		public function getDocumentTypes($plan_id){

			$existingDocuments = $this->getExistingDocumentTypes($plan_id);
			$data = array();
			foreach ($existingDocuments as $document) {
				array_push($data, $document['doc_type_id']);
			}

			$this->db->select('*');
			$this->db->from('document_type');
			if (!empty($data)) {
				$this->db->where_not_in('doc_type_id', $data);
			}

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getExistingDocumentTypes($plan_id){
			$this->db->select('doc_type_id');
			$this->db->from('project_document');
			$this->db->where('plan_id', $plan_id);

			$existingDocumentsQuery = $this->db->get();
			return $existingDocumentsQuery->result_array();
		}

		public function getProjectPlansWithPOW($year){
			$this->db->select('*');
			$this->db->from('project_plan');
			$this->db->join('municipalities', 'project_plan.municipality_id = municipalities.municipality_id');
			$this->db->join('barangays', 'project_plan.barangay_id = barangays.barangay_id');
			$this->db->join('projtype', 'project_plan.projtype_id = projtype.projtype_id');
			$this->db->join('procurement_mode', 'project_plan.mode_id = procurement_mode.mode_id');
			$this->db->join('funds', 'project_plan.fund_id = funds.fund_id');
			$this->db->join('account_classification', 'project_plan.account_id = account_classification.account_id');
			$this->db->where('YEAR(date_added)', $year);
			$this->db->where('pow_ready', 'true');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getProjectPlansWithoutPOW($year){
			$this->db->select('*');
			$this->db->from('project_plan');
			$this->db->join('municipalities', 'project_plan.municipality_id = municipalities.municipality_id');
			$this->db->join('barangays', 'project_plan.barangay_id = barangays.barangay_id');
			$this->db->join('projtype', 'project_plan.projtype_id = projtype.projtype_id');
			$this->db->join('procurement_mode', 'project_plan.mode_id = procurement_mode.mode_id');
			$this->db->join('funds', 'project_plan.fund_id = funds.fund_id');
			$this->db->join('account_classification', 'project_plan.account_id = account_classification.account_id');
			$this->db->where('YEAR(date_added)', $year);
			$this->db->where('pow_ready', 'false');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getProjectDocumentsOnhand($plan_id, $user_type){
			$this->db->select('*');
			$this->db->from('project_document');
			$this->db->join('document_type', 'project_document.doc_type_id = document_type.doc_type_id');
			$this->db->where('project_document.plan_id', $plan_id);
			$this->db->where('current_doc_loc', $user_type);

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getProjectDocuments($plan_id, $user_type){
			$this->db->select('*');
			$this->db->from('project_document');
			$this->db->join('document_type', 'project_document.doc_type_id = document_type.doc_type_id');
			$this->db->where('project_document.plan_id', $plan_id);
			$this->db->not_like('current_doc_loc', $user_type);

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getPendingDocuments($user_type){
			$this->db->select('*');
			$this->db->from('project_plan');
			$this->db->join('municipalities','project_plan.municipality_id = municipalities.municipality_id');
			$this->db->join('barangays','project_plan.barangay_id = barangays.barangay_id');
			$this->db->join('contractors','project_plan.contractor_id = contractors.contractor_id', 'Left');
			$this->db->join('project_document', 'project_document.plan_id = project_plan.plan_id');
			$this->db->join('funds', 'project_plan.fund_id = funds.fund_id');
			$this->db->where('project_document.status', 'sent');
			$this->db->where('project_document.receiver', $user_type);
			$this->db->group_by('project_plan.plan_id');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getForwardedDocuments($user_type){
			$this->db->select('*');
			$this->db->from('project_plan');
			$this->db->join('municipalities','project_plan.municipality_id = municipalities.municipality_id');
			$this->db->join('barangays','project_plan.barangay_id = barangays.barangay_id');
			$this->db->join('contractors','project_plan.contractor_id = contractors.contractor_id', 'Left');
			$this->db->join('project_document', 'project_document.plan_id = project_plan.plan_id');
			$this->db->join('funds', 'project_plan.fund_id = funds.fund_id');
			$this->db->where('project_document.status', 'sent');
			$this->db->where('current_doc_loc', $user_type);
			$this->db->group_by('project_plan.plan_id');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getOnHandDocuments($user_type){
			$this->db->select('*');
			$this->db->from('project_plan');
			$this->db->join('municipalities','project_plan.municipality_id = municipalities.municipality_id');
			$this->db->join('barangays','project_plan.barangay_id = barangays.barangay_id');
			$this->db->join('contractors','project_plan.contractor_id = contractors.contractor_id', 'Left');
			$this->db->join('project_document', 'project_document.plan_id = project_plan.plan_id');
			$this->db->join('funds', 'project_plan.fund_id = funds.fund_id');
			$this->db->where('project_document.status', 'received');
			$this->db->where('current_doc_loc', $user_type);
			$this->db->group_by('project_plan.plan_id');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getReceivedDocumentID($plan_id, $department, $sender){
			$this->db->select('project_document_id');
			$this->db->from('project_document');
			$this->db->where('plan_id', $plan_id);
			$this->db->where('receiver', $department);
			$this->db->where('current_doc_loc', $sender);

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getProjectDocumentHistoryForwarding($plan_id){
			$this->db->select('*, concat(users.first_name, " ", users.middle_name, " ", users.last_name) as user_name');
			$this->db->from('logs');
			$this->db->join('users', 'logs.user_id = users.user_id');
			$this->db->join('document_logs', 'logs.log_id = document_logs.log_id');
			$this->db->join('project_document', 'document_logs.project_document_id = project_document.project_document_id');
			$this->db->where('project_document.plan_id', $plan_id);
			$this->db->where('logs.log_type', 'send');
			$this->db->group_by('logs.log_id');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getProjectDocumentHistoryReceiving($plan_id){
			$this->db->select('*, concat(users.first_name, " ", users.middle_name, " ", users.last_name) as user_name');
			$this->db->from('logs');
			$this->db->join('users', 'logs.user_id = users.user_id');
			$this->db->join('document_logs', 'logs.log_id = document_logs.log_id');
			$this->db->join('project_document', 'document_logs.project_document_id = project_document.project_document_id');
			$this->db->where('project_document.plan_id', $plan_id);
			$this->db->where('logs.log_type', 'receive');
			$this->db->group_by('logs.log_id');

			$query = $this->db->get();

			return $query->result_array();
		}

		/**
		* Update Documents
		*/

		/**
		* 1. Insert new Document to the database
		* 2. Insert new Log to the database
		* 3. Get insert id of new document and new log
		* 4. Insert new document log
		*/

		public function addProjectDocument($plan_id, $doc_type_id, $user_id, $department){
			$data = array(
				'plan_id' => $plan_id,
				'doc_type_id' => $doc_type_id,
				'added_by' => $user_id,
				'current_doc_loc' => $department,
				'status' => 'received'
			);

			$this->db->insert('project_document', $data);
			
		}

		public function insertNewLog($remark, $log_type, $user_id){
			$data = array(
				'remark' => $remark,
				'log_type' => $log_type,
				'user_id' => $user_id,
			);

			$this->db->insert('logs', $data);

			return $this->db->insert_id();
		}

		public function insertNewReceivedLog($user_id){
			$data = array(
				'log_type' => 'receive',
				'user_id' => $user_id,
			);

			$this->db->insert('logs', $data);

			return $this->db->insert_id();
		}		

		public function insertNewDocumentLogRelation($log_id, $project_document_id){
			$data = array(
				'log_id' => $log_id,
				'project_document_id' => $project_document_id
			);

			$this->db->insert('document_logs', $data);
		}

		public function forwardDocument($project_document_id, $plan_id, $department, $receiver){
			$data = array(
				'receiver' => $receiver,
				'status' => 'sent'
			);

			$this->db->where('project_document_id', $project_document_id);
			$this->db->where('current_doc_loc', $department);
			$this->db->where('plan_id', $plan_id);
			$this->db->update('project_document', $data);
		}

		public function updateDocumentDetails($project_document_id, $plan_id, $department, $sender){
			$data = array(
				'previous_doc_loc' => $sender,
				'current_doc_loc' => $department,
				'receiver' => null,
				'status' => 'received'
			);

			$this->db->where('project_document_id', $project_document_id);
			$this->db->where('plan_id', $plan_id);
			$this->db->where('receiver', $department);
			$this->db->where('current_doc_loc', $sender);
			$this->db->where('status', 'sent');
			$this->db->update('project_document', $data);
		}

		public function updatePOWAvailabilitye($plan_id){
			$data = array(
				'pow_ready' => 'true'
			);

			$this->db->where('plan_id', $plan_id);
			$this->db->update('project_plan', $data);
		}
	}
?>