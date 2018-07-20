
    <section class="content-header">
      <h3>ADD NEW PROJECT PLAN (SUPPLEMENTAL)</h3>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
              <h2 class="box-title">Input Project Plan Details</h2>
            </div>
            <div class="box-body">
              <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success">
                  <p><?php echo $_SESSION['success'] ?></p>
                </div>
              <?php endif ?>
              <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-warning">
                  <p><?php echo $_SESSION['error'] ?></p>
                </div>
              <?php endif ?>
              <form id="addPlanForm" method="POST" class="form-horizontal form-label-left" action="<?php echo base_url('admin/addSupplementalPlan') ?>">
                <!-- Date -->
                <div class="form-group">
                  <label  class="control-label col-md-3 col-sm-3 col-xs-12">Date Added *</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control pull-right" id="date_added" name="date_added" value="<?php echo $currentDate ?>">
                  </div>
                  <!-- /.input group -->
                </div>
                <div class="form-group">
                  <label  class="control-label col-md-3 col-sm-3 col-xs-12">Project Year *</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control pull-right" id="year" name="year" value="<?php echo $currentYear ?>">
                  </div>
                  <!-- /.input group -->
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Number *</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="project_no" value="" name="project_no" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title *</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="project_title" value="" name="project_title"  required="required" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Municipality *</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control" id="municipality" name ="municipality">
                      <option selected hidden disabled>Choose Municipality</option>
                      <?php foreach ($municipalities as $municipality): ?>
                        <option value="<?php echo $municipality['municipality_id'] ?>" class="municipality"><?php echo $municipality['municipality'] . ' - ' . $municipality['municipality_code'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Barangay *</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control" id="barangaySelection" name ="barangay">
                      <option selected disabled hidden>Choose Barangay</option>
            
                    </select>
                  </div> 
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Type of Project *</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control" id="type" name ="type">
                      <option selected disabled hidden>Choose Type of Project</option>
                      <?php foreach ($projTypes as $projType): ?>
                        <option value="<?php echo $projType['projtype_id'] ?>"><?php echo $projType['type'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Mode of Procurement *</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control" id="mode" name ="mode">
                      <option selected hidden disabled>Mode of Procurement</option>
                      <?php foreach ($modes as $mode): ?>
                        <option value="<?php echo $mode['mode_id'] ?>"><?php echo $mode['mode'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Approved Budget Cost(ABC) *</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="ABC" value="" name="ABC"  class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Source of Fund *</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control" id="source" name ="source">
                      <option selected hidden disabled>Choose Source of Fund</option>
                      <?php foreach ($sourceFunds as $sourceFund): ?>
                        <option value="<?php echo $sourceFund['fund_id'] ?>"><?php echo $sourceFund['source'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Account Classification *</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control" id="account" name ="account">
                      <option selected hidden disabled>Choose Account Classification</option>
                      <?php foreach ($accounts as $account): ?>
                        <option value="<?php echo $account['account_id'] ?>"><?php echo $account['classification'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
              </form>
            </div>
            <div class="box-footer text-center">
              <button href="#myModal" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- modal for data confirmation -->
    <div id="myModal" class="modal fade bs-example-modal-lg" role="dialog" >
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
                <tr >
                  <th style='text-align: center'>Attributes</th>
                  <th style='text-align: center'>Values</th>
                </tr> 
              </thead>
              <tbody>
                <tr><td>Date Added</td>
                  <td><span id="dAdd"></span></td>
                </tr>
                <tr><td>Project Tear</td>
                  <td><span id="y"></span></td>
                </tr>
                <tr><td>Project Number</td>
                  <td><span id="proj"></span></td>
                </tr>
                <tr><td>Project Title</td>
                  <td><span id="title"></span></td>
                </tr>
                <tr><td>Municipality</td>
                  <td><span id="mun"></span></td>
                </tr>
                <tr><td>Barangay</td>
                  <td><span id="bar"></span></td>
                </tr>
                <tr><td>Type of Project</td>
                  <td><span id="typ"></span></td>
                </tr>
                <tr><td>Mode of Procurement</td>
                  <td><span id="mod"></span></td>
                </tr>
                <tr><td>Approved Budget Cost(ABC)</td>
                  <td><span id="abc"></span></td>
                </tr>
                <tr><td>Source of Fund</td>
                  <td><span id="fun"></span></td>
                </tr>
                <tr><td>Account Classification</td>
                  <td><span id="accoun"></span></td>
                </tr>
              </tbody>
            </tfoot>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" name="submit" form="addPlanForm"class="btn btn-primary">Confirm</button>
        </div>
      </div>
    </div>
    <!-- end of modal -->
  </div>


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
    minViewMode: 2,
    format: 'yyyy'
  })
</script>
<script>
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
  })

  $(document).ready(function() {
    $('#myModal').on('show.bs.modal' , function (e) {
      $('#dAdd').html($('#date_added').val());
      $('#y').html($('#year').val());
      $('#proj').html($('#project_no').val());
      $('#title').html($('#project_title').val());
      $('#mun').html($('#municipality option:selected').html());
      $('#bar').html($('#barangaySelection option:selected').html());
      $('#typ').html($('#type option:selected').html());
      $('#mod').html($('#mode option:selected').html());
      $('#abc').html($('#ABC').val());
      $('#fun').html($('#source option:selected').html());
      $('#accoun').html($('#account option:selected').html());
      $('#statu').html($('#status').val());
      $('#remar').html($('#remarks').val());
   });
    
  });
</script>
<script>
  $(document).ready( 
    function () {
      $('#project_year').datepicker({
        autoclose: true,
        format: 'yyyy',
        startView: 'years',
        minViewMode: 'years',
        orientation: 'bottom auto'
      });

      $('#date_added').datepicker();
    } 
  );
</script>


