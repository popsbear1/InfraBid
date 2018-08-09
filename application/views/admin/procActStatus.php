
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12">
      <h3 class="pull-left">Procurement Monitoring Report</h3>
    </div>
  </div>
  <div class="box box-info">
  	<div class="box-header">
  		<h2 class="box-title">Project List</h2> 
  	</div>
  	<div class="box-body">
		<table class="display responsive nowrap" width="100%" cellspacing="0" id="projectListTable">
			<thead>
				<tr class="text-center">
					<th>Project</th>
				<th>Project Type</th>
				<th>Pre-Proc Conference</th>
				<th>Ads/Post of IAEB</th>
				<th>Pre-bid Conference</th>
				<th>Eligibility Check</th>
				<th>Sub/Open of Bids</th>
				<th>Bid Evaluation</th>
				<th>Post Qual</th>
				<th>Notice of Award</th>
				<th>Contract Signing</th>
				<th>Notice to Proceed</th>
				<th>Delivery Completion</th>
				<th>Acceptance/Turnover</th>
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
					<td></td>
				</tr>	
			</tbody>
		</table>
  	</div>
  	<div class="box-footer">
  		
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
<script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
<script type="text/javascript">
	var projectsData = '<?php echo json_encode($projects); ?>';
	var projects = JSON.parse(projectsData);
	console.log(projects);
	$('#projectListTable').DataTable({
		data: projects,
		columns: [
			{
				data: null,
				render: function(data, type, row){
					return data.project_no + ' - ' + data.project_title;
				}
			},
			{ data: 'project_type'},
			{ data: 'pre_proc'},
			{ data: 'advertisement'},
			{ data: 'pre_bid'},
			{ data: 'eligibility_check'},
			{ data: 'open_bid'},
			{ data: 'bid_evaluation'},
			{ data: 'post_qual'},
			{ data: 'award_notice'},
			{ data: 'contract_signing'},
			{ data: 'proceed_notice'},
			{ data: 'delivery_completion'},
			{ data: 'acceptance_turnover'}
		]
	});
</script>