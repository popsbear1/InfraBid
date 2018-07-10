
    
      <section class="content-header"></section>
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h2 class="box-title">Procurement  Monitoring Report for Public Bidding and Negotiated<small></small></h2>
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-lg-12">                    
                    <form action="<?php echo base_url('admin/annualPlanView') ?>" method="POST">
                      <div class="row">
                        <div class="col-lg-12">
                          <p>Filters: </p>
                          <div class="form-group col-lg-2">
                            <label for="year">Year: </label>
                            <input type="text" id="year" class="form-control">  
                          </div>
                          <div class="form-group col-lg-2">
                            <label for="quarter">Quarter: </label>
                            <select name="quarter" id="quarter" class="form-control">
                              <option hidden disabled selected>Choose Quarter</option>
                              <option value="1stQ">1st Q</option>
                              <option value="2ndQ">2nd Q</option>
                              <option value="3rdQ">3rd Q</option>
                              <option value="4thQ">4th Q</option>
                            </select>
                          </div>
                          <div class="form-group col-lg-2">
                            <label for="status">Status: </label>
                            <select name="status" id="status" class="form-control">
                              <option hidden disabled selected>Choose Status</option>
                              <option value="pending">Pending</option>
                              <option value="processing">Processing</option>
                              <option value="implementation">Implementation</option>
                              <option value="finished">Finished</option>
                            </select>
                          </div>
                          <div class="form-group col-lg-2">
                            <label for="mode">Mode: </label>
                            <select name="mode" id="mode" class="form-control">
                              <option hidden disabled selected>Choose Mode</option>
                              <?php foreach ($modes as $mode): ?>
                                <option value="<?php echo $mode['mode_id'] ?>"><?php echo $mode['mode'] ?></option>
                              <?php endforeach ?>
                            </select>
                          </div>
                          <div class="form-group col-lg-2">
                            <label for="abc">ABC: </label>
                            <select name="abc" id="abc" class="form-control">
                              <option hidden disabled selected>Choose ABC</option>
                              <option value="bellowOneMil">Bellow One Mil</option>
                              <option value="betweenOneAndFiveMil">Between One and Five Mil</option>
                              <option value="aboveFiveMil">Above Five Million</option>
                            </select>
                          </div>
                          <div class="form-group col-lg-2">
                            <label for="municipality">Municipality: </label>
                            <select name="municipality" id="municipality" class="form-control">
                              <option hidden disabled selected>Choose Municipality</option>
                              <?php foreach ($municipalities as $municipality): ?>
                                <option value="<?php echo $municipality['municipality_id'] ?>"><?php echo $municipality['municipality'] ?></option>
                              <?php endforeach ?>
                            </select>
                          </div>
                          <div class="col-lg-12 text-center">
                            <button class="btn btn-primary" type="submit">GO</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <table class="table table-bordered table-striped" id="plan_table">
                  <thead style='font-size:12px;'>
                    <tr>
                      <th class="text-center">Project No.</th>
                      <th class="text-center">Project Title</th>
                      <th class="text-center">Location</th>
                      <th class="text-center">Type of Project</th>
                      <th class="text-center">Mode of Procurement</th>
                      <th class="text-center">Approved Budget Cost</th>
                      <th class="text-center">Source of Fund</th>
                      <th class="text-center">Account Classification</th>
                      <th class="text-center">Date Added</th>
                      <th class="text-center">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($plans as $plan): ?>
                      <tr>
                        <td><?php echo $plan['project_no'] ?></td>
                        <td><?php echo $plan['project_title'] ?></td>
                        <td><?php echo $plan['barangay'] . ', ' . $plan['municipality']?></td>
                        <td><?php echo $plan['type'] ?></td>
                        <td><?php echo $plan['mode'] ?></td>
                        <td><?php echo $plan['abc'] ?></td>
                        <td><?php echo $plan['source'] ?></td>
                        <td><?php echo $plan['classification'] ?></td>
                        <td><?php echo $plan['date_added'] ?></td>
                        <td>
                          <form method="POST" action="<?php echo base_url('admin/setCurrentPlanID') ?>">
                            <button class="btn btn-success" type="submit" name="plan_id" value="<?php echo $plan['plan_id'] ?>">
                              <i class="fa fa-edit"></i>
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
      $('#plan_table').DataTable();
      $('#year').datepicker({
        autoclose: true,
        format: 'yyyy',
        startView: 'years',
        minViewMode: 'years',
        orientation: 'bottom auto'
      });

      $('#year').attr('placeholder', 'yyyy');
    } 
  );
</script>
