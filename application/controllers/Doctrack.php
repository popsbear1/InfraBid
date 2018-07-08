<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctrack extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('doctrack_model');
		$this->load->model('admin_model');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	public function docTrackView(){
		$data['plans'] = $this->admin_model->getProjectPlan(1212);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('doctrack/docTrack', $data);
		$this->load->view('admin/fragments/footer');
	}

		public function documentDetailsView(){
		$pageName['pageName'] = "edit";
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('doctrack/fragments/docTrackNavigation', $pageName);
		$this->load->view('doctrack/documentDetails');
		$this->load->view('admin/fragments/footer');
	}

	public function historyView(){
		$data['logs'] = $this->doctrack_model->getHistory();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('doctrack/fragments/docTrackNavigation');
		$this->load->view('doctrack/historyView', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function documentTrackHomeView(){
		$pageName['pageName'] = "home";
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('doctrack/fragments/documentTrackNavigation', $pageName);
		$this->load->view('doctrack/documentTrackHome');
		$this->load->view('admin/fragments/footer');
	}


	public function documentsOnHandView(){
		$pageName['pageName'] = "onHand";
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('doctrack/fragments/documentTrackNavigation', $pageName);
		$this->load->view('doctrack/projectList');
		$this->load->view('admin/fragments/footer');
	}

	public function incomingDocumentsView(){
		$pageName['pageName'] = "incoming";
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('doctrack/fragments/documentTrackNavigation', $pageName);
		$this->load->view('doctrack/projectList');
		$this->load->view('admin/fragments/footer');
	}

	public function onRouteDocumentsView(){
		$pageName['pageName'] = "onRoute";
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('doctrack/fragments/documentTrackNavigation', $pageName);
		$this->load->view('doctrack/projectList');
		$this->load->view('admin/fragments/footer');
	}

}