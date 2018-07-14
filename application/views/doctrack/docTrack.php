
<section class="content">
  <div class="row">
	  <div class="col-lg-12 col-md-12">
    	<div class="row">
        <div class="col-md-12">
          <h3 class="pull-left">Project Document Tracking</h3>
          <button class="btn btn-primary btn-lg pull-right">Add Project Document</button>
        </div>
      </div>
	  	<div class="box box-info">
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
            <div id="tableContainer">
              <table class="table table-bordered documentsTable">
                <thead>
                  <tr>
                    <th>Project Title</th>
                    <th>Document Name</th>
                    <th>Project Name</th>
                    <th>Sender</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>POW</td>
                    <td>Balay ni tatang</td>
                    <td>Ni Enginier</td>
                    <td>
                      <button class="btn btn-warning">
                        <i class="fa fa-get-pocket"></i> Receive
                      </button>
                      <button class="btn btn-info viewDataBtn">
                        <i class="fa fa-eye"></i> View Data
                      </button>
                    </td>
                  </tr>
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
    } 
  );
</script>

<script>
  $('#pendingDocumentsBtn').click(function(){
    $('#page_tittle').html('Pending Documents (For Receiving)');
    $('#tableContainer').remove();
    $('#documentTableContainer').append(
      '<div id="tableContainer">' +
        '<table class="table table-bordered documentsTable">' +
          '<thead>' +
            '<tr>' +
              '<th>Project Title</th>' +
              '<th>Document Name</th>' +
              '<th>Project Name</th>' +
              '<th>Sender</th>' +
              '<th>Action</th>' +
            '</tr>' +
          '</thead>' +
          '<tbody>' +
            '<tr>' +
              '<td>01</td>' +
              '<td>POW</td>' +
              '<td>Balay ni tatang</td>' +
              '<td>Ni Enginier</td>' +
              '<td>' +
                '<button class="btn btn-warning">' +
                  '<i class="fa fa-get-pocket"></i> Receive' +
                '</button>' +
                '<button class="btn btn-info viewDataBtn">' +
                  '<i class="fa fa-eye"></i> View Data' +
                '</button>' +
              '</td>' +
            '</tr>' + 
          '</tbody>' +
        '</table>' +
      '</div>' 
    );
    $('.documentsTable').DataTable();
  });

  $('#onhandDocumentsBtn').click(function(){
    $('#page_tittle').html('Onhand Documents (For Forwarding)');
    $('#tableContainer').remove();
    $('#documentTableContainer').append(
      '<div id="tableContainer">' +
        '<table class="table table-bordered documentsTable">' +
          '<thead>' +
            '<tr>' +
              '<th>Project Title</th>' +
              '<th>Document Name</th>' +
              '<th>Project Name</th>' +
              '<th>Sender</th>' +
              '<th>Action</th>' +
            '</tr>' +
          '</thead>' +
          '<tbody>' +
            '<tr>' +
              '<td>01</td>' +
              '<td>POW</td>' +
              '<td>Balay ni tatang</td>' +
              '<td>Ni Enginier</td>' +
              '<td>' +
                '<button class="btn btn-warning">' +
                  '<i class="fa fa-mail-forward"></i> Forward' +
                '</button>' +
                '<button class="btn btn-success">' +
                  '<i class="fa fa-plus"></i> Update' +
                '</button>' +
                '<button class="btn btn-info viewDataBtn">' +
                  '<i class="fa fa-eye"></i> View Data' +
                '</button>' +
              '</td>' +
            '</tr>' + 
          '</tbody>' +
        '</table>' +
      '</div>' 
    );
    $('.documentsTable').DataTable();
  });

  $('#forwardedDocumentsBtn').click(function(){
    $('#page_tittle').html('Forwarded Documents (Waiting to be Received)');
    $('#tableContainer').remove();
    $('#documentTableContainer').append(
      '<div id="tableContainer">' +
        '<table class="table table-bordered documentsTable">' +
          '<thead>' +
            '<tr>' +
              '<th>Project Title</th>' +
              '<th>Document Name</th>' +
              '<th>Project Name</th>' +
              '<th>Sender</th>' +
              '<th>Action</th>' +
            '</tr>' +
          '</thead>' +
          '<tbody>' +
            '<tr>' +
              '<td>01</td>' +
              '<td>POW</td>' +
              '<td>Balay ni tatang</td>' +
              '<td>Ni Enginier</td>' +
              '<td>' +
                '<button class="btn btn-warning">' +
                  '<i class="fa fa-get-pocket"></i> Receive' +
                '</button>' +
                '<button class="btn btn-info viewDataBtn">' +
                  '<i class="fa fa-eye"></i> View Data' +
                '</button>' +
              '</td>' +
            '</tr>' + 
          '</tbody>' +
        '</table>' +
      '</div>' 
    );
    $('.documentsTable').DataTable();
  });

  $(document).on('click', '.viewDataBtn', function(){
    $('#documentDetailsViewModal').modal('show');
  });

  $('.documentViewBtn').click(function(){
    $('.documentViewBtn').removeAttr('style');
    $(this).css('background-color','#555555');
  });
</script>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="documentDetailsViewModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

