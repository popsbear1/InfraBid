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
}