<script>
	$(document).ready(function(){
		$.ajax({
			url: "<?php echo base_url('doctrack/getIncomingDocAlerts') ?>",
			dataType: 'json'
		}).done(function(response){
			for (var i = 0; i < response.length; i++) {
				console.log(response[i]['project_title']);
			}
		})
	})
</script>