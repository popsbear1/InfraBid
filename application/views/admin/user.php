<section class="content-header">
  <h2>Manage Users</h2>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="box">
        <div class="box-header">
          <h2 class="box-title">User Record<small></small></h2>
          <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#addNewUserModal">Add New User</button>
        </div>
        <div class="box-body">
          <table class='table table-striped table-bordered' style='font-size:13px;' id="userTable">
            <thead>
              <tr>
                <th style='text-align: center'>Username</th>
                <th style='text-align: center'>User ID</th> 
                <th style='text-align: center'>First Name</th>
                <th style='text-align: center'>Middle Name</th>
                <th style='text-align: center'>Last Name </th>
                <th style='text-align: center'>User Type</th>
                <th style='text-align: center'>Status</th>
                <th style='text-align: center'>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users as $user): ?>
                <tr>
                  <td><?php echo $user['username']  ?></td>
                  <td><?php echo $user['user_id'] ?></td>
                  <td><?php echo $user['first_name'] ?></td>
                  <td><?php echo $user['middle_name'] ?> </td>
                  <td><?php echo $user['last_name'] ?></td>
                  <td><?php echo $user['user_type'] ?></td>
                  <td><?php echo $user['status'] ?></td>
                  <td class="text-center">
                    <div class="btn-group">
                      <form method="post" action="<?php echo base_url('admin/setUsersID') ?>">
                        <button name="userID" type="submit" value="<?php echo $user['user_id'] ?>" class = "btn btn-success">
                          <i class = "fa fa-edit"></i>Edit
                        </button>
                    </div>

                    <div class="btn-group">
                      <form action="<?php echo base_url('admin/deleteUsers') ?>" method="POST">
                        <input type="text" name="user_id" value="<?php echo $user['user_id']?>" hidden>
                          <button class="btn btn-danger" type="submit">Delete</button>                       
                      </form>
                    </div>

                    <div class="btn-group">
                      <?php if ($user['status']=='active'): ?>
                          <form action="<?php echo base_url('admin/deactivateUsers') ?>" method="POST">
                            <input type="text" name="user_id" value="<?php echo $user['user_id'] ?>" hidden>
                          <button class="btn btn-default btn-block" name="delete" id="delete">Deactivate</button>
                        </form>                          
                      <?php endif ?>

                    <?php if ($user['status']=='inactive'): ?>
                        <form action="<?php echo base_url('admin/activateUsers') ?>" method="POST">
                          <input type="text" name="user_id" value="<?php echo $user['user_id'] ?>" hidden>
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
      $('#userTable').DataTable();
    } 
  );
</script>

<script>
  $(document).ready(function() {
    $('#myModal').on('show.bs.modal' , function (e) {
     $('#firstN').html($('#firstname').val());
     $('#middleN').html($('#middlename').val());
     $('#lastN').html($('#lastname').val());
     $('#userT').html($('#usertype').val());
   });
    
  });
</script>

<div class="modal fade" id="addNewUserModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add New User</h4>
      </div>
      <div class="modal-body">

        <div class="alert alert-sucess text-center" id="adding_success" hidden>
          <p class="text-left"><b>SUCESS!</b></p>
          <p>User has been Added Sucessfully!</p>
        </div>

        <div class="alert alert-warning text-center" id="adding_failed" hidden>
          <p class="text-left"><b>FAILED!</b></p>
          <p>An error was encountered.User has not been added!</p>
        </div>

        <form id="addNewUserForm" action="<?php echo base_url('admin/addUsers') ?>" method="POST" class="form-horizontal form-label-left">
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">First Name*</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" id="firstname" name="firstname"  class="form-control">
            </div>  
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" id="middlename" name="middlename"  class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Last Name*</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" id="lastname" name="lastname"  class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">User Type*</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <select class="select2_single form-control" id="usertype" name="usertype" tabindex="-1">
                <option selected hidden disabled>Choose User Type</option>
                <option value="BAC_SEC">Bac SEC</option>
                <option value="BAC_TWG">Bac TWG</option>
                <option value="PEO">PEO</option>
                <option value="PGO">PGO</option>
              </select>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" form="addNewUserForm">Submit</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- confirm input modal -->
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
            <tr><td>First Name</td>
              <td><span id="firstN"></span></td>
            </tr>
            <tr><td>Middle Name</td>
              <td><span id="middleN"></span></td>
            </tr>
            <tr><td>Last Name</td>
              <td><span id="lastN"></span></td>
            </tr>
            <tr><td>User Type</td>
              <td><span id="userT"></span></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button form="addNewUserForm" type="submit" name="submit" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>

<!-- end confirm modal -->
<script>
  $('#addNewUserForm').submit(function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: $('#addNewUserForm').attr('action'),
      data: $('#addNewUserForm').serialize(),
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