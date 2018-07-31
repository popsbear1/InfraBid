
    
      <section class="content-header"></section>
      <section class="content">
        <div class="box">
          <div class="box-header">
            <h2 class="box-title"><b>(Regular) </b>Project Procurement Plan Records</h2>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <p>Filters: </p>
              </div>
            </div>
            <div class="row">                   
              <div class="col-lg-2 col-md-2 col-sm-12">
                <div class="form-group">
                  <label for="year">Year: </label>
                  <input type="text" id="year" class="form-control">  
                </div>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-12">
                <div class="form-group">
                  <label for="quarter">Quarter: </label>
                  <select name="quarter" id="quarter" class="form-control">
                    <option hidden disabled selected>Choose Quarter</option>
                    <option value="1stQ">1st Q</option>
                    <option value="2ndQ">2nd Q</option>
                    <option value="3rdQ">3rd Q</option>
                    <option value="4thQ">4th Q</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-12">
                <div class="form-group">
                  <label for="status">Status: </label>
                  <select name="status" id="status" class="form-control">
                    <option hidden disabled selected>Choose Status</option>
                    <option value="pending">Pending</option>
                    <option value="onprocess">On process</option>
                    <option value="for_implementation">For Implementation</option>
                    <option value="for_rebid">For Rebid</option>
                    <option value="for_review">For Review</option>
                    <option value="completed">Completed</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-12">
                <div class="form-group">
                  <label for="municipality">Municipality: </label>
                  <select name="municipality" id="municipality" class="form-control">
                    <option hidden disabled selected>Choose Municipality</option>
                    <?php foreach ($municipalities as $municipality): ?>
                      <option value="<?php echo $municipality['municipality_id'] ?>"><?php echo $municipality['municipality'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-12">
                <div class="form-group">
                  <label for="municipality">Municipality: </label>
                  <select name="municipality" id="municipality" class="form-control">
                    <option hidden disabled selected>Choose Municipality</option>
                    <?php foreach ($municipalities as $municipality): ?>
                      <option value="<?php echo $municipality['municipality_id'] ?>"><?php echo $municipality['municipality'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-12">
                <div class="form-group">
                  <label for="municipality">Municipality: </label>
                  <select name="municipality" id="municipality" class="form-control">
                    <option hidden disabled selected>Choose Municipality</option>
                    <?php foreach ($municipalities as $municipality): ?>
                      <option value="<?php echo $municipality['municipality_id'] ?>"><?php echo $municipality['municipality'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <div class="form-group">
                  <label>Action:</label>
                  <button class="btn btn-primary" id="filterBtn" type="button">
                    <i class="fa fa-search"></i>
                    Find
                  </button>
                  <button class="btn btn-default" type="button">
                    <i class="fa fa-print"></i>
                    Print
                  </button>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <table class="table table-bordered table-striped" id="plan_table">
                  <thead style='font-size:12px;'>
                    <tr>
                      <th class="text-center">Project No.</th>
                      <th class="text-center">Project Title</th>
                      <th class="text-center">Project Year</th>
                      <th class="text-center">Location</th>
                      <th class="text-center">Type of Project</th>
                      <th class="text-center">Mode of Procurement</th>
                      <th class="text-center">Approved Budget Cost</th>
                      <th class="text-center">Source of Fund</th>
                      <th class="text-center">Account Classification</th>
                      <th class="text-center">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($plans as $plan): ?>
                      <tr>
                        <td><?php echo $plan['project_no'] ?></td>
                        <td><?php echo $plan['project_title'] ?></td>
                        <td><?php echo $plan['project_year'] ?></td>
                        <td><?php echo $plan['barangay'] . ', ' . $plan['municipality']?></td>
                        <td><?php echo $plan['type'] ?></td>
                        <td><?php echo $plan['mode'] ?></td>
                        <td><?php echo $plan['abc'] ?></td>
                        <td><?php echo $plan['source'] ?></td>
                        <td><?php echo $plan['classification'] ?></td>
                        <td>
                          <form method="POST" action="<?php echo base_url('admin/setCurrentPlanID') ?>">
                            <input type="text" name="plan_id" value="<?php echo $plan['plan_id'] ?>" hidden="hidden" >
                            <input type="text" name="project_status" value="<?php echo $plan['project_status'] ?>" hidden="hidden" >
                            <button class="btn btn-info" type="submit">
                              <i class="fa fa-eye"></i>
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
      $('#plan_table').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : true,
        'ordering'    : false,
        'info'        : true,
        'autoWidth'   : true
      });
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

  $('#filterBtn').click(function(e){
    e.preventDefault();
    var year = $('#year').val();
    var quarter = $('#quarter').val();
    var status = $('#status').val();
    var municipality = $('#municipality').val();

    $('#plan_table').DataTable().destroy();

    $.ajax({
      type: 'POST',
      url: '<?php echo base_url("admin/getFilteredRegularPlanData") ?>',
      data: { year: year, quarter: quarter, status: status, municipality: municipality},
      dataType: 'json',
      success: function(response){

        $('#plan_table').DataTable({
          data: response.plans,
          columns: [
              { data: 'project_no' },
              { data: 'project_title' },
              { data: 'project_year' },
              { 
                data: null,
                render: function(data, type, row){
                  return data.barangay + ', ' + data.municipality;
                },
                editField: ['barangay', 'municipality']
              },
              { data: 'type' },
              { data: 'mode' },
              { data: 'abc' },
              { data: 'source' },
              { data: 'classification' },
              { 
                data: null,
                render: function ( data, type, row ) {
                  return '<form method="POST" action="<?php echo base_url('admin/setCurrentPlanID') ?>">' +
                            '<button class="btn btn-info" type="submit" name="plan_id" value="' + data.plan_id + '">' +
                              '<i class="fa fa-eye"></i>' +
                            '</button>' +
                          '</form>';
                }
              }
          ],
          'paging'      : true,
          'lengthChange': false,
          'searching'   : true,
          'ordering'    : false,
          'info'        : true,
          'autoWidth'   : true
        });

      }
    });
  });
</script>
