
        <!-- page content -->
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <nav class="navbar navbar-default" style="background: orange">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand" href="#">Annual Procurement Plan </a>
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <ul class="nav navbar-nav navbar-centered collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <li><a href="">Secretary</a></li>
            <li ><a href="">BAC-INFRA</a></li>
            <li ><a href="">PGO</a></li>
            <li ><a href="">PEO</a></li>
          </ul>
        </div><!-- /.container-fluid -->
      </nav>

      <div class="panel panel-info">
        <div class="panel-heading">
          <h1>
          </h1> 
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-4 text-center" style="background-color: white" >
              <form>
                  <input type="checkbox" name="vehicle" value="Bike"> I have a bike<br>
                  <input type="checkbox" name="vehicle" value="Car" checked="checked"> I have a car<br>
                  <input type="checkbox" name="vehicle" value="Bike"> I have a bike<br>
                  <input type="checkbox" name="vehicle" value="Car" checked="checked"> I have a car<br>
                  <input type="checkbox" name="vehicle" value="Bike"> I have a bike<br>
                  <input type="checkbox" name="vehicle" value="Car" checked="checked"> I have a car<br>
                  <input type="checkbox" name="vehicle" value="Bike"> I have a bike<br>
                  <input type="checkbox" name="vehicle" value="Car" checked="checked"> I have a car<br>
              </form>
            </div>
            <div class="col-lg-4 text-center" style="background-color: white" >
              <input type="checkbox" name="vehicle" value="Bike"> I have a bike<br>
                  <input type="checkbox" name="vehicle" value="Car" checked="checked"> I have a car<br>
                  <input type="checkbox" name="vehicle" value="Bike"> I have a bike<br>
                  <input type="checkbox" name="vehicle" value="Car" checked="checked"> I have a car<br>
                  <input type="checkbox" name="vehicle" value="Bike"> I have a bike<br>
                  <input type="checkbox" name="vehicle" value="Car" checked="checked"> I have a car<br>
                  <input type="checkbox" name="vehicle" value="Bike"> I have a bike<br>
                  <input type="checkbox" name="vehicle" value="Car" checked="checked"> I have a car<br>
            </div>
            <div class="col-lg-4 text-center" style="background-color: white">
              <input type="checkbox" name="vehicle" value="Bike"> I have a bike<br>
                  <input type="checkbox" name="vehicle" value="Car" checked="checked"> I have a car<br><input type="checkbox" name="vehicle" value="Bike"> I have a bike<br>
                  <input type="checkbox" name="vehicle" value="Car" checked="checked"> I have a car<br><input type="checkbox" name="vehicle" value="Bike"> I have a bike<br>
                  <input type="checkbox" name="vehicle" value="Car" checked="checked"> I have a car<br>
            </div>
          </div>
        </div>
        <div class="panel-footer"></div> 
        
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
