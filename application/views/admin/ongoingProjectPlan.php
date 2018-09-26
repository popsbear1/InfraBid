
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <h3 class="pull-left">Ongoing Project Procurement Activities</h3>
          </div>
        </div>
        <div class="box">
          <div class="box-header">
            <h2 class="box-title">Project Procurement Plan Records <small>(Regular and Supplemental plans with status of On Process, For Implementation and For Rebid will Appear in this table.)</small></h2>
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
                    <button class="btn btn-default btn-sm" type="button" id="year_btn">
                      <i class="fa fa-close"></i>
                    </button>
                  </div>
                  <input type="text" id="year" class="form-control input-sm" value="<?php echo $year ?>">
                </div>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-12">
                <label for="apptype">APP Type: </label>
                <div class="input-group">
                  <div class="input-group-btn">
                    <button class="btn btn-default btn-sm" type="button" id="apptype_btn">
                      <i class="fa fa-close"></i>
                    </button>
                  </div>
                  <select name="apptype" id="apptype" class="form-control input-sm">
                    <option hidden disabled selected>Choose APP Type</option>
                    <option value="regular">Regular APP</option>
                    <option value="supplementary">Supplemental APP</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-12">
                <label for="status">Status: </label>
                <div class="input-group">
                  <div class="input-group-btn">
                    <button class="btn btn-default btn-sm" type="button" id="status_btn">
                      <i class="fa fa-close"></i>
                    </button>
                  </div>
                  <select name="status" id="status" class="form-control input-sm">
                    <option hidden disabled selected>Choose Status</option>
                    <option value="onprocess">On process</option>
                    <option value="for_implementation">For Implementation</option>
                    <option value="for_rebid">For Rebid</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-12">
                <label for="municipality">Municipality: </label>
                <div class="input-group">
                  <div class="input-group-btn">
                    <button class="btn btn-default btn-sm" type="button" id="municipality_btn">
                      <i class="fa fa-close"></i>
                    </button>
                  </div>
                  <select name="municipality" id="municipality" class="form-control input-sm">
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
                    <button class="btn btn-default btn-sm" type="button" id="fund_btn">
                      <i class="fa fa-close"></i>
                    </button>
                  </div>
                  <select name="source" id="source" class="form-control input-sm">
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
                    <button class="btn btn-default btn-sm" type="button" id="type_btn">
                      <i class="fa fa-close"></i>
                    </button>
                  </div>
                  <select name="type" id="type" class="form-control input-sm">
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
                  <label><small>Action:</small></label>
                  <button class="btn btn-primary btn-sm" id="filterBtn" type="button">
                    <i class="fa fa-search"></i>
                    Find
                  </button>
                  <button class="btn btn-success btn-sm" id="printBtn" type="button">
                    <i class="fa fa-print"></i>
                    Print
                  </button>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <table width="100%" id="plan_table">
                  <thead style='font-size:12px;background: #ffcccc'>
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
                      <th class="text-center">Status</th>
                      <th class="text-center">Edit</th>
                    </tr>
                  </thead>
                  <tbody style='font-size:12px;'>
                    
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
<!-- DataTables -->
<script src="<?php echo base_url() ?>public/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/dataTables.rowGroup.min.js"></script>


