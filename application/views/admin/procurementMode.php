<section class="content-header">
  <h2>Manage Procurement Mode</h2>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="box">
        <div class="box-header">
          <h2 class="box-title">Procurement Mode Record<small></small></h2>
          <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#addProcurementModeModal">Add Procurement Mode</button>
        </div>
        <div class="box-body">
          <table class="table table-striped table-bordered" id="modeTable">
            <thead style='font-size:12px;'>
              <tr>
                <th style='text-align: center'>ID</th>
                <th style='text-align: center'>Project Type</tph>
                <th style='text-align: center;'>Status</th>
                <th style='text-align: center'>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($modes as $mode): ?>
                <tr>
                  <td class="text-center"><?php echo $mode['mode_id']?></td>
                  <td class="text-center"><?php echo $mode['mode']?></td>
                  <td class="text-center"><?php echo $mode['status']?></td>
                    <td class="text-center row">
                    <div class="btn-group">
                    <form action="<?php echo base_url('admin/setProcurementMode') ?>" method="post">
                      <input type="text" name="mode" value="<?php echo $mode['mode_id'] ?>" hidden>
                      <button class="btn btn-success" type="submit">
                        <i class="fa fa-edit"></i>Edit
                      </button>
                    </form>
                  </div>

                    <div class="btn-group">
                      <form action="<?php echo base_url('admin/deleteMode') ?>" method="POST">
                        <input type="text" name="mode_id" value="<?php echo $mode['mode_id']?>" hidden>
                          <button class="btn btn-danger" type="submit">Delete</button>                       
                      </form>
                    </div>

                    <div class="btn-group">
                      <?php if ($mode['status']=='active'): ?>
                          <form action="<?php echo base_url('admin/deactivateMode') ?>" method="POST">
                            <input type="text" name="mode_id" value="<?php echo $mode['mode_id'] ?>" hidden>
                          <button class="btn btn-default btn-block" name="delete" id="delete">Deactivate</button>
                        </form>                          
                      <?php endif ?>

                      <?php if ($mode['status']=='inactive'): ?>
                          <form action="<?php echo base_url('admin/activateMode') ?>" method="POST">
                            <input type="text" name="mode_id" value="<?php echo $mode['mode_id'] ?>" hidden>
                          <button class="btn btn-default btn-block" name="delete" id="delete">Activate</button>
                        </form>                          
                      <?php endif ?>
                    </div> 
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

<script>
  $(document).ready( 
    function () {
      $('#modeTable').DataTable();
    } 
  );
</script>

<script>
  $(document).ready(function() {
    $('#myModal').on('show.bs.modal' , function (e) {
      $('#procurement').html($('#addProcurement').val());
    });
  });
</script>

<div class="modal fade" id="addProcurementModeModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Default Modal</h4>
      </div>
      <div class="modal-body">
        <form id="addProcurementForm" method="POST" class="form-horizontal form-label-left" action="<?php echo base_url('admin/addProcurement') ?>">
          <div class="form-group">
            <label class="control-label col-md-5 col-sm-5 col-xs-12">Name of Procurement Mode*</label>
            <div class="col-md-7 col-sm-7 col-xs-12">
              <input type="text" id="addProcurement" name="mode" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button href="#myModal" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Submit</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- modal for data confirmation -->
<div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
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
            <tr><td>Procurement Mode</td>
              <td><span id="procurement"></span></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="submit" form="addProcurementForm" name="submit" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>
<!-- end of modal -->