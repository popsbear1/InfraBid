<section class="content-header">

</section>

<section class="content">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="box">
        <div class="box-header">
          <h2 class="box-title">Procurement  Monitoring Report for Public Bidding and Negotiated<small></small></h2>
        </div>
      </div>
        <div class="box-body">
          <div class="row">
            <div class="col-lg-12">
          <table class="table table-striped table-bordered" id="proc_report">
            <thead style='font-size:12px;'>
              <tr>
                <th class="text-center">Procurement Program/Project</th>
                <th class="text-center">PMO/End-User</th>
                <th class="text-center">Mode of Procurement</th>
                <th class="text-center">Pre-Procurement Conference</th>
                <th class="text-center">Ads/Post of IAEB</th>
                <th class="text-center">Pre-bid Conference</th>
                <th class="text-center">Opening of Bids</th>
                <th class="text-center">Bid Evaluation</th>
                <th class="text-center">Post Qual</th>
                <th class="text-center">Notice of Award</th>
                <th class="text-center">Contract Signing/P.O.</th>
                <th class="text-center">Notice to Proceed</th>
                <th class="text-center">Delivery/Completion</th>
                <th class="text-center">Post Qual</th>
                <th class="text-center">Source of Funds</th>
                <th class="text-center">ABC (Php)</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($procacts as $procact): ?>
                <tr>
                  <td><?php echo $procact['project_title'] ?></td>
                  <td></td>
                  <td><?php echo $procact['mode'] ?></td>
                  <td><?php echo $procact['pre_proc'] ?></td>
                  <td><?php echo $procact['advertisement'] ?></td>
                  <td><?php echo $procact['pre_bid'] ?></td>
                  <td><?php echo $procact['openbid'] ?></td>
                  <td><?php echo $procact['bidevaluation'] ?></td>
                  <td><?php echo $procact['postqual'] ?></td>
                  <td><?php echo $procact['awarddate'] ?></td>
                  <td><?php echo $procact['contractsigning'] ?></td>
                  <td><?php echo $procact['proceednotice'] ?></td>
                  <td><?php echo $procact['completion'] ?></td>
                  <td><?php echo $procact['postqual'] ?></td>
                  <td><?php echo $procact['source'] ?></td>
                  <td><?php echo $procact['ABC'] ?></td>

                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</section>
<!-- page content -->



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
      $('#proc_report').DataTable();
      $('#year').datepicker({
        dateFormat: 'yy'
      });
    } 
    );
  </script>
