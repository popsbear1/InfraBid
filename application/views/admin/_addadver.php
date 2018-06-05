<?php
  session_start();
    if (isset($_SESSION['user'])) {
      $user = $_SESSION['user'];
        include 'databaseconnect.php';
        include 'static\head.html';
        include 'static\nav.html';
    }else
    {
      header("location:..\index.php");
    }

    ?>
<!DOCTYPE html>
<html lang="en">
  <?php include 'static\dashboard.html'; ?>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Advertisement</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

   <?php
                include 'databaseconnect.php';

           if(isset($_GET['id']))
          {
            $id=$_GET['id'];
             
            if(isset($_POST['submit']))
              {
                $advertisement=mysql_real_escape_string(htmlspecialchars($_POST['advertisement']));

                $query3= mysql_query("UPDATE procact set advertisement = '$advertisement' where project_no = $id") or die(mysql_error());

                            if (mysql_error() == true) {
                                  echo "<div  class='alert alert-warning'><i class='fa fa-warning'></i> &nbsp;" .mysql_error()."</div>";
                              }else
                              {
                                echo "<div class='alert alert-info'>Successfully Added Date !</div>";
                                }
              }
               $result = mysql_query("SELECT * from plan where project_no = '$id'");
               $row = mysql_fetch_array($result);
            ?>
                    <br />
                    <form id="form" method="POST" data-parsley-validate class="form-horizontal form-label-left"onkeypress="return event.keyCode != 13;">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title & ABC <span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" step="any"  id="project_title" value="<?php echo $row['project_title']." - ".$row['ABC']?>" name="project_title" disabled class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Advertisement<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" step="any"  id="advertisement" value="" name="advertisement"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
<!-- 
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="status" name ="status">
                          <option value="">Status</option>
                            <option value="Capital Outlay">On Going</option>
                            <option value="MOOE">Failed</option>
                          </select>
                        </div>
                      </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Remarks<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" step="any"  id="remarks" value="" name="remarks"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div> -->

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button href="#myModal" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Submit</button>
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
                                <tr><td>Project Title</td>
                                    <td><span id="no"></span></td>
                                </tr>
                                <tr><td>Advertisement</td>
                                    <td><span id="adver"></span></td>
                                </tr>
                          </tbody>
                          </tfoot>
                        </table>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" name="submit" class="btn btn-primary">Confirm</button>
                        </div>
                      </div>
                    </div>
                  </div>
                        </div>
                      </div>

                    </form>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>

              
        <!-- /page content -->
      </div>
    </div>
    </div>
     <?php  include 'static\footer.html';?>
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <script>
$(document).ready(function() {
    $('#myModal').on('show.bs.modal' , function (e) {
     $('#no').html($('#project_title').val());
    $('#adver').html($('#advertisement').val());
  });
    
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
    
  </body>
</html>