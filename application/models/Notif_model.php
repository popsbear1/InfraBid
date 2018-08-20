<?php  

/**
 * 
 */
class Notif_model extends CI_model
{

	//Date range queries

	public function getDateRangeAdvertisement($start_date, $end_date){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Advertisement/Posting" as activity, project_timeline.advertisement_start as start_date, project_timeline.advertisement_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where("project_timeline.advertisement_start >=", $start_date);
		$this->db->where("project_timeline.advertisement_end <=", $end_date);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getDateRangePre_bid($start_date, $end_date){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Pre-bid Conference" as activity, project_timeline.pre_bid_start as start_date, project_timeline.pre_bid_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where("project_timeline.pre_bid_start >=", $start_date);
		$this->db->where("project_timeline.pre_bid_end <=", $end_date);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getDateRangeBid_submission($start_date, $end_date){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Submission of Bid" as activity, project_timeline.bid_submission_start as start_date, project_timeline.bid_submission_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where("project_timeline.bid_submission_start >=", $start_date);
		$this->db->where("project_timeline.bid_submission_end <=", $end_date);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getDateRangeBid_evaluation($start_date, $end_date){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Bid Evaluation" as activity, project_timeline.bid_submission_start as start_date, project_timeline.bid_submission_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where("project_timeline.bid_evaluation_start >=", $start_date);
		$this->db->where("project_timeline.bid_evaluation_end <=", $end_date);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getDateRangePost_qualification($start_date, $end_date){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Post Qualification" as activity, project_timeline.post_qualification_start as start_date, project_timeline.post_qualification_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where("project_timeline.post_qualification_start >=", $start_date);
		$this->db->where("project_timeline.post_qualification_end <=", $end_date);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getDateRangeAward_notice($start_date, $end_date){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Issuance of Notice of Awards" as activity, project_timeline.award_notice_start as start_date, project_timeline.award_notice_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where("project_timeline.award_notice_start >=", $start_date);
		$this->db->where("project_timeline.award_notice_end <=", $end_date);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getDateRangeContract_signing($start_date, $end_date){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Contract Preparation and Signing" as activity, project_timeline.contract_signing_start as start_date, project_timeline.contract_signing_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where("project_timeline.contract_signing_start >=", $start_date);
		$this->db->where("project_timeline.contract_signing_end <=", $end_date);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getDateRangeAuthority_approval($start_date, $end_date){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Approval by Higher Authority" as activity, project_timeline.authority_approval_start as start_date, project_timeline.authority_approval_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where("project_timeline.authority_approval_start >=", $start_date);
		$this->db->where("project_timeline.authority_approval_end <=", $end_date);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getDateRangeProceed_notice($start_date, $end_date){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Notice to Proceed" as activity, project_timeline.proceed_notice_start as start_date, project_timeline.proceed_notice_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where("project_timeline.proceed_notice_start >=", $start_date);
		$this->db->where("project_timeline.proceed_notice_end <=", $end_date);

		$query = $this->db->get();

		return $query->result_array();
	}


	public function countAllAPP(){
		$date = date('Y');
		$this->db->select('count(plan_id) as count');
		$this->db->from('project_plan');
		$this->db->where('project_year', $date);

		$query = $this->db->get();

		return $query->row();
	}

	public function countAllOngoing(){
		$date = date('Y');
		$this->db->select('count(plan_id) as count');
		$this->db->from('project_plan');
		$this->db->where('project_year', $date);
		$this->db->where('status', 'onprocess');
		$this->db->or_where('status', 'for_rebid');
		$this->db->or_where('status', 'for_implementation');

		$query = $this->db->get();

		return $query->row();
	}

	public function countAllReview(){
		$date = date('Y');
		$this->db->select('count(plan_id) as count');
		$this->db->from('project_plan');
		$this->db->where('project_year', $date);
		$this->db->where('status', 'for_review');

		$query = $this->db->get();

		return $query->row();
	}

	public function countAllCompleted(){
		$date = date('Y');
		$this->db->select('count(plan_id) as count');
		$this->db->from('project_plan');
		$this->db->where('project_year', $date);
		$this->db->where('status', 'completed');

		$query = $this->db->get();

		return $query->row();
	}

	//incoming
	public function getIncomingAdvertisement($cur_date, $end){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Advertisement/Posting" as activity, project_timeline.advertisement_start as start_date, project_timeline.advertisement_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where("project_timeline.advertisement_start >=", $cur_date);
		$this->db->where("project_timeline.advertisement_start <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getIncomingPre_bid($cur_date, $end){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Pre-bid Conference" as activity, project_timeline.pre_bid_start as start_date, project_timeline.pre_bid_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where("project_timeline.pre_bid_start >=", $cur_date);
		$this->db->where("project_timeline.pre_bid_start <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getIncomingBid_submission($cur_date, $end){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Submission of Bid" as activity, project_timeline.bid_submission_start as start_date, project_timeline.bid_submission_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where("project_timeline.bid_submission_start >=", $cur_date);
		$this->db->where("project_timeline.bid_submission_start <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getIncomingBid_evaluation($cur_date, $end){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Bid Evaluation" as activity, project_timeline.bid_submission_start as start_date, project_timeline.bid_submission_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where("project_timeline.bid_evaluation_start >=", $cur_date);
		$this->db->where("project_timeline.bid_evaluation_start <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getIncomingPost_qualification($cur_date, $end){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Post Qualification" as activity, project_timeline.post_qualification_start as start_date, project_timeline.post_qualification_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where("project_timeline.post_qualification_start >=", $cur_date);
		$this->db->where("project_timeline.post_qualification_start <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getIncomingAward_notice($cur_date, $end){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Issuance of Notice of Awards" as activity, project_timeline.award_notice_start as start_date, project_timeline.award_notice_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where("project_timeline.award_notice_start >=", $cur_date);
		$this->db->where("project_timeline.award_notice_start <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getIncomingContract_signing($cur_date, $end){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Contract Preparation and Signing" as activity, project_timeline.contract_signing_start as start_date, project_timeline.contract_signing_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where("project_timeline.contract_signing_start >=", $cur_date);
		$this->db->where("project_timeline.contract_signing_start <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getIncomingAuthority_approval($cur_date, $end){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Approval by Higher Authority" as activity, project_timeline.authority_approval_start as start_date, project_timeline.authority_approval_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where("project_timeline.authority_approval_start >=", $cur_date);
		$this->db->where("project_timeline.authority_approval_start <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getIncomingProceed_notice($cur_date, $end){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Notice to Proceed" as activity, project_timeline.proceed_notice_start as start_date, project_timeline.proceed_notice_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where("project_timeline.proceed_notice_start >=", $cur_date);
		$this->db->where("project_timeline.proceed_notice_start <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

	//ending
	public function getDueAdvertisementDate($cur_date, $end){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Advertisement/Posting" as activity, project_timeline.pre_bid_start as start_date, project_timeline.pre_bid_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where('project_activity_status.advertisement', 'pending');
		$this->db->where("project_timeline.advertisement_end >=", $cur_date);
		$this->db->where("project_timeline.advertisement_end <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getDuePre_bid($cur_date, $end){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Pre-bid Conference" as activity, project_timeline.pre_bid_start as start_date, project_timeline.pre_bid_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where('project_activity_status.pre_bid', 'pending');
		$this->db->where("project_timeline.pre_bid_end >=", $cur_date);
		$this->db->where("project_timeline.pre_bid_end <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getDueBid_submission($cur_date, $end){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Submission of Bid" as activity, project_timeline.bid_submission_start as start_date, project_timeline.bid_submission_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where('project_activity_status.open_bid', 'pending');
		$this->db->where("project_timeline.bid_submission_end >=", $cur_date);
		$this->db->where("project_timeline.bid_submission_end <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getDueBid_evaluation($cur_date, $end){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Bid Evaluation" as activity, project_timeline.bid_submission_start as start_date, project_timeline.bid_submission_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where('project_activity_status.bid_evaluation', 'pending');
		$this->db->where("project_timeline.bid_evaluation_end >=", $cur_date);
		$this->db->where("project_timeline.bid_evaluation_end <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getDuePost_qualification($cur_date, $end){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Post Qualification" as activity, project_timeline.post_qualification_start as start_date, project_timeline.post_qualification_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where('project_activity_status.post_qual', 'pending');
		$this->db->where("project_timeline.post_qualification_end >=", $cur_date);
		$this->db->where("project_timeline.post_qualification_end <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getDueAward_notice($cur_date, $end){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Issuance of Notice of Awards" as activity, project_timeline.award_notice_start as start_date, project_timeline.award_notice_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where('project_activity_status.award_notice', 'pending');
		$this->db->where("project_timeline.award_notice_end >=", $cur_date);
		$this->db->where("project_timeline.award_notice_end <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getDueContract_signing($cur_date, $end){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Contract Preparation and Signing" as activity, project_timeline.contract_signing_start as start_date, project_timeline.contract_signing_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where('project_activity_status.contract_signing', 'pending');
		$this->db->where("project_timeline.contract_signing_end >=", $cur_date);
		$this->db->where("project_timeline.contract_signing_end <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getDueAuthority_approval($cur_date, $end){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Approval by Higher Authority" as activity, project_timeline.authority_approval_start as start_date, project_timeline.authority_approval_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where('project_activity_status.authority_approval', 'pending');
		$this->db->where("project_timeline.authority_approval_end >=", $cur_date);
		$this->db->where("project_timeline.authority_approval_end <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getDueProceed_notice($cur_date, $end){
		
		$this->db->select('project_plan.plan_id, project_plan.project_no, project_plan.project_title, "Notice to Proceed" as activity, project_timeline.proceed_notice_start as start_date, project_timeline.proceed_notice_end as end_date, project_plan.status');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where('project_activity_status.proceed_notice', 'pending');
		$this->db->where("project_timeline.proceed_notice_end >=", $cur_date);
		$this->db->where("project_timeline.proceed_notice_end <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

}

?>