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
        <audio src="<?php echo base_url('public/sound/alert.mp3')?>" id="alertSound"></audio>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown notifications-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" id="alertBtn" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-success" id="alertCount"></span>
              </a>
              <ul class="dropdown-menu">
                <li class="header text-center" id="alertHeader"></li>
                <li class="header">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 text-center">
                      <small class="fa fa-tasks"> Project Name</small>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 text-center">
                      <small class="fa fa-user"> Sender</small>
                    </div>
                  </div>
                </li>
                <li>
                  <!-- inner menu: contains the messages -->
                  <ul class="menu" id="alertMenu">
                    <li><!-- start message -->
                      
                    </li>
                    <!-- end message -->
                  </ul>
                  <!-- /.menu -->
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
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">PROCESS</li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-list"></i>
              <span>APP View</span>
              <span class="pull-right-container">
                <i class="fa fa-cogs"></i>
              </span>
            </a>
            <ul class=treeview-menu>
              <li><a href="<?php echo base_url('admin/regularPlanListView') ?>">Regular Plan</a></li>
              <li><a href="<?php echo base_url('admin/supplementalPlanListView') ?>">Supplemental Plan</a></li>
            </ul>
          </li>
          <li>
            <a href="<?php echo base_url('admin/ongoingProjectPlanView') ?>">
              <i class="fa fa-tasks"></i> <span>For Procurement</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('admin/procActStatusView') ?>">
              <i class="fa fa-list"></i> <span>Project Status Check</span>
            </a>
          </li>
          <li class="header">Document Management</li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-file"></i>
              <span>Document</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="<?php echo base_url('doctrack/docTrackView') ?>">
                  <i class="fa fa-file"></i> <span>Doc Track</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('doctrack/projectListView') ?>">
                  <i class="fa fa-file"></i> <span>Add Document</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('doctrack/ongoingDocumentTrackingView') ?>">
                  <i class="fa fa-file"></i> <span>Ongoing</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('doctrack/completedDocumentTrackingView') ?>">
                <i class="fa fa-file"></i> <span>Completed</span>
                </a>               
              </li>
              <li>
                <a href="<?php echo base_url('doctrack/bidDisqualificationView') ?>">
                <i class="fa fa-file"></i> <span>Disqualification</span>
                </a>               
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