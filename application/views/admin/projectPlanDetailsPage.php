<?php  
  
  function convertDateTextual($date){
    if ($date != null) {
      $timelineDate = date_create($date);
      $formatedTimelineDate = date_format($timelineDate, 'M-d-Y');
    }else{
      $formatedTimelineDate = 'None';
    }

    return $formatedTimelineDate;
  }
?>
<style>
  .details_btn{
    width: 250px;
    height: 60px;
  }
</style>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <h3 class="pull-left">Project Details Page</h3>
        </div>
      </div>
      <div class="box">
        <div class="row">
          <div class="col-md-12">
            <button class="btn btn-lg btn-default details_btn" id="project_details_btn">
              Details
            </button>
            <button class="btn btn-lg btn-default details_btn" id="project_logs_btn">
              Project Logs
            </button>
            <button class="btn btn-lg btn-default details_btn" id="timeline_procact_btn">
              Timeline and Activity Dates
            </button>
          </div>
        </div>
        <div class="box-body">
          <div class="details_view" id="project_details" hidden="hidden">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="">Project Title:</label>
                  <p class="form-control input-lg text-center"><?php echo $projectDetails['project_title'] ?></p>  
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-4">
                <div class="form-group">
                  <label for="">Project Status:</label>
                  <p class="form-control input-sm"><?php echo $projectDetails['project_status'] ?></p>  
                </div>
                
                <div class="form-group">
                  <label for="">Project Year:</label>
                  <p class="form-control input-sm"><?php echo $projectDetails['project_year'] ?></p>  
                </div>
                <div class="form-group">
                  <label for="">Project Number:</label>
                  <p class="form-control input-sm"><?php echo $projectDetails['project_no'] ?></p>  
                </div>
                <div class="form-group">
                  <label for="">Location:</label>
                  <p class="form-control input-sm"><?php echo $projectDetails['barangay'] . ', ' . $projectDetails['municipality'] ?></p>  
                </div>
                <div class="form-group">
                  <label for="">Project Type:</label>
                  <p class="form-control input-sm"><?php echo $projectDetails['type'] ?></p>  
                </div>
                <div class="form-group">
                  <label for="">Mode:</label>
                  <p class="form-control input-sm"><?php echo $projectDetails['mode'] ?></p>  
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="form-group">
                  <label for="">Source of Fund:</label>
                  <p class="form-control input-sm"><?php echo $projectDetails['source'] ?></p>  
                </div>
                <div class="form-group">
                  <label for="">Account Classification:</label>
                  <p class="form-control input-sm"><?php echo $projectDetails['classification'] ?></p>  
                </div>
                <div class="form-group">
                  <label for="">ABC</label>
                  <p class="form-control input-sm"><?php echo number_format($projectDetails['abc'], 2) ?></p>  
                </div>
                
                <div class="form-group">
                  <label for="">Rebid Count:</label>
                  <p class="form-control input-sm"><?php echo $projectDetails['re_bid_count'] ?></p>  
                </div>
                <div class="form-group">
                  <label for="">Contractor:</label>
                  <p class="form-control input-sm"><?php echo $projectDetails['businessname'] ?></p>  
                </div>
                <div class="form-group">
                  <label for="">Proposed Bid:</label>
                  <p class="form-control input-sm"><?php echo number_format($projectDetails['proposed_bid'], 2) ?></p>  
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                  <label for="">Date POW Added:</label>
                  <p class="form-control input-sm">
                    <?php 
                        $datePOWAdded = date_create($projectDetails['date_pow_added']);    
                        echo date_format($datePOWAdded, "M-d-Y g:i:s:a");
                      ?>                                                        
                  </p>
                </div>
                <div class="form-group">
                  <label for="">Date Project Plan Added:</label>
                  <p class="form-control input-sm">
                    <?php
                      $dateAdded = date_create($projectDetails['date_added']); 
                      echo date_format($dateAdded, "M-d-Y"); 
                  ?>
                  </p>  
                </div>
                <div class="form-group">
                  <label for="">Abc/PPost Date:</label>
                  <p class="form-control input-sm"><?php 
                                                        if ($actdates['advertisement'] != null) {
                                                          echo date_format($advertisementDate, "M-d-Y");
                                                        }else{
                                                          echo $projectDetails['abc_post_date'];
                                                        } 
                                                  ?>
                  </p>  
                </div>
                <div class="form-group">
                  <label for="">Sub/open of Date:</label>
                  <p class="form-control input-sm"><?php 
                                                        if ($actdates['open_bid'] != null) {
                                                          echo date_format($openBidDate, "M-d-Y");
                                                        }else{
                                                          echo $projectDetails['sub_open_date'];
                                                        } 
                                                  ?>
                  </p>  
                </div>
                <div class="form-group">
                  <label for="">Notice of Award Date:</label>
                  <p class="form-control input-sm"><?php 
                                                        if ($actdates['award_notice'] != null) {
                                                          echo date_format($awardNoticeDate, "M-d-Y");
                                                        }else{
                                                          echo $projectDetails['award_notice_date'];
                                                        } 
                                                  ?>
                  </p>  
                </div>
                <div class="form-group">
                  <label for="">Contract Signing Date:</label>
                  <p class="form-control input-sm"><?php
                                                        if ($actdates['contract_signing'] != null) {
                                                          echo date_format($contractSigningDate, "M-d-Y");    
                                                        } else{
                                                          echo $projectDetails['contract_signing_date'];
                                                        } 
                                                  ?>
                  </p>  
                </div>
              </div>
            </div>
          </div>
          <div class="details_view" id="project_logs" hidden="hidden">
            <table class="table table-striped table-bordered" id="remark_table" >
              <thead>
                <tr>
                  <th class="text-center">User</th>
                  <th class="text-center">Log Date</th>
                  <th class="text-center">Remark</th>
                </tr> 
              </thead>
              <tbody>
                <?php foreach ($logs as $log): ?>
                  <tr>
                    <td><?php echo $log['username'] ?></td>
                    <td><?php 
                              $logDate = date_create($log['log_date']);
                              echo date_format($logDate, "M-d-Y g:i:s:a");  
                        ?>
                    </td>
                    <td><?php echo $log['remark'] ?></td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
          <div class="details_view" id="timeline_procact" hidden="hidden">
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="box box-primary">
                  <div class="box-header">
                    <h4>Project Procurement Timeline</h4>
                  </div>
                  <div class="box-body">
                    <div style="height: 450px">
                      <table class="table table-striped table-bordered" id="timeline_table">
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
                            <td><?php echo convertDateTextual($timeLine['advertisement_start']) ?></td>
                            <td><?php echo convertDateTextual($timeLine['advertisement_end']) ?></td>
                          </tr>
                          <tr>
                            <td>Pre-bid Conference</td>
                            <td><?php echo convertDateTextual($timeLine['pre_bid_start']) ?></td>
                            <td><?php echo convertDateTextual($timeLine['pre_bid_end']) ?></td>
                          </tr>
                          <tr>
                            <td>Submission of Bid</td>
                            <td><?php echo convertDateTextual($timeLine['pre_bid_start']) ?></td>
                            <td><?php echo convertDateTextual($timeLine['pre_bid_end']) ?></td>
                          </tr>
                          <tr>
                            <td>Bid Evaluation</td>
                            <td><?php echo convertDateTextual($timeLine['bid_evaluation_start']) ?></td>
                            <td><?php echo convertDateTextual($timeLine['bid_evaluation_end']) ?></td>
                          </tr>
                          <tr>
                            <td>Post Qualification</td>
                            <td><?php echo convertDateTextual($timeLine['post_qualification_start']) ?></td>
                            <td><?php echo convertDateTextual($timeLine['post_qualification_end']) ?></td>
                          </tr>
                          <tr>
                            <td>Issuance of Notice of Award</td>
                            <td><?php echo convertDateTextual($timeLine['award_notice_start']) ?></td>
                            <td><?php echo convertDateTextual($timeLine['award_notice_end']) ?></td>
                          </tr>
                          <tr>
                            <td>Contract Preparation and Signing</td>
                            <td><?php echo convertDateTextual($timeLine['contract_signing_start']) ?></td>
                            <td><?php echo convertDateTextual($timeLine['contract_signing_end']) ?></td>
                          </tr>
                          <tr>
                            <td>Approval by Higher Authority</td>
                            <td><?php echo convertDateTextual($timeLine['authority_approval_start']) ?></td>
                            <td><?php echo convertDateTextual($timeLine['authority_approval_end']) ?></td>
                          </tr>
                          <tr>
                            <td>Notice to Proceed</td>
                            <td><?php echo convertDateTextual($timeLine['proceed_notice_start']) ?></td>
                            <td><?php echo convertDateTextual($timeLine['proceed_notice_end']) ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="box box-warning">
                  <div class="box-header">
                    <h4>Procurment Activity Dates List</h4>
                  </div>
                  <div class="box-body">
                    <div style="height: 450px">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="form-group">
                            <label for="">Pre-proc Conference</label>
                            <p class="form-control"><?php echo convertDateTextual($actdates['pre_proc']) ?></p>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="form-group">
                            <label for="">Ads/Post of IAEB</label>
                            <p class="form-control"><?php echo convertDateTextual($actdates['advertisement']) ?></p>
                          </div>
                        </div> 
                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="form-group">
                            <label for="">Pre-bid Cof</label>
                            <p class="form-control"><?php echo convertDateTextual($actdates['pre_bid']) ?></p>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="form-group">
                            <label for="">Sub/Open of Bids</label>
                            <p class="form-control"><?php echo convertDateTextual($actdates['open_bid']) ?></p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="form-group">
                            <label for="">Eligibility Check</label>
                            <p class="form-control"><?php echo convertDateTextual($actdates['eligibility_check']) ?></p>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="form-group">
                            <label for="">Bid Evaluation</label>
                            <p class="form-control"><?php echo convertDateTextual($actdates['bid_evaluation']) ?></p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="form-group">
                            <label for="">Post Qual</label>
                            <p class="form-control"><?php echo convertDateTextual($actdates['post_qual']) ?></p>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="form-group">
                            <label for="">Notice of Award</label>
                            <p class="form-control"><?php echo convertDateTextual($actdates['award_notice']) ?></p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="form-group">
                            <label for="">Contract Signing</label>
                            <p class="form-control"><?php echo convertDateTextual($actdates['contract_signing']) ?></p>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="form-group">
                            <label for="">Notice to Proceed</label>
                            <p class="form-control"><?php echo convertDateTextual($actdates['proceed_notice']) ?></p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="form-group">
                            <label for="">Delivery/Completion</label>
                            <p class="form-control"><?php echo convertDateTextual($actdates['delivery_completion']) ?></p>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="form-group">
                            <label for="">Acceptance/Turnover</label>
                            <p class="form-control"><?php echo convertDateTextual($actdates['acceptance_turnover']) ?></p>
                          </div>
                        </div>
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
<script>
  $(document).ready(function(){
    $('#timeline_table').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : false
    });
    $('#remark_table').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : false
    });
    setButtonStyle();
    $('#project_details_btn').css('background', '#cccccc');
    $('#project_details').prop('hidden', false);
  });

  function setButtonStyle(){
    $('#project_details_btn').css('background', '#48d660');
    $('#project_logs_btn').css('background', '#e59ce3');
    $('#timeline_procact_btn').css('background', '#f29e63');
  }

  $('.details_btn').click(function(){
    setButtonStyle();
    $(this).css('background', '#eceaed');
  });

  $('#project_details_btn').click(function(){
    $('.details_view').prop('hidden', 'hidden');
    $('#project_details').prop('hidden', false);
  });

  $('#project_logs_btn').click(function(){
    $('.details_view').prop('hidden', 'hidden');
    $('#project_logs').prop('hidden', false);
  });

  $('#timeline_procact_btn').click(function(){
    $('.details_view').prop('hidden', 'hidden');
    $('#timeline_procact').prop('hidden', false);
  });
</script>


