
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
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Activity View</h3>
    </div>
    <div class="panel-body" style="height: 550px">
      <div class="col-3 col-lg-3 col-md-4 col-sm-5 col-xs-12" style="height: 100%">

        <button class="activityBtn btn btn-default btn-block" type="button" id="pre_proc_btn">Pre-Proc Conference</button>

        <button class="activityBtn btn btn-default btn-block" type="button" id="advertisement_btn">Ads/Post of IAEB</button>

        <button class="activityBtn btn btn-default btn-block" type="button" id="pre_bid_btn">Pre-bid Conf</button>

        <button class="activityBtn btn btn-default btn-block" type="button" id="open_bid_btn">Sub/Open of Bids</button>

        <button class="activityBtn btn btn-default btn-block" type="button" id="eligibility_btn">Eligibility Check</button>

        <button class="activityBtn btn btn-default btn-block" type="button" id="bid_eval_btn">Bid Evaluation</button>

        <button class="activityBtn btn btn-default btn-block" type="button" id="post_qual_btn">Post Qual</button>

        <button class="activityBtn btn btn-default btn-block" type="button" id="award_notice_btn">Notice of Award</button>

        <button class="activityBtn btn btn-default btn-block" type="button" id="contract_signing_btn">Contract Signing</button>

        <button class="activityBtn btn btn-default btn-block" type="button" id="proceed_notice_btn">Notice to Proceed</button>

        <button class="activityBtn btn btn-default btn-block" type="button" id="delivery_completion_btn">Delivery/Completion</button>

        <button class="activityBtn btn btn-default btn-block" type="button" id="acceptance_turnover_btn">Acceptance/Turnover</button>
      </div>
      <div class="col-9 col-lg-9 col-md-8 col-sm-7 col-xs-12 well" style="height: 100%">
        <div id="pre_proc_view" class="activity_view form-horizontal" hidden="hidden">
          <div class="form-group">
            <label class="control-label col-lg-5 col-md-5 col-sm-5">Pre-Procurement Conference *: </label>
            <div class="col-lg-7 col-md-7 col-sm-7">
              <p class="form-control"><?php echo $pre_proc_start ?></p>
            </div>
          </div> 
        </div>
        <div id="ads_post_view" class="activity_view" hidden="hidden">
          <form id="advertisement_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal form-label-left">
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
                <input type="date" id="advertisement" value="<?php echo $advertisement ?>" name="activity_date" class="form-control">
              </div>
            </div>          
          </form>
        </div>

        <div id="pre_bid_view" class ="activity_view" hidden="hidden">
          <form id="pre_bid_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal form-label-left">
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
                <input type="date" id="pre_bid" value="<?php echo $pre_bid ?>" name="activity_date" class="form-control">
              </div>
            </div>
          </form>
        </div>

        <div id="bid_open_view" class="activity_view" hidden="hidden">
          <form id="open_bid_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal form-label-left">

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
                <input type="date" id="openbid" value="<?php echo $openbid ?>" name="activity_date" class="form-control">
              </div>
            </div>
          </form>
        </div>

        <div id="eligibility_check_view" class ="activity_view" hidden="hidden">
          <form id="eligibility_check_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal form-label-left">

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
        </div>

        <div id="bid_evaluation_view" class="activity_view" hidden="hidden">
          <form id="bid_evaluation_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal form-label-left">

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
                <input type="date" id="bidevaluation" value="<?php echo $bidevaluation ?>" name="activity_date" class="form-control">
              </div>
            </div>      
          </form>
        </div>

        <div id="post_qual_view" class ="activity_view" hidden="hidden">
          <form id="post_qual_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal form-label-left">

            <input type="text" name="activity_name" value="post_qual" hidden>
            <div class="form-group">
              <label class="control-label col-lg-5 col-md-5 col-sm-5">Start Date of Post Qual: </label>
              <div class="col-lg-7 col-md-7 col-sm-7">
                <p class="form-control"><?php echo $post_qualification_start; ?></p>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-lg-5 col-md-5 col-sm-5">End Date of Post Qual: </label>
              <div class="col-lg-7 col-md-7 col-sm-7">
                <p class="form-control"><?php echo $post_qualification_end ?></p>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-lg-5 col-md-5 col-sm-5">Post Qual *: </label>
              <div class="col-lg-7 col-md-7 col-sm-7">
                <input type="date" id="postqual" value="<?php echo $postqual ?>" name="activity_date" class="form-control">
              </div>
            </div>
          </form>
        </div>

        <div id="notice_award_view" class="activity_view" hidden="hidden">
          <form id="award_notice_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal form-label-left">
            <input type="text" name="activity_name" value="awar_notice" hidden>
            <div class="form-group">
              <label class="control-label col-lg-5 col-md-5 col-sm-5">Start Date of Notice of Award:</label>
              <div class="col-lg-7 col-md-7 col-sm-7">
                <p class="form-control"><?php echo $award_notice_start ?></p>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-lg-5 col-md-5 col-sm-5">End Date of Notice of Award:</label>
              <div class="col-lg-7 col-md-7 col-sm-7">
                <p class="form-control"><?php echo $award_notice_end ?></p>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-lg-5 col-md-5 col-sm-5">Notice of Award *: </label>
              <div class="col-lg-7 col-md-7 col-sm-7">
                <input type="date" id="awarddate" value="<?php echo $awarddate ?>" name="activity_date" class="form-control">
              </div>
            </div>
          </form>
        </div>

        <div id="sign_contract_view" class ="activity_view" hidden="hidden">
          <form id="contract_signing_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal form-label-left">

            <input type="text" name="activity_name" value="contract_signing" hidden>
            <div class="form-group">
              <label class="control-label col-lg-5 col-md-5 col-sm-5">Start Date of Contract Signing: </label>
              <div class="col-lg-7 col-md-7 col-sm-7">
                <p class="form-control"><?php echo $contract_signing_start ?></p>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-lg-5 col-md-5 col-sm-5">End Date of Contract Signing: </label>
              <div class="col-lg-7 col-md-7 col-sm-7">
                <p class="form-control"><?php echo $contract_signing_end ?></p>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-lg-5 col-md-5 col-sm-5">Contract Signing *: </label>
              <div class="col-lg-7 col-md-7 col-sm-7">
                <input type="date" id="contractsigning" value="<?php echo $contractsigning ?>" name="activity_date" class="form-control">
              </div>
            </div>
          </form>
        </div>

        <div id="proceed_notice_view" class="activity_view" hidden="hidden">
          <form id="proceed_notice_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal form-label-left">
            <input type="text" name="activity_name" value="proceed_notice" hidden>
            <div class="form-group">
              <label class="control-label col-lg-5 col-md-5 col-sm-5">Start Date of Notice to Proceed: </label>
              <div class="col-lg-7 col-md-7 col-sm-7">
                <p class="form-control"><?php echo $proceed_notice_start ?></p>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-lg-5 col-md-5 col-sm-5">End Date of Notice to Proceed: </label>
              <div class="col-lg-7 col-md-7 col-sm-7">
                <p class="form-control"><?php echo $proceed_notice_end ?></p>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-lg-5 col-md-5 col-sm-5">Notice to Proceed *: </label>
              <div class="col-lg-7 col-md-7 col-sm-7">
                <input type="date" id="proceednotice" value="<?php echo $proceednotice ?>" name="activity_date" class="form-control">
              </div>
            </div>
          </form>
        </div>

        <div id="completion_delivery_view" class ="activity_view" hidden="hidden">
          <form id="competion_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal form-label-left">

            <input type="text" name="activity_name" value="completion" hidden>

            <div class="form-group">
              <label class="control-label col-lg-5 col-md-5 col-sm-5">Delivery/Completion *: </label>
              <div class="col-lg-7 col-md-7 col-sm-7">
                <input type="date" id="completion" value="<?php echo $completion ?>" name="activity_date" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
          </form>
        </div>

        <div id="turnover_acceptance_view" class ="activity_view" hidden="hidden">
          <form id="acceptance_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal form-label-left">
            <input type="text" name="activity_name" value="acceptance" hidden>

            <div class="form-group">
              <label class="control-label col-lg-5 col-md-5 col-sm-5">Acceptance/Turnover *: </label>
              <div class="col-lg-7 col-md-7 col-sm-7">
                <input type="date" id="acceptance" value="<?php echo $acceptance ?>" name="activity_date" class="form-control">
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
    <div class="panel-footer">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3">
          <p class="text-right">Actions:</p>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9">
          <div class="row procactsubmitcontainer" id="advertisement_submit_btn" hidden="hidden">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
              <button type="button" class="btn btn-primary procactsubmitbutton" value="advertisement,advertisement_form">Submit</button>
            </div>
          </div>

          <div class="row procactsubmitcontainer" id="pre_bid_submit_btn" hidden="hidden">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
              <button type="button" class="btn btn-primary procactsubmitbutton" value="pre_bid,pre_bid_form">Submit</button>
            </div>
          </div>

          <div class="row procactsubmitcontainer" id="open_bid_submit_btn" hidden="hidden">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
              <button type="button" class="btn btn-primary procactsubmitbutton" value="openbid,open_bid_form">Submit</button> 
            </div>
          </div>

          <div class="row procactsubmitcontainer"  id="eligibility_submit_btn" hidden="hidden">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
              <button type="button" class="btn btn-primary procactsubmitbutton" value="eligibility,eligibility_check_form">Submit</button> 
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#rebid_svp_model">Schedule for re-bid/another SVP</button>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#recommendForReviewMode">Recommend Project for Review</button>
            </div>
          </div>

          <div class="row procactsubmitcontainer" id="bid_eval_submit_btn" hidden="hidden">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
              <button type="button" class="btn btn-primary procactsubmitbutton" value="bidevaluation,bid_evaluation_form">Submit</button> 
            </div>
          </div>

          <div class="row procactsubmitcontainer"  id="post_qual_submit_btn" hidden="hidden">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
              <button type="button" class="btn btn-primary procactsubmitbutton" value="postqual,post_qual_form">Submit</button>
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#bidDisqualificationAndSanctinoModal" >Bid Disqualifide</button>
            </div>
          </div>

          <div class="row procactsubmitcontainer" id="award_notice_submit_btn" hidden="hidden">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
              <button type="button" class="btn btn-primary procactsubmitbutton" value="awarddate,award_notice_form">Submit</button>
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#bidDisqualificationAndSanctinoModal">Prepare Sanction Letter</button>
            </div>
          </div>

          <div class="row procactsubmitcontainer" id="contract_signing_submit_btn" hidden="hidden">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
              <button type="button" class="btn btn-primary procactsubmitbutton" value="contractsigning,contract_signing_form">Submit</button>
            </div>
          </div>

          <div class="row procactsubmitcontainer" id="proceed_notice_submit_btn" hidden="hidden">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
              <button type="button" class="btn btn-primary procactsubmitbutton" value="proceednotice,proceed_notice_form">Submit</button>
            </div>
          </div>

          <div class="row procactsubmitcontainer" id="completion_submit_btn" hidden="hidden">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
              <button type="button" class="btn btn-primary procactsubmitbutton" value="completion,competion_form">Submit</button>
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
            <form action="<?php echo base_url('admin/rebidProjectPlan') ?>" method="POST" id="rebidProjectForm">
              <input type="text" value="<?php echo $projectDetails['plan_id'] ?>" name="plan_id" hidden>
              <button type="submit" class="btn btn-primary">Confirm</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
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
                <form id="recommendForReviewForm" action="<?php echo base_url('admin/recommendProjectPlanForReview') ?>" method="POST">
                  <input type="text" name="plan_id" value="<?php echo $projectDetails['plan_id'] ?>" hidden>
                  <div class="form-group">
                    <label>Remark *: </label>
                    <textarea name="re_review_remark" id="re_review_remark" cols="30" rows="10" class="form-control" style="resize: none;"></textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="submit" form="recommendForReviewForm" class="btn btn-danger">Confirm</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>


        <div id="bidDisqualificationAndSanctinoModal" class="modal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Disqualification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;
                  </button>
                </div>
                <div class="modal-body">
                  <form action="<?php echo base_url('admin/projectBidderDisqualificationAndSunction') ?>" method="POST" id="projectBidderDisqualificationAndSanctionForm" >
                    <div class="form-group">
                      <label>Current Re-bid Count: </label>
                      <p class="form-control"><?php echo $projectDetails['re_bid_count'] ?></p>
                    </div>
                    <div class="form-group">
                      <label>Remark* ;</label>
                      <textarea name="bidder_saction_disqualification_remark" cols="30" rows="10" class="form-control bidder_saction_disqualification_remark" style="resize: none;"></textarea>
                    </div>
                    <input type="text" name="plan_id" value="<?php echo $projectDetails['plan_id'] ?>" hidden>
                    <input type="text" name="action" id="disqualificationSanction_action" hidden>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary dis_qual_btn" value="rebid">RE-BID</button>
                  <button type="button" class="btn btn-primary dis_qual_btn" value="rereview">RE-REVIEW</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                    <h3>ALERT!!!</h3>
                    <p>Are you sure this project must go through</p>
                    <h5 class="text-center" style="color: red" id="actionName"></h5>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" form="projectBidderDisqualificationAndSanctionForm">Confirm</button>
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

            <!-- page script -->
