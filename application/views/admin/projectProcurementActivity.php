<?php if ($_SESSION['user_type'] !== 'BAC_SEC'){
  header('Location: ..\index.php');
} ?>
<?php 


$pre_proc = convertDate($procActDate['pre_proc']);
$advertisement = convertDate($procActDate['advertisement']);
$pre_bid = convertDate($procActDate['pre_bid']);
$eligibility = convertDate($procActDate['eligibility_check']);
$openbid = convertDate($procActDate['open_bid']);
$bidevaluation = convertDate($procActDate['bid_evaluation']);
$postqual = convertDate($procActDate['post_qual']);
$awarddate = convertDate($procActDate['award_notice']);
$contractsigning = convertDate($procActDate['contract_signing']);
$authorityapproval = convertDate($procActDate['authority_approval']);
$proceednotice = convertDate($procActDate['proceed_notice']);
$completion = convertDate($procActDate['delivery_completion']);
$acceptance = convertDate($procActDate['acceptance_turnover']);

$pre_proc_start = convertDateTextual($timeline['pre_proc_date']);
$advertisement_start = convertDateTextual($timeline['advertisement_start']);
$advertisement_end = convertDateTextual($timeline['advertisement_end']);
$pre_bid_start = convertDateTextual($timeline['pre_bid_start']);
$pre_bid_end = convertDateTextual($timeline['pre_bid_end']);
$bid_submission_start = convertDateTextual($timeline['bid_submission_start']);
$bid_submission_end = convertDateTextual($timeline['bid_submission_end']);
$bid_evaluation_start = convertDateTextual($timeline['bid_evaluation_start']);
$bid_evaluation_end = convertDateTextual($timeline['bid_evaluation_end']);
$post_qualification_start = convertDateTextual($timeline['post_qualification_start']);
$post_qualification_end = convertDateTextual($timeline['post_qualification_end']);
$award_notice_start = convertDateTextual($timeline['award_notice_start']);
$award_notice_end = convertDateTextual($timeline['award_notice_end']);
$contract_signing_start = convertDateTextual($timeline['contract_signing_start']);
$contract_signing_end = convertDateTextual($timeline['contract_signing_end']);
$authority_approval_start = convertDateTextual($timeline['authority_approval_start']);
$authority_approval_end = convertDateTextual($timeline['authority_approval_end']);
$proceed_notice_start = convertDateTextual($timeline['proceed_notice_start']);
$proceed_notice_end = convertDateTextual($timeline['proceed_notice_end']);

function convertDateTextual($date){
  if ($date != null) {
    $timelineDate = date_create($date);
    $formatedTimelineDate = date_format($timelineDate, 'M-d-Y');
  }else{
    $formatedTimelineDate = null;
  }

  return $formatedTimelineDate;
}

function convertDate($date){

  if ($date != null) {
    $actdate = date_create($date);
    $formateddate = date_format($actdate, 'Y-m-d');
  }else{
    $formateddate = null;
  }

  return $formateddate;

}

?>

