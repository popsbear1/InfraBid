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
}