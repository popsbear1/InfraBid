
<section class="content-header">
  <h2>Manage Contractors</h2>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="box">
        <div class="box-header">
          <h2 class="box-title">Contractor Records<small></small></h2>
          <button class="btn btn-primary pull-right" type="button" data-target="#addContractorModal" data-toggle="modal">Add New Contractor</button>
        </div>
        <div class="box-body">
          <table class="table table-striped table-bordered" id="contructorTable">
            <thead style='font-size:12px;'>
              <tr>
                <th class="text-center">Business Name</th>
                <th class="text-center">Owner/Manager</th>
                <th class="text-center">Address</th>
                <th class="text-center">Contact Number</th>
                <th class="text-center">Status</th>
                <th class="text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($contractors as $contractor): ?>
                <tr>
                  <td class="text-center" ><?php echo $contractor['businessname'] ?></td>
                  <td class="text-center"><?php echo $contractor['owner'] ?></td>
                  <td class="text-center"><?php echo $contractor['address'] ?></td>
                  <td class="text-center"><?php echo $contractor['contactnumber'] ?></td>
                  <td class="text-center"><?php echo $contractor['status'] ?></td>
                  <td class="text-center row">

                  <div class="btn-group">
                    <form method="POST" action="<?php echo base_url('admin/setCurrentContractorID') ?>">
                      <button class="btn btn-success" name="contractor_id" value="<?php echo $contractor['contractor_id'] ?>" type="submit">
                        <i class="fa fa-edit">Edit</i>
                      </button>
                    </form>
                  </div>

                    <div class="btn-group">
                      <form action="<?php echo base_url('admin/deleteContractor') ?>" method="POST">
                        <input type="text" name="contractor_id" value="<?php echo $contractor['contractor_id']?>" hidden>
                          <button class="btn btn-danger" type="submit">Delete</button>                     
                      </form>
                    </div>

                      <div class="btn-group">
                        <?php if ($contractor['status']=='active'): ?>
                          <form action="<?php echo base_url('admin/deactivateContractor') ?>" method="POST">
                            <input type="text" name="contractor_id" value="
                            <?php echo $contractor['contractor_id'] ?>" hidden>
                            <button class="btn btn-default btn-block" name="delete" id="delete">Deactivate</button>
                          </form>                          
                        <?php endif ?>

                        <?php if ($contractor['status']=='inactive'): ?>
                          <form action="<?php echo base_url('admin/activateContractor') ?>" method="POST">
                            <input type="text" name="contractor_id" value="
                            <?php echo $contractor['contractor_id'] ?>" hidden>
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
      $('#contructorTable').DataTable();
    } 
  );
</script>

<div class="modal fade" id="addContractorModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add New Contractor</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-success text-center" id="adding_success" hidden>
          <p class="text-left"><b>SUCCESS!</b></p>
          <p>The new contractor was successfuly added and recorded!</p>
        </div>
        <div class="alert alert-warning text-center" id="adding_failed" hidden>
          <p class="text-left"><b>FAILED!</b></p>
          <p>An error was encountered. The new contractor was not recorded!</p>
        </div>
        <form id="addContractorForm" method="POST" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url('admin/addNewContractor') ?>" autocomplete="off">

          <div class="form-group">
            <label class="control-label col-lg-3 col-md-3 col-sm-3 col-xs-12">Business Name*
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" id="businessname" name="businessname" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Owner/Manager*
            </label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" id="owner" name="owner" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Address*</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" id="address" name="address"  class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Contact Number*</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" id="contactnumber" name="contactnumber"  class="form-control">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" form="addContractorForm">Submit</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<script>
  $('#addContractorForm').submit(function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: $('#addContractorForm').attr('action'),
      data: $('#addContractorForm').serialize(),
      dataType: 'json',
      success: function(response){
        if (response.success == true) {
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