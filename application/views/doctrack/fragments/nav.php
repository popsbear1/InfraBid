<?php 
  $user_type = $this->session->userdata('user_type');
  $color = "";
  if ($user_type == 'PEO') {
    $color = 'skin-yellow-light';
  }elseif ($user_type == 'PGO') {
    $color = 'skin-red-light';
  }elseif ($user_type == 'BAC_TWG') {
    $color = 'skin-green-light';
  }elseif ($user_type == 'PPDO'){
    $color = 'skin-purple-light';
  }
?>
<body class="hold-transition <?php echo $color ?> layout-top-nav">
<div class="wrapper">
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo base_url('capitol') ?>" class="navbar-brand"><b>Capitol </b><?php echo $user_type ?></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li
            <?php if ($page == 'doctrack'): ?>
              class="active"
            <?php endif ?>
            >
              <a href="<?php echo base_url('capitol/docTrackView') ?>">Doc Track
              </a>
            </li>
            <?php if ($this->session->userdata('user_type') == 'PEO' || $this->session->userdata('user_type') == 'PPDO'): ?>
              <li 
              <?php if ($page == 'POW'): ?>
                class="active"
              <?php endif ?>
              >
                <a href="<?php echo base_url('capitol/projectListViewForPOW') ?>">Add POW
                </a>
              </li>          
            <?php endif ?>       
            <li
            <?php if ($page == 'list'): ?>
              class="active"
            <?php endif ?>
            >
              <a href="<?php echo base_url('capitol/projectListView') ?>">Add Document
              </a>
            </li>
            <li
            <?php if ($page == 'ongoing'): ?>
              class="active"
            <?php endif ?>
            >
              <a href="<?php echo base_url('capitol/ongoingDocumentTrackingView') ?>">Ongoing
              </a>
            </li>
            <li
            <?php if ($page == 'completed'):?>
              class="active"
            <?php endif?>
            >
              <a href="<?php echo base_url('capitol/completedDocumentTrackingView')?>">Completed
              </a>
            </li>
            <li
            <?php if ($page == 'disqualification'):?>
              class="active"
            <?php endif?>
            >
              <a href="<?php echo base_url('capitol/bidDisqualificationView') ?>">Disqualifications
              </a>
            </li>            
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <audio src="<?php echo base_url('public/sound/alert.mp3')?>" id="alertSound"></audio>
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

            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="<?php echo base_url() ?>uploads/default" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?php echo $this->session->userdata('first_name') . " " . $this->session->userdata('last_name') ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="<?php echo base_url() ?>uploads/default" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $this->session->userdata('first_name') . " " . $this->session->userdata('last_name') . " - " . $this->session->userdata('user_type') ?>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="<?php echo base_url('user/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <div class="content-wrapper">
    <div class="container">