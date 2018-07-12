
    <section class="content-header">
      <h2>Project Plan Details Collective Report</h2>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-lg-12 col-md-12 well">
          <div class="box">
            <div class="box-header">
              <h2 class="box-title">Project Details</h2>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-lg-8 col-md-8">
                  <div class="box box-info">
                    <div class="box-header">
                      <h3>Project Details</h3>
                    </div>
                    <div class="box-body">
                      <div class="row">
                        <div class="col-lg-12 col-md-12 well text-center">
                          <div class="form-group">
                            <label for="eventStatus">Current Project Status:</label>
                            <h3 id="eventStatus"><?php echo $projectDetails['plan_status'] ?></h3>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label for="">Label Here</label>
                            <p class="form-control"></p>  
                          </div>
                          <div class="form-group">
                            <label for="">Label Here</label>
                            <p class="form-control"></p>  
                          </div>
                          <div class="form-group">
                            <label for="">Label Here</label>
                            <p class="form-control"></p>  
                          </div>
                          <div class="form-group">
                            <label for="">Label Here</label>
                            <p class="form-control"></p>  
                          </div>
                          <div class="form-group">
                            <label for="">Label Here</label>
                            <p class="form-control"></p>  
                          </div>
                          <div class="form-group">
                            <label for="">Label Here</label>
                            <p class="form-control"></p>  
                          </div>
                          <div class="form-group">
                            <label for="">Label Here</label>
                            <p class="form-control"></p>  
                          </div>
                          <div class="form-group">
                            <label for="">Label Here</label>
                            <p class="form-control"></p>  
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label for="">Label Here</label>
                            <p class="form-control"></p>  
                          </div>
                          <div class="form-group">
                            <label for="">Label Here</label>
                            <p class="form-control"></p>  
                          </div>
                          <div class="form-group">
                            <label for="">Label Here</label>
                            <p class="form-control"></p>  
                          </div>
                          <div class="form-group">
                            <label for="">Label Here</label>
                            <p class="form-control"></p>  
                          </div>
                          <div class="form-group">
                            <label for="">Label Here</label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>  
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="box box-primary">
                    <div class="box-header">
                      <h3>Project Procurement Timeline</h3>
                    </div>
                  </div>
                  <div class="box-body">
                    <table class="table table-striped table-bordered">
                      <thead>
                        <th class="text-center">Activity</th>
                        <th class="text-center">Start Date</th>
                        <th class="text-center">End Date</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Pre-proc</td>
                          <td><?php echo $timeLine['pre_proc_date'] ?></td>
                          <td>None</td>
                        </tr>
                        <tr>
                          <td>Advertisement</td>
                          <td><?php echo $timeLine['advertisement_start'] ?></td>
                          <td><?php echo $timeLine['advertisement_end'] ?></td>
                        </tr>
                        <tr>
                          <td>Pre-bid Conference</td>
                          <td><?php echo $timeLine['pre_bid_start'] ?></td>
                          <td><?php echo $timeLine['pre_bid_end'] ?></td>
                        </tr>
                        <tr>
                          <td>Submission of Bid</td>
                          <td><?php echo $timeLine['pre_bid_start'] ?></td>
                          <td><?php echo $timeLine['pre_bid_end'] ?></td>
                        </tr>
                        <tr>
                          <td>Bid Evaluation</td>
                          <td><?php echo $timeLine['bid_evaluation_start'] ?></td>
                          <td><?php echo $timeLine['bid_evaluation_end'] ?></td>
                        </tr>
                        <tr>
                          <td>Post Qualification</td>
                          <td><?php echo $timeLine['post_qualification_start'] ?></td>
                          <td><?php echo $timeLine['post_qualification_end'] ?></td>
                        </tr>
                        <tr>
                          <td>Issuance of Notice of Award</td>
                          <td><?php echo $timeLine['award_notice_start'] ?></td>
                          <td><?php echo $timeLine['award_notice_end'] ?></td>
                        </tr>
                        <tr>
                          <td>Contract Preparation and Signing</td>
                          <td><?php echo $timeLine['contract_signing_start'] ?></td>
                          <td><?php echo $timeLine['contract_signing_end'] ?></td>
                        </tr>
                        <tr>
                          <td>Approval by Higher Authority</td>
                          <td><?php echo $timeLine['authority_approval_start'] ?></td>
                          <td><?php echo $timeLine['authority_approval_end'] ?></td>
                        </tr>
                        <tr>
                          <td>Notice to Proceed</td>
                          <td><?php echo $timeLine['proceed_notice_start'] ?></td>
                          <td><?php echo $timeLine['proceed_notice_end'] ?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12">
                  <div class="box box-warning">
                    <div class="box-header">
                      <h4>Procurment Activity Dates List</h4>
                    </div>
                    <div class="box-body">
                      <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                          <div class="form-group">
                            <label for="">Pre-proc Conference</label>
                            <p class="form-control"></p>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                          <div class="form-group">
                            <label for="">Ads/Post of IAEB</label>
                            <p class="form-control"></p>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                          <div class="form-group">
                            <label for="">Pre-bid Cof</label>
                            <p class="form-control"></p>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                          <div class="form-group">
                            <label for="">Sub/Open of Bids</label>
                            <p class="form-control"></p>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                          <div class="form-group">
                            <label for="">Eligibility Check</label>
                            <p class="form-control"></p>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                          <div class="form-group">
                            <label for="">Bid Evaluation</label>
                            <p class="form-control"></p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                          <div class="form-group">
                            <label for="">Post Qual</label>
                            <p class="form-control"></p>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                          <div class="form-group">
                            <label for="">Notice of Award</label>
                            <p class="form-control"></p>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                          <div class="form-group">
                            <label for="">Contract Signing</label>
                            <p class="form-control"></p>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                          <div class="form-group">
                            <label for="">Notice to Proceed</label>
                            <p class="form-control"></p>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                          <div class="form-group">
                            <label for="">Delivery/Completion</label>
                            <p class="form-control"></p>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                          <div class="form-group">
                            <label for="">Acceptance/Turnover</label>
                            <p class="form-control"></p>
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
<script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>



