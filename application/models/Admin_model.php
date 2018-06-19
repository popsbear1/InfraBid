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

		public function getProjectPlan(){
			$this->db->select('*');
			$this->db->from('project_plan');
			$this->db->order_by('plan_id', 'DESC');

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

		public function getPlanDetails($project_no){
			// $this->db->select('*');
			// $this->db->from('plan');
			// $this->db->where('project_no', $project_no);

			$query = $this->db->query("SELECT * FROM `plan` WHERE project_no = '$project_no'");

			return $query->row_array();
		}

		public function getContractors(){
			$this->db->select('*');
			$this->db->from('contractors');
			$this->db->order_by('contractor_id', 'DESC');

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
			$this->db->where('id', $userID);

			$query = $this->db->get();

			return $query->row_array();
		}

		public function getProcActivityDates($project_no){
			$this->db->select('*');
			$this->db->from('procact');
			$this->db->where('project_no', $project_no);

			$query = $this->db->get();

			return $query->row_array();
		}

		public function getProjectTitle($project_no){
			$this->db->select('project_title');
			$this->db->from('plan');
			$this->db->where('project_no', $project_no);

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

	/**
	* All functions bellow are used to insert data on Database.
	**/
		//Function for inserting new project.
	public function insertNewProject($project_no, $project_title, $municipality, $barangay, $type, $mode, $ABC, $source, $account){

		$data = array(
			'project_no' => $project_no,
			'project_title' => $project_title,
			'municipality' => $municipality,
			'barangay' => $barangay,
			'type' => $type,
			'mode' => $mode,
			'ABC' => $ABC,
			'source' => $source,
			'account' => $account
		);

		if ($this->db->insert('plan', $data)) {
			$data2 = array(
				'project_no' => $project_no
			);

			if ($this->db->insert('procact', $data2)) {
				return true;
			}else{
				return false;
			}
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

	public function insertUsers($username, $password, $usertype){
		$data = array(
			'username' => $username,
			'password' => $password,
			'user_type' => $usertype
		);



		if ($this->db->insert('users', $data)) {
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
	/**
	* All functions bellow are used to update data on Database.
	**/
		//Following are the functions used for updating plan details
	public function updateProject_no($project_no, $currentProjNum){
		$data = array(
			'project_no' => $project_no
		);

		$this->db->where('project_no', $currentProjNum);
		$this->db->update('plan', $data);

	}

	public function updateProject_title($project_title, $currentProjNum){
		$data = array(
			'project_title' => $project_title 
		);

		$this->db->where('project_no', $currentProjNum);
		$this->db->update('plan', $data);
	}

	public function updateMunicipality($municipality, $currentProjNum){
		$data = array(
			'municipality' => $municipality 
		);

		$this->db->where('project_no', $currentProjNum);
		$this->db->update('plan', $data);
	}

	public function updateBarangay($barangay, $currentProjNum){
		$data = array(
			'barangay' => $barangay
		);

		$this->db->where('project_no', $currentProjNum);
		$this->db->update('plan', $data);
	}

	public function updateType($type, $currentProjNum){
		$data = array(
			'type' => $type 
		);

		$this->db->where('project_no', $currentProjNum);
		$this->db->update('plan', $data);
	}

	public function updateMode($mode, $currentProjNum){
		$data = array(
			'mode' => $mode 
		);

		$this->db->where('project_no', $currentProjNum);
		$this->db->update('plan', $data);
	}

	public function updateABC($ABC, $currentProjNum){
		$data = array(
			'ABC' => $ABC 
		);

		$this->db->where('project_no', $currentProjNum);
		$this->db->update('plan', $data);
	}

	public function updateSource($source, $currentProjNum){
		$data = array(
			'source' => $source
		);

		$this->db->where('project_no', $currentProjNum);
		$this->db->update('plan', $data);
	}

	public function updateAccount($account, $currentProjNum){
		$data = array(
			'account' => $account
		);

		$this->db->where('project_no', $currentProjNum);
		$this->db->update('plan', $data);
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

	public function updateUsername($username, $userID){
		$data = array(
			'username' => $username
		);

		$this->db->where('id', $userID);
		$this->db->update('users', $data);
	}

	public function updatePassword($password, $userID){
		$data = array(
			'password' => $password
		);

		$this->db->where('id', $userID);
		$this->db->update('users', $data);
	}

	public function updateUserType($usertype, $userID){
		$data = array(
			'usertype' => $usertype
		);

		$this->db->where('id', $userID);
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

	/**
	* Update proc act dates
	*/

	public function updatePreProcConfDate($project_no, $date){
		$data = array(
			'pre_proc' => $date
		);

		$this->db->where('project_no', $project_no);
		if ($this->db->update('procact', $data)) {
			return true;
		}else{
			return false;
		}
	}
}
?>