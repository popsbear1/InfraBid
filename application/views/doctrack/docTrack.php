
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
            <div class="tableContainer  table-responsive no-pading" id="for_receiving_document_table">
              <table class="table table-bordered table-striped table-hover documentsTable">
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
                    <tr id="<?php echo 'receive' . $pending_document['plan_id'] ?>">
                      <td class="text-center"><?php echo $pending_document['project_title'] ?></td>
                      <td class="text-center"><?php echo $pending_document['municipality'] . ', ' . $pending_document['barangay'] ?></td>
                      <td class="text-center"><?php echo number_format($pending_document['abc'], 2) ?></td>
                      <td class="text-center"><?php echo $pending_document['businessname'] ?></td>
                      <td class="text-center"><?php echo $pending_document['source'] ?></td>
                      <td class="text-center"><?php echo $pending_document['current_doc_loc'] ?></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <button class="btn btn-warning receiveProjectDocumentBtn" type="button" value="<?php echo $pending_document['plan_id'] . ',' . $pending_document['current_doc_loc'] ?>" >
                            <i class="fa fa-get-pocket"></i> Receive
                          </button>
                          <button class="btn btn-info viewDocumentDataBtn" type="button" value="<?php echo $pending_document['plan_id'] . ',' . $pending_document['current_doc_loc'] . ',' . $pending_document['receiver'] . ',' . 'pending' ?>">
                            <i class="fa fa-eye"></i> View
                          </button>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
            <div class="tableContainer table-responsive no-pading" id="onhand_documents_table" hidden="hidden"> 
              <table class="table table-bordered table-striped table-hover documentsTable"> 
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
                        <td class="text-center"><?php echo $onhand_document['project_title'] ?></td>
                        <td class="text-center"><?php echo $onhand_document['municipality'] . ', ' . $onhand_document['barangay'] ?></td>
                        <td class="text-center"><?php echo number_format($onhand_document['abc'], 2) ?></td>
                        <td class="text-center"><?php echo $onhand_document['businessname'] ?></td>
                        <td class="text-center"><?php echo $onhand_document['source'] ?></td>
                        <td class="text-center"><?php echo $onhand_document['previous_doc_loc'] ?></td>
                        <td class="text-center">
                          <div class="btn-group">
                            <form action="<?php if ($this->session->userdata('user_type') == 'BAC_SEC'){ echo base_url('docTrack/setCurrentPlanID');}else{ echo base_url('capitol/setCurrentPlanID'); } ?>"   method="POST">
                              <input type="text" name="plan_id" value="<?php echo $onhand_document['plan_id'] ?>" hidden>
                              
                                <button class="btn btn-success" type="submit"> 
                                  <i class="fa fa-plus"></i>Update
                                </button>
                                <button class="btn btn-info viewDocumentDataBtn" type="button" value="<?php echo $onhand_document['plan_id'] . ',' . $onhand_document['current_doc_loc'] . ',' . $onhand_document['receiver'] . ',' . 'onhand' ?>">
                                  <i class="fa fa-eye"></i>View
                                </button>     
                            </form>
                          </div> 
                        </td>
                     </tr>
                   <?php endforeach ?>  
                </tbody> 
              </table> 
            </div>
            <div class="tableContainer  table-responsive no-pading" id="forwarded_documents_table" hidden="hidden">
              <table class="table table-bordered table-striped table-hover documentsTable">
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
                    <tr id="<?php echo 'forwarded' . $forwarded_document['plan_id'] ?>">
                      <td class="text-center"><?php echo $forwarded_document['project_title'] ?></td>
                      <td class="text-center"><?php echo $forwarded_document['municipality'] . ', ' . $forwarded_document['barangay'] ?></td>
                      <td class="text-center"><?php echo number_format($forwarded_document['abc'], 2) ?></td>
                      <td class="text-center"><?php echo $forwarded_document['businessname'] ?></td>
                      <td class="text-center"><?php echo $forwarded_document['source'] ?></td>
                      <td class="text-center"><?php echo $forwarded_document['receiver'] ?></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <button class="btn btn-default cancelDocumentForwardBtn" type="button" value="<?php echo $forwarded_document['plan_id'] . ',' . $forwarded_document['current_doc_loc'] . ',' . $forwarded_document['receiver'] ?>">
                            <i class="fa fa-close"></i>Cancel
                          </button>
                          <button class="btn btn-info viewDocumentDataBtn" type="button" value="<?php echo $forwarded_document['plan_id'] . ',' . $forwarded_document['current_doc_loc'] . ',' . $forwarded_document['receiver'] . ',' . 'forwarded' ?>">
                            <i class="fa fa-eye"></i>View
                          </button>
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

  $(document).on('click', '.viewPendingDocumentDataBtn', function(){
    $('#documentDetailsViewModal').modal('show');
  });

  $(document).on('click', '.viewDocumentDataBtn', function(){
    

    $('#forwardingLogTable').DataTable().destroy();
    $('#receivingLogTable').DataTable().destroy();
    $('#documentTableModal').DataTable().destroy();

    var document_details = $(this).val().split(',');

    if (document_details[3] == 'pending') {
      $('#documentHeader').html('Incomming Documents List');
    }

    if (document_details[3] == 'onhand') {
      $('#documentHeader').html('Onhand Documents List');
    }

    if (document_details[3] == 'forwarded') {
      $('#documentHeader').html('Forwarded Documents List');  
    }

    $.ajax({
      type: 'POST',
      url: '<?php echo base_url("doctrack/getProjectDocumentHistory") ?>',
      data: { plan_id: document_details[0], current_doc_loc: document_details[1], receiver: document_details[2], type: document_details[3]},
      dataType: 'json',
      success: function(response){

        $('#documentTableModal').DataTable({
          data: response.documents,
          columns: [
              { data: 'doc_no' },
              { data: 'document_name' },
              { data: 'previous_doc_loc' },
              { data: 'current_doc_loc' },
              { data: 'receiver' }
          ],
          'paging'      : false,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : true,
          'info'        : false,
          'autoWidth'   : false
        });

        $('#forwardingLogTable').DataTable( {
            data: response.forwarding_logs,
            columns: [
                { data: 'user_type' },
                { data: 'user_name' },
                { data: 'log_date' },
                { data: 'remark' }
            ],
            'paging'      : false,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : false,
            'autoWidth'   : false
        } );

        $('#receivingLogTable').DataTable( {
            data: response.receiving_logs,
            columns: [
                { data: 'user_type' },
                { data: 'user_name' },
                { data: 'log_date' },
                { data: 'remark' }
            ],
            'paging'      : false,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : false,
            'autoWidth'   : false
        } );
      }
    });

    $('#documentDetailsViewModal').modal('show');

  });


