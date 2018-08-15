
      <div class="col-lg-9 col-md-9 col-sm-9">
        <h3>Project Timeline:</h3>
        <form action="<?php echo base_url('admin/updateProcurementTimeline') ?>" method="POST" id="updateProcurementTimelineForm">

        </form>
        <div class="well">
          <div class="row">
            <div class="form-horizontal col-lg-5">
              <div class="form-group">
                <label class="control-label col-lg-7">Select date to begin with:</label>
                <div class="col-lg-5">
                  <input type="text" class="form-control" id="startDate" name="startDate" form="updateProcurementTimelineForm">
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <button id="timeLineComputeBtn" type="button" class="btn btn-default btn-block">Compute/Reset to Earliest Possible Time</button>
            </div>
            <div class="col-lg-3">
              <button class="btn btn-default btn-block" type="button" id="startOverBtn">Start Over</button>
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="row">
            <div id="timeLineTableContainer">
              <table id="timeLineTable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th class="text-center">Procurement Stage</th>
                    <th class="text-center">Start Date</th>
                    <th class="text-center">End Date</th>
                    <th class="text-center">Add Days</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="left-col"><b class="pull-right">ADS/Post:</b></td>
                    <td class="center"><input type="text" class="form-control" id="advertisement_start" name="advertisement_start" form="updateProcurementTimelineForm"></td>
                    <td class="center"><input type="text" class="form-control" id="advertisement_end" name="advertisement_end" form="updateProcurementTimelineForm"></td>
                    <td class="reight-col"></td>
                  </tr>
                  <tr>
                    <td class="left-col">
                      <div class="row">
                        <div class="col-lg-12">
                          <b class="pull-right">Pre-bid Conference:</b>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <p class="text-right"><i>Conduct?</i></p>
                        </div>
                        <div class="col-md-4">
                          <label for="yesPreBid" class="text-center">Yes</label>
                          <input type="radio" name="pre-bid" id="yesPreBid" class="text-center" checked="checked">
                        </div>
                        <div class="col-md-4">
                          <label for="noPreBid" class="text-center">No</label>
                          <input type="radio" name="pre-bid" id="noPreBid" class="text-center">
                        </div>
                      </div>
                    </td>
                    <td class="center"><input type="text" class="form-control" id="preBidStart" name="preBidStart" form="updateProcurementTimelineForm"></td>
                    <td class="center"><input type="text" class="form-control" id="preBidEnd" name="preBidEnd" form="updateProcurementTimelineForm"></td>
                    <td class="row-col">
                      <div class="col-lg-6">
                        <input type="number" class="form-control" id="preBidNumber" min="0">
                      </div>
                      <div class="col-lg-6">
                        <button class="btn btn-info btn-block" id="preBidUpdateBtn" type="button">Update</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><b class="pull-right">Submission of bid:</b></td>
                    <td><input type="text" class="form-control" id="bidSubmissionStart" name="bidSubmissionStart" form="updateProcurementTimelineForm"></td>
                    <td><input type="text" class="form-control" id="bidSubmissionEnd" name="bidSubmissionEnd" form="updateProcurementTimelineForm"></td>
                    <td>
                      <div class="col-lg-6">
                        <input type="number" class="form-control" id="bidSubmissionNumber" min="0">
                      </div>
                      <div class="col-lg-6">
                        <button class="btn btn-info btn-block" id="bidSubmissionUpdateBtn" type="button">Update</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><b class="pull-right">Bid Evaluation:</b></td>
                    <td><input type="text" class="form-control" id="bidEvaluationStart" name="bidEvaluationStart" form="updateProcurementTimelineForm"></td>
                    <td><input type="text" class="form-control" id="bidEvaluationEnd" name="bidEvaluationEnd" form="updateProcurementTimelineForm"></td>
                    <td>
                      <div class="col-lg-6">
                        <input type="number" class="form-control" id="bidEvaluationNumber" min="0">
                      </div>
                      <div class="col-lg-6">
                        <button class="btn btn-info btn-block" id="bidEvaluationUpdateBtn" type="button">Update</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><b class="pull-right">Post Qualification:</b></td>
                    <td><input type="text" class="form-control" id="postQualificationStart" name="postQualificationStart" form="updateProcurementTimelineForm"></td>
                    <td><input type="text" class="form-control" id="postQualificationEnd" name="postQualificationEnd" form="updateProcurementTimelineForm"></td>
                    <td>
                      <div class="col-lg-6">
                        <input type="number" class="form-control" id="postQualificationNumber"  min="0">
                      </div>
                      <div class="col-lg-6">
                        <button class="btn btn-info btn-block" id="postQualificationUpdateBtn" type="button">Update</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><b class="pull-right">Issuance of Notice of Awards:</b></td>
                    <td><input type="text" class="form-control" id="awardNoticeIssuanceStart" name="awardNoticeIssuanceStart" form="updateProcurementTimelineForm"></td>
                    <td><input type="text" class="form-control" id="awardNoticeIssuanceEnd" name="awardNoticeIssuanceEnd" form="updateProcurementTimelineForm"></td>
                    <td>
                      <div class="col-lg-6">
                        <input type="number" class="form-control" id="awardNoticeIssuanceNumber"  min="0">
                      </div>
                      <div class="col-lg-6">
                        <button class="btn btn-info btn-block" id="awardNoticeIssuanceUpdateBtn" type="button">Update</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><b class="pull-right">Contract Preparation and Signing:</b></td>
                    <td><input type="text" class="form-control" id="contractSigningStart" name="contractSigningStart" form="updateProcurementTimelineForm"></td>
                    <td><input type="text" class="form-control" id="contractSigningEnd" name="contractSigningEnd" form="updateProcurementTimelineForm"></td>
                    <td>
                      <div class="col-lg-6">
                        <input type="number" class="form-control" id="contractSigningNumber"  min="0">
                      </div>
                      <div class="col-lg-6">
                        <button class="btn btn-info btn-block" id="contractSigningUpdateBtn" type="button">Update</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="row">
                        <div class="col-lg-12">
                          <b class="pull-right">Approval by Higher Authority:</b>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <p class="text-right"><i>Necessary?</i></p>
                        </div>
                        <div class="col-md-4">
                          <label for="yesPreBid" class="text-center">Yes</label>
                          <input type="radio" name="approval" id="yesApproval" class="text-center" checked="checked">
                        </div>
                        <div class="col-md-4">
                          <label for="noPreBid" class="text-center">No</label>
                          <input type="radio" name="approval" id="noApproval" class="text-center">
                        </div>
                      </div>
                    </td>
                    <td><input type="text" class="form-control" id="authorityApprovalStart" name="authorityApprovalStart" form="updateProcurementTimelineForm"></td>
                    <td><input type="text" class="form-control" id="authorityApprovalEnd" name="authorityApprovalEnd" form="updateProcurementTimelineForm"></td>
                    <td>
                      <div class="col-lg-6">
                        <input type="number" class="form-control" id="authorityApprovalNumber" min="0">
                      </div>
                      <div class="col-lg-6">
                        <button class="btn btn-info btn-block" id="authorityApprovalUpdateBtn" type="button">Update</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><b class="pull-right">Notice to Proceed:</b></td>
                    <td><input type="text" class="form-control" id="proceedNoticeStart" name="proceedNoticeStart" form="updateProcurementTimelineForm"></td>
                    <td><input type="text" class="form-control" id="proceedNoticeEnd" name="proceedNoticeEnd" form="updateProcurementTimelineForm"></td>
                    <td>
                      <div class="col-lg-6">
                        <input type="number" class="form-control" id="proceedNoticeNumber" min="0">
                      </div>
                      <div class="col-lg-6">
                        <button class="btn btn-info btn-block" id="proceedNoticeUpdateBtn" type="button">Update</button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#timelineModal" id="timelineModalConfirmBtn">Submit</button>
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


  <script>

    $(document).ready(function(){
      $('#startDate').datepicker()
    });

    $('#timelineModalConfirmBtn').click(function(e){
      $('#addStart').html($('#advertisement_start').val());
      $('#addEnd').html($('#advertisement_end').val());
      $('#pbcStart').html($('#preBidStart').val());
      $('#pbcEnd').html($('#preBidEnd').val());
      $('#sbStart').html($('#bidSubmissionStart').val());
      $('#sbEnd').html($('#bidSubmissionEnd').val());
      $('#beStart').html($('#bidEvaluationStart').val());
      $('#beEnd').html($('#bidEvaluationEnd').val());
      $('#pqStart').html($('#postQualificationStart').val());
      $('#pqEnd').html($('#postQualificationEnd').val());
      $('#inaStart').html($('#awardNoticeIssuanceStart').val());
      $('#inaEnd').html($('#awardNoticeIssuanceEnd').val());
      $('#cpsStart').html($('#contractSigningStart').val());
      $('#cpsEnd').html($('#contractSigningEnd').val());
      $('#ahaStart').html($('#authorityApprovalStart').val());
      $('#ahaEnd').html($('#authorityApprovalEnd').val());
      $('#ntpStart').html($('#proceedNoticeStart').val());
      $('#ntpEnd').html($('#proceedNoticeEnd').val());
    });

    $(document).ready(function(e){
      $('#advertisement_start').val("<?php echo $timeLine['advertisement_start'] ?>");
      $('#advertisement_end').val("<?php echo $timeLine['advertisement_end'] ?>");
      $('#preBidStart').val("<?php echo $timeLine['pre_bid_start'] ?>");
      $('#preBidEnd').val("<?php echo $timeLine['pre_bid_end'] ?>");
      $('#bidSubmissionStart').val("<?php echo $timeLine['bid_submission_start'] ?>");
      $('#bidSubmissionEnd').val("<?php echo $timeLine['bid_submission_end'] ?>");
      $('#bidEvaluationStart').val("<?php echo $timeLine['bid_evaluation_start'] ?>");
      $('#bidEvaluationEnd').val("<?php echo $timeLine['bid_evaluation_end'] ?>");
      $('#postQualificationStart').val("<?php echo $timeLine['post_qualification_start'] ?>");
      $('#postQualificationEnd').val("<?php echo $timeLine['post_qualification_end'] ?>");
      $('#awardNoticeIssuanceStart').val("<?php echo $timeLine['award_notice_start'] ?>");
      $('#awardNoticeIssuanceEnd').val("<?php echo $timeLine['award_notice_end'] ?>");
      $('#contractSigningStart').val("<?php echo $timeLine['contract_signing_start'] ?>");
      $('#contractSigningEnd').val("<?php echo $timeLine['contract_signing_end'] ?>");
      $('#authorityApprovalStart').val("<?php echo $timeLine['authority_approval_start'] ?>");
      $('#authorityApprovalEnd').val("<?php echo $timeLine['authority_approval_end'] ?>");
      $('#proceedNoticeStart').val("<?php echo $timeLine['proceed_notice_start'] ?>");
      $('#proceedNoticeEnd').val("<?php echo $timeLine['proceed_notice_end'] ?>");


  var advertisementMinBase = 0;
  var advertisementMaxBase = 7;
  var prebidMinBase = 8;
  var prebidMaxBase = 8;
  var bidSubmissionMinBase = 20;
  var bidSubmissionMaxBase = 20;
  var bidEvaluationMinBase = 21;
  var bidEvaluationMaxBase = 21;
  var postQualificationMinBase = 22;
  var postQualificationMaxBase = 22;
  var awardNoticeIssuanceMinBase = 23;
  var awardNoticeIssuanceMaxBase = 23;
  var contractSigningMinBase = 24;
  var contractSigningMaxBase = 24;
  var authorityApprovalMinBase = 25;
  var authorityApprovalMaxBase = 25;
  var proceedNoticeMinBase = 26;
  var proceedNoticeMaxBase = 26;

  $('#noPreBid').click(function(event) {
    $('#preBidStart').prop('value', '');
    $('#preBidEnd').prop('value', '');
    $('#preBidStart').prop('disabled', true);
    $('#preBidEnd').prop('disabled', true);
    $('#preBidNumber').prop('disabled', true);
    $('#preBidUpdateBtn').prop('disabled', true);   
    var startDate = $('#startDate').val();
    if ($('#noApproval').is(":checked")) {
      setDatesToEarliestPossibleTimeWithoutPBCandAHA(startDate);
    }else{
      setDatesToEarliestPossibleTimeWithoutPBC(startDate);
    }
  });

  $('#yesPreBid').click(function(event) {
    $('#preBidStart').prop('disabled', false);
    $('#preBidEnd').prop('disabled', false);
    $('#preBidNumber').prop('disabled', false);
    $('#preBidUpdateBtn').prop('disabled', false);
    var startDate = $('#startDate').val();
    if ($('#yesApproval').is(":checked")) {
      setDatesToEarliestPossibleTime(startDate);
    }else{
      setDatesToEarliestPossibleTimeWithoutAHA(startDate);
    }
  });

  $('#noApproval').click(function(event) {
    $('#authorityApprovalStart').prop('value', '');
    $('#authorityApprovalEnd').prop('value', '');
    $('#authorityApprovalStart').prop('disabled', true);
    $('#authorityApprovalEnd').prop('disabled', true);
    $('#authorityApprovalNumber').prop('disabled', true);
    $('#authorityApprovalUpdateBtn').prop('disabled', true);
    var startDate = $('#startDate').val();
    if ($('#noPreBid').is(":checked")) {
      setDatesToEarliestPossibleTimeWithoutPBCandAHA(startDate);
    }else{
      setDatesToEarliestPossibleTimeWithoutAHA(startDate);
    }
  });

  $('#yesApproval').click(function(event) {
    $('#authorityApprovalStart').prop('disabled', false);
    $('#authorityApprovalEnd').prop('disabled', false);
    $('#authorityApprovalNumber').prop('disabled', false);
    $('#authorityApprovalUpdateBtn').prop('disabled', false);
    var startDate = $('#startDate').val();
    if ($('#yesPreBid').is(":checked")) {
      setDatesToEarliestPossibleTime(startDate);
    }else{
      setDatesToEarliestPossibleTimeWithoutPBC(startDate);
    }
  });


  $('#preBidUpdateBtn').click(function(event){
    var startDate = $('#startDate').val();
    var daysToAdd = $('#preBidNumber').val();
    prebidMaxBase = prebidMinBase + (parseFloat(daysToAdd)-1);
    bidSubmissionMinBase = prebidMaxBase + 12;
    bidSubmissionMaxBase = prebidMaxBase + 12;
    bidEvaluationMinBase = bidSubmissionMaxBase + 1;
    bidEvaluationMaxBase = bidSubmissionMaxBase + 1;
    postQualificationMinBase = bidEvaluationMaxBase + 1;
    postQualificationMaxBase = bidEvaluationMaxBase + 1;
    awardNoticeIssuanceMinBase = postQualificationMaxBase + 1;
    awardNoticeIssuanceMaxBase = postQualificationMaxBase + 1;
    contractSigningMinBase = awardNoticeIssuanceMaxBase + 1;
    contractSigningMaxBase = awardNoticeIssuanceMaxBase + 1;
    authorityApprovalMinBase = contractSigningMaxBase + 1;
    authorityApprovalMaxBase = contractSigningMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    if (daysToAdd) {
      setDates(startDate, advertisementMinBase, advertisementMaxBase, prebidMaxBase, prebidMaxBase, bidSubmissionMinBase, bidSubmissionMaxBase, bidEvaluationMinBase, bidEvaluationMaxBase, postQualificationMinBase, postQualificationMaxBase, awardNoticeIssuanceMinBase, awardNoticeIssuanceMaxBase, contractSigningMinBase, contractSigningMaxBase, authorityApprovalMinBase, authorityApprovalMaxBase, proceedNoticeMinBase, proceedNoticeMaxBase);
    }else{  
      $('#update_warning').modal('show');
    }
  });

  $('#bidSubmissionUpdateBtn').click(function(event){
    var startDate = $('#startDate').val();
    var daysToAdd = $('#bidSubmissionNumber').val();
    bidSubmissionMaxBase = bidSubmissionMinBase + (parseFloat(daysToAdd)-1);
    bidEvaluationMinBase = bidSubmissionMaxBase + 1;
    bidEvaluationMaxBase = bidSubmissionMaxBase + 1;
    postQualificationMinBase = bidEvaluationMaxBase + 1;
    postQualificationMaxBase = bidEvaluationMaxBase + 1;
    awardNoticeIssuanceMinBase = postQualificationMaxBase + 1;
    awardNoticeIssuanceMaxBase = postQualificationMaxBase + 1;
    contractSigningMinBase = awardNoticeIssuanceMaxBase + 1;
    contractSigningMaxBase = awardNoticeIssuanceMaxBase + 1;
    authorityApprovalMinBase = contractSigningMaxBase + 1;
    authorityApprovalMaxBase = contractSigningMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    if (daysToAdd) {
      setDates(startDate, advertisementMinBase, advertisementMaxBase, prebidMaxBase, prebidMaxBase, bidSubmissionMinBase, bidSubmissionMaxBase, bidEvaluationMinBase, bidEvaluationMaxBase, postQualificationMinBase, postQualificationMaxBase, awardNoticeIssuanceMinBase, awardNoticeIssuanceMaxBase, contractSigningMinBase, contractSigningMaxBase, authorityApprovalMinBase, authorityApprovalMaxBase, proceedNoticeMinBase, proceedNoticeMaxBase);
    }else{
      $('#update_warning').modal('show');
    }
  });

  $('#bidEvaluationUpdateBtn').click(function(event){
    var startDate = $('#startDate').val();
    var daysToAdd = $('#bidEvaluationNumber').val();
    bidEvaluationMaxBase = bidEvaluationMinBase + (parseFloat(daysToAdd)-1);
    postQualificationMinBase = bidEvaluationMaxBase + 1;
    postQualificationMaxBase = bidEvaluationMaxBase + 1;
    awardNoticeIssuanceMinBase = postQualificationMaxBase + 1;
    awardNoticeIssuanceMaxBase = postQualificationMaxBase + 1;
    contractSigningMinBase = awardNoticeIssuanceMaxBase + 1;
    contractSigningMaxBase = awardNoticeIssuanceMaxBase + 1;
    authorityApprovalMinBase = contractSigningMaxBase + 1;
    authorityApprovalMaxBase = contractSigningMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    if (daysToAdd) {
      setDates(startDate, advertisementMinBase, advertisementMaxBase, prebidMaxBase, prebidMaxBase, bidSubmissionMinBase, bidSubmissionMaxBase, bidEvaluationMinBase, bidEvaluationMaxBase, postQualificationMinBase, postQualificationMaxBase, awardNoticeIssuanceMinBase, awardNoticeIssuanceMaxBase, contractSigningMinBase, contractSigningMaxBase, authorityApprovalMinBase, authorityApprovalMaxBase, proceedNoticeMinBase, proceedNoticeMaxBase);
    }else{
      $('#update_warning').modal('show');
    }
  });

  $('#postQualificationUpdateBtn').click(function(event){
    var startDate = $('#startDate').val();
    var daysToAdd = $('#postQualificationNumber').val();
    postQualificationMaxBase = postQualificationMinBase + (parseFloat(daysToAdd)-1);
    awardNoticeIssuanceMinBase = postQualificationMaxBase + 1;
    awardNoticeIssuanceMaxBase = postQualificationMaxBase + 1;
    contractSigningMinBase = awardNoticeIssuanceMaxBase + 1;
    contractSigningMaxBase = awardNoticeIssuanceMaxBase + 1;
    authorityApprovalMinBase = contractSigningMaxBase + 1;
    authorityApprovalMaxBase = contractSigningMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    if (daysToAdd) {
      setDates(startDate, advertisementMinBase, advertisementMaxBase, prebidMaxBase, prebidMaxBase, bidSubmissionMinBase, bidSubmissionMaxBase, bidEvaluationMinBase, bidEvaluationMaxBase, postQualificationMinBase, postQualificationMaxBase, awardNoticeIssuanceMinBase, awardNoticeIssuanceMaxBase, contractSigningMinBase, contractSigningMaxBase, authorityApprovalMinBase, authorityApprovalMaxBase, proceedNoticeMinBase, proceedNoticeMaxBase);
    }else{
      $('#update_warning').modal('show');
    }
  });

  $('#awardNoticeIssuanceUpdateBtn').click(function(event){
    var startDate = $('#startDate').val();
    var daysToAdd = $('#awardNoticeIssuanceNumber').val();
    awardNoticeIssuanceMaxBase = awardNoticeIssuanceMinBase + (parseFloat(daysToAdd)-1);
    contractSigningMinBase = awardNoticeIssuanceMaxBase + 1;
    contractSigningMaxBase = awardNoticeIssuanceMaxBase + 1;
    authorityApprovalMinBase = contractSigningMaxBase + 1;
    authorityApprovalMaxBase = contractSigningMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    if (daysToAdd) {
      setDates(startDate, advertisementMinBase, advertisementMaxBase, prebidMaxBase, prebidMaxBase, bidSubmissionMinBase, bidSubmissionMaxBase, bidEvaluationMinBase, bidEvaluationMaxBase, postQualificationMinBase, postQualificationMaxBase, awardNoticeIssuanceMinBase, awardNoticeIssuanceMaxBase, contractSigningMinBase, contractSigningMaxBase, authorityApprovalMinBase, authorityApprovalMaxBase, proceedNoticeMinBase, proceedNoticeMaxBase);
    }else{
      $('#update_warning').modal('show');
    }
  });

  $('#contractSigningUpdateBtn').click(function(event){
    var startDate = $('#startDate').val();
    var daysToAdd = $('#contractSigningNumber').val();
    contractSigningMaxBase = contractSigningMinBase + (parseFloat(daysToAdd)-1);
    authorityApprovalMinBase = contractSigningMaxBase + 1;
    authorityApprovalMaxBase = contractSigningMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    if (daysToAdd) {
      setDates(startDate, advertisementMinBase, advertisementMaxBase, prebidMaxBase, prebidMaxBase, bidSubmissionMinBase, bidSubmissionMaxBase, bidEvaluationMinBase, bidEvaluationMaxBase, postQualificationMinBase, postQualificationMaxBase, awardNoticeIssuanceMinBase, awardNoticeIssuanceMaxBase, contractSigningMinBase, contractSigningMaxBase, authorityApprovalMinBase, authorityApprovalMaxBase, proceedNoticeMinBase, proceedNoticeMaxBase);
    }else{
      $('#update_warning').modal('show');
    }
  });

  $('#authorityApprovalUpdateBtn').click(function(event){
    var startDate = $('#startDate').val();
    var daysToAdd = $('#authorityApprovalNumber').val();
    authorityApprovalMaxBase = authorityApprovalMinBase + (parseFloat(daysToAdd)-1);
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    if (daysToAdd) {
      setDates(startDate, advertisementMinBase, advertisementMaxBase, prebidMaxBase, prebidMaxBase, bidSubmissionMinBase, bidSubmissionMaxBase, bidEvaluationMinBase, bidEvaluationMaxBase, postQualificationMinBase, postQualificationMaxBase, awardNoticeIssuanceMinBase, awardNoticeIssuanceMaxBase, contractSigningMinBase, contractSigningMaxBase, authorityApprovalMinBase, authorityApprovalMaxBase, proceedNoticeMinBase, proceedNoticeMaxBase);
    }else{
      $('#update_warning').modal('show');
    }
  });

  $('#proceedNoticeUpdateBtn').click(function(event){
    var startDate = $('#startDate').val();
    var daysToAdd = $('#proceedNoticeNumber').val();
    proceedNoticeMaxBase = proceedNoticeMinBase + (parseFloat(daysToAdd)-1);
    if (daysToAdd) {
      setDates(startDate, advertisementMinBase, advertisementMaxBase, prebidMaxBase, prebidMaxBase, bidSubmissionMinBase, bidSubmissionMaxBase, bidEvaluationMinBase, bidEvaluationMaxBase, postQualificationMinBase, postQualificationMaxBase, awardNoticeIssuanceMinBase, awardNoticeIssuanceMaxBase, contractSigningMinBase, contractSigningMaxBase, authorityApprovalMinBase, authorityApprovalMaxBase, proceedNoticeMinBase, proceedNoticeMaxBase);
    }else{
      $('#update_warning').modal('show');
    }
  });


  $('#startOverBtn').click(function(event){
    $(':input').val('');
  });

  function setStartDate(date, interval){
    var startDate = new Date(date);
    startDate.setDate(startDate.getDate()+interval);
    console.log(startDate);
    var startDateDay = ("0" + startDate.getDate()).slice(-2);
    var startDateMonth = ("0" + (startDate.getMonth() + 1)).slice(-2);
    var finalStartDate = startDate.getFullYear()+"-"+(startDateMonth)+"-"+(startDateDay);
    return finalStartDate;
  }

  function setEndDate(date, interval){
    var endDate = new Date(date);
    endDate.setDate(endDate.getDate()+interval);
    console.log(endDate);
    var endDateDay = ("0" + endDate.getDate()).slice(-2);
    var endDateMonth = ("0" + (endDate.getMonth() + 1)).slice(-2);
    var finalEndDate = endDate.getFullYear()+"-"+(endDateMonth)+"-"+(endDateDay);
    return finalEndDate;
  }

  $('#timeLineComputeBtn').click(function(event){
    var startDate = $('#startDate').val();

    if (startDate == null || startDate == "") {
      $('#missing_startdate_warning').modal('show');
    }else{
      if ($('#noPreBid').is(":checked") && $('#noApproval').is(":checked")) {
        setDatesToEarliestPossibleTimeWithoutPBCandAHA(startDate);
      }else if($('#noApproval').is(":checked")){
        setDatesToEarliestPossibleTimeWithoutAHA(startDate);
      }else if($('#noPreBid').is(":checked")){
        setDatesToEarliestPossibleTimeWithoutPBC(startDate);
      }else{
        setDatesToEarliestPossibleTime(startDate);  
      }
    }
      
  });

  function setDatesToEarliestPossibleTime(startDate){
    setAdvertisementDate(startDate, 0, 7);
    setPreBidDate(startDate, 8, 8);
    setBidSubmissionDate(startDate, 20, 20);
    setBidEvaluationDate(startDate, 21, 21);
    setPostQualificationDate(startDate, 22, 22);
    setAwardNoticeIssuanceDate(startDate, 23, 23);
    setContractSigningDate(startDate, 24, 24);
    setAuthorityApprovalDate(startDate, 25, 25);
    setProceedNoticeDate(startDate, 26, 26);
  }

  function setDates(startDate, advertisementMin, advertisementMax, prebidMin, prebidMax, bidSubmissionMin, bidSubmissionMax, bidEvaluationMin, bidEvaluationMax, postQualificationMin, postQualificationMax, awardNoticeIssuanceMin, awardNoticeIssuanceMax, contractSigningMin, contractSigningMax, authorityApprovalMin, authorityApprovalMax, proceedNoticeMin, proceedNoticeMax){
    setAdvertisementDate(startDate, advertisementMin, advertisementMax);
    setPreBidDate(startDate, prebidMin, prebidMax);
    setBidSubmissionDate(startDate, bidSubmissionMin, bidSubmissionMax);
    setBidEvaluationDate(startDate, bidEvaluationMin, bidEvaluationMax);
    setPostQualificationDate(startDate, postQualificationMin, postQualificationMax);
    setAwardNoticeIssuanceDate(startDate, awardNoticeIssuanceMin, awardNoticeIssuanceMax);
    setContractSigningDate(startDate, contractSigningMin, contractSigningMax);
    setAuthorityApprovalDate(startDate, authorityApprovalMin, authorityApprovalMax);
    setProceedNoticeDate(startDate, proceedNoticeMin, proceedNoticeMax);
  }

  function setDatesToEarliestPossibleTimeWithoutPBC(startDate){
    setAdvertisementDate(startDate, 0, 7);
    setBidSubmissionDate(startDate, 8, 8);
    setBidEvaluationDate(startDate, 9, 9);
    setPostQualificationDate(startDate, 10, 10);
    setAwardNoticeIssuanceDate(startDate, 11, 11);
    setContractSigningDate(startDate, 12, 12);
    setAuthorityApprovalDate(startDate, 13, 13);
    setProceedNoticeDate(startDate, 14, 14);
  }

  function setDatesToEarliestPossibleTimeWithoutAHA(startDate){
    setAdvertisementDate(startDate, 0, 7);
    setPreBidDate(startDate, 8, 8);
    setBidSubmissionDate(startDate, 20, 20);
    setBidEvaluationDate(startDate, 21, 21);
    setPostQualificationDate(startDate, 22, 22);
    setAwardNoticeIssuanceDate(startDate, 23, 23);
    setContractSigningDate(startDate, 24, 24);
    setProceedNoticeDate(startDate, 25, 25);
  }

  function setDatesToEarliestPossibleTimeWithoutPBCandAHA(startDate){
    setAdvertisementDate(startDate, 0, 7);
    setBidSubmissionDate(startDate, 8, 8);
    setBidEvaluationDate(startDate, 9, 9);
    setPostQualificationDate(startDate, 10, 10);
    setAwardNoticeIssuanceDate(startDate, 11, 11);
    setContractSigningDate(startDate, 12, 12);
    setProceedNoticeDate(startDate, 13, 13);
  }

  function setAdvertisementDate(startDate, min, max){
    $('#advertisement_start').val(setStartDate(startDate, min));
    $('#advertisement_end').val(setEndDate(startDate, max));
  }

  function setPreBidDate(startDate, min, max){
    $('#preBidStart').val(setStartDate(startDate, min));
    $('#preBidEnd').val(setEndDate(startDate, max));
  }

  function setBidSubmissionDate(startDate, min, max){
    $('#bidSubmissionStart').val(setStartDate(startDate, min));
    $('#bidSubmissionEnd').val(setEndDate(startDate, max));
  }

  function setBidEvaluationDate(startDate, min, max){
    $('#bidEvaluationStart').val(setStartDate(startDate, min));
    $('#bidEvaluationEnd').val(setEndDate(startDate, max));
  }

  function setPostQualificationDate(startDate, min, max){
    $('#postQualificationStart').val(setStartDate(startDate, min));
    $('#postQualificationEnd').val(setEndDate(startDate, max));
  }

  function setAwardNoticeIssuanceDate(startDate, min, max){
    $('#awardNoticeIssuanceStart').val(setStartDate(startDate, min));
    $('#awardNoticeIssuanceEnd').val(setEndDate(startDate, max));
  }

  function setContractSigningDate(startDate, min, max){
    $('#contractSigningStart').val(setStartDate(startDate, min));
    $('#contractSigningEnd').val(setEndDate(startDate, max));
  }

  function setAuthorityApprovalDate(startDate, min, max){
    $('#authorityApprovalStart').val(setStartDate(startDate, min));
    $('#authorityApprovalEnd').val(setEndDate(startDate, max));
  }

  function setProceedNoticeDate(startDate, min, max){
    $('#proceedNoticeStart').val(setStartDate(startDate, min));
    $('#proceedNoticeEnd').val(setEndDate(startDate, max));
  }


    });


  </script>

  <!-- modal for data confirmation -->
  <div id="timelineModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title" id="myModalLabel">Confirm Input Values</h4>
        </div>
        <div class="modal-body">
          <table class='table table-striped table-bordered' style='font-size:13px;'>
            <thead>
              <tr>
                <th class="text-center">Activity</th>
                <th class="text-center">Start Date</th>
                <th class="text-center">End Date</th>
              </tr> 
            </thead>
            <tbody>
              <tr>
                <td>Advertisement</td>
                <td id="addStart"></td>
                <td id="addEnd"></td>
              </tr>
              <tr>
                <td>Pre-bid Conference</td>
                <td id="pbcStart"></td>
                <td id="pbcEnd"></td>
              </tr>
              <tr>
                <td>Submission of Bids</td>
                <td id="sbStart"></td>
                <td id="sbEnd"></td>
              </tr>
              <tr>
                <td>Bid Evaluation</td>
                <td id="beStart"></td>
                <td id="beEnd"></td>
              </tr>
              <tr>
                <td>Post Qualification</td>
                <td id="pqStart"></td>
                <td id="pqEnd"></td>
              </tr>
              <tr>
                <td>Issuance of Notice of Award</td>
                <td id="inaStart"></td>
                <td id="inaEnd"></td>
              </tr>
              <tr>
                <td>Contract Preparation and Signing</td>
                <td id="cpsStart"></td>
                <td id="cpsEnd"></td>
              </tr>
              <tr>
                <td>Approval by Higher Authority</td>
                <td id="ahaStart"></td>
                <td id="ahaEnd"></td>
              </tr>
              <tr>
                <td>Notice to Proceed</td>
                <td id="ntpStart"></td>
                <td id="ntpEnd"></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" form="updateProcurementTimelineForm" name="submit" class="btn btn-primary">Confirm</button>
        </div>
      </div>
    </div>
  </div>
      <!-- end of modal -->

<div class="modal fade" id="update_warning" tabindex="-1" role="dialog" aria-labelledby="update_warning" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Warning</h5>
        <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p>Input Number of days to add before pressing UPDATE button!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="missing_startdate_warning" tabindex="-1" role="dialog" aria-labelledby="update_warning" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Alert!</h5>
        <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p>Select Start Date First!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>