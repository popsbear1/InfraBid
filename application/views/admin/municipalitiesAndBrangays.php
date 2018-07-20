<section class="content-header">
  <h2>Manage Municipalities</h2>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="box">
        <div class="box-header">
          <h2 class="box-title">Manage Municipalities and Barangays<small></small></h2>
          <a href="<?php echo base_url('admin/addMunicipalityView') ?>" type="button" class="btn btn-primary pull-right">Add New Municipality</a>
        </div>
        <div class="box-body">
          <table class="table table-striped table-bordered" id="municipalityTable">
            <thead style='font-size:12px;'>
              <tr>
                <th class="text-center">Code</th>
                <th class="text-center">Name</th>
                <th class="text-center">Status</th>
                <th class="text-center">Edit</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($municipalities as $municipality): ?>
                <tr>
                  <td class="text-center"><?php echo $municipality['municipality_code'] ?></td>
                  <td class="text-center"><?php echo $municipality['municipality'] ?></td>
                  <td class="text-center"><?php echo $municipality['status'] ?></td>
                  <td class="text-center">
                      <div class="btn-group">
                      <form action="<?php echo base_url('admin/setCurrentMunicipalityID') ?>" method="POST">
                        <input hidden type="text" name="municipality_id" value="<?php echo $municipality['municipality_id'] ?>">
                        <button class="btn btn-success" type="submit">
                          <i class="fa fa-edit">Edit</i>
                        </button>
                      </form>
                    </div>

                    <div class="btn-group">
                      <form action="<?php echo base_url('admin/deleteMunicipalitiesAndBarangays') ?>" method="POST">
                        <input type="text" name="municipality_id" value="<?php echo $municipality['municipality_id']?>" hidden>
                          <button class="btn btn-danger" type="submit">Delete</button>                       
                      </form>
                    </div>

                    <div class="btn-group">
                      <?php if ($municipality['status']=='active'): ?>
                        <form action="<?php echo base_url('admin/deactivateMunicipalitiesAndBarangays') ?>" method="POST">
                          <input type="text" name="municipality_id" value="<?php echo $municipality['municipality_id'] ?>" hidden>
                          <button class="btn btn-default btn-block" name="delete" id="delete">Deactivate</button>
                        </form>                          
                      <?php endif ?>

                      <?php if ($municipality['status']=='inactive'): ?>
                        <form action="<?php echo base_url('admin/activateMunicipalitiesAndBarangays') ?>" method="POST">
                          <input type="text" name="fund_id" value="<?php echo $municipality['municipality_id'] ?>" hidden>
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
      $('#municipalityTable').DataTable();
    } 
  );
</script>
