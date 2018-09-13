<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('admin_model');
		$this->load->model('notif_model');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$cur_date = date('Y-m-d');
		$end = date_format(date_add(date_create($cur_date),date_interval_create_from_date_string("2 days")), 'Y-m-d');

		$data['allAPPCount'] = $this->notif_model->countAllAPP();
		$data['ongoingCount'] = $this->notif_model->countAllOngoing();
		$data['forReviewCount'] = $this->notif_model->countAllReview();
		$data['completedCount'] = $this->notif_model->countAllCompleted();
		//incoming
		$advertisement_incoming = $this->notif_model->getIncomingAdvertisement($cur_date, $end);
		$pre_bid_incoming = $this->notif_model->getIncomingPre_bid($cur_date, $end);
		$bid_submission_incoming = $this->notif_model->getIncomingBid_submission($cur_date, $end);
		$bid_evaluation_incoming = $this->notif_model->getIncomingBid_evaluation($cur_date, $end);
		$post_qualification_incoming = $this->notif_model->getIncomingPost_qualification($cur_date, $end);
		$award_notice_incoming = $this->notif_model->getIncomingAward_notice($cur_date, $end);
		$contract_signing_incoming = $this->notif_model->getIncomingContract_signing($cur_date, $end);
		$authority_approval_incoming = $this->notif_model->getIncomingAuthority_approval($cur_date, $end);
		$proceed_notice_incoming = $this->notif_model->getIncomingProceed_notice($cur_date, $end);

		$data['plans_coming'] = array_merge($advertisement_incoming, $pre_bid_incoming, $bid_submission_incoming, $bid_evaluation_incoming, $post_qualification_incoming, $award_notice_incoming, $contract_signing_incoming, $authority_approval_incoming, $proceed_notice_incoming);

		//ending
		$advertisement_due = $this->notif_model->getDueAdvertisementDate($cur_date, $end);
		$pre_bid_due = $this->notif_model->getDuePre_bid($cur_date, $end);
		$bid_submission_due = $this->notif_model->getDueBid_submission($cur_date, $end);
		$bid_evaluation_due = $this->notif_model->getDueBid_evaluation($cur_date, $end);
		$post_qualification_due = $this->notif_model->getDuePost_qualification($cur_date, $end);
		$award_notice_due = $this->notif_model->getDueAward_notice($cur_date, $end);
		$contract_signing_due = $this->notif_model->getDueContract_signing($cur_date, $end);
		$authority_approval_due = $this->notif_model->getDueAuthority_approval($cur_date, $end);
		$proceed_notice_due = $this->notif_model->getDueProceed_notice($cur_date, $end);

		$data['plans_due'] = array_merge($advertisement_due, $pre_bid_due, $bid_submission_due, $bid_evaluation_due, $post_qualification_due, $award_notice_due, $contract_signing_due, $authority_approval_due, $proceed_notice_due);

		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/home', $data);
		$this->load->view('admin/fragments/footer');

	}

	public function getPlanDateRange(){
		$start_date = date_format(date_create($this->input->get('start_date')), 'Y-m-d');
		$end_date = date_format(date_create($this->input->get('end_date')), 'Y-m-d');

		$advertisement = $this->notif_model->getDateRangeAdvertisement($start_date, $end_date);
		$pre_bid = $this->notif_model->getDateRangePre_bid($start_date, $end_date);
		$bid_submission = $this->notif_model->getDateRangeBid_submission($start_date, $end_date);
		$bid_evaluation = $this->notif_model->getDateRangeBid_evaluation($start_date, $end_date);
		$post_qual = $this->notif_model->getDateRangePost_qualification($start_date, $end_date);
		$award_notice = $this->notif_model->getDateRangeAward_notice($start_date, $end_date);
		$contract_signing = $this->notif_model->getDateRangeContract_signing($start_date, $end_date);
		$authority_approval = $this->notif_model->getDateRangeAuthority_approval($start_date, $end_date);
		$proceed_notice = $this->notif_model->getDateRangeProceed_notice($start_date, $end_date);

		$data['plans'] = array_merge($advertisement, $pre_bid, $bid_submission, $bid_evaluation, $post_qual, $award_notice, $contract_signing, $authority_approval, $proceed_notice);

		echo json_encode($data);
	}

	public function setNavControl(){
		$sideBarControl = $this->session->userdata('sideBarControl');
		if ($sideBarControl == 1) {
			$this->session->set_userdata('sideBarControl', 0);
		}else{
			$this->session->set_userdata('sideBarControl', 1);
		}
		
	}

	public function deleteProjectPlan(){
		$plan_id = $this->input->post('plan_id');
		$project_type = $this->input->post('project_type');

		$this->admin_model->deleteProjectPlan($plan_id);

		if ($project_type == 'regular') {
			redirect('admin/regularPlanListView');
		}else{
			redirect('admin/supplementalPlanListView');
		}
	}

	public function regularPlanListView(){
		$year = date('Y');
		$mode = null;
		$status = null;
		$municipality = null;
		$source = null;
		$projecttype = null;
		$data['year'] = date('Y');
		$data['plans'] = $this->admin_model->getRegularPlan($year, $mode, $status, $municipality, $source, $projecttype);
		$data['municipalities'] = $this->admin_model->getMunicipalities();
		$data['sources'] = $this->admin_model->getRegularFunds();
		$data['types'] = $this->admin_model->getProjectType();
		$data['modes'] = $this->admin_model->getProcurementMode();
		$data['count_total'] = $this->admin_model->getRegularProjectPlanCountTotal($year, $mode, $status, $municipality,$source,$projecttype);
		for($i=0; $i < count($data['plans']); $i++) {
			if ($data['plans'][$i]['advertisement'] != null) {
				$data['plans'][$i]['abc_post_date'] = date_format(date_create($data['plans'][$i]['advertisement']), 'M-d-y');
			}
			if ($data['plans'][$i]['open_bid'] != null) {
				$data['plans'][$i]['sub_open_date'] = date_format(date_create($data['plans'][$i]['open_bid']), 'M-d-y');
			}
			if ($data['plans'][$i]['award_notice'] != null) {
				$data['plans'][$i]['award_notice_date'] = date_format(date_create($data['plans'][$i]['award_notice']), 'M-d-y');
			}
			if ($data['plans'][$i]['contract_signing'] != null) {
				$data['plans'][$i]['contract_signing_date'] = date_format(date_create($data['plans'][$i]['contract_signing']), 'M-d-y');
			}
		}
		if ($data['count_total']['total_abc'] > 0 ) {
			$total = explode('.', $data['count_total']['total_abc']);
			$formatter = new NumberFormatter("en_US", NumberFormatter::SPELLOUT);
			$data['count_total']['total_abc_word_format'] = $formatter->format($total[0]) . ' and ' . $formatter->format($total[1]);
		}else{
			$data['count_total']['total_abc_word_format'] = 'none';
		}
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/regularPlanList', $data);
		$this->load->view('admin/fragments/footer');		
	}

	public function getFilteredRegularPlanData(){
		$year = $this->input->get('year');
		$mode = $this->input->get('mode');
		$status = $this->input->get('status');
		$municipality = $this->input->get('municipality');
		$source = $this->input->get('source');
		$type = $this->input->get('type');

		if (empty($year)) {
			$year = null;
		}
		if (empty($mode)) {
			$mode = null;
		}
		if (empty($status)) {
			$status = null;
		}
		if (empty($municipality)) {
			$municipality = null;
		}
		if(empty($source)) {
			$source = null;
		}
		if(empty($type)){
			$type = null;
		}

		$data['plans'] = $this->admin_model->getRegularPlan($year, $mode, $status, $municipality, $source, $type);

		$data['count_total'] = $this->admin_model->getRegularProjectPlanCountTotal($year, $mode, $status, $municipality, $source, $type);
		for($i=0; $i < count($data['plans']); $i++) {
			if ($data['plans'][$i]['advertisement'] != null) {
				$data['plans'][$i]['abc_post_date'] = date_format(date_create($data['plans'][$i]['advertisement']), 'M-d-y');
			}
			if ($data['plans'][$i]['open_bid'] != null) {
				$data['plans'][$i]['sub_open_date'] = date_format(date_create($data['plans'][$i]['open_bid']), 'M-d-y');
			}
			if ($data['plans'][$i]['award_notice'] != null) {
				$data['plans'][$i]['award_notice_date'] = date_format(date_create($data['plans'][$i]['award_notice']), 'M-d-y');
			}
			if ($data['plans'][$i]['contract_signing'] != null) {
				$data['plans'][$i]['contract_signing_date'] = date_format(date_create($data['plans'][$i]['contract_signing']), 'M-d-y');
			}
		}		
		$total = explode('.', $data['count_total']['total_abc']);
		$formatter = new NumberFormatter("en_US", NumberFormatter::SPELLOUT);
		if ($data['count_total']['total_abc'] > 0) {
			$data['count_total']['total_abc_word_format'] = $formatter->format($total[0]) . ' and ' . $formatter->format($total[1]);
		}
		$data['count_total']['total_abc'] = number_format($data['count_total']['total_abc'], 2);

		echo json_encode($data);
	}

	public function supplementalPlanListView(){
		$year = date('Y');
		$mode = null;
		$status = null;
		$municipality = null;
		$source = null;
		$projecttype = null;
		$data['year'] = date('Y');
		$data['plans'] = $this->admin_model->getSupplementalPlan($year, $mode, $status, $municipality, $source, $projecttype);
		$data['municipalities'] = $this->admin_model->getMunicipalities();
		$data['sources'] = $this->admin_model->getSupplementalFunds();
		$data['types'] = $this->admin_model->getProjectType();
		$data['modes'] = $this->admin_model->getProcurementMode();
		$data['count_total'] = $this->admin_model->getSupplementalProjectPlanCountTotal($year, $mode, $status, $municipality,$source,$projecttype);
		for($i=0; $i < count($data['plans']); $i++) {
			if ($data['plans'][$i]['advertisement'] != null) {
				$data['plans'][$i]['abc_post_date'] = date_format(date_create($data['plans'][$i]['advertisement']), 'M-d-y');
			}
			if ($data['plans'][$i]['open_bid'] != null) {
				$data['plans'][$i]['sub_open_date'] = date_format(date_create($data['plans'][$i]['open_bid']), 'M-d-y');
			}
			if ($data['plans'][$i]['award_notice'] != null) {
				$data['plans'][$i]['award_notice_date'] = date_format(date_create($data['plans'][$i]['award_notice']), 'M-d-y');
			}
			if ($data['plans'][$i]['contract_signing'] != null) {
				$data['plans'][$i]['contract_signing_date'] = date_format(date_create($data['plans'][$i]['contract_signing']), 'M-d-y');
			}
		}
		if ($data['count_total']['total_abc'] > 0 ) {
			$total = explode('.', $data['count_total']['total_abc']);
			$formatter = new NumberFormatter("en_US", NumberFormatter::SPELLOUT);
			$data['count_total']['total_abc_word_format'] = $formatter->format($total[0]) . ' and ' . $formatter->format($total[1]);
		}else{
			$data['count_total']['total_abc_word_format'] = 'none';
		}	
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/supplementalPlanList', $data);
		$this->load->view('admin/fragments/footer');	
	}

	public function getFilteredSupplementalPlanData(){
		$year = $this->input->get('year');
		$mode = $this->input->get('mode');
		$status = $this->input->get('status');
		$municipality = $this->input->get('municipality');
		$source = $this->input->get('source');
		$type = $this->input->get('type');

		if (empty($year)) {
			$year = null;
		}
		if (empty($mode)) {
			$mode = null;
		}
		if (empty($status)) {
			$status = null;
		}
		if (empty($municipality)) {
			$municipality = null;
		}
		if(empty($source)) {
			$source = null;
		}
		if(empty($type)){
			$type = null;
		}

		$data['plans'] = $this->admin_model->getSupplementalPlan($year, $mode, $status, $municipality, $source, $type);

		$data['count_total'] = $this->admin_model->getSupplementalProjectPlanCountTotal($year, $mode, $status, $municipality, $source, $type);
		for($i=0; $i < count($data['plans']); $i++) {
			if ($data['plans'][$i]['advertisement'] != null) {
				$data['plans'][$i]['abc_post_date'] = date_format(date_create($data['plans'][$i]['advertisement']), 'M-d-y');
			}
			if ($data['plans'][$i]['open_bid'] != null) {
				$data['plans'][$i]['sub_open_date'] = date_format(date_create($data['plans'][$i]['open_bid']), 'M-d-y');
			}
			if ($data['plans'][$i]['award_notice'] != null) {
				$data['plans'][$i]['award_notice_date'] = date_format(date_create($data['plans'][$i]['award_notice']), 'M-d-y');
			}
			if ($data['plans'][$i]['contract_signing'] != null) {
				$data['plans'][$i]['contract_signing_date'] = date_format(date_create($data['plans'][$i]['contract_signing']), 'M-d-y');
			}
		}		
		$total = explode('.', $data['count_total']['total_abc']);
		$formatter = new NumberFormatter("en_US", NumberFormatter::SPELLOUT);
		if ($data['count_total']['total_abc'] > 0) {
			$data['count_total']['total_abc_word_format'] = $formatter->format($total[0]) . ' and ' . $formatter->format($total[1]);
		}
		$data['count_total']['total_abc'] = number_format($data['count_total']['total_abc'], 2);

		echo json_encode($data);
	}

	public function ongoingProjectPlanView(){
		$year = date('Y');
		$apptype = null;
		$status = null;
		$municipality = null;
		$source = null;
		$projecttype = null;
		$data['year'] = date('Y');
		$data['plans'] = $this->admin_model->getOngoingProjectPlan($year, $apptype, $status, $municipality,$source,$projecttype);
		$data['municipalities'] = $this->admin_model->getMunicipalities();
		$data['sources'] = $this->admin_model->getFunds();
		$data['types'] = $this->admin_model->getProjectType();
		$data['count_total'] = $this->admin_model->getOngoingProjectPlanCountTotal($year, $apptype, $status, $municipality,$source,$projecttype);
		for($i=0; $i < count($data['plans']); $i++) {
			if ($data['plans'][$i]['advertisement'] != null) {
				$data['plans'][$i]['abc_post_date'] = date_format(date_create($data['plans'][$i]['advertisement']), 'M-d-y');
			}
			if ($data['plans'][$i]['open_bid'] != null) {
				$data['plans'][$i]['sub_open_date'] = date_format(date_create($data['plans'][$i]['open_bid']), 'M-d-y');
			}
			if ($data['plans'][$i]['award_notice'] != null) {
				$data['plans'][$i]['award_notice_date'] = date_format(date_create($data['plans'][$i]['award_notice']), 'M-d-y');
			}
			if ($data['plans'][$i]['contract_signing'] != null) {
				$data['plans'][$i]['contract_signing_date'] = date_format(date_create($data['plans'][$i]['contract_signing']), 'M-d-y');
			}
		}
		if ($data['count_total']['total_abc'] > 0 ) {
			$total = explode('.', $data['count_total']['total_abc']);
			$formatter = new NumberFormatter("en_US", NumberFormatter::SPELLOUT);
			$data['count_total']['total_abc_word_format'] = $formatter->format($total[0]) . ' and ' . $formatter->format($total[1]);
		}else{
			$data['count_total']['total_abc_word_format'] = 'none';
		}
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/ongoingProjectPlan', $data);
		$this->load->view('admin/fragments/footer');
	}



	public function getFilteredOngoingPlanData(){
		$year = $this->input->get('year');
		$apptype = $this->input->get('apptype');
		$status = $this->input->get('status');
		$municipality = $this->input->get('municipality');
		$source = $this->input->get('source');
		$type = $this->input->get('type');

		if (empty($year)) {
			$year = null;
		}
		if (empty($apptype)) {
			$apptype = null;
		}
		if (empty($status)) {
			$status = null;
		}
		if (empty($municipality)) {
			$municipality = null;
		}
		if(empty($source)) {
			$source = null;
		}
		if(empty($type)){
			$type = null;
		}

		$data['plans'] = $this->admin_model->getOngoingProjectPlan($year, $apptype, $status, $municipality, $source, $type);
		$data['count_total'] = $this->admin_model->getOngoingProjectPlanCountTotal($year, $apptype, $status, $municipality, $source, $type);
		for($i=0; $i < count($data['plans']); $i++) {
			if ($data['plans'][$i]['advertisement'] != null) {
				$data['plans'][$i]['abc_post_date'] = date_format(date_create($data['plans'][$i]['advertisement']), 'M-d-y');
			}
			if ($data['plans'][$i]['open_bid'] != null) {
				$data['plans'][$i]['sub_open_date'] = date_format(date_create($data['plans'][$i]['open_bid']), 'M-d-y');
			}
			if ($data['plans'][$i]['award_notice'] != null) {
				$data['plans'][$i]['award_notice_date'] = date_format(date_create($data['plans'][$i]['award_notice']), 'M-d-y');
			}
			if ($data['plans'][$i]['contract_signing'] != null) {
				$data['plans'][$i]['contract_signing_date'] = date_format(date_create($data['plans'][$i]['contract_signing']), 'M-d-y');
			}
		}		
		$total = explode('.', $data['count_total']['total_abc']);
		$formatter = new NumberFormatter("en_US", NumberFormatter::SPELLOUT);
		if ($data['count_total']['total_abc'] > 0) {
			$data['count_total']['total_abc_word_format'] = $formatter->format($total[0]) . ' and ' . $formatter->format($total[1]);
		}
		$data['count_total']['total_abc'] = number_format($data['count_total']['total_abc'], 2);

		echo json_encode($data);
	}


	public function projectDetailsView(){
		$projectNavControl['pageName'] = "details";
		$plan_id = $this->session->userdata('plan_id');
		$projectNavControl['prev_loc'] = $this->session->userdata('prev_loc');	
		$projectNavControl['projectStatus'] = $this->admin_model->getProjectPlanStatus($plan_id)->status;
		$data['projectDetails'] = $this->admin_model->getPlanDetails($plan_id);
		$data['logs'] = $this->admin_model->getProjectLogs($plan_id);
		$data['timeLine'] = $this->admin_model->getProjectTimeline($plan_id);
		$data['actdates'] = $this->admin_model->getProcActivityDates($plan_id);
		$data['bidders'] = $this->admin_model->getProjectBids($plan_id);
		$data['activity_observers'] = $this->admin_model->getActivityObservers($plan_id);
		for ($i=0; $i < sizeOf($data['activity_observers']); $i++) { 
			if ($data['activity_observers'][$i]['activity_name'] == 'pre_bid') {
				$data['activity_observers'][$i]['activity_name'] = 'Pre-bid';
			}
			if ($data['activity_observers'][$i]['activity_name'] == 'eligibility') {
				$data['activity_observers'][$i]['activity_name'] = 'Eligibility Check';
			}
			if ($data['activity_observers'][$i]['activity_name'] == 'sub_open') {
				$data['activity_observers'][$i]['activity_name'] = 'Submission/Open of Bids';
			}
			if ($data['activity_observers'][$i]['activity_name'] == 'bid_evaluation') {
				$data['activity_observers'][$i]['activity_name'] = 'Bid Evaluation';
			}
			if ($data['activity_observers'][$i]['activity_name'] == 'post_qual') {
				$data['activity_observers'][$i]['activity_name'] = 'Post Qualification';
			}
			if ($data['activity_observers'][$i]['activity_name'] == 'delivery_completion') {
				$data['activity_observers'][$i]['activity_name'] = 'Delivery/Completion';
			}
		}
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/projectPlanNavigation', $projectNavControl);
		$this->load->view('admin/projectPlanDetailsPage', $data);
		$this->load->view('admin/fragments/footer');	
	}

	public function procActStatusView(){
		$data['projects'] = $this->admin_model->getAllProjectActivityStatus();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/procActStatus', $data);
		$this->load->view('admin/fragments/footer');
	}


	public function addRegularPlanView(){
		$data['currentDate'] = date('Y-m-d');
		$data['currentYear'] = date('Y');
		$data['municipalities'] = $this->admin_model->getActiveMunicipalities();
		$data['barangays'] = $this->admin_model->getBarangays();
		$data['projTypes'] = $this->admin_model->getActiveProjectType();
		$data['sourceFunds'] = $this->admin_model->getActiveSourceofFunds('regular');
		$data['accounts'] = $this->admin_model->getActiveAccountClassification();
		$data['modes'] = $this->admin_model->getActiveProcurementMode();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/addRegularPlan', $data);
		$this->load->view('admin/fragments/footer');	
	}

	public function addSupplementalPlanView(){
		$data['currentDate'] = date('Y-m-d');
		$data['currentYear'] = date('Y');
		$data['municipalities'] = $this->admin_model->getActiveMunicipalities();
		$data['barangays'] = $this->admin_model->getBarangays();
		$data['projTypes'] = $this->admin_model->getActiveProjectType();
		$data['sourceFunds'] = $this->admin_model->getActiveSourceofFunds('supplemental');
		$data['accounts'] = $this->admin_model->getActiveAccountClassification();
		$data['modes'] = $this->admin_model->getActiveProcurementMode();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/addSupplementalPlan', $data);
		$this->load->view('admin/fragments/footer');

	}

	public function addRegularPlan(){
		$data = array('success' => false, 'messages' => array());

		$this->form_validation->set_rules('date_added', 'Date', 'trim|required');
		$this->form_validation->set_rules('year', 'Project year', 'trim|required|is_natural');
		$this->form_validation->set_rules('project_no', 'Project Number', 'trim|required');
		$this->form_validation->set_rules('project_title', 'Project Title', 'trim|required');
		$this->form_validation->set_rules('municipality', 'Municipality', 'trim|required');
		$this->form_validation->set_rules('barangay', 'Barangay', 'trim|required');
		$this->form_validation->set_rules('type', 'Project Type', 'trim|required');
		$this->form_validation->set_rules('mode', 'Mode of Procurement', 'trim|required');
		$this->form_validation->set_rules('ABC', 'Approval Budget Cost(ABC)', 'trim|required|is_natural');
		$this->form_validation->set_rules('source', 'Source of Fund', 'trim|required');
		$this->form_validation->set_rules('account', 'Account Classification', 'trim|required');
		$this->form_validation->set_rules('abc_post_date', 'abc/post of ib/rei', 'trim|required');
		$this->form_validation->set_rules('sub_open_date', 'sub/open of bids', 'trim|required');
		$this->form_validation->set_rules('award_notice_date', 'notice of award', 'trim|required');
		$this->form_validation->set_rules('contract_signing_date', 'contract signing', 'trim|required');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run()) {
			$date_added = htmlspecialchars($this->input->post('date_added'));
			$year = htmlspecialchars($this->input->post('year'));
			$project_no = htmlspecialchars($this->input->post('project_no'));
			$project_title = htmlspecialchars($this->input->post('project_title'));
			$municipality = htmlspecialchars($this->input->post('municipality'));
			$barangay = htmlspecialchars($this->input->post('barangay'));
			$type = htmlspecialchars($this->input->post('type'));
			$mode = htmlspecialchars($this->input->post('mode'));
			$ABC = htmlspecialchars($this->input->post('ABC'));
			$source = htmlspecialchars($this->input->post('source'));
			$account = htmlspecialchars($this->input->post('account'));
			$abc_post_date = date_create_from_format('m-Y', $this->input->post('abc_post_date'));
			$abc_post_date = date_format($abc_post_date, 'M-Y');
			$sub_open_date = date_create_from_format('m-Y', $this->input->post('sub_open_date'));
			$sub_open_date = date_format($sub_open_date, 'M-Y');
			$award_notice_date = date_create_from_format('m-Y', $this->input->post('award_notice_date'));
			$award_notice_date = date_format($award_notice_date, 'M-Y');
			$contract_signing_date = date_create_from_format('m-Y', $this->input->post('contract_signing_date'));
			$contract_signing_date = date_format($contract_signing_date, 'M-Y');

			if ($this->admin_model->insertNewRegularProject($date_added, $year, $project_no, $project_title, $municipality, $barangay, $type, $mode, $ABC, $source, $account, $abc_post_date, $sub_open_date, $award_notice_date, $contract_signing_date)) {
				$data['success'] = true;
			}

		}else{
			foreach ($_POST as $key => $value) {
				$data['messages'][$key] = form_error($key);
			}
			if (!isset($_POST['municipality'])) {
				$data['messages']['municipality'] = '<p class="text-danger">This field is required!</p>';
			}
			if (!isset($_POST['barangay'])) {
				$data['messages']['barangay'] = '<p class="text-danger">This field is required!</p>';
			}
			if (!isset($_POST['type'])) {
				$data['messages']['type'] = '<p class="text-danger">This field is required!</p>';
			}
			if (!isset($_POST['mode'])) {
				$data['messages']['mode'] = '<p class="text-danger">This field is required!</p>';
			}
			if (!isset($_POST['source'])) {
				$data['messages']['source'] = '<p class="text-danger">This field is required!</p>';
			}
			if (!isset($_POST['account'])) {
				$data['messages']['account'] = '<p class="text-danger">This field is required!</p>';
			}
		}
		
		echo json_encode($data);
	}

		public function addSupplementalPlan(){

		$data = array('success' => false, 'messages' => array());

		$this->form_validation->set_rules('date_added', 'Date', 'trim|required');
		$this->form_validation->set_rules('year', 'Project year', 'trim|required|is_natural');
		$this->form_validation->set_rules('project_no', 'Project Number', 'trim|required');
		$this->form_validation->set_rules('project_title', 'Project Title', 'trim|required');
		$this->form_validation->set_rules('municipality', 'Municipality', 'trim|required');
		$this->form_validation->set_rules('barangay', 'Barangay', 'trim|required');
		$this->form_validation->set_rules('type', 'Project Type', 'trim|required');
		$this->form_validation->set_rules('mode', 'Mode of Procurement', 'trim|required');
		$this->form_validation->set_rules('ABC', 'Approval Budget Cost(ABC)', 'trim|required|is_natural');
		$this->form_validation->set_rules('source', 'Source of Fund', 'trim|required');
		$this->form_validation->set_rules('account', 'Account Classification', 'trim|required');
		$this->form_validation->set_rules('abc_post_date', 'abc/post of ib/rei', 'trim|required');
		$this->form_validation->set_rules('sub_open_date', 'sub/open of bids', 'trim|required');
		$this->form_validation->set_rules('award_notice_date', 'notice of award', 'trim|required');
		$this->form_validation->set_rules('contract_signing_date', 'contract signing', 'trim|required');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run()) {
			$date_added = htmlspecialchars($this->input->post('date_added'));
			$year = htmlspecialchars($this->input->post('year'));
			$project_no = htmlspecialchars($this->input->post('project_no'));
			$project_title = htmlspecialchars($this->input->post('project_title'));
			$municipality = htmlspecialchars($this->input->post('municipality'));
			$barangay = htmlspecialchars($this->input->post('barangay'));
			$type = htmlspecialchars($this->input->post('type'));
			$mode = htmlspecialchars($this->input->post('mode'));
			$ABC = htmlspecialchars($this->input->post('ABC'));
			$source = htmlspecialchars($this->input->post('source'));
			$account = htmlspecialchars($this->input->post('account'));
			$abc_post_date = date_create_from_format('m-Y', $this->input->post('abc_post_date'));
			$abc_post_date = date_format($abc_post_date, 'M-Y');
			$sub_open_date = date_create_from_format('m-Y', $this->input->post('sub_open_date'));
			$sub_open_date = date_format($sub_open_date, 'M-Y');
			$award_notice_date = date_create_from_format('m-Y', $this->input->post('award_notice_date'));
			$award_notice_date = date_format($award_notice_date, 'M-Y');
			$contract_signing_date = date_create_from_format('m-Y', $this->input->post('contract_signing_date'));
			$contract_signing_date = date_format($contract_signing_date, 'M-Y');


			if ($this->admin_model->insertNewSupplementalProject($date_added,$year,$project_no,$project_title,$municipality,$barangay,$type,$mode,$ABC,$source,$account, $abc_post_date, $sub_open_date, $award_notice_date, $contract_signing_date)) {
				$data['success'] = true;
			}

		}else{
			foreach ($_POST as $key => $value) {
				$data['messages'][$key] = form_error($key);
			}
			if (!isset($_POST['municipality'])) {
				$data['messages']['municipality'] = '<p class="text-danger">This field is required!</p>';
			}
			if (!isset($_POST['barangay'])) {
				$data['messages']['barangay'] = '<p class="text-danger">This field is required!</p>';
			}
			if (!isset($_POST['type'])) {
				$data['messages']['type'] = '<p class="text-danger">This field is required!</p>';
			}
			if (!isset($_POST['mode'])) {
				$data['messages']['mode'] = '<p class="text-danger">This field is required!</p>';
			}
			if (!isset($_POST['source'])) {
				$data['messages']['source'] = '<p class="text-danger">This field is required!</p>';
			}
			if (!isset($_POST['account'])) {
				$data['messages']['account'] = '<p class="text-danger">This field is required!</p>';
			}
		}
		
		echo json_encode($data);
	}

	public function editPlanView(){
		$plan_id = $this->input->get('plan_id');
		$data['project_type'] = $this->input->get('project_type');
		$data['municipalities'] = $this->admin_model->getMunicipalities();
		$data['barangays'] = $this->admin_model->getBarangays();
		$data['projTypes'] = $this->admin_model->getProjectType();
		$data['sourceFunds'] = $this->admin_model->getRegularFunds();
		$data['accounts'] = $this->admin_model->getActiveAccountClassification();
		$data['modes'] = $this->admin_model->getProcurementMode();
		$data['projectDetails'] = $this->admin_model->getPlanDetails($plan_id);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/editPlan', $data);
		$this->load->view('admin/fragments/footer');	
	}

	public function editSupplementalPlanView(){
		$plan_id = $this->input->get('plan_id');
		$data['project_type'] = $this->input->get('project_type');
		$data['municipalities'] = $this->admin_model->getMunicipalities();
		$data['barangays'] = $this->admin_model->getBarangays();
		$data['projTypes'] = $this->admin_model->getProjectType();
		$data['sourceFunds'] = $this->admin_model->getSupplementalFunds();
		$data['accounts'] = $this->admin_model->getActiveAccountClassification();
		$data['modes'] = $this->admin_model->getProcurementMode();
		$data['projectDetails'] = $this->admin_model->getPlanDetails($plan_id);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/editPlan', $data);
		$this->load->view('admin/fragments/footer');	
	}
	public function projectTimelineView(){
		$projectNavControl['pageName'] = "timeline";
		$plan_id = $this->session->userdata('plan_id');
		$projectNavControl['prev_loc'] = $this->session->userdata('prev_loc');
		$projectNavControl['projectStatus'] = $this->admin_model->getProjectPlanStatus($plan_id)->status;	
		$data['actStatus'] = $this->admin_model->getProjectActivityStatus($plan_id);
		$data['procActDate'] = $this->admin_model->getProcActivityDates($plan_id);
		$data['projectDetails'] = $this->admin_model->getPlanDetails($plan_id);
		$data['timeLine'] = $this->admin_model->getProjectTimeline($plan_id);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/projectPlanNavigation', $projectNavControl);
		$this->load->view('admin/fragments/projectPlanDetails', $data);
		$this->load->view('admin/projectProcurementTimeline');
		$this->load->view('admin/fragments/footer');	
	}

	public function updateProcurementTimeline(){
		$plan_id = $this->session->userdata('plan_id');
		$advertisement_start = $this->input->post('advertisement_start');
		$advertisement_end = $this->input->post('advertisement_end');
		$pre_bid_start = $this->input->post('preBidStart');
		$pre_bid_end = $this->input->post('preBidEnd');
		$bid_submission_start = $this->input->post('bidSubmissionStart');
		$bid_submission_end = $this->input->post('bidSubmissionEnd');
		$bid_evaluation_start = $this->input->post('bidEvaluationStart');
		$bid_evaluation_end = $this->input->post('bidEvaluationEnd');
		$post_qualification_start = $this->input->post('postQualificationStart');
		$post_qualification_end = $this->input->post('postQualificationEnd');
		$award_notice_start = $this->input->post('awardNoticeIssuanceStart');
		$award_notice_end = $this->input->post('awardNoticeIssuanceEnd');
		$contract_signing_start = $this->input->post('contractSigningStart');
		$contract_signing_end = $this->input->post('contractSigningEnd');
		$authority_approval_start = $this->input->post('authorityApprovalStart');
		$authority_approval_end = $this->input->post('authorityApprovalEnd');
		$proceed_notice_start = $this->input->post('proceedNoticeStart');
		$proceed_notice_end = $this->input->post('proceedNoticeEnd');

		$this->admin_model->updateProjectTimeline($plan_id, $advertisement_start, $advertisement_end, $pre_bid_start, $pre_bid_end, $bid_submission_start, $bid_submission_end, $bid_evaluation_start, $bid_evaluation_end, $post_qualification_start, $post_qualification_end, $award_notice_start, $award_notice_end, $contract_signing_start, $contract_signing_end, $authority_approval_start, $authority_approval_end, $proceed_notice_start, $proceed_notice_end);


		if ($this->admin_model->getProjectStatus($plan_id)->status == 'for_rebid') {
			$this->admin_model->updateProjectStatus($plan_id, 're_process');
		}

		if ($this->admin_model->getPreBidStatus($plan_id) != 'finished') {
			if ( !isset($_POST['preBidStart']) || !isset($_POST['preBidEnd'])) {
				$this->admin_model->updatePreBidStatus($plan_id, 'not_needed');
			}else{
				$this->admin_model->updatePreBidStatus($plan_id, 'pending');
			}
		}

		if ($this->admin_model->getAuthorityApprovalStatus($plan_id) != 'finished') {
			if ( !isset($_POST['authorityApprovalStart']) || !isset($_POST['authorityApprovalEnd'])) {
				$this->admin_model->updateAuthorityApprovalStatus($plan_id, 'not_needed');
			}else{
				$this->admin_model->updateAuthorityApprovalStatus($plan_id, 'pending');
			}
		}

		redirect('admin/projectTimelineView');
		 
	}

	public function procurementActivityView(){
		$plan_id = $this->session->userdata('plan_id');
		$projectNavControl['pageName'] = "activity";
		$projectNavControl['prev_loc'] = $this->session->userdata('prev_loc');
		$projectNavControl['projectStatus'] = $this->admin_model->getProjectPlanStatus($plan_id)->status;
		$data['projectDetails'] = $this->admin_model->getPlanDetails($plan_id);
		$data['actStatus'] = $this->admin_model->getProjectActivityStatus($plan_id);
		$data['procActDate'] = $this->admin_model->getProcActivityDates($plan_id);
		$data['arrayCount'] = count($data['procActDate']);
		$data['contractors'] = $this->admin_model->getContractors();
		$data['timeline'] = $this->admin_model->getProjectTimeline($plan_id);
		$data['bidders'] = $this->admin_model->getCurrentProjectBids($plan_id);
		$data['observers'] = $this->admin_model->getActiveObservers();
		
		$data['activity_observers'] = $this->admin_model->getActivityObservers($plan_id);
		
		for ($i=0; $i < sizeOf($data['activity_observers']); $i++) { 
			if ($data['activity_observers'][$i]['activity_name'] == 'pre_bid') {
				$data['activity_observers'][$i]['activity_name'] = 'Pre-bid';
			}
			if ($data['activity_observers'][$i]['activity_name'] == 'eligibility') {
				$data['activity_observers'][$i]['activity_name'] = 'Eligibility Check';
			}
			if ($data['activity_observers'][$i]['activity_name'] == 'sub_open') {
				$data['activity_observers'][$i]['activity_name'] = 'Submission/Open of Bids';
			}
			if ($data['activity_observers'][$i]['activity_name'] == 'bid_evaluation') {
				$data['activity_observers'][$i]['activity_name'] = 'Bid Evaluation';
			}
			if ($data['activity_observers'][$i]['activity_name'] == 'post_qual') {
				$data['activity_observers'][$i]['activity_name'] = 'Post Qualification';
			}
			if ($data['activity_observers'][$i]['activity_name'] == 'delivery_completion') {
				$data['activity_observers'][$i]['activity_name'] = 'Delivery/Completion';
			}
		}
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fragments/projectPlanNavigation', $projectNavControl);
		$this->load->view('admin/fragments/projectPlanDetails', $data);
		$this->load->view('admin/projectProcurementActivity');
		$this->load->view('admin/fragments/footer');	
	}

	public function setCurrentPlanID(){
		$plan_id = $this->input->post('plan_id');
		$prev_loc = $this->input->post('prev_loc');

		$timeLine_status = $this->admin_model->getProjectTimelineStatus($plan_id);

		$this->session->set_userdata('plan_id', $plan_id);
		$this->session->set_userdata('prev_loc', $prev_loc);
		$this->session->set_userdata('timeLine_status', $timeLine_status['timeLine_status']);

		redirect('admin/projectDetailsView');
	}

	public function editPlan(){
		$currentPlanID = $this->session->userdata('plan_id');
		if (!empty($_POST['date_added']) && $_POST['date_added'] != null) {
			$date_added = $this->input->post('date_added');
			$this->admin_model->updateDate_added($date_added, $currentPlanID);
		}

		if (!empty($_POST['year']) && $_POST['year'] != null) {
			$year = $this->input->post('year');
			$this->admin_model->updateProject_year($year, $currentPlanID);
		}

		if (!empty($_POST['project_no']) && $_POST['project_no'] != null) {
			$project_no = $this->input->post('project_no');
			$this->admin_model->updateProject_no($project_no, $currentPlanID);
		}

		if (!empty($_POST['project_title']) && $_POST['project_title'] != null) {
			$project_title = $this->input->post('project_title');
			$this->admin_model->updateProject_title($project_title, $currentPlanID);
		}

		if (isset($_POST['municipality'])) {
			$municipality = $this->input->post('municipality');
			$this->admin_model->updateMunicipality($municipality, $currentPlanID);
		}

		if (isset($_POST['barangay'])) {
			$barangay = $this->input->post('barangay');
			$this->admin_model->updateBarangay($barangay, $currentPlanID);
		}

		if (isset($_POST['type'])) {
			$type = $this->input->post('type');
			$this->admin_model->updateType($type, $currentPlanID);
		}

		if (isset($_POST['mode'])) {
			$mode = $this->input->post('mode');
			$this->admin_model->updateMode($mode, $currentPlanID);
		}

		if (!empty($_POST['ABC']) && $_POST['ABC'] != null) {
			$ABC = $this->input->post('ABC');
			$this->admin_model->updateABC($ABC, $currentPlanID);
		}

		if (isset($_POST['source'])) {
			$source = $this->input->post('source');
			$this->admin_model->updateSource($source, $currentPlanID);
		}

		if (isset($_POST['account'])) {
			$account = $this->input->post('account');
			$this->admin_model->updateAccount($account, $currentPlanID);
		}

		if (!empty($_POST['abc_post_date']) && $_POST['abc_post_date'] != null) {
			$abc_post_date = $this->input->post('abc_post_date');
			$this->admin_model->update_abc_post_date($abc_post_date, $currentPlanID);
		}

		if (!empty($_POST['award_notice_date']) && $_POST['award_notice_date'] != null) {
			$award_notice_date = $this->input->post('award_notice_date');
			$this->admin_model->update_award_notice_date($award_notice_date, $currentPlanID);
		}
		
		if (!empty($_POST['contract_signing_date']) && $_POST['contract_signing_date'] != null) {
			$contract_signing_date = $this->input->post('contract_signing_date');
			$this->admin_model->update_contract_signing_date($contract_signing_date, $currentPlanID);
		}

		if (!empty($_POST['sub_open_date']) && $_POST['sub_open_date'] != null) {
			$sub_open_date = $this->input->post('sub_open_date');
			$this->admin_model->update_sub_open_date($sub_open_date, $currentPlanID);
		}

		$this->session->set_flashdata('success', 'Plan Details Updated.');

		redirect('admin/editPlanView');
	}




	/**
	*Bellow are the functions for loading management of data...
	**/

	public function manageContractorsView(){
		$data['contractors'] = $this->admin_model->getContractors();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/contractor', $data);
		$this->load->view('admin/fragments/footer');	
	}

	public function addNewContractor(){

		$data = array('success' => false, 'messages' => array());

		$this->form_validation->set_rules('businessname', 'Business Name', 'trim|required');
		$this->form_validation->set_rules('owner', 'Owner Name', 'trim|required');
		$this->form_validation->set_rules('address', 'Bussiness Address', 'trim|required');
		$this->form_validation->set_rules('contactnumber', 'Business Contact Number', 'trim|required');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run()) {
			$businessname = htmlspecialchars($this->input->post('businessname'));
			$owner = htmlspecialchars($this->input->post('owner'));
			$address = htmlspecialchars($this->input->post('address'));
			$contactnumber = htmlspecialchars($this->input->post('contactnumber'));

			$return_value = $this->admin_model->insertNewContractor($businessname, $owner, $address, $contactnumber);
			
			if (!$return_value) {
				$data['success'] = 'failed';
			}else{
				$data['contractor'] = $this->admin_model->getContractorDetails($return_value);
				$data['success'] = true;
			}

		}else{
			foreach ($_POST as $key => $value) {
				$data['messages'][$key] = form_error($key);
			}
			if (!isset($_POST['role'])) {
				$data['messages']['role'] = '<p class="text-danger">The Role field is required!</p>';
			}
		}
		
		echo json_encode($data);
	}

	public function editContractorView(){
		$currentContractorID = $this->session->userdata('contractor_id');

		$data['contractorDetails'] = $this->admin_model->getContractorDetails($currentContractorID);

		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/editcontractor', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function setCurrentContractorID(){
		$contractorID = $this->input->post('contractor_id');

		$this->session->set_userdata('contractor_id', $contractorID);

		redirect('admin/editContractorView');
	}

	public function editContractor(){
		$currentContractorID = $this->session->userdata('contractor_id');
		if (!empty($_POST['businessname'])) {
			$businessname = $this->input->post('businessname');
			$this->admin_model->updateBusinessName($businessname, $currentContractorID);
		}

		if (!empty($_POST['owner'])) {
			$owner = $this->input->post('owner');
			$this->admin_model->updateOwner($owner, $currentContractorID);
		}

		if (!empty($_POST['address'])) {
			$address = $this->input->post('address');
			$this->admin_model->updateAddress($address, $currentContractorID);
		}

		if (!empty($_POST['contactnumber'])) {
			$contactnumber = $this->input->post('contactnumber');
			$this->admin_model->updateContactnumber($contactnumber, $currentContractorID);
		}

		$this->session->set_flashdata('success', 'Contractor Details Successfully Updated.');
		redirect('admin/editContractorView');

	}

	public function manageFundsView(){
		$data['funds'] = $this->admin_model->getFunds();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/fund', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function addFundsView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/addfund');
		$this->load->view('admin/fragments/footer');
	}

	public function addFunds(){

		$data = array('success' => false, 'messages' => array());

		$this->form_validation->set_rules('source', 'Source of Fund', 'trim|required');
		$this->form_validation->set_rules('fund_type', 'Type of Fund', 'trim|required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run()) {
			$source = htmlspecialchars($this->input->post('source'));
			$fund_type = htmlspecialchars($this->input->post('fund_type'));


			$return_value = $this->admin_model->insertNewFunds($source, $fund_type);
			
			if (!$return_value) {
				$data['success'] = 'failed';
			}else{
				$data['fund'] = $this->admin_model->getFundsDetails($return_value);
				$data['success'] = true;
			}

		}else{
			foreach ($_POST as $key => $value) {
				$data['messages'][$key] = form_error($key);
			}
			if (!isset($_POST['fund_type'])) {
				$data['messages']['fund_type'] = '<p class="text-danger">This field is required!</p>';
			}
		}
		
		echo json_encode($data);
	}

	public function editFundsView(){
		$fund_id = $this->session->userdata('fund_id');
		$data['fundDetail'] = $this->admin_model->getFundsDetails($fund_id);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/editfund', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function setCurrentFundID(){
		$fundID = $this->input->post('source');

		$this->session->set_userdata('fund_id', $fundID);

		redirect('admin/editFundsView');
	}

	public function editFunds(){
		$fundID = $this->session->userdata('fund_id');
		if (!empty($_POST['source'])) {
			$source = $this->input->post('source');
			$this->admin_model->updateFundSource($source, $fundID);
		}

		$this->session->set_flashdata('success', 'Funds Details Updated.');

		redirect('admin/editFundsView');
	}

	public function manageProjectTypeView(){

		$data['projectTypes'] = $this->admin_model->getProjectTypes();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/projecttype', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function addProjectTypeView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/addProjectType');
		$this->load->view('admin/fragments/footer');
	}

	public function addProjectType(){
		$data = array('success' => false, 'messages' => array());

		$this->form_validation->set_rules('type', 'Type of Project', 'trim|required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run()) {
			$type = htmlspecialchars($this->input->post('type'));

			$return_value = $this->admin_model->insertNewProjectType($type);
			
			if (!$return_value) {
				$data['success'] = 'failed';
			}else{
				$data['projectType'] = $this->admin_model->getProjectTypeDetails($return_value);
				$data['success'] = true;
			}

		}else{
			foreach ($_POST as $key => $value) {
				$data['messages'][$key] = form_error($key);
			}
			if (!isset($_POST['fund_type'])) {
				$data['messages']['fund_type'] = '<p class="text-danger">This field is required!</p>';
			}
		}
		
		echo json_encode($data);
	}

	public function editProjectTypeView(){
		$projectID = $this->session->userdata('projectTypeID');
		$data['projectTypeDetails'] = $this->admin_model->getProjectTypeDetails($projectID);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/editproject', $data);
		$this->load->view('admin/fragments/footer');
	}
	
	public function setCurrentProjectTypeID(){
		$projectTypeID = $this->input->post('type');

		$this->session->set_userdata('projectTypeID', $projectTypeID);

		redirect('admin/editProjectTypeView');
	}


	public function editProjectType(){
		$projectID = $this->session->userdata('projectTypeID');
		if(!empty($_POST['type'])) {
			$type = $this->input->post('type');
			$this->admin_model->updateProjectType($type, $projectID);
		}

		$this->session->set_flashdata('success', 'Successfully Updated.');

		redirect('admin/editProjectTypeView');
	}

	public function manageObserversView(){
		$data['observers'] = $this->admin_model->getObservers();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/manageObservers', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function addObserver(){

		$data = array('success' => false, 'messages' => array());


		$this->form_validation->set_rules('observer_dept_name', 'Observer Organization Name', 'trim|required');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run()) {

			$observer_dept_name = htmlspecialchars($this->input->post('observer_dept_name'));

			$return_value = $this->admin_model->insertNewObserver($observer_dept_name);
			
			if (!$return_value) {
				$data['success'] = 'failed';
			}else{
				$data['observer'] = $this->admin_model->getObserverDetails($return_value);
				$data['success'] = true;
			}

		}else{
			foreach ($_POST as $key => $value) {
				$data['messages'][$key] = form_error($key);
			}
		}
		
		echo json_encode($data);
	}

	public function manageUsers(){
		$data['users'] = $this->admin_model->getUsers();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/user', $data);
		$this->load->view('admin/fragments/footer');
	}	

	public function editUsersView(){
		$userID = $this->session->userdata('userID');
		$data['userDetails'] = $this->admin_model->getUserDetails($userID);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/edituser', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function editUsers(){
		$userID = $this->session->userdata('userID');
		if(!empty($_POST['firstname'])) {
			$firstname = $this->input->post('firstname');
			$this->admin_model->updateFirstName($firstname, $userID);
		}
		if(!empty($_POST['middlename'])) {
			$middlename = $this->input->post('middlename');
			$this->admin_model->updateMiddleName($middlename, $userID);
		}
		if(!empty($_POST['lastname'])) {
			$lastname = $this->input->post('lastname');
			$this->admin_model->updateLastName($lastname, $userID);
		}
		if(!empty($_POST['usertype'])) {
			$usertype = $this->input->post('usertype');
			$this->admin_model->updateUserType($usertype, $userID);
		}

		$this->session->set_flashdata('success', 'Successfully Updated.');

		redirect('admin/editUsersView');
	}

	public function setUsersID(){
		$userID = $this->input->post('userID');

		$this->session->set_userdata('userID', $userID);

		redirect('admin/editUsersView');
	}


	public function addUsersView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/adduser');
		$this->load->view('admin/fragments/footer');
	}

	public function addUsers(){
		
		$data = array('success' => false, 'messages' => array());


		$this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
		$this->form_validation->set_rules('middlename', 'Middle Name', 'trim|required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('usertype', 'User Type', 'trim|required');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run()) {

			$firstname = htmlspecialchars($this->input->post('firstname'));
			$middlename = htmlspecialchars($this->input->post('middlename'));
			$lastname = htmlspecialchars($this->input->post('lastname'));
			$usertype = htmlspecialchars($this->input->post('usertype'));
			$return_value = $this->admin_model->insertUsers($firstname, $middlename, $lastname,$usertype);
			
			if (!$return_value) {
				$data['success'] = 'failed';
			}else{
				$data['user'] = $this->admin_model->getUserDetails($return_value);
				$data['success'] = true;
			}

		}else{
			foreach ($_POST as $key => $value) {
				$data['messages'][$key] = form_error($key);
			}
			if (!isset($_POST['role'])) {
				$data['messages']['role'] = '<p class="text-danger">The Role field is required!</p>';
			}
		}
		
		echo json_encode($data);
	}

		
	public function manageDatabaseView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/backres');
		$this->load->view('admin/fragments/footer');
	}

	public function manageMunicipalitiesAndBarangays(){
		$data['municipalities'] = $this->admin_model->getMunicipalities();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/municipalitiesAndBrangays', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function addMunicipalityView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/addMunicipality');
		$this->	load->view('admin/fragments/footer');
	}

	public function addNewMunicipality(){
		$data = array('success' => false, 'messages' => array());

		$this->form_validation->set_rules('municipality_code', 'Municipality Code', 'trim|required|is_natural');
		$this->form_validation->set_rules('municipality', 'Municipality Name', 'trim|required');
		$this->form_validation->set_rules('barangayNumber', 'Municipality Number', 'trim|required|is_natural');				
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run()) {
			$municipality_code = htmlspecialchars($this->input->post('municipality_code'));
			$municipality = htmlspecialchars($this->input->post('municipality'));
			$barangayNumber = htmlspecialchars($this->input->post('barangayNumber'));

			if ($this->admin_model->insertMunicipality($municipality_code,$municipality,$barangayNumber)) {
				$data['success'] = true;
			}

		}else{
			foreach ($_POST as $key => $value) {
				$data['messages'][$key] = form_error($key);
			}
			if (!isset($_POST['role'])) {
				$data['messages']['role'] = '<p class="text-danger">The Role field is required!</p>';
			}
		}
		
		echo json_encode($data);
	}

	public function editMunicipalityView(){
		$municipality_id = $this->session->userdata('municipality_id');
		$data['municipalityDetails'] = $this->admin_model->getMunicipalityDetails($municipality_id);
		$data['barangays'] = $this->admin_model->getMunicipalityBarangays($municipality_id);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/editMunicipality', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function editMunicipality(){

		$municipality_id = $this->session->userdata('municipality_id');

		if (!empty($_POST['municipality_code'])) {
			$municipality_code = $this->input->post('municipality_code');
			$this->admin_model->updateMunicipalityCode($municipality_id, $municipality_code);
		}
		if (!empty($_POST['municipality'])) {
			$municipality = $this->input->post('municipality');
			$this->admin_model->updateMunicipalityName($municipality_id, $municipality);
		}

		if (isset($_POST['barangay_code']) && isset($_POST['barangay_name'])) {
			for ($i=0; $i < count($_POST['barangay_code']); $i++) { 
				$this->admin_model->insertBarangay($municipality_id, $_POST['barangay_code'][$i], $_POST['barangay_name'][$i]);
			}
		}

		$this->session->set_flashdata('success', 'municipality details successfully updated.');

		redirect('admin/editMunicipalityView');
	}

	public function editBarangay(){
		$barangay_id = $this->input->post('current_barangay_id');
		if (!empty($_POST['barangay_code'] || $_POST['barangay_code'] != null)) {
			$barangay_code = $this->input->post('barangay_code');
			$this->admin_model->updateBarangayCode($barangay_id, $barangay_code);
				
		}

		if (!empty($_POST['barangay'])) {
			$barangay = $this->input->post('barangay');
			$this->admin_model->updateBarangayName($barangay_id, $barangay);
		}

		redirect('admin/editMunicipalityView');
	}

	public function setCurrentMunicipalityID(){
		$municipality_id = $this->input->post('municipality_id');
		
		$this->session->set_userdata('municipality_id', $municipality_id);

		redirect('admin/editMunicipalityView');
	}

	public function manageAccountClassifications(){
		$data['classifications'] = $this->admin_model->getClassification();

		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/accountClassifications', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function addClassificationView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/addClassification');
		$this->load->view('admin/fragments/footer');		
	}

	public function addClassification(){
		$data = array('success' => false, 'messages' => array());

		$this->form_validation->set_rules('acc_classification', 'Classification', 'trim|required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run()) {
			$acc_classification = htmlspecialchars($this->input->post('acc_classification'));

			$return_value = $this->admin_model->insertClassification($acc_classification);
			
			if (!$return_value) {
				$data['success'] = 'failed';
			}else{
				$data['classification'] = $this->admin_model->getClassificationDetails($return_value);
				$data['success'] = true;
			}

		}else{
			foreach ($_POST as $key => $value) {
				$data['messages'][$key] = form_error($key);
			}
			if (!isset($_POST['role'])) {
				$data['messages']['role'] = '<p class="text-danger">The Role field is required!</p>';
			}
		}
		
		echo json_encode($data);
	}


		public function editClassificationView(){
		$classifications = $this->session->userdata('account_classification');

		$data['classification'] = $this->admin_model->getClassificationDetails($classifications);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/editClassification', $data);
		$this->load->view('admin/fragments/footer');
	}

		public function editClassification(){

		$classification = $this->session->userdata('account_classification');
		if (!empty($_POST['classification'])) {
			$newClassification = $this->input->post('classification');
			$this->admin_model->updateClassification($classification, $newClassification);
		}

		$this->session->set_flashdata('success', 'Classification Successfully Updated.');
		redirect('admin/editClassificationView');

	}

		public function setClassification(){

		$classifications = $this->input->post('classification');

		$this->session->set_userdata('account_classification', $classifications);

		redirect('admin/editClassificationView');

	}



	public function manageProcurementMode(){
		$data['modes'] = $this->admin_model->getProcurementMode();

		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/procurementMode', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function addProcurementView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/addProcurement');
		$this->load->view('admin/fragments/footer');
	}



	public function addProcurement(){
		$data = array('success' => false, 'messages' => array());

		$this->form_validation->set_rules('mode', 'Type of Procurement Mode', 'trim|required|alpha');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run()) {
			$mode = htmlspecialchars($this->input->post('mode'));

			$return_value = $this->admin_model->insertProcurementMode($mode);
			
			if (!$return_value) {
				$data['success'] = 'failed';
			}else{
				$data['mode'] = $this->admin_model->getProcurementModeDetails($return_value);
				$data['success'] = true;
			}

		}else{
			foreach ($_POST as $key => $value) {
				$data['messages'][$key] = form_error($key);
			}
			if (!isset($_POST['fund_type'])) {
				$data['messages']['fund_type'] = '<p class="text-danger">This field is required!</p>';
			}
		}
		
		echo json_encode($data);
	}

	public function editProcurementView(){
		$modes = $this->session->userdata('procurement_mode');

		$data['mode'] = $this->admin_model->getProcurementModeDetails($modes);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/editProcurement', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function editProcurement(){

		$mode = $this->session->userdata('procurement_mode');
		if (!empty($_POST['mode'])) {
			$newmode = $this->input->post('mode');
			$this->admin_model->updateProcurementMode($mode, $newmode);
		}

		$this->session->set_flashdata('success', 'Procurement Mode Successfully Updated.');
		redirect('admin/editProcurementView');

	}

	public function setProcurementMode(){

		$modes = $this->input->post('mode');

		$this->session->set_userdata('procurement_mode', $modes);

		redirect('admin/editProcurementView');

	}

	/** Start of Manage Documents */

		public function manageDocumentsView(){
		$data['document_type'] = $this->admin_model->getDocument();
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/manageDocuments', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function addDocumentsView(){
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/addDocuments');
		$this->load->view('admin/fragments/footer');
	}

	public function addDocuments(){
		$data = array('success' => false, 'messages' => array());

		$this->form_validation->set_rules('document_numbers', 'Document Number', 'trim|required|is_natural');
		$this->form_validation->set_rules('newdocuments', 'Document Name', 'trim|required');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run()) {
			$document_numbers = htmlspecialchars($this->input->post('document_numbers'));
			$newdocuments = htmlspecialchars($this->input->post('newdocuments'));
			$return_value = $this->admin_model->insertDocument($document_numbers,$newdocuments);
			
			if (!$return_value) {
				$data['success'] = 'failed';
			}else{
				$data['document'] = $this->admin_model->getDocumentDetails($return_value);
				$data['success'] = true;
			}

		}else{
			foreach ($_POST as $key => $value) {
				$data['messages'][$key] = form_error($key);
			}
			if (!isset($_POST['role'])) {
				$data['messages']['role'] = '<p class="text-danger">The Role field is required!</p>';
			}
		}
	
		echo json_encode($data);
	}


	public function editDocumentsView(){
		$currentDocumentID = $this->session->userdata('doc_type_id');
		$data['documentDetail'] = $this->admin_model->getDocumentDetails($currentDocumentID);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/editDocument', $data);
		$this->load->view('admin/fragments/footer');
	}

	public function setCurrentDocumentID(){
		$documentID = $this->input->post('documentID');

		$this->session->set_userdata('doc_type_id', $documentID);

		redirect('admin/editDocumentsView');
	}

	public function editObserversView(){
		$setCurrentObserverID = $this->session->userdata('observer_id');
		$data['observerDetail'] = $this->admin_model->getObserverDetails($setCurrentObserverID);
		$this->load->view('admin/fragments/head');
		$this->load->view('admin/fragments/nav');
		$this->load->view('admin/editObserver', $data);
		$this->load->view('admin/fragments/footer');
	}
	public function setCurrentObserverID(){
		$observerID = $this->input->post('observerID');
		$this->session->set_userdata('observer_id', $observerID);
		redirect('admin/editObserversView');
	}

	public function editObservers(){
		$setCurrentObserverID = $this->session->userdata('
			observer_id');
		if(!empty(trim($_POST['observer_dept_name']))){
			$observer_dept_name = $this->input->post('observer_dept_name');
			$this->admin_model->updateObserverDetails($observer_dept_name);
		}

		$this->session->set_flashdata('success', 'Observer Details Successfully Updated.');
		redirect('admin/editObserversView');
	}

	public function editDocument(){
		$currentDocumentID = $this->session->userdata('doc_type_id');
		if (!empty(trim($_POST['document_name']))) {
			$document_name = $this->input->post('document_name');
			$this->admin_model->updateDocumentDetails($document_name, $currentDocumentID);
		}

		if(!empty(trim($_POST['doc_no']))) {
			$doc_no = $this->input->post('doc_no');
			$this->admin_model->updateDocumentNumber($doc_no,$currentDocumentID);
		}


		$this->session->set_flashdata('success', 'Document Details Successfully Updated.');
		redirect('admin/editDocumentsView');
	}
	

	/** End of Manage Document */


	/**
	*
	* Below are the function to update proc activity dates
	*/

	public function editProcActDate(){
		$user_id = $this->session->userdata('user_id');
		$plan_id = $this->session->userdata('plan_id');
		$date = $this->input->post('activity_date');
		$activity_name = $this->input->post('activity_name');

		if ($activity_name === "pre_proc") {
			if ($this->admin_model->updatePreProcConfDate($plan_id, $date)) {
				$this->session->set_flashdata('success', "Pre-Procurement Conference Date Successfully Updated!");
			}else{
				$this->session->set_flashdata('error', "Error! Pre-Procuremwent Conference Date Was Not Updated! Try again.");
			}
		}

		if ($activity_name === "advertisement") {
			if ($this->admin_model->updateAdvertisementDate($plan_id, $date)) {
				$this->session->set_flashdata('success', "Advertisement Date Successfully Updated!");
			}else{
				$this->session->set_flashdata('error', "Error! Advertisement Date Was Not Updated! Try again.");
			}
		}

		if ($activity_name === "pre_bid") {
			if ($this->admin_model->updatePreBidDate($plan_id, $date)) {
				$this->session->set_flashdata('success', "Pre-Bid Conference Date Successfully Updated!");
			}else{
				$this->session->set_flashdata('error', "Error! Pre-Bid Conference Date Was Not Updated! Try again.");
			}
		}

		if ($activity_name === "open_bid") {
			if ($this->admin_model->updateOpenBidDate($plan_id, $date)) {
				$this->session->set_flashdata('success', "Bid Oppening Date Successfully Updated!");
			}else{
				$this->session->set_flashdata('error', "Error! Bid Oppening Date Was Not Updated! Try again.");
			}
		}

		// if ($activity_name === "open_bid") {
		// 	$contractor_id = $this->input->post('contractor');
		// 	$bid_proposal = $this->input->post('bid_proposal');
		// 	if ($this->admin_model->updateOpenBidDate($plan_id, $date, $contractor_id, $bid_proposal)) {
		// 		$this->session->set_flashdata('success', "Bid Oppening Date Successfully Updated!");
		// 	}else{
		// 		$this->session->set_flashdata('error', "Error! Bid Oppening Date Was Not Updated! Try again.");
		// 	}
		// }

		// if ($activity_name === "eligibility_check") {
		// 	$contractor_id = $this->input->post('contractor');
		// 	$bid_proposal = $this->input->post('bid_proposal');
		// 	if (
		// 	$this->admin_model->updateEligibilityCheckDate($plan_id, $date, $contractor_id, $bid_proposal)) {
		// 		$this->session->set_flashdata('success', "Post Qualification Date Successfully Updated!");
		// 	}else{
		// 		$this->session->set_flashdata('error', "Error! Post Qualification Date Was Not Updated! Try again.");
		// 	}
		// }

		if ($activity_name === "bid_evaluation") {
			if ($this->admin_model->updateBidEvaluationDate($plan_id, $date)) {
				$this->session->set_flashdata('success', "Bid Evaluation Date Successfully Updated!");
			}else{
				$this->session->set_flashdata('error', "Error! Bid Evaluation Date Was not Updated! Try again.");
			}
		}

		if ($activity_name === "post_qual") {
			if ($this->admin_model->updatePostQualDate($plan_id, $date)) {
				$this->session->set_flashdata('success', "Post Qualification Date Successfully Updated!");
			}else{
				$this->session->set_flashdata('error', "Error! Post Qualification Date Was Not Updated! Try again.");
			}
		}

		if ($activity_name === "awar_notice") {
			if ($this->admin_model->updateAwardNoticeDate($plan_id, $date)) {
				$this->session->set_flashdata('success', "Notice of Award Date Successfully Updated!");
			}else{
				$this->session->set_flashdata('error', "Error! Notice of Award Date Was Not Updated! Try again.");
			}
		}

		if ($activity_name === "contract_signing") {
			if ($this->admin_model->updateContractSigningDate($plan_id, $date)) {
				$this->session->set_flashdata('success', "Contract Signing Date successfully Updated!");
			}else{
				$this->session->set_flashdata('error', "Error! Contract Signing Date was not Updated! Try again.");
			}
		}

		if ($activity_name === "authority_approval") {
			if ($this->admin_model->updateAuthorityApprovalDate($plan_id, $date)) {
				$this->session->set_flashdata('success', "Approval of Higher Authority Date successfully Updated!");
			}else{
				$this->session->set_flashdata('error', "Error! Approval of Higher Authority Date was not Updated! Try again.");
			}
		}						

		if ($activity_name === "proceed_notice") {
			if ($this->admin_model->updateProceedNoticeDate($plan_id, $date)) {
				$this->session->set_flashdata('success', "Issuance of Notice to Procced Date Successfully Updated!");
			}else{
				$this->session->set_flashdata('error', "Error! Issuance of Notice to Procced Date Was Not Updated! Try again.");
			}
		}						

		if ($activity_name === "completion") {
			if ($this->admin_model->updateDeliveryCompletionDate($plan_id, $date)) {
				$this->session->set_flashdata('success', "Delivery/Completion Date Successfully Updated!");
			}else{
				$this->session->set_flashdata('error', "Error! Delivery/Completion Date Was Not Updated! Try again.");
			}
		}

		if ($activity_name === "acceptance") {
			$final_remark = $this->input->post('final_remark');
			if ($this->admin_model->updateAcceptanceTurnoverDate($plan_id, $date)) {

				$this->admin_model->updateProjectStatus($plan_id, 'finish');

				$this->admin_model->recordProjectLog($plan_id, $user_id, $final_remark);

				$this->session->set_flashdata('success', "Acceptance/Turnover Date Successfully Updated!");
			}else{
				$this->session->set_flashdata('error', "Error! Acceptance/Turnover Date Was Not Updated! Try again.");
			}
		}

		redirect('admin/procurementActivityView');
	}
	/*
	* Rebid a project
	* 1. Get current re_bid_count then increment.
	* 2. Change project status to pending.
	* 3. Empty project timeline (revert all dates to null).
	* 4. Empty project procurement activity dates (revert all dates to null).
	* 5. Record log
	*/

	public function rebidProjectPlan(){

		$data = array('success' => false, 'messages' => array());

		$plan_id = $this->input->post('plan_id');
		$user_id = $this->session->userdata('user_id');

		$this->form_validation->set_rules('re_bid_remark', 'Remark', 'trim|required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run()) {

			$remark = htmlspecialchars($this->input->post('re_bid_remark'));

			// Update the project rebid count

			$this->admin_model->updateProjectRebidCount($plan_id);

			// Chnage project status to pending

			$this->admin_model->updateProjectStatus($plan_id, 're_bid');

			// disqualification record
			if ($this->admin_model->winningBidderExist($plan_id)) {
				$this->admin_model->disqualifyAndSactionBidder($plan_id, $user_id, $remark);
			}
			
			// Remove current bidder

			$this->admin_model->updateProjectContractor($plan_id);

			//disqualify all bids

			$this->admin_model->inactiveAllBids($plan_id);

			// Empty project timeline (revert all dates to null)

			$this->admin_model->resetProjectTimeline($plan_id);

			// Empty project procurement activity (revert all dates to null)

			$this->admin_model->resetProjectProcurementActivity($plan_id);

			// Reset project activity status

			$this->admin_model->resetTimelineProjectStatus($plan_id);

			// Reset project activity invite dates

			$this->admin_model->resetActivityInviteDates($plan_id);

			// Record Log

			$this->admin_model->recordProjectLog($plan_id, $user_id, $remark);

			$data['success'] = true;
		}else{
			foreach ($_POST as $key => $value) {
				$data['messages'][$key] = form_error($key);
			}
		}

		echo json_encode($data);

	}

	/*
	* Project re-review
	* 1. Update project plan status
	* 2. Set remark / record log
	*/
	public function recommendProjectPlanForReview(){

		$data = array('success' => false, 'messages' => array());

		$this->form_validation->set_rules('re_review_remark', 'Remark', 'trim|required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run()) {
			$user_id = $this->session->userdata('user_id');
			$plan_id = $this->input->post('plan_id');
			$remark = $this->input->post('re_review_remark');

			$this->admin_model->updateProjectStatus($plan_id, 're_review');

			$this->admin_model->recordProjectLog($plan_id, $user_id, $remark);
			$data['success'] = true;
		}else{
			foreach ($_POST as $key => $value) {
				$data['messages'][$key] = form_error($key);
			}
		}

		echo json_encode($data);
	}

	/**
	* Bidder disqualification 
	* selection of another winning bidder
	***/

	public function projectBidderDisqualificationAndSunction(){
		$data = array('success' => false);
		
		$user_id = $this->session->userdata('user_id');
		$plan_id = $this->input->post('plan_id');
		$remark = $this->input->post('bidder_saction_disqualification_remark');

		if ($this->admin_model->verifyBidAvailability($plan_id)) {

			// perform disqualification
			// record all logs and records
			// update status etc...
			$this->admin_model->disqualifyAndSactionBidder($plan_id, $user_id, $remark);

			// reset project activity dates and status
			$this->admin_model->resetProcActivityDatesAndStatus($plan_id);

			$this->admin_model->updateCurrentWinningBid($plan_id);

			$data['success'] = true;
		}

		echo json_encode($data);

	}

/* Delete or Activate shit**/

	public function deleteDocumentType(){
		$data['success'] = false;
		$doc_type_id=$this->input->post('document_id');
		if ($this->admin_model->deleteDocumentType($doc_type_id)) {
			$data['success'] = true;
		}

		echo json_encode($data);
	}


	public function deactivateDocumentType(){
		$doc_type_id=$this->input->post('document_id');
		$this->admin_model->updateDocumentTypeStatus($doc_type_id, 'deactivate');

		redirect('admin/manageDocumentsView');		

	}

	public function activateDocumentType(){
		$doc_type_id=$this->input->post('document_id');
		$this->admin_model->updateDocumentTypeStatus($doc_type_id, 'activate');

		redirect('admin/manageDocumentsView');	
	}

	public function deleteObservers(){
		$data['success'] = false;
		$observer_id=$this->input->post('observer_id');
		if ($this->admin_model->deleteObservers($observer_id)) {
			$data['success'] = true;
		}

		echo json_encode($data);
	}

	public function deactivateObserver(){
		$observer_id=$this->input->post('observer_id');
		$this->admin_model->updateObserverDetails($observer_id,'activate');

		redirect('admin/manageObserversView');
	}

	public function activateObserver(){
		$observer_id=$this->input->post('observer_id');
		$this->admin_model->updateObserverDetails($observer_id,'deactivavte');

		redirect('admin/manageObserversView');
	}

	public function deleteContractor(){
		$data['success'] = false;
		$contractor_id=$this->input->post('contractor_id');
		if ($this->admin_model->deleteContractor($contractor_id)) {
			$data['success'] = true;
		}

		echo json_encode($data);
	}

	public function deactivateContractor(){
		$contractor_id=$this->input->post('contractor_id');
		$this->admin_model->updateContractor($contractor_id, 'deactivate');

		redirect('admin/manageContractorsView');		

	}

	public function activateContractor(){
		$contractor_id=$this->input->post('contractor_id');
		$this->admin_model->updateContractor($contractor_id, 'activate');

		redirect('admin/manageContractorsView');	
	}

	public function deleteFund(){
		$data['success'] = false;
		$fund_id=$this->input->post('fund_id');
		if ($this->admin_model->deleteFund($fund_id)) {
			$data['success'] = true;
		}

		echo json_encode($data);
	}

	public function deactivateFund(){
		$fund_id=$this->input->post('fund_id');
		$this->admin_model->updateFund($fund_id, 'deactivate');

		redirect('admin/manageFundsView');		

	}

	public function activateFund(){
		$fund_id=$this->input->post('fund_id');
		$this->admin_model->updateFund($fund_id, 'activate');

		redirect('admin/manageFundsView');	
	}

		public function deleteProjectType(){
		$data['success'] = false;
		$projtype_id=$this->input->post('projtype_id');
		if ($this->admin_model->deleteProjectType($projtype_id)) {
			$data['success'] = true;
		}

		echo json_encode($data);
	}


     	public function deactivateProjectType(){
		$projtype_id=$this->input->post('projtype_id');
		$this->admin_model->updateProjectTypes($projtype_id, 'deactivate');

		redirect('admin/manageProjectTypeView');		

	}

	public function activateProjectType(){
		$projtype_id=$this->input->post('projtype_id');
		$this->admin_model->updateProjectTypes($projtype_id, 'activate');

		redirect('admin/manageProjectTypeView');	
	}

	public function deleteClassification(){
		$data['success'] = false;
		$account_id=$this->input->post('classification');
		if ($this->admin_model->deleteClassification($account_id)) {
			$data['success'] = true;
		}

		echo json_encode($data);
	}

	public function deactivateClassification(){
		$account_id=$this->input->post('account_id');
		$this->admin_model->updateClassifications($account_id, 'deactivate');

		redirect('admin/manageAccountClassifications');		

	}

	public function activateClassification(){
		$account_id=$this->input->post('account_id');
		$this->admin_model->updateClassifications($account_id, 'activate');

		redirect('admin/manageAccountClassifications');	
	}

	public function deleteMode(){
		$data['success'] = false;
		$mode_id=$this->input->post('mode_id');
		if ($this->admin_model->deleteMode($mode_id)) {
			$data['success'] = true;
		}

		echo json_encode($data);
	}

	public function deactivateMode(){
		$mode_id=$this->input->post('mode_id');
		$this->admin_model->updateModes($mode_id, 'deactivate');

		redirect('admin/manageProcurementMode');		

	}

	public function activateMode(){
		$mode_id=$this->input->post('mode_id');
		$this->admin_model->updateModes($mode_id, 'activate');

		redirect('admin/manageProcurementMode');	
	}

	public function deleteUsers(){
		$data['success'] = false;
		$user_id=$this->input->post('user_id');
		if ($this->admin_model->deleteUsers($user_id)) {
			$data['success'] = true;
		}

		echo json_encode($data);
	}

	public function deactivateUsers(){
		$user_id=$this->input->post('user_id');
		$this->admin_model->updateUsers($user_id, 'deactivate');

		redirect('admin/manageUsers');		

	}

	public function activateUsers(){
		$user_id=$this->input->post('user_id');
		$this->admin_model->updateUsers($user_id, 'activate');

		redirect('admin/manageUsers');	
	}
	public function deleteMunicipalitiesAndBarangays(){
		$data['success'] = false;
		$municipality_id=$this->input->post('municipality_id');
		if ($this->admin_model->deleteMunicipalitiesAndBarangays($municipality_id)) {
			$data['success'] = true;
		}

		echo json_encode($data);
	}

	public function deactivateMunicipalitiesAndBarangays(){
		$municipality_id=$this->input->post('municipality_id');
		$this->admin_model->updateMunicipalitiesAndBarangays($municipality_id, 'deactivate');

		redirect('admin/manageMunicipalitiesAndBarangays');		

	}

	public function activateMunicipalitiesAndBarangays(){
		$municipality_id=$this->input->post('municipality_id');
		$this->admin_model->updateMunicipalitiesAndBarangays($municipality_id, 'activate');

		redirect('admin/manageMunicipalitiesAndBarangays');	
	}

	public function addBidders(){
		$plan_id = $this->session->userdata('plan_id');
		$bidders = $this->input->post('contractor_id[]');
		$bids = $this->input->post('bids[]');
		$abc = $this->input->post('abc');

		$data = array('success' => false, 'valid_contractors' => false, 'valid_bids' => true);

		for ($i=0; $i < sizeOf($bids); $i++) { 
			if (!is_numeric($bids[$i])) {
				$data['valid_bids'] = false;
			}else{
				if (floatval($bids[$i]) > floatval($abc)) {
					$data['valid_bids'] = false;
				}
			}
		}

		if (!empty($bidders)) {
			$data['valid_contractors'] = true;
			if($data['valid_bids'] != false){
				for( $i = 0; $i < sizeOf($bidders); $i++){
					$this->admin_model->insertBids($plan_id, $bidders[$i], $bids[$i]);
				}

				$this->admin_model->updateCurrentWinningBid($plan_id);
				$data['success'] = true;
			}
		}
		echo json_encode($data);
				
	}

	public function setObservers(){
		$datetime = $this->input->post('invite_date_input');
		$observer_id = $this->input->post('observer_id[]');
		$observer_name = $this->input->post('observer_name[]');
		$plan_id = $this->input->post('plan_id');
		$invite_activity_name = $this->input->post('invite_activity_name');

		$data = array('success' => false, 'valid_invite_name' => false, 'valid_observers' => false);

		if ($invite_activity_name != null || $invite_activity_name != "") {
			$data['valid_invite_name'] = true;
			if (!empty($observer_id)) {
				for ($i=0; $i < sizeOf($observer_id); $i++) { 
					$message = $this->admin_model->insertActivityObservers($plan_id, $observer_id[$i], $observer_name[$i], $invite_activity_name);
				}

				if ($invite_activity_name == 'pre_bid') {
					$this->admin_model->updatePreBidInviteDate($plan_id, $datetime);
				}
				if ($invite_activity_name == 'eligibility') {
					$this->admin_model->updateEligibilityInviteDate($plan_id, $datetime);
				}
				if ($invite_activity_name == 'sub_open') {
					$this->admin_model->updateSubOpenInviteDate($plan_id, $datetime);
				}
				if ($invite_activity_name == 'bid_evaluation') {
					$this->admin_model->updateBidEvaluationInviteDate($plan_id, $datetime);
				}
				if ($invite_activity_name == 'post_qual') {
					$this->admin_model->updatePostQualInviteDate($plan_id, $datetime);
				}
				if ($invite_activity_name == 'delivery_completion') {
					$this->admin_model->updateDeliveryCompletionInviteDate($plan_id, $datetime);
				}
				$data['valid_observers'] = true;
				$data['success'] = true;
			}
		}else{
			if (!empty($observer_id)) {
				$data['valid_observers'] = true;
			}
		}

		echo json_encode($data);
	}

	public function fpdfView(){
		$this->load->library('CustomFPDF');
		$pdf = $this->customfpdf->getInstance();
		$pdf->AliasNbPages();
		$pdf->AddPage('L','A4',0);
		$pdf->headerTable();
		$pdf->Output(); 
	}

}
