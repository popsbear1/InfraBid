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
<!-- ATOK -->
        <div class="form-group no-print">
                        <div class="col-md-3 col-sm-3 col-xs-6 col-md-offset-7">
                          <button onclick="printcontent('table')" type="button" class="btn btn-primary">Print Records for Household Consumption(Atok)</button>
                 </div>
      </div>
            <div class="clearfix"></div>
            <div class="row">
              <div id="table">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Household Consumption (Atok) <small></small></h2>
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
                $result = mysql_query("SELECT * FROM barangays where municipality = 'Atok' order by municipality ASC") or die(mysql_error());
   

    echo "<table class='table table-striped table-bordered' style='font-size:13px;'>";
    echo "<thead>
                    <tr>
                      <th style='text-align: center'>Barangay</th>
                      <th style='text-align: center'>Beef(kg)</th>
                      <th style='text-align: center'>Carabeef(kg)</th>
                      <th style='text-align: center'>Pork(kg)</th>
                      <th style='text-align: center'>Chicken(kg)</th>
                      <th style='text-align: center'>Fish(kg)</th>
                      <th style='text-align: center'>Egg(kg)</th>
                    </tr>
                  </thead>";
    while($row = mysql_fetch_array( $result )) {
      
      echo "<tbody><tr><td>".$row['barangay']."</td>";
          $mun = $row['municipality'];
          $bar = $row['barangay'];

          $que = mysql_query("SELECT barangaycode from barangays where barangay = '$bar'");
          while ($q = mysql_fetch_array($que)) {
            $b = $bar." - ".$q['barangaycode'];
          
           $result1 = mysql_query("SELECT SUM(beef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(beef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(carabeef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(carabeef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(pork) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(pork)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(chicken) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(chicken)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(fish) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(fish)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(egg) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(egg)']."</td>";
          }
        }

    } 
  echo "<tbody></table>";

                    ?>
     
                  </div>
                  
                </div>
              </div>
            </div>
      </div>
                 </div>        


<!-- BAKUN -->

                 <div class="form-group no-print">
                        <div class="col-md-3 col-sm-3 col-xs-6 col-md-offset-7">
                          <button onclick="printcontent('table1')" type="button" class="btn btn-primary">Print Records for Household Consumption(Bakun)</button>
                 </div>
      </div>
            <div class="clearfix"></div>
            <div class="row">
              <div id="table1">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Household Consumption (Bakun) <small></small></h2>
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
                $result = mysql_query("SELECT * FROM barangays where municipality = 'Bakun' order by municipality ASC") or die(mysql_error());
   

    echo "<table class='table table-striped table-bordered' style='font-size:13px;'>";
    echo "<thead>
                    <tr>
                      <th style='text-align: center'>Barangay(kg)</th>
                      <th style='text-align: center'>Beef(kg)</th>
                      <th style='text-align: center'>Carabeef(kg)</th>
                      <th style='text-align: center'>Pork(kg)</th>
                      <th style='text-align: center'>Chicken(kg)</th>
                      <th style='text-align: center'>Fish(kg)</th>
                      <th style='text-align: center'>Egg(kg)</th>
                    </tr>
                  </thead>";
    while($row = mysql_fetch_array( $result )) {
      
      echo "<tbody><tr>";
      echo "<td>".$row['barangay']."</td>";
          $mun = $row['municipality'];
          $bar = $row['barangay'];

          $que = mysql_query("SELECT barangaycode from barangays where barangay = '$bar'");
          while ($q = mysql_fetch_array($que)) {
            $b = $bar." - ".$q['barangaycode'];
          
           $result1 = mysql_query("SELECT SUM(beef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(beef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(carabeef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(carabeef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(pork) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(pork)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(chicken) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(chicken)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(fish) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(fish)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(egg) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(egg)']."</td>";
          }
        }

    } 
  echo "<tbody></table>";

                    ?>
     
                  </div>
                  
                </div>
              </div>
            </div>
      </div>
                 </div>         


