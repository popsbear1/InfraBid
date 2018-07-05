<section class="content-header">

</section>
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
      <div class="box">
        <div class="box-header">
          <h2 class="box-title">
            History
          </h2>
        </div>
        <div class="box-body">
          <table class="table table-striped table-bordered" id="projectDocumenTable">
            <thead>
              <tr>
                <th class="text-center">Log ID</th>
                <th class="text-center">Forwarded by</th>
                <th class="text-center">Forwarded to</th>
                <th class="text-center">Forwarded Date</th>
                <th class="text-center">Date Received</th>
                <th class="text-center">Name of Receiver</th>
                <th class="text-center">Remarks</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($logs as $log):?>
                <tr>
                  <td class="text-center"><?php echo $log['log_id']?></td>
                  <td class="text-center"><?php echo $log['forwarded_by']?></td>
                  <td class="text-center"><?php echo $log['forwarded_to']?></td>
                  <td class="text-center"><?php echo $log['forward_date']?></td>
                  <td class="text-center"><?php echo $log['received_date']?></td>
                  <td class="text-center"><?php echo $log['receiver']?></td>
                  <td class="text-center">
                  <button class="btn btn-sucess logRemark" name="logID" type="submit" value="<?php echo $log['remark']?>"> 
                      <i class="fa fa-eye">View</i>
                    </td>
                  </tr>
                <?php endforeach?>
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
        $('#projectDocumenTable').DataTable();
      } 
      );
    </script>

<script>
    $('.logRemark').click(function (e) {
      $('#myModal').modal('show');
      var remark = $(this).val();
      $('#remark').html(remark);
    });
</script>

<!-- modal for data confirmation -->
<div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <table class='table table-striped table-bordered' style='font-size:13px;'>
          <thead>
            <tr >
              <th style='text-align: center'>Remarks</th>
            </tr> 
          </thead>
        </table>
          <p class="text-center" id="remark"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end of modal -->