<div class="col-lg-9 col-md-9 col-sm-9">
  <h3>Procurement Activity</h3>
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6">
      <div class="form-horizontal">
        <div class="form-group">
          <label class="col-lg-4 col-md-4 col-sm-4 control-label">Contractor: </label>
          <div class="col-lg-8 col-md-8 col-sm-8">
            <p class="form-control"><?php echo $projectDetails['businessname'] . ' - ' . $projectDetails['owner'] ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
      <div class="form-horizontal">
        <div class="form-group">
          <label class="col-lg-4 col-md-4 col-sm-4 control-label">Bid Amount: </label>
          <div class="col-lg-8 col-md-8 col-sm-8">
            <p class="form-control"><?php echo number_format($projectDetails['proposed_bid'], 2) ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Activity View</h3>
    </div>
    <div class="panel-body" style="height: 570px">
      <div class="row" style="height: 70px">
        <div class="col-3 col-lg-3 col-md-4 col-sm-5 col-xs-12">
          <button class="btn btn-block btn-app bg-orange" data-toggle="modal" data-target="#sendInvitationsModal" style="margin-left: 0">
            <i class="fa fa-paper-plane"></i>
            Send Invites To Observers
          </button>
        </div>
        <div class="col-9 col-lg-9 col-md-8 col-sm-7 col-xs-12">
          <?php if (isset($_SESSION['success'])): ?>
            <div class="text-center bg-olive">
              <p style="padding: 20px 0px 20px 0px"><?php echo $_SESSION['success'] ?></p>
            </div>
          <?php endif ?>
          <?php if (isset($_SESSION['error'])): ?>
            <div class="text-center bg-maroon">
              <p style="padding: 20px 0px 20px 0px"><?php echo $_SESSION['error'] ?></p>
            </div>
          <?php endif ?>
        </div>
      </div>
      <div class="row">
        <div class="col-3 col-lg-3 col-md-4 col-sm-5 col-xs-12" style="height: 500px">

          <?php if ($actStatus['pre_proc'] != 'not_needed'): ?>
            <button class="activityBtn btn btn-default btn-block" type="button" id="pre_proc_btn">Pre-Proc Conference</button>
          <?php endif ?>

          <button class="activityBtn btn btn-default btn-block" type="button" id="advertisement_btn">Ads/Post of IAEB</button>

          <?php if ($actStatus['pre_bid'] != 'not_needed'): ?>
            <button class="activityBtn btn btn-default btn-block" type="button" id="pre_bid_btn">Pre-bid Conf</button>
          <?php endif ?>

          <button class="activityBtn btn btn-default btn-block" type="button" id="open_bid_btn">Sub/Open of Bids</button>

          <!-- <button class="activityBtn btn btn-default btn-block" type="button" id="eligibility_btn">Eligibility Check</button> -->

          <button class="activityBtn btn btn-default btn-block" type="button" id="bid_eval_btn">Bid Evaluation</button>

          <button class="activityBtn btn btn-default btn-block" type="button" id="post_qual_btn">Post Qual</button>

          <button class="activityBtn btn btn-default btn-block" type="button" id="award_notice_btn">Notice of Award</button>

          <button class="activityBtn btn btn-default btn-block" type="button" id="contract_signing_btn">Contract Signing</button>

          <?php if ($actStatus['authority_approval'] != 'not_needed'): ?>
            <button class="activityBtn btn btn-default btn-block" type="button" id="authority_approval_btn">Authority Approval</button>
          <?php endif ?>

          <button class="activityBtn btn btn-default btn-block" type="button" id="proceed_notice_btn">Notice to Proceed</button>

          <button class="activityBtn btn btn-default btn-block" type="button" id="delivery_completion_btn">Delivery/Completion</button>

          <button class="activityBtn btn btn-default btn-block" type="button" id="acceptance_turnover_btn">Acceptance/Turnover</button>
        </div>
        <div class="col-9 col-lg-9 col-md-8 col-sm-7 col-xs-12 well" style="height: 480px;">
          <?php if ($actStatus['pre_proc'] != 'not_needed'): ?>
            <div id="pre_proc_view" class="activity_view form-horizontal" hidden="hidden">
              <form id="pre_proc_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" autocomplete="off">

              <input type="text" name="activity_name" value="pre_proc" hidden>
                <div class="form-group">
                  <label class="control-label col-lg-5 col-md-5 col-sm-5">Pre-Procurement Conference *: </label>
                  <div class="col-lg-7 col-md-7 col-sm-7">
                    <input type="text" id="pre_proc" name="activity_date" placeholder="<?php echo convertDateTextual($pre_proc) ?>" class="form-control procActDateInput">
                  </div>
                </div>
              </form> 
            </div>
          <?php endif ?>

          <div id="ads_post_view" class="activity_view" hidden="hidden">
            <form id="advertisement_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal"  autocomplete="off">
              <input type="text" name="activity_name" value="advertisement" hidden>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">Start Date of Add/Post of IAEB:</label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <p class="form-control"><?php echo $advertisement_start ?></p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">End Date of Add/Post of IAEB:</label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <p class="form-control"><?php echo $advertisement_end ?></p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">Ads/Post of IAEB *: </label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <input type="text" id="advertisement" placeholder="<?php echo convertDateTextual($advertisement) ?>" name="activity_date" class="form-control procActDateInput">
                </div>
              </div>          
            </form>
          </div>

          <?php if ($actStatus['pre_bid'] != 'not_needed'): ?>
            <div id="pre_bid_view" class ="activity_view" hidden="hidden">
              <form id="pre_bid_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal"  autocomplete="off">
                <input type="text" name="activity_name" value="pre_bid" hidden>
                <div class="form-group">
                  <label class="control-label col-lg-5 col-md-5 col-sm-5">Start Date of Pre-bid Conf:</label>
                  <div class="col-lg-7 col-md-7 col-sm-7">
                    <p class="form-control"><?php echo $pre_bid_start ?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-5 col-md-5 col-sm-5">End Date of Pre-bid Conf:</label>
                  <div class="col-lg-7 col-md-7 col-sm-7">
                    <p class="form-control"><?php echo $pre_bid_end ?></p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-5 col-md-5 col-sm-5">Pre-bid Conf *: </label>
                  <div class="col-lg-7 col-md-7 col-sm-7">
                    <input type="text" id="pre_bid" placeholder="<?php echo convertDateTextual($pre_bid) ?>" name="activity_date" class="form-control procActDateInput">
                  </div>
                </div>
              </form>
            </div>
          <?php endif ?>

          <div id="bid_open_view" class="activity_view" hidden="hidden">
            <form id="open_bid_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal" autocomplete="off">

              <input type="text" name="activity_name" value="open_bid" hidden>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">Start Date of Sub/Open of Bids:</label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <p class="form-control"><?php echo $bid_submission_start ?></p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">End Date of Sub/Open of Bids:</label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <p class="form-control"><?php echo $bid_submission_end ?></p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">Sub/Open of Bids *: </label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <input type="text" id="openbid" placeholder="<?php echo convertDateTextual($openbid) ?>" name="activity_date" class="form-control procActDateInput">
                </div>
              </div>
              <!-- <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">Number of Re-bids: </label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <p class="form-control"><?php echo $projectDetails['re_bid_count'] ?></p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">Select Contractor *: </label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <select name="contractor" id="contractor" class="form-control">
                    <option hidden selected disabled>
                      <?php
                      if ($projectDetails['contractor_id'] == null) {
                        echo 'Choose Contractor';
                      }else{
                        echo $projectDetails['businessname'];
                      }  
                      ?>
                    </option>
                    <?php foreach ($contractors as $contractor): ?>
                      <option value="<?php echo $contractor['contractor_id'] ?>"><?php echo $contractor['businessname'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">Proposed Bid *: </label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <input type="text" id="bid_proposal" name="bid_proposal" class="form-control" placeholder="<?php echo number_format($projectDetails['proposed_bid'], 2) ?>">
                </div>
              </div> -->
            </form>
          </div>

          <!-- <div id="eligibility_check_view" class ="activity_view" hidden="hidden">
            <form id="eligibility_check_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal">

              <input type="text" name="activity_name" value="eligibility_check" hidden>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">Number of Re-bids: </label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <p class="form-control"><?php echo $projectDetails['re_bid_count'] ?></p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">Eligibility Check *: </label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <input type="date" id="eligibility" value="<?php echo $eligibility ?>" name="activity_date" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">Select Contractor *: </label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <select name="contractor" id="contractor" class="form-control">
                    <option hidden selected disabled>
                      <?php
                      if ($projectDetails['contractor_id'] == null) {
                        echo 'Choose Contractor';
                      }else{
                        echo $projectDetails['businessname'];
                      }  
                      ?>
                    </option>
                    <?php foreach ($contractors as $contractor): ?>
                      <option value="<?php echo $contractor['contractor_id'] ?>"><?php echo $contractor['businessname'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">Proposed Bid *: </label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <input type="text" id="bid_proposal" name="bid_proposal" class="form-control" placeholder="<?php echo $projectDetails['proposed_bid'] ?>">
                </div>
              </div>
            </form>
          </div> -->

          <div id="bid_evaluation_view" class="activity_view" hidden="hidden">
            <form id="bid_evaluation_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal"  autocomplete="off">

              <input type="text" name="activity_name" value="bid_evaluation" hidden>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">Start Date of Bid Evaluation:</label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <p class="form-control"><?php echo $bid_evaluation_start ?></p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">End Date of Bid Evaluation:</label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <p class="form-control"><?php echo $bid_evaluation_end ?></p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">Bid Evaluation *: </label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <input type="text" id="bidevaluation" placeholder="<?php echo convertDateTextual($bidevaluation) ?>" name="activity_date" class="form-control procActDateInput">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="pull-left">
                    <p style="color: red"><small>List of bidders must be complete before selection. A single chance is given for selection of bidders.</small></p>
                  </div>
                  <?php if (!empty($bidders)): unset($_POST)?>
                    <button type="button" class="btn bg-purple pull-right" data-toggle="modal" data-target="#selectProjectBidders"><small>Select Bidders</small></button>
                  <?php endif ?>
                  <?php if (empty($bidders)): ?>
                    
                    <button type="button" class="btn bg-purple pull-right" data-toggle="modal" data-target="#selectProjectBidders"><small>Select Bidders</small></button>
                  <?php endif ?>
                </div>
              </div> 
              <div class="row" style="background: white; overflow-y: scroll; height: 250px">
                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-top: 3px">
                  <table width="100%" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Bidder</th>
                        <th>Proposed Bid</th>
                        <th>Bid Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($bidders as $bid): ?>
                        <tr>
                          <td><?php echo $bid['businessname'] . ' - ' . $bid['owner'] ?></td>
                          <td><?php echo $bid['proposed_bid'] ?></td>
                          <td><?php echo $bid['bid_status'] ?></td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>      
            </form>
          </div>

          <div id="post_qual_view" class ="activity_view" hidden="hidden">
            <form id="post_qual_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal"  autocomplete="off">

              <input type="text" name="activity_name" value="post_qual" hidden>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">Start Date of Post Qual: </label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <input type="text" id="startpostqual" placeholder="<?php echo convertDateTextual($post_qualification_start) ?>" name="activity_date_start" class="form-control procActDateInput">
                  <!-- <p class="form-control"><?php echo $post_qualification_start; ?></p> -->
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">End Date of Post Qual: </label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <input type="text" id="endpostqual" placeholder="<?php echo convertDateTextual($post_qualification_end) ?>" name="activity_date_end" class="form-control procActDateInput">
                  <!-- <p class="form-control"><?php echo $post_qualification_end ?></p> -->
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">Post Qual *: </label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <input type="text" id="postqual" placeholder="<?php echo convertDateTextual($postqual) ?>" name="activity_date" class="form-control procActDateInput">
                </div>
              </div>
            </form>
          </div>

          <div id="notice_award_view" class="activity_view" hidden="hidden">
            <form id="award_notice_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal"  autocomplete="off">
              <input type="text" name="activity_name" value="awar_notice" hidden>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">Start Date of Notice of Award:</label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <input type="text" id="startawarddate" placeholder="<?php echo convertDateTextual($award_notice_start) ?>" name="activity_date_start" class="form-control procActDateInput">
                  <!-- <p class="form-control"><?php echo $award_notice_start ?></p> -->
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">End Date of Notice of Award:</label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <input type="text" id="endawarddate" placeholder="<?php echo convertDateTextual($award_notice_end) ?>" name="activity_date_end" class="form-control procActDateInput">
                  <!-- <p class="form-control"><?php echo $award_notice_end ?></p> -->
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">Notice of Award *: </label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <input type="text" id="awarddate" placeholder="<?php echo convertDateTextual($awarddate) ?>" name="activity_date" class="form-control procActDateInput">
                </div>
              </div>
            </form>
          </div>

          <div id="sign_contract_view" class ="activity_view" hidden="hidden">
            <form id="contract_signing_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal"  autocomplete="off">

              <input type="text" name="activity_name" value="contract_signing" hidden>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">Start Date of Contract Signing: </label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <input type="text" id="startcontractsigning" placeholder="<?php echo convertDateTextual($contract_signing_start) ?>" name="activity_date_start" class="form-control procActDateInput">
                  <!-- <p class="form-control"><?php echo $contract_signing_start ?></p> -->
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">End Date of Contract Signing: </label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <input type="text" id="endcontractsigning" placeholder="<?php echo convertDateTextual($contract_signing_end) ?>" name="activity_date_end" class="form-control procActDateInput">
                  <!-- <p class="form-control"><?php echo $contract_signing_end ?></p> -->
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">Contract Signing *: </label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <input type="text" id="contractsigning" placeholder="<?php echo convertDateTextual($contractsigning) ?>" name="activity_date" class="form-control procActDateInput">
                </div>
              </div>
            </form>
          </div>

          <?php if ($actStatus['authority_approval'] != 'not_needed'): ?>
            <div id="authority_approval_view" class ="activity_view" hidden="hidden">
              <form id="authority_approval_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal"  autocomplete="off">

                <input type="text" name="activity_name" value="authority_approval" hidden>
                <div class="form-group">
                  <label class="control-label col-lg-5 col-md-5 col-sm-5">Start Date of Authority Approval: </label>
                  <div class="col-lg-7 col-md-7 col-sm-7">
                    <input type="text" id="startauthorityapproval" placeholder="<?php echo convertDateTextual($authority_approval_start) ?>" name="activity_date_start" class="form-control procActDateInput">
                    <!-- <p class="form-control"><?php echo $authority_approval_start ?></p> -->
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-5 col-md-5 col-sm-5">End Date of Authority Approval: </label>
                  <div class="col-lg-7 col-md-7 col-sm-7">
                    <input type="text" id="endauthorityapproval" placeholder="<?php echo convertDateTextual($authority_approval_end) ?>" name="activity_date_end" class="form-control procActDateInput">
                    <!-- <p class="form-control"><?php echo $authority_approval_end ?></p> -->
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-5 col-md-5 col-sm-5">Authority Approval *: </label>
                  <div class="col-lg-7 col-md-7 col-sm-7">
                    <input type="text" id="authorityapproval" placeholder="<?php echo convertDateTextual($authorityapproval) ?>" name="activity_date" class="form-control procActDateInput">
                  </div>
                </div>
              </form>
            </div>
          <?php endif ?>

          <div id="proceed_notice_view" class="activity_view" hidden="hidden">
            <form id="proceed_notice_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal"  autocomplete="off">
              <input type="text" name="activity_name" value="proceed_notice" hidden>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">Start Date of Notice to Proceed: </label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <input type="text" id="startproceednotice" placeholder="<?php echo convertDateTextual($proceed_notice_start) ?>" name="activity_date_start" class="form-control procActDateInput">
                  <!-- <p class="form-control"><?php echo $proceed_notice_start ?></p> -->
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">End Date of Notice to Proceed: </label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <input type="text" id="endproceednotice" placeholder="<?php echo convertDateTextual($proceed_notice_end) ?>" name="activity_date_end" class="form-control procActDateInput">
                  <!-- <p class="form-control"><?php echo $proceed_notice_end ?></p> -->
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">Notice to Proceed *: </label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <input type="text" id="proceednotice" placeholder="<?php echo convertDateTextual($proceednotice) ?>" name="activity_date" class="form-control procActDateInput">
                </div>
              </div>
            </form>
          </div>

          <div id="completion_delivery_view" class ="activity_view" hidden="hidden">
            <form id="completion_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal"  autocomplete="off">

              <input type="text" name="activity_name" value="completion" hidden>

              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">Delivery/Completion *: </label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <input type="text" id="completion" placeholder="<?php echo $completion ?>" name="activity_date" class="form-control procActDateInput">
                </div>
              </div>
            </form>
          </div>

          <div id="turnover_acceptance_view" class ="activity_view" hidden="hidden">
            <form id="acceptance_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal"  autocomplete="off">
              <input type="text" name="activity_name" value="acceptance" hidden>

              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">Acceptance/Turnover *: </label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <input type="text" id="acceptance" placeholder="<?php echo $acceptance ?>" name="activity_date" class="form-control procActDateInput">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-5 col-md-5 col-sm-5">Final Remark* :</label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                  <textarea name="final_remark" id="final_remark" cols="30" rows="10" class="form-control" style="resize: none;"></textarea>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="panel-footer">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3">
          <p class="text-right">Actions:</p>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9">

          <div class="row procactsubmitcontainer" id="pre_proc_submit_btn" hidden="hidden">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
              <button type="button" class="btn btn-primary procactsubmitbutton" value="pre_proc,pre_proc_form">Submit</button>
            </div>
          </div>

          <div class="row procactsubmitcontainer" id="pre_proc_submit_btn" hidden="hidden">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
              <button type="button" class="btn btn-primary procactsubmitbutton" value="pre_proc,pre_proc_form">Submit</button>
            </div>
          </div>

          <div class="row procactsubmitcontainer" id="advertisement_submit_btn" hidden="hidden">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
              <button type="button" class="btn btn-primary procactsubmitbutton" value="advertisement,advertisement_form">Confirm</button>
            </div>
          </div>

          <div class="row procactsubmitcontainer" id="pre_bid_submit_btn" hidden="hidden">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
              <button type="button" class="btn btn-primary procactsubmitbutton" value="pre_bid,pre_bid_form">Confirm</button>
            </div>
          </div>

          <div class="row procactsubmitcontainer" id="open_bid_submit_btn" hidden="hidden">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
              <button type="button" class="btn btn-primary procactsubmitbutton" value="openbid,open_bid_form">Submit</button>
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#rebid_svp_model"><small>Schedule for re-bid/another SVP</small></button>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#recommendForReviewMode"><small>Recommend Project for Review</small></button> 
            </div>
          </div>

          <!-- <div class="row procactsubmitcontainer"  id="eligibility_submit_btn" hidden="hidden">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
              <button type="button" class="btn btn-primary procactsubmitbutton" value="eligibility,eligibility_check_form">Submit</button> 
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#rebid_svp_model">Schedule for re-bid/another SVP</button>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#recommendForReviewMode">Recommend Project for Review</button>
            </div>
          </div> -->

          <div class="row procactsubmitcontainer" id="bid_eval_submit_btn" hidden="hidden">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
              <?php 
                if (empty($bidders)) {
                  echo '<button type="button" class="btn btn-primary" data-toggle="tooltip" title="Select Bidders First!" disabled>Submit</button>';
                }else{
                  echo '<button type="button" class="btn btn-primary procactsubmitbutton" value="bidevaluation,bid_evaluation_form">Submit</button>';
                }
              ?>
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#rebid_svp_model"><small>Schedule for re-bid/another SVP</small></button>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#recommendForReviewMode"><small>Recommend Project for Review</small></button> 
            </div>
          </div>

          <div class="row procactsubmitcontainer"  id="post_qual_submit_btn" hidden="hidden">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
              <button type="button" class="btn btn-primary procactsubmitbutton" value="postqual,post_qual_form">Submit</button>
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#rebid_svp_model"><small>Schedule for re-bid/another SVP</small></button>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#recommendForReviewMode"><small>Recommend Project for Review</small></button> 
              <button type="button" class="btn bg-maroon" data-toggle="modal" data-target="#bidDisqualificationAndSanctinoModal" ><small>Bid Disqualification</small></button>
            </div>
          </div>

          <div class="row procactsubmitcontainer" id="award_notice_submit_btn" hidden="hidden">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
              <button type="button" class="btn btn-primary procactsubmitbutton" value="awarddate,award_notice_form">Submit</button>
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#rebid_svp_model"><small>Schedule for re-bid/another SVP</small></button>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#recommendForReviewMode"><small>Recommend Project for Review</small></button> 
              <button type="button" class="btn bg-purple" data-toggle="modal" data-target="#bidDisqualificationAndSanctinoModal"><small>Bidder Sanction</small></button>
            </div>
          </div>

          <div class="row procactsubmitcontainer" id="contract_signing_submit_btn" hidden="hidden">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
              <button type="button" class="btn btn-primary procactsubmitbutton" value="contractsigning,contract_signing_form">Submit</button>
            </div>
          </div>

          <div class="row procactsubmitcontainer" id="authority_approval_submit_btn" hidden="hidden">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
              <button type="button" class="btn btn-primary procactsubmitbutton" value="authorityapproval,authority_approval_form">Submit</button>
            </div>
          </div>

          <div class="row procactsubmitcontainer" id="proceed_notice_submit_btn" hidden="hidden">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
              <button type="button" class="btn btn-primary procactsubmitbutton" value="proceednotice,proceed_notice_form">Submit</button>
            </div>
          </div>

          <div class="row procactsubmitcontainer" id="completion_submit_btn" hidden="hidden">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
              <button type="button" class="btn btn-primary procactsubmitbutton" value="completion,completion_form">Submit</button>
            </div>
          </div>

          <div class="row procactsubmitcontainer" id="acceptance_submit_btn" hidden="hidden">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
              <button type="button" class="btn btn-primary procactsubmitbutton" value="acceptance,acceptance_form">Finish</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</section>

<!--Modal for confirmation -->

<div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×
        </button>
        <h4 class="modal-title" id="myModalLabel">Confirm Input Values</h4>
      </div>
      <div class="modal-body">
        <table class='table table-striped table-bordered' style='font-size:13px;'>
          <thead>
            <tr >
              <th style='text-align: center'>Attributes</th>
              <th style='text-align: center'>Values</th>
            </tr> 
          </thead>
          <tbody>
            <tr>
              <td>Project Title</td>
              <td><span id="project_title_modal"><?php echo $projectDetails['project_title'] ?></td>
            </tr>
            <tr>
              <td id="actName"></td>
              <td><span id="actDateValue"></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="formSubmitBtn" type="submit" name="submit" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>


<div id="openbidmodal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×
        </button>
        <h4 class="modal-title" id="myModalLabel">Confirm Input Values</h4>
      </div>
      <div class="modal-body">
        <table class='table table-striped table-bordered' style='font-size:13px;'>
          <thead>
            <tr >
              <th style='text-align: center'>Attributes</th>
              <th style='text-align: center'>Values</th>
            </tr> 
          </thead>
          <tbody>
            <tr>
              <td>Project Title</td>
              <td><span id="project_title_modal"><?php echo $projectDetails['project_title'] ?></td>
            </tr>
            <tr>
              <td id="actNameOpenBid"></td>
              <td id="actDateValueOpenBid"></td>
            </tr>
            <tr>
              <td>Contractor</td>
              <td id="contractorName"></td>
            </tr>
            <tr>
              <td>Proposed Bid</td>
              <td id="proposedBidAmmount"></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="formSubmitBtnOpenBid" type="submit" name="submit" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>

    <!--Modal for confirmation -->

    <div id="rebid_svp_model" class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Schedule for re-bid/another SVP</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Current Re-bid Count: </label>
              <p class="form-control"><?php echo $projectDetails['re_bid_count'] ?></p>
            </div>
            <div class="form-group">
              <label>Remark* : </label>
              <textarea name="re_bid_remark" id="re_bid_remark" cols="30" rows="10" class="form-control" style="resize: none;" form="rebidProjectForm" ></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <form action="<?php echo base_url('admin/rebidProjectPlan') ?>" method="POST" id="rebidProjectForm"  autocomplete="off">
              <input type="text" value="<?php echo $projectDetails['plan_id'] ?>" name="plan_id" hidden>
              
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Confirm</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="selectProjectBidders" class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document" style="width: 1000px;">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;
            </button>
            <h5 class="modal-title">Select Project Bidders</h5>
            
          </div>
          <div class="modal-body" style=" height: 500px;overflow-y: auto;">
            <div class="row">
              <div class="col-lg-7 col-md-7 col-sm-7">
                <div class="bg-purple">
                  <p style="padding: 10px; " class="text-center">Contractor List</p>
                </div>
                <table class="table-bordered" id="contractor_table">
                  <thead>
                    <tr>
                      <th class="text-center">Bussiness Name</th>
                      <th class="text-center"><i class="fa fa-plus"></i></th>
                      <th class="text-center">Owner</th>
                      
                    </tr>
                  </thead>
                  <tbody class="text-center">
                  </tbody>
                </table>
              </div>
              <div class="col-lg-5 col-sm-5 col-md-5">
                <div class="form-horizontal">
                  <div class="form-group">
                    <label class="col-lg-2 col-md-2 col-sm-2 control-label">ABC:</label>
                    <div class="col-lg-10 col-md-10 col-sm-10">
                      <p class="form-control input-lg"><?php echo number_format($projectDetails['abc'], 2) ?></p>
                    </div>
                  </div>
                </div>
                <div class="bg-olive">
                  <p style="padding: 10px; " class="text-center">Selected Bidders</p>
                </div>
                <form id="selected_contractors_form" autocomplete="off">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <td class="text-center">Bidder</td>
                        <td class="text-center">Bid Amount</td>
                        <td class="text-center"><i class="fa fa-minus"></i></td>
                      </tr>
                    </thead>
                    <tbody id="selected_contractors_container">
                    
                    </tbody>
                  </table>
                  <input type="text" name="abc" value="<?php echo $projectDetails['abc'] ?>" hidden>
                </form>
              </div>
            </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#smallModal">Confirm</button>
              <button type="button" class="btn btn-default" id="clear-bids" data-toggle="modal">Clear Current Bids</button>
          </div>
        </div>
      </div>
    </div>

      <div id="smallModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Confirm</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;
              </button>
            </div>
            <div class="modal-body">
              <p>Proceed with selected biders?</p>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" form="selected_contractors_form">Confirm</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
 
      <div id="recommendForReviewMode" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Recommend Project for Review</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;
                </button>
              </div>
              <div class="modal-body">
                <form id="recommendForReviewForm" action="<?php echo base_url('admin/recommendProjectPlanForReview') ?>" method="POST"  autocomplete="off">
                  <input type="text" name="plan_id" value="<?php echo $projectDetails['plan_id'] ?>" hidden>
                  <div class="form-group">
                    <label>Remark *: </label>
                    <textarea name="re_review_remark" id="re_review_remark" cols="30" rows="10" class="form-control" style="resize: none;"></textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" form="recommendForReviewForm" class="btn btn-danger">Confirm</button>
              </div>
            </div>
          </div>
        </div>


        <div id="bidDisqualificationAndSanctinoModal" class="modal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document" style="width: 1000px;">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;
                </button>
                <h5 class="modal-title">Bidder Disqualification/Sanction</h5>

              </div>
              <div class="modal-body" style=" height: 500px;">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="well">
                      <div class="form-group">
                        <label>Current Winning Bidder:</label>
                        <p class="form-control"><?php echo $projectDetails['businessname'] . ' - ' . $projectDetails['owner'] ?></p>
                      </div>
                      <div class="form-group">
                        <label>Winning Bid:</label>
                        <p class="form-control"><?php echo $projectDetails['proposed_bid'] ?></p>
                      </div>
                    </div>
                    <div style="height: 260px; overflow-y: scroll;">
                      <table class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>Bidder</th>
                            <th>Proposed Bid</th>
                            <th>Bid Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($bidders as $bid): ?>
                            <tr>
                              <td><?php echo $bid['businessname'] . ' - ' . $bid['owner']?></td>
                              <td><?php echo $bid['proposed_bid'] ?></td>
                              <td><?php echo $bid['bid_status'] ?></td>
                            </tr>
                          <?php endforeach ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                      <label>Current Re-bid Count: </label>
                      <p class="form-control"><?php echo $projectDetails['re_bid_count'] ?></p>
                    </div>
                    <div class="form-group">
                      <label>Remark/Reason for disqualification or sanction* : </label>
                      <textarea name="bidder_saction_disqualification_remark" id="bidder_saction_disqualification_remark" cols="30" rows="15" class="form-control" style="resize: none;" form="projectBidderDisqualificationAndSanctionForm" ></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <form action="<?php echo base_url('admin/projectBidderDisqualificationAndSunction') ?>" id="projectBidderDisqualificationAndSanctionForm"  autocomplete="off">
                  <input type="text" value="<?php echo $projectDetails['plan_id'] ?>" name="plan_id" hidden>
                  <button type="button" class="btn btn-primary" id="dis_qual_btn">Submit</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div id="sendInvitationsModal" class="modal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document" style=" width: 1000px;">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;
                </button>
                <h5 class="modal-title">Set Date Invitation Sent to Observers</h5>

              </div>
              <div class="modal-body" style=" height: 550px;">
                <form id="setObserversForm" autocomplete="off">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <div class="bg-olive">
                        <p style="padding: 10px 0px 10px 0px" class="text-center">Activity Observers and Invite Dates</p>
                      </div>
                      <div style="background: #dedfe0; height: 470px; padding-top: 5px">
                        <div class="margin">
                          <?php 
                            $currentActivity = null;
                            foreach ($activity_observers as $act_observer) {
                              if ($currentActivity == null) {
                                $currentActivity = $act_observer['activity_name'];
                                echo '<h4>' . $act_observer['activity_name'] . ' - ' . date_format(date_create($act_observer['invite_date']), 'M-d-Y') . '</h4>';
                                echo '<div class="margin"><p>' . $act_observer['observer_dept_name'] . ' - ' . $act_observer['name_of_observer'] . '</p></div>';
                              }else{
                                if ($currentActivity == $act_observer['activity_name']) {
                                  echo '<div class="margin"><p>' . $act_observer['observer_dept_name'] . ' - ' . $act_observer['name_of_observer'] . '</p></div>';
                                }else{
                                  $currentActivity = $act_observer['activity_name'];
                                  echo '<h4>' . $act_observer['activity_name'] . ' - ' . date_format(date_create($act_observer['invite_date']), 'M-d-Y') . '</h4>';
                                  echo '<div class="margin"><p>' . $act_observer['observer_dept_name'] . ' - ' . $act_observer['name_of_observer'] . '</p></div>';
                                }
                              }
                            }
                          ?>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                          <div class="bg-maroon">
                            <p style="padding: 10px 0px 10px 0px" class="text-center">Select Activity and Observers</p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div style="background: #dedfe0; height: 160px; overflow-y: auto; overflow-x: hidden;">
                            <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6">            
                                <div class="margin">
                                  <?php if ($projectDetails['pre_bid_invite_date'] == null): ?>
                                    <div class="radio">
                                      <label><input type="radio" name="invite_activity_name" value="pre_bid">Pre-bid</label>
                                    </div>
                                  <?php endif ?>
                                  <?php if ($projectDetails['pre_bid_invite_date'] != null): ?>
                                    <p><i class="fa fa-check-square" style="color: green"></i>  Pre-bid</p>
                                  <?php endif ?>
                                  <?php if ($projectDetails['eligibility_check_invite_date'] == null): ?>
                                    <div class="radio">
                                      <label><input type="radio" name="invite_activity_name" value="eligibility">Eligibility Check</label>
                                    </div>
                                  <?php endif ?>
                                  <?php if ($projectDetails['eligibility_check_invite_date'] != null): ?>
                                    <p><i class="fa fa-check-square" style="color: green"></i>  Eligibility Check</p>
                                  <?php endif ?>
                                  <?php if ($projectDetails['sub_open_invite_date'] == null): ?>
                                    <div class="radio">
                                      <label><input type="radio" name="invite_activity_name" value="sub_open">Submission/Open of Bids</label>
                                    </div>
                                  <?php endif ?>
                                  <?php if ($projectDetails['sub_open_invite_date'] != null): ?>
                                    <p><i class="fa fa-check-square" style="color: green"></i>  Submission/Open of Bids</p>
                                  <?php endif ?>
                                  <?php if ($projectDetails['bid_evaluation_invite_date'] == null): ?>
                                    <div class="radio">
                                      <label><input type="radio" name="invite_activity_name" value="bid_evaluation">Bid Evaluation</label>
                                    </div>
                                  <?php endif ?>
                                  <?php if ($projectDetails['bid_evaluation_invite_date'] != null): ?>
                                    <p><i class="fa fa-check-square" style="color: green"></i>  Bid Evaluation</p>
                                  <?php endif ?>
                                  <?php if ($projectDetails['post_qual_invite_date'] == null): ?>
                                    <div class="radio">
                                      <label><input type="radio" name="invite_activity_name" value="post_qual">Post Qualification</label>
                                    </div>
                                  <?php endif ?>
                                  <?php if ($projectDetails['post_qual_invite_date'] != null): ?>
                                    <p><i class="fa fa-check-square" style="color: green"></i>  Post Qualification</p>
                                  <?php endif ?>
                                  <?php if ($projectDetails['delivery_completion_invite_date'] == null): ?>
                                    <div class="radio">
                                      <label><input type="radio" name="invite_activity_name" value="delivery_completion">Delivery/Completion</label>
                                    </div>
                                  <?php endif ?>
                                  <?php if ($projectDetails['delivery_completion_invite_date'] != null): ?>
                                    <p><i class="fa fa-check-square" style="color: green"></i>  Delivery/Completion</p>
                                  <?php endif ?>
                                </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="margin">
                                  <?php foreach ($observers as $observer): ?>
                                    <div class="checkbox">
                                      <label><input type="checkbox" class="observer_checkbox" value="<?php echo $observer['observer_id'] . ',' . $observer['observer_dept_name'] ?>"><?php echo $observer['observer_dept_name'] ?></label>
                                    </div>
                                  <?php endforeach ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row" style="margin-top: 10px">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="form-horizontal">
                            <div class="form-group">
                              <label class="control-label col-lg-3 col-md-3 col-sm-3">Date Sent*: </label>
                              <div class="col-lg-9 col-md-9 col-sm-9">
                                <input class="form-control" type="text" name="invite_date_input" id="invite_date_input" required>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="bg-purple">
                            <p style="padding: 10px 0px 10px 0px" class="text-center">Input Observer Names</p>
                          </div>
                          <div style="background: #dedfe0; height: 200px; overflow-y: auto; overflow-x: hidden;">
                            <div class="row" style="padding: 10px">
                              <div class="col-lg-12 col-md-12 col-sm-12" id="observer_container">
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <input type="text" value="<?php echo $projectDetails['plan_id'] ?>" name="plan_id" hidden>
                </form>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="setObserversForm">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>


          <div id="disqualifiactionSanctionConfirmationModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Confirm</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Proceed with selecting another bidder?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" form="projectBidderDisqualificationAndSanctionForm">Confirm</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

            <div id="contractor_selection_alert" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Alert!!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;
                    </button>
                  </div>
                  <div class="modal-body">
                    <p class="text-center" id="contractor_selection_alert_message"></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

            <div id="bidderSelectionAlert" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Alert!!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;
                    </button>
                  </div>
                  <div class="modal-body">
                    <p class="text-center">All recorded bidders are disqualifide!</p>
                    <p class="text-center">This project can either be Re-bid or Re-review.</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

            <div id="observerSelectionAlert" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Alert!!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;
                    </button>
                  </div>
                  <div class="modal-body">
                    <p class="text-center" id="observerSelectionAlertMessage"></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>


            <!-- jQuery 3 -->
            <script src="<?php echo base_url() ?>public/bower_components/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap 3.3.7 -->
            <script src="<?php echo base_url() ?>public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- DataTables -->
            <script src="<?php echo base_url() ?>public/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
            <!-- SlimScroll -->
            <script src="<?php echo base_url() ?>public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
            <!-- FastClick -->
            <script src="<?php echo base_url() ?>public/bower_components/fastclick/lib/fastclick.js"></script>
            <!-- AdminLTE App -->
            <script src="<?php echo base_url() ?>public/dist/js/adminlte.min.js"></script>

            <script src="<?php echo base_url() ?>public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

            <!-- page script -->
<script>

  $(document).ready(function(){

    $('#invite_date_input').datepicker({
      orientation: 'bottom auto',
      format: 'yyyy-mm-dd',
      autoclose: true
    })

    var contractors_data = '<?php echo json_encode($contractors) ?>';
    var contractors = JSON.parse(contractors_data);
    var selected_contractors = new Array();

    $('.procActDateInput').datepicker({
      orientation: 'bottom auto',
      format: 'yyyy-mm-dd',
      autoclose: true
    });

    $('#contractor_table').DataTable({
      data: contractors,
      columns: [
        { data: 'businessname' },
        { data: 'owner' },
        {
          data: null,
          render: function(data, type, row){
            return '<button class="btn btn-primary btn-sm contractor_add" value="' + data.contractor_id + '">' +
                    '<i class="fa fa-plus"></i>' +
                    '</button>'
          }
        }
      ],
      'paging'      : false,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : false
    });

    $(document).on('click', '.contractor_add', function(){
      var contractor_id = $(this).val();
      if (!selected_contractors.includes(contractor_id)) {
        selected_contractors.push(contractor_id);
        var contractor_bussinessname = $(this).parent().prev().prev().html();
        var bussiness_owner = $(this).parent().prev().html();
        $('#selected_contractors_container').prepend(
          '<tr>' +
            '<td>' + contractor_bussinessname + ' - ' + bussiness_owner + '</td>' +
            
            '<td>' +
              '<input class="dingus" name="contractor_id[]" value="' + contractor_id + '" hidden>' +
              '<input class="dingus form-control" name="bids[]" >' +
            '</td>' +
            '<td><button class="btn btn-primary btn-sm contractor_remove"><i class="fa fa-minus"></i></button><td>' +
          '</tr>'
        );
      }else{
        $('#contractor_selection_alert_message').html('Contractor Already Included!');
        $('#contractor_selection_alert').modal('show');
      }
    });

    $(document).on("click", ".contractor_remove", function(){
       var contractor_id = $(this).val();
       selected_contractors.pop(contractor_id);
       $(this).parent().parent().remove();
    }); 
    $(document).on("click", "#clear-bids", function(){
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url('admin/clearBidders') ?>',
        data: $(this).serialize(),
        dataType: 'json'
      }).done(function(response){
        if (response.success == true) {
          window.location.replace("<?php echo base_url('admin/procurementActivityView') ?>");
        }else{
          if(response.valid_contractors == false && response.valid_bids == false){
            $('#contractor_selection_alert_message').html('Make sure a contractor is selected and entered bids are numeric and is less than or equal to the project ABC!');
          }
          if(response.valid_contractors == false && response.valid_bids == true){
            $('#contractor_selection_alert_message').html('Make sure a contractor is selected!');
          }
          if(response.valid_contractors == true && response.valid_bids == false){
            $('#contractor_selection_alert_message').html('Make sure entered bids are numeric and is less than or equal to the project ABC!');
          }
          $('#contractor_selection_alert').modal('show');
        }
      });
    });

    $('#selected_contractors_form').submit(function(e){
      e.preventDefault();

      $.ajax({
        type: 'POST',
        url: '<?php echo base_url('admin/addBidders') ?>',
        data: $(this).serialize(),
        dataType: 'json'
      }).done(function(response){
        if (response.success == true) {
          window.location.replace("<?php echo base_url('admin/procurementActivityView') ?>");
        }else{
          if(response.valid_contractors == false && response.valid_bids == false){
            $('#contractor_selection_alert_message').html('Make sure a contractor is selected and entered bids are numeric and is less than or equal to the project ABC!');
          }
          if(response.valid_contractors == false && response.valid_bids == true){
            $('#contractor_selection_alert_message').html('Make sure a contractor is selected!');
          }
          if(response.valid_contractors == true && response.valid_bids == false){
            $('#contractor_selection_alert_message').html('Make sure entered bids are numeric and is less than or equal to the project ABC!');
          }
          $('#contractor_selection_alert').modal('show');
        }
      });
    });
 
 
  });

    

  var planDates = {
    pre_proc : '<?php echo $pre_proc ?>',
    advertisement : '<?php echo $advertisement ?>',
    pre_bid : '<?php echo $pre_bid ?>',
    openbid : '<?php echo $openbid ?>',
    bidevaluation : '<?php echo $bidevaluation ?>',
    postqual : '<?php echo $postqual ?>',
    awarddate : '<?php echo $awarddate ?>',
    contractsigning : '<?php echo $contractsigning ?>',
    authorityapproval : '<?php echo $authorityapproval ?>',
    proceednotice : '<?php echo $proceednotice ?>',
    completion : '<?php echo $completion ?>',
    acceptance : '<?php echo $acceptance ?>'
  };


  var pre_proc_date = '<?php echo $timeline['pre_proc_date'] ?>';
  var advertisement_start = '<?php echo $timeline['advertisement_start'] ?>';
  var advertisement_end = '<?php echo $timeline['advertisement_end'] ?>';
  var pre_bid_start = '<?php echo $timeline['pre_bid_start'] ?>';
  var pre_bid_end = '<?php echo $timeline['pre_bid_end'] ?>';
  var bid_submission_start = '<?php echo $timeline['bid_submission_start'] ?>';
  var bid_submission_end = '<?php echo $timeline['bid_submission_end'] ?>';
  var bid_evaluation_start = '<?php echo $timeline['bid_evaluation_start'] ?>';
  var bid_evaluation_end = '<?php echo $timeline['bid_evaluation_end'] ?>';
  var post_qualification_start = '<?php echo $timeline['post_qualification_start'] ?>';
  var post_qualification_end = '<?php echo $timeline['post_qualification_end'] ?>';
  var award_notice_start = '<?php echo $timeline['award_notice_start'] ?>';
  var award_notice_end = '<?php echo $timeline['award_notice_end'] ?>';
  var contract_signing_start = '<?php echo $timeline['contract_signing_start'] ?>';
  var contract_signing_end = '<?php echo $timeline['contract_signing_end'] ?>';
  var authority_approval_start = '<?php echo $timeline['authority_approval_start'] ?>';
  var authority_approval_end = '<?php echo $timeline['authority_approval_end'] ?>';
  var proceed_notice_start = '<?php echo $timeline['proceed_notice_start'] ?>';
  var proceed_notice_end = '<?php echo $timeline['proceed_notice_end'] ?>'; 

  var new_post_qualification_start, new_post_qualification_end, new_award_notice_start, new_award_notice_end,new_contract_signing_start, new_contract_signing_end, new_authority_approval_start, new_authority_approval_end, new_proceed_notice_start, new_proceed_notice_end = '';

  var start_date, end_date, prev_act_date = '';

  var activity_status = [
    {
      actname : 'pre_proc_status', 
      status : '<?php echo $actStatus['pre_proc'] ?>'
    },
    {
      actname : 'advertisement_status', 
      status : '<?php echo $actStatus['advertisement'] ?>'
    },
    {
      actname : 'pre_bid_status', 
      status : '<?php echo $actStatus['pre_bid'] ?>'
    },  
    {
      actname : 'open_bid_status', 
      status : '<?php echo $actStatus['open_bid'] ?>'
    },
    // {
    //   actname : 'eligibility_check_status', 
    //   status : '<?php echo $actStatus['eligibility_check'] ?>'
    // },
    {
      actname : 'bid_evaluation_status', 
      status : '<?php echo $actStatus['bid_evaluation'] ?>'
    },
    {
      actname : 'post_qual_status', 
      status : '<?php echo $actStatus['post_qual'] ?>'
    },
    {
      actname : 'award_notice_status', 
      status : '<?php echo $actStatus['award_notice'] ?>'
    },
    {
      actname : 'contract_signing_status', 
      status : '<?php echo $actStatus['contract_signing'] ?>'
    },
    {
      actname : 'authority_approval_status', 
      status : '<?php echo $actStatus['authority_approval'] ?>'
    },
    {
      actname : 'proceed_notice_status', 
      status : '<?php echo $actStatus['proceed_notice'] ?>'
    },
    {
      actname : 'delivery_completion_status', 
      status : '<?php echo $actStatus['delivery_completion'] ?>'
    },
    {
      actname : 'acceptance_turnover_status', 
      status : '<?php echo $actStatus['acceptance_turnover'] ?>'
    }
  ];

  $(document).ready(function(){
    for (var i = 0; i < activity_status.length; i++) {

      if (activity_status[i].status == 'pending') {
        var index = i + 1;
        for (var j = index; j < activity_status.length; j++) {
          activity_status[j].status = 'coming';
        }
      }
      
    }

    for (var i = 0; i < activity_status.length; i++) {
      if (activity_status[i].actname == 'pre_proc_status') {
        setActivityView(activity_status[i].status, '#pre_proc_btn', '#pre_proc_view', '#pre_proc_submit_btn'); 
      }

      if (activity_status[i].actname == 'advertisement_status') {
        setActivityView(activity_status[i].status, '#advertisement_btn', '#ads_post_view', '#advertisement_submit_btn', '#advertisement', prevActStatus(activity_status[i].actname));
      }

      if (activity_status[i].actname == 'pre_bid_status') {
        setActivityView(activity_status[i].status, '#pre_bid_btn', '#pre_bid_view', '#pre_bid_submit_btn', '#pre_bid', prevActStatus(activity_status[i].actname));
      }

      if (activity_status[i].actname == 'open_bid_status') {
        setActivityView(activity_status[i].status, '#open_bid_btn', '#bid_open_view', '#open_bid_submit_btn', '#openbid', prevActStatus(activity_status[i].actname));
      }

      // if (activity_status[i].actname == 'eligibility_check_status') {
      //   setActivityView(activity_status[i].status, '#eligibility_btn', '#eligibility_check_view', '#eligibility_submit_btn');
      // }

      if (activity_status[i].actname == 'bid_evaluation_status') {
        setActivityView(activity_status[i].status, '#bid_eval_btn', '#bid_evaluation_view', '#bid_eval_submit_btn', '#bidevaluation', prevActStatus(activity_status[i].actname));
      }

      if (activity_status[i].actname == 'post_qual_status') {
        setActivityView(activity_status[i].status, '#post_qual_btn', '#post_qual_view', '#post_qual_submit_btn', '#postqual', prevActStatus(activity_status[i].actname));
      }

      if (activity_status[i].actname == 'award_notice_status') {
        setActivityView(activity_status[i].status, '#award_notice_btn', '#notice_award_view', '#award_notice_submit_btn', '#awarddate', prevActStatus(activity_status[i].actname));
      }

      if (activity_status[i].actname == 'contract_signing_status') {
        setActivityView(activity_status[i].status, '#contract_signing_btn', '#sign_contract_view', '#contract_signing_submit_btn', '#contractsigning', prevActStatus(activity_status[i].actname));
      }

      if (activity_status[i].actname == 'authority_approval_status') {
        setActivityView(activity_status[i].status, '#authority_approval_btn', '#authority_approval_view', '#authority_approval_submit_btn', '#authorityapproval', prevActStatus(activity_status[i].actname));
      }

      if (activity_status[i].actname == 'proceed_notice_status') {
        setActivityView(activity_status[i].status, '#proceed_notice_btn', '#proceed_notice_view', '#proceed_notice_submit_btn', '#proceednotice', prevActStatus(activity_status[i].actname));
      }

      if (activity_status[i].actname == 'delivery_completion_status') {
        setActivityView(activity_status[i].status, '#delivery_completion_btn', '#completion_delivery_view', '#completion_submit_btn', '#completion', prevActStatus(activity_status[i].actname));
      }

      if (activity_status[i].actname == 'acceptance_turnover_status') {
        setActivityView(activity_status[i].status, '#acceptance_turnover_btn', '#turnover_acceptance_view', '#acceptance_submit_btn', '#final_remark', prevActStatus(activity_status[i].actname));
      }
    }
  })

  function setActivityView(status, btnID, viewID, submitID, inputID, prevActStatus){
    if (status == 'finished') {
      $(btnID).addClass('btn-success');
      $(btnID).prop('disabled', '');
      if (inputID !== undefined) {
        $(inputID).prop('disabled', 'disabled');
      } 
    } else if(status == 'pending' && prevActStatus == 'finished') {
      setButtonStyle(btnID);
      $(viewID).removeAttr('hidden');
      $(submitID).removeAttr('hidden');
      $(btnID).prop('disabled', '');
    } else {
      $(btnID).prop('disabled', 'disabled');
    }
  }

  function prevActStatus(activity_status_actname) {
    for (var i = 1; i < activity_status.length; i++) {
      if (activity_status[i].actname === activity_status_actname) {
        return activity_status[i - 1].status;
        break;
      }
    }
  }

  var inputValue = '';
  var isAdjustableActivity = false;
  var adjustableActivities = ['postqual','awarddate','contractsigning','authorityapproval','proceednotice'];

  $('.procactsubmitbutton').click(function(event){
    var activityArray = $(this).val().split(",");
    var activity = activityArray[0];
    var activityForm = activityArray[1];
    var setDateElement = $('#' + activity);
    var setDateValue = setDateElement.val();
    for (var x = 0; x < adjustableActivities.length; x++) {
      if (activity === adjustableActivities[x]) {
        isAdjustableActivity = true;
        break;
      }
    }
    if (isAdjustableActivity == 'true') {
      var endDateElement = $('#end' + activity);
      var endDateValue = endDateElement.val();
      if (setDateValue === endDateValue) {
        inputValue = endDateValue;
      } else {
        inputValue = setDateValue;
      }
    } else {
      inputValue = setDateValue;
    }
    
    var errormsg = '<p class="text-danger text-center">Date must be in range of the starting and ending date!!</p>';

    if (activity == 'pre_proc') {
      if (verifyDate(inputValue, activity)) {
        if (comparePreProcToAdvertDate(inputValue, advertisement_start)) {
          proceedSubmit('Pre-Proc Date', inputValue, activityForm);
        }else{
          showError(activity, '<p class="text-danger text-center">Date must be earlier than Ads/Post Date</p>');
        } 
      }
    }
    if (activity == 'advertisement') {
      if (verifyDate(inputValue, activity)) {
        if (compareDates(inputValue, advertisement_start, advertisement_end)) {
          proceedSubmit('Advertisement Date', inputValue, activityForm);
        }else{
          showError(activity, errormsg);
        }
      }
    }
    if (activity == 'pre_bid') {
      if (verifyDate(inputValue, activity)) {
        if (compareDates(inputValue, pre_bid_start, pre_bid_end)) {
          proceedSubmit('Pre-bid Date', inputValue, activityForm);
        }else{
          showError(activity, errormsg);
        }
      }
    }
    if (activity == 'openbid') {
      if (verifyDate(inputValue, activity)) {
        if (compareDates(inputValue, bid_submission_start, bid_submission_end)) {
          proceedSubmit('Open-bid Date', inputValue, activityForm);
        }else{
          showError(activity, errormsg);
        }
      } 
      // if (verifyDateOpenBid(inputValue, activity)) {
      //   if (validateOpenBidInput(inputValue, bid_submission_start, bid_submission_end)) {
      //     proceedSubmitOpenBid('Open-bid Date', inputValue, activityForm);
      //   }
      // }
    }
    if (activity == 'bidevaluation') {
      if (verifyDate(inputValue, activity)) {
        if (compareDates(inputValue, bid_evaluation_start, bid_evaluation_end)) {
          proceedSubmit('Bid Evaluation Date', inputValue, activityForm);
        }else{
          showError(activity, errormsg);
        }
      }    
    }
    if (activity == 'postqual') {
      if ($('#startpostqual').val().length === 0) {
        new_post_qualification_start = post_qualification_start;
      } else {
        new_post_qualification_start = $('#startpostqual').val();
      }
      if ($('#endpostqual').val().length === 0) {
        new_post_qualification_end = post_qualification_end;
      } else {
        new_post_qualification_end = $('#endpostqual').val();
      }
      if (compareEntryDates(new_post_qualification_start, new_post_qualification_end)) {
        if (verifyDate(inputValue, activity)) {
          if (compareDates(inputValue, new_post_qualification_start, new_post_qualification_end)) {
            proceedSubmit('Post Qualification Date', inputValue, activityForm);
          }else{
            showError(activity, errormsg);
          }
        }
      } else {
        alert('Starting date must not be later than ending date.');
      }
    }
    if (activity == 'awarddate') {
      if ($('#startawarddate').val().length === 0) {
        new_award_notice_start = award_notice_start;
      } else {
        new_award_notice_start = $('#startawarddate').val();
      }
      if ($('#endawarddate').val().length === 0) {
        new_award_notice_end = award_notice_end;
      } else {
        new_award_notice_end = $('#endawarddate').val();
      }
      if (compareEntryDates(new_award_notice_start, new_award_notice_end)) {
        if (verifyDate(inputValue, activity)) {
          if (compareDates(inputValue, new_award_notice_start, new_award_notice_end)) {
            proceedSubmit('Award Date', inputValue, activityForm);
            alert('Date is valid!');
          }else{
            showError(activity, errormsg);
          }
        }
      } else {
        alert('Starting date must not be later than ending date.');
      }
    }
    if (activity == 'contractsigning') {
      if ($('#startcontractsigning').val().length === 0) {
        new_contract_signing_start = contract_signing_start;
      } else {
        new_contract_signing_start = $('#startcontractsigning').val();
      }
      if ($('#endcontractsigning').val().length === 0) {
        new_contract_signing_end = contract_signing_end;
      } else {
        new_contract_signing_end = $('#endcontractsigning').val();
      }
      if (compareEntryDates(new_contract_signing_start, new_contract_signing_end)) {
        if (verifyDate(inputValue, activity)) {
          if (compareDates(inputValue, new_contract_signing_start, new_contract_signing_end)) {
            proceedSubmit('Contact Signing Date', inputValue, activityForm);
            alert('Date is valid!');
          }else{
            showError(activity, errormsg);
          }
        }
      } else {
        alert('Starting date must not be later than ending date.');
      }
    }
    if (activity == 'authorityapproval') {
      if ($('#startauthorityapproval').val().length === 0) {
        new_authority_approval_start = authority_approval_start;
      } else {
        new_authority_approval_start = $('#startauthorityapproval').val();
      }
      if ($('#endauthorityapproval').val().length === 0) {
        new_authority_approval_end = authority_approval_end;
      } else {
        new_authority_approval_end = $('#endauthorityapproval').val();
      }
      if (compareEntryDates(new_authority_approval_start, new_authority_approval_end)) {
        if (verifyDate(inputValue, activity)) {
          if (compareDates(inputValue, new_authority_approval_start, new_authority_approval_end)) {
            proceedSubmit('Authority Approval Date', inputValue, activityForm);
            alert('Date is valid!');
          }else{
            showError(activity, errormsg);
          }
        }
      } else {
        alert('Starting date must not be later than ending date.');
      }
    }
    if (activity == 'proceednotice') {
      if ($('#startproceednotice').val().length === 0) {
        new_proceed_notice_start = proceed_notice_start;
      } else {
        new_proceed_notice_start = $('#startproceednotice').val();
      }
      if ($('#endproceednotice').val().length === 0) {
        new_proceed_notice_end = proceed_notice_end;
      } else {
        new_proceed_notice_end = $('#endproceednotice').val();
      }
      if (compareEntryDates(new_proceed_notice_start, new_proceed_notice_end)) {
        if (verifyDate(inputValue, activity)) {
          if (compareDates(inputValue, new_proceed_notice_start, new_proceed_notice_end)) {
            proceedSubmit('Proceed Notice Date', inputValue, activityForm);
            alert('Date is valid!');
          }else{
            showError(activity, errormsg);
          }
        }
      } else {
        alert('Starting date must not be later than ending date.');
      }
    }
    if (activity == 'completion') {
      if (verifyDate(inputValue, activity)) {
        proceedSubmit('Delivery/Completion', inputValue, activityForm);
      }
    }
    if (activity == 'acceptance') {
      if (verifyDate(inputValue, activity)) {
        proceedSubmit('Acceptance?Turnover', inputValue, activityForm);
      } 
    }

  });

  function showError(inputId, message){
    var element = $('#' + inputId);
    element.closest('div.form-group').removeClass('has-error').addClass('has-error').find('.text-danger').remove();
    element.after(message);
  }

  function removeError(inputId){
    var element = $('#' + inputId);
    element.closest('div.form-group').removeClass('has-error').find('.text-danger').remove();
  }

  function compareDates(dateInput, start, end){
    var date = new Date(dateInput).getTime();
    var start_date = new Date(start).getTime();
    var end_date = new Date(end).getTime();
    if (date < start_date || date > end_date) {
      return false;
    }else{
      return true;
    }
  }

  function comparePreProcToAdvertDate(inputValue, advertisement_start){
    var date = new Date(inputValue).getTime();
    var start_date = new Date(advertisement_start).getTime();
    if (date > start_date) {
      return false;
    }else{
      return true;
    }
  }

  function verifyDate(inputValue, activity){
    if (inputValue == null || inputValue == "") {
      showError(activity, '<p class="text-danger text-center">The input filed should not be empty!!</p>');
      return false;
    }else if(inputValue === getValue(activity)){
      showError(activity, '<p class="text-danger text-center">No changes were made to the value!!</p>');
      return false;
    }
    return true;
  }

  function compareEntryDates(start, end, prev_act) {
    prev_act_date = new Date(prev_act).getTime();
    start_date = new Date(start).getTime();
    end_date = new Date(end).getTime();
    if (start_date > end_date || start_date <= prev_act_date) {
      return false;
    } else {
      return true;
    }
  }
  
  // function verifyDateOpenBid(inputValue, activity){
  //   if (getValue(activity) == null || getValue(activity) == "") {
  //     if (inputValue == null || inputValue == "") {
  //       showError(activity, '<p class="text-danger text-center">The input filed should not be empty!!</p>');
  //       return false;
  //     }else if(inputValue === getValue(activity)){
  //       showError(activity, '<p class="text-danger text-center">No changes were made to the value!!</p>');
  //       return false;
  //     }
  //   }
  //   return true;
  // }

  // function validateOpenBidInput(dateInput, start, end){
  //   var dateValidation = compareDates(dateInput, start, end);
  //   console.log(dateValidation);
  //   var contractorValidation = validateContractor();
  //   console.log(contractorValidation);
  //   var bidValidation = validateBid();
  //   console.log(bidValidation);
  //   if (!dateValidation || !contractorValidation || !bidValidation) {
  //     if (!dateValidation) {
  //       showError('openbid', '<p class="text-danger text-center">Date must be in range of the starting and ending date!!</p>');
  //     }
  //     return false;
  //   }else{
  //     return true;
  //   }
  // }

  // function validateBid(){
  //   var abc = '<?php echo $projectDetails['abc'] ?>';
  //   var proposed_bid = '<?php echo $projectDetails['proposed_bid'] ?>';
  //   console.log(abc);
  //   console.log(proposed_bid);
  //   if (proposed_bid == null || proposed_bid == "") {
  //     if (!$('#bid_proposal').val() || $('#bid_proposal').val() == "") {
  //       showError('bid_proposal', '<p class="text-danger text-center">The bid proposal input is Required!</p>');
  //       return false;
  //     }else{
  //       if (!isNaN($('#bid_proposal').val())) {
  //         if ($('#bid_proposal').val() > abc) {
  //           showError('bid_proposal', '<p class="text-danger text-center">Proposed bid must not be higher that the ABC!</p>');
  //           return false;
  //         }else{
  //           removeError('bid_proposal');
  //           return true;
  //         }
  //       }else{
  //         showError('bid_proposal', '<p class="text-danger text-center">Proposed bid should be numeric!</p>');
  //         return false;
  //       }
  //     }
  //   }else{
  //     return true;
  //   }
  // }

  // function validateContractor(){
  //   var contractor = '<?php echo $projectDetails['contractor_id'] ?>';
  //   if (contractor == null || contractor == "") {
  //     if ($('#contractor').val() == "" || !$('#contractor').val()) {
  //       showError('contractor', '<p class="text-danger text-center">Contactor input field is required!</p>');
  //       return false;
  //     }else{
  //       removeError('contractor');
  //       return true;
  //     }
  //   }else{
  //     return true;
  //   }
  // }

  function getValue(activity){
    return planDates[activity];
  }

  function proceedSubmit(activity_name, inputValue, activityForm){
    $('#myModal').modal('show');
    $('#actName').html(activity_name);
    $('#actDateValue').text(inputValue);
    $('#formSubmitBtn').attr('form', activityForm);
  }

  function proceedSubmitOpenBid(activity_name, inputValue, activityForm){
    $('#actNameOpenBid').html(activity_name);
    $('#actDateValueOpenBid').text(inputValue);
    $('#contractorName').html($('#contractor option:selected, active').html());
    $('#proposedBidAmmount').html($('#bid_proposal').val());
    $('#formSubmitBtnOpenBid').attr('form', activityForm);
    $('#openbidmodal').modal('show');
  }


