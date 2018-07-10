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

	public function annualPlanView(){
		$year = null;
		$quarter = null;
		$status = null;
		$mode = null;
		$municipality = null;

		if (isset($_POST['year']) && !empty($_POST['year'])) {
			$year = $_POST['year'];
		}else{
			$year = date('Y');
		}
		if (isset($_POST['quarter'])) {
			$quarter = $_POST['quarter'];
		}
		if (isset($_POST['status'])) {
			$status = $_POST['status'];
		}
		if (isset($_POST['mode'])) {
			$mode = $_POST['mode'];
		}
		if (isset($_POST['municipality'])) {
			$municipality = $_POST['municipality'];
		}

		$data['modes'] = $this->admin_model->getProcurementMode();
		$data['plans'] = $this->admin_model->getProjectPlan($year, $quarter, $status, $mode, $municipality);
		$data['municipalities'] = $this->admin_model->getMunicipalities();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/plan', $data);
		$this->load->view('admin/fragments/footer');
	}


	public function addPlanView(){
		$data['currentYear'] = date('Y-m-d');
		$data['municipalities'] = $this->admin_model->getMunicipalities();
		$data['barangays'] = $this->admin_model->getBarangays();
		$data['projTypes'] = $this->admin_model->getProjectType();
		$data['sourceFunds'] = $this->admin_model->getSourceofFunds();
		$data['accounts'] = $this->admin_model->getAccountClassification();
		$data['modes'] = $this->admin_model->getProcurementMode();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/addPlan', $data);
		$this->load->view('admin/fragments/footer');	
	}

	public function addPlan(){
		$date_added = htmlspecialchars($this->input->post('date_added'));
		$project_no = htmlspecialchars($this->input->post('project_no'));
		$project_title = htmlspecialchars($this->input->post('project_title'));
		$municipality=htmlspecialchars($this->input->post('municipality'));
		$barangay=htmlspecialchars($this->input->post('barangay'));
		$type=htmlspecialchars($this->input->post('type'));
		$mode=htmlspecialchars($this->input->post('mode'));
		$ABC=htmlspecialchars($this->input->post('ABC'));
		$source=htmlspecialchars($this->input->post('source'));
		$account=htmlspecialchars($this->input->post('account'));

		if ($this->admin_model->insertNewProject($date_added, $project_no, $project_title, $municipality, $barangay, $type, $mode, $ABC, $source, $account)) {
			$this->session->set_flashdata('success', 'The new project has been added to the database.');
		}else{
			$this->session->set_flashdata('error', 'There seems to be a problem. The new project was not successfully added to the database.');
		}

		redirect('admin/addPlanView');
	}

	public function addPlanFromFileView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/addPlanFromFile');
		$this->load->view('admin/fragments/footer');
	}

	public function editPlanView(){
		$pageName['pageName'] = "edit";
		$plan_id = $this->session->userdata('plan_id');
		$data['municipalities'] = $this->admin_model->getMunicipalities();
		$data['barangays'] = $this->admin_model->getBarangays();
		$data['projTypes'] = $this->admin_model->getProjectType();
		$data['sourceFunds'] = $this->admin_model->getSourceofFunds();
		$data['accounts'] = $this->admin_model->getAccountClassification();
		$data['modes'] = $this->admin_model->getProcurementMode();
		$data['projectDetails'] = $this->admin_model->getPlanDetails($plan_id);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/projectPlanNavigation', $pageName);
		$this->load->view('admin/editPlan', $data);
		$this->load->view('admin/fragments/footer');	
	}

	public function projectTimelineView(){
		$pageName['pageName'] = "timeline";
		$plan_id = $this->session->userdata('plan_id');
		$data['projectDetails'] = $this->admin_model->getPlanDetails($plan_id);
		$data['timeLine'] = $this->admin_model->getProjectTimeline($plan_id);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/projectPlanNavigation', $pageName);
		$this->load->view('admin/projectProcurementTimeline', $data);
		$this->load->view('admin/fragments/footer');	
	}

	public function updateProcurementTimeline(){
		$plan_id = $this->session->userdata('plan_id');
		$pre_proc_date = $this->input->post('pre_proc_date');
		$advertisement_start = $this->input->post('advertisement_start');
		$advertisement_end = $this->input->post('advertisement_end');
		$pre_bid_start = $this->input->post('preBidStart');
		$pre_bid_end = $this->input->post('preBidEnd');
		$bid_submission_start = $this->input->post('bidSubmissionStart');
		$bid_submission_end = $this->input->post('bidSubmissionEnd');
		$bid_evaluation_start = $this->input->post('bidEvaluationStart');
		$bid_evaluation_end = $this->input->post('bidEvaluationEnd');
		$post_qualification_start = $this->input->post('postQualificationStart');
		$post_qualification_end = $this->input->post('postQualificationEnd');
		$award_notice_start = $this->input->post('awardNoticeIssuanceStart');
		$award_notice_end = $this->input->post('awardNoticeIssuanceEnd');
		$contract_signing_start = $this->input->post('contractSigningStart');
		$contract_signing_end = $this->input->post('contractSigningEnd');
		$authority_approval_start = $this->input->post('authorityApprovalStart');
		$authority_approval_end = $this->input->post('authorityApprovalEnd');
		$proceed_notice_start = $this->input->post('proceedNoticeStart');
		$proceed_notice_end = $this->input->post('proceedNoticeEnd');

		$this->admin_model->updateProjectTimeline($plan_id, $pre_proc_date, $advertisement_start, $advertisement_end, $pre_bid_start, $pre_bid_end, $bid_submission_start, $bid_submission_end, $bid_evaluation_start, $bid_evaluation_end, $post_qualification_start, $post_qualification_end, $award_notice_start, $award_notice_end, $contract_signing_start, $contract_signing_end, $authority_approval_start, $authority_approval_end, $proceed_notice_start, $proceed_notice_end);

		$this->admin_model->updatePreProcConfDate($plan_id, $pre_proc_date);

		redirect('admin/projectTimelineView');
		 
	}

	public function procurementActivityView(){
		$plan_id = $this->session->userdata('plan_id');
		$pageName['pageName'] = "activity";
		$data['project_title'] = $this->admin_model->getProjectTitle($plan_id)->project_title;
		$data['procActDate'] = $this->admin_model->getProcActivityDates($plan_id);
		$data['contractors'] = $this->admin_model->getContractors();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/projectPlanNavigation', $pageName);
		$this->load->view('admin/projectProcurementActivity', $data);
		$this->load->view('admin/fragments/footer');	
	}

	public function setCurrentPlanID(){
		$plan_id = $this->input->post('plan_id');

		$this->session->set_userdata('plan_id', $plan_id);

		redirect('admin/editPlanView');
	}

	public function editPlan(){
		$currentPlanID = $this->session->userdata('plan_id');

		if (!empty($_POST['project_no']) && $_POST != null) {
			$project_no = $this->input->post('project_no');
			$this->admin_model->updateProject_no($project_no, $currentPlanID);
		}

		if (!empty($_POST['project_title']) && $_POST != null) {
			$project_title = $this->input->post('project_title');
			$this->admin_model->updateProject_title($project_title, $currentPlanID);
		}

		if (isset($_POST['municipality'])) {
			$municipality = $this->input->post('municipality');
			$this->admin_model->updateMunicipality($municipality, $currentPlanID);
		}

		if (isset($_POST['barangay'])) {
			$barangay = $this->input->post('barangay');
			$this->admin_model->updateBarangay($barangay, $currentPlanID);
		}

		if (isset($_POST['type'])) {
			$type = $this->input->post('type');
			$this->admin_model->updateType($type, $currentPlanID);
		}

		if (isset($_POST['mode'])) {
			$mode = $this->input->post('mode');
			$this->admin_model->updateMode($mode, $currentPlanID);
		}

		if (!empty($_POST['ABC'])) {
			$ABC = $this->input->post('ABC');
			$this->admin_model->updateABC($ABC, $currentPlanID);
		}

		if (isset($_POST['source'])) {
			$source = $this->input->post('source');
			$this->admin_model->updateSource($source, $currentPlanID);
		}

		if (isset($_POST['account'])) {
			$account = $this->input->post('account');
			$this->admin_model->updateAccount($account, $currentPlanID);
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
		$this->load->view('admin/contractor', $data);
		$this->load->view('admin/fragments/footer');	
	}

	public function addNewContractorView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
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
		$this->load->view('admin/fund', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function addFundsView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
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
		$this->load->view('admin/projecttype', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function addProjectTypeView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
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
		$this->load->view('admin/user', $data);
		$this->load->view('admin/fragments/footer');
	}	

	public function editUsersView(){
		$userID = $this->session->userdata('userID');
		$data['userDetails'] = $this->admin_model->getUserDetails($userID);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/edituser', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function editUsers(){
		$userID = $this->session->userdata('userID');
		if(!empty($_POST['firstname'])) {
			$firstname = $this->input->post('firstname');
			$this->admin_model->updateFirstName($firstname, $userID);
		}
		if(!empty($_POST['middlename'])) {
			$middlename = $this->input->post('middlename');
			$this->admin_model->updateMiddleName($middlename, $userID);
		}
		if(!empty($_POST['lastname'])) {
			$lastname = $this->input->post('lastname');
			$this->admin_model->updateLastName($lastname, $userID);
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
		$this->load->view('admin/adduser');
		$this->load->view('admin/fragments/footer');
	}

	public function addUsers(){
		$firstname = $this->input->post('firstname');
		$middlename = $this->input->post('middlename');
		$lastname = $this->input->post('lastname');
		$usertype = $this->input->post('usertype');

		if ($this->admin_model->insertUsers($firstname, $middlename, $lastname, $usertype)) {
			$this->session->set_flashdata('success', 'New User Added!');
		}else{
			$this->session->set_flashdata('error', 'ERROR!.');
		}

		redirect('admin/addUsersView');
	}

	public function manageDatabaseView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/backres');
		$this->load->view('admin/fragments/footer');
	}

	public function manageMunicipalitiesAndBarangays(){
		$data['municipalities'] = $this->admin_model->getMunicipalities();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/municipalitiesAndBrangays', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function addMunicipalityView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/addMunicipality');
		$this->load->view('admin/fragments/footer');
	}

	public function addNewMunicipality(){
		$municipality_code = $this->input->post('municipality_code');
		$municipality = $this->input->post('municipality');

		$municipality_id = $this->admin_model->insertMunicipality($municipality_code, $municipality);

		if (!$municipality_id) {
			$this->session->set_flashdata('error', 'Erro adding municipality. Try again!');
		}else{
			if (isset($_POST['barangay_code']) && isset($_POST['barangay_name'])) {
				for ($i=0; $i < count($_POST['barangay_code']); $i++) { 
					$this->admin_model->insertBarangay($municipality_id, $_POST['barangay_code'][$i], $_POST['barangay_name'][$i]);
				}
			}
			$this->session->set_flashdata('success', 'New municipality added successfully.');
		}

		redirect('admin/addMunicipalityView');
	}

	public function editMunicipalityView(){
		$municipality_id = $this->session->userdata('municipality_id');
		$data['municipalityDetails'] = $this->admin_model->getMunicipalityDetails($municipality_id);
		$data['barangays'] = $this->admin_model->getMunicipalityBarangays($municipality_id);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
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

		if (isset($_POST['barangay_code']) && isset($_POST['barangay_name'])) {
			for ($i=0; $i < count($_POST['barangay_code']); $i++) { 
				$this->admin_model->insertBarangay($municipality_id, $_POST['barangay_code'][$i], $_POST['barangay_name'][$i]);
			}
		}

		$this->session->set_flashdata('success', 'municipality details successfully updated.');

		redirect('admin/editMunicipalityView');
	}

	public function editBarangay(){
		$barangay_id = $this->input->post('current_barangay_id');
		if (!empty($_POST['barangay_code'] || $_POST['barangay_code'] != null)) {
			$barangay_code = $this->input->post('barangay_code');
			$this->admin_model->updateBarangayCode($barangay_id, $barangay_code);
				
		}

		if (!empty($_POST['barangay'])) {
			$barangay = $this->input->post('barangay');
			$this->admin_model->updateBarangayName($barangay_id, $barangay);
		}

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
		$this->load->view('admin/accountClassifications', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function addClassificationView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
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
		$this->load->view('admin/procurementMode', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function addProcurementView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
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
		$this->load->view('admin/procurementMonitoringReport', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function procurementTimelineReport(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/projectProcurementTimelineReport');
		$this->load->view('admin/fragments/footer');
	}

	/**
	*
	*Procurement Activity
	*/


	public function preProcurementConferenceView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/preProcConference');
		$this->load->view('admin/fragments/footer');
	}
	public function advertisementView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/advertisement');
		$this->load->view('admin/fragments/footer');
	}
		public function preBidConferenceView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/preBidConference');
		$this->load->view('admin/fragments/footer');
	}
		public function eligibilityCheckView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/eligibilityCheck');
		$this->load->view('admin/fragments/footer');
	}
		public function subOpenBidsView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/subOpenBids');
		$this->load->view('admin/fragments/footer');
	}
		public function bidEvaluationView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/bidEvaluation');
		$this->load->view('admin/fragments/footer');
	}
		public function postQualificationView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/postQualification');
		$this->load->view('admin/fragments/footer');
	}
		public function noticeOfAwardView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/noticeOfAward');
		$this->load->view('admin/fragments/footer');
	}
		public function contractSigningView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/contractSigning');
		$this->load->view('admin/fragments/footer');
	}
		public function noticeToProceedView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/noticeToProceed');
		$this->load->view('admin/fragments/footer');
	}
		public function deliveryCompletionView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/deliveryCompletion');
		$this->load->view('admin/fragments/footer');
	}
		public function acceptanceTurnoverView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/acceptanceTurnover');
		$this->load->view('admin/fragments/footer');
	}

	/** Start of Manage Documents */

		public function manageDocumentsView(){
		$data['document_type'] = $this->admin_model->getDocument();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/manageDocuments', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function addDocumentsView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/addDocuments');
		$this->load->view('admin/fragments/footer');
	}

	public function addDocuments(){
		$document_name = $this->input->post('newdocuments');
		$document_numbers = $this->input->post('document_numbers');

		if ($this->admin_model->insertDocument($document_name, $document_numbers)) {
			$this->session->set_flashdata('success', 'Document Successfully Added.');
		}else{
			$this->session->set_flashdata('error', 'Error! Fund Not Added.');
		}
		redirect('admin/manageDocumentsView');
	}

	public function editDocumentsView(){
		$doc_type_id = $this->session->userdata('doc_type_id');
		$data['documentDetail'] = $this->admin_model->getDocumentDetails($doc_type_id);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/editDocument', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function setCurrentDocumentID(){
		$documentID = $this->input->post('documentID');

		$this->session->set_userdata('doc_type_id', $documentID);

		redirect('admin/editDocumentsView');
	}

	public function editDocument(){
		$documentID = $this->session->userdata('doc_type_id');
		if (!empty($_POST['document_name'])) {
			$document_name = $this->input->post('document_name');
			$this->admin_model->updateDocumentDetails($document_name, $documentID);
			$document_number = $this->input->post('doc_no');
			$this->admin_model->updateDocumentNumber($document_number, $documentID);
	}
	redirect('admin/manageDocumentsView');
	}

	/** End of Manage Document */


	/**
	*
	* Below are the methods to update proc activity dates
	*/

	public function editProcActDate(){
		$plan_id = $this->session->userdata('plan_id');
		$date = $this->input->post('activity_date');
		$activity_name = $this->input->post('activity_name');

		if ($activity_name === "pre_proc") {
			if ($this->admin_model->updatePreProcConfDate($plan_id, $date)) {
				$this->session->set_flashdata('success', "Pre-Procuremwent Conference Date Successfully Updated!");
			}else{
				$this->session->set_flashdata('error', "Error! Pre-Procuremwent Conference Date Was Not Updated! Try again.");
			}
		}

		if ($activity_name === "advertisement") {
			if ($this->admin_model->updateAdvertisementDate($plan_id, $date)) {
				$this->session->set_flashdata('success', "Advertisement Date Successfully Updated!");
			}else{
				$this->session->set_flashdata('error', "Error! Advertisement Date Was Not Updated! Try again.");
			}
		}

		if ($activity_name === "pre_bid") {
			if ($this->admin_model->updatePreBidDate($plan_id, $date)) {
				$this->session->set_flashdata('success', "Pre-Bid Conference Date Successfully Updated!");
			}else{
				$this->session->set_flashdata('error', "Error! Pre-Bid Conference Date Was Not Updated! Try again.");
			}
		}

		if ($activity_name === "open_bid") {
			if ($this->admin_model->updateOpenBidDate($plan_id, $date)) {
				$this->session->set_flashdata('success', "Bid Oppening Date Successfully Updated!");
			}else{
				$this->session->set_flashdata('error', "Error! Bid Oppening Date Was Not Updated! Try again.");
			}
		}

		if ($activity_name === "eligibility_check") {
			if ($this->admin_model->updateEligibilityCheckDate($plan_id, $date)) {
				$this->session->set_flashdata('success', "Post Qualification Date Successfully Updated!");
			}else{
				$this->session->set_flashdata('error', "Error! Post Qualification Date Was Not Updated! Try again.");
			}
		}

		if ($activity_name === "bid_evaluation") {
			if ($this->admin_model->updateBidEvaluationDate($plan_id, $date)) {
				$this->session->set_flashdata('success', "Issuance Of Notice of Award Date Successfully Updated!");
			}else{
				$this->session->set_flashdata('error', "Error! Issuance Of Notice of Award Date Was not Updated! Try again.");
			}
		}

		if ($activity_name === "post_qual") {
			if ($this->admin_model->updatePostQualDate($plan_id, $date)) {
				$this->session->set_flashdata('success', "Contract Preparation and Signing Date Successfully Updated!");
			}else{
				$this->session->set_flashdata('error', "Error! Contract Preparation and Signing Date Was Not Updated! Try again.");
			}
		}

		if ($activity_name === "awar_notice") {
			if ($this->admin_model->updateAwardNoticeDate($plan_id, $date)) {
				$this->session->set_flashdata('success', "Approval of Contract by Higher Authority Date Successfully Updated!");
			}else{
				$this->session->set_flashdata('error', "Error! Approval of Contract by Higher Authority Date Was Not Updated! Try again.");
			}
		}

		if ($activity_name === "contract_signing") {
			if ($this->admin_model->updateContractSigningDate($plan_id, $date)) {
				$this->session->set_flashdata('success', "Pre-proc Conf successfully Updated!");
			}else{
				$this->session->set_flashdata('error', "Error! Pre-proc Conf was not Updated! Try again.");
			}
		}						

		if ($activity_name === "proceed_notice") {
			if ($this->admin_model->updateProceedNoticeDate($plan_id, $date)) {
				$this->session->set_flashdata('success', "Issuance of Notice to Procced Date Successfully Updated!");
			}else{
				$this->session->set_flashdata('error', "Error! Issuance of Notice to Procced Date Was Not Updated! Try again.");
			}
		}						

		if ($activity_name === "completion") {
			if ($this->admin_model->updateDeliveryCompletionDate($plan_id, $date)) {
				$this->session->set_flashdata('success', "Delivery/Completion Date Successfully Updated!");
			}else{
				$this->session->set_flashdata('error', "Error! Delivery/Completion Date Was Not Updated! Try again.");
			}
		}

		if ($activity_name === "acceptance") {
			if ($this->admin_model->updateAcceptanceTurnoverDate($plan_id, $date)) {
				$this->session->set_flashdata('success', "Acceptance/Turnover Date Successfully Updated!");
			}else{
				$this->session->set_flashdata('error', "Error! Acceptance/Turnover Date Was Not Updated! Try again.");
			}
		}

		redirect('admin/procurementActivityView');
	}


}
