<style>
  div #project_documents_container{
    max-height: 500px;
    overflow-y: scroll;
    overflow-x: hidden;  
  }
</style>
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Project Document Records</h3>
        </div>
        <div class="box-body">
          <div id="project_documents_container">
            <div class="row">
              <div class="col-sm-3 col-md-3 col-lg-3">
                
              </div>
              <div class="col-sm-3 col-md-3 col-lg-3">
                
              </div>
              <div class="col-sm-3 col-md-3 col-lg-3">
                
              </div>
            </div>
            <form action="<?php echo base_url('doctrack/manageProjectDocuments') ?>" id="sendProjectDocuments" method="POST">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <?php foreach ($project_documents as $document): ?>
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input existingDocuments" name="project_document[]" value="<?php echo $document['project_document_id'] ?>">
                          <label class="form-check-label"><?php echo $document['document_name'] ?></label>
                        </div>
                      </div>
                    </div>
                  <?php endforeach ?>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <?php foreach ($document_types as $type): ?> 
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" name="document_type[]" value="<?php echo $type['doc_type_id'] ?>">
                          <label class="form-check-label"><?php echo $type['doc_no'] . " - " . $type['document_name'] ?></label>
                        </div>
                      </div>
                    </div>
                  <?php endforeach ?>          
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="form-group">
                        <label>Department:</label>
                        <select class="form-control" name="department">
                          <option hidden disabled selected>Choose Receiver</option>
                          <option value="BAC_SEC">BAC-SEC</option>
                          <option value="BAC_TWG">BAC-TWG</option>
                          <option value="PGO">PGO</option>
                          <option value="PEO">PEO</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Remarks:</label>
                        <textarea class="form-control" name="forward_remark"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="box-footer text-center">
          <button class="btn btn-primary" form="sendProjectDocuments" type="submit">
            Submit
          </button>
        </div>
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
<script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(document).ready( 
    function () {
      $('.existingDocuments').prop('checked', true);
    } 
  );
</script>
