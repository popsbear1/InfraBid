
        <!-- page content -->
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Add Fund<small></small></h2>
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
            <form id="addFundsForm" method="POST" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url('admin/addFunds') ?>">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Source of Fund<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" step="any"  id="source" name="source"  required="required" class="form-control col-md-7 col-xs-12">
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
                <tr><td>Source of Fund</td>
                  <td><span id="usernam"></span></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" form="addFundsForm" name="submit" class="btn btn-primary">Confirm</button>
          </div>
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

<script>
  $(document).ready(function() {
    $('#myModal').on('show.bs.modal' , function (e) {
      $('#usernam').html($('#source').val());
    });
  });
</script>


