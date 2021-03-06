<?php if ($_SESSION['user_type'] !== 'BAC_SEC'){
  header('Location: ..\index.php');
} ?>
<section class="content-header">
  <h2>Edit Municipalities and Barangays</h2>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="box">
        <div class="box-header">
          <h2 class="box-title">Edit Municipality<small></small></h2>
        </div>
          <div class="row">
            <div class="col-lg-12">
              <a href="<?php echo base_url('admin/manageMunicipalitiesAndBarangays') ?>" class="btn btn-primary">Back</a>
            </div>
          </div>
        <div class="box-body">
          <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success">
              <p><?php echo $_SESSION['success'] ?></p>
            </div>
          <?php endif ?>
          <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-warning">
              <p><?php echo $_SESSION['error'] ?></p>
            </div>
          <?php endif ?>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="well">
                <form id="addMunicipalityForm" method="POST" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url('admin/editMunicipality') ?>">

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="municipality_code">Municipality Code<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" step="any"  id="municipality_code" placeholder="<?php echo $municipalityDetails->municipality_code ?>" name="municipality_code" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="municipality">Name of Municipality<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" step="any"  id="municipality" placeholder="<?php echo $municipalityDetails->municipality ?>" name="municipality" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  
                  <div class="ln_solid"></div>
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <div class="row">
                        <div class="col-lg-8 text-right">
                          <div class="form-group">
                            <label class="col-lg-6 control-label">Number Of Barangay/s</label>
                            <div class="col-lg-6">
                              <input type="number" min="0" class="form-control" id="barangayNumber">
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 text-left">
                          <button type="button" class="btn btn-primary" id="addBarangayButton">Add Barangay</button>
                          <button type="button" class="btn btn-warning" id="resetBarangayInputButton">Reset</button>
                        </div>
                      </div>
                      <div class="row">
                        <div id="barangayInputContainer">
                          
                        </div> 
                      </div>
                    </div>
                  </div>
                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-lg-12 text-center">
                      <button href="#myModal" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>            
          </div>
          <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
              <table class="table table-striped table-bordered" id="barangayTable">
                <thead>
                  <tr>
                    <th>Barangay ID</th>
                    <td>Barangay Code</td>
                    <td>Barangay Name</td>
                    <td>Edit</td>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($barangays as $barangay): ?>
                    <tr>
                      <td><?php echo $barangay['barangay_id'] ?></td>
                      <td><?php echo $barangay['barangay_code'] ?></td>
                      <td><?php echo $barangay['barangay'] ?></td>
                      <td>                      
                        <button class="btn btn-success barangayEditButton" type="button" value="<?php echo $barangay['barangay_id'] . ',' . $barangay['barangay_code'] . ',' . $barangay['barangay'] ?>">
                          <i class="fa fa-edit"></i>
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
              <tr><td>Municipality Code</td>
                <td><span id="code"></span></td>
              </tr>
              <tr><td>Municipality</td>
                <td><span id="name"></span></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" form="addMunicipalityForm" name="submit" class="btn btn-primary">Confirm</button>
        </div>
      </div>
    </div>
  </div>
  <!-- end of modal -->
  <!-- modal for data confirmation -->
  <div id="hisModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title" id="myModalLabel">Edit Barnagay Details</h4>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('admin/editBarangay') ?>" method="POST" id ="editBarangayForm" class="form-horizontal">
            <div class="form-group">
              <label for="" class="control-label col-sm-4">Barangay ID</label>
              <div class="col-sm-8">
                <input type="text" name="barangay_id" id="barangay_id" class="form-control" disabled required>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="control-label col-sm-4">Barangay Code</label>
              <div class="col-sm-8">
                <input type="text" name="barangay_code" id="barangay_code" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="control-label col-sm-4">Barangay Name</label>
              <div class="col-sm-8">
                <input type="text" name="barangay" id="barangay"  class="form-control" required>
              </div>
            </div>
            <input type="text" hidden name="current_barangay_id" id="current_barangay_id" required>
          </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" form="editBarangayForm" name="submit" class="btn btn-primary">Confirm</button>
        </div>
      </div>
    </div>
  </div>
  <!-- end of modal -->
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
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>public/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>public/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>public/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(document).ready( 
    function () {
      $('#barangayTable').DataTable();
    } 
  );
</script>

<script>
  $(document).ready(function() {
    $('#myModal').on('show.bs.modal' , function (e) {
      $('#code').html($('#municipality_code').val());
      $('#name').html($('#municipality').val());
    });
  });

  $('#addBarangayButton').click(function(e){
    var barangayNumber = $('#barangayNumber').val();
    if (barangayNumber == 0 || barangayNumber == null || barangayNumber == "") {
      alert("input number of barangays to add");
    }else{
      for (var i = 1; i <= barangayNumber; i++) {
        $('#barangayInputContainer').append(
          '<div class="well">' +
            '<div class="row">' +
              '<div class="col-lg-3">' +
                '<h1>' + i + '</h1>' +
              '</div>' +
              '<div class="col-lg-9">' +
                '<div class="form-group">' +
                  '<label class="control-label col-sm-3">Barangay Code</label>' +
                  '<div class="col-sm-6">' +
                    '<input type="text" class="form-control" name="barangay_code[]">' +
                  '</div>' +
                '</div>' +
                '<div class="form-group">' +
                  '<label class="control-label col-sm-3">Barangay Name</label>' +
                  '<div class="col-sm-6">' +
                    '<input type="text" class="form-control" name="barangay_name[]" required>' +
                  '</div>' +
                '</div>' +
              '</div>' +
            '</div>' +
          '</div>'
        );
      }
    }
  });

  $(document).on('click', '#resetBarangayInputButton', function(e){
    $('#barangayInputContainer').empty();
  });

  $('.barangayEditButton').click(function(e){
    var barangayDetails = $(this).val().split(',');

    $('#barangay_id').prop('value', barangayDetails[0]);
    $('#current_barangay_id').prop('value', barangayDetails[0]);
    $('#barangay_code').prop('placeholder', barangayDetails[1]);
    $('#barangay').prop('placeholder', barangayDetails[2]);

    $('#hisModal').modal('show');
  });

</script>



     <script>
        $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($(".datatable-1").length) {
            $(".datatable-1").DataTable({
              dom: "Bfrtip",
              lengthMenu: [
            [ 10, 25, 50, -1 ],
            [ '10 rows', '25 rows', '50 rows', 'Show all' ]
                         ],

              buttons: [

                'pageLength',
            {
                extend: 'copy',
            },

            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [ 0, 1]
                }
            },

            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, 1]
                }
            },

            {
                extend: 'print',
                exportOptions: {
                    columns: [ 0, 1]
                }
            }
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        TableManageButtons.init();
      });
    </script>


