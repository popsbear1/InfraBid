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
                        <div class="col-md-3 col-sm-6 col-xs-6 col-md-offset-7">
                          <button onclick="printcontent('table')" type="button" class="btn btn-primary">Print Records for Animal Classification(Province)</button>
                 </div>
                 </div>
            <div class="clearfix"></div>
            <div id="table">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12 ">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Total Record of Animals per Classification for the Province of Benguet<small></small></h2>
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

    echo "<table width=100% class='datatable-1 table table-striped table-bordered' style='font-size:13px; col-md-12 col-sm-12 col-xs-12'>";

    //DOG
    echo "<thead style='font-size:12px;colspan='12'>
                    <tr>
                      <th style='text-align: center;' colspan='12';><b>DOG</b></th>
                      </tr>
                      <th style='text-align: center;'colspan='4'>Dog 3 mos. and above</th>
                      <th style='text-align: center;'colspan='6'>Dog below 3 mos.</th>
                    </tr>
                  </thead>";
    echo "<tbody><tr>";
         

            //dogs3u
             $result1 = mysql_query("SELECT SUM(dogs3u) from dog");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td style='text-align: center;' colspan='4'>".$row2['SUM(dogs3u)']."</td>";
            }
            //dogs3d  
            $result2 = mysql_query("SELECT SUM(dogs3d) from dog");
            while ($row3 = mysql_fetch_array($result2)) {
              echo "<td style='text-align: center;'colspan='6'>".$row3['SUM(dogs3d)']."</td>";
            }

echo "<tbody></table>";


    //CAT
echo "<table width=100% class='datatable-1 table table-striped table-bordered' style='font-size:13px; col-md-12 col-sm-12 col-xs-12'>";
    echo "<thead style='font-size:12px;colspan='12'>
                    <tr>
                      <th style='text-align: center;' colspan='12';><b>CAT</b></th>
                      </tr>
                      <th style='text-align: center;'colspan='4'>Cat 3 mos. and above</th>
                      <th style='text-align: center;'colspan='8'>Cat below 3 mos.</th>
                    </tr>
                  </thead>";
    echo "<tbody><tr>";
         

            //cats3u
             $result1 = mysql_query("SELECT SUM(cats3u) from cat");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td style='text-align: center;'colspan='4'>".$row2['SUM(cats3u)']."</td>";
            }
            //cats3d  
            $result2 = mysql_query("SELECT SUM(cats3d) from cat");
            while ($row3 = mysql_fetch_array($result2)) {
              echo "<td style='text-align: center;'colspan='8'>".$row3['SUM(cats3d)']."</td>";
            }
echo "<tbody></table>";


    //SWINE
