
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <h3 class="pull-left">Manage Procurement Mode</h3>
    </div>
  </div>
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
            <tr id="<?php echo 'mode' . $mode['mode_id'] ?>">
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
                  <form action="<?php echo base_url('admin/deleteMode') ?>" method="POST" id="delete_mode_form">
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

<div class="modal fade" id="addProcurementModeModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Manage Procurement Mode</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-success text-center" id="adding_success" hidden>
          <p class="text-left"><b>SUCCESS!</b></p>
          <p>The Procurement has been added!</p>
        </div>
        <div class="alert alert-warning text-center" id="adding_failed" hidden>
          <p class="text-left"><b>FAILED!</b></p>
          <p>An error was encountered. The Operation has been failed!</p>  
        </div>


        <form id="addProcurementForm" method="POST" class="form-horizontal form-label-left" action="<?php echo base_url('admin/addProcurement') ?>">
          <div class="form-group">
            <label class="control-label col-md-5 col-sm-5 col-xs-12">Name of Procurement Mode*</label>
            <div class="col-md-7 col-sm-7 col-xs-12">
              <input type="text" id="mode" name="mode" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" form="addProcurementForm">Submit</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- end of modal -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="action_success">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="text-center">Success!</h4>
      </div>
      <div class="modal-body">
        <p class="text-center">The Data has been Removed Successfully!</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="action_failed">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="text-center">Failed!</h4>
      </div>
      <div class="modal-body">
        <p class="text-center">Error Occured!</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="addsuccess">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">SUCCESS!!</h4>
      </div>
      <div class="modal-body text-center">
        <p>Successfully added Project Type!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="addfail">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">ERROR!!</h4>
      </div>
      <div class="modal-body text-center">
        <p>Erro Adding Project Type!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>




<script>

  var table = $('#modeTable').DataTable();

  $(document).on('submit', '#addProcurementForm', function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: $('#addProcurementForm').attr('action'),
      data: $('#addProcurementForm').serialize(),
      dataType: 'json',
      success: function(response){
        if (response.success == true) {
          $('#addProcurementModeModal').modal('hide');
          $('#addsuccess').modal('show');
          $('.has-error').remove();
          $('.has-success').remove();

          var rowNode = table.row.add([
            response.mode['mode_id'],
            response.mode['mode'],
            response.mode['status'],
            '<p>Refresh To do More</p>'
          ]).draw().node();

          $(rowNode).css({
            'text-align': 'center',
            'background-color': '#c1f0c1'
          });

          $('#addProcurementForm input').val('');
        }else if(response.success == 'failed'){
          $('#addProcurementModeModal').modal('hide');
          $('#addfail').modal('show');
          $('.has-error').remove();
          $('.has-success').remove();
          $('#addProcurementForm input').val('');
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
  });

  $(document).on('submit', '#delete_mode_form', function(e){
    e.preventDefault();

    var form_name = $(this).attr('id');
    console.log(form_name);
    var mode_id =  $(this).find("input[name='mode_id']").val();
    console.log(mode_id);
    var row_id = 'mode' + mode_id;

    $.ajax({
      type: 'POST',
      url: $(this).attr('action'),
      data: $(this).serialize(),
      dataType: 'json',
      success: function(response){
        if (response.success == true) {
          $('#' + row_id).remove();
          $('#action_success').modal('show');
        }else{
          $('#action_failed').modal('show');
        }
      }
    });
  });
</script>
