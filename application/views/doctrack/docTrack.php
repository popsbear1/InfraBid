<?php if ($this->session->userdata('user_type') != 'BAC_SEC'): ?>
  <div class="content-wrapper">
    <div class="container">
<?php endif ?>
<section class="content">
  <div class="row">
	  <div class="col-lg-12 col-md-12">
    	<div class="row">
        <div class="col-md-12">
          <h3 class="pull-left">Project Document Tracking</h3>
        </div>
      </div>
	  	<div class="box box">
	  		<div class="row">
          <div class="col-lg-12 col-md-12" >
            <button class="btn btn-info btn-lg documentViewBtn" id="pendingDocumentsBtn"><small>Pending (For Receiving)</small></button>
            <button class="btn btn-success btn-lg documentViewBtn" id="onhandDocumentsBtn"><small>Onhand (For Forwarding)</small></button>
            <button class="btn btn-warning btn-lg documentViewBtn" id="forwardedDocumentsBtn"><small>Forwarded Documents</small></button>
          </div>
        </div>
        <div class="box-header">
          <h4 class="box-title" id="page_tittle">Pending Documents (For Receiving)</h4>
        </div>
        <div class="box-body">
          <div id="documentTableContainer">
            <div class="tableContainer" id="for_receiving_document_table">
              <table class="table table-bordered table-striped documentsTable">
                <thead>
                  <tr>
                    <th>Project Title</th>
                    <th>Location</th>
                    <th>ABC</th>
                    <th>Contractor</th>
                    <th>Source of Fund</th>
                    <th>Sender</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($pending_documents as $pending_document): ?>
                    <tr>
                      <td><?php echo $pending_document['project_title'] ?></td>
                      <td><?php echo $pending_document['project_title'] ?></td>
                      <td><?php echo $pending_document['project_title'] ?></td>
                      <td><?php echo $pending_document['project_title'] ?></td>
                      <td><?php echo $pending_document['project_title'] ?></td>
                      <td><?php echo $pending_document['current_doc_loc'] ?></td>
                      <td class="text-center">
                        <button class="btn btn-warning" data-toggle="modal" data-target="#confirmDocumentReceivalModal">
                          <i class="fa fa-get-pocket"></i> Receive
                        </button>
                        <button class="btn btn-info viewDataBtn">
                          <i class="fa fa-eye"></i> View Data
                        </button>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
            <div class="tableContainer" id="onhand_documents_table" hidden="hidden"> 
              <table class="table table-bordered documentsTable"> 
                <thead>
                  <tr>
                    <th>Project Title</th>
                    <th>Location</th>
                    <th>ABC</th>
                    <th>Contractor</th>
                    <th>Source of Fund</th>
                    <th>Sender</th>
                    <th>Action</th>
                  </tr>
                </thead> 
                <tbody>
                  <?php foreach ($onhand_documents as $onhand_document): ?>
                     <tr>
                       <td><?php echo $onhand_document['project_title'] ?></td>
                       <td><?php echo $onhand_document['project_title'] ?></td>
                       <td><?php echo $onhand_document['project_title'] ?></td>
                       <td><?php echo $onhand_document['project_title'] ?></td>
                       <td><?php echo $onhand_document['project_title'] ?></td>
                       <td><?php echo $onhand_document['previous_doc_loc'] ?></td>
                       <td class="text-center"> 
                        <form action="<?php echo base_url('doctrack/setCurrentPlanID') ?>">
                          <input type="text" name="plan_id" value="<?php echo $onhand_document['plan_id'] ?>" hidden>
                          <button class="btn btn-success" type="submit"> 
                            <i class="fa fa-plus"></i> Update 
                          </button>
                        </form> 
                        <button class="btn btn-info viewDataBtn"> 
                          <i class="fa fa-eye"></i> View Data 
                        </button> 
                      </td>
                     </tr>
                   <?php endforeach ?>  
                </tbody> 
              </table> 
            </div>
            <div class="tableContainer" id="forwarded_documents_table" hidden="hidden">
              <table class="table table-bordered documentsTable">
                <thead>
                  <tr>
                    <th>Project Title</th>
                    <th>Location</th>
                    <th>ABC</th>
                    <th>Contractor</th>
                    <th>Source of Fund</th>
                    <th>Destination</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($forwarded_documents as $forwarded_document): ?>
                    <tr>
                      <td><?php echo $forwarded_document['project_title'] ?></td>
                      <td><?php echo $forwarded_document['project_title'] ?></td>
                      <td><?php echo $forwarded_document['project_title'] ?></td>
                      <td><?php echo $forwarded_document['project_title'] ?></td>
                      <td><?php echo $forwarded_document['project_title'] ?></td>
                      <td><?php echo $forwarded_document['receiver'] ?></td>
                      <td class="text-center">
                        <button class="btn btn-success">
                          <i class="fa fa-plus"></i> Update
                        </button>
                        <button class="btn btn-info viewDataBtn">
                          <i class="fa fa-eye"></i> View Data
                        </button>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
	  	</div>
	  </div>
  </div>
</section>
<?php if ($this->session->userdata('user_type') != 'BAC_SEC'): ?>
  </div>
<?php endif ?>
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
      $('.documentsTable').DataTable();
      setButtonStyle('#pendingDocumentsBtn');
    } 
  );

  function setViewHidden(){
    $('.tableContainer').attr('hidden', false).prop('hidden', 'hidden');
  }

  function setButtonStyle(elementID){
    $('.documentViewBtn').removeAttr('style');
    $(elementID).css({'background':'#555555', 'color' : '#ffffff'});
  }

  $('#pendingDocumentsBtn').click(function(){
    $('#page_tittle').html('Pending Documents (For Receiving)');
    setViewHidden();
    setButtonStyle('#pendingDocumentsBtn');
    $('#for_receiving_document_table').removeAttr('hidden');
    
  });

  $('#onhandDocumentsBtn').click(function(){
    $('#page_tittle').html('Onhand Documents (For Forwarding)');
    setViewHidden();
    setButtonStyle('#onhandDocumentsBtn');
    $('#onhand_documents_table').removeAttr('hidden');
    
  });

  $('#forwardedDocumentsBtn').click(function(){
    $('#page_tittle').html('Forwarded Documents (Waiting to be Received)');
    setViewHidden();
    setButtonStyle('#forwardedDocumentsBtn');
    $('#forwarded_documents_table').removeAttr('hidden');
    
  });

  $(document).on('click', '.viewDataBtn', function(){
    $('#documentDetailsViewModal').modal('show');
  });


</script>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="documentDetailsViewModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="box text-center">
          <div class="box-header">
            <h2 class="box-title">
              HISTORY TRACKS
            </h2>
          </div>
          <div class="box-body">
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
        </div>     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="confirmDocumentReceivalModal">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Confirm Document Receival</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="confirmDocumentForwardModal">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Confirm Document Receival</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
