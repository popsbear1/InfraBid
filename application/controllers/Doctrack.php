<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctrack extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('admin_model');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	public function docTrackView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('doctrack/docTrack');
		$this->load->view('admin/fragments/footer');
	}

		public function documentDetailsView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/dashboard');
		$this->load->view('doctrack/documentDetails');
		$this->load->view('admin/fragments/footer');
	}
}