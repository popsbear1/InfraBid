
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <h3 class="pull-left">Bidder Disqualification Monitoring Page</h3>
    </div>
  </div>
  <div class="box">
    <div class="box-header">
      <h2 class="box-title"><i class="fa fa-list"></i> Disqualification Report</h2>
      <small>(Listed here are the records of disqualification of contractors with their bids on projects.)</small>
    </div>
    <div class="box-body">
      <table class="table table-striped table-bordered" id="disqualification_table">
        <thead style='font-size:12px;'>
          <tr>
            <th class="text-center">Contractor</th>
            <th class="text-center">Project Title</th>
            <th class="text-center">Date Disqualifide</th>
            <th class="text-center">Remark</th>
            <th class="text-center">Disqualifide By</th>
            <th class="text-center">ABC</th>
            <th class="text-center">Amount of Bid</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($records as $record): ?>
            <tr>
              <td><?php echo $record['businessname'] . ' - ' . $record['owner'] ?></td>
              <td><?php echo $record['project_no'] . ' - ' . $record['project_title'] ?></td>
              <td><?php echo date_format(date_create($record['log_date']), 'M-d-y') ?></td>
              <td><?php echo $record['remark'] ?></td>
              <td><?php echo $record['userName'] ?></td>
              <td><?php echo number_format($record['abc'], 2) ?></td>
              <td><?php echo number_format($record['contractor_bid'], 2) ?></td>
              <td>
                <button class="btn btn-primary btn-sm disqualification_history_view_btn" value="<?php echo $record['plan_id'] . ',' . $record['contractor_id'] ?>">
                  <i class="fa fa-eye"></i>
                </button>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
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
<!-- <script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script> -->

<div id="history_modal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×
        </button>
        <h4 class="modal-title" id="myModalLabel">Disqualifide Bidder Documents</h4>
      </div>
      <div class="modal-body">
        <table width="100%" id="disqual_docu">
          <thead>
            <tr>
              <th>Document Number</th>
              <th>Document Name</th>
              <th>Location Before Disqualification</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
    $('#disqualification_table').DataTable();
  });

  $('.disqualification_history_view_btn').click(function(){
    var record_data = $(this).val().split(',');
    $('#disqual_docu').DataTable().destroy();
    $.ajax({
      type: 'GET',
      url: '<?php echo base_url('doctrack/getDisqualifideBidData') ?>',
      data: { plan_id: record_data[0], contractor_id: record_data[1]},
      dataType: 'json'
    }).done(function(response){
      $('#disqual_docu').DataTable({
        data: response.record,
        columns: [
          { data: 'doc_no' },
          { data: 'document_name' },
          { data: 'current_doc_loc'}
        ]
      });
      $('#history_modal').modal('show');
    })
  });
</script>

