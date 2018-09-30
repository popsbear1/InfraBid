
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <a class="btn btn-default" href="<?php echo base_url('admin/regularPlanListView') ?>">
            <i class="fa fa-angle-double-left"></i>
            Back
          </a>
          <h3>Add New Regular Project Plans</h3>
        </div>
      </div>
      <div class="box">
        <div class="box-header">
          <h2 class="box-title">Input Regular Project Plan Details</h2>
        </div>
        <div class="box-body">
          <div class="form_container" style="background: #f2f2f2; padding: 5%;">
            <form id="addPlanForm" method="POST" action="<?php echo base_url('admin/addRegularPlan') ?>" autocomplete="off">

              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <div class="form-group">
                        <label>Date Added <span style="color: red">* </span>:</label>
                        <input type="text" class="form-control" id="date_added" name="date_added" value="<?php echo $currentDate ?>">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <div class="form-group">
                        <label>Project Year <span style="color: red">* </span>:</label>
                        <input type="text" class="form-control" id="year" name="year" value="<?php echo $currentYear ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Project Number <span style="color: red">* </span>:</label>
                    <input type="text" id="project_no" value="" name="project_no" class="form-control" placeholder="Input project number here ... ">
                  </div>
                  <div class="form-group">
                    <label>Project Title <span style="color: red">* </span>:</label>
                    <input type="text" id="project_title" value="" name="project_title" class="form-control" placeholder="Input project title here ... ">
                  </div>
                  <div class="form-group">
                    <label>Municipality <span style="color: red">* </span>:</label>
                    <select class="form-control" id="municipality" name ="municipality">
                      <option selected hidden disabled>Choose Municipality</option>
                      <?php foreach ($municipalities as $municipality): ?>
                        <option value="<?php echo $municipality['municipality_id'] ?>" class="municipality"><?php echo $municipality['municipality'] . ' - ' . $municipality['municipality_code'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Barangay <span style="color: red">* </span>:</label>
                    <select class="form-control" id="barangay" name ="barangay">
                      <option selected disabled hidden>Choose Barangay</option>
            
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Type of Project <span style="color: red">* </span>:</label>
                    <select class="form-control" id="type" name ="type">
                      <option selected disabled hidden>Choose Type of Project</option>
                      <?php foreach ($projTypes as $projType): ?>
                        <option value="<?php echo $projType['projtype_id'] ?>"><?php echo $projType['type'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Mode of Procurement <span style="color: red">* </span>:</label>
                    <select class="form-control" id="mode" name ="mode">
                      <option selected hidden disabled>Mode of Procurement</option>
                      <?php foreach ($modes as $mode): ?>
                        <option value="<?php echo $mode['mode_id'] ?>"><?php echo $mode['mode'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group">
                    <label>Approved Budget Cost (ABC) <span style="color: red">* </span>:</label>
                    <input type="text" id="ABC" value="" name="ABC"  class="form-control" placeholder="Input ABC here ... ">
                  </div>
                  <div class="form-group">
                    <label>Source of Fund <span style="color: red">* </span>:</label>
                    <select class="form-control" id="source" name ="source">
                      <option selected hidden disabled>Choose Source of Fund</option>
                      <?php foreach ($sourceFunds as $sourceFund): ?>
                        <option value="<?php echo $sourceFund['fund_id'] ?>"><?php echo $sourceFund['source'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Account Classification <span style="color: red">* </span>:</label>
                    <select class="form-control" id="account" name ="account">
                      <option selected hidden disabled>Choose Account Classification</option>
                      <?php foreach ($accounts as $account): ?>
                        <option value="<?php echo $account['account_id'] ?>"><?php echo $account['classification'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>ABC/Post of IB/REI <span style="color: red">* </span>:</label>
                    <input type="text" class="form-control" name="abc_post_date" id="abc_post_date" placeholder="mm-yyyy">
                  </div>
                  <div class="form-group">
                    <label>Sub/Open of Bids <span style="color: red">* </span>:</label>
                    <input type="text" class="form-control" name="sub_open_date" id="sub_open_date" placeholder="mm-yyyy">
                  </div>
                  <div class="form-group">
                    <label>Notice of Award <span style="color: red">* </span>:</label>
                    <input type="text" class="form-control" name="award_notice_date" id="award_notice_date" placeholder="mm-yyyy">
                  </div>
                  <div class="form-group">
                    <label>Contract Signing <span style="color: red">* </span>:</label>
                    <input type="text" class="form-control" name="contract_signing_date" id="contract_signing_date" placeholder="mm-yyyy">
                  </div>
                  <div class="form-group">
                    <label> Remarks <span style="color: red">* </span>:</label>
                    <input type="text" class="form-control" name="remarks" id="remarks" placeholder="Input Remarks here ...">
                  </div>
                </div>
              </div> 
            </form>
          </div>
        </div>
        <div class="box-footer text-center">
          <button type="submit" class="btn btn-primary" form="addPlanForm">Submit</button>
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
<!-- Sparkline -->
<script src="<?php echo base_url() ?>public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url() ?>public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url() ?>public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>public/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>public/bower_components/moment/min/moment.min.js"></script>
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

  //Script for displaying/sorting/etc dagijy kwa barangays kanu
  var barangayData = '<?php echo json_encode($barangays) ?>';
  var barangays = JSON.parse(barangayData);

  console.log(barangays);

  console.log(barangays[1]['municipality_id']);

  $('#municipality').change(function(e){
    $('#barangay').empty();
    var municipality_id = $(this).val();

    for (var i = barangays.length - 1; i >= 0; i--) {
      if (municipality_id == barangays[i]['municipality_id']) {
        $('#barangay').append(
          '<option class="barangay" value="' + barangays[i]['barangay_id'] + '">' +  barangays[i]['barangay'] + ' - ' + barangays[i]['barangay_code'] + '</option>'
        );
      }
    }
  });

  //ajax ti adding of regular plan atoy
  $('#addPlanForm').submit(function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: $('#addPlanForm').attr('action'),
      data: $('#addPlanForm').serialize(),
      dataType: 'json'
    }).done(function(response){
      if (response.success == true) {
        window.location.replace("<?php echo base_url('admin/regularPlanListView') ?>");
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
    })
  })
</script>

