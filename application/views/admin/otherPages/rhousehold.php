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
<style type="text/css" media="print">
.dontprint
{ display: none; }
</style>

<!DOCTYPE html>
<html lang="en">
          
          <?php include 'static\dashboard.html'; ?>
  
        <!-- page content -->
        <div class="form-group no-print">
                        <div class="col-md-3 col-sm-6 col-xs-6 col-md-offset-7">
                          <button onclick="printcontent('table')" type="button" class="btn btn-primary">Print Records for Household Consumption(Province)</button>
                 </div>
      </div>
            <div class="clearfix"></div>
            <div class="row">
              <div id="table">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title ">           
                  <h2>Household Consumption(Province)</h2><br>
                    <ul class="nav navbar-right panel_toolbox noPrint" >
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
                    </ul><br>
                    <p style="font-size:12px">Total Household Consumption per week * 52 / Total Household Member = Household Consumption per Capita</p>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
        

                    <?php
                include 'databaseconnect.php';
                $result = mysql_query("SELECT * FROM municipalities") or die(mysql_error());
   

    echo "<table class='datatable-1 table table-striped table-bordered' style='font-size:13px;'>";
    echo "<thead style='font-size:12px; colspan='20'>
                    <tr>
                      <th style='text-align: center' colspan='1' rowspan='2'>Province</th>
                      <th style='text-align: center' colspan='1' rowspan='2'>Total HHM</th>
                      <th style='text-align: center' colspan='3'>Beef</th>
                      <th style='text-align: center' colspan='3'>Carabeef</th>
                      <th style='text-align: center' colspan='3'>Pork</th>
                    </tr>
                    <tr>
                      <th style='text-align: center'>Beef(kg)</th>
                      <th style='text-align: center'>Total HHM(beef)</th>
                      <th style='text-align: center'>Beef per capita</th>
                      <th style='text-align: center'>Carabeef(kg)</th>
                      <th style='text-align: center'>Total HHM(carabeef)</th>
                      <th style='text-align: center'>Carabeef per Capita</th>
                      <th style='text-align: center'>Pork(kg)</th>
                      <th style='text-align: center'>Total HHM(pork)</th>
                      <th style='text-align: center'>Pork per Capita</th>
                    </tr>
                  </thead>";

    
      
      echo "<tbody><tr><td rowspan='4'>Benguet</td>";
          $hmember;
          $hmemberb;
          $hmembercb;
          $hmemberp;
          $hmemberch;
          $hmemberf;
          $hmembere;
          $sbeef;
          $scarabeef;
          $spork;
          $schicken;
          $sfish;
          $segg;
          $b;
          $c;
          $p;
          $cc;
          $f;
          $e;

          $result = mysql_query("SELECT SUM(hmember) from hconsumption");
            while ($row2 = mysql_fetch_array($result)) {
              $hmember = $row2['SUM(hmember)'];
              echo "<td rowspan='4'>".$hmember."</td>";
            }



            //BEEF
          $result = mysql_query("SELECT SUM(hmember) from hconsumption where beef != '0'");
            while ($row2 = mysql_fetch_array($result)) {
              $hmemberb = $row2['SUM(hmember)'];
            }
          $result1 = mysql_query("SELECT SUM(beef) from hconsumption");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td>".$row2['SUM(beef)']."</td>";
              $b = $row2['SUM(beef)'];
            }
            if ($hmemberb > '0') {
            $sbeef = ($b * 52) / $hmemberb;
            $sb = round($sbeef,2);
            echo "<td>".$hmemberb."</td>";
            echo "<td>".$sb."</td>";
            }
            else{
            echo "<td>0</td>";
            echo "<td>0</td>";
            }


            //CARABEEF
             $result = mysql_query("SELECT SUM(hmember) from hconsumption where carabeef != '0'");
            while ($row2 = mysql_fetch_array($result)) {
              $hmembercb = $row2['SUM(hmember)'];
            }
            $result2 = mysql_query("SELECT SUM(carabeef) from hconsumption");
            while ($row2 = mysql_fetch_array($result2)) {
              echo "<td>".$row2['SUM(carabeef)']."</td>";
              $c = $row2['SUM(carabeef)'];
            }
            if ($hmembercb > '0') {
            $scarabeef = ($c * 52)/ $hmembercb;
            $sc = round($scarabeef,2);
            echo "<td>".$hmembercb."</td>";
            echo "<td>".$sc."</td>";
            }
            else{
            echo "<td>0</td>";
            echo "<td>0</td>";
            }

            //PORK
            $result = mysql_query("SELECT SUM(hmember) from hconsumption where pork != '0'");
            while ($row2 = mysql_fetch_array($result)) {
              $hmemberp = $row2['SUM(hmember)'];
            }
            $result3 = mysql_query("SELECT SUM(pork) from hconsumption");
            while ($row2 = mysql_fetch_array($result3)) {
              echo "<td>".$row2['SUM(pork)']."</td>";
              $p = $row2['SUM(pork)'];
            }
            if ($hmemberp > '0') {
            $spork = ($p * 52)/ $hmemberp;
            $sp = round($spork,2);
            echo "<td>".$hmemberp."</td>";
            echo "<td>".$sp."</td>";
            }
            else{
            echo "<td>0</td>";
            echo "<td>0</td>";
            }

            echo "
                    <tr>
                      <th style='text-align: center' colspan='3'>Chicken</th>
                      <th style='text-align: center' colspan='3'>Fish</th>
                      <th style='text-align: center' colspan='3'>Egg</th>
                    </tr>
                    <tr>
                      <th style='text-align: center'>Chicken(kg)</th>
                      <th style='text-align: center'>Total HHM(chicken)</th>
                      <th style='text-align: center'>Chicken per Capita</th>
                      <th style='text-align: center'>Fish(kg)</th>
                      <th style='text-align: center'>Total HHM(fish)</th>
                      <th style='text-align: center'>Fish per Capita</th>
                      <th style='text-align: center'>Egg(pcs)</th>
                      <th style='text-align: center'>Total HHM(egg)</th>
                      <th style='text-align: center'>Egg per Capita</th>
                    </tr>";

            //CHICKEN
            $result = mysql_query("SELECT SUM(hmember) from hconsumption where chicken != '0'");
            while ($row2 = mysql_fetch_array($result)) {
              $hmemberch = $row2['SUM(hmember)'];
            }
            $result4 = mysql_query("SELECT SUM(chicken) from hconsumption");
            while ($row2 = mysql_fetch_array($result4)) {
              echo "<td>".$row2['SUM(chicken)']."</td>";
              $cc = $row2['SUM(chicken)'];
            }
            if ($hmemberch > '0') {
            $schicken = ($cc * 52)/ $hmemberch;
            $scc = round($schicken,2);
             echo "<td>".$hmemberch."</td>";
            echo "<td>".$scc."</td>";
            }
            else{
            echo "<td>0</td>";
            echo "<td>0</td>";
            }


            //FISH
            $result = mysql_query("SELECT SUM(hmember) from hconsumption where fish != '0'");
            while ($row2 = mysql_fetch_array($result)) {
              $hmemberf = $row2['SUM(hmember)'];
            }
            $result5 = mysql_query("SELECT SUM(fish) from hconsumption");
            while ($row2 = mysql_fetch_array($result5)) {
              echo "<td>".$row2['SUM(fish)']."</td>";
              $f = $row2['SUM(fish)'];
            }
            if ($hmemberf > '0') {
            $sfish = ($f * 52)/ $hmemberf;
            $sf = round($sfish,2);
            echo "<td>".$hmemberf."</td>";
            echo "<td>".$sf."</td>";
            }
            else{
            echo "<td>0</td>";
            echo "<td>0</td>";
            }



            //EGG
            $result = mysql_query("SELECT SUM(hmember) from hconsumption where egg != '0'");
            while ($row2 = mysql_fetch_array($result)) {
              $hmembere= $row2['SUM(hmember)'];
            }
            $result6 = mysql_query("SELECT SUM(egg) from hconsumption");
            while ($row2 = mysql_fetch_array($result6)) {
              echo "<td>".$row2['SUM(egg)']."</td>";
              $e = $row2['SUM(egg)'];
            }
            if ($hmembere > '0') {
            $segg = ($e * 52)/ $hmembere;
            $se = round($segg,2);
            echo "<td>".$hmembere."</td>";
            echo "<td>".$se."</td>";
            }
            else{
            echo "<td>0</td>";
            echo "<td>0</td>";
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