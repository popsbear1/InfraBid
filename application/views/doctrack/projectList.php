
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <h3 class="pull-left">Project Document Adding Page</h3>
    </div>
  </div>
  <div class="box">
    <div class="box-header">
      <h2 class="box-title"><i class="fa fa-list"></i> Project Plan Records</h2>
      <small>(Listed Here are Those Projects which POW and can is currently being processed.)</small>
    </div>
    <div class="box-body">
      <table class="table table-striped table-bordered" id="documentTable">
        <thead style='font-size:12px;'>
          <tr>
            <th class="text-center">Project title</th>
            <th class="text-center">Location</th>
            <th class="text-center">ABC</th>
            <th class="text-center">Source of Fund</th>
            <th class="text-center">Date POW Added</th>
            <th class="text-center">Contractor</th>
            <th class="text-center">Status</th>
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
              <td><?php echo $plan['date_pow_added'] ?></td>
              <td><?php echo $plan['owner'] ?></td>
              <td><?php echo $plan['projectstatus'] ?></td>
              <td class="text-center">
                <form action="<?php if($this->session->userdata('user_type') == 'BAC_SEC'){ echo base_url('doctrack/setCurrentPlanID'); }else{ echo base_url('capitol/setCurrentPlanID'); } ?>" method="POST">
                  <input type="text" name="plan_id" value="<?php echo $plan['plan_id'] ?>" hidden>
                  <button class="btn btn-success" type="submit">
                    <i class="fa fa-edit">Add Document</i>
                  </button>
                </form>
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

<script>
  $(document).ready( 
    function () {
      $('#documentTable').DataTable();
    } 
  );

  $(document).ready(function(){
    $('#documentDetailsViewModal').modal('show');

    $('#forwardingLogTable').DataTable().destroy();
    $('#receivingLogTable').DataTable().destroy();

    var forwarded_document_details = $(this).val();

    $.ajax({
      type: 'POST',
      url: '<?php echo base_url("doctrack/getProjectDocumentHistory") ?>',
      data: { plan_id: forwarded_document_details},
      dataType: 'json',
      success: function(response){

        $('#forwardingLogTable').DataTable( {
            data: response.forwarding_logs,
            columns: [
                { data: 'user_type' },
                { data: 'user_name' },
                { data: 'log_date' },
                { data: 'remark' }
            ],
            'paging'      : false,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : false,
            'autoWidth'   : false
        } );

        $('#receivingLogTable').DataTable( {
            data: response.receiving_logs,
            columns: [
                { data: 'user_type' },
                { data: 'user_name' },
                { data: 'log_date' },
                { data: 'remark' }
            ],
            'paging'      : false,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : false,
            'autoWidth'   : false
        } );
      }
    });

  });
  </script>