/*
  ajax for re-bid
  */
  $('#rebidProjectForm').submit(function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: $('#rebidProjectForm').attr('action'),
      data: $('#rebidProjectForm').serialize(),
      dataType: 'json',
      success: function(response){
        if (response.success == true) {
          window.location.href = "<?php echo base_url('admin/projectDetailsView'); ?>";
        }else{
          $.each(response.messages, function(key, value) {
            var element = $('#' + key);

            element.closest('div.form-group')
            .removeClass('has-error')
            .addClass(value.length > 0 ? 'has-error' : 'has-success')
            .find('.text-danger')
            .remove();

            element.after(value);
          });
        }
      }
    });
  });

/*
  ajax for review
  **/
  
  $('#recommendForReviewForm').submit(function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: $('#recommendForReviewForm').attr('action'),
      data: $('#recommendForReviewForm').serialize(),
      dataType: 'json',
      success: function(response){
        if (response.success == true) {
          window.location.href = "<?php echo base_url('admin/projectDetailsView'); ?>";
        }else{
          $.each(response.messages, function(key, value) {
            var element = $('#' + key);

            element.closest('div.form-group')
            .removeClass('has-error')
            .addClass(value.length > 0 ? 'has-error' : 'has-success')
            .find('.text-danger')
            .remove();

            element.after(value);
          });
        }
      }
    });
  });

