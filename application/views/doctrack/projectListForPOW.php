
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <h3 class="pull-left">Program Of Work Adding Page</h3>
    </div>
  </div>
  <div class="box">
    <div class="box-header">
      <h2 class="box-title"><i class="fa fa-list"></i> Project Plan Records</h2>
      <small>(Listed Here are Those Projects without a POW.)</small>
    </div>
    <div class="box-body">
      <table class="table table-striped table-bordered" id="documentTable">
        <thead style='font-size:12px;'>
          <tr>
            <th class="text-center">Project title</th>
            <th class="text-center">Location</th>
            <th class="text-center">ABC</th>
            <th class="text-center">Source of Fund</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($plans as $plan): ?>
            <tr id="<?php echo 'projectPOW' . $plan['plan_id'] ?>">
              <td><?php echo $plan['project_title'] ?></td>
              <td><?php echo $plan['barangay'] . ', ' .$plan['municipality'] ?></td>
              <td><?php echo $plan['abc'] ?></td>
              <td><?php echo $plan['source'] ?></td>
              <td class="text-center">
                <form action="">
                  <input type="text" name="plan_id" value="<?php echo $plan['plan_id'] ?>" hidden>
                </form>
                <button class="btn btn-primary addProjectPOWBtn" value="<?php echo $plan['plan_id'] ?>">Add POW</button>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
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
<!-- <script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script> -->


<div class="modal fade" tabindex="-1" role="dialog" id="addPOWConfirmationModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="padding: 0 0 0 0;">
        <div style="background-color:#D76969; text-align: center; padding: 7px 10px;">
          <h5>Confirm Adding of POW</h5>
        </div>
      </div>
      <div class="modal-body">
        <div style="background-color:#D76969; text-align: center; padding: 7px 10px; margin-bottom: 5px; ">
          <h6>Project Plan Details</h6>
        </div>
        <div class="form-horizontal well">
          <div class="form-group">
            <label class="control-label col-lg-3 col-md-3 col-sm-3">Date Added: </label>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <p class="form-control" id="date_added"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-3 col-md-3 col-sm-3">Project Year: </label>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <p class="form-control" id="project_year"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-3 col-md-3 col-sm-3">Project Number: </label>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <p class="form-control" id="project_number"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-3 col-md-3 col-sm-3">Project Title</label>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <p class="form-control" id="project_title"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-3 col-md-3 col-sm-3">Location: </label>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <p class="form-control" id="location"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-3 col-md-3 col-sm-3">Type of Project: </label>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <p class="form-control" id="type_project"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-3 col-md-3 col-sm-3">Mode of Procurement: </label>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <p class="form-control" id="mode_procurement"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-3 col-md-3 col-sm-3">Approved Budget Cost: </label>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <p class="form-control" id="approved_budget_cost"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-3 col-md-3 col-sm-3">Source of Fund: </label>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <p class="form-control" id="source_fund"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-3 col-md-3 col-sm-3">Account Classification: </label>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <p class="form-control" id="account_classicifation"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-3 col-md-3 col-sm-3">Project Type: </label>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <p class="form-control" id="project_type"></p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">      
        <form action="<?php echo base_url('capitol/updatePOWAvailability') ?>" method="POST" id="addPOWForm" >
          <input type="text" name="plan_id" id="plan_id" hidden>
          <button class="btn btn-primary" type="submit">Confirm</button>
          <button class="btn btn-default" data-dismiss="modal" type="button" >Cancel</button>  
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="pow_adding_success">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Success Modal</h4>
      </div>
      <div class="modal-body text-center">
        <p>Successfully added project POW!</p>
        <p>Proceed to adding documents!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>


<!-- Modal -->
<div class="modal fade" id="pow_adding_warning" tabindex="-1" role="dialog" aria-labelledby="pow_adding_warning" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p>Error updating POW availability!</p>
        <p>Try again later!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready( 
    function () {
      $('#documentTable').DataTable();
    } 
  );

  $('.addProjectPOWBtn').click(function(){

    var plan_id = $(this).val();

    $('#plan_id').val(plan_id);

    $.ajax({
      type: 'POST',
      url: '<?php echo base_url("doctrack/getProjectPlanDetails") ?>',
      data: {plan_id: plan_id},
      dataType: 'json',
      success: function(response){
        $('#date_added').html(response.plan_details['date_added']);
        $('#project_year').html(response.plan_details['project_year']);
        $('#project_number').html(response.plan_details['project_no']);
        $('#project_title').html(response.plan_details['project_title']);
        $('#location').html(response.plan_details['municipality'] + ' - ' + response.plan_details['barangay']);
        $('#type_project').html(response.plan_details['type']);
        $('#mode_procurement').html(response.plan_details['mode']);
        $('#approved_budget_cost').html(response.plan_details['abc']);
        $('#source_fund').html(response.plan_details['source']);
        $('#account_classicifation').html(response.plan_details['classification']);
        $('#project_type').html(response.plan_details['project_type']);
      }
    });

    $('#addPOWConfirmationModal').modal('show');
  })

  $('#addPOWForm').submit(function(e){
    e.preventDefault();
    var plan_id = $('#plan_id').val();
    var row_name = '#projectPOW' + plan_id;
    $.ajax({
      type: 'POST',
      url: $(this).attr('action'),
      data: $('#addPOWForm').serialize(),
      dataType: 'json',
      success: function(response){

        $('#addPOWConfirmationModal').modal('hide');

        if (response.success == true) {
          $('#pow_adding_success').modal('show');
          $(row_name).remove();
        }else{
          $('#pow_adding_warning').modal('show');
        }
      }
    });
  })

  </script>




