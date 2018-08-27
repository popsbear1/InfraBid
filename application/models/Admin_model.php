<?php 

	/**
	 * 
	 */
	class Admin_model extends CI_model
	{

		public function deleteProjectPlan($plan_id){

			if ($this->getProjectStatus($plan_id)->status === 'pending') {
				$this->deleteProcStatus($plan_id);
				$this->deleteProcActDates($plan_id);
				$this->deleteTimeline($plan_id);

				$this->db->where('plan_id', $plan_id);
				$this->db->delete('project_plan');
			}

		}

		public function deleteProcStatus($plan_id){
			$this->db->where('plan_id', $plan_id);
			$this->db->delete('project_activity_status');
		}

		public function deleteProcActDates($plan_id){
			$this->db->where('plan_id', $plan_id);
			$this->db->delete('procact');
		}

		public function deleteTimeline($plan_id){
			$this->db->where('plan_id', $plan_id);
			$this->db->delete('project_timeline');
		}

		public function getProjectStatus($plan_id){
			$this->db->select('status');
			$this->db->from('project_plan');
			$this->db->where('plan_id', $plan_id);

			$query = $this->db->get();

			return $query->row();
		}

		public function getRegularPlan($year, $mode, $status, $municipality,$source,$projecttype){
			$this->db->select('*, project_plan.status as project_status');
			$this->db->from('project_plan');
			$this->db->join('municipalities', 'project_plan.municipality_id = municipalities.municipality_id');
			$this->db->join('barangays', 'project_plan.barangay_id = barangays.barangay_id');
			$this->db->join('projtype', 'project_plan.projtype_id = projtype.projtype_id');
			$this->db->join('procurement_mode', 'project_plan.mode_id = procurement_mode.mode_id');
			$this->db->join('funds', 'project_plan.fund_id = funds.fund_id');
			$this->db->join('account_classification', 'project_plan.account_id = account_classification.account_id');
			$this->db->join('procact', 'project_plan.plan_id = procact.plan_id');
			$this->db->where('project_plan.project_type', 'regular');
			if ($year != null) {
				$this->db->where('project_year', $year);
			}

			if ($mode != null) {
				$this->db->where('project_plan.mode_id', $mode);
			}

			if ($status != null) {
				$this->db->where('project_plan.status', $status);
			}

			if ($municipality != null) {
				$this->db->where('project_plan.municipality_id', $municipality);
			}

			if ($source !=null) {
				$this->db->where('project_plan.fund_id',$source);
			}

			if ($projecttype !=null){
				$this->db->where('project_plan.projtype_id', $projecttype);
			}

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getSupplementalPlan($year, $mode, $status, $municipality,$source,$projecttype){
			$this->db->select('*, project_plan.status as project_status');
			$this->db->from('project_plan');
			$this->db->join('municipalities', 'project_plan.municipality_id = municipalities.municipality_id');
			$this->db->join('barangays', 'project_plan.barangay_id = barangays.barangay_id');
			$this->db->join('projtype', 'project_plan.projtype_id = projtype.projtype_id');
			$this->db->join('procurement_mode', 'project_plan.mode_id = procurement_mode.mode_id');
			$this->db->join('funds', 'project_plan.fund_id = funds.fund_id');
			$this->db->join('account_classification', 'project_plan.account_id = account_classification.account_id');
			$this->db->join('procact', 'project_plan.plan_id = procact.plan_id');
			$this->db->where('project_plan.project_type', 'supplementary');
			if ($year != null) {
				$this->db->where('project_year', $year);
			}

			if ($mode != null) {
				$this->db->where('project_plan.mode_id', $mode);
			}

			if ($status != null) {
				$this->db->where('project_plan.status', $status);
			}

			if ($municipality != null) {
				$this->db->where('project_plan.municipality_id', $municipality);
			}

			if ($source !=null) {
				$this->db->where('project_plan.fund_id',$source);
			}

			if ($projecttype !=null){
				$this->db->where('project_plan.projtype_id', $projecttype);
			}

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getOngoingProjectPlan($year, $apptype, $status, $municipality, $source, $type){
			$this->db->select('*, project_plan.status as project_status');
			$this->db->from('project_plan');
			$this->db->join('municipalities', 'project_plan.municipality_id = municipalities.municipality_id');
			$this->db->join('barangays', 'project_plan.barangay_id = barangays.barangay_id');
			$this->db->join('projtype', 'project_plan.projtype_id = projtype.projtype_id');
			$this->db->join('procurement_mode', 'project_plan.mode_id = procurement_mode.mode_id');
			$this->db->join('funds', 'project_plan.fund_id = funds.fund_id');
			$this->db->join('account_classification', 'project_plan.account_id = account_classification.account_id');
			$this->db->join('procact', 'project_plan.plan_id = procact.plan_id');
			if ($year != null) {
				$this->db->where('project_year', $year);
			}

			if ($apptype != null) {
				$this->db->where('project_plan.project_type', $apptype);
			}

			if ($municipality != null) {
				$this->db->where('project_plan.municipality_id', $municipality);
			}

			if ($source != null) {
				$this->db->where('project_plan.fund_id',$source);
			}

			if ($type != null){
				$this->db->where('project_plan.projtype_id', $type);
			}

			if ($status != null) {
				$this->db->where('project_plan.status', $status);
			}else{
				$this->db->where('project_plan.status', 'onprocess');
				$this->db->or_where('project_plan.status', 'for_implementation');
				$this->db->or_where('project_plan.status', 'for_rebid');
			}

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getOngoingProjectPlanCountTotal($year, $apptype, $status, $municipality, $source, $type){
			$this->db->select('count(project_plan.plan_id) as project_count, sum(project_plan.abc) as total_abc');
			$this->db->from('project_plan');
			$this->db->join('municipalities', 'project_plan.municipality_id = municipalities.municipality_id');
			$this->db->join('barangays', 'project_plan.barangay_id = barangays.barangay_id');
			$this->db->join('projtype', 'project_plan.projtype_id = projtype.projtype_id');
			$this->db->join('procurement_mode', 'project_plan.mode_id = procurement_mode.mode_id');
			$this->db->join('funds', 'project_plan.fund_id = funds.fund_id');
			$this->db->join('account_classification', 'project_plan.account_id = account_classification.account_id');
			if ($year != null) {
				$this->db->where('project_year', $year);
			}
			if ($apptype != null) {
				$this->db->where('project_plan.project_type', $apptype);
			}

			if ($status != null) {
				$this->db->where('project_plan.status', $status);
			}else{
				$this->db->where('project_plan.status', 'onprocess');
				$this->db->or_where('project_plan.status', 'for_implementation');
				$this->db->or_where('project_plan.status', 'for_rebid');
			}

			if ($municipality != null) {
				$this->db->where('project_plan.municipality_id', $municipality);
			}

			if ($source !=null) {
				$this->db->where('project_plan.fund_id',$source);
			}

			if ($type !=null){
				$this->db->where('project_plan.projtype_id',$type);
			}

			$this->db->order_by('municipality ASC', 'barangay ASC');

			$query = $this->db->get();

			return $query->row_array();
		}

		public function getRegularProjectPlanCountTotal($year, $mode, $status, $municipality, $source, $type){
			$this->db->select('count(project_plan.plan_id) as project_count, sum(project_plan.abc) as total_abc');
			$this->db->from('project_plan');
			$this->db->join('municipalities', 'project_plan.municipality_id = municipalities.municipality_id');
			$this->db->join('barangays', 'project_plan.barangay_id = barangays.barangay_id');
			$this->db->join('projtype', 'project_plan.projtype_id = projtype.projtype_id');
			$this->db->join('procurement_mode', 'project_plan.mode_id = procurement_mode.mode_id');
			$this->db->join('funds', 'project_plan.fund_id = funds.fund_id');
			$this->db->join('account_classification', 'project_plan.account_id = account_classification.account_id');

			$this->db->where('project_type', 'regular');
			if ($year != null) {
				$this->db->where('project_year', $year);
			}
			if ($mode != null) {
				$this->db->where('project_plan.mode_id', $mode);
			}

			if ($status != null) {
				$this->db->where('project_plan.status', $status);
			}

			if ($municipality != null) {
				$this->db->where('project_plan.municipality_id', $municipality);
			}

			if ($source !=null) {
				$this->db->where('project_plan.fund_id',$source);
			}

			if ($type !=null){
				$this->db->where('project_plan.projtype_id',$type);
			}

			$this->db->order_by('municipality ASC', 'barangay ASC');

			$query = $this->db->get();

			return $query->row_array();
		}

		public function getSupplementalProjectPlanCountTotal($year, $mode, $status, $municipality, $source, $type){
			$this->db->select('count(project_plan.plan_id) as project_count, sum(project_plan.abc) as total_abc');
			$this->db->from('project_plan');
			$this->db->join('municipalities', 'project_plan.municipality_id = municipalities.municipality_id');
			$this->db->join('barangays', 'project_plan.barangay_id = barangays.barangay_id');
			$this->db->join('projtype', 'project_plan.projtype_id = projtype.projtype_id');
			$this->db->join('procurement_mode', 'project_plan.mode_id = procurement_mode.mode_id');
			$this->db->join('funds', 'project_plan.fund_id = funds.fund_id');
			$this->db->join('account_classification', 'project_plan.account_id = account_classification.account_id');

			$this->db->where('project_type', 'supplementary');
			if ($year != null) {
				$this->db->where('project_year', $year);
			}
			if ($mode != null) {
				$this->db->where('project_plan.mode_id', $mode);
			}

			if ($status != null) {
				$this->db->where('project_plan.status', $status);
			}

			if ($municipality != null) {
				$this->db->where('project_plan.municipality_id', $municipality);
			}

			if ($source !=null) {
				$this->db->where('project_plan.fund_id',$source);
			}

			if ($type !=null){
				$this->db->where('project_plan.projtype_id',$type);
			}

			$this->db->order_by('municipality ASC', 'barangay ASC');

			$query = $this->db->get();

			return $query->row_array();
		}


		public function getMunicipalities(){
			$this->db->select('*');
			$this->db->from('municipalities');
			$this->db->order_by('municipality ASC');
			$query = $this->db->get();

			return $query->result_array();

		}

		public function getActiveMunicipalities(){
			$this->db->select('*');
			$this->db->from('municipalities');
			$this->db->where('status', 'active');
			$this->db->order_by('municipality ASC');
			$query = $this->db->get();

			return $query->result_array();
		}

		public function getBarangays(){
			$this->db->select('*');
			$this->db->from('barangays');
			$this->db->order_by('barangay ASC');
			$query = $this->db->get();

			return $query->result_array();
		}

		public function getProjectType(){
			$this->db->select('*');
			$this->db->from('projtype');
			$this->db->order_by('type ASC');
			$query = $this->db->get();

			return $query->result_array();
		}

		public function getActiveProjectType(){
			$this->db->select('*');
			$this->db->from('projtype');
			$this->db->where('status', 'active');
			$this->db->order_by('type ASC');
			$query = $this->db->get();

			return $query->result_array();
		}

		public function getSourceofFunds(){
			$this->db->select('*');
			$this->db->from('funds');
			$this->db->order_by('source ASC');
			$query = $this->db->get();

			return $query->result_array();
		}

		public function getRegularFunds(){
			$this->db->select('*');
			$this->db->from('funds');
			$this->db->where('fund_type', 'regular');
			$this->db->order_by('source ASC');
			$query = $this->db->get();

			return $query->result_array();
		}

		public function getSupplementalFunds(){
			$this->db->select('*');
			$this->db->from('funds');
			$this->db->where('fund_type', 'supplemental');
			$this->db->order_by('source ASC');
			$query = $this->db->get();

			return $query->result_array();
		}

		public function getActiveSourceofFunds($fund_type){
			$this->db->select('*');
			$this->db->from('funds');
			$this->db->where('fund_type', $fund_type);
			$this->db->where('status', 'active');
			$this->db->order_by('source ASC');
			$query = $this->db->get();

			return $query->result_array();
		}

		public function getActiveAccountClassification(){
			$this->db->select('*');
			$this->db->from('account_classification');
			$this->db->where('status', 'active');
			$this->db->order_by('classification ASC');
			$query = $this->db->get();

			return $query->result_array();
		}

		public function getActiveProcurementMode(){
			$this->db->select('*');
			$this->db->from('procurement_mode');
			$this->db->where('status', 'active');
			$this->db->order_by('mode ASC');
			$query = $this->db->get();

			return $query->result_array();
		}

		public function getPlanDetails($plan_id){
			$this->db->select('*, project_plan.status as project_status');
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

			return $query->row_array();
		}

		public function getProjectLogs($plan_id){
			$this->db->select('*, concat(first_name, " ", middle_name, " ", last_name) as username');
			$this->db->from('project_logs');
			$this->db->join('users', 'project_logs.user_id = users.user_id');
			$this->db->where('plan_id', $plan_id);

			$query = $this->db->get();

			return $query->result_array();
		}


		public function getProjectTimeline($plan_id){
			$this->db->select('*');
			$this->db->from('project_timeline');
			$this->db->where('plan_id', $plan_id);

			$query = $this->db->get();

			return $query->row_array();
		}

		public function getProjectTimelineStatus($plan_id){
			$this->db->select('timeLine_status');
			$this->db->from('project_timeline');
			$this->db->where('plan_id', $plan_id);

			$query = $this->db->get();

			return $query->row_array();
		}

		public function getContractors(){
			$this->db->select('*');
			$this->db->from('contractors');
			$this->db->order_by('owner ASC');
			$query = $this->db->get();

			return $query->result_array();
		}

		public function getContractorDetails($currentContractorID){
			$this->db->select('*');
			$this->db->from('contractors');
			$this->db->where('contractor_id', $currentContractorID);
			$this->db->order_by('owner ASC');
			$query = $this->db->get();

			return $query->row_array();
		}

		public function getFunds(){
			$this->db->select('*');
			$this->db->from('funds');
			$this->db->order_by('source ASC');
			$query = $this->db->get();

			return $query->result_array();
		}

		public function getFundsDetails($fund_id){
			$this->db->select('*');
			$this->db->from('funds');
			$this->db->where('fund_id', $fund_id);
			$this->db->order_by('source ASC');
			$query = $this->db->get();

			return $query->row_array();
		}

		public function getProjectTypes(){
			$this->db->select('*');
			$this->db->from('projtype');
			$this->db->order_by('type ASC');
			$query = $this->db->get();

			return $query->result_array();
		}

		public function getProjectTypeDetails($projtype_id){
			$this->db->select('*');
			$this->db->from('projtype');
			$this->db->where('projtype_id', $projtype_id);
			$this->db->order_by('type ASC');
			$query = $this->db->get();

			return $query->row_array();
		}

		public function getObservers(){
			$this->db->select('*');
			$this->db->from('observers');
			$query = $this->db->get();

			return $query->result_array();
		}

		public function getActiveObservers(){
			$this->db->select('*');
			$this->db->from('observers');
			$this->db->where('status', 'active');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getObserverDetails($currentObserverID){
			$this->db->select('*');
			$this->db->from('observers');
			$this->db->where('observer_id', $currentObserverID);
			$this->db->order_by('observer_dept_name ASC');
			$query = $this->db->get();

			return $query->row_array();
		}

		public function getUsers(){
			$this->db->select('*');
			$this->db->from('users');
			$this->db->order_by('last_name ASC');
			$query = $this->db->get();

			return $query->result_array();
		}

		public function getUserDetails($userID){

			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('user_id', $userID);
			$this->db->order_by('last_name ASC');
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
			$this->db->order_by('municipality ASC');
			$query = $this->db->get();

			return $query->row();
		}

		public function getMunicipalityBarangays($municipality_id){
			$this->db->select('*');
			$this->db->from('barangays');
			$this->db->where('municipality_id', $municipality_id);
			$this->db->order_by('municipality ASC');
			$query = $this->db->get();

			return $query->result_array();
		}


		public function getProcurementModeDetails($procurementMode){
			
			$this->db->select('*');
			$this->db->from('procurement_mode');
			$this->db->where('mode_id', $procurementMode);
			$this->db->order_by('mode ASC');
			$query = $this->db->get();
			return $query->row();
		}

		public function getProcurementMode(){
			$this->db->select('*');
			$this->db->from('procurement_mode');
			$this->db->order_by('mode ASC');
			$query = $this->db->get();
			return $query->result_array();
		}

		public function getClassification(){

			$this->db->select('*');
			$this->db->from('account_classification');
			$this->db->order_by('classification ASC');
			$query = $this->db->get();
			return $query->result_array();
		}

		public function getClassificationDetails($classificationDetails){

			$this->db->select('*');
			$this->db->from('account_classification');
			$this->db->where('account_id', $classificationDetails);
			$this->db->order_by('classification ASC');
			$query = $this->db->get();
			return $query->row();
		}

		public function getDocument(){
			$this->db->select('*');
			$this->db->from('document_type');
			$this->db->order_by('document_name ASC');
			$query = $this->db->get();

			return $query->result_array();
		}

		public function getDocumentDetails($currentDocumentID){
			$this->db->select('*');
			$this->db->from('document_type');
			$this->db->where('doc_type_id', $currentDocumentID);
			$this->db->order_by('document_name ASC');
			$query = $this->db->get();

			return $query->row_array();
		}

		public function getProjectPlanStatus($plan_id){
			$this->db->select('status');
			$this->db->from('project_plan');
			$this->db->where('plan_id', $plan_id);

			$query = $this->db->get();

			return $query->row();
		}


		public function getProjectActivityStatus($plan_id){
			$this->db->select('*');
			$this->db->from('project_activity_status');
			$this->db->where('plan_id', $plan_id);

			$query =$this->db->get();

			return $query->row_array();
		}

		public function getAllProjectActivityStatus(){
			$this->db->select('*');
			$this->db->from('project_activity_status');
			$this->db->join('project_plan', 'project_activity_status.plan_id = project_plan.plan_id');
			$this->db->not_like('project_plan.status', 'pending');
			$this->db->or_not_like('project_plan.status', 'completed');
			$this->db->or_not_like('project_plan.status', 'for_review');

			$query =$this->db->get();

			return $query->result_array();
		}

		public function getCurrentABC($plan_id){
			$this->db->select('abc');
			$this->db->from('project_plan');
			$this->db->where('plan_id', $plan_id);

			$query = $this->db->get();

			return $query->row();
		}


	/**
	* All functions bellow are used to insert data on Database.
	**/
		//Function for inserting new project.
	public function insertNewRegularProject($date_added, $project_year, $project_no, $project_title, $municipality, $barangay, $type, $mode, $ABC, $source, $account, $abc_post_date, $sub_open_date, $award_notice_date, $contract_signing_date){

		$data = array(
			'date_added' => $date_added,
			'project_year' => $project_year,
			'project_no' => $project_no,
			'project_title' => $project_title,
			'municipality_id' => $municipality,
			'barangay_id' => $barangay,
			'projtype_id' => $type,
			'mode_id' => $mode,
			'fund_id' => $source,
			'account_id' => $account,
			'abc' => $ABC,
			'abc_post_date' => $abc_post_date,
			'sub_open_date' => $sub_open_date,
			'award_notice_date' => $award_notice_date,
			'contract_signing_date' => $contract_signing_date,
			'status' => 'pending',
			'project_type' => 'regular',
			'pow_ready' => 'false'
		);

		if ($this->db->insert('project_plan', $data)) {
			$new_plan_id = $this->db->insert_id();
			$plan_id = array(
				'plan_id' => $new_plan_id
			);

			$this->db->insert('procact', $plan_id);
			$this->db->insert('project_timeline', $plan_id);

			$this->updateTimelineProjectStatus($new_plan_id);
			if ($ABC < 5000000) {
				$this->updatePreProctStatus($new_plan_id);
			}
			return true;
		}else{
			return false;
		}		
	}

	
	public function insertNewSupplementalProject($date_added, $project_year, $project_no, $project_title, $municipality, $barangay, $type, $mode, $ABC, $source, $account, $abc_post_date, $sub_open_date, $award_notice_date, $contract_signing_date){

		$data = array(
			'date_added' => $date_added,
			'project_year' => $project_year,
			'project_no' => $project_no,
			'project_title' => $project_title,
			'municipality_id' => $municipality,
			'barangay_id' => $barangay,
			'projtype_id' => $type,
			'mode_id' => $mode,
			'fund_id' => $source,
			'account_id' => $account,
			'abc' => $ABC,
			'abc_post_date' => $abc_post_date,
			'sub_open_date' => $sub_open_date,
			'award_notice_date' => $award_notice_date,
			'contract_signing_date' => $contract_signing_date,
			'status' => 'pending',
			'project_type' => 'supplementary',
			'pow_ready' => 'false'
		);

		if ($this->db->insert('project_plan', $data)) {
			$new_plan_id = $this->db->insert_id();
			$plan_id = array(
				'plan_id' => $new_plan_id
			);

			$this->db->insert('procact', $plan_id);
			$this->db->insert('project_timeline', $plan_id);


			$this->updateTimelineProjectStatus($new_plan_id);
			if ($ABC < 5000000) {
				$this->updatePreProctStatus($new_plan_id);
			}
			return true;
		}else{
			return false;
		}		
	}

	public function insertNewObserver($observer_dept_name){
		$data = array(
			'observer_dept_name' => $observer_dept_name
		);

		if ($this->db->insert('observers', $data)) {
			return $this->db->insert_id();
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
			return $this->db->insert_id();
		}else{
			return false;
		}

	}

	public function insertNewFunds($source, $fund_type){
		$data = array(
			'source' => $source,
			'fund_type' => $fund_type
		);

		if ($this->db->insert('funds', $data)) {
			return $this->db->insert_id();
		}else{
			return false;
		}
	}

	public function insertNewProjectType($type){
		$data = array(
			'type' => $type
		);

		if ($this->db->insert('projtype', $data)) {
			return $this->db->insert_id();
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
			return $this->db->insert_id();
		}else{
			return false;
		}

	}

	public function insertClassification($classification){
		$data = array(
			'classification' => $classification
		);

		if($this->db->insert('account_classification', $data)){
			return $this->db->insert_id();
		}
		return false;			
	}

	public function insertDocument($doc_no, $document_name){
		$data = array(
			'doc_no' => $doc_no,
			'document_name' => $document_name
		);

		if ($this->db->insert('document_type', $data)) {
			return $this->db->insert_id();
		}else{
			return false;
		}

	}


	/**
	* All functions bellow are used to update data on Database.
	**/
		//Following are the functions used for updating plan details

	public function updateDate_added($date_added, $currentPlanID){
		$data = array(
			'date_added' => $date_added
		);

		$this->db->where('plan_id', $currentPlanID);
		$this->db->update('project_plan', $data);
	}

	public function updateProject_year($year, $currentPlanID){
		$data = array(
			'year' => $year
		);

		$this->db->where('plan_id', $currentPlanID);
		$this->db->update('project_plan', $data);
	}

	public function updateProject_no($project_no, $currentPlanID){
		$data = array(
			'project_no' => $project_no
		);

		$this->db->where('plan_id', $currentPlanID);
		$this->db->update('project_plan', $data);

	}

	public function updateProject_title($project_title, $currentPlanID){
		$data = array(
			'project_title' => $project_title 
		);

		$this->db->where('plan_id', $currentPlanID);
		$this->db->update('project_plan', $data);
	}

	public function updateMunicipality($municipality, $currentPlanID){
		$data = array(
			'municipality_id' => $municipality 
		);

		$this->db->where('plan_id', $currentPlanID);
		$this->db->update('project_plan', $data);
	}

	public function updateBarangay($barangay, $currentPlanID){
		$data = array(
			'barangay_id' => $barangay
		);

		$this->db->where('plan_id', $currentPlanID);
		$this->db->update('project_plan', $data);
	}

	public function updateType($type, $currentPlanID){
		$data = array(
			'projtype_id' => $type 
		);

		$this->db->where('plan_id', $currentPlanID);
		$this->db->update('project_plan', $data);
	}

	public function updateMode($mode, $currentPlanID){
		$data = array(
			'mode_id' => $mode 
		);

		$this->db->where('plan_id', $currentPlanID);
		$this->db->update('project_plan', $data);
	}

	public function updateABC($ABC, $currentPlanID){
		$data = array(
			'abc' => $ABC 
		);

		$this->db->where('plan_id', $currentPlanID);
		$this->db->update('project_plan', $data);
	}

	public function updateSource($source, $currentPlanID){
		$data = array(
			'fund_id' => $source
		);

		$this->db->where('plan_id', $currentPlanID);
		$this->db->update('project_plan', $data);
	}

	public function updateAccount($account, $currentPlanID){
		$data = array(
			'account_id' => $account
		);

		$this->db->where('plan_id', $currentPlanID);
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

		$this->db->where('fund_id', $fundID);
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
			'user_type' => $usertype
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
			$status = array(
				'pre_proc' => 'finished'
			);
			$this->db->where('plan_id', $plan_id);
			$this->db->update('project_activity_status', $status);
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
			$status = array(
				'advertisement' => 'finished'
			);
			$this->db->where('plan_id', $plan_id);
			$this->db->update('project_activity_status', $status);
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
			$status = array(
				'pre_bid' => 'finished'
			);
			$this->db->where('plan_id', $plan_id);
			$this->db->update('project_activity_status', $status);
			return true;
		}else{
			return false;
		}
	}

	public function updateOpenBidDate($plan_id, $date){
		$data = array(
			'open_bid' => $date,
			'eligibility_check' => $date
		);

		$this->db->where('plan_id', $plan_id);
		if ($this->db->update('procact', $data)) {
			$status = array(
				'open_bid' => 'finished',
				'eligibility_check' => 'finished'
			);
			$this->db->where('plan_id', $plan_id);
			$this->db->update('project_activity_status', $status);
			return true;
		}else{
			return false;
		}
	}

	// public function updateOpenBidDate($plan_id, $date, $contractor_id, $proposed_bid){
	// 	if ($date != null || !empty($date) || $date != "") {
	// 		$data = array(
	// 			'open_bid' => $date,
	// 			'eligibility_check' => $date
	// 		);
	// 		$this->db->where('plan_id', $plan_id);
	// 		$this->db->update('procact', $data);
	// 	}

	// 	if ($contractor_id != null || !empty($contractor_id) || $contractor_id != "") {
	// 		$contractorData = array(
	// 			'contractor_id' => $contractor_id
	// 		);

	// 		$this->db->where('plan_id', $plan_id);
	// 		$this->db->update('project_plan', $contractorData);
	// 	}

	// 	if ($proposed_bid != null || !empty($proposed_bid) || $proposed_bid != "") {
	// 		$bidData = array(
	// 			'proposed_bid' => $proposed_bid
	// 		);

	// 		$this->db->where('plan_id', $plan_id);
	// 		$this->db->update('project_plan', $bidData);
	// 	}
		
	// 	$status = array(
	// 		'eligibility_check' => 'finished',
	// 		'open_bid' => 'finished'
	// 	);
	// 	$this->db->where('plan_id', $plan_id);
	// 	$this->db->update('project_activity_status', $status);
	// 	return true;
		
	// }

	// public function updateOpenBidDate($plan_id, $date){
	// 	$data = array(
	// 		'open_bid' => $date
	// 	);

	// 	$this->db->where('plan_id', $plan_id);
	// 	if ($this->db->update('procact', $data)) {
	// 		$status = array(
	// 			'open_bid' => 'finished'
	// 		);
	// 		$this->db->where('plan_id', $plan_id);
	// 		$this->db->update('project_activity_status', $status);
	// 		return true;
	// 	}else{
	// 		return false;
	// 	}
	// }

	public function updateBidEvaluationDate($plan_id, $date){
		$data = array(
			'bid_evaluation' => $date
		);

		$this->db->where('plan_id', $plan_id);
		if ($this->db->update('procact', $data)) {
			$status = array(
				'bid_evaluation' => 'finished'
			);
			$this->db->where('plan_id', $plan_id);
			$this->db->update('project_activity_status', $status);
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
			$status = array(
				'post_qual' => 'finished'
			);
			$this->db->where('plan_id', $plan_id);
			$this->db->update('project_activity_status', $status);
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
			$status = array(
				'award_notice' => 'finished'
			);
			$this->db->where('plan_id', $plan_id);
			$this->db->update('project_activity_status', $status);
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
			$status = array(
				'contract_signing' => 'finished'
			);
			$this->db->where('plan_id', $plan_id);
			$this->db->update('project_activity_status', $status);
			return true;
		}else{
			return false;
		}
	}

	public function updateAuthorityApprovalDate($plan_id, $date){
		$data = array(
			'authority_approval' => $date
		);

		$this->db->where('plan_id', $plan_id);
		if ($this->db->update('procact', $data)) {
			$status = array(
				'authority_approval' => 'finished'
			);
			$this->db->where('plan_id', $plan_id);
			$this->db->update('project_activity_status', $status);
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
			$status = array(
				'proceed_notice' => 'finished'
			);
			$this->db->where('plan_id', $plan_id);
			$this->db->update('project_activity_status', $status);
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
			$status = array(
				'delivery_completion' => 'finished'
			);
			$this->db->where('plan_id', $plan_id);
			$this->db->update('project_activity_status', $status);
			return true;
		}else{
			return false;
		}
	}

	public function updateAcceptanceTurnoverDate($plan_id, $date){
		$data = array(
			'acceptance_turnover' => $date,
		);

		$this->db->where('plan_id', $plan_id);
		if ($this->db->update('procact', $data)) {
			$status = array(
				'acceptance_turnover' => 'finished'
			);
			$this->db->where('plan_id', $plan_id);
			$this->db->update('project_activity_status', $status);
			return true;
		}else{
			return false;
		}
	}

	public function update_abc_post_date($abc_post_date, $plan_id){
		$data = array(
			'abc_post_date' => $abc_post_date
		);

		$this->db->where('plan_id', $plan_id);
		$this->db->update('project_plan', $data);
	}

	public function update_award_notice_date($award_notice_date, $plan_id){
		$data = array(
			'award_notice_date' => $award_notice_date
		);

		$this->db->where('plan_id', $plan_id);
		$this->db->update('project_plan', $data);
	}

	public function update_contract_signing_date($contract_signing_date, $plan_id){
		$data = array(
			'contract_signing_date' => $contract_signing_date
		);

		$this->db->where('plan_id', $plan_id);
		$this->db->update('project_plan', $data);
	}

	public function update_sub_open_date($sub_open_date, $plan_id){
		$data = array(
			'sub_open_date' => $sub_open_date
		);

		$this->db->where('plan_id', $plan_id);
		$this->db->update('project_plan', $data);
	}

	public function updatePreBidStatus($plan_id, $status){
		$data = array(
			'pre_bid' => $status
		);
		
		$this->db->where('plan_id', $plan_id);
		$this->db->update('project_activity_status', $data);
	}

	public function updateAuthorityApprovalStatus($plan_id, $status){
		$data = array(
			'authority_approval' => $status
		);
		
		$this->db->where('plan_id', $plan_id);
		$this->db->update('project_activity_status', $data);
	}

	public function updatePreProctStatus($plan_id){
		$data = array(
			'pre_proc' => 'not_needed'
		);

		$this->db->where('plan_id', $plan_id);
		$this->db->update('project_activity_status', $data);
	}


	// public function updateDocumentDetails($document_name, $doc_type_id){
	// 	$data = array(
	// 		'document_name' => $document_name
	// 	);

	// 	$this->db->where('doc_type_id', $doc_type_id);
	// 	$this->db->update('document_type', $data);
	// }

	// public function updateDocumentNumber($document_number, $doc_type_id){
	// 	$data = array(
	// 		'doc_no' => $document_number
	// 	);

	// 	$this->db->where('doc_type_id', $doc_type_id);
	// 	$this->db->update('document_type', $data);
	// }

	public function updateDocumentDetails($document_name, $currentDocumentID){
		$data = array(
			'document_name' => $document_name
		);

		$this->db->where('doc_type_id', $currentDocumentID);
		$this->db->update('document_type', $data);
	}

	public function updateObserverDetails($observer_dept_name, $currentObserverID){
		$data = array(
			'observer_dept_name' => $observer_dept_name
		);

		$this->db->where('observer_id', $currentObserverID);
		$this->db->update('observers', $data);
	}

	public function updateDocumentNumber($doc_no, $currentDocumentID){
		$data = array(
			'doc_no' => $doc_no
		);

		$this->db->where('doc_type_id', $currentDocumentID);
		$this->db->update('document_type', $data);
	}

	public function updateProjectTimeline($plan_id, $advertisement_start, $advertisement_end, $pre_bid_start, $pre_bid_end, $bid_submission_start, $bid_submission_end, $bid_evaluation_start, $bid_evaluation_end, $post_qualification_start, $post_qualification_end, $award_notice_start, $award_notice_end, $contract_signing_start, $contract_signing_end, $authority_approval_start, $authority_approval_end, $proceed_notice_start, $proceed_notice_end){
		$data = array(
			'timeLine_status' => 'set',
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
		$this->session->set_userdata('timeLine_status', 'set');
	}

	public function updateProjectStatus($plan_id, $action){

		if ($action == 're_bid') {
			$data = array(
				'status' => 'for_rebid',
				'proposed_bid' => null
			);
		}
		if ($action == 're_review') {
			$data = array(
				'status' => 'for_review'
			);
		}

		if ($action == 'finish') {
			$data = array(
				'status' => 'completed'
			);
		}

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

	public function updateProjectContractor($plan_id){
		$data = array(
			'contractor_id' => null
		);

		$this->db->where('plan_id', $plan_id);
		$this->db->update('project_plan', $data);
	}

	public function updateTimelineProjectStatus($plan_id){
		$timeLine_status_data = array(
			'plan_id' => $plan_id,
			'pre_proc' => 'pending',
			'advertisement' => 'pending',
			'pre_bid' => 'pending',
			'eligibility_check' => 'pending',
			'open_bid' => 'pending',
			'bid_evaluation' => 'pending',
			'post_qual' => 'pending',
			'award_notice' => 'pending',
			'contract_signing' => 'pending',
			'authority_approval' => 'pending',
			'proceed_notice' => 'pending',
			'delivery_completion' => 'pending',
			'acceptance_turnover' => 'pending'
		);
		
		$this->db->insert('project_activity_status', $timeLine_status_data);
	}

		public function resetTimelineProjectStatus($plan_id){
		
		$timeLine_status_data = array(
			'pre_proc' => 'pending',
			'advertisement' => 'pending',
			'pre_bid' => 'pending',
			'eligibility_check' => 'pending',
			'open_bid' => 'pending',
			'bid_evaluation' => 'pending',
			'post_qual' => 'pending',
			'award_notice' => 'pending',
			'contract_signing' => 'pending',
			'authority_approval' => 'pending',
			'proceed_notice' => 'pending',
			'delivery_completion' => 'pending',
			'acceptance_turnover' => 'pending'
		);

		$this->db->where('plan_id', $plan_id);
		$this->db->update('project_activity_status', $timeLine_status_data);
	}

	/* update for delete/activate**/
	
	public function deleteDocumentType($doc_type_id){

		$this->db->where('doc_type_id', $doc_type_id);
		if($this->db->delete('document_type')){
			return true;
		}else{
			return false;
		}
	}

	public function deleteObservers($observer_id){

		$this->db->where('observer_id', $observer_id);
		if($this->db->delete('observers')){
			return true;
		}else{
			return false;
		}
	}
	public function resetProjectTimeline($plan_id){

		$data = array(
			'timeLine_status' => 'pending',
			'pre_proc_date' => null,
			'advertisement_start' => null,
			'advertisement_end' => null,
			'pre_bid_start' => null,
			'pre_bid_end' => null,
			'bid_submission_start' => null,
			'bid_submission_end' => null,
			'bid_evaluation_start' => null,
			'bid_evaluation_end' => null,
			'post_qualification_start' => null,
			'post_qualification_end' => null,
			'award_notice_start' => null,
			'award_notice_end' => null,
			'contract_signing_start' => null,
			'contract_signing_end' => null,
			'authority_approval_start' => null,
			'authority_approval_end' => null,
			'proceed_notice_start' => null,
			'proceed_notice_end' => null
		);

		$this->db->where('plan_id', $plan_id);
		$this->db->update('project_timeline', $data);
		$this->session->set_userdata('timeLine_status', 'pending');

	}

	public function resetProjectProcurementActivity($plan_id){

		$data = array(
			'pre_proc' => null,
			'advertisement' => null,
			'pre_bid' => null,
			'eligibility_check' => null,
			'open_bid' => null,
			'bid_evaluation' => null,
			'post_qual' => null,
			'award_notice' => null,
			'contract_signing' => null,
			'proceed_notice' => null,
			'delivery_completion' => null,
			'acceptance_turnover' => null
		);

		$this->db->where('plan_id', $plan_id);
		$this->db->update('procact', $data);

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

	public function updateObserverStatus($observer_id, $action){

		if ($action=='deactivate') {
			$data = array(
				'status' => 'inactive'
			);
		}else{
			$data=array(
				'status' => 'active'
			);
		}

		$this->db->where('observer_id', $observer_id);
		$this->db->update('observers', $data);
	}

	public function recordProjectLog($plan_id, $user_id, $remark){
		$data = array(
			'plan_id' => $plan_id,
			'user_id' => $user_id,
			'remark' => $remark
		);

		$this->db->insert('project_logs', $data);

		return $this->db->insert_id();
	}

	public function deleteContractor($contractor_id){

		$this->db->where('contractor_id', $contractor_id);
		if($this->db->delete('contractors')){
			return true;
		}else{
			return false;
		}
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
		if($this->db->delete('funds')){
			return true;
		}else{
			return false;
		}

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
		if($this->db->delete('projtype')){
			return true;
		}else{
			return false;
		}
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
		if($this->db->delete('account_classification')){
			return true;
		}else{
			return false;
		}
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
		if($this->db->delete('procurement_mode')){
			return true;
		}else{
			return false;
		}
	}

	public function updateUsers($user_id, $action){

		
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
		

		$this->db->where('user_id', $user_id);
		$this->db->update('users', $data);
	}

	public function deleteUsers($user_id){

		$this->db->where('user_id', $user_id);
		if($this->db->delete('users')){
			return true;
		}else{
			return false;
		}
	}

	public function updateMunicipalitiesAndBarangays($municipality_id, $action){

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

		$this->db->where('municipality_id', $municipality_id);
		$this->db->update('municipalities', $data);

	}

	public function deleteMunicipalitiesAndBarangays($municipality_id){

		$this->db->where('municipality_id', $municipality_id);
		if($this->db->delete('municipalities')){
			return true;
		}else{
			return false;
		}
	}


	//// after this comment are the functions/queries for updating ang managing the bids/bidders of projects

	public function insertBids($plan_id, $contractor_id, $proposed_bid){
		$data = array(
			'plan_id' => $plan_id,
			'contractor_id' => $contractor_id,
			'proposed_bid' => $proposed_bid,
			'bid_status' => 'active'
		);

		if ($this->db->insert('project_bidders', $data)) {
			return true;
		}else{
			return false;
		}
	}

	public function getProjectBids($plan_id){
		$this->db->select('*');
		$this->db->from('project_bidders');
		$this->db->join('contractors', 'project_bidders.contractor_id = contractors.contractor_id');
		$this->db->where('plan_id', $plan_id);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function disqualifyAndSactionBidder($plan_id, $user_id, $remark){

		// record log for disqualification/sanction
		$log_id = $this->recordProjectLog($plan_id, $user_id, $remark);
		// get id of to be disqualifide bidder in project_plan table
		$this->db->select('contractor_id');
		$this->db->from('project_plan');
		$this->db->where('plan_id', $plan_id);

		$contractor = $this->db->get();

		$contractor_id = $contractor->row()->contractor_id;
		// status of all documents related to this contractor and this project will be chnaged to 'disqualifide'
		$this->UpdateContractorDocumentStatus($plan_id, $contractor_id);
		// get bid details of disqualifide bidder from project_bidders table
		$this->db->select('project_bid');
		$this->db->from('project_bidders');
		$this->db->where('plan_id', $plan_id);
		$this->db->where('contractor_id', $contractor_id);

		$bid = $this->db->get();

		$project_bid = $bid->row()->project_bid;

		// record disqualification to disqualification_records

		$disqualification_data = array(
			'project_bid' => $project_bid,
			'project_log_id' => $log_id
		);

		$this->db->insert('disqualification_records', $disqualification_data);

		// update bid status in project_bidders table to 'disqualifide'

		$status = array(
			'bid_status' => 'disqualifide'
		);

		$this->db->where('project_bid', $project_bid);
		$this->db->update('project_bidders', $status);
		

	}

	public function UpdateContractorDocumentStatus($plan_id, $contractor_id){
		$status = array(
			'status' => 'disqualifide'
		);

		$this->db->where('plan_id', $plan_id);
		$this->db->where('contractor_id', $contractor_id);
		$this->db->update('project_document', $status);
	}

	public function resetProcActivityDatesAndStatus($plan_id){

		// update dates of activities, reset to null
		$dates = array(
			'post_qual' => null,
			'award_notice' => null,
			'contract_signing' => null,
			'authority_approval' => null,
			'proceed_notice' => null,
			'delivery_completion' => null,
			'acceptance_turnover' => null
		);

		$this->db->where('plan_id', $plan_id);
		$this->db->update('procact', $dates);
		
		// update staus of activities reset to pending
		$status = array(
			'post_qual' => 'pending',
			'award_notice' => 'pending',
			'contract_signing' => 'pending',
			'proceed_notice' => 'pending',
			'delivery_completion' => 'pending',
			'acceptance_turnover' => 'pending'
		);

		$this->db->where('plan_id', $plan_id);
		$this->db->update('project_activity_status', $status);

		// update status of authority approval when current status is not 'not_needed'
		$authority_approval_status = array(
			'authority_approval' => 'pending'
		);

		$this->db->where('plan_id', $plan_id);
		$this->db->where('authority_approval', 'finished');
		$this->db->update('project_activity_status', $status);
	}

	public function verifyBidAvailability($plan_id){
		$bids = $this->getProjectBids($plan_id);
		$active_bids = 0;
		foreach ($bids as $bid) {
			if ($bid['bid_status'] == 'active') {
				$active_bids++;
			}
		}
		if ($active_bids > 0) {
			return true;
		}else{
			return false;
		}
	}
	public function updateCurrentWinningBid($plan_id){
		$bids = $this->getProjectBids($plan_id);
		$winning_bid;
		$contractor_bid = null;
		foreach ($bids as $bid) {
			if ($bid['bid_status'] == 'active') {
				if ($contractor_bid == null) {
					$contractor_bid = $bid['proposed_bid'];
					$winning_bid = $bid;
				}else{
					if ($bid['proposed_bid'] < $contractor_bid) {
						$contractor_bid = $bid['proposed_bid'];
						$winning_bid = $bid;
					}
				}
			}
		}

		$data = array(
			'contractor_id' => $winning_bid['contractor_id'],
			'proposed_bid' => $winning_bid['proposed_bid']
		);

		$this->db->where('plan_id', $plan_id);
		$this->db->update('project_plan', $data);
	}

	public function insertActivityObservers($plan_id, $observer_id, $observer_name){
		$data = array(
			'plan_id' => $plan_id,
			'observer_id' => $observer_id,
			'name_of_observer' => $observer_name
		);

		$this->db->insert('project_observers', $data);
	}
}
?>