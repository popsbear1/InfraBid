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
		$this->load->view('admin/static/head.html');
		$this->load->view('admin/static/nav.html');
		$this->load->view('admin/static/dashboard.html');
		$this->load->view('admin/home', $data);
		$this->load->view('admin/static/footer.html');

	}

}
