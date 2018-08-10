
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <h3 class="pull-left">Project Type Management</h3>
    </div>
  </div>
  <div class="box">
    <div class="box-header">
      <h2 class="box-title">Manage Project Types<small></small></h2>
      <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#addProjectTypeModal">Add New Project Type</button>
    </div>
    <div class="box-body">
      <table class="table table-striped table-bordered" id="projectTypeTable">
        <thead style='font-size:12px;'>
          <tr>
            <th style='text-align: center'>ID</th>
            <th style='text-align: center'>Project Type</th>
            <th style='text-align: center'>Status</th>
            <th style='text-align: center'>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($projectTypes as $projectType): ?>
            <tr id="<?php echo 'projectType' . $projectType['projtype_id'] ?>">
              <td class="text-center"><?php echo $projectType['projtype_id'] ?></td>
              <td class="text-center"><?php echo $projectType['type'] ?></td>
              <td class="text-center"><?php echo $projectType['status'] ?></td>
              <td class="text-center row">

               <div class="btn-group">
                  <form action="<?php echo base_url('admin/setCurrentProjectTypeID') ?>" method="post">
                    <button class="btn btn-success" name="type" type="submit" value="<?php echo $projectType['projtype_id'] ?>">
                      <i class="fa fa-edit">Edit</i>
                    </button>
                  </form>
                </div>

                <div class="btn-group">
                  <form action="<?php echo base_url('admin/deleteProjectType') ?>" method="POST" id="delete_project_form">
                    <input type="text" name="projtype_id" value="<?php echo $projectType['projtype_id']?>" hidden>
                      <button class="btn btn-danger" type="submit">Delete</button>                       
                  </form>
                </div>

                <div class="btn-group">
                  <?php if ($projectType['status']=='active'): ?>
                      <form action="<?php echo base_url('admin/deactivateProjectType') ?>" method="POST">
                        <input type="text" name="projtype_id" value="<?php echo $projectType['projtype_id'] ?>" hidden>
                      <button class="btn btn-default btn-block" name="delete" id="delete">Deactivate</button>
                    </form>                          
                  <?php endif ?>

                  <?php if ($projectType['status']=='inactive'): ?>
                      <form action="<?php echo base_url('admin/activateProjectType') ?>" method="POST">
                        <input type="text" name="projtype_id" value="<?php echo $projectType['projtype_id'] ?>" hidden>
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

<div class="modal fade" id="addProjectTypeModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Project Type</h4>
      </div>
      <div class="modal-body">
        <form id="addProjectForm" method="POST" class="form-horizontal form-label-left" action="<?php echo base_url('admin/addProjectType') ?>">
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Type of Project*</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" id="type" value="" name="type" class="form-control">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" form="addProjectForm">Submit</button>

      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

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

<div class="modal fade" id="addsuccess">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Project Type</h4>
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


<!-- Modal -->
<div class="modal fade" id="addfail" tabindex="-1" role="dialog" aria-labelledby="pow_adding_warning" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Project Type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p>Error adding type of project!</p>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="action_failed">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="text-center">Error Occured!</h4>
      </div>
      <div class="modal-body">
        <p class="text-center">The Data has already been used! Please deactivate or activate</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<script>

  var table = $('#projectTypeTable').DataTable({
  });

  $(document).on('submit', '#addProjectForm', function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: $('#addProjectForm').attr('action'),
      data: $('#addProjectForm').serialize(),
      dataType: 'json',
      success: function(response){
        if (response.success == true) {
          $('#addProjectTypeModal').modal('hide');
          $('#addsuccess').modal('show');
          $('.has-error').remove();
          $('.has-success').remove();
          $('.alert-success').delay(500).show(10, function() {
            $(this).delay(3000).hide(10, function() {
              $(this).remove();
            });
          });

          var rowNode = table.row.add([
            response.projectType['projtype_id'],
            response.projectType['type'],
            response.projectType['status'],
            '<p>Refresh To do More</p>'
          ]).draw().node();

          $(rowNode).css({
            'text-align': 'center',
            'background-color': '#c1f0c1'
          });

          $('#addProjectForm input').val('');
        }else if(response.success == 'failed'){
          $('#addfail').modal('show');
          $('.has-error').remove();
          $('.has-success').remove();
          $('.alert-failed').delay(500).show(10, function() {
            $(this).delay(3000).hide(10, function() {
              $(this).remove();
            });
          });
          $('#addProjectForm input').val('');
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

  $(document).on('submit', '#delete_project_form', function(e){
    e.preventDefault();

    var form_name = $(this).attr('id');
    console.log(form_name);
    var projtype_id =  $(this).find("input[name='projtype_id']").val();
    console.log(projtype_id);
    var row_id = 'projectType' + projtype_id;

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
