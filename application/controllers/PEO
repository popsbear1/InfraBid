<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PEO extends CI_Controller {

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
		$this->load->view('peo/fragments/head');
		$this->load->view('peo/fragments/nav');
		$this->load->view('peo/home');
		$this->load->view('peo/fragments/footer');
	}
}
