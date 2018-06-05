
        <!-- page content -->
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Procurement  Monitoring Report for Public Bidding and Negotiated<small></small></h2>
            <ul class="nav navbar-right panel_toolbox noPrint">
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
            <table class="datatable-1 table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($procacts as $procact): ?>
                  <tr>
                    <td><?php echo $procact['project_title'] ?></td>
                    <td><?php echo $procact['mode'] ?></td>
                    <td><?php echo $procact['pre_proc'] ?></td>
                    <td><?php echo $procact['advertisement'] ?></td>
                    <td><?php echo $procact['pre_bid'] ?></td>
                    <td><?php echo $procact['openbid'] ?></td>
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

    <!-- jQuery -->
    <script src="public/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="public/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="public/vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="public/build/js/custom.min.js"></script>
    <!-- Datatables -->
    <script src="public/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="public/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="public/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="public/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="public/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="public/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="public/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="public/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="public/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="public/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="public/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="public/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="public/vendors/jszip/dist/jszip.min.js"></script>
    <script src="public/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="public/vendors/pdfmake/build/vfs_fonts.js"></script>

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



<!--                 
    $result1 = mysql_query("SELECT * FROM procact Order by project_no DESC") or die(mysql_error());

    echo "<table class='datatable-1 table table-striped table-bordered' style='font-size:13px;'>";
    echo "<thead style='font-size:12px;'>
                    <tr>
                      <th style='text-align: center'>Procurement Program/Project</th>
                      <th style='text-align: center'>PMO/End-User</th>
                      <th style='text-align: center'>Mode of Procurement</th>
                      <th style='text-align: center'>Pre-Procurement Conference</th>
                      <th style='text-align: center'>Ads/Post of IAEB</th>
                      <th style='text-align: center'>Pre-bid Conference</th>
                      <th style='text-align: center'>Opening of Bids</th>
                      <th style='text-align: center'>Bid Evaluation</th>
                      <th style='text-align: center'>Post Qual</th>
                      <th style='text-align: center'>Notice of Award</th>
                      <th style='text-align: center'>Contract Signing/P.O.</th>
                      <th style='text-align: center'>Notice to Proceed</th>
                      <th style='text-align: center'>Delivery/Completion</th>
                      <th style='text-align: center'>Post Qual</th>
                      <th style='text-align: center'>Source of Funds</th>
                      <th style='text-align: center'>ABC (Php)</th>
                  </thead>
                 
                  ";
    while($row = mysql_fetch_array( $result1 )) {
         $id = $row['project_no'];

         $result = mysql_query("SELECT * FROM plan where project_no = '$id'") or die(mysql_error());

         $row1 = mysql_fetch_array($result);

      echo "<tr><td>".$row1['project_title']."</td>";
      echo "<td></td>";
      echo "<td>".$row1['mode']."</td>";
      echo "<td>".$row['pre_proc']."</td>";
      echo "<td>".$row['advertisement']."</td>";
      echo "<td>".$row['pre_bid']."</td>";
      echo "<td>".$row['openbid']."</td>";
      echo "<td>".$row['bidevaluation']."</td>";
      echo "<td>".$row['postqual']."</td>";
      echo "<td>".$row['awarddate']."</td>";
      echo "<td>".$row['contractsigning']."</td>";
      echo "<td>".$row['proceednotice']."</td>";
      echo "<td>".$row['completion']."</td>";
      echo "<td>".$row['postqual']."</td>";
      echo "<td>".$row1['source']."</td>";
      echo "<td>".$row1['ABC']."</td>";


    } 
  echo "</table>";

                    ?> -->
