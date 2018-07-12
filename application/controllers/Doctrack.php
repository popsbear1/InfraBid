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
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('doctrack/docTrack');
		$this->load->view('admin/fragments/footer');
	}

		public function documentDetailsView(){
		$pageName['pageName'] = "edit";
		$data['document_types'] = $this->doctrack_model->getDocumentTypes();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('doctrack/fragments/docTrackNavigation', $pageName);
		$this->load->view('doctrack/documentDetails', $data);
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
		$pageName['pageName'] = "home";
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('doctrack/fragments/documentTrackNavigation', $pageName);
		$this->load->view('doctrack/documentTrackHome', $data);
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