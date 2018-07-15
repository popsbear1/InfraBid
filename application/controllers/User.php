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

		$userData = $this->user_model->login($username, $password);

		if ($userData) {

			$this->session->set_userdata('user_id', $userData['user_id']);
			$this->session->set_userdata('username', $userData['username']);
			$this->session->set_userdata('user_type', $userData['user_type']);

			if ($userData['user_type'] === 'BAC_SEC') {
				redirect('admin');
			}elseif ($userData['user_type'] === 'PEO') {
				redirect('peo');
			}elseif ($userData['user_type'] === 'PGO') {
				redirect('pgo');
			}elseif ($userData['user_type'] === 'BAC_TWG') {
				redirect('bac_twg');
			}
		}else{
			redirect('user');
		}

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('user');
	}
}
