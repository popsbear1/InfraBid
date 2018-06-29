  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Infrastructure Projects Procurement Monitoring and Information System <?php echo date('Y');?> - PGO-IT</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a class="text-center">Manage</a></li>
    </ul>

    <ul class="sidebar-menu" data-widget="tree">
      <li>
        <a class="btn btn-default btn-block" href="<?php echo base_url('admin/manageContractorsView') ?>">
          <div class="row">
            <div class="col-lg-3">
              <i class="fa fa-users"></i>
            </div>
            <div class="col-lg-9 text-left">
              Contractor
            </div>         
          </div>
        </a>
      </li>
      <li>
        <a class="btn btn-default btn-block" href="<?php echo base_url('admin/manageFundsView') ?>">
          <div class="row">
            <div class="col-lg-3">
              <i class="fa fa-money"></i>
            </div>
            <div class="col-lg-9 text-left">
              Funds
            </div>         
          </div>
        </a>
      </li>

      <li>
        <a class="btn btn-default btn-block" href="<?php echo base_url('admin/manageProjectTypeView') ?>">
          <div class="row">
            <div class="col-lg-3">
              <i class="fa fa-list"></i>
            </div>
            <div class="col-lg-9 text-left">
              Project Types
            </div>         
          </div>
        </a>
      </li>

      <li>
        <a class="btn btn-default btn-block" href="<?php echo base_url('admin/manageMunicipalitiesAndBarangays') ?>">
          <div class="row">
            <div class="col-lg-3">
              <i class="fa fa-list"></i>
            </div>
            <div class="col-lg-9 text-left">
              Municipalities
            </div>         
          </div>
        </a>
      </li>            
<!-- 
      <li><a href="<?php echo base_url('admin/manageFundsView') ?>"><i class="fa fa-money"></i>Funds</a>
      </li>
      <li><a href="<?php echo base_url('admin/manageProjectTypeView') ?>"><i class="fa fa-list"></i>Project Types</a>
      </li>
      <li><a href="<?php echo base_url('admin/manageMunicipalitiesAndBarangays') ?>"><i class="fa fa-list"></i>Municipalities</a>
      </li> -->
      <li>
        <a href="<?php echo base_url('admin/manageAccountClassifications') ?>"><i class="fa fa-file"></i>Account Classifications</a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/manageProcurementMode') ?>"><i class="fa fa-list"></i> Procurement Mode</a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/manageDatabaseView')?>"><i class="fa fa-list"></i> Database</a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/manageUsers') ?>"><i class="fa fa-users"></i> Users</a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/manageDocumentsView') ?>"><i class="fa fa-file"></i> Documents </a>;
      </li>
    </ul>

  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
   <div class="control-sidebar-bg"></div>
 </div>

</body>
</html>