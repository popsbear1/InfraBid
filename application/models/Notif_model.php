<?php  

/**
 * 
 */
class Notif_model extends CI_model
{
	//incoming
	public function getIncomingAdvertisement($cur_date, $end){
		
		$this->db->select('*');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where("project_timeline.advertisement_start >=", $cur_date);
		$this->db->where("project_timeline.advertisement_start <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getIncomingPre_bid($cur_date, $end){
		
		$this->db->select('*');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where("project_timeline.pre_bid_start >=", $cur_date);
		$this->db->where("project_timeline.pre_bid_start <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getIncomingBid_submission($cur_date, $end){
		
		$this->db->select('*');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where("project_timeline.bid_submission_start >=", $cur_date);
		$this->db->where("project_timeline.bid_submission_start <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getIncomingPost_qualification($cur_date, $end){
		
		$this->db->select('*');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where("project_timeline.post_qualification_start >=", $cur_date);
		$this->db->where("project_timeline.post_qualification_start <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getIncomingAward_notice($cur_date, $end){
		
		$this->db->select('*');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where("project_timeline.award_notice_start >=", $cur_date);
		$this->db->where("project_timeline.award_notice_start <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getIncomingContract_signing($cur_date, $end){
		
		$this->db->select('*');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where("project_timeline.contract_signing_start >=", $cur_date);
		$this->db->where("project_timeline.contract_signing_start <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getIncomingAuthority_approval($cur_date, $end){
		
		$this->db->select('*');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where("project_timeline.authority_approval_start >=", $cur_date);
		$this->db->where("project_timeline.authority_approval_start <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function getIncomingProceed_notice($cur_date, $end){
		
		$this->db->select('*');
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
		
		$this->db->select('*');
		$this->db->from('project_plan');
		$this->db->join('project_timeline', 'project_plan.plan_id = project_timeline.plan_id');
		$this->db->join('project_activity_status', 'project_plan.plan_id = project_activity_status.plan_id');
		$this->db->where('project_activity_status.advertisement', 'pending');
		$this->db->where("project_timeline.advertisement_end >=", $cur_date);
		$this->db->where("project_timeline.advertisement_end <=", $end);

		$query = $this->db->get();

		return $query->result_array();
	}

}

?>