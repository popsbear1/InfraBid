
<script type="text/javascript">
  var alertCount = 0;
  $(document).ready(function(){
    getAlertCount();
    if (alertCount > 0) {
      playAlert()
    }
    setInterval(getAlertCount, 180000);
  });

  function getAlertCount(){
    $.ajax({
      url: "<?php echo base_url('doctrack/getIncomingDocAlertsCount') ?>",
      dataType: 'json'
    }).done(function(response){

      $("#alertCount").html(response.alertCount);
      $('#alertHeader').html(response.alertCount + ' project documents to receive');
      if (response.alertCount > 0 && response.alertCount > alertCount) {
        alertCount = response.alertCount;
        playAlert();
      }
    })
  }

  function playAlert(){
    document.getElementById('alertSound').play();
  }

  $('#alertBtn').click(function(){
    $.ajax({
      type: 'GET',
      url: "<?php echo base_url('doctrack/getIncomingDocAlerts') ?>",
      dataType: 'json'
    }).done(function(response){
      $('#alertMenu').empty();
      for (var i = 0; i < response.alerts.length; i++) {

        $('#alertMenu').prepend(
          '<li>' +
            '<a href="#">' +
              '<div class="row">' +
                '<div class="col-lg-6 col-md-6 col-sm-6 text-center">' +
                  '<small>' + response.alerts[i]['project_title'] + '</small>' + 
                '</div>' +
                '<div class="col-lg-6 col-md-6 col-sm-6 text-center">' +
                  '<midium><b>' + response.alerts[i]['current_doc_loc'] + '</midium></b>' +
                '</div>' +
              '</div>' +
            '</a>' +
          '</li>'
        );
      }
    })
  });  
</script>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Infrastructure Projects Procurement Monitoring and Information System <?php echo date('Y');?> - PGO-IT</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-light">
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

      <li>
        <a class="btn btn-default btn-block" href="<?php echo base_url('admin/manageAccountClassifications') ?>">
          <div class="row">
            <div class="col-lg-3">
              <i class="fa fa-file"></i>
            </div>
            <div class="col-lg-9 text-left">
              Account Classifications
            </div>         
          </div>
        </a>
      </li>

      <li>
        <a class="btn btn-default btn-block" href="<?php echo base_url('admin/manageProcurementMode') ?>">
          <div class="row">
            <div class="col-lg-3">
              <i class="fa fa-list"></i>
            </div>
            <div class="col-lg-9 text-left">
              Procurement Mode
            </div>         
          </div>
        </a>
      </li>

      <li>
        <a class="btn btn-default btn-block" href="<?php echo base_url('admin/manageDatabaseView') ?>">
          <div class="row">
            <div class="col-lg-3">
              <i class="fa fa-list"></i>
            </div>
            <div class="col-lg-9 text-left">
              Database
            </div>         
          </div>
        </a>
      </li>

      <li>
        <a class="btn btn-default btn-block" href="<?php echo base_url('admin/manageUsers') ?>">
          <div class="row">
            <div class="col-lg-3">
              <i class="fa fa-users"></i>
            </div>
            <div class="col-lg-9 text-left">
              Users
            </div>         
          </div>
        </a>
      </li>

      <li>
        <a class="btn btn-default btn-block" href="<?php echo base_url('admin/manageDocumentsView') ?>">
          <div class="row">
            <div class="col-lg-3">
              <i class="fa fa-list"></i>
            </div>
            <div class="col-lg-9 text-left">
              Documents
            </div>         
          </div>
        </a>
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