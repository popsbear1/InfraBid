<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BAC_TWG extends CI_Controller {

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
		$this->load->view('twg/fragments/head');
		$this->load->view('twg/fragments/nav');
		$this->load->view('twg/home');
		$this->load->view('twg/fragments/footer');
	}
}