</script>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="documentDetailsViewModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
              <h2 style="background-color:#C0C0C0; text-align: center; padding: 7px 10px;" id="documentHeader">
                Documents
              </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <table class="table table-bordered table-striped" id="documentTableModal">
              <thead>
                <tr>
                  <th>Doc No.</th>
                  <th>Doc Name</th>
                  <th>Previous Holder</th>
                  <th>Current Holder</th>
                  <th>Receiver</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
              <h2 style="background-color:#C0C0C0; text-align: center; padding: 7px 10px;">
                HISTORY TRACKS
              </h2>
          </div>
        </div>
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
            <table class="table table-bordered table-striped" id="forwardingLogTable">
              <thead>
                <tr>
                  <th class="text-center">Department</th>
                  <th class="text-center">Forwarded By</th>
                  <th class="text-center">Date/Time Forwarded</th>
                  <th class="text-center">Remarks</th>
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
          <div class="col-lg-6 col-md-6 col-sm-6">
            <table class="table table-bordered table-striped" id="receivingLogTable">
              <thead>
                <tr>
                  <th class="text-center">Department</th>
                  <th class="text-center">Received By</th>
                  <th class="text-center">Date/Time Received</th>
                  <th class="text-center">Remarks</th>  
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
        <p class="text-center">Confirm Document Receival</p>
        <div class="alert alert-success" hidden="hidden" id="receiveDocumentSuccessAlert">
          <h4><i class="icon fa fa-check"></i> Alert!</h4>
          <p>Receive Document Success!</p>
        </div>
        <div class="alert alert-warning" hidden="hidden" id="receiveDocumentFailedAlert">
          <h4><i class="icon fa fa-check"></i> Alert!</h4>
          <p>Document Receival Failed!</p>
          <p>Document Forwarding Cancelled!</p>
        </div>
        <form action="<?php if ($this->session->userdata('user_type') == 'BAC_SEC'){ echo base_url('docTrack/receiveDocument');}else{ echo base_url('capitol/receiveDocument'); } ?>" method="POST" id="receiveDocumentForm">
          <input type="text" name="plan_id" id="receive_plan_id" hidden>
          <input type="text" name="sender" id="receive_sender" hidden>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" form="receiveDocumentForm" class="btn btn-primary">Confirm</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>

  $(document).on('click', '.receiveProjectDocumentBtn', function(){
    var project_document_details = $(this).val().split(',');

    $('#receive_plan_id').val(project_document_details[0]);
    $('#receive_sender').val(project_document_details[1]);

    $('#confirmDocumentReceivalModal').modal('show');    
  });

  $('#receiveDocumentForm').submit(function(e){
    e.preventDefault();
    $('#receiveDocumentSuccessAlert').prop('hidden', 'hidden');
    $('#receiveDocumentFailedAlert').prop('hidden', 'hidden');
    var plan_id = $('#receive_plan_id').val();
    var row_name = '#receive' + plan_id;
    $.ajax({
      type: 'POST',
      url: $(this).attr('action'),
      data: $('#receiveDocumentForm').serialize(),
      dataType: 'json',
      success: function(response){
        if (response.success == true) {
          $(row_name).remove();
          $('#receiveDocumentSuccessAlert').prop('hidden', false);
        }else{
          $(row_name).remove();
          $('#receiveDocumentFailedAlert').prop('hidden', false);
        }
      }
    });
  })
