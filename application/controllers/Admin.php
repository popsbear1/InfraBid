<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('admin_model');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/home');
		$this->load->view('admin/fragments/footer');

	}

	public function setNavControl(){
		$sideBarControl = $this->session->userdata('sideBarControl');
		if ($sideBarControl == 1) {
			$this->session->set_userdata('sideBarControl', 0);
		}else{
			$this->session->set_userdata('sideBarControl', 1);
		}
		
	}

	public function planView(){
		$data['plans'] = $this->admin_model->getProjectPlan();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/plan', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function addPlanView(){
		$data['municipalities'] = $this->admin_model->getMunicipalities();
		$data['barangays'] = $this->admin_model->getBarangays();
		$data['projTypes'] = $this->admin_model->getProjectType();
		$data['sourceFunds'] = $this->admin_model->getSourceofFunds();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/addPlan', $data);
		$this->load->view('admin/fragments/footer');	
	}

	public function addPlan(){
		$project_no = htmlspecialchars($this->input->post('project_no'));
		$project_title = htmlspecialchars($this->input->post('project_title'));
		$municipality=htmlspecialchars($this->input->post('municipality'));
		$barangay=htmlspecialchars($this->input->post('barangay'));
		$type=htmlspecialchars($this->input->post('type'));
		$mode=htmlspecialchars($this->input->post('mode'));
		$ABC=htmlspecialchars($this->input->post('ABC'));
		$source=htmlspecialchars($this->input->post('source'));
		$account=htmlspecialchars($this->input->post('account'));

		if ($this->admin_model->insertNewProject($project_no, $project_title, $municipality, $barangay, $type, $mode, $ABC, $source, $account)) {
			$this->session->set_flashdata('success', 'The new project has been added to the database.');
		}else{
			$this->session->set_flashdata('error', 'There seems to be a problem. The new project was not successfully added to the database.');
		}

		redirect('admin/addPlanView');
	}

	public function addPlanFromFileView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/addPlanFromFile');
		$this->load->view('admin/fragments/footer');
	}

	public function editPlanView(){
		$pageName['pageName'] = "edit";
		$project_no = $this->session->userdata('project_no');
		$data['municipalities'] = $this->admin_model->getMunicipalities();
		$data['barangays'] = $this->admin_model->getBarangays();
		$data['projTypes'] = $this->admin_model->getProjectType();
		$data['sourceFunds'] = $this->admin_model->getSourceofFunds();
		$data['projectDetails'] = $this->admin_model->getPlanDetails($project_no);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/fragments/projectPlanNavigation', $pageName);
		$this->load->view('admin/editPlan', $data);
		$this->load->view('admin/fragments/footer');	
	}

	public function projectTimelineView(){
		$pageName['pageName'] = "timeline";
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/fragments/projectPlanNavigation', $pageName);
		$this->load->view('admin/projectProcurementTimeline');
		$this->load->view('admin/fragments/footer');	
	}

	public function procurementActivityView(){
		$project_no = $this->session->userdata('project_no');
		$pageName['pageName'] = "activity";
		$data['project_title'] = $this->admin_model->getProjectTitle($project_no)->project_title;
		$data['procActDate'] = $this->admin_model->getProcActivityDates($project_no);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/fragments/projectPlanNavigation', $pageName);
		$this->load->view('admin/projectProcurementActivity', $data);
		$this->load->view('admin/fragments/footer');	
	}

	public function setCurrentPlanNumber(){
		$project_no = $this->input->post('project_no');

		$this->session->set_userdata('project_no', $project_no);

		redirect('admin/editPlanView');
	}

	public function editPlan(){
		$currentPlanNumer = $this->session->userdata('project_no');

		if (!empty($_POST['project_no']) && $_POST != null) {

			if (!empty($_POST['project_title']) && $_POST != null) {
				$project_title = $this->input->post('project_title');
				$this->admin_model->updateProject_title($project_title, $currentPlanNumer);
			}

			if (isset($_POST['municipality'])) {
				$municipality = $this->input->post('municipality');
				$this->admin_model->updateMunicipality($municipality, $currentPlanNumer);
			}

			if (isset($_POST['barangay'])) {
				$barangay = $this->input->post('barangay');
				$this->admin_model->updateBarangay($barangay, $currentPlanNumer);
			}

			if (isset($_POST['type'])) {
				$type = $this->input->post('type');
				$this->admin_model->updateType($type, $currentPlanNumer);
			}

			if (isset($_POST['mode'])) {
				$mode = $this->input->post('mode');
				$this->admin_model->updateMode($mode, $currentPlanNumer);
			}

			if (!empty($_POST['ABC'])) {
				$ABC = $this->input->post('ABC');
				$this->admin_model->updateABC($ABC, $currentPlanNumer);
			}

			if (isset($_POST['source'])) {
				$source = $this->input->post('source');
				$this->admin_model->updateSource($source, $currentPlanNumer);
			}

			if (isset($_POST['account'])) {
				$account = $this->input->post('account');
				$this->admin_model->updateAccount($account, $currentPlanNumer);
			}
			
			$project_no = $this->input->post('project_no');
			$this->admin_model->updateProject_no($project_no, $currentPlanNumer);
			$this->session->set_userdata('project_no', $project_no);
		}


		$this->session->set_flashdata('success', 'Plan Details Updated.');

		redirect('admin/editPlanView');
	}


	/**
	*Bellow are the functions for loading management of data...
	**/

	public function manageContractorsView(){
		$data['contructors'] = $this->admin_model->getContractors();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/contractor', $data);
		$this->load->view('admin/fragments/footer');	
	}

	public function addNewContractorView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/addcontractor');
		$this->load->view('admin/fragments/footer');
	}

	public function addNewContractor(){
		$businessname = $this->input->post('businessname');
		$owner = $this->input->post('owner');
		$address = $this->input->post('address');
		$contactnumber = $this->input->post('contactnumber');

		if ($this->admin_model->insertNewContractor($businessname, $owner, $address, $contactnumber)) {
			$this->session->set_flashdata('success', 'The new contructor has been added to the database.');
		}else{
			$this->session->set_flashdata('error', 'There was an error. The new contructor is not added to the database.');
		}

		redirect('admin/addNewContractorView');
	}

	public function editContractorView(){
		$currentContractorID = $this->session->userdata('contractor_id');

		$data['contractorDetails'] = $this->admin_model->getContractorDetails($currentContractorID);

		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/editcontractor', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function setCurrentContractorID(){
		$contractorID = $this->input->post('contractor_id');

		$this->session->set_userdata('contractor_id', $contractorID);

		redirect('admin/editContractorView');
	}

	public function editContractor(){
		$currentContractorID = $this->session->userdata('contractor_id');
		if (!empty($_POST['businessname'])) {
			$businessname = $this->input->post('businessname');
			$this->admin_model->updateBusinessName($businessname, $currentContractorID);
		}

		if (!empty($_POST['owner'])) {
			$owner = $this->input->post('owner');
			$this->admin_model->updateOwner($owner, $currentContractorID);
		}

		if (!empty($_POST['address'])) {
			$address = $this->input->post('address');
			$this->admin_model->updateAddress($address, $currentContractorID);
		}

		if (!empty($_POST['contactnumber'])) {
			$contactnumber = $this->input->post('contactnumber');
			$this->admin_model->updateContactnumber($contactnumber, $currentContractorID);
		}

		$this->session->set_flashdata('success', 'Constructor Details Successfully Updated.');
		redirect('admin/editContractorView');

	}

	public function manageFundsView(){
		$data['funds'] = $this->admin_model->getFunds();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/fund', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function addFundsView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/addfund');
		$this->load->view('admin/fragments/footer');
	}

	public function addFunds(){
		$source = $this->input->post('source');

		if ($this->admin_model->insertNewFunds($source)) {
			$this->session->set_flashdata('success', 'New Funds Successfully Added.');
		}else{
			$this->session->set_flashdata('error', 'Error! Fund Not Added.');
		}
		redirect('admin/addFundsView');
	}

	public function editFundsView(){
		$fund_id = $this->session->userdata('fund_id');
		$data['fundDetail'] = $this->admin_model->getFundsDetails($fund_id);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/editfund', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function setCurrentFundID(){
		$fundID = $this->input->post('source');

		$this->session->set_userdata('fund_id', $fundID);

		redirect('admin/editFundsView');
	}

	public function editFunds(){
		$fundID = $this->session->userdata('fund_id');
		if (!empty($_POST['source'])) {
			$source = $this->input->post('source');
			$this->admin_model->updateFundSource($source, $fundID);
		}

		$this->session->set_flashdata('success', 'Funds Details Updated.');

		redirect('admin/editFundsView');
	}

	public function manageProjectTypeView(){

		$data['projectTypes'] = $this->admin_model->getProjectTypes();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/projecttype', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function addProjectTypeView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/addProjectType');
		$this->load->view('admin/fragments/footer');
	}

	public function addProjectType(){
		$type = $this->input->post('type');

		if ($this->admin_model->insertNewProjectType($type)) {
			$this->session->set_flashdata('success', 'New Project Type Recorded.');
		}else{
			$this->session->set_flashdata('error', 'Error! Project Type Not Recorded.');
		}

		redirect('admin/addProjectTypeView');
	}

	public function editProjectTypeView(){
		$projectID = $this->session->userdata('projectTypeID');
		$data['projectTypeDetails'] = $this->admin_model->getProjectTypeDetails($projectID);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/editproject', $data);
		$this->load->view('admin/fragments/footer');
	}
	
	public function setCurrentProjectTypeID(){
		$projectTypeID = $this->input->post('type');

		$this->session->set_userdata('projectTypeID', $projectTypeID);

		redirect('admin/editProjectTypeView');
	}


	public function editProjectType(){
		$projectID = $this->session->userdata('projectTypeID');
		if(!empty($_POST['type'])) {
			$type = $this->input->post('type');
			$this->admin_model->updateProjectType($type, $projectID);
		}

		$this->session->set_flashdata('success', 'Successfully Updated.');

		redirect('admin/editProjectTypeView');
	}

	public function manageUsers(){
		$data['users'] = $this->admin_model->getUsers();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/user', $data);
		$this->load->view('admin/fragments/footer');
	}	

	public function editUsersView(){
		$userID = $this->session->userdata('userID');
		$data['userDetails'] = $this->admin_model->getUserDetails($userID);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/edituser', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function editUsers(){
		$userID = $this->session->userdata('userID');
		if(!empty($_POST['username'])) {
			$username = $this->input->post('username');
			$this->admin_model->updateUsername($username, $userID);
		}
		if(!empty($_POST['password'])) {
			$password = $this->input->post('password');
			$this->admin_model->updatePassword($password, $userID);
		}
		if(!empty($_POST['usertype'])) {
			$usertype = $this->input->post('usertype');
			$this->admin_model->updateUserType($usertype, $userID);
		}

		$this->session->set_flashdata('success', 'Successfully Updated.');

		redirect('admin/editUsersView');
	}

	public function setUsersID(){
		$userID = $this->input->post('userID');

		$this->session->set_userdata('userID', $userID);

		redirect('admin/editUsersView');
	}


	public function addUsersView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/adduser');
		$this->load->view('admin/fragments/footer');
	}

	public function addUsers(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$usertype = $this->input->post('usertype');

		if ($this->admin_model->insertUsers($username, $password, $usertype)) {
			$this->session->set_flashdata('success', 'New User Added!');
		}else{
			$this->session->set_flashdata('error', 'ERROR!.');
		}

		redirect('admin/addUsersView');
	}

	public function manageDatabaseView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/backres');
		$this->load->view('admin/fragments/footer');
	}

	public function manageMunicipalitiesAndBarangays(){
		$data['municipalities'] = $this->admin_model->getMunicipalities();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/municipalitiesAndBrangays', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function addMunicipalityView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/addMunicipality');
		$this->load->view('admin/fragments/footer');
	}

	public function addNewMunicipality(){
		$municipality_code = $this->input->post('municipality_code');
		$municipality = $this->input->post('municipality');

		if ($this->admin_model->insertMunicipality($municipality_code, $municipality)) {
			$this->session->set_flashdata('success', 'New municipality added successfully.');
		}else{
			$this->session->set_flashdata('error', 'Erro adding municipality. Try again!');
		}

		redirect('admin/addMunicipalityView');
	}

	public function editMunicipalityView(){
		$municipality_id = $this->session->userdata('municipality_id');
		$data['municipalityDetails'] = $this->admin_model->getMunicipalityDetails($municipality_id);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/editMunicipality', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function editMunicipality(){

		$municipality_id = $this->session->userdata('municipality_id');

		if (!empty($_POST['municipality_code'])) {
			$municipality_code = $this->input->post('municipality_code');
			$this->admin_model->updateMunicipalityCode($municipality_id, $municipality_code);
		}
		if (!empty($_POST['municipality'])) {
			$municipality = $this->input->post('municipality');
			$this->admin_model->updateMunicipalityName($municipality_id, $municipality);
		}

		$this->session->set_flashdata('success', 'municipality details successfully updated.');

		redirect('admin/editMunicipalityView');
	}

	public function setCurrentMunicipalityID(){
		$municipality_id = $this->input->post('municipality_id');
		
		$this->session->set_userdata('municipality_id', $municipality_id);

		redirect('admin/editMunicipalityView');
	}

	public function manageAccountClassifications(){
		$data['classifications'] = $this->admin_model->getClassification();

		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/accountClassifications', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function addClassificationView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/addClassification');
		$this->load->view('admin/fragments/footer');		
	}

	public function addClassification(){
		$classification = $this->input->post('classification');

		if ($this->admin_model->insertClassification($classification)) {
			$this->session->set_flashdata('success', 'New Classification Mode Recorded.');
		}else{
			$this->session->set_flashdata('error', 'Error! Adding of Classification not Recorded.');
		}

		redirect('admin/addClassificationView');
	}

		public function editClassificationView(){
		$classifications = $this->session->userdata('account_classification');

		$data['classification'] = $this->admin_model->getClassificationDetails($classifications);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/editClassification', $data);
		$this->load->view('admin/fragments/footer');
	}

		public function editClassification(){

		$classification = $this->session->userdata('account_classification');
		if (!empty($_POST['classification'])) {
			$newClassification = $this->input->post('classification');
			$this->admin_model->updateClassification($classification, $newClassification);
		}

		$this->session->set_flashdata('success', 'Classification Successfully Updated.');
		redirect('admin/editClassificationView');

	}

		public function setClassification(){

		$classifications = $this->input->post('classification');

		$this->session->set_userdata('account_classification', $classifications);

		redirect('admin/editClassificationView');

	}



	public function manageProcurementMode(){
		$data['modes'] = $this->admin_model->getProcurementMode();

		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/procurementMode', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function addProcurementView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/addProcurement');
		$this->load->view('admin/fragments/footer');
	}



	public function addProcurement(){
		$mode = $this->input->post('mode');

		if ($this->admin_model->insertProcurementMode($mode)) {
			$this->session->set_flashdata('success', 'New Procurement Mode Recorded.');
		}else{
			$this->session->set_flashdata('error', 'Error! Procurement Mode not Recorded.');
		}

		redirect('admin/addProcurementView');

	}

	public function editProcurementView(){
		$modes = $this->session->userdata('procurement_mode');

		$data['mode'] = $this->admin_model->getProcurementModeDetails($modes);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/editProcurement', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function editProcurement(){

		$mode = $this->session->userdata('procurement_mode');
		if (!empty($_POST['mode'])) {
			$newmode = $this->input->post('mode');
			$this->admin_model->updateProcurementMode($mode, $newmode);
		}

		$this->session->set_flashdata('success', 'Procurement Mode Successfully Updated.');
		redirect('admin/editProcurementView');

	}

	public function setProcurementMode(){

		$modes = $this->input->post('mode');

		$this->session->set_userdata('procurement_mode', $modes);

		redirect('admin/editProcurementView');

	}

	public function procurementMonitoringReport(){
		$data['procacts'] = $this->admin_model->getProcurementProjects();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/procurementMonitoringReport', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function procurementTimelineReport(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/projectProcurementTimelineReport');
		$this->load->view('admin/fragments/footer');
	}


	/**
	*
	* Bellow are the methods to update proc activity dates
	*/

	public function editPreProcConf(){
		$project_no = $this->session->userdata('project_no');
		$pre_proc = $this->input->post('pre_proc');

		if ($this->admin_model->updatePreProcConfDate($project_no, $pre_proc)) {
			$this->session->set_flashdata('success', "Pre-proc Conf successfully Updated!");
		}else{
			$this->session->set_flashdata('error', "Error! Pre-proc Conf was not Updated! Try again.");
		}

		redirect('admin/procurementActivityView');
	}


}