echo "<table width=100% class='datatable-1 table table-striped table-bordered' style='font-size:13px; col-md-12 col-sm-12 col-xs-12'>";
    echo "<thead style='font-size:12px;colspan='12'>
                    <tr>
                      <th style='text-align: center;' colspan='12';><b>SWINE</b></th>
                      </tr>
                      <th style='text-align: center;'colspan='2'>Boar</th>
                      <th style='text-align: center;'colspan='2'>Sow</th>
                      <th style='text-align: center;'colspan='2'>Gilt</th>
                      <th style='text-align: center;'colspan='2'>Fattener / Finisher</th>
                      <th style='text-align: center;'colspan='2'>Grower</th>
                      <th style='text-align: center;'colspan='2'>Piglets</th>
                    </tr>
                      <th style='text-align: center;'colspan='0.5'>N</th>
                      <th style='text-align: center;'colspan='0.5'>U</th>
                      <th style='text-align: center;'colspan='0.5'>N</th>
                      <th style='text-align: center;'colspan='0.5'>U</th>
                      <th style='text-align: center;'colspan='0.5'>N</th>
                      <th style='text-align: center;'colspan='0.5'>U</th>
                      <th style='text-align: center;'colspan='0.5'>N</th>
                      <th style='text-align: center;'colspan='0.5'>U</th>
                      <th style='text-align: center;'colspan='0.5'>N</th>
                      <th style='text-align: center;'colspan='0.5'>U</th>
                      <th style='text-align: center;'colspan='0.5'>N</th>
                      <th style='text-align: center;'colspan='0.5'>U</th>
                  </thead>";
    echo "<tbody><tr>";
         

            //boarN
             $result1 = mysql_query("SELECT SUM(boarN) from swine");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td style='text-align: center;'>".$row2['SUM(boarN)']."</td>";
            }
            //boarU  
            $result2 = mysql_query("SELECT SUM(boarU) from swine");
            while ($row3 = mysql_fetch_array($result2)) {
              echo "<td style='text-align: center;'>".$row3['SUM(boarU)']."</td>";
            }
             //sowN
             $result4 = mysql_query("SELECT SUM(sowN) from swine");
            while ($row4 = mysql_fetch_array($result4)) {
              echo "<td style='text-align: center;'>".$row4['SUM(sowN)']."</td>";
            }
            //sowU  
            $result5 = mysql_query("SELECT SUM(sowU) from swine");
            while ($row5 = mysql_fetch_array($result5)) {
              echo "<td style='text-align: center;'>".$row5['SUM(sowU)']."</td>";
            }
             //giltN
             $result6 = mysql_query("SELECT SUM(giltN) from swine");
            while ($row6 = mysql_fetch_array($result6)) {
              echo "<td style='text-align: center;'>".$row6['SUM(giltN)']."</td>";
            }
            //giltU  
            $result7 = mysql_query("SELECT SUM(giltU) from swine");
            while ($row7 = mysql_fetch_array($result7)) {
              echo "<td style='text-align: center;'>".$row7['SUM(giltU)']."</td>";
            }
             //fattenerN
             $result8 = mysql_query("SELECT SUM(fattenerN) from swine");
            while ($row8 = mysql_fetch_array($result8)) {
              echo "<td style='text-align: center;'>".$row8['SUM(fattenerN)']."</td>";
            }
            //fattenerU  
            $result9 = mysql_query("SELECT SUM(fattenerU) from swine");
            while ($row9 = mysql_fetch_array($result9)) {
              echo "<td style='text-align: center;'>".$row9['SUM(fattenerU)']."</td>";
            }
             //growerN
             $result10 = mysql_query("SELECT SUM(growerN) from swine");
            while ($row10 = mysql_fetch_array($result10)) {
              echo "<td style='text-align: center;'>".$row10['SUM(growerN)']."</td>";
            }
            //growerU  
            $result11 = mysql_query("SELECT SUM(growerU) from swine");
            while ($row11 = mysql_fetch_array($result11)) {
              echo "<td style='text-align: center;'>".$row11['SUM(growerU)']."</td>";
            }
             //pigletN
             $result12 = mysql_query("SELECT SUM(pigletN) from swine");
            while ($row12 = mysql_fetch_array($result12)) {
              echo "<td style='text-align: center;'>".$row12['SUM(pigletN)']."</td>";
            }
            //pigletU  
            $result13 = mysql_query("SELECT SUM(pigletU) from swine");
            while ($row13 = mysql_fetch_array($result13)) {
              echo "<td style='text-align: center;'>".$row13['SUM(pigletU)']."</td>";
            }
echo "<thead style='font-size:12px;colspan='12'>
                    <tr>
                      <th style='text-align: center;'colspan='4'>How many are organic</th>
                      <th style='text-align: center;'colspan='4'>Slaughtered on Farm / Household (kg)</th>
                      <th style='text-align: center;'colspan='4'>Sold for Slaughter (kg)</th>
                    </tr>
      </thead>";
      echo "<tbody><tr>";
         

            //organic
             $result1 = mysql_query("SELECT SUM(organic) from swine");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td style='text-align: center;'colspan='4'>".$row2['SUM(organic)']."</td>";
            }
            //slaughter  
            $result2 = mysql_query("SELECT SUM(slaughter) from swine");
            while ($row3 = mysql_fetch_array($result2)) {
              echo "<td style='text-align: center;'colspan='4'>".$row3['SUM(slaughter)']."</td>";
            }
             //slaughtersold
             $result4 = mysql_query("SELECT SUM(slaughtersold) from swine");
            while ($row4 = mysql_fetch_array($result4)) {
              echo "<td style='text-align: center;'colspan='4'>".$row4['SUM(slaughtersold)']."</td><tr>";
            }
    

  echo "<tbody></table>";


  //CHICKEN
