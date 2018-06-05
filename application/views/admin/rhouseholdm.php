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
        <div class="form-group noPrint">
                        <div class="col-md-1 col-sm-3 col-xs-6 col-md-offset-7">
                          <button onclick="printcontent('table')" type="button" class="btn btn-primary">Print Records for Household Consumption(Municipality)</button>
                 </div>
                </div>
            <div class="clearfix"></div>
            <div class="row">
              <div id="table">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Household Consumption (Municipality) <small></small></h2>
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


                    <?php
                include 'databaseconnect.php';
                $result = mysql_query("SELECT * FROM municipalities") or die(mysql_error());
   

    echo "<table class='datatable-1 table table-striped table-bordered' style='font-size:13px;'>";
    echo "<thead style='font-size:12px;'>
                    <tr>
                      <th style='text-align: center'>Municipality</th>
                      <th style='text-align: center'>Total HHM</th>
                      <th style='text-align: center'>Beef(kg)</th>
                      <th style='text-align: center'>Carabeef(kg)</th>
                      <th style='text-align: center'>Pork(kg)</th>
                      <th style='text-align: center'>Chicken(kg)</th>
                      <th style='text-align: center'>Fish(kg)</th>
                      <th style='text-align: center'>Egg(pcs)</th>
                    </tr>
                  </thead>";

    while($row = mysql_fetch_array( $result )) {
      
      echo "<tbody><tr><td>".$row['municipality']."</td>";
          $mun = $row['municipality'];
          $result1 = mysql_query("SELECT SUM(hmember) from hconsumption where municipality = '$mun'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(hmember)']."</td>";
            }
          $result1 = mysql_query("SELECT SUM(beef) from hconsumption where municipality = '$mun'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(beef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(carabeef) from hconsumption where municipality = '$mun'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(carabeef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(pork) from hconsumption where municipality = '$mun'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(pork)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(chicken) from hconsumption where municipality = '$mun'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(chicken)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(fish) from hconsumption where municipality = '$mun'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(fish)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(egg) from hconsumption where municipality = '$mun'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(egg)']."</td>";
            }


    } 

    echo "<thead style='font-size:12px;'>
                    <tr>
                      <th style='text-align: center'>Province</th>
                      <th style='text-align: center'>Total HHM</th>
                      <th style='text-align: center'>Beef(kg)</th>
                      <th style='text-align: center'>Carabeef(kg)</th>
                      <th style='text-align: center'>Pork(kg)</th>
                      <th style='text-align: center'>Chicken(kg)</th>
                      <th style='text-align: center'>Fish(kg)</th>
                      <th style='text-align: center'>Egg(pcs)</th>
                    </tr>
                  </thead>";

  echo "<tbody><tr><td>Benguet</td>";
          $result = mysql_query("SELECT SUM(hmember) from hconsumption");
            while ($row2 = mysql_fetch_array($result)) {
              $hmember = $row2['SUM(hmember)'];
              echo "<td>".$hmember."</td>";
            }
          $result1 = mysql_query("SELECT SUM(beef) from hconsumption");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(beef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(carabeef) from hconsumption");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(carabeef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(pork) from hconsumption");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(pork)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(chicken) from hconsumption");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(chicken)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(fish) from hconsumption");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(fish)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(egg) from hconsumption");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(egg)']."</td>";
            }

  echo "</tbody></table>";

                    ?>
     
                  </div>
                   </div>
                </div>
              </div>
                 </div>         
            </div>
      </div>
      </div>
      </div>

<script >
    function printcontent(el){
      var restorepage = document.body.innerHTML;
      var printcontent = document.getElementById(el).innerHTML;
      document.body.innerHTML = printcontent;
      window.print();
      document.body.innerHTML = restorepage;
    }
  </script>


         

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
    <script src = "js/barangay.js"></script>

    
  </body>
</html>