<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="confirmPrintingModal">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Printing Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center">Selected Filters for Report</p>
        <form action="<?php echo base_url('reports/printOngoingAPP') ?>" method="GET" id="printForm">
          <table with="100%" id="filter_table">
            <thead>
              <tr>
                <th>Filter</th>
                <th>Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Year</td>
                <td><input type="text" id="year_value" name="year_value" style="border: none"></td>
              </tr>
              <tr>
                <td>APP Type</td>
                <td><input type="text" id="apptype_value" name="apptype_value" style="border: none"></td>
              </tr>
              <tr>
                <td>Status</td>
                <td><input type="text" id="status_value" name="status_value" style="border: none"></td>
              </tr>
              <tr>
                <td>Municipality</td>
                <td><input type="text" id="municipality_value" name="municipality_value" style="border: none"></td>
              </tr>
              <tr>
                <td>Source</td>
                <td><input type="text" id="source_value" name="source_value" style="border: none"></td>
              </tr>
              <tr>
                <td>Type</td>
                <td><input type="text" id="type_value" name="type_value" style="border: none"></td>
              </tr>

            </tbody>
          </table>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" form="printForm" class="btn btn-primary">Confirm</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  var plan_data = '<?php echo json_encode($plans) ?>';
  var plans = JSON.parse(plan_data);
  $(document).ready( 
    function () {
      $('#filter_table').DataTable({
        'paging'      : false,
        'lengthChange': true,
        'searching'   : false,
        'ordering'    : false,
        'info'        : false,
        'autoWidth'   : false
      });
      $('#plan_table').DataTable({
        data: plans,
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
            { data: 'project_status'},
            { 
              data: null,
              render: function ( data, type, row ) {
                return '<form method="POST" action="<?php echo base_url('admin/setCurrentPlanID') ?>">' +
                          '<input type="text" name="prev_loc" value="ongoingPlanView" hidden/>' +
                          '<button class="btn btn-info btn-sm" type="submit" name="plan_id" value="' + data.plan_id + '">' +
                            '<i class="fa fa-eye"></i>' +
                          '</button>' +
                        '</form>';
              }
            }
        ],
        order: [[8, 'asc']],
        rowGroup: {
          startRender: null,
          endRender: function (rows, group) {
            var total = rows
            .data()
            .pluck('abc')
            .reduce( function (a, b) {
              return a + b*1;
            }, 0);

            return $('<tr/>')
            .append('<td colspan="10"> Total for ' + group + '</td>')
            .append('<td>' + total + '</td>')
            .append('<td/>')
            .append('<td/>')
            .append('<td/>');
          },
          dataSrc: 'source'
        }
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

  $('#year_btn').click(function(){
    $('#year').val('');
  });

  $('#apptype_btn').click(function(){
    $('#apptype').val('');
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
    var apptype = $('#apptype').val();
    var status = $('#status').val();
    var municipality = $('#municipality').val();
    var source = $('#source').val();
    var type = $('#type').val();

    $('#plan_table').DataTable().destroy();

    $.ajax({
      type: 'GET',
      url: '<?php echo base_url("admin/getFilteredOngoingPlanData") ?>',
      data: { year: year, apptype: apptype, status: status, municipality: municipality, source: source, type: type},
      dataType: 'json'
    }).done(function(response){
      $('#project_count').html(response.count_total['project_count']);
      $('#total_abc').html(response.count_total['total_abc']);
      $('#total_abc_word_format').html("(" + response.count_total['total_abc_word_format'] + ")");
      var table = $('#plan_table').DataTable({
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
            { data: 'project_status'},
            { 
              data: null,
              render: function ( data, type, row ) {
                return '<form method="POST" action="<?php echo base_url('admin/setCurrentPlanID') ?>">' +
                          '<button class="btn btn-info btn-sm" type="submit" name="plan_id" value="' + data.plan_id + '">' +
                            '<i class="fa fa-eye"></i>' +
                          '</button>' +
                        '</form>';
              }
            }
        ],
        order: [[8, 'asc']],
        rowGroup: {
          startRender: null,
          endRender: function (rows, group) {
            var total = rows
            .data()
            .pluck('abc')
            .reduce( function (a, b) {
              return a + b*1;
            }, 0);

            return $('<tr/>')
            .append('<td colspan="10"> Total for ' + group + '</td>')
            .append('<td>' + total + '</td>')
            .append('<td/>')
            .append('<td/>')
            .append('<td/>');
          },
          dataSrc: 'source'
        }
      });

    })
  });

  $('#printBtn').click(function(e){


    var year = $('#year').val();
    var apptype = $('#apptype').val();
    var status= $('#status').val();
    var municipality = $('#municipality').val();
    var source = $('#source').val();
    var type = $('#type').val();

    $('#year_value').val(year);
    $('#apptype_value').val(apptype);
    $('#status_value').val(status);
    $('#municipality_value').val(municipality);
    $('#source_value').val(source);
    $('#type_value').val(type);

    $('#confirmPrintingModal').modal('show');

  });
</script>
