
<section class="content-header">

</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h2 class="box-title">Documents</h2>
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
                <tr>
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
        <button class="btn btn-secondary pull-left" data-dismiss="modal" >Cancel</button>
        <form action="<?php echo base_url('doctrack/updatePOWAvailability') ?>" method="POST" >
          <input type="text" name="plan_id" id="plan_id" hidden>
          <button class="btn btn-primary" type="submit">Confirm</button>  
        </form>
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

  // $(document).ready(function(){
  //   $('#documentDetailsViewModal').modal('show');

  //   $('#forwardingLogTable').DataTable().destroy();
  //   $('#receivingLogTable').DataTable().destroy();

  //   var forwarded_document_details = $(this).val();

  //   $.ajax({
  //     type: 'POST',
  //     url: '<?php echo base_url("doctrack/getProjectDocumentHistory") ?>',
  //     data: { plan_id: forwarded_document_details},
  //     dataType: 'json',
  //     success: function(response){

  //       $('#forwardingLogTable').DataTable( {
  //           data: response.forwarding_logs,
  //           columns: [
  //               { data: 'user_type' },
  //               { data: 'user_name' },
  //               { data: 'log_date' },
  //               { data: 'remark' }
  //           ],
  //           'paging'      : false,
  //           'lengthChange': false,
  //           'searching'   : false,
  //           'ordering'    : true,
  //           'info'        : false,
  //           'autoWidth'   : false
  //       } );

  //       $('#receivingLogTable').DataTable( {
  //           data: response.receiving_logs,
  //           columns: [
  //               { data: 'user_type' },
  //               { data: 'user_name' },
  //               { data: 'log_date' },
  //               { data: 'remark' }
  //           ],
  //           'paging'      : false,
  //           'lengthChange': false,
  //           'searching'   : false,
  //           'ordering'    : true,
  //           'info'        : false,
  //           'autoWidth'   : false
  //       } );
  //     }
  //   });

  // });
  </script>




