
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
              <thead style='font-size:12px;'>
                <tr>
                  <th class="text-center">Procurement Program/Project</th>
                  <th class="text-center">PMO/End-User</th>
                  <th class="text-center">Mode of Procurement</th>
                  <th class="text-center">Pre-Procurement Conference</th>
                  <th class="text-center">Ads/Post of IAEB</th>
                  <th class="text-center">Pre-bid Conference</th>
                  <th class="text-center">Opening of Bids</th>
                  <th class="text-center">Bid Evaluation</th>
                  <th class="text-center">Post Qual</th>
                  <th class="text-center">Notice of Award</th>
                  <th class="text-center">Contract Signing/P.O.</th>
                  <th class="text-center">Notice to Proceed</th>
                  <th class="text-center">Delivery/Completion</th>
                  <th class="text-center">Post Qual</th>
                  <th class="text-center">Source of Funds</th>
                  <th class="text-center">ABC (Php)</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($procacts as $procact): ?>
                  <tr>
                    <td><?php echo $procact['project_title'] ?></td>
                    <td></td>
                    <td><?php echo $procact['mode'] ?></td>
                    <td><?php echo $procact['pre_proc'] ?></td>
                    <td><?php echo $procact['advertisement'] ?></td>
                    <td><?php echo $procact['pre_bid'] ?></td>
                    <td><?php echo $procact['openbid'] ?></td>
                    <td><?php echo $procact['bidevaluation'] ?></td>
                    <td><?php echo $procact['postqual'] ?></td>
                    <td><?php echo $procact['awarddate'] ?></td>
                    <td><?php echo $procact['contractsigning'] ?></td>
                    <td><?php echo $procact['proceednotice'] ?></td>
                    <td><?php echo $procact['completion'] ?></td>
                    <td><?php echo $procact['postqual'] ?></td>
                    <td><?php echo $procact['source'] ?></td>
                    <td><?php echo $procact['ABC'] ?></td>
                    
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
