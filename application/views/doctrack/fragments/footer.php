
<script type="text/javascript">
  $(document).ready(function(){
    getAlertCount();
    setInterval(getAlertCount, 180000);
  });

  function getAlertCount(){
    $.ajax({
      url: "<?php echo base_url('doctrack/getIncomingDocAlertsCount') ?>",
      dataType: 'json'
    }).done(function(response){

      $("#alertCount").html(response.alertCount);
      $('#alertHeader').html(response.alertCount + ' project documents to receive')
    })
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
      <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

</body>
</html>