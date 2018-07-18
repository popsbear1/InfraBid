<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Capitol extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('doctrack_model');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index(){
		$this->load->view('doctrack/fragments/head');
		$this->load->view('doctrack/fragments/nav');
		$this->load->view('doctrack/home');
		$this->load->view('doctrack/fragments/footer');
	}

	public function projectListView(){
		$year = date('Y');
		$data['plans'] = $this->doctrack_model->getProjectPlans($year);
		$this->load->view('doctrack/fragments/head');
		$this->load->view('doctrack/fragments/nav');
		$this->load->view('doctrack/projectList', $data);
		$this->load->view('doctrack/fragments/footer');
	}

	public function docTrackView(){
		$user_type = $this->session->userdata('user_type');
		$data['pending_documents'] = $this->doctrack_model->getPendingDocuments($user_type);
		$data['forwarded_documents'] = $this->doctrack_model->getForwardedDocuments($user_type);
		$data['onhand_documents'] = $this->doctrack_model->getOnHandDocuments($user_type); 
		$this->load->view('doctrack/fragments/head');
		$this->load->view('doctrack/fragments/nav');
		$this->load->view('doctrack/docTrack', $data);
		$this->load->view('doctrack/fragments/footer');
	}

	public function documentDetailsView(){
		$plan_id = $this->session->userdata('plan_id_doctrack');
		$user_type = $this->session->userdata('user_type');
		$pageName['pageName'] = "edit";
		$data['document_types'] = $this->doctrack_model->getDocumentTypes($plan_id);
		$data['project_documents'] = $this->doctrack_model->getProjectDocuments($plan_id, $user_type);
		$this->load->view('doctrack/fragments/head');
		$this->load->view('doctrack/fragments/nav');
		$this->load->view('doctrack/fragments/docTrackNavigation', $pageName);
		$this->load->view('doctrack/documentDetails', $data);
		$this->load->view('doctrack/fragments/footer');
	}

	public function historyView(){
		$data['logs'] = $this->doctrack_model->getHistory();
		$this->load->view('doctrack/fragments/head');
		$this->load->view('doctrack/fragments/nav');
		$this->load->view('doctrack/fragments/docTrackNavigation');
		$this->load->view('doctrack/historyView', $data);
		$this->load->view('doctrack/fragments/footer');
	}

	public function setCurrentPlanID(){
		$plan_id = $this->input->post('plan_id');

		$this->session->set_userdata('plan_id_doctrack', $plan_id);

		redirect('capitol/documentDetailsView');
	}

	public function manageProjectDocuments(){
		$plan_id = $this->session->userdata('plan_id_doctrack');
		$user_id = $this->session->userdata('user_id');
		$department = $this->session->userdata('user_type');

		$receiver = $this->input->post('department');
		$remark = $this->input->post('forward_remark');

		if (!empty($this->input->post('project_document[]'))) {
			foreach (!empty($this->input->post('project_document[]')) as $document) {
				$this->doctrack_model->forwardDocument($document, $receiver);
				$existing_doc_forward_log_id = $this->db->insertNewLog($remark, 'send', $user_id);

				$this->doctrack_model->insertNewDocumentLogRelation($existing_doc_forward_log_id, $document);
			}
		}
		if (!empty($this->input->post('document_type[]'))) {
			foreach ($this->input->post('document_type[]') as $doc_type_id) {
				$new_document_id = $this->doctrack_model->addProjectDocument($plan_id, $doc_type_id, $user_id, $receiver, $department);
				$new_doc_forward_log_id = $this->doctrack_model->insertNewLog($remark, 'send', $user_id);

				$this->doctrack_model->insertNewDocumentLogRelation($new_doc_forward_log_id, $new_document_id);
			}
		}

		redirect('capitol/documentDetailsView');
	}
}
