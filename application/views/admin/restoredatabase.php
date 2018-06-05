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
                  <h2>Manage Database <small></small></h2>
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

                // Name of the file
                $filename = 'backup.sql';
                // MySQL host
                $mysql_host = 'localhost';
                // MySQL username
                $mysql_username = 'root';
                // MySQL password
                $mysql_password = '';
                // Database name
                $mysql_database = 'pvet';

                // Connect to MySQL server
                mysql_connect($mysql_host, $mysql_username, $mysql_password) or die('Error connecting to MySQL server: ' . mysql_error());
                // Select database
                mysql_select_db($mysql_database) or die('Error selecting MySQL database: ' . mysql_error());

                // Temporary variable, used to store current query
                $templine = '';
                // Read in entire file
                $lines = file($filename);
                // Loop through each line
                foreach ($lines as $line)
                {
                // Skip it if it's a comment
                if (substr($line, 0, 2) == '--' || $line == '')
                    continue;

                // Add this line to the current segment
                $templine .= $line;
                // If it has a semicolon at the end, it's the end of the query
                if (substr(trim($line), -1, 1) == ';')
                {
                    // Perform the query
                    mysql_query($templine);
                    // Reset temp variable to empty
                    $templine = '';
                }
                }
                if(mysql_error() == true)
                        {
                          echo "<div class='alert alert'>".mysql_error()."<br> Reload Again to restore database !</div>";
                        }
                        else{
                          $username = $_SESSION['user'];
                        $que = mysql_query("INSERT INTO history(username,action,date_time)VALUES
                          ('$username','Restore Database',now())");
                            echo "<div class='alert alert-info'>Successfully Restored Database !</div>";
                        }

                ?>
                  </div>
                </div>
              </div>
            </div>

              
        <!-- /page content -->
        
      </div>
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


    
  </body>
</html>