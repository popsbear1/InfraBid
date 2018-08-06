
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <h3 class="pull-left">Edit Project Plan Details</h3>
        </div>
      </div>
      <div class="box">
        <div class="box-header">
          <h2 class="box-title">Project Details Input Fields<small></small></h2>
        </div>
        <div class="box-body">
          <div class="form_container" style="background: #f2f2f2; padding: 5%;">
            <form id="editPlanForm" method="POST" action="<?php echo base_url('admin/editPlan') ?>" autocomplete="off">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <div class="form-group">
                        <label>Date Added <span style="color: red">* </span>:</label>
                        <input type="text" class="form-control" id="date_added" name="date_added" placeholder="<?php echo $projectDetails['date_added'] ?>">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <div class="form-group">
                        <label>Project Year <span style="color: red">* </span>:</label>
                        <input type="text" class="form-control" id="year" name="year" placeholder="<?php echo $projectDetails['project_year'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Project Number <span style="color: red">* </span>:</label>
                    <input type="text" id="project_no" value="" name="project_no" class="form-control" placeholder="<?php echo $projectDetails['project_no'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Project Title <span style="color: red">* </span>:</label>
                    <input type="text" id="project_title" value="" name="project_title" class="form-control" placeholder="<?php echo $projectDetails['project_title'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Municipality <span style="color: red">* </span>:</label>
                    <select class="form-control" id="municipality" name ="municipality">
                      <option selected hidden disabled><?php echo $projectDetails['municipality'] . ' - ' . $projectDetails['municipality_code'] ?></option>
                      <?php foreach ($municipalities as $municipality): ?>
                        <option value="<?php echo $municipality['municipality_id'] ?>" class="municipality"><?php echo $municipality['municipality'] . ' - ' . $municipality['municipality_code'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Barangay <span style="color: red">* </span>:</label>
                    <select class="form-control" id="barangay" name ="barangay">
                      <option selected disabled hidden><?php echo $projectDetails['barangay'] . ' - ' . $projectDetails['barangay_code'] ?></option>
            
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Type of Project <span style="color: red">* </span>:</label>
                    <select class="form-control" id="type" name ="type">
                      <option selected disabled hidden><?php echo $projectDetails['type'] ?></option>
                      <?php foreach ($projTypes as $projType): ?>
                        <option value="<?php echo $projType['projtype_id'] ?>"><?php echo $projType['type'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Mode of Procurement <span style="color: red">* </span>:</label>
                    <select class="form-control" id="mode" name ="mode">
                      <option selected hidden disabled><?php echo $projectDetails['mode'] ?></option>
                      <?php foreach ($modes as $mode): ?>
                        <option value="<?php echo $mode['mode_id'] ?>"><?php echo $mode['mode'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group">
                    <label>Approved Budget Cost (ABC) <span style="color: red">* </span>:</label>
                    <input type="text" id="ABC" value="" name="ABC"  class="form-control" placeholder="<?php echo number_format($projectDetails['abc'], 2) ?>">
                  </div>
                  <div class="form-group">
                    <label>Source of Fund <span style="color: red">* </span>:</label>
                    <select class="form-control" id="source" name ="source">
                      <option selected hidden disabled><?php echo $projectDetails['source'] ?></option>
                      <?php foreach ($sourceFunds as $sourceFund): ?>
                        <option value="<?php echo $sourceFund['fund_id'] ?>"><?php echo $sourceFund['source'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Account Classification <span style="color: red">* </span>:</label>
                    <select class="form-control" id="account" name ="account">
                      <option selected hidden disabled><?php echo $projectDetails['classification'] ?></option>
                      <?php foreach ($accounts as $account): ?>
                        <option value="<?php echo $account['account_id'] ?>"><?php echo $account['classification'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>ABC/Post of IB/REI <span style="color: red">* </span>:</label>
                    <input type="text" class="form-control" name="abc_post_date" id="abc_post_date" placeholder="<?php echo $projectDetails['abc_post_date'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Sub/Open of Bids <span style="color: red">* </span>:</label>
                    <input type="text" class="form-control" name="sub_open_date" id="sub_open_date" placeholder="<?php echo $projectDetails['sub_open_date'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Notice of Award <span style="color: red">* </span>:</label>
                    <input type="text" class="form-control" name="award_notice_date" id="award_notice_date" placeholder="<?php echo $projectDetails['award_notice_date'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Contract Signing <span style="color: red">* </span>:</label>
                    <input type="text" class="form-control" name="contract_signing_date" id="contract_signing_date" placeholder="<?php echo $projectDetails['contract_signing_date'] ?>">
                  </div>
                </div>
              </div> 
            </form>
          </div>
        </div>
        <div class="box-footer text-center">
          <button type="button" id="editPlanFormSubmitBtn" class="btn btn-primary" >Submit</button>
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

    //Date picker
  $('#year').datepicker({
    autoclose: true,
    orientation: 'bottom auto',
    minViewMode: 2,
    format: 'yyyy'
  })

  $('#date_added').datepicker();

  $('#abc_post_date').datepicker({
    autoclose: true,
    format: 'mm-yyyy',
    startView: 'months',
    minViewMode: 'months',
    orientation: 'bottom auto'
  });

  $('#sub_open_date').datepicker({
    autoclose: true,
    format: 'mm-yyyy',
    startView: 'months',
    minViewMode: 'months',
    orientation: 'bottom auto'
  });

  $('#award_notice_date').datepicker({
    autoclose: true,
    format: 'mm-yyyy',
    startView: 'months',
    minViewMode: 'months',
    orientation: 'top auto'
  });

  $('#contract_signing_date').datepicker({
    autoclose: true,
    format: 'mm-yyyy',
    startView: 'months',
    minViewMode: 'months',
    orientation: 'top auto'
  });

  var barangayData = '<?php echo json_encode($barangays) ?>';
  var barangays = JSON.parse(barangayData);

  console.log(barangays);

  console.log(barangays[1]['municipality_id']);

  $('#municipality').change(function(e){
    $('#barangaySelection').empty();
    var municipality_id = $(this).val();

    for (var i = barangays.length - 1; i >= 0; i--) {
      if (municipality_id == barangays[i]['municipality_id']) {
        $('#barangaySelection').append(
          '<option class="barangay" value="' + barangays[i]['barangay_id'] + '">' +  barangays[i]['barangay'] + ' - ' + barangays[i]['barangay_code'] + '</option>'
        );
      }
    }
  });

  $('#editPlanFormSubmitBtn').click(function(){
    
  });
</script>


