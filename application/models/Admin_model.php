<?php 

	/**
	 * 
	 */
	class Admin_model extends CI_model
	{
		public function getProcurementProjects(){
			$this->db->select('*');
			$this->db->from('procact');
			$this->db->join('project_plan', 'procact.plan_id = project_plan.plan_id');
			$this->db->order_by('procact.plan_id', 'DESC');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getProjectPlan($year, $quarter, $status, $mode, $municipality){
			$this->db->select('*');
			$this->db->from('project_plan');
			$this->db->join('municipalities', 'project_plan.municipality_id = municipalities.municipality_id');
			$this->db->join('barangays', 'project_plan.barangay_id = barangays.barangay_id');
			$this->db->join('projtype', 'project_plan.projtype_id = projtype.projtype_id');
			$this->db->join('procurement_mode', 'project_plan.mode_id = procurement_mode.mode_id');
			$this->db->join('funds', 'project_plan.fund_id = funds.fund_id');
			$this->db->join('account_classification', 'project_plan.account_id = account_classification.account_id');
			$this->db->where('YEAR(date_added)', $year);
			if ($quarter != null) {
				if ($quarter == '1stQ') {
					$this->db->where('MONTH(date_added)', '01');
					$this->db->or_where('MONTH(date_added)', '02');
					$this->db->or_where('MONTH(date_added)', '03');
				}elseif ($quarter == '2ndQ') {
					$this->db->where('MONTH(date_added)', '04');
					$this->db->or_where('MONTH(date_added)', '05');
					$this->db->or_where('MONTH(date_added)', '06');
				}elseif ($quarter == '3rdQ') {
					$this->db->where('MONTH(date_added)', '07');
					$this->db->or_where('MONTH(date_added)', '08');
					$this->db->or_where('MONTH(date_added)', '09');
				}elseif ($quarter == '4thQ') {
					$this->db->where('MONTH(date_added)', '10');
					$this->db->or_where('MONTH(date_added)', '11');
					$this->db->or_where('MONTH(date_added)', '12');
				}
			}

			if ($status != null) {
				$this->db->where('status', $status);
			}
			$this->db->order_by('plan_id', 'DESC');

			if ($mode  != null) {
				$this->db->where('project_plan.mode_id', $mode);
			}

			if ($municipality != null) {
				$this->db->where('project_plan.municipality_id', $municipality);
			}

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getMunicipalities(){
			$this->db->select('*');
			$this->db->from('municipalities');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getBarangays(){
			$this->db->select('*');
			$this->db->from('barangays');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getProjectType(){
			$this->db->select('*');
			$this->db->from('projtype');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getSourceofFunds(){
			$this->db->select('*');
			$this->db->from('funds');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getAccountClassification(){
			$this->db->select('*');
			$this->db->from('account_classification');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getProcurementMode(){
			$this->db->select('*');
			$this->db->from('procurement_mode');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getPlanDetails($plan_id){
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

			return $query->row_array();
		}


		public function getProjectTimeline($plan_id){
			$this->db->select('*');
			$this->db->from('project_timeline');
			$this->db->where('plan_id', $plan_id);

			$query = $this->db->get();

			return $query->row_array();
		}

		public function getContractors(){
			$this->db->select('*');
			$this->db->from('contractors');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getContractorDetails($currentContractorID){
			$this->db->select('*');
			$this->db->from('contractors');
			$this->db->where('contractor_id', $currentContractorID);

			$query = $this->db->get();

			return $query->row_array();
		}

		public function getFunds(){
			$this->db->select('*');
			$this->db->from('funds');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getFundsDetails($fund_id){
			$this->db->select('*');
			$this->db->from('funds');
			$this->db->where('fund_id', $fund_id);

			$query = $this->db->get();

			return $query->row_array();
		}

		public function getProjectTypes(){
			$this->db->select('*');
			$this->db->from('projtype');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getProjectTypeDetails($projtype_id){
			$this->db->select('*');
			$this->db->from('projtype');
			$this->db->where('projtype_id', $projtype_id);

			$query = $this->db->get();

			return $query->row_array();
		}

		public function getUsers(){
			$this->db->select('*');
			$this->db->from('users');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getUserDetails($userID){
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('user_id', $userID);

			$query = $this->db->get();

			return $query->row_array();
		}

		public function getProcActivityDates($plan_id){
			$this->db->select('*');
			$this->db->from('procact');
			$this->db->where('plan_id', $plan_id);

			$query = $this->db->get();

			return $query->row_array();
		}

		public function getProjectTitle($plan_id){
			$this->db->select('project_title');
			$this->db->from('project_plan');
			$this->db->where('plan_id', $plan_id);

			$query = $this->db->get();

			return $query->row();
		}

		public function getMunicipalityDetails($municipality_id){
			$this->db->select('*');
			$this->db->from('municipalities');
			$this->db->where('municipality_id', $municipality_id);

			$query = $this->db->get();

			return $query->row();
		}

		public function getMunicipalityBarangays($municipality_id){
			$this->db->select('*');
			$this->db->from('barangays');
			$this->db->where('municipality_id', $municipality_id);

			$query = $this->db->get();

			return $query->result_array();
		}


		public function getProcurementModeDetails($procurementMode){
			
			$this->db->select('*');
			$this->db->from('procurement_mode');
			$this->db->where('mode_id', $procurementMode);

			$query = $this->db->get();
			return $query->row();
		}

		public function getClassification(){

			$this->db->select('*');
			$this->db->from('account_classification');

			$query = $this->db->get();
			return $query->result_array();
		}

		public function getClassificationDetails($classificationDetails){

			$this->db->select('*');
			$this->db->from('account_classification');
			$this->db->where('account_id', $classificationDetails);

			$query = $this->db->get();
			return $query->row();
		}

		public function getDocument(){
			$this->db->select('*');
			$this->db->from('document_type');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getDocumentDetails($doc_type_id){
			$this->db->select('*');
			$this->db->from('document_type');
			$this->db->where('doc_type_id', $doc_type_id);

			$query = $this->db->get();

			return $query->row_array();
		}

	/**
	* All functions bellow are used to insert data on Database.
	**/
		//Function for inserting new project.
	public function insertNewProject($date_added, $project_no, $project_title, $municipality, $barangay, $type, $mode, $ABC, $source, $account){

		$data = array(
			'date_added' => $date_added,
			'project_no' => $project_no,
			'project_title' => $project_title,
			'municipality_id' => $municipality,
			'barangay_id' => $barangay,
			'projtype_id' => $type,
			'mode_id' => $mode,
			'fund_id' => $source,
			'account_id' => $account,
			'abc' => $ABC,
			'status' => 'pending',
		);

		if ($this->db->insert('project_plan', $data)) {
			$new_plan_id = $this->db->insert_id();
			$plan_id = array(
				'plan_id' => $new_plan_id
			);

			$this->db->insert('procact', $plan_id);
			$this->db->insert('project_timeline', $plan_id);
			return true;
		}else{
			return false;
		}		
	}

	public function insertNewContractor($businessname, $owner, $address, $contactnumber){
		$data = array(
			'businessname' => $businessname,
			'owner' => $owner,
			'address' => $address,
			'contactnumber' => $contactnumber
		);

		if ($this->db->insert('contractors', $data)) {
			return true;
		}else{
			return false;
		}

	}

	public function insertNewFunds($source){
		$data = array(
			'source' => $source
		);

		if ($this->db->insert('funds', $data)) {
			return true;
		}else{
			return false;
		}
	}

	public function insertNewProjectType($type){
		$data = array(
			'type' => $type
		);

		if ($this->db->insert('projtype', $data)) {
			return true;
		}else{
			return false;
		}
	}

	public function insertUsers($firstname, $middlename, $lastname, $usertype){
		$data = array(
			'first_name' => $firstname,
			'middle_name' => $middlename,
			'last_name' => $lastname,
			'user_type' => $usertype
		);
		$this->db->insert('users', $data);
		$user_id = $this->db->insert_id();
		if (!empty($user_id) || $user_id == null) {
			$userpass = array(
				'username' => $user_id . $lastname,
				'password' => "capitol"
			);

			$this->db->where('user_id', $user_id);
			$this->db->update('users', $userpass);
			return true;
		}else{
			return false;
		}
	}

	public function insertMunicipality($municipality_code, $municipality){
		$data = array(
			'municipality_code' => $municipality_code,
			'municipality' => $municipality
		);

		if ($this->db->insert('municipalities', $data)) {
			return $this->db->insert_id();
		}else{
			return false;
		}
	}

	public function insertBarangay($municipality_id, $barangay_code, $barangay){
		$data = array(
			'barangay_code' => $barangay_code,
			'barangay' => $barangay,
			'municipality_id' => $municipality_id
		);

		$this->db->insert('barangays', $data);
	}

	public function insertProcurementMode($mode){
		$data = array(
			'mode' => $mode
		);

		if($this->db->insert('procurement_mode',$data)){
			return true;
		}else{
			return false;
		}

	}

	public function insertClassification($classification){
		$data = array(
			'classification' => $classification
		);

		if($this->db->insert('account_classification', $data)){
			return true;
		}
			return false;			
	}

		public function insertDocument($docname, $document_numbers){
		$data = array(
			'document_name' => $docname,
			'doc_no' => $document_numbers
		);

		if ($this->db->insert('document_type', $data)) {
			return true;
		}else{
			return false;
		}
	}


	/**
	* All functions bellow are used to update data on Database.
	**/
		//Following are the functions used for updating plan details
	public function updateProject_no($project_no, $currentProjNum){
		$data = array(
			'project_no' => $project_no
		);

		$this->db->where('plan_id', $currentProjNum);
		$this->db->update('project_plan', $data);

	}

	public function updateProject_title($project_title, $currentProjNum){
		$data = array(
			'project_title' => $project_title 
		);

		$this->db->where('plan_id', $currentProjNum);
		$this->db->update('project_plan', $data);
	}

	public function updateMunicipality($municipality, $currentProjNum){
		$data = array(
			'municipality_id' => $municipality 
		);

		$this->db->where('plan_id', $currentProjNum);
		$this->db->update('project_plan', $data);
	}

	public function updateBarangay($barangay, $currentProjNum){
		$data = array(
			'barangay_id' => $barangay
		);

		$this->db->where('plan_id', $currentProjNum);
		$this->db->update('project_plan', $data);
	}

	public function updateType($type, $currentProjNum){
		$data = array(
			'projtype_id' => $type 
		);

		$this->db->where('plan_id', $currentProjNum);
		$this->db->update('project_plan', $data);
	}

	public function updateMode($mode, $currentProjNum){
		$data = array(
			'mode_id' => $mode 
		);

		$this->db->where('plan_id', $currentProjNum);
		$this->db->update('project_plan', $data);
	}

	public function updateABC($ABC, $currentProjNum){
		$data = array(
			'abc' => $ABC 
		);

		$this->db->where('plan_id', $currentProjNum);
		$this->db->update('project_plan', $data);
	}

	public function updateSource($source, $currentProjNum){
		$data = array(
			'fund_id' => $source
		);

		$this->db->where('plan_id', $currentProjNum);
		$this->db->update('project_plan', $data);
	}

	public function updateAccount($account, $currentProjNum){
		$data = array(
			'account_id' => $account
		);

		$this->db->where('plan_id', $currentProjNum);
		$this->db->update('project_plan', $data);
	}

	public function updateBusinessName($businessname, $currentContractorID){
		$data = array(
			'businessname' => $businessname
		);

		$this->db->where('contractor_id', $currentContractorID);
		$this->db->update('contractors', $data);
	}

	public function updateOwner($owner, $currentContractorID){
		$data = array(
			'owner' => $owner
		);

		$this->db->where('contractor_id', $currentContractorID);
		$this->db->update('contractors', $data);
	}

	public function updateAddress($address, $currentContractorID){
		$data = array(
			'address' => $address
		);

		$this->db->where('contractor_id', $currentContractorID);
		$this->db->update('contractors', $data);
	}

	public function updateContactnumber($contactnumber, $currentContractorID){
		$data = array(
			'contactnumber' => $contactnumber
		);

		$this->db->where('contractor_id', $currentContractorID);
		$this->db->update('contractors', $data);
	}

	public function updateFundSource($source, $fundID){
		$data = array(
			'source' => $source
		);

		$this->db->where('id', $fundID);
		$this->db->update('funds', $data);
	}

	public function updateProjectType($type, $projtype_id){
		$data = array(
			'type' => $type
		);

		$this->db->where('projtype_id', $projtype_id);
		$this->db->update('projtype', $data);
	}

	public function updateFirstName($firstname, $userID){
		$data = array(
			'first_name' => $firstname
		);

		$this->db->where('user_id', $userID);
		$this->db->update('users', $data);
	}

	public function updateMiddleName($middlename, $userID){
		$data = array(
			'middle_name' => $middlename
		);

		$this->db->where('user_id', $userID);
		$this->db->update('users', $data);
	}

	public function updateLastName($lastname, $userID){
		$data = array(
			'last_name' => $lastname
		);

		$this->db->where('user_id', $userID);
		$this->db->update('users', $data);
	}

	public function updateUserType($usertype, $userID){
		$data = array(
			'usertype' => $usertype
		);

		$this->db->where('user_id', $userID);
		$this->db->update('users', $data);
	}

	public function updateMunicipalityCode($municipality_id, $municipality_code){
		$data = array(
			'municipality_code' => $municipality_code
		);

		$this->db->where('municipality_id', $municipality_id);
		$this->db->update('municipalities', $data);

	}

	public function updateMunicipalityName($municipality_id, $municipality){
		$data = array(
			'municipality' => $municipality
		);

		$this->db->where('municipality_id', $municipality_id);
		$this->db->update('municipalities', $data);
	}

	public function updateBarangayCode($barangay_id, $barangay_code){
		$data = array(
			'barangay_code' => $barangay_code
		);

		$this->db->where('barangay_id', $barangay_id);
		if($this->db->update('barangays', $data)){
			return true;
		}else{
			return false;
		}
	}

	public function updateBarangayName($barangay_id, $barangay){
		$data = array(
			'barangay' => $barangay
		);

		$this->db->where('barangay_id', $barangay_id);
		$this->db->update('barangays', $data);
	}	

	public function updateProcurementMode($mode_id, $mode){
		$data = array(
			'mode' => $mode
		);

		$this->db->where('mode_id', $mode_id);
		$this->db->update('procurement_mode', $data);
	}

	public function updateClassification($account_id, $classification){
		$data = array(
			'classification' => $classification
		);

		$this->db->where('account_id', $account_id);
		$this->db->update('account_classification', $data);
	}

	/**
	* Update proc act dates
	*/

	public function updatePreProcConfDate($plan_id, $date){
		$data = array(
			'pre_proc' => $date
		);

		$this->db->where('plan_id', $plan_id);
		if ($this->db->update('procact', $data)) {
			return true;
		}else{
			return false;
		}
	}

	public function updateAdvertisementDate($plan_id, $date){
		$data = array(
			'advertisement' => $date
		);

		$this->db->where('plan_id', $plan_id);
		if ($this->db->update('procact', $data)) {
			return true;
		}else{
			return false;
		}
	}

	public function updatePreBidDate($plan_id, $date){
		$data = array(
			'pre_bid' => $date
		);

		$this->db->where('plan_id', $plan_id);
		if ($this->db->update('procact', $data)) {
			return true;
		}else{
			return false;
		}
	}

	public function updateEligibilityCheckDate($plan_id, $date, $contractor_id){
		$data = array(
			'eligibility_check' => $date
		);

		$this->db->where('plan_id', $plan_id);
		if ($this->db->update('procact', $data)) {
			$dataTwo = array(
				'contractor_id' => $contractor_id
			);

			$this->db->where('plan_id', $plan_id);
			$this->db->update('project_plan', $dataTwo);
			return true;
		}else{
			return false;
		}
	}

	public function updateOpenBidDate($plan_id, $date){
		$data = array(
			'open_bid' => $date
		);

		$this->db->where('plan_id', $plan_id);
		if ($this->db->update('procact', $data)) {
			return true;
		}else{
			return false;
		}
	}

	public function updateBidEvaluationDate($plan_id, $date){
		$data = array(
			'bid_evaluation' => $date
		);

		$this->db->where('plan_id', $plan_id);
		if ($this->db->update('procact', $data)) {
			return true;
		}else{
			return false;
		}
	}

	public function updatePostQualDate($plan_id, $date){
		$data = array(
			'post_qual' => $date
		);

		$this->db->where('plan_id', $plan_id);
		if ($this->db->update('procact', $data)) {
			return true;
		}else{
			return false;
		}
	}

	public function updateAwardNoticeDate($plan_id, $date){
		$data = array(
			'award_notice' => $date
		);

		$this->db->where('plan_id', $plan_id);
		if ($this->db->update('procact', $data)) {
			return true;
		}else{
			return false;
		}
	}

	public function updateContractSigningDate($plan_id, $date){
		$data = array(
			'contract_signing' => $date
		);

		$this->db->where('plan_id', $plan_id);
		if ($this->db->update('procact', $data)) {
			return true;
		}else{
			return false;
		}
	}

	public function updateProceedNoticeDate($plan_id, $date){
		$data = array(
			'proceed_notice' => $date
		);

		$this->db->where('plan_id', $plan_id);
		if ($this->db->update('procact', $data)) {
			return true;
		}else{
			return false;
		}
	}

	public function updateDeliveryCompletionDate($plan_id, $date){
		$data = array(
			'delivery_completion' => $date
		);

		$this->db->where('plan_id', $plan_id);
		if ($this->db->update('procact', $data)) {
			return true;
		}else{
			return false;
		}
	}

	public function updateAcceptanceTurnoverDate($plan_id, $date){
		$data = array(
			'acceptance_turnover' => $date
		);

		$this->db->where('plan_id', $plan_id);
		if ($this->db->update('procact', $data)) {
			return true;
		}else{
			return false;
		}
	}

	public function updateProcActFinalRemark($plan_id, $remark){
		$data = array(
			'remark' => $remark
		);

		$this->db->where('plan_id', $plan_id);
		if ($this->db->update('procact', $data)) {
			return true;
		}else{
			return false;
		}
	}

	public function updateDocumentDetails($document_name, $doc_type_id){
		$data = array(
			'document_name' => $document_name
		);

		$this->db->where('doc_type_id', $doc_type_id);
		$this->db->update('document_type', $data);
	}

	public function updateDocumentNumber($document_number, $doc_type_id){
		$data = array(
			'doc_no' => $document_number
		);

		$this->db->where('doc_type_id', $doc_type_id);
		$this->db->update('document_type', $data);
	}

	public function updateProjectTimeline($plan_id, $pre_proc_date, $advertisement_start, $advertisement_end, $pre_bid_start, $pre_bid_end, $bid_submission_start, $bid_submission_end, $bid_evaluation_start, $bid_evaluation_end, $post_qualification_start, $post_qualification_end, $award_notice_start, $award_notice_end, $contract_signing_start, $contract_signing_end, $authority_approval_start, $authority_approval_end, $proceed_notice_start, $proceed_notice_end){
		$data = array(
			'pre_proc_date' => $pre_proc_date,
			'advertisement_start' => $advertisement_start,
			'advertisement_end' => $advertisement_end,
			'pre_bid_start' => $pre_bid_start,
			'pre_bid_end' => $pre_bid_end,
			'bid_submission_start' => $bid_submission_start,
			'bid_submission_end' => $bid_submission_end,
			'bid_evaluation_start' => $bid_evaluation_start,
			'bid_evaluation_end' => $bid_evaluation_end,
			'post_qualification_start' => $post_qualification_start,
			'post_qualification_end' => $post_qualification_end,
			'award_notice_start' => $award_notice_start,
			'award_notice_end' => $award_notice_end,
			'contract_signing_start' => $contract_signing_start,
			'contract_signing_end' => $contract_signing_end,
			'authority_approval_start' => $authority_approval_start,
			'authority_approval_end' => $authority_approval_end,
			'proceed_notice_start' => $proceed_notice_start,
			'proceed_notice_end' => $proceed_notice_end
		);

		$this->db->where('plan_id', $plan_id);
		$this->db->update('project_timeline', $data);

		$this->admin_model->updateProjectStatus($plan_id);
		$this->admin_model->updateProjectRebidCount($plan_id);
	}

	public function updateProjectStatus($plan_id){
		$data = array(
			'status' => 'processing' 
		);

		$this->db->where('plan_id', $plan_id);
		$this->db->update('project_plan', $data);
	}

	public function updateProjectRebidCount($plan_id){

		$this->db->select('re_bid_count');
		$this->db->from('project_plan');
		$this->db->where('plan_id', $plan_id);

		$query = $this->db->get();

		$bidcount = $query->row()->re_bid_count;

		$newRebidCount = $bidcount + 1;

		$data = array(
			're_bid_count' => $newRebidCount
		);

		$this->db->where('plan_id', $plan_id);
		$this->db->update('project_plan', $data);
	}
/* update for delete/activate**/
	
	public function deleteDocumentType($doc_type_id){

		$this->db->where('doc_type_id', $doc_type_id);
		$this->db->delete('document_type');
	}

	public function updateDocumentTypeStatus($doc_type_id, $action){

		
			if ($action=='deactivate') { 
				 $data = array(
				'status' => 'inactive'
				);
			}
			else{
				$data = array(
				'status' => 'active'
				);
			}
		

		$this->db->where('doc_type_id', $doc_type_id);
		$this->db->update('document_type', $data);
	}

		public function deleteContractor($contractor_id){

		$this->db->where('contractor_id', $contractor_id);
		$this->db->delete('contractors');
	}

	public function updateContractor($contractor_id, $action){

		
			if ($action=='deactivate') { 
				 $data = array(
				'status' => 'inactive'
				);
			}
			else{
				$data = array(
				'status' => 'active'
				);
			}
		

		$this->db->where('contractor_id', $contractor_id);
		$this->db->update('contractors', $data);
	}

		public function updateFund($fund_id, $action){

		
			if ($action=='deactivate') { 
				 $data = array(
				'status' => 'inactive'
				);
			}
			else{
				$data = array(
				'status' => 'active'
				);
			}
		

		$this->db->where('fund_id', $fund_id);
		$this->db->update('funds', $data);
	}

		public function deleteFund($fund_id){

		$this->db->where('fund_id', $fund_id);
		$this->db->delete('funds');
	}
		public function updateProjectTypes($projtype_id, $action){

		
			if ($action=='deactivate') { 
				 $data = array(
				'status' => 'inactive'
				);
			}
			else{
				$data = array(
				'status' => 'active'
				);
			}
		

		$this->db->where('projtype_id', $projtype_id);
		$this->db->update('projtype', $data);
	}

		public function deleteProjectType($projtype_id){

		$this->db->where('projtype_id', $projtype_id);
		$this->db->delete('projtype');
	}


		public function updateClassifications($account_id, $action){

		
			if ($action=='deactivate') { 
				 $data = array(
				'status' => 'inactive'
				);
			}
			else{
				$data = array(
				'status' => 'active'
				);
			}
		

		$this->db->where('account_id', $account_id);
		$this->db->update('account_classification', $data);
	}

		public function deleteClassification($account_id){

		$this->db->where('account_id', $account_id);
		$this->db->delete('account_classification');
	}

		public function updateModes($mode_id, $action){

		
			if ($action=='deactivate') { 
				 $data = array(
				'status' => 'inactive'
				);
			}
			else{
				$data = array(
				'status' => 'active'
				);
			}
		

		$this->db->where('mode_id', $mode_id);
		$this->db->update('procurement_mode', $data);
	}

		public function deleteMode($mode_id){

		$this->db->where('mode_id', $mode_id);
		$this->db->delete('procurement_mode');
	}
}
?>