echo "<table width=100% class='datatable-1 table table-striped table-bordered' style='font-size:13px; col-md-12 col-sm-12 col-xs-12'>";
    echo "<thead style='font-size:12px;colspan='12'>
                    <tr>
                      <th style='text-align: center;' colspan='12';><b>CHICKEN</b></th>
                      </tr>
                      <th style='text-align: center;'colspan='2'>Broiler</th>
                      <th style='text-align: center;'colspan='2'>Layer</th>
                      <th style='text-align: center;'colspan='2'>Native</th>
                      <th style='text-align: center;'colspan='2'>Dual Purpose</th>
                      <th style='text-align: center;'colspan='2'>Gamefowls</th>
                    </tr>
                  </thead>";
    echo "<tbody><tr>";
         

            //broiler
             $result1 = mysql_query("SELECT SUM(broiler) from chicken");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td style='text-align: center;'colspan='2'>".$row2['SUM(broiler)']."</td>";
            }
            //layer  
            $result2 = mysql_query("SELECT SUM(layer) from chicken");
            while ($row3 = mysql_fetch_array($result2)) {
              echo "<td style='text-align: center;'colspan='2'>".$row3['SUM(layer)']."</td>";
            }
             //native
             $result4 = mysql_query("SELECT SUM(native) from chicken");
            while ($row4 = mysql_fetch_array($result4)) {
              echo "<td style='text-align: center;'colspan='2'>".$row4['SUM(native)']."</td>";
            }
            //dpurpose  
            $result5 = mysql_query("SELECT SUM(dpurpose) from chicken");
            while ($row5 = mysql_fetch_array($result5)) {
              echo "<td style='text-align: center;'colspan='2'>".$row5['SUM(dpurpose)']."</td>";
            }
             //gamefowls
             $result6 = mysql_query("SELECT SUM(gamefowls) from chicken");
            while ($row6 = mysql_fetch_array($result6)) {
              echo "<td style='text-align: center;'colspan='2'>".$row6['SUM(gamefowls)']."</td>";
            }
          
echo "<thead style='font-size:12px;colspan='12'>
                    <tr>
                      <th style='text-align: center;'colspan='4'>How many are organic</th>
                      <th style='text-align: center;'colspan='4'>Dressed on Farm / Household (kg)</th>
                      <th style='text-align: center;'colspan='4'>Sold for Slaughter (kg)</th>
                    </tr>
      </thead>";
      echo "<tbody><tr>";
         

            //organic
             $result1 = mysql_query("SELECT SUM(organic) from chicken");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td style='text-align: center;'colspan='4'>".$row2['SUM(organic)']."</td>";
            }
            //dressed  
            $result2 = mysql_query("SELECT SUM(dressed) from chicken");
            while ($row3 = mysql_fetch_array($result2)) {
              echo "<td style='text-align: center;'colspan='4'>".$row3['SUM(dressed)']."</td>";
            }
             //slaughter
             $result4 = mysql_query("SELECT SUM(slaughter) from chicken");
            while ($row4 = mysql_fetch_array($result4)) {
              echo "<td style='text-align: center;'colspan='4'>".$row4['SUM(slaughter)']."</td><tr>";
            }
    

  echo "<tbody></table> <br><br>";





  //CATTLE
