
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12">
      <h3 class="pull-left">Edit Document Details</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <a href="<?php echo base_url('admin/manageDocumentsView') ?>" class="btn btn-success">
        <i class="fa fa-arrow-left"></i>
        Back
      </a>
    </div>
  </div>
  <div class="box">
    <div class="box-header">
      <h2 class="box-title">Edit Document<small></small></h2>
    </div> 
    <div class="box-body">
      <?php if (isset($_SESSION['success'])): ?>
        <div class="alert alert-success text-center">
          <p><?php echo $_SESSION['success'] ?></p>
        </div>
      <?php endif ?>
      <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-warning text-center">
          <p><?php echo $_SESSION['error'] ?></p>
        </div>
      <?php endif ?>
      <form id="editDocumentsForm" method="POST" class="form-horizontal" action="<?php echo base_url('admin/editDocument') ?>">
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Document Number<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" step="any"  id="doc_no" name="doc_no" class="form-control col-md-7 col-xs-12" placeholder="<?php echo $documentDetail['doc_no'] ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Document Name<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" step="any"  id="document_name" name="document_name" class="form-control col-md-7 col-xs-12" placeholder="<?php echo $documentDetail['document_name'] ?>">
          </div>
        </div>
      </form>
    </div>
    <div class="box-footer text-center">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editDocumentModal">Submit</button> 
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
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>public/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>public/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>public/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(document).ready(function() {
    $('#editDocumentModal').on('show.bs.modal' , function (e) {
      $('#documentnumber').html($('#doc_no').val());
      $('#documentname').html($('#document_name').val());
    });
  });
</script>


    <!-- modal for data confirmation -->
    <div id="editDocumentModal" class="modal fade" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Confirm Input Values</h4>
          </div>
          <div class="modal-body">
            <table class='table table-striped table-bordered' style='font-size:13px;'>
              <thead>
                <tr >
                  <th style='text-align: center'>Attributes</th>
                  <th style='text-align: center'>Values</th>
                </tr> 
              </thead>
              <tbody>
                <tr>
                  <td>Document Number</td>
                  <td><span id="documentnumber"></span></td>
                </tr>
                <tr>
                  <td>Document Name</td>
                  <td><span id="documentname"></span></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" form="editDocumentsForm" name="submit" class="btn btn-primary">Confirm</button>
          </div>
        </div>
      </div>
    </div>
    <!-- end of modal -->