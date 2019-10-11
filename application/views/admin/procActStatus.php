
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12">
      <h3 class="pull-left">Procurement Monitoring Status</h3>
    </div>
  </div>
  <div class="box box-info">
  	<div class="box-header">
  		<h2 class="box-title">Project List</h2> 
  	</div>
  	<div class="box-body">
  		<div class="row">
	  		<div class="col-lg-12 col-sm-12 col-md-12">
	  			<p>Filter:</p>
	  		</div>
	  	</div>
	  	<div class="row">
	  		<div class="col-lg-2 col-sm-2 col-md-2">
	  			<div class="form-group">
	  				<label>Activity: </label>
		  			<div class="input-group" id="actact">
		  				<select name="choose_activity" id="choose_activity" class="form-control input-sm">
		  					<option selected disabled hidden>Choose Activity</option>
		  					<option value="pre_proc">Pre-Procurement Conference</option>
		  					<option value="advertisement">Posting</option>
		  					<option value="pre_bid">Pre-bid Conference</option>
		  					<option value="eligibility_check">Eligibility Check</option>
		  					<option value="open_bid">Submission & Opening of Bids</option>
		  					<option value="bid_evaluation">Bid Evaluation</option>
		  					<option value="post_qual">Post Qualification</option>
		  					<option value="award_notice">Notice of Award</option>
		  					<option value="contract_signing">Contract Signing</option>
		  					<option value="proceed_notice">Notice to Proceed</option>
		  					<option value="delivery_completion">Delivery Completion</option>
		  					<option value="acceptance_turnover">Acceptance/Turnover</option>
		  				</select>
			  			<div class="input-group-btn">
			  				<button class="btn btn-primary btn-sm" type="button" id="filter_activity">
			  					<i class="fa fa-search"></i>	
			  				</button>
			  			</div>
		  			</div>
	  			</div>
	  		</div>
	  	</div>
		<table class="display responsive" width="100%" cellspacing="0" id="projectListTable">
			<thead>
				<tr class="text-center">
					<th>Project</th>
					<th>Type</th>
					<th>Pre-Proc Conf.</th>
					<th>Posting</th>
					<th>Pre-bid Conf.</th>
					<th>E. Check</th>
					<th>Sub/Open of Bids</th>
					<th>Bid Eval.</th>
					<th>Post Qual.</th>
					<th>N.o.A.</th>
					<th>Contract Signing</th>
					<th>N.t.P.</th>
					<th>Del. Comp.</th>
					<th>Accept./Turn.</th>
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
<script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/dataTables.buttons.min.js"></script>
<script type="text/javascript">
	var projectsData, projects;
	$(document).ready(function(){
		projectsData = '<?php echo json_encode($projects, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); ?>';
		projects = JSON.parse(projectsData);
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
	});

	$('#filter_activity').on('click', function(e){
		e.preventDefault();
		var find_activity = $(this).closest('#actact').find("#choose_activity").val();

		$('#projectListTable').DataTable().destroy();

		$.ajax({
			type: 'GET',
			url: '<?php echo base_url("admin/getFilteredProcurementMonitoringStatus") ?>',
			data: { find_activity: find_activity },
			dataType: 'json'
		}).done(function(response){
			projectsData = '<?php echo json_encode($projects, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); ?>';
			projects = JSON.parse(projectsData);
			var table = $('#projectListTable').DataTable({
				data: response.projects,
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
		});
	});
</script>