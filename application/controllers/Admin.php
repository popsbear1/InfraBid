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
		$data['procacts'] = $this->admin_model->getProcurementProjects();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/home', $data);
		$this->load->view('admin/fragments/footer');

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

	public function editPlanView(){
		$project_no = $this->session->userdata('project_no');
		$data['municipalities'] = $this->admin_model->getMunicipalities();
		$data['barangays'] = $this->admin_model->getBarangays();
		$data['projTypes'] = $this->admin_model->getProjectType();
		$data['sourceFunds'] = $this->admin_model->getSourceofFunds();
		$data['projectDetails'] = $this->admin_model->getPlanDetails($project_no);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('admin/editPlan', $data);
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
			$project_no = $this->input->post('project_no');
			$this->admin_model->updateProject_no($project_no, $currentPlanNumer);
			$this->session->set_userdata('project_no', $project_no);
		}

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

		$this->session->set_flashdata('success', 'Plan Details Updated.');

		redirect('admin/editPlanView');
	}

}
