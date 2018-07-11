

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <a class="navbar-brand" href="#">Project Plan</a>
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>

              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <ul class="nav navbar-nav navbar-centered collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <li <?php if ($pageName == "timeline") { echo 'class="active"';} ?>><a href="<?php echo base_url('admin/projectTimelineView') ?>">Project Timeline</a></li>
                <li <?php if ($pageName == "activity") { echo 'class="active"';} ?>><a href="<?php echo base_url('admin/procurementActivityView') ?>">Procurement Activity</a></li>
              </ul>

              <ul class="nav navbar-nav navbar-right">
                <li <?php if ($pageName == "edit") { echo 'class="active"';} ?>><a href="<?php echo base_url('admin/editPlanView') ?>">Edit Project Details</a></li>
              </ul>
            </div><!-- /.container-fluid -->
          </nav>
        </div>
      </div>

