
<section class="content">
	<div class="box box-primary">
		<div class="box-body">
			<div class="row">	
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<div class="form-group">
						<label for="">Project Number:</label>
						<p class="form-control"><?php echo $projectDetails['project_no'] ?></p>
					</div>
					<div class="form-group">
						<label for="">Project Title:</label>
						<p class="form-control"><?php echo $projectDetails['project_title'] ?></p>
					</div>
					<div class="form-group">
						<label for="">Municipality:</label>
						<p class="form-control"><?php echo $projectDetails['municipality_code'] . ' - ' . $projectDetails['municipality'] ?></p>
					</div>
					<div class="form-group">
						<label for="">Barangay:</label>
						<p class="form-control"><?php echo $projectDetails['barangay_code'] . ' - ' . $projectDetails['barangay'] ?></p>
					</div>
					<div class="form-group">
						<label for="">Project Type:</label>
						<p class="form-control"><?php echo $projectDetails['type'] ?></p>
					</div>
					<div class="form-group">
						<label for="">Procurement Mode:</label>
						<p class="form-control"><?php echo $projectDetails['mode'] ?></p>
					</div>
					<div class="form-group">
						<label for="">ABC:</label>
						<p class="form-control"><?php echo number_format($projectDetails['abc'], 2) ?></p>
					</div>
					<div class="form-group">
						<label for="">Source of Fund:</label>
						<p class="form-control"><?php echo $projectDetails['source'] ?></p>
					</div>
					<div class="form-group">
						<label for="">Account Classification:</label>
						<p class="form-control"><?php echo $projectDetails['classification'] ?></p>
					</div>
				</div>