echo "<table width=100% class='datatable-1 table table-striped table-bordered' style='font-size:13px; col-md-12 col-sm-12 col-xs-12'>";
    echo "<thead style='font-size:12px;colspan='12'>
                    <tr>
                      <th style='text-align: center;' colspan='12';><b>CATTLE</b></th>
                      </tr>
                      <th style='text-align: center;'colspan='2'>Bull</th>
                      <th style='text-align: center;'colspan='2'>Cow</th>
                      <th style='text-align: center;'colspan='2'>Male</th>
                      <th style='text-align: center;'colspan='2'>Yearling</th>
                      <th style='text-align: center;'colspan='2' rowspan='2'>Heifer</th>
                    </tr>
                      <th style='text-align: center;'colspan='1'>D</th>
                      <th style='text-align: center;'colspan='1'>M</th>
                      <th style='text-align: center;'colspan='1'>D</th>
                      <th style='text-align: center;'colspan='1'>M</th>
                      <th style='text-align: center;'colspan='1'>D</th>
                      <th style='text-align: center;'colspan='1'>M</th>
                      <th style='text-align: center;'colspan='1'>D</th>
                      <th style='text-align: center;'colspan='1'>M</th>
                  </thead>";
    echo "<tbody><tr>";
         

            //bullD
             $result1 = mysql_query("SELECT SUM(bullD) from cattle");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td style='text-align: center;'colspan='1'>".$row2['SUM(bullD)']."</td>";
            }
            //bullM  
            $result2 = mysql_query("SELECT SUM(bullM) from cattle");
            while ($row3 = mysql_fetch_array($result2)) {
              echo "<td style='text-align: center;'colspan='1'>".$row3['SUM(bullM)']."</td>";
            }
             //cowD
             $result4 = mysql_query("SELECT SUM(cowD) from cattle");
            while ($row4 = mysql_fetch_array($result4)) {
              echo "<td style='text-align: center;'colspan='1'>".$row4['SUM(cowD)']."</td>";
            }
            //cowM  
            $result5 = mysql_query("SELECT SUM(cowM) from cattle");
            while ($row5 = mysql_fetch_array($result5)) {
              echo "<td style='text-align: center;'colspan='1'>".$row5['SUM(cowM)']."</td>";
            }
             //maleD
             $result6 = mysql_query("SELECT SUM(maleD) from cattle");
            while ($row6 = mysql_fetch_array($result6)) {
              echo "<td style='text-align: center;'colspan='1'>".$row6['SUM(maleD)']."</td>";
            }
            //maleM
             $result7 = mysql_query("SELECT SUM(maleM) from cattle");
            while ($row7 = mysql_fetch_array($result7)) {
              echo "<td style='text-align: center;'colspan='1'>".$row7['SUM(maleM)']."</td>";
            }
            //yearlingD  
            $result8 = mysql_query("SELECT SUM(yearlingD) from cattle");
            while ($row8 = mysql_fetch_array($result8)) {
              echo "<td style='text-align: center;'colspan='1'>".$row8['SUM(yearlingD)']."</td>";
            }
             //yearlingM
             $result9 = mysql_query("SELECT SUM(yearlingM) from cattle");
            while ($row9 = mysql_fetch_array($result9)) {
              echo "<td style='text-align: center;'colspan='1'>".$row9['SUM(yearlingM)']."</td>";
            }
            //heifer
             $result10 = mysql_query("SELECT SUM(heifer) from cattle");
            while ($row10 = mysql_fetch_array($result10)) {
              echo "<td style='text-align: center;'colspan='1'>".$row10['SUM(heifer)']."</td>";
            }
          
echo "<thead style='font-size:12px;colspan='12'>
                    <tr>
                      <th style='text-align: center;'colspan='4'>Slaughtered on Farm / Household (kg)</th>
                      <th style='text-align: center;'colspan='8'>Sold for Slaughter (kg)</th>
                    </tr>
      </thead>";
      echo "<tbody><tr>";
         

            //slaughter  
            $result2 = mysql_query("SELECT SUM(slaughter) from cattle");
            while ($row3 = mysql_fetch_array($result2)) {
              echo "<td style='text-align: center;'colspan='4'>".$row3['SUM(slaughter)']."</td>";
            }
             //slaughtersold
             $result4 = mysql_query("SELECT SUM(slaughtersold) from cattle");
            while ($row4 = mysql_fetch_array($result4)) {
              echo "<td style='text-align: center;'colspan='8'>".$row4['SUM(slaughtersold)']."</td><tr>";
            }
    

  echo "<tbody></table>";




  //CARABAO
