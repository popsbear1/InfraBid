<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('user_model');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('index');

	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if ($this->user_model->login($username, $password)) {
			redirect('admin');
		}else{
			redirect('index');
		}

	}
}
