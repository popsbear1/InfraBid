<?php if ($_SESSION['user_type'] !== 'BAC_SEC'){
  header('Location: ..\index.php');
} ?>
<section class="content-header">
  <h2>Manage Municipalities</h2>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="box">
        <div class="box-header">
          <h2 class="box-title">Manage Municipalities and Barangays<small></small></h2>
          <a href="<?php echo base_url('admin/addMunicipalityView') ?>" type="button" class="btn btn-primary pull-right">Add New Municipality</a>
        </div>
        <div class="box-body">
          <table class="table table-striped table-bordered" id="municipalityTable">
            <thead style='font-size:12px;'>
              <tr>
                <th class="text-center">Code</th>
                <th class="text-center">Name</th>
                <th class="text-center">Status</th>
                <th class="text-center">Edit</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($municipalities as $municipality): ?>
                <tr id="<?php echo 'municipality' . $municipality['municipality_id'] ?>">
                  <td class="text-center"><?php echo $municipality['municipality_code'] ?></td>
                  <td class="text-center"><?php echo $municipality['municipality'] ?></td>
                  <td class="text-center"><?php echo $municipality['status'] ?></td>
                  <td class="text-center">
                      <div class="btn-group">
                      <form action="<?php echo base_url('admin/setCurrentMunicipalityID') ?>" method="POST">
                        <input hidden type="text" name="municipality_id" value="<?php echo $municipality['municipality_id'] ?>">
                        <button class="btn btn-success" type="submit">
                          <i class="fa fa-edit">Edit</i>
                        </button>
                      </form>
                    </div>

                    <div class="btn-group">
                      <form action="<?php echo base_url('admin/deleteMunicipalitiesAndBarangays') ?>" method="POST" id="delete_municipality_form">
                        <input type="text" name="municipality_id" value="<?php echo $municipality['municipality_id']?>" hidden>
                          <button class="btn btn-danger" type="submit">Delete</button>                       
                      </form>
                    </div>

                    <div class="btn-group">
                      <?php if ($municipality['status']=='active'): ?>
                        <form action="<?php echo base_url('admin/deactivateMunicipalitiesAndBarangays') ?>" method="POST">
                          <input type="text" name="municipality_id" value="<?php echo $municipality['municipality_id'] ?>" hidden>
                          <button class="btn btn-default btn-block" name="delete" id="delete">Deactivate</button>
                        </form>                          
                      <?php endif ?>

                      <?php if ($municipality['status']=='inactive'): ?>
                        <form action="<?php echo base_url('admin/activateMunicipalitiesAndBarangays') ?>" method="POST">
                          <input type="text" name="municipality_id" value="<?php echo $municipality['municipality_id'] ?>" hidden>
                          <button class="btn btn-default btn-block" name="delete" id="delete">Activate</button>
                        </form>                          
                      <?php endif ?>
                    </div>                    
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="<?php echo base_url() ?>public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>public/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url() ?>public/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url() ?>public/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?>public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url() ?>public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url() ?>public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>public/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>public/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>public/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url() ?>public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url() ?>public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url() ?>public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>public/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>public/dist/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>public/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<!-- <script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script> -->

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="action_success">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="text-center">Success!</h4>
      </div>
      <div class="modal-body">
        <p class="text-center">The Data has been Removed Successfully!</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="action_failed">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="text-center">Error Occured!</h4>
      </div>
      <div class="modal-body">
        <p class="text-center">The Data has already been used! Please deactivate or activate</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="addsuccess">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Funds</h4>
      </div>
      <div class="modal-body text-center">
        <p>Successfully added Funds!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>


<!-- Modal -->
<div class="modal fade" id="addfail" tabindex="-1" role="dialog" aria-labelledby="pow_adding_warning" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Funds</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p>Error adding funds!</p>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>

  var table = $('#municipalityTable').DataTable({
  });

  $(document).on('submit', '#addMunicipalityForm', function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: $('#addMunicipalityForm').attr('action'),
      data: $('#addMunicipalityForm').serialize(),
      dataType: 'json',
      success: function(response){
        if (response.success == true) {
          $('#addFundModal').modal('hide');
          $('#addsuccess').modal('show');
          $('.has-error').remove();
          $('.has-success').remove();
          $('.alert-success').delay(500).show(10, function() {
            $(this).delay(3000).hide(10, function() {
              $(this).remove();
            });
          });

          var rowNode = table.row.add([
            response.municipality['municipality_id'],
            response.municipality['municipality_code'],
            response.municipality['municipality'],
            response.municipality['status'],
            '<p>Refresh To do More</p>'
          ]).draw().node();

          $(rowNode).css({
            'text-align': 'center',
            'background-color': '#c1f0c1'
          });

          $('#addMunicipalityForm input').val('');
        }else if(response.success == 'failed'){
          $('#addsuccess').modal('show');
          $('.has-error').remove();
          $('.has-success').remove();
          $('.alert-failed').delay(500).show(10, function() {
            $(this).delay(3000).hide(10, function() {
              $(this).remove();
            });
          });
          $('#addMunicipalityForm input').val('');
        }else{
          $.each(response.messages, function(key, value) {
            var element = $('#' + key);
            
            element.closest('div.form-group')
            .removeClass('has-error')
            .addClass(value.length > 0 ? 'has-error' : 'has-success')
            .find('.text-danger')
            .remove();
            
            element.after(value);
          });
        }
      }
    });
  });

  $(document).on('submit', '#delete_municipality_form', function(e){
    e.preventDefault();

    var form_name = $(this).attr('id');
    console.log(form_name);
    var municipality_id =  $(this).find("input[name='municipality_id']").val();
    console.log(municipality_id);
    var row_id = 'municipality' + municipality_id;

    $.ajax({
      type: 'POST',
      url: $(this).attr('action'),
      data: $(this).serialize(),
      dataType: 'json',
      success: function(response){
        if (response.success == true) {
          $('#' + row_id).remove();
          $('#action_success').modal('show');
        }else{
          $('#action_failed').modal('show');
        }
      }
    });
  });
</script>