echo "<table width=100% class='datatable-1 table table-striped table-bordered' style='font-size:13px; col-md-12 col-sm-12 col-xs-12'>";
    echo "<thead style='font-size:12px;colspan='12'>
                    <tr>
                      <th style='text-align: center;' colspan='12';><b>CARABAO</b></th>
                      </tr>
                      <th style='text-align: center;'colspan='2'>Bull</th>
                      <th style='text-align: center;'colspan='2'>Cow</th>
                      <th style='text-align: center;'colspan='2'>Male</th>
                      <th style='text-align: center;'colspan='2'>Yearling</th>
                      <th style='text-align: center;'colspan='2' rowspan='2'>Heifer</th>
                    </tr>
                      <th style='text-align: center;'colspan='1'>C</th>
                      <th style='text-align: center;'colspan='1'>N</th>
                      <th style='text-align: center;'colspan='1'>C</th>
                      <th style='text-align: center;'colspan='1'>N</th>
                      <th style='text-align: center;'colspan='1'>C</th>
                      <th style='text-align: center;'colspan='1'>N</th>
                      <th style='text-align: center;'colspan='1'>C</th>
                      <th style='text-align: center;'colspan='1'>N</th>
                  </thead>";
    echo "<tbody><tr>";
         

            //bullD
             $result1 = mysql_query("SELECT SUM(carabullC) from carabao");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td style='text-align: center;'colspan='1'>".$row2['SUM(carabullC)']."</td>";
            }
            //bullM  
            $result2 = mysql_query("SELECT SUM(carabullN) from carabao");
            while ($row3 = mysql_fetch_array($result2)) {
              echo "<td style='text-align: center;'colspan='1'>".$row3['SUM(carabullN)']."</td>";
            }
             //cowD
             $result4 = mysql_query("SELECT SUM(caracowC) from carabao");
            while ($row4 = mysql_fetch_array($result4)) {
              echo "<td style='text-align: center;'colspan='1'>".$row4['SUM(caracowC)']."</td>";
            }
            //cowM  
            $result5 = mysql_query("SELECT SUM(caracowN) from carabao");
            while ($row5 = mysql_fetch_array($result5)) {
              echo "<td style='text-align: center;'colspan='1'>".$row5['SUM(caracowN)']."</td>";
            }
             //maleD
             $result6 = mysql_query("SELECT SUM(maleC) from carabao");
            while ($row6 = mysql_fetch_array($result6)) {
              echo "<td style='text-align: center;'colspan='1'>".$row6['SUM(maleC)']."</td>";
            }
            //maleM
             $result7 = mysql_query("SELECT SUM(maleN) from carabao");
            while ($row7 = mysql_fetch_array($result7)) {
              echo "<td style='text-align: center;'colspan='1'>".$row7['SUM(maleN)']."</td>";
            }
            //yearlingD  
            $result8 = mysql_query("SELECT SUM(yearlingC) from carabao");
            while ($row8 = mysql_fetch_array($result8)) {
              echo "<td style='text-align: center;'colspan='1'>".$row8['SUM(yearlingC)']."</td>";
            }
             //yearlingM
             $result9 = mysql_query("SELECT SUM(yearlingN) from carabao");
            while ($row9 = mysql_fetch_array($result9)) {
              echo "<td style='text-align: center;' colspan='1'>".$row9['SUM(yearlingN)']."</td>";
            }
            //heifer
             $result10 = mysql_query("SELECT SUM(heifer) from carabao");
            while ($row10 = mysql_fetch_array($result10)) {
              echo "<td style='text-align: center;'colspan='1'>".$row10['SUM(heifer)']."</td>";
            }
          
echo "<thead style='font-size:12px;colspan='12'>
                    <tr>
                      <th style='text-align: center;'colspan='4'>Slaughtered on Farm / Household (kg)</th>
                      <th style='text-align: center;'colspan='8'>Sold for Slaughter (kg)</th>
                    </tr>
      </thead>";
      echo "<tbody><tr>";
         

            //slaughter  
            $result2 = mysql_query("SELECT SUM(slaughter) from carabao");
            while ($row3 = mysql_fetch_array($result2)) {
              echo "<td style='text-align: center;'colspan='4'>".$row3['SUM(slaughter)']."</td>";
            }
             //slaughtersold
             $result4 = mysql_query("SELECT SUM(slaughtersold) from carabao");
            while ($row4 = mysql_fetch_array($result4)) {
              echo "<td style='text-align: center;'colspan='8'>".$row4['SUM(slaughtersold)']."</td><tr>";
            }
    

  echo "<tbody></table>";




  //GOAT
echo "<table width=100% class='datatable-1 table table-striped table-bordered' style='font-size:13px; col-md-12 col-sm-12 col-xs-12'>";
    echo "<thead style='font-size:12px;colspan='12'>
                    <tr>
                      <th style='text-align: center;' colspan='12';><b>GOAT</b></th>
                      </tr>
                      <th style='text-align: center;'colspan='2'>Buck</th>
                      <th style='text-align: center;'colspan='2'>Doe</th>
                      <th style='text-align: center;'colspan='2'>Kids</th>
                    </tr>
                      <th style='text-align: center;'colspan='1'>D</th>
                      <th style='text-align: center;'colspan='1'>M</th>
                      <th style='text-align: center;'colspan='1'>D</th>
                      <th style='text-align: center;'colspan='1'>M</th>
                      <th style='text-align: center;'colspan='1'>D</th>
                      <th style='text-align: center;'colspan='1'>M</th>

                  </thead>";
    echo "<tbody><tr>";
         

            //buckD
             $result1 = mysql_query("SELECT SUM(buckD) from goat");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td style='text-align: center;'colspan='1'>".$row2['SUM(buckD)']."</td>";
            }
            //buckM  
            $result2 = mysql_query("SELECT SUM(buckM) from goat");
            while ($row3 = mysql_fetch_array($result2)) {
              echo "<td style='text-align: center;'colspan='1'>".$row3['SUM(buckM)']."</td>";
            }
             //doeD
             $result4 = mysql_query("SELECT SUM(doeD) from goat");
            while ($row4 = mysql_fetch_array($result4)) {
              echo "<td style='text-align: center;'colspan='1'>".$row4['SUM(doeD)']."</td>";
            }
            //doeM  
            $result5 = mysql_query("SELECT SUM(doeM) from goat");
            while ($row5 = mysql_fetch_array($result5)) {
              echo "<td style='text-align: center;'colspan='1'>".$row5['SUM(doeM)']."</td>";
            }
             //kidsD
             $result6 = mysql_query("SELECT SUM(kidsD) from goat");
            while ($row6 = mysql_fetch_array($result6)) {
              echo "<td style='text-align: center;'colspan='1'>".$row6['SUM(kidsD)']."</td>";
            }
            //kidsM
             $result7 = mysql_query("SELECT SUM(kidsM) from goat");
            while ($row7 = mysql_fetch_array($result7)) {
              echo "<td style='text-align: center;'colspan='1'>".$row7['SUM(kidsM)']."</td>";
            }
          
