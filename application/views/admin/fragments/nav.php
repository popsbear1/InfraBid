<?php 
  $username = $this->session->userdata('username');
  $sideBarControl = $this->session->userdata('sideBarControl');
?>
<body 
<?php if ($sideBarControl == 1): ?>
    class="nav-md"
<?php endif ?>
<?php if ($sideBarControl == 0): ?>
    class="nav-sm"
<?php endif ?>
>
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col" style="z-index:0;">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo base_url('admin') ?>" class="site_title"><i class="fa fa-road"></i> <span>InfraProj <?php echo date('Y');?></span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="<?php echo base_url() ?>public/images/ph-ben.gif" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <h2>Benguet Provincial Government</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br>

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>Process</h3>
              <ul class="nav side-menu">
                <li><a href="<?php echo base_url('admin/planView') ?>"><i class="fa fa-tasks"></i> Annual Procurement Plan </a></li>
                <li><a><i class="fa fa-shopping-cart"></i> Procurement Activity <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href='_addpreproc.php'>Pre-Procurement Conference</a>
                    </li>
                    <li><a href='_advertisement.php'>Advertisement</a>
                    </li>
                    <li><a href='_prebid.php'>Pre-bid Conference</a>
                    </li>
                    <li><a href='_openbid.php'>Opening of Bids</a>
                    </li>
                    <li><a href='#.php'>Add Contractor</a>
                    </li>
                    <li><a href='#.php'>Bid Price/Contract Cost</a>
                    </li>
                    <li><a href='_bideval.php'>Bid Evaluation</a>
                    </li>
                    <li><a href='_postqual.php'>Post Qualification</a>
                    </li>
                    <li><a href='_nofaward.php'>Date Awarded</a>
                    </li>
                    <li><a href='_consign.php'>Contract Signing</a>
                    </li>
                    <li><a href='_ntoproceed.php'>Notice to Proceed</a>
                    </li>
                    <li><a href='_delivery.php'>Delivery/Completion</a>
                    </li>
                    <li><a href='_acceptance.php'>Acceptance/Turnover</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#"><i class="fa fa-calendar"></i>Project Timeline</a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-file"></i>Doc Track</a>
                </li>
              </ul>
            </div>

            <div class="menu_section">
              <h3>Others</h3>
              <ul class="nav side-menu">
                <li><a href="<?php echo base_url('admin/manageConstractorsView') ?>"><i class="fa fa-users"></i> Manage Contractor</a>
                </li>
                <li><a href="<?php echo base_url('admin/manageFundsView') ?>"><i class="fa fa-money"></i> Manage Funds </a>
                </li>
                <li><a href="<?php echo base_url('admin/manageProjectTypeView') ?>"><i class="fa fa-list"></i>Manage Project Types </span></a>
                </li>
              </ul>
            </div>

            <div class="menu_section">
              <h3>Reports</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-folder-open"></i>Reports <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?php echo base_url('admin/procurementMonitoringReport') ?>"><i class="fa fa-list"></i>Procurement Monitoring Reports</a>
                    </li>
                    <li><a>Reports</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <form id="sideBarControl" action="<?php echo base_url('admin/setNavControl') ?>" method="post">
                <button class="btn" id="menu_toggle" type="submit" name="submit"><i class="fa fa-bars"></i></button>
              </form>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="<?php echo base_url() ?>public/images/user.png" alt=""><?php echo $username ?>
                </a>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="<?php echo base_url('admin/manageDatabaseView')?>">Manage Database</a>
                  </li>
                  <li><a href="<?php echo base_url('admin/manageUsers') ?>">Manage Users</a>
                  </li>
                  <li><a href="<?php echo base_url('user/logout') ?>">Log out</a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>


      <script src="<?php echo base_url() ?>public/vendors/jquery/dist/jquery.min.js"></script>

      <script>
        $('#sideBarControl').submit(function(e){
          e.preventDefault();

          var details = $(this);
          $.ajax({
            type: 'POST',
            url: details.attr('action'),
            success: function(response){

            }
          });
        })
      </script>