
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <h3 class="pull-left">Ongoing Document Tracking Monitoring Page</h3>
    </div>
  </div>
  <div class="box">
    <div class="box-header">
      <h2 class="box-title"><i class="fa fa-list"></i> Project Plan Records</h2>
      <small>(Listed here are those projects whith status of Onprocess.)</small>
    </div>
    <div class="box-body">
      <table class="table table-striped table-bordered" id="documentTable">
        <thead style='font-size:12px;'>
          <tr>
            <th class="text-center">Project title</th>
            <th class="text-center">Location</th>
            <th class="text-center">ABC</th>
            <th class="text-center">Source of Fund</th>
            <th class="text-center">Date POW Added</th>
            <th class="text-center">Contractor</th>
            <th class="text-center">Status</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($plans as $plan): ?>
            <tr>
              <td><?php echo $plan['project_title'] ?></td>
              <td><?php echo $plan['barangay'] . ', ' .$plan['municipality'] ?></td>
              <td><?php echo $plan['abc'] ?></td>
              <td><?php echo $plan['source'] ?></td>
              <td><?php echo $plan['date_pow_added'] ?></td>
              <td><?php echo $plan['businessname'] ?></td>
              <td><?php echo $plan['projectstatus'] ?></td>
              <td class="text-center">
                <button class="btn btn-info viewDocumentDataBtn" type="button" value="<?php echo $plan['plan_id']?>">
                  <i class="fa fa-eye"></i> History
                </button>
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

<script>
  $(document).ready( 
    function () {
      $('#documentTable').DataTable();
    } 
  );
  $(document).on('click', '.viewDocumentDataBtn', function(){
    

    $('#forwardingLogTable').DataTable().destroy();
    $('#receivingLogTable').DataTable().destroy();
    $('#documentTableModal').DataTable().destroy();

    var document_details = $(this).val();

    $.ajax({
      type: 'GET',
      url: '<?php echo base_url("doctrack/getFullProjectDocumentHistory") ?>',
      data: { plan_id: document_details },
      dataType: 'json',
      success: function(response){

        $('#documentTableModal').DataTable({
          data: response.documents,
          columns: [
              { data: 'doc_no' },
              { data: 'document_name' },
              { data: 'previous_doc_loc' },
              { data: 'current_doc_loc' },
              { data: 'username' }
          ],
          'paging'      : false,
          'lengthChange': true,
          'searching'   : true,
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
            'lengthChange': true,
            'searching'   : false,
            'ordering'    : false,
            'info'        : false,
            'autoWidth'   : false
        } );

        $('#receivingLogTable').DataTable( {
            data: response.receiving_logs,
            columns: [
                { data: 'user_type' },
                { data: 'user_name' },
                { data: 'log_date' }
            ],
            'paging'      : false,
            'lengthChange': true,
            'searching'   : false,
            'ordering'    : false,
            'info'        : false,
            'autoWidth'   : false
        } );
      }
    });

    $('#documentDetailsViewModal').modal('show');

  });
  </script>

  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="documentDetailsViewModal">
  <div class="modal-dialog modal-lg" role="document" style="width: 1100px">
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
          <div class="col-lg-12 col-md-12 col-sm-12" style="height: 400px; overflow: scroll; overflow-x: auto;">
            <table class="table table-bordered table-striped" id="documentTableModal">
              <thead>
                <tr>
                  <th>Doc No.</th>
                  <th>Doc Name</th>
                  <th>Previous Holder</th>
                  <th>Current Holder</th>
                  <th>Added By</th>
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
          <div class="col-lg-7 col-md-7 col-sm-7" style="height: 400px; overflow: scroll; overflow-x: auto;">
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
          <div class="col-lg-5 col-md-5 col-sm-5"  style="height: 400px; overflow: scroll; overflow-x: auto;">
            <table class="table table-bordered table-striped" id="receivingLogTable">
              <thead>
                <tr>
                  <th class="text-center">Department</th>
                  <th class="text-center">Received By</th>
                  <th class="text-center">Date/Time Received</th>
                </tr>
              </thead>
              <tbody>
                <tr>
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
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