echo "<thead style='font-size:12px;colspan='12'>
                    <tr>
                      <th style='text-align: center;'colspan='4'>Slaughtered on Farm / Household (kg)</th>
                      <th style='text-align: center;'colspan='8'>Sold for Slaughter (kg)</th>
                    </tr>
      </thead>";
      echo "<tbody><tr>";
         

            //slaughter  
            $result2 = mysql_query("SELECT SUM(slaughter) from goat");
            while ($row3 = mysql_fetch_array($result2)) {
              echo "<td style='text-align: center;'colspan='4'>".$row3['SUM(slaughter)']."</td>";
            }
             //slaughtersold
             $result4 = mysql_query("SELECT SUM(slaughtersold) from goat");
            while ($row4 = mysql_fetch_array($result4)) {
              echo "<td style='text-align: center;'colspan='8'>".$row4['SUM(slaughtersold)']."</td><tr>";
            }
    

  echo "<tbody></table><br><br><br>";




  //OTHER
echo "<table width=100% class='datatable-1 table table-striped table-bordered' style='font-size:13px; col-md-12 col-sm-12 col-xs-12'>";
    echo "<thead style='font-size:12px;colspan='12'>
                    <tr>
                      <th style='text-align: center;' colspan='12';><b>OTHER ANIMALS</b></th>
                      </tr>
                      <th style='text-align: center;'colspan='2'>Sheep</th>
                      <th style='text-align: center;'colspan='2'>Horse</th>
                      <th style='text-align: center;'colspan='2'>Monkey</th>
                      <th style='text-align: center;'colspan='2'>Rabbit</th>
                      <th style='text-align: center;'colspan='2'>Duck</th>
                    </tr>
                      <th style='text-align: center;'colspan='0.5'>M</th>
                      <th style='text-align: center;'colspan='0.5'>F</th>
                      <th style='text-align: center;'colspan='0.5'>M</th>
                      <th style='text-align: center;'colspan='0.5'>F</th>
                      <th style='text-align: center;'colspan='0.5'>M</th>
                      <th style='text-align: center;'colspan='0.5'>F</th>
                      <th style='text-align: center;'colspan='0.5'>M</th>
                      <th style='text-align: center;'colspan='0.5'>F</th>
                      <th style='text-align: center;'colspan='0.5'>M</th>
                      <th style='text-align: center;'colspan='0.5'>F</th>
                  </thead>";
    echo "<tbody><tr>";
         

            //sheepM
             $result1 = mysql_query("SELECT SUM(sheepM) from other");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td style='text-align: center;'>".$row2['SUM(sheepM)']."</td>";
            }
            //sheepF  
            $result2 = mysql_query("SELECT SUM(sheepF) from other");
            while ($row3 = mysql_fetch_array($result2)) {
              echo "<td style='text-align: center;'>".$row3['SUM(sheepF)']."</td>";
            }
             //horseM
             $result4 = mysql_query("SELECT SUM(horseM) from other");
            while ($row4 = mysql_fetch_array($result4)) {
              echo "<td style='text-align: center;'>".$row4['SUM(horseM)']."</td>";
            }
            //horseF  
            $result5 = mysql_query("SELECT SUM(horseF) from other");
            while ($row5 = mysql_fetch_array($result5)) {
              echo "<td style='text-align: center;'>".$row5['SUM(horseF)']."</td>";
            }
             //monketM
             $result6 = mysql_query("SELECT SUM(monkeyM) from other");
            while ($row6 = mysql_fetch_array($result6)) {
              echo "<td style='text-align: center;'>".$row6['SUM(monkeyM)']."</td>";
            }
            //monkeyF  
            $result7 = mysql_query("SELECT SUM(monkeyF) from other");
            while ($row7 = mysql_fetch_array($result7)) {
              echo "<td style='text-align: center;'>".$row7['SUM(monkeyF)']."</td>";
            }
             //rabbitM
             $result8 = mysql_query("SELECT SUM(rabbitM) from other");
            while ($row8 = mysql_fetch_array($result8)) {
              echo "<td style='text-align: center;'>".$row8['SUM(rabbitM)']."</td>";
            }
            //rabbitF  
            $result9 = mysql_query("SELECT SUM(rabbitF) from other");
            while ($row9 = mysql_fetch_array($result9)) {
              echo "<td style='text-align: center;'>".$row9['SUM(rabbitF)']."</td>";
            }
             //duckM
             $result10 = mysql_query("SELECT SUM(duckM) from other");
            while ($row10 = mysql_fetch_array($result10)) {
              echo "<td style='text-align: center;'>".$row10['SUM(duckM)']."</td>";
            }
            //duckF  
            $result11 = mysql_query("SELECT SUM(duckF) from other");
            while ($row11 = mysql_fetch_array($result11)) {
              echo "<td style='text-align: center;'>".$row11['SUM(duckF)']."</td>";
            }

