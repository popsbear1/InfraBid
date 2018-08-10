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
      <p id="advertisement_incoming"></p>
      <p><?php echo count($advertisement_incoming) ?></p>
      <p><?php echo count($pre_bid_incoming) ?></p>
      <p><?php echo count($advertisement) ?></p>
    </div>
  </div>
</section>

<script>
  var advertisement_incoming = JSON.parse('<?php echo json_encode($advertisement_incoming) ?>');
  var pre_bid_incoming = JSON.parse('<?php echo json_encode($pre_bid_incoming) ?>');
  var bid_submission_incoming = JSON.parse('<?php echo json_encode($bid_submission_incoming) ?>');
  var post_qualification_incoming = JSON.parse('<?php echo json_encode($post_qualification_incoming) ?>');
  var award_notice_incoming = JSON.parse('<?php echo json_encode($award_notice_incoming) ?>');
  var contract_signing_incoming = JSON.parse('<?php echo json_encode($contract_signing_incoming) ?>');
  var authority_approval_incoming = JSON.parse('<?php echo json_encode($authority_approval_incoming) ?>');
  var proceed_notice_incoming = JSON.parse('<?php echo json_encode($proceed_notice_incoming) ?>');

  if (typeof Storage !== "undefined") {
    sessionStorage.setItem("advertisement_incoming", JSON.stringify(advertisement_incoming));

    document.getElementById("advertisement_incoming").innerHTML = sessionStorage.getItem("advertisement_incoming").length;

    console.log(sessionStorage.getItem("advertisement_incoming"));  
  }else{

  }
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

