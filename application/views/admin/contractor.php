
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
                    <div class="col-lg-6 col-md-6 col-sm-6">
                    <form method="POST" action="<?php echo base_url('admin/setCurrentContractorID') ?>">
                      <button class="btn btn-success" name="contractor_id" value="<?php echo $contractor['contractor_id'] ?>" type="submit">
                        <i class="fa fa-edit">Edit</i>
                      </button>
                    </form>
                    </div>

                     <div class="col-lg-6 col-md-6 col-sm-6">
                      <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                          <li class="dropdown tasks-menu">
                            <button class="dropdown-toggle btn btn-danger" data-toggle="dropdown">
                              <i class="fa fa-eye"></i> Status
                            </button>
                            <ul class="dropdown-menu">
                              <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                  <li><!-- Task item -->
                                    <form action="<?php echo base_url('admin/deleteContractor') ?>" method="POST">
                                      <input type="text" name="contractor_id" value="<?php echo $contractor['contractor_id']?>" hidden>
                                      <button class="btn btn-default btn-block" type="submit">Delete</button>
                                    </form>
                                  </li>

                                  <?php if ($contractor['status']=='active'): ?>
                                    <li><!-- Task item -->
                                      <form action="<?php echo base_url('admin/deactivateContractor') ?>" method="POST">
                                        <input type="text" name="contractor_id" value="
                                        <?php echo $contractor['contractor_id'] ?>" hidden>
                                        <button class="btn btn-default btn-block" name="delete" id="delete">Deactivate</button>
                                      </form>
                                    </li>                                  
                                  <?php endif ?>

                                  <?php if ($contractor['status']=='inactive'): ?>
                                    <li>
                                      <form action="<?php echo base_url('admin/activateContractor') ?>" method="POST">
                                        <input type="text" name="contractor_id" value="
                                        <?php echo $contractor['contractor_id'] ?>" hidden>
                                        <button class="btn btn-default btn-block" name="delete" id="delete">Activate</button>
                                      </form>
                                    </li>

                                  <?php endif ?>                               
                                </ul>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </div>
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
<script>
  $(document).ready(function() {
    $('#myModal').on('show.bs.modal' , function (e) {
      $('#usernam').html($('#businessname').val());
      $('#passwor').html($('#owner').val());
      $('#usertyp').html($('#address').val());
      $('#contact').html($('#contactnumber').val());
    });
  });
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
        <form id="addContractorForm" method="POST" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url('admin/addNewContractor') ?>">

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
            <tr><td>Business Name</td>
              <td><span id="usernam"></span></td>
            </tr>
            <tr><td>Owner</td>
              <td><span id="passwor"></span></td>
            </tr>
            <tr><td>Address</td>
              <td><span id="usertyp"></span></td>
            </tr>
            <tr><td>Contact Number</td>
              <td><span id="contact"></span></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="submit" form="addContractorForm" name="submit" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>
<!-- end of modal -->