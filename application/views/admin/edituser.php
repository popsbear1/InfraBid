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
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Edit User <small></small></h2>
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
                      <li><a href="user.php"><i data-toggle="tooltip" data-placement="top" title="Back to view" class="fa fa-reply"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

      <?php
                include 'databaseconnect.php';

            if(isset($_GET['id']))
          {
            $id=$_GET['id'];

            if(isset($_POST['submit']))
              {
                            $username=mysql_real_escape_string(htmlspecialchars($_POST['username']));
                            $password=mysql_real_escape_string(htmlspecialchars($_POST['password']));
                            $usertype=mysql_real_escape_string(htmlspecialchars($_POST['usertype']));

                            $query3= mysql_query("UPDATE users set username = '$username',password = '$password',user_type = '$usertype' where id='$id'");

                             if (mysql_error() == true) {
                                  echo "<div id=error>".mysql_error()."</div>";
                              }else
                              {
                                header('location:user.php');
                                echo "<div class='alert alert-info'>Successfully Updated !</div>";
                                }
                  
                  }
       $query1=mysql_query("select * from users where id='$id'") or die(mysql_error());
            $row = mysql_fetch_array($query1);
            ?>
                    <br />
                    <form id="form" method="POST" data-parsley-validate class="form-horizontal form-label-left"onkeypress="return event.keyCode != 13;">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Username <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" step="any"  id="username" value="<?php echo $row['username']; ?>" name="username"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
      
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Password  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" step="any"  id="password" value="<?php echo $row['password']; ?>" name="password"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">User Type <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" step="any"  id="usertype" value="<?php echo $row['user_type']; ?>" name="usertype" required="required" tabindex="-1">
                            <option></option>
                            <option>admin</option>
                          </select>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button href="#myModal" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Submit</button>
                        <div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Confirm Input Values</h4>
                        </div>
                        <div class="modal-body">
                          <table class='table table-striped table-bordered' style='font-size:13px;'>
                          <thead>
                            <tr >
                              <th style='text-align: center'>Attributes</th>
                              <th style='text-align: center'>Values</th>
                            </tr> 
                          </thead>
                          <tbody>
                                <tr><td>Username</td>
                                    <td><span id="usernam"></span></td>
                                </tr>
                                 <tr><td>Password</td>
                                    <td><span id="passwor"></span></td>
                                </tr>
                                <tr><td>User Type</td>
                                    <td><span id="usertyp"></span></td>
                                </tr>
                          </tbody>
                          </tfoot>
                        </table>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" name="submit" class="btn btn-primary">Confirm</button>
                        </div>
                      </div>
                    </div>
                  </div>
                        </div>
                      </div>

                    </form>
                    <?php
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
    <script>
$(document).ready(function() {
    $('#myModal').on('show.bs.modal' , function (e) {
     $('#usernam').html($('#username').val());
    $('#passwor').html($('#password').val());
   $('#usertyp').html($('#usertype').val());
  });
    
    });
 </script>


    
  </body>
</html>