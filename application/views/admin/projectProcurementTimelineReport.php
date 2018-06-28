<section class="content-header">
  
</section>
<section class="content">

  <!-- page content -->
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="box">
          <div class="box-header">
            <h2 class="box-title">Procurement Timeline Report<small></small></h2>
          </div>

        <div class="box-body">
          <div class="row">
            <div class="col-lg-12">
            <table class="table table-striped table-bordered" id="proc_time_report">
              <thead style='font-size:12px;'>
                <tr>
                  <th class="text-center">Procurement Program/Project</th>
                  <th class="text-center">Pre-proc Conf Start-End Date</th>
                  <th class="text-center">Ads/Post of IAEB Start-End Date</th>
                  <th class="text-center">Pre-bid Conf Start-End Date</th>
                  <th class="text-center">Eligibility Check Start-End Date</th>
                  <th class="text-center">Sub/Open of Bids Start-End Date</th>
                  <th class="text-center">Bid Evaluation Start-End Date</th>
                  <th class="text-center">Post Qual Start-End Date</th>
                  <th class="text-center">Notice of Award Start-End Date</th>
                  <th class="text-center">Contract Signing Start-End Date</th>
                  <th class="text-center">Notice to Proceed Start-End Date</th>
                  <th class="text-center">Delivery/Completion Start-End Date</th>
                  <th class="text-center">Acceptance/Turnover Start-End Date</th>
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
                  <td></td>
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
<script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(document).ready( 
    function () {
      $('#proc_time_report').DataTable();
      $('#year').datepicker({
        dateFormat: 'yy'
      });
    } 
  );
</script>