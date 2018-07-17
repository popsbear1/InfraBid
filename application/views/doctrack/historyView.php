    <div class="box-body">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <h4>FORWARDING</h4>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <h4>RECEIVING</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center">Department</th>
                <th class="text-center">Date/Time Received</th>
                <th class="text-center">Received By</th>
                <th class="text-center">Remarks</th>
                <th class="text-center">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center">Department</th>
                <th class="text-center">Forwarded By</th>
                <th class="text-center">Forwarded To</th>
                <th class="text-center">Forward (Remarks)</th>  
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>     
  </div>
  
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

      <div class="modal-body">
        <table class='table table-striped table-bordered' style='font-size:13px;'>
          <thead>
            <tr>
              <th style="text-align: center">Name</th>
              <th style="text-align: center">Location</th>
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
