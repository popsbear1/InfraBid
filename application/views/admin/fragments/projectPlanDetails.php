
<section class="content">
	<div class="box box-primary">
		<div class="box-body">
			<div class="row">	
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<div class="form-group">
						<label>Project:</label>
						<p class="form-control input-sm"><?php echo $projectDetails['project_no'] . ' - ' . $projectDetails['project_title'] ?></p>
					</div>
					<div class="form-group">
						<label>Location:</label>
						<p class="form-control input-sm"><?php echo $projectDetails['barangay'] . ', ' . $projectDetails['municipality'] ?></p>
					</div>
					<div class="form-group">
						<label>Project Type:</label>
						<p class="form-control input-sm"><?php echo $projectDetails['type'] ?></p>
					</div>
					<div class="form-group">
						<label>Procurement Mode:</label>
						<p class="form-control input-sm"><?php echo $projectDetails['mode'] ?></p>
					</div>
					<div class="form-group">
						<label>ABC:</label>
						<p class="form-control input-sm"><?php echo number_format($projectDetails['abc'], 2) ?></p>
					</div>
					<div class="form-group">
						<label>Source of Fund:</label>
						<p class="form-control input-sm"><?php echo $projectDetails['source'] ?></p>
					</div>
					<div class="form-group">
						<label>Account Classification:</label>
						<p class="form-control input-sm"><?php echo $projectDetails['classification'] ?></p>
					</div>
					<div class="form-group">
						<label>Abc/PPost Date:</label>
						<p class="form-control input-sm"><?php echo $projectDetails['abc_post_date'] ?></p>  
					</div>
					<div class="form-group">
						<label>Sub/open of Date:</label>
						<p class="form-control input-sm"><?php echo $projectDetails['sub_open_date'] ?></p>  
					</div>
					<div class="form-group">
						<label>Notice of Award Date:</label>
						<p class="form-control input-sm"><?php echo $projectDetails['award_notice_date'] ?></p>  
					</div>
					<div class="form-group">
						<label>Contract Signing Date:</label>
						<p class="form-control input-sm"><?php echo $projectDetails['contract_signing_date'] ?></p>  
					</div>
				</div>