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
		$page['page'] = ''; 
		$this->load->view('doctrack/fragments/head');
		$this->load->view('doctrack/fragments/nav', $page);
		$this->load->view('doctrack/home');
		$this->load->view('doctrack/fragments/footer');
	}

	public function projectListView(){
		$year = date('Y');
		$page['page'] = 'list'; 
		$data['plans'] = $this->doctrack_model->getProjectPlansWithPOW($year);
		$this->load->view('doctrack/fragments/head');
		$this->load->view('doctrack/fragments/nav', $page);
		$this->load->view('doctrack/projectList', $data);
		$this->load->view('doctrack/fragments/footer');
	}


	public function projectListViewForPOW(){
		$year = date('Y');
		$page['page'] = 'POW';
		$data['plans'] = $this->doctrack_model->getProjectPlansWithoutPOW($year);
		$this->load->view('doctrack/fragments/head');
		$this->load->view('doctrack/fragments/nav', $page);
		$this->load->view('doctrack/projectListForPOW', $data);
		$this->load->view('doctrack/fragments/footer');
	}

	public function updatePOWAvailability(){
		$plan_id = $this->input->post('plan_id');

		if ($this->doctrack_model->updatePOWAvailabilitye($plan_id)) {
			$data['success'] = true;
		}else{
			$data['success'] = false;
		}

		echo json_encode($data);
	}

	public function docTrackView(){
		$page['page'] = 'doctrack';
		$user_type = $this->session->userdata('user_type');
		$data['pending_documents'] = $this->doctrack_model->getPendingDocuments($user_type);
		$data['forwarded_documents'] = $this->doctrack_model->getForwardedDocuments($user_type);
		$data['onhand_documents'] = $this->doctrack_model->getOnHandDocuments($user_type); 
		$this->load->view('doctrack/fragments/head');
		$this->load->view('doctrack/fragments/nav', $page);
		$this->load->view('doctrack/docTrack', $data);
		$this->load->view('doctrack/fragments/footer');
	}

	public function documentDetailsView(){
		$page['page'] = '';
		$plan_id = $this->session->userdata('plan_id_doctrack');
		$user_type = $this->session->userdata('user_type');
		$data['document_types'] = $this->doctrack_model->getDocumentTypes($plan_id);
		$data['onhand_project_documents'] = $this->doctrack_model->getProjectDocumentsOnhand($plan_id, $user_type);
		$data['other_project_documents'] = $this->doctrack_model->getProjectDocuments($plan_id, $user_type);
		$data['forwarding_logs'] = $this->doctrack_model->getProjectDocumentHistoryForwarding($plan_id);
		$data['receiving_logs'] = $this->doctrack_model->getProjectDocumentHistoryReceiving($plan_id);
		$this->load->view('doctrack/fragments/head');
		$this->load->view('doctrack/fragments/nav', $page);
		$this->load->view('doctrack/documentDetails', $data);
		$this->load->view('doctrack/fragments/footer');
	}


	public function setCurrentPlanID(){
		$plan_id = $this->input->post('plan_id');

		$this->session->set_userdata('plan_id_doctrack', $plan_id);

		redirect('capitol/documentDetailsView');
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
				$this->doctrack_model->forwardDocument($document, $plan_id, $department, $receiver);
				

				$this->doctrack_model->insertNewDocumentLogRelation($existing_doc_forward_log_id, $document);
			}
		}
		redirect('capitol/docTrackView');
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
		redirect('capitol/documentDetailsView');
	}

	public function receiveDocument(){
		$user_id = $this->session->userdata('user_id');
		$department = $this->session->userdata('user_type');
		$plan_id = $this->input->post('plan_id');
		$sender = $this->input->post('sender');

		$receive_id = $this->doctrack_model->getReceivedDocumentID($plan_id, $department, $sender);

		if (count($receive_id) < 1) {
			$data['success'] = false;
		}else{
			$new_log_id = $this->doctrack_model->insertNewReceivedLog($user_id);

			foreach ($receive_id as $id) {
				$this->doctrack_model->insertNewDocumentLogRelation($new_log_id, $id['project_document_id']);
				$this->doctrack_model->updateDocumentDetails($id['project_document_id'], $plan_id, $department, $sender);
			}

			$data['success'] = true;
		}
			
		
		echo json_encode($data);
	}

	public function cancelDocumentForward(){
		$plan_id = $this->input->post('plan_id');
		$current_doc_loc = $this->input->post('current_doc_loc');
		$receiver = $this->input->post('receiver');

		if ($this->doctrack_model->cancelDocumentForward($plan_id, $current_doc_loc, $receiver)) {
			$data['success'] = true;
		}else{
			$data['success'] = false;
		}
		
		echo json_encode($data);
	}

}