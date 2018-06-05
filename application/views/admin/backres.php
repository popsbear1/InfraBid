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
    include('conn.php'); 
    require_once('backup_restore.class.php'); 

    $newImport = new backup_restore($host,$db,$user,$pass);

    if(isset($_GET['process'])){
        $process = $_GET['process'];
        if($process == 'backup'){
            $message = $newImport -> backup ();   
        }else if($process == 'restore'){
            $message = $newImport -> restore (); 
            @unlink('backup/database_'.$db.'.sql');
             
        }
    }
    if(isset($_POST['submit'])){        
        $db = 'database_'.$db.'.sql';
        $target_path = 'backup';
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_path . '/' . $db);    
        echo "<div class='alert alert-info'>Successfully Uploaded.  You can now <a href=backres.php?process=restore>restore</a></div>";
        $message = 'Successfully uploaded. You can now <a href=backres.php?process=restore>restore</a>';
    }
?>


<br>
<br>
               <center> <h2></h2>
           
             
                        <?php if(isset($_GET['process'])): ?>
                            <?php 
                                $msg = $_GET['process'];   
                                $class = 'text-center';
                                switch($msg){
                                    case 'backup':
                                        $msg = 'Backup Successfull!<br />Download the <a href=backup/'.$message.'>SQL FILE </a>'; 

                                        break;
                                    case 'restore':
                                        $msg = "Ready to Restore"; 
                                       
                                        break;
                                    case 'upload':
                                        $msg = "successfully uploaded file"; 
                                        break;
                                    default:
                                        $class = 'hide';
                                }                                
                            ?>
                                <strong><?php echo $msg; ?></strong><br>
                        <?php endif; ?>
                        
        
                <br>
                            <a href="backres.php?process=backup">
                                <button type="button" class="btn btn-primary"><i class="fa fa-database"></i> BACKUP DATABASE</button>
                            </a>
                      
                            <a href="backres.php?process=restore">
                                <button type="button" class="btn btn-primary"><i class="fa fa-database"></i> RESTORE DATABASE</button>
                            </a>
                <br />
                <br />
                    <form method="POST" enctype="multipart/form-data" style="border:1px solid #000; width:600px; padding:20px;">
                        <label>Upload Backup Database before Proceeding with Restore</label>
                        <input type="file" name="file" class="form-control">
                        <input type="submit" name="submit" class="btn btn-primary"  value="Upload Database" />
                    </form>
        <center>
        <br>
        
        </center>
  
</center>

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