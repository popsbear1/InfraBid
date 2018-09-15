
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <h3 class="pull-left">Manage Observers</h3>
    </div>
  </div>
  <div class="box">
    <div class="box-header">
      <h2 class="box-title">Observers<small></small></h2>
      <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#addDocumentsModal">Add Observer</button>
    </div>
    <div class="box-body">
      <table class="table table-bordered table-striped" id="documentsTable">
        <thead>
          <tr>
            <th class="text-center">Department Name(Observers)</th>
            <th class="text-center">Status</th>
            <th class="text-center">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($observers as $observer): ?>
            <tr id="<?php echo 'observer' . $observer['observer_id'] ?>">
              <td class="text-center"><?php echo $observer['observer_dept_name'] ?></td>
              <td class="text-center"><?php echo $observer['status'] ?></td>
              <td class="text-center">
                <div class="btn-group">
                  <form method="POST" action="<?php echo base_url('admin/setCurrentObserverID') ?>">
                    <button class="btn btn-success pull-right" id="observerID" name="observerID" value="<?php echo $observer['observer_id'] ?>" type="submit">
                      <i class="fa fa-edit">Edit</i>
                    </button>
                  </form>
                </div>

                <div class="btn-group">
                  <form action="<?php echo base_url('admin/deleteObservers') ?>" method="POST" id="delete_document">
                    <input type="text" name="observer_id" value="<?php echo $observer['observer_id']?>" hidden>
                      <button class="btn btn-danger" type="submit">Delete</button>                       
                  </form>
                </div>

                <div class="btn-group">
                  <?php if ($observer['status']=='active'): ?>
                      <form action="<?php echo base_url('admin/deactivateDocumentType') ?>" method="POST">
                        <input type="text" name="observer_id" value="<?php echo $observer['observer_id'] ?>" hidden>
                      <button class="btn btn-default btn-block" name="delete" id="delete">Deactivate</button>
                    </form>                          
                  <?php endif ?>

                  <?php if ($observer['status']=='inactive'): ?>
                      <form action="<?php echo base_url('admin/activateObserver') ?>" method="POST">
                        <input type="text" name="observer_id" value="<?php echo $observer['observer_id'] ?>" hidden>
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


  <div class="modal fade" id="addDocumentsModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add New Observer</h4>
          </div>
          <div class="modal-body">
            <form id="addDocumentsForm" method="POST" class="form-horizontal form-label-left" action="<?php echo base_url('admin/addObserver') ?>">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Observer Name/Department
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" id="observer_dept_name" name="observer_dept_name" class="form-control">
                </div>
              </div>
            </form>  
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" form="addDocumentsForm">Submit</button> 
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<!-- end of modal -->

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
        <h4 class="text-center">Failed!</h4>
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
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Observer Details</h4>
      </div>
      <div class="modal-body text-center">
        <p>Successfully added observer!</p>
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
        <h5 class="modal-title" id="exampleModalLongTitle">Observer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p>Error adding observer!</p>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<script>

  var table = $('#documentsTable').DataTable({
  });

  $(document).on('submit', '#addDocumentsForm', function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: $('#addDocumentsForm').attr('action'),
      data: $('#addDocumentsForm').serialize(),
      dataType: 'json',
      success: function(response){
        if (response.success == true) {
          $('#addDocumentsModal').modal('hide');
          $('#addsuccess').modal('show');
          $('.has-error').remove();
          $('.has-success').remove();
          $('.alert-success').delay(500).show(10, function() {
            $(this).delay(3000).hide(10, function() {
              $(this).remove();
            });
          });

          var rowNode = table.row.add([
            response.observer['observer_dept_name'],
            response.observer['status'],
            '<p>Refresh To do More</p>'
          ]).draw().node();

          $(rowNode).css({
            'text-align': 'center',
            'background-color': '#c1f0c1'
          });

          $('#addDocumentsForm input').val('');
        }else if(response.success == 'failed'){
          $('#addfail').modal('show');
          $('.has-error').remove();
          $('.has-success').remove();
          $('.alert-failed').delay(500).show(10, function() {
            $(this).delay(3000).hide(10, function() {
              $(this).remove();
            });
          });
          $('#addDocumentsForm input').val('');
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

  $(document).on('submit', '#delete_document', function(e){
    e.preventDefault();

    var form_name = $(this).attr('id');
    console.log(form_name);
    var observer_id =  $(this).find("input[name='observer_id']").val();
    console.log(observer_id);
    var row_id = 'observers' + observer_id;

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
</script>s8a8ss