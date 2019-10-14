<?php if ($_SESSION['user_type'] !== 'BAC_SEC'){
  header('Location: ..\index.php');
} ?>
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <h3 class="pull-left">Edit User Details</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <a href="<?php echo base_url('admin/manageUsers') ?>" class="btn btn-success">
        <i class="fa fa-arrow-left"></i>
        Back
      </a>
    </div>
  </div>
  <div class="box">
    <div class="box-header">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="box-title">User Details</h2>
        </div>
      </div>
    </div>
    <div class="box-body">

      <?php if (isset($_SESSION['success'])): ?>
        <div class="alert alert-success text-center">
          <p><?php echo $_SESSION['success'] ?></p>
        </div>
      <?php endif ?>
      <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-warning text-center">
          <p><?php echo $_SESSION['error'] ?></p>
        </div>
      <?php endif ?>

      <form id="editUsersForm" method="POST" action="<?php echo base_url('admin/editUsers') ?>" data-parsley-validate class="form-horizontal form-label-left">

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" step="any"  id="firstname" placeholder="<?php echo $userDetails['first_name']; ?>" name="firstname" class="form-control col-md-7 col-xs-12">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="middle-name">Middle Name</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" step="any"  id="middlename" placeholder="<?php echo $userDetails['middle_name']; ?>" name="middlename" class="form-control col-md-7 col-xs-12">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" step="any"  id="lastname" placeholder="<?php echo $userDetails['last_name']; ?>" name="lastname" class="form-control col-md-7 col-xs-12">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">User Type <span class="required">*</span></label>
          <div class="col-md-6 col-sm-9 col-xs-12">
            <select class="select2_single form-control" step="any"  id="usertype" name="usertype" tabindex="-1">
              <option selected hidden disabled><?php echo $userDetails['user_type'] ?></option>
              <option value="BAC_SEC">BAC_SEC</option>
              <option value="BAC_TWG">BAC_TWG</option>
              <option value="PEO">PEO</option>
              <option value="PGO">PGO</option>
              <option value="PPDO">PPDO</option>
              <option value="GUEST">GUEST</option>
            </select>
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" step="any"  id="username" placeholder="<?php echo $userDetails['username']; ?>" name="username" class="form-control col-md-7 col-xs-12">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Password</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" step="any"  id="password" placeholder="<?php echo $userDetails['password']; ?>" name="password" class="form-control col-md-7 col-xs-12">
          </div>
        </div>

      </form> 
    </div>
    <div class="box-footer text-center">
      <button href="#myModal" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Submit</button>
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
      $(document).ready(function() {
        $('#myModal').on('show.bs.modal' , function (e) {
         $('#firstN').html($('#firstname').val());
         $('#middleN').html($('#middlename').val());
         $('#lastN').html($('#lastname').val());
         $('#userT').html($('#usertype').val());
         $('#user_name').html($('#username').val());
         $('#user_pass').html($('#password').val());
       });

      });
    </script>


    <div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="myModal">Confirm Input Values</h4>
          </div>
          <div class="modal-body">
            <table class='table table-striped table-bordered' style='font-size:13px;'>
              <thead>
                <tr>
                  <th style='text-align: center'>Attributes</th>
                  <th style='text-align: center'>Values</th>
                </tr> 
              </thead>
              <tbody>
                <tr>
                  <td>First Name</td>
                  <td><span id="firstN"></span></td>
                </tr>
                <tr>
                  <td>Middle Name</td>
                  <td><span id="middleN"></span></td>
                </tr>
                <tr>
                  <td>Last Name </td>
                  <td><span id= "lastN"></span></td>
                <tr>
                  <td>User Type</td>
                  <td><span id="userT"></span></td>
                </tr>
                <tr>
                  <td>Username</td>
                  <td><span id="user_name"></span></td>
                </tr>
                <tr>
                  <td>Password</td>
                  <td><span id="user_pass"></span></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" form="editUsersForm" name="submit" class="btn btn-primary" id="editUsersForm">Confirm</button>
          </div>
        </div>
      </div>
    </div>