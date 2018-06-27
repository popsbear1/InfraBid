<section class="content-header">
  
</section>
<section class="content">
  <div class="row">
    <div class="form-group no-print">
      <div class="col-md-3 col-sm-6 col-xs-6 col-md-offset-10">
        <a href="<?php echo base_url('admin/addUsersView') ?>" type="button" class="btn btn-primary">Add New User</a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="box">
        <div class="box-header">
          <h2 class="box-title">Manage Users<small></small></h2>
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
                <th style='text-align: center'>Edit</th>
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

                  <td class="text-center">
                    <form method="post" action="<?php echo base_url('admin/setUsersID') ?>">
                      <button name="userID" type="submit" value="<?php echo $user['user_id'] ?>" class = "btn btn-success">
                        <i class = "fa fa-edit"></i>
                      </button>
                    </form>
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
      $('#userTable').DataTable();
    } 
  );
</script>