<script>

  var planDates = {
    pre_proc : '<?php echo $pre_proc ?>',
    advertisement : '<?php echo $advertisement ?>',
    pre_bid : '<?php echo $pre_bid ?>',
    openbid : '<?php echo $openbid ?>',
    bidevaluation : '<?php echo $bidevaluation ?>',
    postqual : '<?php echo $postqual ?>',
    awarddate : '<?php echo $awarddate ?>',
    contractsigning : '<?php echo $contractsigning ?>',
    proceednotice : '<?php echo $proceednotice ?>',
    completion : '<?php echo $completion ?>',
    acceptance : '<?php echo $acceptance ?>'
  };


  var pre_proc_date = '<?php echo $timeline['pre_proc_date'] ?>';
  var advertisement_start = '<?php echo $timeline['advertisement_start'] ?>';
  console.log(advertisement_start);
  var advertisement_end = '<?php echo $timeline['advertisement_end'] ?>';
  console.log(advertisement_end);
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

  $('.procactsubmitbutton').click(function(event){
    var activityArray = $(this).val().split(",");
    var activity = activityArray[0];
    var activityForm = activityArray[1];
    inputElement = $('#' + activity);
    inputValue = inputElement.val();

    if (inputValue == null || inputValue == "") {
      showError(activity, '<p class="text-danger text-center">The input filed should not be empty!!</p>');
    }else if(inputValue == getValue(activity)){
      showError(activity, '<p class="text-danger text-center">No changes were made to the value!!</p>');
    }else{
      if (activity == 'advertisement') {
        if (compareDates(inputValue, advertisement_start, advertisement_end)) {
          proceedSubmit('Advertisement Date', inputValue, activityForm)
        }else{
          showError(activity, '<p class="text-danger text-center">Date must be in range of the starting and ending date!!</p>');
        }
      }
      if (activity == 'pre_bid') {
        if (compareDates(inputValue, pre_bid_start, pre_bid_end)) {
          proceedSubmit('Pre-bid Date', inputValue, activityForm)
        }else{
          showError(activity, '<p class="text-danger text-center">Date must be in range of the starting and ending date!!</p>');
        }
      }
      if (activity == 'openbid') {
        if (compareDates(inputValue, pre_bid_start, pre_bid_end)) {
          proceedSubmit('Pre-bid Date', inputValue, activityForm)
        }else{
          showError(activity, '<p class="text-danger text-center">Date must be in range of the starting and ending date!!</p>');
        }
      }
      if (activity == 'bidevaluation') {
        if (compareDates(inputValue, bid_evaluation_start, bid_evaluation_end)) {
          proceedSubmit('Bid Evaluation Date', inputValue, activityForm)
        }else{
          showError(activity, '<p class="text-danger text-center">Date must be in range of the starting and ending date!!</p>');
        }
      }
      if (activity == 'postqual') {
        if (compareDates(inputValue, post_qualification_start, post_qualification_end)) {
          proceedSubmit('Post Qualification Date', inputValue, activityForm)
        }else{
          showError(activity, '<p class="text-danger text-center">Date must be in range of the starting and ending date!!</p>');
        }
      }
      if (activity == 'awarddate') {
        if (compareDates(inputValue, award_notice_start, award_notice_end)) {
          proceedSubmit('Award Date', inputValue, activityForm)
        }else{
          showError(activity, '<p class="text-danger text-center">Date must be in range of the starting and ending date!!</p>');
        }
      }
      if (activity == 'contractsigning') {
        if (compareDates(inputValue, contract_signing_start, contract_signing_end)) {
          proceedSubmit('Contact Signing Date', inputValue, activityForm)
        }else{
          showError(activity, '<p class="text-danger text-center">Date must be in range of the starting and ending date!!</p>');
        }
      }
      if (activity == 'proceednotice') {
        if (compareDates(inputValue, proceed_notice_start, proceed_notice_start)) {
          proceedSubmit('Proceed Notice Date', inputValue, activityForm)
        }else{
          showError(activity, '<p class="text-danger text-center">Date must be in range of the starting and ending date!!</p>');
        }
      }
    }

  });

  function showError(inputId, message){
    var element = $('#' + inputId);
    element.closest('div.form-group').removeClass('has-error').addClass('has-error').find('.text-danger').remove();
    element.after(message);
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

  function getValue(activity){
    return planDates[activity];
  }

  function proceedSubmit(activity_name, inputValue, activityForm){
    $('#myModal').modal('show');
    $('#actName').html(activity_name);
    $('#actDateValue').text(inputValue);
    $('#formSubmitBtn').attr('form', activityForm);
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

  $('.dis_qual_btn').click(function(){
    var action = $(this).val();
    var remark = $('.bidder_saction_disqualification_remark').val();
    if (remark.trim() == "") {
      var message = '<p class="text-danger">Remark field must not be empty!</p>';
      $(".bidder_saction_disqualification_remark").closest('div.form-group').removeClass('has-error').addClass('has-error').find('.text-danger').remove();
      $(".bidder_saction_disqualification_remark").after(message);
    }else{
      if (action == 'rebid') {
        $('#actionName').html('Re-bid / another SVP');
        $('#disqualificationSanction_action').val('re_bid');

      }
      if (action == 'rereview') {
        $('#actionName').html('Project Review');
        $('#disqualificationSanction_action').val('re_review');

      }

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
          window.location.href = "<?php echo base_url('admin/projectDetailsView'); ?>";
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

  $('#eligibility_btn').click(function(){
    setViewHidden();
    setButtonStyle('#eligibility_btn');
    $('#eligibility_check_view').removeAttr('hidden');
    $('#eligibility_submit_btn').attr('hidden', false);
  });

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


</script>






