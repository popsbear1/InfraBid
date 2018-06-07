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
			$this->db->from('plan');
			$this->db->order_by('project_no', 'DESC');

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
			$this->db->order_by('id', 'DESC');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getContractorDetails($currentContractorID){
			$this->db->select('*');
			$this->db->from('contractors');
			$this->db->where('id', $currentContractorID);

			$query = $this->db->get();

			return $query->row_array();
		}

		public function getFunds(){
			$this->db->select('*');
			$this->db->from('funds');

			$query = $this->db->get();

			return $query->result_array();
		}

		public function getFundsDetails($fundID){
			$this->db->select('*');
			$this->db->from('funds');
			$this->db->where('id', $fundID);

			$query = $this->db->get();

			return $query->row_array();
		}

		public function getProjectTypes(){
			$this->db->select('*');
			$this->db->from('projtype');

			$query = $this->db->get();

			return $query->result_array();
		}

		// //	public function getContractorDetails($currentContractorID){
		// 	$this->db->select('*');
		// 	$this->db->from('contractors');
		// 	$this->db->where('id', $currentContractorID);

		// 	$query = $this->db->get();

		// 	return $query->row_array();
		// }

		public function getProjectDetails($projectID){
			$this->db->select('*');
			$this->db->from('projtype');
			$this->db->where('id', $projectID);

			$query = $this->db->get();

			return $query->row_array();
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
	/**
	* All functions bellow are used to insert data on Database.
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

			$this->db->where('id', $currentContractorID);
			$this->db->update('contractors', $data);
		}

		public function updateOwner($owner, $currentContractorID){
			$data = array(
				'owner' => $owner
			);

			$this->db->where('id', $currentContractorID);
			$this->db->update('contractors', $data);
		}

		public function updateAddress($address, $currentContractorID){
			$data = array(
				'address' => $address
			);

			$this->db->where('id', $currentContractorID);
			$this->db->update('contractors', $data);
		}

		public function updateContactnumber($contactnumber, $currentContractorID){
			$data = array(
				'contactnumber' => $contactnumber
			);

			$this->db->where('id', $currentContractorID);
			$this->db->update('contractors', $data);
		}

		public function updateFundSource($source, $fundID){
			$data = array(
				'source' => $source
			);

			$this->db->where('id', $fundID);
			$this->db->update('funds', $data);
		}

		public function updateProjectType($type, $projectID){
			$data = array(
				'type' => $type
			);

			$this->db->where('id', $projectID);
			$this->db->update('projtype', $data);
		}
	}
?>