/**
  js and ajax for bidder disqualification
  */

  $('#dis_qual_btn').click(function(){
    var action = $(this).val();
    var remark = $('#bidder_saction_disqualification_remark').val();
    if (remark.trim() == "") {
      var message = '<p class="text-danger">Remark field must not be empty!</p>';
      $("#bidder_saction_disqualification_remark").closest('div.form-group').removeClass('has-error').addClass('has-error').find('.text-danger').remove();
      $("#bidder_saction_disqualification_remark").after(message);
    }else{

      $('#disqualifiactionSanctionConfirmationModal').modal('show');
    }
    
  });

  $('#projectBidderDisqualificationAndSanctionForm').submit(function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: $('#projectBidderDisqualificationAndSanctionForm').attr('action'),
      data: $('#projectBidderDisqualificationAndSanctionForm').serialize(),
      dataType: 'json',
      success: function(response){
        if (response.success == true) {
          window.location.href = "<?php echo base_url('admin/procurementActivityView'); ?>";
        }else{
          $('#disqualifiactionSanctionConfirmationModal').modal('hide');
          $('#bidDisqualificationAndSanctinoModal').modal('hide');
          $('#bidderSelectionAlert').modal('show');
        }
      }
    });
  });


/**

  act view controls
  **/

  function setViewHidden(){
    $('.procactsubmitcontainer').attr('hidden', false).prop('hidden', 'hidden');
    $('.activity_view').attr('hidden', false).prop('hidden', 'hidden');
  }

  function setButtonStyle(elementID){
    $('.activityBtn').removeAttr('style');
    $(elementID).css({'background':'#555555', 'color' : '#ffffff'});
  }

  $('#pre_proc_btn').click(function(){
    setViewHidden();
    setButtonStyle('#pre_proc_btn');
    $('#pre_proc_view').removeAttr('hidden');
    $('#pre_proc_submit_btn').attr('hidden', false);
  });

  $('#advertisement_btn').click(function(){
    setViewHidden();
    setButtonStyle('#advertisement_btn');    
    $('#ads_post_view').removeAttr('hidden');
    $('#advertisement_submit_btn').attr('hidden', false);
  });

  $('#pre_bid_btn').click(function(){
    setViewHidden();
    setButtonStyle('#pre_bid_btn');
    $('#pre_bid_view').removeAttr('hidden');
    $('#pre_bid_submit_btn').attr('hidden', false);
  });

  $('#open_bid_btn').click(function(){
    setViewHidden();
    setButtonStyle('#open_bid_btn');
    $('#bid_open_view').removeAttr('hidden');
    $('#open_bid_submit_btn').attr('hidden', false);
  });

  // $('#eligibility_btn').click(function(){
  //   setViewHidden();
  //   setButtonStyle('#eligibility_btn');
  //   $('#eligibility_check_view').removeAttr('hidden');
  //   $('#eligibility_submit_btn').attr('hidden', false);
  // });

  $('#bid_eval_btn').click(function(){
    setViewHidden();
    setButtonStyle('#bid_eval_btn');
    $('#bid_evaluation_view').removeAttr('hidden');
    $('#bid_eval_submit_btn').attr('hidden', false);
  });

  $('#post_qual_btn').click(function(){
    setViewHidden();
    setButtonStyle('#post_qual_btn');
    $('#post_qual_view').removeAttr('hidden');
    $('#post_qual_submit_btn').attr('hidden', false);
  });

  $('#award_notice_btn').click(function(){
    setViewHidden();
    setButtonStyle('#award_notice_btn');
    $('#notice_award_view').removeAttr('hidden');
    $('#award_notice_submit_btn').attr('hidden', false);
  });

  $('#contract_signing_btn').click(function(){
    setViewHidden();
    setButtonStyle('#contract_signing_btn');
    $('#sign_contract_view').removeAttr('hidden');
    $('#contract_signing_submit_btn').attr('hidden', false);
  });

  $('#authority_approval_btn').click(function(){
    setViewHidden();
    setButtonStyle('#authority_approval_btn');
    $('#authority_approval_view').removeAttr('hidden');
    $('#authority_approval_submit_btn').attr('hidden', false);
  });

  $('#proceed_notice_btn').click(function(){
    setViewHidden();
    setButtonStyle('#proceed_notice_btn');
    $('#proceed_notice_view').removeAttr('hidden');
    $('#proceed_notice_submit_btn').attr('hidden', false);
  });

  $('#delivery_completion_btn').click(function(){
    setViewHidden();
    setButtonStyle('#delivery_completion_btn');
    $('#completion_delivery_view').removeAttr('hidden');
    $('#completion_submit_btn').attr('hidden', false);
  });

  $('#acceptance_turnover_btn').click(function(){
    setViewHidden();
    setButtonStyle('#acceptance_turnover_btn');
    $('#turnover_acceptance_view').removeAttr('hidden');
    $('#acceptance_submit_btn').attr('hidden', false);
  });

  // observer scripts

  $('.observer_checkbox').click(function(){
    var observer_details = $(this).val().split(',');
    var observer_id = observer_details[0];
    var observer_dept_name = observer_details[1];

    if ($(this).is(':checked')) {
      $('#observer_container').append(
        '<div class="form-group" id="' + observer_id + '">' +
          '<label>' + observer_dept_name + '</label>' +
          '<input type="text" name="observer_id[]" value="' + observer_id + '" hidden>' +
          '<input class="form-control" type="text" name="observer_name[]">' +
        '</div>'
      );
    }else{
      $('#' + observer_id).remove();
    }
  })

  $('#setObserversForm').submit(function(e){
    e.preventDefault();
    $.ajax({
      type: 'post',
      url: '<?php echo base_url('admin/setObservers') ?>',
      data: $(this).serialize(),
      dataType: 'json'
    }).done(function(response){
      if (response.success == true) {
        window.location.href = "<?php echo base_url('admin/procurementActivityView'); ?>";
      }else{
        if (response.valid_invite_name == false && response.valid_observers == false) {
          $('#observerSelectionAlertMessage').html('Mage sure that an activity is selected and at least one observer is selected!');
        }else if (response.valid_invite_name == false && response.valid_observers == true) {
          $('#observerSelectionAlertMessage').html('Make sure that an activity is selected!');
        }else if (response.valid_invite_name == true && response.valid_observers == false){
          $('#observerSelectionAlertMessage').html('Make sure that at least one observer is selected!');
        }
        $('#observerSelectionAlert').modal('show');
      }

    })
  })


</script>






