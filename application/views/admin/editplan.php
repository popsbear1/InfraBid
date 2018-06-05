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
                  <h2>Edit Project<small></small></h2>
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
                      <li><a href="plan.php"><i data-toggle="tooltip" data-placement="top" title="Back to view" class="fa fa-reply"></i></a>
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

                            $project_no=mysql_real_escape_string(htmlspecialchars($_POST['project_no']));
                            $project_title=mysql_real_escape_string(htmlspecialchars($_POST['project_title']));
                            $municipality=mysql_real_escape_string(htmlspecialchars($_POST['municipality']));
                            $barangay=mysql_real_escape_string(htmlspecialchars($_POST['barangay']));
                            $type=mysql_real_escape_string(htmlspecialchars($_POST['type']));
                            $mode=mysql_real_escape_string(htmlspecialchars($_POST['mode']));
                            $ABC=mysql_real_escape_string(htmlspecialchars($_POST['ABC']));
                            $source=mysql_real_escape_string(htmlspecialchars($_POST['source']));
                            $account=mysql_real_escape_string(htmlspecialchars($_POST['account']));

                            $query3= mysql_query("UPDATE plan set project_no = '$project_no' ,project_title = '$project_title' ,municipality = '$municipality',barangay = '$barangay',type='$type',mode='$mode',ABC='$ABC',source='$source',account='$account' where project_no = $id
                              ");

                             if (mysql_error() == true) {
                                  echo "<div id=error>".mysql_error()."</div>";
                              }else
                              {
                                header('location:plan.php');
                                echo "<div class='alert alert-info'>Successfully Updated !</div>";
                                }
                  
                  }
                  $query1=mysql_query("select * from plan where project_no='$id'") or die(mysql_error());
            $row = mysql_fetch_array($query1);
            ?>
          
                    <br />
                    <form id="form" method="POST" data-parsley-validate class="form-horizontal form-label-left"onkeypress="return event.keyCode != 13;">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project No.<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" step="any"  id="project_no" value="<?php echo $row['project_no']?>" name="project_no"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
      
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Title <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" step="any"  id="project_title" value="<?php echo $row['project_title']?>" name="project_title"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Municipality <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="municipality" name ='municipality' onChange = "updateBarangay(this)">
                          <option value="<?php echo $row['municipality']?>"><?php echo $row['municipality']?></option>
                          <?php
                          include 'databaseconnect.php';
                          $query = mysql_query("SELECT * from municipalities") or die(mysql_error());
                            while ($row1 = mysql_fetch_array($query)) {
                            ?>
                            <option value=""><?php echo $row1['municipality']." - ".$row1['municipalitycode']?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Barangay <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="brgy" name="barangay">
                          <option value="<?php echo $row['barangay']?>"><?php echo $row['barangay']?></option>
                          <?php
                          include 'databaseconnect.php';
                          $query = mysql_query("SELECT barangay from barangays") or die(mysql_error());
                            while ($row1 = mysql_fetch_array($query)) {
                            ?>
                            <option value="<?php echo $row1['barangay'] ?>"><?php echo $row1['barangay']?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Type of Project <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="type" name ="type">
                          <option value="<?php echo $row['type']?>"><?php echo $row['type']?></option>
                          <?php
                          include 'databaseconnect.php';
                          $query = mysql_query("SELECT * from projtype") or die(mysql_error());
                            while ($row1 = mysql_fetch_array($query)) {
                            ?>
                            <option value="<?php echo $row1['type'] ?>"><?php echo $row1['type']?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mode of Procurement <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="mode" name ="mode">
                          <option value="<?php echo $row['mode']?>"><?php echo $row['mode']?></option>
                            <option value="Bidding">Bidding</option>
                            <option value="SVP">SVP</option>
                            <option value="Negotiated">Negotiated</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Approved Budget Cost(ABC) <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" step="any"  id="ABC" value="<?php echo $row['ABC']?>" name="ABC"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Source of Fund <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="source" name ="source">
                          <option value="<?php echo $row['source']?>"><?php echo $row['source']?></option>
                          <?php
                          include 'databaseconnect.php';
                          $query = mysql_query("SELECT * from funds") or die(mysql_error());
                            while ($row1 = mysql_fetch_array($query)) {
                            ?>
                            <option value="<?php echo $row1['source'] ?>"><?php echo $row1['source']?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Account Classification <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="account" name ="account">
                          <option value="<?php echo $row['account']?>"><?php echo $row['account']?></option>
                            <option value="Capital Outlay">Capital Outlay</option>
                            <option value="MOOE">MOOE</option>
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
                                <tr><td>Project No.</td>
                                    <td><span id="proj"></span></td>
                                </tr>
                                 <tr><td>Project Title</td>
                                    <td><span id="title"></span></td>
                                </tr>
                                <tr><td>Municipality</td>
                                    <td><span id="mun"></span></td>
                                </tr>
                                <tr><td>Barangay</td>
                                    <td><span id="barang"></span></td>
                                </tr>
                                 <tr><td>Type of Project</td>
                                    <td><span id="typ"></span></td>
                                </tr>
                                <tr><td>Mode of Procurement</td>
                                    <td><span id="mod"></span></td>
                                </tr>
                                <tr><td>Approved Budget Cost(ABC)</td>
                                    <td><span id="abc"></span></td>
                                </tr>
                                <tr><td>Source of Fund</td>
                                    <td><span id="fun"></span></td>
                                </tr>
                                 <tr><td>Account Classification</td>
                                    <td><span id="accoun"></span></td>
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
                    <?php } ?>

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
    <script src = "js/barangay.js"></script>

    <script>
$(document).ready(function() {
    $('#myModal').on('show.bs.modal' , function (e) {
     $('#proj').html($('#project_no').val());
    $('#title').html($('#project_title').val());
   $('#mun').html($('#municipality').val());
   $('#barang').html($('#brgy').val());
    $('#typ').html($('#type').val());
   $('#mod').html($('#mode').val());
   $('#abc').html($('#ABC').val());
   $('#fun').html($('#source').val());
    $('#accoun').html($('#account').val());
  });
    
    });
 </script>


    
  </body>
</html>