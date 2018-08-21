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
		$user_type = $this->session->userdata('user_type');
		// $data['pending_documents'] = $this->doctrack_model->getPendingDocuments($user_type);
		// $data['forwarded_documents'] = $this->doctrack_model->getForwardedDocuments($user_type);
		// $data['onhand_documents'] = $this->doctrack_model->getOnHandDocuments($user_type); 
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('doctrack/docTrack');
		$this->load->view('admin/fragments/footer');
	}

	public function projectListView(){
		$data['plans'] = $this->doctrack_model->getProjectPlansWithPOW();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('doctrack/projectList', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function ongoingDocumentTrackingView(){
		$data['plans'] = $this->doctrack_model->getOngoingDocumentTracking();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('doctrack/ongoingTracking', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function completedDocumentTrackingView(){
		$data['plans'] = $this->doctrack_model->getCompletedDocumentTracking();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('doctrack/completedTracking', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function documentDetailsView(){
		$plan_id = $this->session->userdata('plan_id_doctrack');
		$user_type = $this->session->userdata('user_type');
		//$contractor_id = $this->session->('contractor_id');
		$data['projectdetails'] = $this->doctrack_model->getProjectAndContractor($plan_id);
		$data['document_types'] = $this->doctrack_model->getDocumentTypes($plan_id);
		$data['onhand_project_documents'] = $this->doctrack_model->getProjectDocumentsOnhand($plan_id, $user_type);
		$data['other_project_documents'] = $this->doctrack_model->getProjectDocuments($plan_id, $user_type);
		$data['forwarding_logs'] = $this->doctrack_model->getProjectDocumentHistoryForwarding($plan_id);
		$data['receiving_logs'] = $this->doctrack_model->getProjectDocumentHistoryReceiving($plan_id);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('doctrack/documentDetails', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function getProjectPlanDetails(){
		$plan_id = $this->input->post('plan_id');

		$data['plan_details'] = $this->doctrack_model->getProjectPlanDetails($plan_id);

		echo json_encode($data);
	}

	public function getPendingDocuments(){
		$user_type = $this->session->userdata('user_type');
		$data['plans'] = $this->doctrack_model->getPendingDocuments($user_type);
		echo json_encode($data);
	}

	public function getOnhandDocuments(){
		$user_type = $this->session->userdata('user_type');
		$data['plans'] = $this->doctrack_model->getOnHandDocuments($user_type);
		echo json_encode($data);
	}

	public function getForwardedDocuments(){
		$user_type = $this->session->userdata('user_type');
		$data['plans'] = $this->doctrack_model->getForwardedDocuments($user_type);
		echo json_encode($data);
	}


	public function setCurrentPlanID(){
		$plan_id = $this->input->post('plan_id');

		$this->session->set_userdata('plan_id_doctrack', $plan_id);

		redirect('doctrack/documentDetailsView');
	}

	public function projectDocumentImages(){
		$plan_id = $this->session->userdata('plan_id_doctrack');
		$user_type = $this->session->userdata('user_type');
		$data['onhand_project_documents'] = $this->doctrack_model->getProjectDocumentsOnhandWithoutImage($plan_id, $user_type);
		$data['onhand_project_documents_with_image'] = $this->doctrack_model->getProjectDocumentsOnhandWithImage($plan_id, $user_type);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('doctrack/addDocumentImages', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function uploadPhoto(){
		$project_document_id = $this->input->post('document_id');

		$countfiles = count($_FILES['files']['name']);

		$config['upload_path'] = './uploads/document_image/';
		$config['allowed_types'] = 'jpg|png|jpeg';

		for($i = 0 ; $i < $countfiles ; $i++){

			$_FILES['file']['name']     = $_FILES['files']['name'][$i];
            $_FILES['file']['type']     = $_FILES['files']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
            $_FILES['file']['error']     = $_FILES['files']['error'][$i];
            $_FILES['file']['size']     = $_FILES['files']['size'][$i];

			
			
			$config['file_name'] = $project_document_id . '_' . ltrim($i, '0');
			$this->load->library('upload', $config);

			$this->upload->do_upload('file');

			$url = 'uploads/document_image/' . $config['file_name'];
			$path = './uploads/document_image/' . $config['file_name'];

			$this->doctrack_model->addDocumentImageURL($project_document_id, $url, $path);
		}
			
		redirect('doctrack/addProjectDocumentImages');

	}

	public function markProjectForImplementation(){
		$plan_id = $this->session->userdata('plan_id_doctrack');
		$user_id = $this->session->userdata('user_id');
		$remark = $this->input->post('remark_for_implementation');

		$this->doctrack_model->markProjectForImplementation($plan_id);

		$this->admin_model->recordProjectLog($plan_id, $user_id, $remark);

		redirect('capitol/docTrackView');

	}

	public function getAllImageURL(){
		$project_document_id = $this->input->post('project_document_id');

		$data['image_urls'] = $this->doctrack_model->getAllImageURL($project_document_id);

		echo json_encode($data);
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
		redirect('docTrack/docTrackView');
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

	public function getProjectDocumentHistory(){
		$plan_id = $this->input->get('plan_id');
		$current_doc_loc = $this->input->get('current_doc_loc');
		$receiver = $this->input->get('receiver');
		$type = $this->input->get('type');


		$data['forwarding_logs'] = $this->doctrack_model->getProjectDocumentHistoryForwarding($plan_id);
		$data['receiving_logs'] = $this->doctrack_model->getProjectDocumentHistoryReceiving($plan_id);

		$data['documents'] = $this->doctrack_model->getProjectDocumentsToDisplay($plan_id, $current_doc_loc, $receiver, $type);

		echo json_encode($data);
	}

	public function getFullProjectDocumentHistory(){
		$plan_id = $this->input->get('plan_id');

		$data['forwarding_logs'] = $this->doctrack_model->getProjectDocumentHistoryForwarding($plan_id);
		$data['receiving_logs'] = $this->doctrack_model->getProjectDocumentHistoryReceiving($plan_id);

		$data['documents'] = $this->doctrack_model->getAllProjectDocuments($plan_id);

		echo json_encode($data);
	}

	// public function cancelDocumentForward(){
	// 	$plan_id = $this->input->post('plan_id');
	// 	$current_doc_loc = $this->input->post('current_doc_loc');
	// 	$receiver = $this->input->post('receiver');

	// 	if ($this->doctrack_model->cancelDocumentForward($plan_id, $current_doc_loc, $receiver)) {
	// 		$data['success'] = true;
	// 	}else{
	// 		$data['success'] = false;
	// 	}
		
	// 	echo json_encode($data);
	// }

	public function getIncomingDocAlertsCount(){
		$user_type = $this->session->userdata('user_type');
		$data['alertCount'] = count($this->doctrack_model->getIncomingDocAlerts($user_type));
		echo json_encode($data);
	}

	public function getIncomingDocAlerts(){
		$user_type = $this->session->userdata('user_type');
		$data['alerts'] = $this->doctrack_model->getIncomingDocAlerts($user_type);
		echo json_encode($data);
	}

	public function deleteDocumentImage(){
		$document_id = $this->input->post('document_id');

		$image_url = $this->doctrack_model->getAllImageURL($document_id);

		foreach ($image_url as $url) {
			$path = glob($url['upload_path'] . '.*');
			if (!empty($path)) {
				unlink($path[0]);
			}
		}

		$this->doctrack_model->deleteDocumentImage($document_id);
		redirect('doctrack/addProjectDocumentImages');
	}

}