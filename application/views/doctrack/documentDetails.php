<style>
  .document_container{
    height: 400px;
    overflow-y: auto;
    overflow-x: hidden;
    padding: 7px 10px; 
    margin: 0 5px 0 5px;
    background: #FFFFFF;
    border-style: groove;
    border-width: 1px;
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
              <div style="background-color:#C0C0C0; font-size: 25px; text-align: center; padding: 7px 10px; margin: 0 5px 0 5px; border-width: 1px; border-style: groove;">
                <h4>Existing Project Documents</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="box-body">      
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="document_add">
                <?php if ($this->session->userdata('user_type') == 'PEO'): ?>
                  <button class="btn btn-primary pull-left" data-toggle="modal" data-target="#finishDocumentTrackingModal">
                    <i class="fa fa-check"></i>
                    For Implementation
                  </button>
                <?php endif ?>
                <?php if ($this->session->userdata('user_type') == 'BAC_SEC'): ?>
                  <a class="btn btn-primary pull-left" href="<?php echo base_url('doctrack/addProjectDocumentImages') ?>">
                    <i class="fa fa-image"></i>
                    Add Document Images
                  </a>
                <?php endif ?>
                <button class="btn btn-success" type="button" data-toggle="modal" data-target="#addProjectDocumentModal">
                  <i class="fa fa-plus"></i>
                  Add Item
                </button>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div style="background-color: #C0C0C0; font-size: 25px; text-align: center; padding: 7px 10px;margin:0 5px 0 5px; border-width: 1px;border-style: groove;">
                    <h5>Project and Contractor Details</h5>
                  </div>
                  <div style="padding: 7px 10px;margin:0 5px 0 5px; border-width: 1px;border-style: groove;">               
                    <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="form-group ">
                          <label>Project Number:</label>
                          <p class="form-control"><?php echo $projectdetails['project_no'] ?></p>
                        </div> 
                        <div class="form-group">
                            <label>Project Title:</label>
                            <p class="form-control"><?php echo $projectdetails['project_title'] ?></p>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="form-group">
                          <label>Contractor's Businessname:</label>
                          <p class="form-control"><?php echo $projectdetails['businessname'] ?></p>
                        </div>
                        <div class="form-group">
                          <label>Contractor's Name:</label>
                          <p class="form-control"><?php echo $projectdetails['owner'] ?></p>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="form-group">
                          <label>Contractor's Address:</label>
                          <p class="form-control"><?php echo $projectdetails['address'] ?></p>
                        </div>
                        <div class="form-group">
                          <label>Contact Number:</label>
                          <p class="form-control"><?php echo $projectdetails['contactnumber'] ?></p>
                        </div>
                      </div>
                    </div>
                  </div>                
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div style="background-color:#C0C0C0; font-size: 25px; text-align: center; padding: 7px 10px; margin: 0 5px 0 5px; border-width: 1px; border-style: groove;">
                    <h5>Onhand Documents</h5>
                  </div>
                  <div class="document_container">
                    <form action="<?php if ($this->session->userdata('user_type') == 'BAC_SEC'){ echo base_url('doctrack/sendProjectDocuments'); }else{ echo base_url('capitol/sendProjectDocuments'); } ?>" id="sendProjectDocumentsForm" method="POST">
                      <ul class="list-group">  
                      <?php foreach ($onhand_project_documents as $onhand_document): ?>
                        <li class="list-group-item">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input existingDocuments" name="project_document[]" value="<?php echo $onhand_document['project_document_id'] ?>">
                            <label class="form-check-label"><?php echo $onhand_document['document_name'] ?></label>
                          </div>
                        </li>
                      <?php endforeach ?>
                      </ul>
                    </form>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div style="background-color:#C0C0C0; font-size: 25px; text-align: center; padding: 7px 10px; margin: 0 5px 0 5px; border-width: 1px; border-style: groove;">
                    <h5>Documents on other Departments</h5>
                  </div>
                  <div class="document_container">
                    <ul class="list-group"> 
                      <?php foreach ($other_project_documents as $other_document): ?>
                        <li class="list-group-item">
                          <ul class="list-inline">
                            <li><?php echo $other_document['document_name'] ?></li>
                            <li class="pull-right"><?php echo $other_document['current_doc_loc'] ?></li>
                          </ul>
                        </li>
                      <?php endforeach ?>
                    </ul>
                  </div>
                </div>
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


<div class="modal fade" tabindex="-1" role="dialog" id="sendDocumentsModal">
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
              <select class="form-control" name="department" form="sendProjectDocumentsForm" required>
                <option hidden disabled selected>Choose Receiver</option>
                  <?php if ($this->session->userdata('user_type') != 'BAC_SEC'): ?>
                    <option value="BAC_SEC">BAC-SEC</option>
                  <?php endif ?>
                  <?php if ($this->session->userdata('user_type') != 'BAC_TWG'): ?>
                    <option value="BAC_TWG">BAC-TWG</option>
                  <?php endif ?>
                  <?php if ($this->session->userdata('user_type') != 'PGO'): ?>
                    <option value="PGO">PGO</option>
                  <?php endif ?>
                  <?php if ($this->session->userdata('user_type') != 'PEO'): ?>
                    <option value="PEO">PEO</option>
                  <?php endif ?>
              </select>
            </div>
            <div class="form-group">
              <label>Remarks:</label>
              <textarea class="form-control" name="forward_remark" form="sendProjectDocumentsForm" cols="30" rows="10" style="resize: none" ></textarea>
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
  <div class="modal-dialog modal-lg" style="width: 80%">
    <div class="modal-content">
      <div class="modal-header" style="padding: 0 0 0 0;">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <div style="background-color:#C0C0C0; font-size: 25px; text-align: center; padding: 7px 10px; border-style: groove;">
              <h4 class="box-title">Project Documents Types</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-7 col-md-7 col-sm-7">
            <div class="text-center">  
              <h4>FORWARDING</h4>
            </div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-5">
            <div class="text-center">  
              <h4>RECEIVING</h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 col-md-7 col-sm-7"  style="height: 500px; overflow: scroll;">
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
          <div class="col-lg-5 col-md-5 col-sm-5"  style="height: 500px; overflow: scroll;">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="text-center">Department</th>
                  <th class="text-center">Received By</th>
                  <th class="text-center">Date/Time Received</th>  
                </tr>
              </thead>
              <tbody>
                <?php foreach ($receiving_logs as $rlogs): ?>
                  <tr>
                    <td><?php echo $rlogs['user_type'] ?></td>
                    <td><?php echo $rlogs['user_name'] ?></td>
                    <td><?php echo $rlogs['log_date'] ?></td>
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
          <div class="col-lg-12 col-md-12 col-sm-12" style="background-color:#C0C0C0; text-align: center; padding: 7px 10px; border-width: 1px;">
            <h3>Project Document Types</h3>
          </div>
        </div>
      </div>
      <div class="modal-body">
        <div class="document_container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <form  action="<?php if ($this->session->userdata('user_type') == 'BAC_SEC'){ echo base_url('doctrack/addNewProjectDocument'); }else{ echo base_url('capitol/addNewProjectDocument'); } ?>" method="POST" id="addNewProjectDocumentForm">
                <ul class="list-group">
                <?php foreach ($document_types as $type): ?> 
                  <div class="list-group-item">
                    <input type="checkbox" class="form-check-input documentTypeCheckbox" name="document_type[]" value="<?php echo $type['doc_type_id'] ?>">
                    <label class="form-check-label"><?php echo $type['doc_no'] . " - " . $type['document_name'] ?></label>
                  </div>
                <?php endforeach ?>
                </ul>
              </form>
            </div>
          </div>
        </div>
        <div class="document_add">
          <button class="btn btn-default pull-left" type="button" id="documentTypeReset">Reset</button>
          <button class="btn btn-primary" type="submit" form="addNewProjectDocumentForm">
            Add Documents  
          </button>                    
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="finishDocumentTrackingModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <form action="<?php echo base_url('doctrack/markProjectForImplementation') ?>" method="POST" id="markProjectForImplementationForm" >
              <div class="form-group">
                <label>Remarks:</label>
                <textarea class="form-control" name="remark_for_implementation" form="markProjectForImplementationForm" cols="30" rows="10" style="resize: none" ></textarea>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" form="markProjectForImplementationForm">Confirm</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
