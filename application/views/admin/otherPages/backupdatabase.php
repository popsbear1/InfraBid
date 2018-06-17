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
                    $host = $this->hostname;
                    $user = $this->username;
                    $pass = $this->password;
                    $name = $this->database;
                    $tables = '*';
                    $link = mysqli_connect($host,$user,$pass);
                    mysqli_select_db($this->con, $this->database);
                    $return = '';

                    //get all of the tables
                    if($tables == '*')
                    {
                      $tables = array();
                      $result = mysqli_query($this->con, 'SHOW TABLES');
                      while($row = mysqli_fetch_row($result))
                      {
                        $tables[] = $row[0];
                      }
                    }
                    else
                    {
                      $tables = is_array($tables) ? $tables : explode(',',$tables);
                    }
                    
                    //cycle through
                    $return = "SET FOREIGN_KEY_CHECKS=0;\n\n";
                    foreach($tables as $table)
                    {
                      $result = mysqli_query($this->con, 'SELECT * FROM '.$table);
                      $num_fields = mysqli_num_fields($result);
                      
                      $return.= 'DROP TABLE IF EXISTS '.$table.';';
                      $row2 = mysqli_fetch_row(mysqli_query($this->con, 'SHOW CREATE TABLE '.$table));
                      $return.= "\n\n".$row2[1].";\n\n";
                      
                      for ($i = 0; $i < $num_fields; $i++) 
                      {
                        while($row = mysqli_fetch_row($result))
                        {
                          $return.= 'INSERT INTO '.$table.' VALUES(';
                          for($j=0; $j<$num_fields; $j++) 
                          {
                            $row[$j] = addslashes($row[$j]);
                            //$row[$j] = ereg_replace("\n","\\n",$row[$j]);
                            $row[$j] = preg_replace("#\n#", "\\n", $row[$j]);
                            if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
                            if ($j<($num_fields-1)) { $return.= ','; }
                          }
                          $return.= ");\n";
                        }
                      }
                      $return.="\n\n\n";
                    }
                    $return .= "SET FOREIGN_KEY_CHECKS=1;\n";
                    //save file
                    $handle = fopen('backup/db-backup-'.date("Y-m-d-His").'-'.rand(0,999).'.sql','w+');
                    //$handle = fopen('db-backup-'.time().'-'.(md5(implode(',',$tables))).'.sql','w+');
                    fwrite($handle,$return) or die("failed to write data.");
                    $dtr = date("Y-m-d-His");
                    mysqli_query($this->con, "INSERT INTO $this->tbl_history VALUES('0','1','ADMIN','BACK-UPED DATABASE','$dtr')") or die("Failed to insert data into $this->tbl_history" . mysqli_error($this->con));
                    echo "
                            <div class='alert alert-success' id='alert' style='margin: 0 auto; text-align: center; margin-top: 5px;'>
                                <strong>Success!</strong> Backup of database is succesfull. Backup saved in the backup folder.
                            </div>
                            ";
                    fclose($handle);
                    
                    if(mysql_error() == true)
                        {
                          echo "<div class='alert alert'>".mysql_error()." Try again later !</div>";
                        }
                        else{
                          $username = $_SESSION['user'];
                        $que = mysql_query("INSERT INTO history(username,action,date_time)VALUES
                          ('$username','Backup Database',now())");
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