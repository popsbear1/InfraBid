<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctrack extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('doctrack_model');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function docTrackView(){
		$user_type = $this->session->userdata('user_type');
		$data['pending_documents'] = $this->doctrack_model->getPendingDocuments($user_type);
		$data['forwarded_documents'] = $this->doctrack_model->getForwardedDocuments($user_type);
		$data['onhand_documents'] = $this->doctrack_model->getOnHandDocuments($user_type); 
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('doctrack/docTrack', $data);
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
		$data['document_types'] = $this->doctrack_model->getDocumentTypes($plan_id);
		$data['project_documents'] = $this->doctrack_model->getProjectDocuments($plan_id, $user_type);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('doctrack/documentDetails', $data);
		$this->load->view('admin/fragments/footer');
	}


	public function setCurrentPlanID(){
		$plan_id = $this->input->post('plan_id');

		$this->session->set_userdata('plan_id_doctrack', $plan_id);

		redirect('doctrack/documentDetailsView');
	}

	public function sendProjectDocuments(){
		$plan_id = $this->session->userdata('plan_id_doctrack');
		$user_id = $this->session->userdata('user_id');
		$department = $this->session->userdata('user_type');

		$receiver = $this->input->post('department');
		$remark = $this->input->post('forward_remark');

		$existing_doc_forward_log_id = $this->doctrack_model->insertNewLog($remark, 'send', $user_id);

		if ($this->input->post('project_document[]') !== null) {
			foreach ($this->input->post('project_document[]') as $document) {
				$this->doctrack_model->forwardDocument($document, $receiver);
				

				$this->doctrack_model->insertNewDocumentLogRelation($existing_doc_forward_log_id, $document);
			}
		}
		redirect('docTrack/documentDetailsView');
	}

	public function addNewProjectDocument(){
		$plan_id = $this->session->userdata('plan_id_doctrack');
		$user_id = $this->session->userdata('user_id');
		$department = $this->session->userdata('user_type');
		if (!empty($this->input->post('document_type[]'))) {
			foreach ($this->input->post('document_type[]') as $doc_type_id) {
				$this->doctrack_model->addProjectDocument($plan_id, $doc_type_id, $user_id, $department);
			}
		}
		redirect('docTrack/documentDetailsView');
	}

	public function receiveDocument(){
		$plan_id = $this->session->userdata('plan_id_doctrack');
		$user_id = $this->session->userdata('user_id');
		$department = $this->session->userdata('user_type');
		$sender = $this->input->post('sender');

		$receive_id = $this->doctrack_model->getReceivedDocumentID($plan_id, $department, $sender);
		$new_log_id = $this->doctrack_model->insertNewReceivedLog($user_id);
		foreach ($receive_id as $id) {
			
			$this->doctrack_model->insertNewDocumentLogRelation($new_log_id, $id['project_document_id']);
			$this->doctrack_model->updateDocumentDetails($id, $plan_id, $department, $sender);
		}
		
		redirect('doctrack/docTrackView');
	}
}