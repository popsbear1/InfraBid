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

	public function projectListView(){
		$year = date('Y');
		$data['plans'] = $this->doctrack_model->getProjectPlans($year);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('doctrack/projectList', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function documentDetailsView(){
		$plan_id = $this->session->userdata('plan_id_doctrack');
		$user_type = $this->session->userdata('user_type');
		$pageName['pageName'] = "edit";
		$data['document_types'] = $this->doctrack_model->getDocumentTypes();
		$data['project_documents'] = $this->doctrack_model->getProjectDocuments($plan_id, $user_type);
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

	public function setCurrentPlanID(){
		$plan_id = $this->input->post('plan_id');

		$this->session->set_userdata('plan_id_doctrack', $plan_id);

		redirect('doctrack/documentDetailsView');
	}

	public function manageProjectDocuments(){
		$plan_id = $this->session->userdata('plan_id_doctrack');
		$user_id = $this->session->userdata('user_id');
		$department = $this->session->userdata('user_type');
		if (!empty($this->input->post('project_document[]'))) {
			foreach (!empty($this->input->post('project_document[]') as $document) {
				$this->doctrack_model->forwardDocument($plan_id, $doc_type_id, );
			}
		}
		if (!empty($this->input->post('document_type[]'))) {
			foreach ($this->input->post('document_type[]') as $doc_type_id) {
				$this->doctrack_model->addProjectDocument($plan_id, $doc_type_id, $user_id, $department);
			}
		}

		redirect('docTrack/documentDetailsView');
	}
}