echo "<thead style='font-size:12px;colspan='12'>
                    <tr>
                      <th style='text-align: center;'colspan='2'>Pigeon</th>
                      <th style='text-align: center;'colspan='2'>Quail</th>
                      <th style='text-align: center;'colspan='2'>Turkey</th>
                      <th style='text-align: center;'colspan='2'>Others</th>
                      <th style='text-align: center;'colspan='2'>Others</th>
                    </tr>
                      <th style='text-align: center;'colspan='0.5'>M</th>
                      <th style='text-align: center;'colspan='0.5'>F</th>
                      <th style='text-align: center;'colspan='0.5'>M</th>
                      <th style='text-align: center;'colspan='0.5'>F</th>
                      <th style='text-align: center;'colspan='0.5'>M</th>
                      <th style='text-align: center;'colspan='0.5'>F</th>
                      <th style='text-align: center;'colspan='0.5'>M</th>
                      <th style='text-align: center;'colspan='0.5'>F</th>
                      <th style='text-align: center;'colspan='0.5'>M</th>
                      <th style='text-align: center;'colspan='0.5'>F</th>
                    </tr>
      </thead>";
      echo "<tbody><tr>";
         

             //pigeonM
             $result1 = mysql_query("SELECT SUM(pigeonM) from other");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td style='text-align: center;'>".$row2['SUM(pigeonM)']."</td>";
            }
            //pigeonF  
            $result2 = mysql_query("SELECT SUM(pigeonF) from other");
            while ($row3 = mysql_fetch_array($result2)) {
              echo "<td style='text-align: center;'>".$row3['SUM(pigeonF)']."</td>";
            }
             //quailM
             $result4 = mysql_query("SELECT SUM(quailM) from other");
            while ($row4 = mysql_fetch_array($result4)) {
              echo "<td style='text-align: center;'>".$row4['SUM(quailM)']."</td>";
            }
            //quailF  
            $result5 = mysql_query("SELECT SUM(quailF) from other");
            while ($row5 = mysql_fetch_array($result5)) {
              echo "<td style='text-align: center;'>".$row5['SUM(quailF)']."</td>";
            }
             //turkeyM
             $result6 = mysql_query("SELECT SUM(turkeyM) from other");
            while ($row6 = mysql_fetch_array($result6)) {
              echo "<td style='text-align: center;'>".$row6['SUM(turkeyM)']."</td>";
            }
            //turkeyF  
            $result7 = mysql_query("SELECT SUM(turkeyF) from other");
            while ($row7 = mysql_fetch_array($result7)) {
              echo "<td style='text-align: center;'>".$row7['SUM(turkeyF)']."</td>";
            }
             //others1M
             $result8 = mysql_query("SELECT SUM(others1M) from other");
            while ($row8 = mysql_fetch_array($result8)) {
              echo "<td style='text-align: center;'>".$row8['SUM(others1M)']."</td>";
            }
            //others1F  
            $result9 = mysql_query("SELECT SUM(others1F) from other");
            while ($row9 = mysql_fetch_array($result9)) {
              echo "<td style='text-align: center;'>".$row9['SUM(others1F)']."</td>";
            }
             //others2M
             $result10 = mysql_query("SELECT SUM(others2M) from other");
            while ($row10 = mysql_fetch_array($result10)) {
              echo "<td style='text-align: center;'>".$row10['SUM(others2M)']."</td>";
            }
            //others2F  
            $result11 = mysql_query("SELECT SUM(others2F) from other");
            while ($row11 = mysql_fetch_array($result11)) {
              echo "<td style='text-align: center;'>".$row11['SUM(others2F)']."</td>";
            }
    

  echo "<tbody></table>";




  //FISHERY
