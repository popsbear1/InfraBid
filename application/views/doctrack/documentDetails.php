
        <!-- page content -->
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="panel panel-info">
        <div class="panel-heading" style="background-color: white">
          <h2>
            Document Forwarding
          </h2> 
        </div>
        <div class="panel-body">
          <div class="x_content">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th class="text-center">Existing Documents</th>
                  <th class="text-center">Add Documents</th>
                  <th class="text-center">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">
                        Document 1
                    <br>Document 2
                    <br>Document 3
                    <br>Document 4
                    <br>Document 5
                    <br>Document 6
                    <br>Document 7
                    <br>Document 8
                  </td>  
                  <td class="text-center">
                    <input type="checkbox" name="myTextEditBox" value="checked"/> Document 1
                    <br><input type="checkbox" name="myTextEditBox" value="checked"/> Document 2
                    <br><input type="checkbox" name="myTextEditBox" value="checked"/> Document 3
                    <br><input type="checkbox" name="myTextEditBox" value="checked"/> Document 4
                    <br><input type="checkbox" name="myTextEditBox" value="checked"/> Document 5
                    <br><input type="checkbox" name="myTextEditBox" value="checked"/> Document 6
                    <br><input type="checkbox" name="myTextEditBox" value="checked"/> Document 7
                  </td>
                  <td>
                    <div class="form-group">
                      <label>Department:</label>
                      <select class="form-control">
                        <option>BAC-Infra Secretariat</option>
                        <option>PWG</option>
                        <option>PGO</option>
                        <option>PEO</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Remarks:</label>
                      <textarea class="form-control"></textarea>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="row text-right" >
              <button class="btn btn-primary">Send</button>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>public/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() ?>public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url() ?>public/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url() ?>public/vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url() ?>public/build/js/custom.min.js"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url() ?>public/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>public/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>public/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>public/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>public/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url() ?>public/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>public/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url() ?>public/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url() ?>public/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url() ?>public/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url() ?>public/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url() ?>public/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="<?php echo base_url() ?>public/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url() ?>public/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url() ?>public/vendors/pdfmake/build/vfs_fonts.js"></script>

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
