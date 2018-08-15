<?php  
  $preProcDate = date_create($actdates['pre_proc']);
  $advertisementDate = date_create($actdates['advertisement']);
  $preBidDate = date_create($actdates['pre_bid']);
  $eligibilityCheckDate = date_create($actdates['eligibility_check']);
  $openBidDate = date_create($actdates['open_bid']);
  $bidEvaluationDate = date_create($actdates['bid_evaluation']);
  $postQualDate = date_create($actdates['post_qual']);
  $awardNoticeDate = date_create($actdates['award_notice']);
  $contractSigningDate = date_create($actdates['contract_signing']);
  $authorityApprovalDate = date_create($actdates['authority_approval']);
  $proceedNoticeDate = date_create($actdates['proceed_notice']);
  $deliveryCompletionDate = date_create($actdates['delivery_completion']);
  $acceptanceTurnoverDate = date_create($actdates['acceptance_turnover']);

?>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <h3 class="pull-left">Collective Project Plan Details</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="box box-info">
            <div class="box-header">
              <h4>Project Details</h4>
            </div>
            <div class="box-body">
              <div style="height: 720px">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="">Project Title:</label>
                      <p class="form-control input-lg text-center"><?php echo $projectDetails['project_title'] ?></p>  
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label for="">Project Status:</label>
                      <p class="form-control input-sm"><?php echo $projectDetails['project_status'] ?></p>  
                    </div>
                    <div class="form-group">
                      <label for="">Date POW Added:</label>
                      <p class="form-control input-sm"><?php 
                                                            $datePOWAdded = date_create($projectDetails['date_pow_added']);    
                                                            echo date_format($datePOWAdded, "M-d-Y g:i:s:a");
                                                      ?>                                                        
                      </p>
                    </div>
                    <div class="form-group">
                      <label for="">Date Project Plan Added:</label>
                      <p class="form-control input-sm"><?php
                                                            $dateAdded = date_create($projectDetails['date_added']); 
                                                            echo date_format($dateAdded, "M-d-Y"); 
                                                      ?>
                      </p>  
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
                    <div class="form-group">
                      <label for="">Source of Fund:</label>
                      <p class="form-control input-sm"><?php echo $projectDetails['source'] ?></p>  
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label for="">Account Classification:</label>
                      <p class="form-control input-sm"><?php echo $projectDetails['classification'] ?></p>  
                    </div>
                    <div class="form-group">
                      <label for="">ABC</label>
                      <p class="form-control input-sm"><?php echo number_format($projectDetails['abc'], 2) ?></p>  
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
                                                      ?></p>  
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
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h4>Project Logs</h4>
            </div>
            <div class="box-body">
              <div style="height: 720px; overflow-y: scroll;">
                <table class="table table-striped table-bordered">
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
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h4>Project Procurement Timeline</h4>
            </div>
            <div class="box-body">
              <div style="height: 450px">
                <table class="table table-striped table-bordered">
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
                      <td><?php echo date_format(date_create($timeLine['advertisement_start']), "M-d-Y") ?></td>
                      <td><?php echo date_format(date_create($timeLine['advertisement_end']), "M-d-Y") ?></td>
                    </tr>
                    <tr>
                      <td>Pre-bid Conference</td>
                      <td><?php echo date_format(date_create($timeLine['pre_bid_start']), "M-d-Y") ?></td>
                      <td><?php echo date_format(date_create($timeLine['pre_bid_end']), "M-d-Y") ?></td>
                    </tr>
                    <tr>
                      <td>Submission of Bid</td>
                      <td><?php echo date_format(date_create($timeLine['pre_bid_start']), "M-d-Y") ?></td>
                      <td><?php echo date_format(date_create($timeLine['pre_bid_end']), "M-d-Y") ?></td>
                    </tr>
                    <tr>
                      <td>Bid Evaluation</td>
                      <td><?php echo date_format(date_create($timeLine['bid_evaluation_start']), "M-d-Y") ?></td>
                      <td><?php echo date_format(date_create($timeLine['bid_evaluation_end']), "M-d-Y") ?></td>
                    </tr>
                    <tr>
                      <td>Post Qualification</td>
                      <td><?php echo date_format(date_create($timeLine['post_qualification_start']), "M-d-Y") ?></td>
                      <td><?php echo date_format(date_create($timeLine['post_qualification_end']), "M-d-Y") ?></td>
                    </tr>
                    <tr>
                      <td>Issuance of Notice of Award</td>
                      <td><?php echo date_format(date_create($timeLine['award_notice_start']), "M-d-Y") ?></td>
                      <td><?php echo date_format(date_create($timeLine['award_notice_end']), "M-d-Y") ?></td>
                    </tr>
                    <tr>
                      <td>Contract Preparation and Signing</td>
                      <td><?php echo date_format(date_create($timeLine['contract_signing_start']), "M-d-Y") ?></td>
                      <td><?php echo date_format(date_create($timeLine['contract_signing_end']), "M-d-Y") ?></td>
                    </tr>
                    <tr>
                      <td>Approval by Higher Authority</td>
                      <td><?php echo date_format(date_create($timeLine['authority_approval_start']), "M-d-Y") ?></td>
                      <td><?php echo date_format(date_create($timeLine['authority_approval_end']), "M-d-Y") ?></td>
                    </tr>
                    <tr>
                      <td>Notice to Proceed</td>
                      <td><?php echo date_format(date_create($timeLine['proceed_notice_start']), "M-d-Y") ?></td>
                      <td><?php echo date_format(date_create($timeLine['proceed_notice_end']), "M-d-Y") ?></td>
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
                      <p class="form-control"><?php echo date_format($preProcDate, "M-d-Y") ?></p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                      <label for="">Ads/Post of IAEB</label>
                      <p class="form-control"><?php echo date_format($advertisementDate, "M-d-Y") ?></p>
                    </div>
                  </div> 
                </div>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                      <label for="">Pre-bid Cof</label>
                      <p class="form-control"><?php echo date_format($preBidDate, "M-d-Y") ?></p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                      <label for="">Sub/Open of Bids</label>
                      <p class="form-control"><?php echo date_format($openBidDate, "M-d-Y") ?></p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                      <label for="">Eligibility Check</label>
                      <p class="form-control"><?php echo date_format($eligibilityCheckDate, "M-d-Y") ?></p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                      <label for="">Bid Evaluation</label>
                      <p class="form-control"><?php echo date_format($bidEvaluationDate, "M-d-Y") ?></p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                      <label for="">Post Qual</label>
                      <p class="form-control"><?php echo date_format($postQualDate, "M-d-Y") ?></p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                      <label for="">Notice of Award</label>
                      <p class="form-control"><?php echo date_format($awardNoticeDate, "M-d-Y") ?></p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                      <label for="">Contract Signing</label>
                      <p class="form-control"><?php echo date_format($contractSigningDate, "M-d-Y") ?></p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                      <label for="">Notice to Proceed</label>
                      <p class="form-control"><?php echo date_format($proceedNoticeDate, "M-d-Y") ?></p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                      <label for="">Delivery/Completion</label>
                      <p class="form-control"><?php echo date_format($deliveryCompletionDate, "M-d-Y") ?></p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                      <label for="">Acceptance/Turnover</label>
                      <p class="form-control"><?php echo date_format($acceptanceTurnoverDate, "M-d-Y") ?></p>
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
<script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>



