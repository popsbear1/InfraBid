<style>
  .document_container{
    max-height: 500px;
    min-height: 500px;
    overflow-y: auto;
    overflow-x: hidden;
    padding: 7px 10px; 
    margin: 0 5px 0 5px;
    background: #D4BBBB;
    border: black;
  }

  .document_add{
    padding: 7px 10px; 
    margin: 0 5px 0 5px;
    text-align: right;
  }
</style>
<section class="content-header">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6">
      <a href="<?php if($this->session->userdata('user_type') == 'BAC_SEC'){ echo base_url('doctrack/docTrackView'); }else{ echo base_url('capitol/docTrackView'); } ?>" type="button" class="btn btn-warning btn-lg" >
        <i class="fa fa-arrow-left"></i>
        Back
      </a>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 text-right">
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
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
              <div style="background-color:#D76969; font-size: 25px; text-align: center; padding: 7px 10px; margin: 0 5px 0 5px;">
                <h4>Existing Project Documents</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="box-body">      
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div style="background-color:#D76969; font-size: 25px; text-align: center; padding: 7px 10px; margin: 0 5px 0 5px;">
                    <h5>Onhand Documents</h5>
                  </div>
                  <div class="document_container">
                    <form action="<?php if ($this->session->userdata('user_type' == 'BAC_SEC')){ echo base_url('doctrack/sendProjectDocuments'); }else{ echo base_url('capitol/sendProjectDocuments'); } ?>" id="sendProjectDocumentsForm" method="POST">  
                      <?php foreach ($onhand_project_documents as $onhand_document): ?>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input existingDocuments" name="project_document[]" value="<?php echo $onhand_document['project_document_id'] ?>">
                          <label class="form-check-label"><?php echo $onhand_document['document_name'] ?></label>
                        </div>
                      <?php endforeach ?>
                    </form>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div style="background-color:#D76969; font-size: 25px; text-align: center; padding: 7px 10px; margin: 0 5px 0 5px;">
                    <h5>Documents on other Departments</h5>
                  </div>
                  <div class="document_container"> 
                    <?php foreach ($other_project_documents as $other_document): ?>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input existingDocuments" name="project_document[]" value="<?php echo $other_document['project_document_id'] ?>">
                        <label class="form-check-label"><?php echo $other_document['document_name'] ?></label>
                      </div>
                    <?php endforeach ?>
                  </div>
                </div>
              </div>
              <div class="document_add">
                <button class="btn btn-default" type="button" data-toggle="modal" data-target="#addProjectDocumentModal">
                  <i class="fa fa-plus"></i>
                  Add Item
                </button>
              </div> 
            </div>
          </div>
        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
              <button class="btn btn-primary btn-lg" type="button" data-toggle="modal" data-target="#sendDocumentsModal">
                Send
              </button>
            </div>
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

  $('#documentTypeReset').click(function(){
    $('.documentTypeCheckbox').prop('checked', false);
  });
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
      <div class="modal-header" style="padding: 0 0 0 0;">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <div style="background-color:#D76969; font-size: 25px; text-align: center; padding: 7px 10px;">
              <h4 class="box-title">Project Documents Types</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="text-center">  
              <h4>FORWARDING</h4>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="text-center">  
              <h4>RECEIVING</h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="text-center">Department</th>
                  <th class="text-center">Forwarded By</th>
                  <th class="text-center">Date/Time Forwarded</th>
                  <th class="text-center">Remarks</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($forwarding_logs as $flogs): ?>
                  <tr>
                    <td><?php echo $flogs['user_type'] ?></td>
                    <td><?php echo $flogs['user_name'] ?></td>
                    <td><?php echo $flogs['log_date'] ?></td>
                    <td><?php echo $flogs['remark'] ?></td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="text-center">Department</th>
                  <th class="text-center">Received By</th>
                  <th class="text-center">Date/Time Received</th>
                  <th class="text-center">Remarks</th>   
                </tr>
              </thead>
              <tbody>
                <?php foreach ($receiving_logs as $rlogs): ?>
                  <tr>
                    <td><?php echo $rlogs['user_type'] ?></td>
                    <td><?php echo $rlogs['user_name'] ?></td>
                    <td><?php echo $rlogs['log_date'] ?></td>
                    <td><?php echo $rlogs['remark'] ?></td>
                  </tr>
                <?php endforeach ?>
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

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="addProjectDocumentModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="padding-top: 0">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12" style="background-color:#D76969; text-align: center; padding: 7px 10px;">
            <h3>Project Document Types</h3>
          </div>
        </div>
      </div>
      <div class="modal-body">
        <div class="document_container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <form  action="<?php if ($this->session->userdata('user_type') == 'BAC_SEC'){ echo base_url('doctrack/addNewProjectDocument'); }else{ echo base_url('capitol/addNewProjectDocument'); } ?>" method="POST" id="addNewProjectDocumentForm">
                <?php foreach ($document_types as $type): ?> 
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input documentTypeCheckbox" name="document_type[]" value="<?php echo $type['doc_type_id'] ?>">
                    <label class="form-check-label"><?php echo $type['doc_no'] . " - " . $type['document_name'] ?></label>
                  </div>
                <?php endforeach ?>
              </form>
            </div>
          </div>
        </div>
        <div class="document_add">
          <button class="btn btn-secondary pull-left" type="button" id="documentTypeReset">Reset</button>
          <button class="btn btn-primary" type="submit" form="addNewProjectDocumentForm">
            Add Documents  
          </button>                    
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>