</script>


<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="confirmDocumentForwardCancelModal">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Cancellation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center">Confirm Forwarding Cancellation</p>
        <div class="alert alert-success" hidden="hidden" id="cancelForwardSuccessAlert">
          <h4><i class="icon fa fa-check"></i> Alert!</h4>
          <p>Cancel Forward Success!</p>
        </div>
        <div class="alert alert-warning" hidden="hidden" id="cancelForwardFailedAlert">
          <h4><i class="icon fa fa-check"></i> Alert!</h4>
          <p>Cancel Forward Failed!</p>
          <p>Documents Already Received!</p>
        </div>
        <form action="<?php if ($this->session->userdata('user_type') == 'BAC_SEC'){ echo base_url('docTrack/cancelDocumentForward');}else{ echo base_url('capitol/cancelDocumentForward'); } ?>" method="POST" id="cancelDocumentForwardForm">
          <input type="text" name="plan_id" id="forwarded_plan_id" hidden>
          <input type="text" name="current_doc_loc" id="forwarded_current_doc_loc" hidden>
          <input type="text" name="receiver" id="forwarded_receiver" hidden>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" form="cancelDocumentForwardForm" class="btn btn-primary">Confirm</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).on('click', '.cancelDocumentForwardBtn', function(){
    $('#confirmDocumentForwardCancelModal').modal('show');
    var forwarded_document_details = $(this).val().split(',');

    $('#forwarded_plan_id').val(forwarded_document_details[0]);
    $('#forwarded_current_doc_loc').val(forwarded_document_details[1]);
    $('#forwarded_receiver').val(forwarded_document_details[2]);
  })

  $('#cancelDocumentForwardForm').submit(function(e){
    e.preventDefault();
    $('#cancelForwardSuccessAlert').prop('hidden', 'hidden');
    $('#cancelForwardFailedAlert').prop('hidden', 'hidden');
    var plan_id = $('#forwarded_plan_id').val();
    var row_name = '#forwarded' + plan_id;
    $.ajax({
      type: 'POST',
      url: $(this).attr('action'),
      data: $('#cancelDocumentForwardForm').serialize(),
      dataType: 'json',
      success: function(response){
        if (response.success == true) {
          $(row_name).remove();
          $('#cancelForwardSuccessAlert').prop('hidden', false);
        }else{
          $(row_name).remove();
          $('#cancelForwardFailedAlert').prop('hidden', false);
        }
      }
    });
  })
</script>