<!-- BOKOD -->
    <div class="form-group no-print">
      <div class="col-md-3 col-sm-3 col-xs-6 col-md-offset-7">
        <button onclick="printcontent('table2')" type="button" class="btn btn-primary">Print Records for Household Consumption(Bokod)</button>
      </div>
      </div>
            <div class="clearfix"></div>
            <div class="row">
              <div id="table2">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Household Consumption (Bokod) <small></small></h2>
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
                $result = mysql_query("SELECT * FROM barangays where municipality = 'Bokod' order by municipality ASC") or die(mysql_error());
   

    echo "<table class='table table-striped table-bordered' style='font-size:13px;'>";
    echo "<thead>
                    <tr>
                      <th style='text-align: center'>Barangay</th>
                      <th style='text-align: center'>Beef(kg)</th>
                      <th style='text-align: center'>Carabeef(kg)</th>
                      <th style='text-align: center'>Pork(kg)</th>
                      <th style='text-align: center'>Chicken(kg)</th>
                      <th style='text-align: center'>Fish(kg)</th>
                      <th style='text-align: center'>Egg(kg)</th>
                    </tr>
                  </thead>";
    while($row = mysql_fetch_array( $result )) {
      
      echo "<tbody><tr>";
      echo "<td>".$row['barangay']."</td>";
          $mun = $row['municipality'];
          $bar = $row['barangay'];

          $que = mysql_query("SELECT barangaycode from barangays where barangay = '$bar'");
          while ($q = mysql_fetch_array($que)) {
            $b = $bar." - ".$q['barangaycode'];
          
           $result1 = mysql_query("SELECT SUM(beef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(beef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(carabeef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(carabeef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(pork) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(pork)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(chicken) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(chicken)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(fish) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(fish)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(egg) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(egg)']."</td>";
          }
        }

    } 
  echo "<tbody></table>";

                    ?>
     
                  </div>
                  
                </div>
              </div>
            </div>
      </div>





      <!-- BUGUIAS -->
      <div class="form-group no-print">
      <div class="col-md-3 col-sm-3 col-xs-6 col-md-offset-7">
        <button onclick="printcontent('table3')" type="button" class="btn btn-primary">Print Records for Household Consumption(Buguias)</button>
      </div>
      </div>
            <div class="clearfix"></div>
            <div class="row">
              <div id="table3">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Household Consumption (Buguias) <small></small></h2>
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
                $result = mysql_query("SELECT * FROM barangays where municipality = 'Buguias' order by municipality ASC") or die(mysql_error());
   

    echo "<table class='table table-striped table-bordered' style='font-size:13px;'>";
    echo "<thead>
                    <tr>
                      <th style='text-align: center'>Barangay</th>
                      <th style='text-align: center'>Beef(kg)</th>
                      <th style='text-align: center'>Carabeef(kg)</th>
                      <th style='text-align: center'>Pork(kg)</th>
                      <th style='text-align: center'>Chicken(kg)</th>
                      <th style='text-align: center'>Fish(kg)</th>
                      <th style='text-align: center'>Egg(kg)</th>
                    </tr>
                  </thead>";
    while($row = mysql_fetch_array( $result )) {
      
      echo "<tbody><tr>";
      echo "<td>".$row['barangay']."</td>";
          $mun = $row['municipality'];
          $bar = $row['barangay'];

          $que = mysql_query("SELECT barangaycode from barangays where barangay = '$bar'");
          while ($q = mysql_fetch_array($que)) {
            $b = $bar." - ".$q['barangaycode'];
          
           $result1 = mysql_query("SELECT SUM(beef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(beef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(carabeef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(carabeef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(pork) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(pork)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(chicken) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(chicken)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(fish) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(fish)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(egg) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(egg)']."</td>";
          }
        }

    } 
  echo "<tbody></table>";

                    ?>
     
                  </div>
                  
                </div>
              </div>
            </div>
      </div>



      <!-- ITOGON -->
      <div class="form-group no-print">
      <div class="col-md-3 col-sm-3 col-xs-6 col-md-offset-7">
        <button onclick="printcontent('table4')" type="button" class="btn btn-primary">Print Records for Household Consumption(Itogon)</button>
      </div>
      </div>
            <div class="clearfix"></div>
            <div class="row">
              <div id="table4">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Household Consumption (Itogon) <small></small></h2>
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
                $result = mysql_query("SELECT * FROM barangays where municipality = 'Itogon' order by municipality ASC") or die(mysql_error());
   

    echo "<table class='table table-striped table-bordered' style='font-size:13px;'>";
    echo "<thead>
                    <tr>
                      <th style='text-align: center'>Barangay</th>
                      <th style='text-align: center'>Beef(kg)</th>
                      <th style='text-align: center'>Carabeef(kg)</th>
                      <th style='text-align: center'>Pork(kg)</th>
                      <th style='text-align: center'>Chicken(kg)</th>
                      <th style='text-align: center'>Fish(kg)</th>
                      <th style='text-align: center'>Egg(kg)</th>
                    </tr>
                  </thead>";
    while($row = mysql_fetch_array( $result )) {
      
      echo "<tbody><tr>";
      echo "<td>".$row['barangay']."</td>";
          $mun = $row['municipality'];
          $bar = $row['barangay'];

          $que = mysql_query("SELECT barangaycode from barangays where barangay = '$bar'");
          while ($q = mysql_fetch_array($que)) {
            $b = $bar." - ".$q['barangaycode'];
          
           $result1 = mysql_query("SELECT SUM(beef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(beef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(carabeef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(carabeef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(pork) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(pork)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(chicken) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(chicken)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(fish) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(fish)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(egg) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(egg)']."</td>";
          }
        }

    } 
  echo "<tbody></table>";

                    ?>
     
                  </div>
                  
                </div>
              </div>
            </div>
      </div>




      <!-- KABAYAN -->
      <div class="form-group no-print">
      <div class="col-md-3 col-sm-3 col-xs-6 col-md-offset-7">
        <button onclick="printcontent('table5')" type="button" class="btn btn-primary">Print Records for Household Consumption(Kabayan)</button>
      </div>
      </div>
            <div class="clearfix"></div>
            <div class="row">
              <div id="table5">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Household Consumption (Kabayan) <small></small></h2>
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
                $result = mysql_query("SELECT * FROM barangays where municipality = 'Kabayan' order by municipality ASC") or die(mysql_error());
   

    echo "<table class='table table-striped table-bordered' style='font-size:13px;'>";
    echo "<thead>
                    <tr>
                      <th style='text-align: center'>Barangay</th>
                      <th style='text-align: center'>Beef(kg)</th>
                      <th style='text-align: center'>Carabeef(kg)</th>
                      <th style='text-align: center'>Pork(kg)</th>
                      <th style='text-align: center'>Chicken(kg)</th>
                      <th style='text-align: center'>Fish(kg)</th>
                      <th style='text-align: center'>Egg(kg)</th>
                    </tr>
                  </thead>";
    while($row = mysql_fetch_array( $result )) {
      
      echo "<tbody><tr>";
      echo "<td>".$row['barangay']."</td>";
          $mun = $row['municipality'];
          $bar = $row['barangay'];

          $que = mysql_query("SELECT barangaycode from barangays where barangay = '$bar'");
          while ($q = mysql_fetch_array($que)) {
            $b = $bar." - ".$q['barangaycode'];
          
           $result1 = mysql_query("SELECT SUM(beef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(beef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(carabeef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(carabeef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(pork) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(pork)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(chicken) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(chicken)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(fish) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(fish)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(egg) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(egg)']."</td>";
          }
        }

    } 
  echo "<tbody></table>";

                    ?>
     
                  </div>
                  
                </div>
              </div>
            </div>
      </div>




      <!-- KAPANGAN -->
      <div class="form-group no-print">
      <div class="col-md-3 col-sm-3 col-xs-6 col-md-offset-7">
        <button onclick="printcontent('table6')" type="button" class="btn btn-primary">Print Records for Household Consumption(Kapangan)</button>
      </div>
      </div>
            <div class="clearfix"></div>
            <div class="row">
              <div id="table6">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Household Consumption (Kapangan) <small></small></h2>
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
                $result = mysql_query("SELECT * FROM barangays where municipality = 'Kapangan' order by municipality ASC") or die(mysql_error());
   

    echo "<table class='table table-striped table-bordered' style='font-size:13px;'>";
    echo "<thead>
                    <tr>
                      <th style='text-align: center'>Barangay</th>
                      <th style='text-align: center'>Beef(kg)</th>
                      <th style='text-align: center'>Carabeef(kg)</th>
                      <th style='text-align: center'>Pork(kg)</th>
                      <th style='text-align: center'>Chicken(kg)</th>
                      <th style='text-align: center'>Fish(kg)</th>
                      <th style='text-align: center'>Egg(kg)</th>
                    </tr>
                  </thead>";
    while($row = mysql_fetch_array( $result )) {
      
      echo "<tbody><tr>";
      echo "<td>".$row['barangay']."</td>";
          $mun = $row['municipality'];
          $bar = $row['barangay'];

          $que = mysql_query("SELECT barangaycode from barangays where barangay = '$bar'");
          while ($q = mysql_fetch_array($que)) {
            $b = $bar." - ".$q['barangaycode'];
          
           $result1 = mysql_query("SELECT SUM(beef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(beef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(carabeef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(carabeef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(pork) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(pork)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(chicken) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(chicken)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(fish) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(fish)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(egg) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(egg)']."</td>";
          }
        }

    } 
  echo "<tbody></table>";

                    ?>
     
                  </div>
                  
                </div>
              </div>
            </div>
      </div>




      <!-- KIBUNGAN -->
      <div class="form-group no-print">
      <div class="col-md-3 col-sm-3 col-xs-6 col-md-offset-7">
        <button onclick="printcontent('table7')" type="button" class="btn btn-primary">Print Records for Household Consumption(Kibungan)</button>
      </div>
      </div>
            <div class="clearfix"></div>
            <div class="row">
              <div id="table7">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Household Consumption (Kibungan) <small></small></h2>
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
                $result = mysql_query("SELECT * FROM barangays where municipality = 'Kibungan' order by municipality ASC") or die(mysql_error());
   

    echo "<table class='table table-striped table-bordered' style='font-size:13px;'>";
    echo "<thead>
                    <tr>
                      <th style='text-align: center'>Barangay</th>
                      <th style='text-align: center'>Beef(kg)</th>
                      <th style='text-align: center'>Carabeef(kg)</th>
                      <th style='text-align: center'>Pork(kg)</th>
                      <th style='text-align: center'>Chicken(kg)</th>
                      <th style='text-align: center'>Fish(kg)</th>
                      <th style='text-align: center'>Egg(kg)</th>
                    </tr>
                  </thead>";
    while($row = mysql_fetch_array( $result )) {
      
      echo "<tbody><tr>";
      echo "<td>".$row['barangay']."</td>";
          $mun = $row['municipality'];
          $bar = $row['barangay'];

          $que = mysql_query("SELECT barangaycode from barangays where barangay = '$bar'");
          while ($q = mysql_fetch_array($que)) {
            $b = $bar." - ".$q['barangaycode'];
          
           $result1 = mysql_query("SELECT SUM(beef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(beef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(carabeef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(carabeef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(pork) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(pork)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(chicken) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(chicken)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(fish) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(fish)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(egg) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(egg)']."</td>";
          }
        }

    } 
  echo "<tbody></table>";

                    ?>
     
                  </div>
                  
                </div>
              </div>
            </div>
      </div>




      <!-- La TRINIDAD -->
      <div class="form-group no-print">
      <div class="col-md-3 col-sm-3 col-xs-6 col-md-offset-7">
        <button onclick="printcontent('table8')" type="button" class="btn btn-primary">Print Records for Household Consumption(La Trinidad)</button>
      </div>
      </div>
            <div class="clearfix"></div>
            <div class="row">
              <div id="table8">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Household Consumption (La Trinidad) <small></small></h2>
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
                $result = mysql_query("SELECT * FROM barangays where municipality = 'La Trinidad' order by municipality ASC") or die(mysql_error());
   

    echo "<table class='table table-striped table-bordered' style='font-size:13px;'>";
    echo "<thead>
                    <tr>
                      <th style='text-align: center'>Barangay</th>
                      <th style='text-align: center'>Beef(kg)</th>
                      <th style='text-align: center'>Carabeef(kg)</th>
                      <th style='text-align: center'>Pork(kg)</th>
                      <th style='text-align: center'>Chicken(kg)</th>
                      <th style='text-align: center'>Fish(kg)</th>
                      <th style='text-align: center'>Egg(kg)</th>
                    </tr>
                  </thead>";
    while($row = mysql_fetch_array( $result )) {
      
      echo "<tbody><tr>";
      echo "<td>".$row['barangay']."</td>";
          $mun = $row['municipality'];
          $bar = $row['barangay'];

          $que = mysql_query("SELECT barangaycode from barangays where barangay = '$bar'");
          while ($q = mysql_fetch_array($que)) {
            $b = $bar." - ".$q['barangaycode'];
          
           $result1 = mysql_query("SELECT SUM(beef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(beef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(carabeef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(carabeef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(pork) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(pork)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(chicken) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(chicken)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(fish) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(fish)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(egg) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(egg)']."</td>";
          }
        }

    } 
  echo "<tbody></table>";

                    ?>
     
                  </div>
                  
                </div>
              </div>
            </div>
      </div>




      <!-- MANKAYAN -->
      <div class="form-group no-print">
      <div class="col-md-3 col-sm-3 col-xs-6 col-md-offset-7">
        <button onclick="printcontent('table9')" type="button" class="btn btn-primary">Print Records for Household Consumption(Mankayan)</button>
      </div>
      </div>
            <div class="clearfix"></div>
            <div class="row">
              <div id="table9">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Household Consumption (Mankayan) <small></small></h2>
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
                $result = mysql_query("SELECT * FROM barangays where municipality = 'Mankayan' order by municipality ASC") or die(mysql_error());
   

    echo "<table class='table table-striped table-bordered' style='font-size:13px;'>";
    echo "<thead>
                    <tr>
                      <th style='text-align: center'>Barangay</th>
                      <th style='text-align: center'>Beef(kg)</th>
                      <th style='text-align: center'>Carabeef(kg)</th>
                      <th style='text-align: center'>Pork(kg)</th>
                      <th style='text-align: center'>Chicken(kg)</th>
                      <th style='text-align: center'>Fish(kg)</th>
                      <th style='text-align: center'>Egg(kg)</th>
                    </tr>
                  </thead>";
    while($row = mysql_fetch_array( $result )) {
      
      echo "<tbody><tr>";
      echo "<td>".$row['barangay']."</td>";
          $mun = $row['municipality'];
          $bar = $row['barangay'];

          $que = mysql_query("SELECT barangaycode from barangays where barangay = '$bar'");
          while ($q = mysql_fetch_array($que)) {
            $b = $bar." - ".$q['barangaycode'];
          
           $result1 = mysql_query("SELECT SUM(beef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(beef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(carabeef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(carabeef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(pork) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(pork)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(chicken) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(chicken)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(fish) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(fish)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(egg) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(egg)']."</td>";
          }
        }

    } 
  echo "<tbody></table>";

                    ?>
     
                  </div>
                  
                </div>
              </div>
            </div>
      </div>




      <!-- SABLAN -->
      <div class="form-group no-print">
      <div class="col-md-3 col-sm-3 col-xs-6 col-md-offset-7">
        <button onclick="printcontent('table10')" type="button" class="btn btn-primary">Print Records for Household Consumption(Sablan)</button>
      </div>
      </div>
            <div class="clearfix"></div>
            <div class="row">
              <div id="table10">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Household Consumption (Sablan) <small></small></h2>
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
                $result = mysql_query("SELECT * FROM barangays where municipality = 'Sablan' order by municipality ASC") or die(mysql_error());
   

    echo "<table class='table table-striped table-bordered' style='font-size:13px;'>";
    echo "<thead>
                    <tr>
                      <th style='text-align: center'>Barangay</th>
                      <th style='text-align: center'>Beef(kg)</th>
                      <th style='text-align: center'>Carabeef(kg)</th>
                      <th style='text-align: center'>Pork(kg)</th>
                      <th style='text-align: center'>Chicken(kg)</th>
                      <th style='text-align: center'>Fish(kg)</th>
                      <th style='text-align: center'>Egg(kg)</th>
                    </tr>
                  </thead>";
    while($row = mysql_fetch_array( $result )) {
      
      echo "<tbody><tr>";
      echo "<td>".$row['barangay']."</td>";
          $mun = $row['municipality'];
          $bar = $row['barangay'];

          $que = mysql_query("SELECT barangaycode from barangays where barangay = '$bar'");
          while ($q = mysql_fetch_array($que)) {
            $b = $bar." - ".$q['barangaycode'];
          
           $result1 = mysql_query("SELECT SUM(beef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(beef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(carabeef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(carabeef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(pork) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(pork)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(chicken) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(chicken)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(fish) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(fish)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(egg) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(egg)']."</td>";
          }
        }

    } 
  echo "<tbody></table>";

                    ?>
     
                  </div>
                  
                </div>
              </div>
            </div>
      </div>




      <!-- TUBA -->
      <div class="form-group no-print">
      <div class="col-md-3 col-sm-3 col-xs-6 col-md-offset-7">
        <button onclick="printcontent('table11')" type="button" class="btn btn-primary">Print Records for Household Consumption(Tuba)</button>
      </div>
      </div>
            <div class="clearfix"></div>
            <div class="row">
              <div id="table11">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Household Consumption (Tuba) <small></small></h2>
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
                $result = mysql_query("SELECT * FROM barangays where municipality = 'Tuba' order by municipality ASC") or die(mysql_error());
   

    echo "<table class='table table-striped table-bordered' style='font-size:13px;'>";
    echo "<thead>
                    <tr>
                      <th style='text-align: center'>Barangay</th>
                      <th style='text-align: center'>Beef(kg)</th>
                      <th style='text-align: center'>Carabeef(kg)</th>
                      <th style='text-align: center'>Pork(kg)</th>
                      <th style='text-align: center'>Chicken(kg)</th>
                      <th style='text-align: center'>Fish(kg)</th>
                      <th style='text-align: center'>Egg(kg)</th>
                    </tr>
                  </thead>";
    while($row = mysql_fetch_array( $result )) {
      
      echo "<tbody><tr>";
      echo "<td>".$row['barangay']."</td>";
          $mun = $row['municipality'];
          $bar = $row['barangay'];

          $que = mysql_query("SELECT barangaycode from barangays where barangay = '$bar'");
          while ($q = mysql_fetch_array($que)) {
            $b = $bar." - ".$q['barangaycode'];
          
           $result1 = mysql_query("SELECT SUM(beef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(beef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(carabeef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(carabeef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(pork) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(pork)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(chicken) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(chicken)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(fish) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(fish)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(egg) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(egg)']."</td>";
          }
        }

    } 
  echo "<tbody></table>";

                    ?>
     
                  </div>
                  
                </div>
              </div>
            </div>
      </div>




      <!-- TUBLAY -->
      <div class="form-group no-print">
      <div class="col-md-3 col-sm-3 col-xs-6 col-md-offset-7">
        <button onclick="printcontent('table12')" type="button" class="btn btn-primary">Print Records for Household Consumption(Tublay)</button>
      </div>
      </div>
            <div class="clearfix"></div>
            <div class="row">
              <div id="table12">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Household Consumption (Tublay) <small></small></h2>
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
                $result = mysql_query("SELECT * FROM barangays where municipality = 'Tublay' order by municipality ASC") or die(mysql_error());
   

    echo "<table class='table table-striped table-bordered' style='font-size:13px;'>";
    echo "<thead>
                    <tr>
                      <th style='text-align: center'>Barangay</th>
                      <th style='text-align: center'>Beef(kg)</th>
                      <th style='text-align: center'>Carabeef(kg)</th>
                      <th style='text-align: center'>Pork(kg)</th>
                      <th style='text-align: center'>Chicken(kg)</th>
                      <th style='text-align: center'>Fish(kg)</th>
                      <th style='text-align: center'>Egg(kg)</th>
                    </tr>
                  </thead>";
    while($row = mysql_fetch_array( $result )) {
      
      echo "<tbody><tr>";
      echo "<td>".$row['barangay']."</td>";
          $mun = $row['municipality'];
          $bar = $row['barangay'];

          $que = mysql_query("SELECT barangaycode from barangays where barangay = '$bar'");
          while ($q = mysql_fetch_array($que)) {
            $b = $bar." - ".$q['barangaycode'];
          
           $result1 = mysql_query("SELECT SUM(beef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(beef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(carabeef) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(carabeef)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(pork) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(pork)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(chicken) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(chicken)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(fish) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(fish)']."</td>";
            }
            $result1 = mysql_query("SELECT SUM(egg) from hconsumption where municipality = '$mun' && barangay = '$b'");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(egg)']."</td>";
          }
        }

    } 
  echo "<tbody></table>";

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