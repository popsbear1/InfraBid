
<section class="content-header">
  <h2>Manage Documents</h2>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="box">
        <div class="box-header">
          <h2 class="box-title">Document Records<small></small></h2>
          <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#addDocumentsModal">Add Document</button>
        </div>
        <div class="box-body">
          <table class="table table-bordered table-striped" id="documentsTable">
            <thead>
              <tr>
                <th class="text-center">Document Number</th>
                <th class="text-center">Document Name</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($document_type as $document): ?>
                <tr>
                  <td class="text-center"><?php echo $document['doc_no'] ?></td>
                  <td class="text-center"><?php echo $document['document_name'] ?></td>
                  <td class="text-center">
                    <form method="POST" action="<?php echo base_url('admin/setCurrentDocumentID') ?>">
                      <button class="btn btn-success" id="documentID" name="documentID" value="<?php echo $document['doc_type_id'] ?>" type="submit">
                        <i class="fa fa-edit"></i>
                      </button>
                    </form>
                  </td>
                  <td>
                    <div class="navbar-custom-menu">
                      <ul class="nav navbar-nav">
                        <li class="dropdown tasks-menu">
                          <button class="dropdown-toggle btn btn-warning" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                          </button>
                          <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                              <!-- inner menu: contains the actual data -->
                              <ul class="menu">
                                <li><!-- Task item -->
                                  <a href="#">
                                    <h3>
                                      Design some buttons
                                      <small class="pull-right">20%</small>
                                    </h3>
                                    <div class="progress xs">
                                      <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                           aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <span class="sr-only">20% Complete</span>
                                      </div>
                                    </div>
                                  </a>
                                </li>
                                <!-- end task item -->
                                <li><!-- Task item -->
                                  <a href="#">
                                    <h3>
                                      Create a nice theme
                                      <small class="pull-right">40%</small>
                                    </h3>
                                    <div class="progress xs">
                                      <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                                           aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <span class="sr-only">40% Complete</span>
                                      </div>
                                    </div>
                                  </a>
                                </li>
                                <!-- end task item -->
                                <li><!-- Task item -->
                                  <a href="#">
                                    <h3>
                                      Some task I need to do
                                      <small class="pull-right">60%</small>
                                    </h3>
                                    <div class="progress xs">
                                      <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                                           aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <span class="sr-only">60% Complete</span>
                                      </div>
                                    </div>
                                  </a>
                                </li>
                                <!-- end task item -->
                                <li><!-- Task item -->
                                  <a href="#">
                                    <h3>
                                      Make beautiful transitions
                                      <small class="pull-right">80%</small>
                                    </h3>
                                    <div class="progress xs">
                                      <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                                           aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <span class="sr-only">80% Complete</span>
                                      </div>
                                    </div>
                                  </a>
                                </li>
                                <!-- end task item -->
                              </ul>
                            </li>
                            <li class="footer">
                              <a href="#">View all tasks</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
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
      $('#documentsTable').DataTable();
    } 
    );
  </script>
  <script>
    $(document).ready(function() {
      $('#myModal').on('show.bs.modal' , function (e) {
        $('#manageDocu').html($('#documents').val());
        $('#manageNo').html($('#document_numbers').val());
      });
    });
  </script>

  <div class="modal fade" id="addDocumentsModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Add New Document</h4>
        </div>
        <div class="modal-body">
          <form id="addDocumentsForm" method="POST" class="form-horizontal form-label-left" action="<?php echo base_url('admin/addDocuments') ?>">

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Document Number*
              </label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="document_numbers" name="document_numbers" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Document Name*
              </label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="newdocuments" name="newdocuments" class="form-control">
              </div>
            </div>

          </form>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button href="#myModal" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Submit</button> 
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <!-- modal for data confirmation -->
  <div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
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
              <tr><td class="text-center">Document Number</td>
                <td><span id="manageNo"></span></td>
              </tr>
              <tr><td class="text-center">Document Name</td>
                <td><span id="manageDocu"></span></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" form="addDocumentsForm" name="submit" class="btn btn-primary">Confirm</button>
        </div>
      </div>
    </div>
  </div>
  <!-- end of modal -->


