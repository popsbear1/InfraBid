
<section class="content-header">
  
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="box">
        <div class="box-header">
          <h2 class="box-title">Manage Project Procurement Timeline<small></small></h2>
        </div>
        <div class="box-body">
          <div class="well">
            <div class="row">
              <div class="form-horizontal col-lg-5">
                <div class="form-group">
                  <label class="control-label col-lg-5">Select date to begin with:</label>
                  <div class="col-lg-7">
                    <input type="date" class="form-control" id="pre_proc_date" name="pre_proc_date">
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <button id="timeLineComputeBtn" class="btn btn-default btn-block">Compute/Reset to Earliest Possible Time</button>
              </div>
              <div class="col-lg-3">
                <button class="btn btn-default btn-block" id="startOverBtn">Start Over</button>
              </div>
            </div>
            <div class="ln_solid"></div>
            <div class="row">
              <table class="table table-bordered" style="background: white">
                <thead>
                  <tr>
                    <th>Procurement Stage</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Add Days</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><b class="pull-right">Advertisement:</b></td>
                    <td><input type="date" class="form-control" id="advertisement_start" name="advertisement_start"></td>
                    <td><input type="date" class="form-control" id="advertisement_end" name="advertisement_end"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="row">
                        <b class="pull-right">Pre-bid Conference:</b>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <p class="text-right"><i>Conduct?</i></p>
                        </div>
                        <div class="col-md-3">
                          <label for="yesPreBid" class="text-center">Yes</label>
                          <input type="radio" name="pre-bid" id="yesPreBid" class="text-center">
                        </div>
                        <div class="col-md-3">
                          <label for="noPreBid" class="text-center">No</label>
                          <input type="radio" name="pre-bid" id="noPreBid" class="text-center">
                        </div>
                      </div>
                    </td>
                    <td><input type="date" class="form-control" id="preBidStart"></td>
                    <td><input type="date" class="form-control" id="preBidEnd"></td>
                    <td>
                      <div class="col-lg-6">
                        <input type="number" class="form-control" id="preBidNumber">
                      </div>
                      <div class="col-lg-6">
                        <button class="btn btn-info btn-block">Update</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><b class="pull-right">Submission of bid:</b></td>
                    <td><input type="date" class="form-control" id="bidSubmissionStart"></td>
                    <td><input type="date" class="form-control" id="bidSubmissionEnd"></td>
                    <td>
                      <div class="col-lg-6">
                        <input type="number" class="form-control">
                      </div>
                      <div class="col-lg-6">
                        <button class="btn btn-info btn-block">Update</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><b class="pull-right">Bid Evaluation:</b></td>
                    <td><input type="date" class="form-control" id="bidEvaluationStart"></td>
                    <td><input type="date" class="form-control" id="bidEvaluationEnd"></td>
                    <td>
                      <div class="col-lg-6">
                        <input type="number" class="form-control">
                      </div>
                      <div class="col-lg-6">
                        <button class="btn btn-info btn-block">Update</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><b class="pull-right">Post Qualification:</b></td>
                    <td><input type="date" class="form-control" id="postQualificationStart"></td>
                    <td><input type="date" class="form-control" id="postQualificationEnd"></td>
                    <td>
                      <div class="col-lg-6">
                        <input type="number" class="form-control">
                      </div>
                      <div class="col-lg-6">
                        <button class="btn btn-info btn-block">Update</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><b class="pull-right">Issuance of Notice of Awards:</b></td>
                    <td><input type="date" class="form-control" id="awardNoticeIssuanceStart"></td>
                    <td><input type="date" class="form-control" id="awardNoticeIssuanceEnd"></td>
                    <td>
                      <div class="col-lg-6">
                        <input type="number" class="form-control">
                      </div>
                      <div class="col-lg-6">
                        <button class="btn btn-info btn-block">Update</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><b class="pull-right">Contract Preparation and Signing:</b></td>
                    <td><input type="date" class="form-control" id="contractSigningStart"></td>
                    <td><input type="date" class="form-control" id="contractSigningEnd"></td>
                    <td>
                      <div class="col-lg-6">
                        <input type="number" class="form-control">
                      </div>
                      <div class="col-lg-6">
                        <button class="btn btn-info btn-block">Update</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><b class="pull-right">Approval by Higher Authority:</b></td>
                    <td><input type="date" class="form-control" id="authorityApprovalStart"></td>
                    <td><input type="date" class="form-control" id="authorityApprovalEnd"></td>
                    <td>
                      <div class="col-lg-6">
                        <input type="number" class="form-control">
                      </div>
                      <div class="col-lg-6">
                        <button class="btn btn-info btn-block">Update</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><b class="pull-right">Notice to Proceed:</b></td>
                    <td><input type="date" class="form-control" id="proceedNoticeStart"></td>
                    <td><input type="date" class="form-control" id="proceedNoticeEnd"></td>
                    <td>
                      <div class="col-lg-6">
                        <input type="number" class="form-control">
                      </div>
                      <div class="col-lg-6">
                        <button class="btn btn-info btn-block">Update</button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="ln_solid"></div>
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <button href="#myModal" type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  


<!-- jQuery -->
<script src="<?php echo base_url() ?>public/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url() ?>public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>public/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?php echo base_url() ?>public/vendors/nprogress/nprogress.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?php echo base_url() ?>public/build/js/custom.min.js"></script>

<script src="<?php echo base_url() ?>public/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>

<script src="<?php echo base_url() ?>public/vendors/nprogress/nprogress.js"></script>


<script src="<?php echo base_url() ?>public/build/js/timeLine.js"></script>
