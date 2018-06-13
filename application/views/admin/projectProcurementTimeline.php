
<!-- page content -->
<div class="clearfix"></div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Manage Project Procurement Timeline<small></small></h2>
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
        <div class="well">
          <div class="well">
            <div class="row">
            <div class="form-horizontal col-lg-5">
              <div class="form-group">
                <label class="control-label col-lg-5">Select date to begin with:</label>
                <div class="col-lg-7">
                  <input type="date" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <button class="btn btn-default btn-block">Compute/Reset to Earliest Possible Time</button>
            </div>
            <div class="col-lg-3">
              <button class="btn btn-default btn-block">Start Over</button>
            </div>
          </div>
          <div class="row">
            <table class="table table-bordered" style="background: white">
              <thead>
                <tr>
                  <th>Procurement Stage</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Add Days</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><b class="pull-right">Advertisement:</b></td>
                  <td><input type="date" class="form-control"></td>
                  <td><input type="date" class="form-control"></td>
                  <td></td>
                </tr>
                <tr>
                  <td><b class="pull-right">Pre-bid Conference:</b></td>
                  <td><input type="date" class="form-control"></td>
                  <td><input type="date" class="form-control"></td>
                  <td>
                    <div class="col-lg-6">
                      <input type="number" class="form-control">
                    </div>
                    <div class="col-lg-6">
                      <button class="btn btn-info btn-block">Update</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><b class="pull-right">Submission of bid:</b></td>
                  <td><input type="date" class="form-control"></td>
                  <td><input type="date" class="form-control"></td>
                  <td>
                    <div class="col-lg-6">
                      <input type="number" class="form-control">
                    </div>
                    <div class="col-lg-6">
                      <button class="btn btn-info btn-block">Update</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><b class="pull-right">Bid Evaluation:</b></td>
                  <td><input type="date" class="form-control"></td>
                  <td><input type="date" class="form-control"></td>
                  <td>
                    <div class="col-lg-6">
                      <input type="number" class="form-control">
                    </div>
                    <div class="col-lg-6">
                      <button class="btn btn-info btn-block">Update</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><b class="pull-right">Post Qualification:</b></td>
                  <td><input type="date" class="form-control"></td>
                  <td><input type="date" class="form-control"></td>
                  <td>
                    <div class="col-lg-6">
                      <input type="number" class="form-control">
                    </div>
                    <div class="col-lg-6">
                      <button class="btn btn-info btn-block">Update</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><b class="pull-right">Issuance of Notice of Awards:</b></td>
                  <td><input type="date" class="form-control"></td>
                  <td><input type="date" class="form-control"></td>
                  <td>
                    <div class="col-lg-6">
                      <input type="number" class="form-control">
                    </div>
                    <div class="col-lg-6">
                      <button class="btn btn-info btn-block">Update</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><b class="pull-right">Contract Preparation and Signing:</b></td>
                  <td><input type="date" class="form-control"></td>
                  <td><input type="date" class="form-control"></td>
                  <td>
                    <div class="col-lg-6">
                      <input type="number" class="form-control">
                    </div>
                    <div class="col-lg-6">
                      <button class="btn btn-info btn-block">Update</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><b class="pull-right">Approval by Higher Authority:</b></td>
                  <td><input type="date" class="form-control"></td>
                  <td><input type="date" class="form-control"></td>
                  <td>
                    <div class="col-lg-6">
                      <input type="number" class="form-control">
                    </div>
                    <div class="col-lg-6">
                      <button class="btn btn-info btn-block">Update</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><b class="pull-right">Notice to Proceed:</b></td>
                  <td><input type="date" class="form-control"></td>
                  <td><input type="date" class="form-control"></td>
                  <td>
                    <div class="col-lg-6">
                      <input type="number" class="form-control">
                    </div>
                    <div class="col-lg-6">
                      <button class="btn btn-info btn-block">Update</button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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

<script src="<?php echo base_url() ?>public/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>

<script src="<?php echo base_url() ?>public/vendors/nprogress/nprogress.js"></script>



