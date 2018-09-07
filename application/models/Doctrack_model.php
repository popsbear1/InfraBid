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
			$this->db->join('contractors', 'project_plan.contractor_id = contractors.contractor_id', 'left');
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
			$this->db->not_like('status', 'disqualifide');
			$this->db->where('plan_id', $plan_id);

			$existingDocumentsQuery = $this->db->get();
			return $existingDocumentsQuery->result_array();
		}

		public function getOngoingDocumentTracking(){
			$this->db->select('*, project_plan.status as projectstatus');
			$this->db->from('project_plan');
			$this->db->join('municipalities', 'project_plan.municipality_id = municipalities.municipality_id');
			$this->db->join('barangays', 'project_plan.barangay_id = barangays.barangay_id');
			$this->db->join('projtype', 'project_plan.projtype_id = projtype.projtype_id');
			$this->db->join('procurement_mode', 'project_plan.mode_id = procurement_mode.mode_id');
			$this->db->join('funds', 'project_plan.fund_id = funds.fund_id');
			$this->db->join('account_classification', 'project_plan.account_id = account_classification.account_id');
			$this->db->join('contractors', 'project_plan.contractor_id = contractors.contractor_id', 'left');
			$this->db->where('pow_ready', 'true');
			$this->db->where('project_plan.status', 'onprocess');
			$this->db->or_where('project_plan.status', 'for_rebid');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getCompletedDocumentTracking(){
			$this->db->select('*, project_plan.status as projectstatus');
			$this->db->from('project_plan');
			$this->db->join('municipalities', 'project_plan.municipality_id = municipalities.municipality_id');
			$this->db->join('barangays', 'project_plan.barangay_id = barangays.barangay_id');
			$this->db->join('projtype', 'project_plan.projtype_id = projtype.projtype_id');
			$this->db->join('procurement_mode', 'project_plan.mode_id = procurement_mode.mode_id');
			$this->db->join('funds', 'project_plan.fund_id = funds.fund_id');
			$this->db->join('account_classification', 'project_plan.account_id = account_classification.account_id');
			$this->db->join('contractors', 'project_plan.contractor_id = contractors.contractor_id', 'left');
			$this->db->where('pow_ready', 'true');
			$this->db->where('project_plan.status', 'completed');
			$this->db->or_where('project_plan.status', 'for_review');
			$this->db->or_where('project_plan.status', 'for_implementation');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getProjectPlansWithPOW(){
			$this->db->select('*, project_plan.status as projectstatus');
			$this->db->from('project_plan');
			$this->db->join('municipalities', 'project_plan.municipality_id = municipalities.municipality_id');
			$this->db->join('barangays', 'project_plan.barangay_id = barangays.barangay_id');
			$this->db->join('projtype', 'project_plan.projtype_id = projtype.projtype_id');
			$this->db->join('procurement_mode', 'project_plan.mode_id = procurement_mode.mode_id');
			$this->db->join('funds', 'project_plan.fund_id = funds.fund_id');
			$this->db->join('account_classification', 'project_plan.account_id = account_classification.account_id');
			$this->db->join('contractors', 'project_plan.contractor_id = contractors.contractor_id', 'left');
			$this->db->where('pow_ready', 'true');
			$this->db->where('project_plan.status', 'onprocess');
			$this->db->or_where('project_plan.status', 'for_rebid');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getProjectPlansWithoutPOW(){
			$this->db->select('*');
			$this->db->from('project_plan');
			$this->db->join('municipalities', 'project_plan.municipality_id = municipalities.municipality_id');
			$this->db->join('barangays', 'project_plan.barangay_id = barangays.barangay_id');
			$this->db->join('projtype', 'project_plan.projtype_id = projtype.projtype_id');
			$this->db->join('procurement_mode', 'project_plan.mode_id = procurement_mode.mode_id');
			$this->db->join('funds', 'project_plan.fund_id = funds.fund_id');
			$this->db->join('account_classification', 'project_plan.account_id = account_classification.account_id');
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
			$this->db->where('receiver', null);
			$this->db->where('project_document.status', 'received');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getProjectDocumentsOnhandWithoutImage($plan_id, $user_type){
			$this->db->select('*');
			$this->db->from('project_document');
			$this->db->join('document_type', 'project_document.doc_type_id = document_type.doc_type_id');
			$this->db->where('project_document.plan_id', $plan_id);
			$this->db->where('current_doc_loc', $user_type);
			$this->db->where('receiver', null);
			$this->db->where('project_document.status', 'received');
			$this->db->where('project_document.image_status', 'false');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getProjectDocumentsOnhandWithImage($plan_id, $user_type){
			$this->db->select('*');
			$this->db->from('project_document');
			$this->db->join('document_type', 'project_document.doc_type_id = document_type.doc_type_id');
			$this->db->where('project_document.plan_id', $plan_id);
			$this->db->where('current_doc_loc', $user_type);
			$this->db->where('receiver', null);
			$this->db->where('project_document.status', 'received');
			$this->db->where('project_document.image_status', 'true');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getAllImageURL($project_document_id){
			$this->db->select('*');
			$this->db->from('project_document_images');
			$this->db->where('project_document_id', $project_document_id);

			$query = $this->db->get();

			return $query->result_array();
		}

		public function markProjectForImplementation($plan_id){
			$data = array(
				'status' => 'for_implementation'
			);

			$this->db->where('plan_id', $plan_id);
			if ($this->db->update('project_plan', $data)) {
				return true;
			}else{
				return false;
			}

		}

		public function getProjectDocumentsToDisplay($plan_id, $current_doc_loc, $receiver, $type){
			$this->db->select('*');
			$this->db->from('project_document');
			$this->db->join('project_plan', 'project_document.plan_id = project_plan.plan_id');
			$this->db->join('document_type', 'project_document.doc_type_id = document_type.doc_type_id');
			$this->db->where('project_document.plan_id', $plan_id);
			$this->db->where('current_doc_loc', $current_doc_loc);
			if ($type == 'pending' || $type == 'forwarded') {
				$this->db->where('project_document.status', 'sent');
			}
			if ($type != 'onhand') {
				$this->db->where('receiver', $receiver);
			}
			if ($type == 'onhand') {
				$this->db->where('project_document.status', 'received');
			}

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getAllProjectDocuments($plan_id){
			$this->db->select('*, concat(first_name, " ", middle_name, " ", last_name) as username');
			$this->db->from('project_document');
			$this->db->join('project_plan', 'project_document.plan_id = project_plan.plan_id');
			$this->db->join('document_type', 'project_document.doc_type_id = document_type.doc_type_id');
			$this->db->join('users', 'project_document.added_by = users.user_id');
			$this->db->where('project_document.plan_id', $plan_id);

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getProjectDocuments($plan_id, $user_type){
			$this->db->select('*');
			$this->db->from('project_document');
			$this->db->join('document_type', 'project_document.doc_type_id = document_type.doc_type_id');
			$this->db->where('project_document.plan_id', $plan_id);
			$this->db->not_like('project_document.current_doc_loc', $user_type);
			$this->db->not_like('project_document.status', 'disqualifide');

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
			$this->db->group_by('project_document.current_doc_loc');

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
			$this->db->group_by('project_document.plan_id');
			$this->db->group_by('project_document.receiver');

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
			$this->db->join('users', 'logs.sender = users.user_id');
			$this->db->join('document_logs', 'logs.log_id = document_logs.log_id');
			$this->db->join('project_document', 'document_logs.project_document_id = project_document.project_document_id');
			$this->db->where('project_document.plan_id', $plan_id);
			$this->db->where('logs.log_type', 'send');
			$this->db->group_by('logs.log_id');
			$this->db->order_by('logs.log_id', 'DESC');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getProjectDocumentHistoryReceiving($plan_id){
			$this->db->select('*, concat(users.first_name, " ", users.middle_name, " ", users.last_name) as user_name');
			$this->db->from('logs');
			$this->db->join('users', 'logs.receiver = users.user_id');
			$this->db->join('document_logs', 'logs.log_id = document_logs.log_id');
			$this->db->join('project_document', 'document_logs.project_document_id = project_document.project_document_id');
			$this->db->where('project_document.plan_id', $plan_id);
			$this->db->where('logs.log_type', 'receive');
			$this->db->group_by('logs.log_id');
			$this->db->order_by('logs.log_id', 'DESC');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getBidDisqualificationReports(){
			$this->db->select('*, concat(first_name, " ", middle_name, " ", last_name) as userName, project_bidders.proposed_bid as contractor_bid');
			$this->db->from('disqualification_records');
			$this->db->join('project_bidders', 'disqualification_records.project_bid = project_bidders.project_bid');
			$this->db->join('project_logs', 'disqualification_records.project_log_id = project_logs.project_log_id');
			$this->db->join('project_plan', 'project_bidders.plan_id = project_plan.plan_id');
			$this->db->join('contractors', 'project_bidders.contractor_id = contractors.contractor_id');
			$this->db->join('users', 'project_logs.user_id = users.user_id');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getDisqualifideBidData($plan_id, $contractor_id){
			$this->db->select('*');
			$this->db->from('project_document');
			$this->db->join('document_type', 'project_document.doc_type_id = document_type.doc_type_id');
			$this->db->where('plan_id', $plan_id);
			$this->db->where('contractor_id', $contractor_id);
			$this->db->where('project_document.status', 'disqualifide');

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
			$contractor_id = $this->getProjectContractor($plan_id);
			$data = array(
				'plan_id' => $plan_id,
				'doc_type_id' => $doc_type_id,
				'contractor_id' => $contractor_id,
				'added_by' => $user_id,
				'current_doc_loc' => $department,
				'status' => 'received'
			);

			$this->db->insert('project_document', $data);
			
		}

		public function getProjectContractor($plan_id){
			$this->db->select('contractor_id');
			$this->db->from('project_plan');
			$this->db->where('plan_id', $plan_id);

			$contractor = $this->db->get();

			return $contractor->row()->contractor_id;
		}

		public function insertNewLog($remark, $log_type, $user_id){
			$data = array(
				'remark' => $remark,
				'log_type' => $log_type,
				'sender' => $user_id,
			);

			$this->db->insert('logs', $data);

			return $this->db->insert_id();
		}

		public function insertNewReceivedLog($user_id){
			$data = array(
				'log_type' => 'receive',
				'receiver' => $user_id,
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
				'pow_ready' => 'true',
				'status' => 'onprocess',
				'date_pow_added' => date('Y-m-d H:i:s')
			);

			$this->db->where('plan_id', $plan_id);
			$this->db->where('status', 'pending');
			$this->db->where('pow_ready', 'false');
			if ($this->db->update('project_plan', $data)) {
				return true;
			}else{
				return false;
			}
		}

		public function cancelDocumentForward($plan_id, $current_doc_loc, $receiver){
			$data = array(
				'receiver' => null,
				'status' => 'received'
			);

			$this->db->where('plan_id', $plan_id);
			$this->db->where('current_doc_loc', $current_doc_loc);
			$this->db->where('receiver', $receiver);
			$this->db->where('status', 'sent');
			$this->db->update('project_document', $data);
			if ($this->db->affected_rows()) {
				return true;
			}else{
				return false;
			}
		}

		public function addDocumentImageURL($project_document_id, $url, $path){
			$data = array(
				'project_document_id' => $project_document_id,
				'image_url' => base_url() . $url,
				'upload_path' => $path
			);

			if ($this->db->insert('project_document_images', $data)) {
				$image_status = array(
					'image_status' => 'true'
				);

				$this->db->where('project_document_id', $project_document_id);
				$this->db->update('project_document', $image_status);
			}
		}

		public function getIncomingDocAlerts($user_type){
			$this->db->select('project_title, current_doc_loc');
			$this->db->from('project_plan');
			$this->db->join('municipalities','project_plan.municipality_id = municipalities.municipality_id');
			$this->db->join('barangays','project_plan.barangay_id = barangays.barangay_id');
			$this->db->join('contractors','project_plan.contractor_id = contractors.contractor_id', 'Left');
			$this->db->join('project_document', 'project_document.plan_id = project_plan.plan_id');
			$this->db->join('funds', 'project_plan.fund_id = funds.fund_id');
			$this->db->where('project_document.status', 'sent');
			$this->db->where('project_document.receiver', $user_type);
			$this->db->group_by('project_plan.plan_id');
			$this->db->group_by('project_document.current_doc_loc');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getProjectandContractor($plan_id){
			$this->db->select('*');
			$this->db->from('project_plan');
			$this->db->join('contractors', 'project_plan.contractor_id = contractors.contractor_id', 'Left');
			$this->db->where('project_plan.plan_id', $plan_id);

			$query = $this->db->get();

			return $query->row_array();
		}

		public function deleteDocumentImage($document_id){
			//delete image records in 
			$this->db->where('project_document_id', $document_id);
			$this->db->delete('project_document_images');

			//update document availability status

			$data = array(
				'image_status' => 'false'
			);

			$this->db->where('project_document_id', $document_id);
			$this->db->update('project_document', $data);
		}

		
	}
?>