
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
                    <tr>
                      <td><?php echo $pending_document['project_title'] ?></td>
                      <td><?php echo $pending_document['municipality'] . ', ' . $pending_document['barangay'] ?></td>
                      <td><?php echo number_format($pending_document['abc'], 2) ?></td>
                      <td><?php echo $pending_document['businessname'] ?></td>
                      <td><?php echo $pending_document['source'] ?></td>
                      <td><?php echo $pending_document['current_doc_loc'] ?></td>
                      <td class="text-center">
                        <form action="<?php if ($this->session->userdata('user_type') == 'BAC_SEC'){ echo base_url('docTrack/receiveDocument');}else{ echo base_url('capitol/receiveDocument'); } ?>" method="POST" id="receiveDocumentForm">
                          <input type="text" name="plan_id" value="<?php echo $pending_document['plan_id'] ?>" hidden>
                          <input type="text" name="sender" value="<?php echo $pending_document['current_doc_loc'] ?>" hidden>
                          <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#confirmDocumentReceivalModal">
                            <i class="fa fa-get-pocket"></i> Receive
                          </button>
                          <button class="btn btn-info viewDocumentDataBtn" type="button" value="<?php echo $pending_document['plan_id'] ?>">
                            <i class="fa fa-eye"></i>
                          </button> 
                        </form>
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
                       <td><?php echo $onhand_document['project_title'] ?></td>
                       <td><?php echo $pending_document['municipality'] . ', ' . $pending_document['barangay'] ?></td>
                       <td><?php echo number_format($pending_document['abc'], 2) ?></td>
                       <td><?php echo $onhand_document['businessname'] ?></td>
                       <td><?php echo $onhand_document['source'] ?></td>
                       <td><?php echo $onhand_document['previous_doc_loc'] ?></td>
                       <td class="text-center"> 
                        <form action="<?php if ($this->session->userdata('user_type') == 'BAC_SEC'){ echo base_url('docTrack/setCurrentPlanID');}else{ echo base_url('capitol/setCurrentPlanID'); } ?>" method="POST">
                          <input type="text" name="plan_id" value="<?php echo $onhand_document['plan_id'] ?>" hidden>
                          <button class="btn btn-success" type="submit"> 
                            <i class="fa fa-plus"></i> Update 
                          </button>
                          <button class="btn btn-info viewDocumentDataBtn" type="button" value="<?php echo $onhand_document['plan_id'] ?>">
                            <i class="fa fa-eye"></i>
                          </button> 
                        </form> 
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
                    <tr>
                      <td><?php echo $forwarded_document['project_title'] ?></td>
                      <td><?php echo $pending_document['municipality'] . ', ' . $pending_document['barangay'] ?></td>
                      <td><?php echo number_format($pending_document['abc'], 2) ?></td>
                      <td><?php echo $forwarded_document['businessname'] ?></td>
                      <td><?php echo $forwarded_document['source'] ?></td>
                      <td><?php echo $forwarded_document['receiver'] ?></td>
                      <td class="text-center">
                        <button class="btn btn-info viewDocumentDataBtn" type="button" value="<?php echo $forwarded_document['plan_id'] ?>">
                          <i class="fa fa-eye"></i>
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
    $('#documentDetailsViewModal').modal('show');

    $('#forwardingLogTable').DataTable().destroy();
    $('#receivingLogTable').DataTable().destroy();

    var forwarded_document_details = $(this).val();

    $.ajax({
      type: 'POST',
      url: '<?php echo base_url("doctrack/getProjectDocumentHistory") ?>',
      data: { plan_id: forwarded_document_details},
      dataType: 'json',
      success: function(response){

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

  });


</script>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="documentDetailsViewModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div>
              <h2 style="background-color:#D76969; text-align: center; padding: 7px 10px;">
                HISTORY TRACKS
              </h2>
            </div>
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
        <p>Confirm Document Receival</p>
      </div>
      <div class="modal-footer">
        <button type="submit" form="receiveDocumentForm" class="btn btn-primary">Confirm</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
