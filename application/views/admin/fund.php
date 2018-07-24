
<section class="content-header">
  <h2>Manage Funds</h2>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="box">
        <div class="box-header">
          <h2 class="box-title">Funds Records<small></small></h2>
          <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#addFundModal">Add New Fund</button>
        </div>
        <div class="box-body">
          <table class="table table-bordered table-striped" id="fundTable">
            <thead>
              <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Type of Fund</th>
                <th class="text-center">Source of Fund</th>
                <th class="text-center">Status</th>
                <th class="text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($funds as $fund): ?>
                <tr>
                  <td class="text-center"><?php echo $fund['fund_id'] ?></td>
                  <td class="text-center"><?php echo $fund['fund_type'] ?></td>
                  <td class="text-center"><?php echo $fund['source'] ?></td>
                  <td class="text-center"><?php echo $fund['status'] ?></td>
                  <td class="text-center row">
                    <div class="btn-group">
                      <form method="POST" action="<?php echo base_url('admin/setCurrentFundID') ?>">
                        <button class="btn btn-success" name="source" value="<?php echo $fund['fund_id'] ?>" type="submit">
                          <i class="fa fa-edit"></i>Edit
                        </button>
                      </form>
                    </div>

                    <div class="btn-group">
                      <form action="<?php echo base_url('admin/deleteFund') ?>" method="POST">
                        <input type="text" name="fund_id" value="<?php echo $fund['fund_id']?>" hidden>
                          <button class="btn btn-danger" type="submit">Delete</button>                       
                      </form>
                    </div>

                    <div class="btn-group">
                      <?php if ($fund['status']=='active'): ?>
                        <form action="<?php echo base_url('admin/deactivateFund') ?>" method="POST">
                          <input type="text" name="fund_id" value="<?php echo $fund['fund_id'] ?>" hidden>
                          <button class="btn btn-default btn-block" name="delete" id="delete">Deactivate</button>
                        </form>                          
                      <?php endif ?>

                      <?php if ($fund['status']=='inactive'): ?>
                        <form action="<?php echo base_url('admin/activateFund') ?>" method="POST">
                          <input type="text" name="fund_id" value="<?php echo $fund['fund_id'] ?>" hidden>
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
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>public/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>public/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>public/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


<script>
  $(document).ready( 
    function () {
      $('#fundTable').DataTable();
    } 
  );
</script>
<script>
  $(document).ready(function() {
    $('#myModal').on('show.bs.modal' , function (e) {
      $('#usernam').html($('#source').val());
      $('#wewetype').html($('#fundtype').val());
    });
  });
</script>

<div class="modal fade" id="addFundModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add New Fund</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-success text-center" id="adding_success" hidden>
          <p class="text-left"><b>SUCCESS!</b></p>
          <p>Type of Fund has been Sucessfully Added!</p>
        </div>
        <div class="alert alert-warning text-center" id="
        adding_failed" hidden><p class="text-left"><b>FAILED!</b></p><p>An error was encountered. The Type of Fund was not Recorded!</p> 
        </div>
        <form id="addFundsForm" method="POST" class="form-horizontal form-label-left" action="<?php echo base_url('admin/addFunds') ?>" autocomplete="off">
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Source of Fund:</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" id="source" name="source" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Type of Fund:</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <select class="form-control" id="fund_type" name="fund_type">
                <option hidden disabled selected>Select Type</option>
                <option value="regular">Regular</option>
                <option value="supplemental">Supplemental</option>
              </select>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" form="addFundsForm">Submit</button> 
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<script>
  $('#addFundsForm').submit(function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: $('#addFundsForm').attr('action'),
      data: $('#addFundsForm').serialize(),
      dataType: 'json',
      success: function(response){
        if (response.success == true) {
          $('.has-error').remove();
          $('.has-success').remove();
          $('#alert-success').prop('hidden', false);
          $('.alert-success').delay(500).show(10, function() {
          $(this).delay(3000).hide(10, function() {
            $(this).remove();
          });
          })
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
      }
    });
  })
</script>

