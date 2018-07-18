<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Capitol extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('doctrack_model');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('doctrack/fragments/head');
		$this->load->view('doctrack/fragments/nav');
		$this->load->view('doctrack/home');
		$this->load->view('doctrack/fragments/footer');
	}

	public function projectListView(){
		$year = date('Y');
		$data['plans'] = $this->doctrack_model->getProjectPlans($year);
		$this->load->view('doctrack/fragments/head');
		$this->load->view('doctrack/fragments/nav');
		$this->load->view('doctrack/projectList', $data);
		$this->load->view('doctrack/fragments/footer');
	}

	public function docTrackView(){
		$user_type = $this->session->userdata('user_type');
		$data['pending_documents'] = $this->doctrack_model->getPendingDocuments($user_type);
		$data['forwarded_documents'] = $this->doctrack_model->getForwardedDocuments($user_type);
		$data['onhand_documents'] = $this->doctrack_model->getOnHandDocuments($user_type); 
		$this->load->view('doctrack/fragments/head');
		$this->load->view('doctrack/fragments/nav');
		$this->load->view('doctrack/docTrack', $data);
		$this->load->view('doctrack/fragments/footer');
	}
}
