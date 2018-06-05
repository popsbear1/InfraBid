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
                  <h2>Edit Contractor <small></small></h2>
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
                      <li><a href="contractor.php"><i data-toggle="tooltip" data-placement="top" title="Back to view" class="fa fa-reply"></i></a>
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
                            $businessname=mysql_real_escape_string(htmlspecialchars($_POST['businessname']));
                            $owner=mysql_real_escape_string(htmlspecialchars($_POST['owner']));
                            $address=mysql_real_escape_string(htmlspecialchars($_POST['address']));
                            $contactnumber=mysql_real_escape_string(htmlspecialchars($_POST['contactnumber']));

                            $query3= mysql_query("UPDATE contractors set businessname = '$businessname',owner = '$owner',address = '$address',contactnumber = '$contactnumber' where id='$id'");

                             if (mysql_error() == true) {
                                  echo "<div id=error>".mysql_error()."</div>";
                              }else
                              {
                                header('location:contractor.php');
                                echo "<div class='alert alert-info'>Successfully Updated !</div>";
                                }
                  
                  }
       $query1=mysql_query("select * from contractors where id='$id'") or die(mysql_error());
            $row = mysql_fetch_array($query1);
            ?>
                    <br />
                    <form id="form" method="POST" data-parsley-validate class="form-horizontal form-label-left"onkeypress="return event.keyCode != 13;">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Business Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" step="any"  id="businessname" value="<?php echo $row['businessname']; ?>" name="businessname"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
      
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Owner/Manager  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" step="any"  id="owner" value="<?php echo $row['owner']; ?>" name="owner"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Address  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" step="any"  id="address" value="<?php echo $row['address']; ?>" name="address"  class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Contact Number  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" step="any"  id="contactnumber" value="<?php echo $row['contactnumber']; ?>" name="contactnumber" class="form-control col-md-7 col-xs-12">
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
                                <tr><td>Business Name</td>
                                    <td><span id="usernam"></span></td>
                                </tr>
                                 <tr><td>Owner/Manager</td>
                                    <td><span id="passwor"></span></td>
                                </tr>
                                <tr><td>Address</td>
                                    <td><span id="usertyp"></span></td>
                                </tr>
                                <tr><td>Contact Number</td>
                                    <td><span id="contact"></span></td>
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
     $('#usernam').html($('#businessname').val());
    $('#passwor').html($('#owner').val());
   $('#usertyp').html($('#address').val());
   $('#contact').html($('#contactnumber').val());
  });
    
    });
 </script>


    
  </body>
</html>