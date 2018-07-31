
<script>
  $(document).ready(function(){
    setInterval(getAlerts, 5000);
  });

  function getAlerts(){
    $.ajax({
      type: 'GET',
      url: "<?php echo base_url('doctrack/getIncomingDocAlerts') ?>",
      dataType: 'json',
      success: function(response){
        for (var i = 0; i < response.alerts.length; i++) {
          console.log(response.alerts[i]['project_title']);
        }
      }
    })
  }
</script>