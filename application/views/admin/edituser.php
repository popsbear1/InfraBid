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

                    <?php if (isset($_SESSION['success'])): ?>
                      <div class="alert alert-success">
                        <p><?php echo $_SESSION['success'] ?></p>
                      </div>
                    <?php endif ?>
                    <?php if (isset($_SESSION['error'])): ?>
                      <div class="alert alert-warning">
                        <p><?php echo $_SESSION['error'] ?></p>
                      </div>
                    <?php endif ?>

                    <form id="form" method="POST" action="<?php echo base_url('admin/editUsers') ?>" data-parsley-validate class="form-horizontal form-label-left"onkeypress="return event.keyCode != 13;">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name 
                          <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" step="any"  id="firstname" placeholder="<?php echo $userDetails['first_name']; ?>" name="firstname" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="middle-name">Middle Name
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" step="any"  id="middlename" placeholder="<?php echo $userDetails['middle_name']; ?>" name="middlename" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name  
                          <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" step="any"  id="lastname" placeholder="<?php echo $userDetails['last_name']; ?>" name="lastname" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">User Type <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" step="any"  id="usertype" value="<?php echo $row['user_type']; ?>" name="usertype" tabindex="-1">
                            <option>Admin/Secretariat</option>
                            <option>PGO</option>
                            <option>PEO</option>
                            <option>PWG</option>
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
                                      <tr><td>First Name</td>
                                        <td><span id="firstN"></span></td>
                                      </tr>
                                      <tr><td>Middle Name</td>
                                        <td><span id="middleN"></span></td>
                                      </tr>
                                      <tr><td>Last Name </td>
                                        <td><span id= "lastN"></span></td>
                                      <tr><td>User Type</td>
                                        <td><span id="userT"></span></td>
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



                </div>
              </div>
            </div>
          </div>


          <!-- /page content -->
        </div>
      </div>
    </div>
    <!-- jQuery -->
    <script src="<?php echo base_url() ?>public/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() ?>public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url() ?>public/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url() ?>public/vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url() ?>public/build/js/custom.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#myModal').on('show.bs.modal' , function (e) {
         $('#firstN').html($('#firstname').val());
         $('#middleN').html($('#middlename').val());
         $('#lastN').html($('#lastname').val());
         $('#userT').html($('#usertype').val());
       });

      });
    </script>