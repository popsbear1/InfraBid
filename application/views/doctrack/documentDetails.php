<style>
  .document_container{
    max-height: 500px;
    min-height: 500px;
    overflow-y: auto;
    overflow-x: hidden;
    padding: 7px 10px; 
    margin: 0 5px 0 5px;
    background: #D4BBBB;
  }
</style>
<section class="content-header">
  <div class="row">
    <div class="col-lg-6">
      <h2>Project Document</h2>
    </div>
    <div class="col-lg-6 text-right">
      <button class="btn btn-lg btn-info" data-target="#projectDocumentHistoryModal" data-toggle="modal" >
        History
        <i class="fa fa-list"></i>    
      </button>
    </div>
  </div>
</section>
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
      <div class="box">
        <div class="box-header">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6 text-center">
              <div style="background-color:#D76969; font-size: 25px; text-align: center; padding: 7px 10px; margin: 0 5px 0 5px;">
                <h4 class="box-title">Project Documents</h4>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 text-center">
              <div style="background-color:#D76969; font-size: 25px; text-align: center; padding: 7px 10px; margin: 0 5px 0 5px;">
                <h4 class="box-title">Project Documents Types</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="box-body">      
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="document_container">
                <form action="<?php echo base_url('doctrack/sendProjectDocuments') ?>" id="sendProjectDocumentsForm" method="POST">  
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
                </form>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top: 15px">
                  <button class="btn btn-primary pull-right" type="button" data-toggle="modal" data-target="#sendDocumentsModal">
                    Send
                  </button>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="document_container">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <form action="<?php echo base_url('doctrack/addNewProjectDocument') ?>" method="POST" id="addNewProjectDocumentForm">
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
                    </form>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top: 15px">
                  <button class="btn btn-secondary" type="button">Reset</button>
                  <button class="btn btn-primary pull-right" type="submit" form="addNewProjectDocumentForm">
                    Add Documents  
                  </button>                    
                </div>
              </div>          
            </div>
          </div>
        </div>
        <div class="box-footer text-center">
          
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


<div class="modal" tabindex="-1" role="dialog" id="sendDocumentsModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Send Documents</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="form-group">
              <label>Department:</label>
              <select class="form-control" name="department" form="sendProjectDocumentsForm">
                <option hidden disabled selected>Choose Receiver</option>
                <option value="BAC_SEC">BAC-SEC</option>
                <option value="BAC_TWG">BAC-TWG</option>
                <option value="PGO">PGO</option>
                <option value="PEO">PEO</option>
              </select>
            </div>
            <div class="form-group">
              <label>Remarks:</label>
              <textarea class="form-control" name="forward_remark" form="sendProjectDocumentsForm"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" form="sendProjectDocumentsForm">Confirm</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="projectDocumentHistoryModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Project Document History</h5>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4>FORWARDING</h4>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4>RECEIVING</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="text-center">Department</th>
                  <th class="text-center">Date/Time Received</th>
                  <th class="text-center">Received By</th>
                  <th class="text-center">Remarks</th>
                  <th class="text-center">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="text-center">Department</th>
                  <th class="text-center">Forwarded By</th>
                  <th class="text-center">Forwarded To</th>
                  <th class="text-center">Forward (Remarks)</th>  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>