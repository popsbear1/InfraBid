
        <!-- page content -->
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Add Project<small></small></h2>
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
            <form id="addPlanForm" method="POST" class="form-horizontal form-label-left" action="<?php echo base_url('admin/addPlan') ?>">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project No.<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" step="any"  id="project_no" value="" name="project_no"  required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Title <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" step="any"  id="project_title" value="" name="project_title"  required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Municipality<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" id="municipality" name ="municipality" onChange = "updateBarangay(this)">
                    <option selected hidden disabled>Choose Municipality</option>
                    <?php foreach ($municipalities as $municipality): ?>
                      <option value="<?php echo $municipality['municipality'] . '-' . $municipality['municipalitycode'] ?>"><?php echo $municipality['municipality'] . ' - ' . $municipality['municipalitycode'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Barangay <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" id="brgy" name ="barangay">
                    <option selected disabled hidden>Choose Barangay</option>
                    <?php foreach ($barangays as $barangay): ?>
                      <option value="<?php echo $barangay['barangaycode'] . '-' . $barangay['barangay'] ?>"><?php echo $barangay['barangaycode'] . ' - ' . $barangay['barangay'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div> 
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Type of Project <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" id="type" name ="type">
                    <option selected disabled hidden>Choose Type of Project</option>
                    <?php foreach ($projTypes as $projType): ?>
                      <option value="<?php echo $projType['type'] ?>"><?php echo $projType['type'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Mode of Procurement <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" id="mode" name ="mode">
                    <option selected hidden disabled>Mode of Procurement</option>
                    <option value="Bidding">Bidding</option>
                    <option value="SVP">SVP</option>
                    <option value="Negotiated">Negotiated</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Approved Budget Cost(ABC) <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" step="any"  id="ABC" value="" name="ABC"  class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Source of Fund <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" id="source" name ="source">
                    <option selected hidden disabled>Choose Source of Fund</option>
                    <?php foreach ($sourceFunds as $sourceFund): ?>
                      <option value="<?php echo $sourceFund['source'] ?>"><?php echo $sourceFund['source'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Account Classification <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" id="account" name ="account">
                    <option selected hidden disabled>Choose Account Classification</option>
                    <option value="Capital Outlay">Capital Outlay</option>
                    <option value="MOOE">MOOE</option>
                  </select>
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button href="#myModal" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- modal for data confirmation -->
    <div id="myModal" class="modal fade bs-example-modal-lg" role="dialog" >
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
                  <td><span id="bar"></span></td>
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
          <button type="submit" name="submit" form="addPlanForm"class="btn btn-primary">Confirm</button>
        </div>
      </div>
    </div>
    <!-- end of modal -->
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
<script src = "<?php echo base_url() ?>public/barangay.js"></script>

<script>
  $(document).ready(function() {
    $('#myModal').on('show.bs.modal' , function (e) {
     $('#proj').html($('#project_no').val());
     $('#title').html($('#project_title').val());
     $('#mun').html($('#municipality').val());
     $('#bar').html($('#brgy').val());
     $('#typ').html($('#type').val());
     $('#mod').html($('#mode').val());
     $('#abc').html($('#ABC').val());
     $('#fun').html($('#source').val());
     $('#accoun').html($('#account').val());
     $('#statu').html($('#status').val());
     $('#remar').html($('#remarks').val());
   });
    
  });
</script>


