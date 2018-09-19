<!-- 

script for document tracking alert

1. Upon load page: check existence of sessionData (count of alerts).
2. Get Alert count trough ajax call.
3. If sessionData count is available, compair value of alert count retrun from ajax call.
4. else if sessionData not set, get count value of ajax call and set sessionData.

 -->
<script type="text/javascript">
  $(document).ready(function(){
    sessionStorage.setItem("name", 'Reuel');
    getAlertCount();
    setInterval(getAlertCount, 180000);
  });

  function getAlertCount(){
    $.ajax({
      url: "<?php echo base_url('doctrack/getIncomingDocAlertsCount') ?>",
      dataType: 'json'
    }).done(function(response){

      $("#alertCount").html(response.alertCount);
      $('#alertHeader').html(response.alertCount + ' project documents to receive');
      if (response.alertCount > 0) {
        
        if (sessionStorage.getItem("count") != null) {
          count = parseInt(sessionStorage.getItem("count"));
          if (response.alertCount > count) {
            sessionStorage.setItem("count", response.alertCount);

            playAlert();
          } 
        }else{
          sessionStorage.setItem("count", response.alertCount);
          playAlert();
        }
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
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2018 <a href="https://adminlte.io">Infrastructure Projects Procurement Monitoring and Information System <?php echo date('Y');?> - PGO-IT</a>.</strong> All rights
    reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

</body>
</html>