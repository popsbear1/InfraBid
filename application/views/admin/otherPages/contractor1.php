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
        <!-- page content -->
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Set Location <small></small></h2>
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

   

   <table class='datatable-1 table table-striped table-bordered' style='font-size:13px;'>
    <thead style='font-size:12px;'>
                    <tr>
                      <th style='text-align: center'></th>
                      <th style='text-align: center'></th>
                      <th style='text-align: center'></th>
                      <th style='text-align: center'></th>
                      <th style='text-align: center'></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style='text-align: center'></td>
                      <td style='text-align: center'></td>
                      <td style='text-align: center'></td>
                      <td style='text-align: center'></td>
                    </tr>
                  </tbody>
    </table>
                   

                    
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
    <script src="../vendors/datatables-editor/js/dataTables.editor.min.js"></script>
    <script src="../vendors/datatables-alteditor/dataTables.altEditor.free.js"></script>
    <script src="../vendors/Select/js/dataTables.select.min.js"></script>
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
  var columnDefs = [{
    id: "DT_RowId",
    data: "DT_RowId",
    "visible": false,
    "searchable": false
  },{
      title: "Businesss Name",
      id: "businessname",
      data: "businessname",
      type: "select",
      "options": [
      "on",
      "off"
      ]
    },{
      title: "Owner/Manager",
      id: "owner",
      data: "owner",
      type: "select",
      "options": [
      "on",
      "off"
      ]
    },{
      title: "Address",
      id: "address",
      data: "address",
      type: "select",
      "options": [
      "on",
      "off"
      ]
    },{
      title: "Contact Number",
      id: "contactnumber",
      data: "contactnumber",
      type: "select",
      "options": [
      "on",
      "off"
      ]
    }];

  var myTable;

  myTable = $('.datatable-1').dataTable({
    "ajax":{
            url :"data/contractor-data.php", // json datasource
          },
    columns: columnDefs,
    dom: 'Bfrtip',        // Needs button container
          select: 'single',
          responsive: true,
          altEditor: true,     // Enable altEditor
          buttons: [{
            text: 'Add',
            name: 'add'        // do not change name
          },
          {
            extend: 'selected', // Bind to Selected row
            text: 'Edit',
            name: 'edit'        // do not change name
          },
          {
            extend: 'selected', // Bind to Selected row
            text: 'Delete',
            name: 'delete'      // do not change name
         }]


  });
  $('.dataTables_paginate').addClass("btn-group datatable-pagination");
    $('.dataTables_paginate > a').wrapInner('<span />');
    $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
    $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
   });
    </script>

    
  </body>
</html>