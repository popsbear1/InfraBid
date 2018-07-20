<?php 
  $sideBarControl = $this->session->userdata('sideBarControl');
?>
<body 
<?php if ($sideBarControl == 1): ?>
    class="hold-transition skin-blue sidebar-mini"
<?php endif ?>
<?php if ($sideBarControl == 0): ?>
    class="hold-transition skin-blue sidebar-mini sidebar-collapse"
<?php endif ?>
>
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="<?php echo base_url('admin') ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>I</b>PB</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Infra</b>PB</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a id="sideBarControl" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success">4</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 4 messages</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li><!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <img src="<?php echo base_url() ?>uploads/default" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          Support Team
                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <!-- end message -->
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="<?php echo base_url() ?>uploads/default" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          AdminLTE Design Team
                          <small><i class="fa fa-clock-o"></i> 2 hours</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          Developers
                          <small><i class="fa fa-clock-o"></i> Today</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          Sales Department
                          <small><i class="fa fa-clock-o"></i> Yesterday</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          Reviewers
                          <small><i class="fa fa-clock-o"></i> 2 days</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">See All Messages</a></li>
              </ul>
            </li>
            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                        page and may cause design problems
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-red"></i> 5 new members joined
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-user text-red"></i> You changed your username
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- Tasks: style can be found in dropdown.less -->
            <li class="dropdown tasks-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">9</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 9 tasks</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li><!-- Task item -->
                      <a href="#">
                        <h3>
                          Design some buttons
                          <small class="pull-right">20%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">20% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                    <li><!-- Task item -->
                      <a href="#">
                        <h3>
                          Create a nice theme
                          <small class="pull-right">40%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">40% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                    <li><!-- Task item -->
                      <a href="#">
                        <h3>
                          Some task I need to do
                          <small class="pull-right">60%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                    <li><!-- Task item -->
                      <a href="#">
                        <h3>
                          Make beautiful transitions
                          <small class="pull-right">80%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">80% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                  </ul>
                </li>
                <li class="footer">
                  <a href="#">View all tasks</a>
                </li>
              </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url() ?>uploads/default" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $this->session->userdata('first_name') . " " . $this->session->userdata('last_name') ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo base_url() ?>uploads/default" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $this->session->userdata('first_name') . " " . $this->session->userdata('last_name') . " - " . $this->session->userdata('user_type') ?>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo base_url('user/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo base_url() ?>public/images/ph-ben.gif" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Benguet Provincial</p>
            <p>Government</p>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                  <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                  </button>
                </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">PROCESS</li>
          <li>
            <a href="<?php echo base_url('admin/addPlanView') ?>">
              <i class="fa fa-plus"></i> <span>Add Plan</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('admin/annualPlanView') ?>">
              <i class="fa fa-tasks"></i> <span>Project Plan</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('admin/supplementalPlanView') ?>"><i class="fa fa-tasks">
              </i> <span>Supplemental Plan</span>
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-shopping-cart"></i>
              <span>Procurement Activity</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class=treeview-menu>
              <li><a href='<?php echo base_url('admin/preProcurementConferenceView') ?>'>Pre-Procurement Conference</a>
              </li>
              <li><a href='<?php echo base_url('admin/advertisementView') ?>'>Advertisement</a>
              </li>
              <li><a href='<?php echo base_url('admin/preBidConferenceView') ?>'>Pre-bid Conference</a>
              </li>
              <li><a href='<?php echo base_url('admin/eligibilityCheckView') ?>'>Eligibility Check</a>
              </li>
              <li><a href='<?php echo base_url('admin/subOpenBidsView') ?>'>Sub/Open of Bids</a>
              </li>
              <li><a href='<?php echo base_url('admin/bidEvaluationView') ?>'>Bid Evaluation</a>
              </li>
              <li><a href='<?php echo base_url('admin/postQualificationView') ?>'>Post Qualification</a>
              </li>
              <li><a href='<?php echo base_url('admin/noticeOfAwardView') ?>'>Notice of Award</a>
              </li>
              <li><a href='<?php echo base_url('admin/contractSigningView') ?>'>Contract Signing</a>
              </li>
              <li><a href='<?php echo base_url('admin/noticeToProceedView') ?>'>Notice to Proceed</a>
              </li>
              <li><a href='<?php echo base_url('admin/deliveryCompletionView') ?>'>Delivery/Completion</a>
              </li>
              <li><a href='<?php echo base_url('admin/acceptanceTurnoverView') ?>'>Acceptance/Turnover</a>
              </li>
            </ul>
          </li>
          <li class="header">Document Management</li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-file"></i>
              <span>Document Tracking</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="<?php echo base_url('doctrack/projectListViewForPOW') ?>">
                  <i class="fa fa-file"></i> <span>Add POW</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('doctrack/projectListView') ?>">
                  <i class="fa fa-file"></i> <span>Add Document</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('doctrack/docTrackView') ?>">
                  <i class="fa fa-file"></i> <span>Doc Track</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="header">Others</li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-laptop"></i>
              <span>Reports</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url('admin/procurementMonitoringReport') ?>"><i class="fa fa-list"></i>Monitoring Reports</a>
              </li>
              <li><a href="<?php echo base_url('admin/procurementTimelineReport') ?>"><i class="fa fa-list"></i>Timeline Reports</a>
              </li>
            </ul>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">

      
    <script src="<?php echo base_url() ?>public/bower_components/jquery/dist/jquery.min.js"></script>

    <script>
      $('#sideBarControl').click(function(e){
        e.preventDefault();

        var details = $(this);
        $.ajax({
          type: 'POST',
          url: '<?php echo base_url('admin/setNavControl') ?>',
          success: function(response){

          }
        });
      })
    </script>