echo "<table width=100% class='datatable-1 table table-striped table-bordered' style='font-size:13px; col-md-12 col-sm-12 col-xs-12'>";
    echo "<thead style='font-size:12px;colspan='12'>
                    <tr>
                      <th style='text-align: center;' colspan='12';><b>FISHERY</b></th>
                      </tr>
                      <th style='text-align: center;'colspan='2'>Type (Fish Pond, Fish Cage ...)</th>
                      <th style='text-align: center;'colspan='2'>Total Area (square meter)</th>
                      <th style='text-align: center;'colspan='2'>Total Production in kg</th>
                      <th style='text-align: center;'colspan='2'>Type (Fish Pond, Fish Cage ...)</th>
                      <th style='text-align: center;'colspan='2'>Total Area (square meter)</th>
                      <th style='text-align: center;'colspan='2'>Total Production in kg</th>

                  </thead>";
    echo "<tbody><tr>";
         

            //buckD
             $result1 = mysql_query("SELECT SUM(type1) from fishery");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td style='text-align: center;'colspan='2'>".$row2['SUM(type1)']."</td>";
            }
            //buckM  
            $result2 = mysql_query("SELECT SUM(area1) from fishery");
            while ($row3 = mysql_fetch_array($result2)) {
              echo "<td style='text-align: center;'colspan='2'>".$row3['SUM(area1)']."</td>";
            }
             //doeD
             $result4 = mysql_query("SELECT SUM(production1) from fishery");
            while ($row4 = mysql_fetch_array($result4)) {
              echo "<td style='text-align: center;'colspan='2'>".$row4['SUM(production1)']."</td>";
            }
            //doeM  
            $result5 = mysql_query("SELECT SUM(type2) from fishery");
            while ($row5 = mysql_fetch_array($result5)) {
              echo "<td style='text-align: center;'colspan='2'>".$row5['SUM(type2)']."</td>";
            }
             //kidsD
             $result6 = mysql_query("SELECT SUM(area2) from fishery");
            while ($row6 = mysql_fetch_array($result6)) {
              echo "<td style='text-align: center;'colspan='2'>".$row6['SUM(area2)']."</td>";
            }
            //kidsM
             $result7 = mysql_query("SELECT SUM(production2) from fishery");
            while ($row7 = mysql_fetch_array($result7)) {
              echo "<td style='text-align: center;'colspan='2'>".$row7['SUM(production2)']."</td>";
            }
    echo "<tbody></table>";




    echo "<table width=100% class='datatable-1 table table-striped table-bordered' style='font-size:13px; col-md-12 col-sm-12 col-xs-12'>";

    //APIARY
    echo "<thead style='font-size:12px;colspan='12'>
                    <tr>
                      <th style='text-align: center;' colspan='12';><b>APIARY</b></th>
                      </tr>
                      <th style='text-align: center;'colspan='8'>Number of Colonies</th>
                      <th style='text-align: center;'colspan='6'>Total Production of Honey in kg</th>
                    </tr>
                  </thead>";
    echo "<tbody><tr>";
         

            //colonies
             $result1 = mysql_query("SELECT SUM(colonies) from apiary");
            while ($row2 = mysql_fetch_array($result1)) {
              echo "<td style='text-align: center;'colspan='8'>".$row2['SUM(colonies)']."</td>";
            }
            //production  
            $result2 = mysql_query("SELECT SUM(production) from apiary");
            while ($row3 = mysql_fetch_array($result2)) {
              echo "<td style='text-align: center;'colspan='6'>".$row3['SUM(production)']."</td>";
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
              </div>
            </div>
      </div>
      </div>
      </div>

    <?php  include 'static\footer.html';?>
    <script >
    function printcontent(el){
      var restorepage = document.body.innerHTML;
      var printcontent = document.getElementById(el).innerHTML;
      document.body.innerHTML = printcontent;
      window.print();
      document.body.innerHTML = restorepage;
    }
  </script>
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