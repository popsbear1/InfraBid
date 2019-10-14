<style>
  #btn-app{
    height: 50px
  }
<?php if ($_SESSION['user_type'] !== 'BAC_SEC'){
  header('Location: ../capitol/docTrackView');
} ?>
</style>
<section class="content">
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fa fa-list"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">APP Count</span>
          <span class="info-box-number"><?php echo $allAPPCount->count ?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="fa fa-spinner"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Ongoing Procurement</span>
          <span class="info-box-number"><?php echo $ongoingCount->count ?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-stop-circle-o"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Projects For Review</span>
          <span class="info-box-number"><?php echo $forReviewCount->count ?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-check"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Completed Projects</span>
          <span class="info-box-number"><?php echo $completedCount->count ?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
  </div>
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="well" style="margin-left: 10px;">
            <p class="text-center"><b>Date Range:</b></p>
            <p class="text-center">View scheduled activities beetween this date range.</p>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" id="start_date" placeholder="Start Date..">
              </div>
              <!-- /.input group -->
            </div>
            <p class="text-center">TO</p>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" id="end_date" placeholder="End Date..">
              </div>
              <!-- /.input group -->
            </div>
            <hr>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <button class="btn btn-primary btn-sm" id="daterange_btn">
                  <i class="fa fa-find"></i>
                  GO!
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button id="mainActivityBtn" class="btn btn-block bg-olive btn-app">
        <span class="badge bg-yellow" id="incoming_badge"></span>
        Incoming Activities
      </button>
      <button id="mainActivityBtn_ending" class="btn btn-block bg-maroon btn-app">
        <span class="badge bg-yellow" id="due_badge"></span>
        Ending Activities
      </button>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9">
      <div class="box box-info">
        <div class="box-header">
          <h4 class="box-title" id="table_title"></h4>
        </div>
        <div class="box-body">
          <table class="text-center" width="100%" id="project_table">
            <thead>
              <tr>
                <td>Project No.</td>
                <td>Project Title</td>
                <td>Activity Name</td>
                <td>Start Date</td>
                <td>End Date</td>
                <td>Action</td>
              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<script>

</script>


<script src="<?php echo base_url() ?>public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>public/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
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


<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="date_range_error">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Alert!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        Select date range first!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  var plans_coming_data = '<?php echo json_encode($plans_coming) ?>';
  var plans_due_data = '<?php echo json_encode($plans_due) ?>';

  var plans_coming = JSON.parse(plans_coming_data);
  var plans_due = JSON.parse(plans_due_data);

  var plans_coming_count = plans_coming.length;
  var plans_due_count = plans_due.length;

  $('#incoming_badge').text(plans_coming_count);
  $('#due_badge').text(plans_due_count);

  $(document).ready(function(){
    showIncomingPlanActivities();
    $('#start_date').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      orientation: 'bottom auto'
    });
    $('#end_date').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      orientation: 'bottom auto'
    });
  });

  $('#daterange_btn').click(function(){
    var start_date = $('#start_date').val();
    var end_date = $('#end_date').val();
    if (!start_date || !end_date) {
     $('#date_range_error').modal('show');
    }else{
      $.ajax({
        type: 'GET',
        url: '<?php echo base_url('admin/getPlanDateRange') ?>',
        data: { start_date: start_date, end_date : end_date},
        dataType: 'json'
      }).done(function(response){

        $('#project_table').DataTable().destroy();
        $('#table_title').html("Activities During Date Range <small>(Activity scheduled in the date range.)</small>");
        $('#project_table').DataTable({
          data: response.plans,
          columns: [
            { data: 'project_no'},
            { data: 'project_title'},
            { data: 'activity'},
            { data: 'start_date'},
            { data: 'end_date'},
            {
              data: null,
              render: function(data, type, row){
                return '<form method="POST" action="<?php echo base_url('admin/setCurrentPlanID') ?>">' +
                          '<input type="text" name="project_status" value="' + data.status + '" hidden />' +
                          '<input type="text" name="plan_id" value="' + data.plan_id + '" hidden />' +
                          '<button class="btn btn-primary" type="submit">' +
                            '<i class="fa fa-view"></i>' +
                            'View' +
                          '</button>' + 
                        '</form>';
              }
            }
          ],
          order: [[2, 'asc']]
        });
      })
    }
  });

  function showIncomingPlanActivities(){
    $('#table_title').html("Incoming Activities <small>(2 days or less prior to starting date.)</small>");
    $('#project_table').DataTable({
      data: plans_coming,
      columns: [
        { data: 'project_no'},
        { data: 'project_title'},
        { data: 'activity'},
        { data: 'start_date'},
        { data: 'end_date'},
        {
          data: null,
          render: function(data, type, row){
            return '<form method="POST" action="<?php echo base_url('admin/setCurrentPlanID') ?>">' +
                      '<input type="text" name="project_status" value="' + data.status + '" hidden />' +
                      '<input type="text" name="plan_id" value="' + data.plan_id + '" hidden />' +
                      '<button class="btn btn-primary" type="submit">' +
                        '<i class="fa fa-view"></i>' +
                        'View' +
                      '</button>' + 
                    '</form>';
          }
        }
      ],
      order: [[2, 'asc']]
    });
  }

  $('#mainActivityBtn').click(function(){
    $('#project_table').DataTable().destroy();
    showIncomingPlanActivities();
  })

  $('#mainActivityBtn_ending').click(function(){
    $('#table_title').html("Ending Activities <small>(2 days or less prior to ending date.)</small>");
    $('#project_table').DataTable().destroy();
    $('#project_table').DataTable({
      data: plans_due,
      columns: [
        { data: 'project_no'},
        { data: 'project_title'},
        { data: 'activity'},
        { data: 'start_date'},
        { data: 'end_date'},
        {
          data: null,
          render: function(data, type, row){
            return '<form method="POST" action="<?php echo base_url('admin/setCurrentPlanID') ?>">' +
                      '<input type="text" name="project_status" value="' + data.status + '" hidden />' +
                      '<input type="text" name="plan_id" value="' + data.plan_id + '" hidden />' +
                      '<button class="btn btn-primary" type="submit">' +
                        '<i class="fa fa-view"></i>' +
                        'View' +
                      '</button>' + 
                    '</form>';
          }
        }
      ],
      order: [[2, 'asc']]
    });    
  });
</script>