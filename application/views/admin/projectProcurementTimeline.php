<link rel="stylesheet" href="<?php echo base_url() ?>public/timeLine.css">
<section class="content-header">
  <h2>Manage Procurement Timeline</h2>
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
              <div id="timeLineTableContainer">
                <table style="background: white" id="timeLineTable">
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
  

<script src="<?php echo base_url() ?>public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>public/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url() ?>public/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url() ?>public/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?>public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url() ?>public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url() ?>public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>public/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>public/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>public/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url() ?>public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url() ?>public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url() ?>public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>public/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>public/dist/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>public/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="<?php echo base_url() ?>public/timeLine.js"></script>
