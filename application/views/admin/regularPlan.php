
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <h3 class="pull-left">Anual Regular Procurement Plan Report</h3>
          </div>
        </div>
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
                <label for="year">Year: </label>
                <div class="input-group">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="button" id="year_btn">
                      <i class="fa fa-close"></i>
                    </button>
                  </div>
                  <input type="text" id="year" class="form-control" value="<?php echo $year ?>">
                </div>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-12">
                <label for="quarter">Quarter: </label>
                <div class="input-group">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="button" id="quarter_btn">
                      <i class="fa fa-close"></i>
                    </button>
                  </div>
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
                <label for="status">Status: </label>
                <div class="input-group">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="button" id="status_btn">
                      <i class="fa fa-close"></i>
                    </button>
                  </div>
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
                <label for="municipality">Municipality: </label>
                <div class="input-group">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="button" id="municipality_btn">
                      <i class="fa fa-close"></i>
                    </button>
                  </div>
                  <select name="municipality" id="municipality" class="form-control">
                    <option hidden disabled selected>Choose Municipality</option>
                    <?php foreach ($municipalities as $municipality): ?>
                      <option value="<?php echo $municipality['municipality_id'] ?>"><?php echo $municipality['municipality'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-12">
                <label for="source">Source of Fund: </label>
                <div class="input-group">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="button" id="fund_btn">
                      <i class="fa fa-close"></i>
                    </button>
                  </div>
                  <select name="source" id="source" class="form-control">
                    <option hidden disabled selected>Choose Source</option>
                    <?php foreach ($sources as $source): ?>
                      <option value="<?php echo $source['fund_id'] ?>"><?php echo $source['source'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-12">
                <label for="type">Project Type: </label>
                <div class="input-group">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="button" id="type_btn">
                      <i class="fa fa-close"></i>
                    </button>
                  </div>
                  <select name="type" id="type" class="form-control">
                    <option hidden disabled selected>Choose Type</option>
                    <?php foreach ($types as $type): ?>
                      <option value="<?php echo $type['projtype_id'] ?>"><?php echo $type['type'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="padding: 10px">
                <div class="form-group">
                  <label>Action:</label>
                  <button class="btn btn-primary" id="filterBtn" type="button">
                    <i class="fa fa-search"></i>
                    Find
                  </button>
                  <button class="btn btn-default" type="button" id="print_btn">
                    <i class="fa fa-print"></i>
                    Print
                  </button>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <table class="display responsive nowrap" width="100%" cellspacing="0" id="plan_table">
                  <thead style='font-size:12px;'>
                    <tr>
                      <th class="text-center">Project No.</th>
                      <th class="text-center">Project Title</th>
                      <th class="text-center">Location</th>
                      <th class="text-center">Mode of Procurement</th>
                      <th class="text-center">ADS/POST OF IB/REI</th>
                      <th class="text-center">SUB/ OPEN OF BIDS</th>
                      <th class="text-center">NOTICE OF AWARD</th>
                      <th class="text-center">CONTRACT SIGNING</th>
                      <th class="text-center">Source of Fund</th>
                      <th class="text-center">Type of Project</th>
                      <th class="text-center">Approved Budget Cost</th>
                      <th class="text-center">Project Year</th>
                      <th class="text-center">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($plans as $plan): ?>
                      <tr>
                        <td><?php echo $plan['project_no'] ?></td>
                        <td><?php echo $plan['project_title'] ?></td>
                        <td><?php echo $plan['barangay'] . ', ' . $plan['municipality']?></td>
                        <td><?php echo $plan['mode'] ?></td>
                        <td><?php echo $plan['abc_post_date'] ?></td>
                        <td><?php echo $plan['sub_open_date'] ?></td>
                        <td><?php echo $plan['award_notice_date'] ?></td>
                        <td><?php echo $plan['contract_signing_date'] ?></td>
                        <td><?php echo $plan['source'] ?></td>
                        <td><?php echo number_format($plan['abc'], 2) ?></td>
                        <td><?php echo $plan['type'] ?></td>
                        <td><?php echo $plan['project_year'] ?></td>
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
            <div class="callout" style="background: #f2f2f2">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 text-center">
                  <h4>Project Count:</h4>
                  <p id="project_count"><?php echo $count_total['project_count'] ?></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 text-center">
                  <h4>Total of all ABC:</h4>
                  <p id="total_abc"><?php echo number_format($count_total['total_abc'], 2)?></p>
                  <p id="total_abc_word_format"><?php echo '(' . $count_total['total_abc_word_format'] . ')' ?></p>
                </div>
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
<script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
<div class="modal fade" id="printRegularPlanModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Print Regular Plans</h4>
      </div>
      <div class="modal-body">
        <h5 class="text-center">Print result will depend on the current Filters.</h5>
        <p><b>Current Filters:</b></p>
        <div class="well">
          <form method="GET" action="<?php echo base_url('printDetailsAndReports/print_regular_projects') ?>" class="form-horizontal" id="print_regular_project_form">
            <div class="form-group">
              <label class="col-lg-4 col-md-4 col-sm-4 control-label">Year:</label>
              <div class="col-lg-8 col-md-8 col-sm-8">
                <input class="form-control" name="year_filter" id="year_filter" readonly>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 col-md-4 col-sm-4 control-label">Quarter:</label>
              <div class="col-lg-8 col-md-8 col-sm-8">
                <input class="form-control" name="quarter_filter" id="quarter_filter" readonly>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 col-md-4 col-sm-4 control-label">Status:</label>
              <div class="col-lg-8 col-md-8 col-sm-8">
                <input class="form-control" name="status_filter" id="status_filter" readonly>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 col-md-4 col-sm-4 control-label">Municipality:</label>
              <div class="col-lg-8 col-md-8 col-sm-8">
                <input name="municipality_filter" id="municipality_filter" hidden>
                <p class="form-control" id="municipality_filter_name" ></p>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 col-md-4 col-sm-4 control-label">Source of Fund:</label>
              <div class="col-lg-8 col-md-8 col-sm-8">
                <input name="fund_filter" id="fund_filter" hidden>
                <p class="form-control" id="fund_filter_name" ></p>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 col-md-4 col-sm-4 control-label">Project Type:</label>
              <div class="col-lg-8 col-md-8 col-sm-8">
                <input name="type_filter" id="type_filter" hidden>
                <p class="form-control" id="type_filter_name" ></p>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" form="print_regular_project_form">Confirm</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
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

  $('#print_btn').click(function(){
    $('#year_filter').val($('#year').val());
    $('#quarter_filter').val($('#quarter').val());
    $('#status_filter').val($('#status').val());
    $('#municipality_filter').val($('#municipality').val());
    $('#municipality_filter_name').html($('#municipality').find(":selected").html());
    $('#fund_filter').val($('#source').val());
    $('#fund_filter_name').html($('#source').find(":selected").html());
    $('#type_filter').val($('#type').val());
    $('#type_filter_name').html($('#type').find(":selected").html());

    $('#printRegularPlanModal').modal('show');
  });

  $('#year_btn').click(function(){
    $('#year').val('');
  });

  $('#quarter_btn').click(function(){
    $('#quarter').val('');
  });

  $('#status_btn').click(function(){
    $('#status').val('');
  });

  $('#municipality_btn').click(function(){
    $('#municipality').val('');
  });

  $('#fund_btn').click(function(){
    $('#source').val('');
  });

  $('#type_btn').click(function(){
    $('#type').val('');
  });

  $('#filterBtn').click(function(e){
    e.preventDefault();
    var year = $('#year').val();
    var quarter = $('#quarter').val();
    var status = $('#status').val();
    var municipality = $('#municipality').val();
    var source = $('#source').val();
    var type = $('#type').val();

    $('#plan_table').DataTable().destroy();

    $.ajax({
      type: 'GET',
      url: '<?php echo base_url("admin/getFilteredRegularPlanData") ?>',
      data: { year: year, quarter: quarter, status: status, municipality: municipality, source: source, type: type},
      dataType: 'json'
    }).done(function(response){
      $('#project_count').html(response.count_total['project_count']);
      $('#total_abc').html(response.count_total['total_abc']);
      $('#total_abc_word_format').html("(" + response.count_total['total_abc_word_format'] + ")");
      $('#plan_table').DataTable({
        data: response.plans,
        columns: [
            { data: 'project_no' },
            { data: 'project_title' },
            { 
              data: null,
              render: function(data, type, row){
                return data.barangay + ', ' + data.municipality;
              },
              editField: ['barangay', 'municipality']
            },
            { data: 'mode' },
            { data: 'abc_post_date' },
            { data: 'sub_open_date' },
            { data: 'award_notice_date' },
            { data: 'contract_signing_date' },
            { data: 'source' },
            { data: 'type' },
            { data: 'abc' },
            { data: 'project_year' },
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
        ]
      });

    })
  });
</script>
