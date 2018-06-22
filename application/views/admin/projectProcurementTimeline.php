
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
          <div class="row">
            <div class="form-horizontal col-lg-5">
              <div class="form-group">
                <label class="control-label col-lg-5">Select date to begin with:</label>
                <div class="col-lg-7">
                  <input type="date" class="form-control" id="pre_proc_date" name="pre_proc_date">
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <button id="timeLineComputeBtn" class="btn btn-default btn-block">Compute/Reset to Earliest Possible Time</button>
            </div>
            <div class="col-lg-3">
              <button class="btn btn-default btn-block">Start Over</button>
            </div>
          </div>
          <div class="ln_solid"></div>
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
                  <td><input type="date" class="form-control" id="advertisement_start" name="advertisement_start"></td>
                  <td><input type="date" class="form-control" id="advertisement_end" name="advertisement_end"></td>
                  <td></td>
                </tr>
                <tr>
                  <td>
                    <div class="row">
                      <b class="pull-right">Pre-bid Conference:</b>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <p class="text-right"><i>Conduct?</i></p>
                      </div>
                      <div class="col-md-3">
                        <label for="yesPreBid" class="text-center">Yes</label>
                        <input type="radio" name="pre-bid" id="yesPreBid" class="text-center">
                      </div>
                      <div class="col-md-3">
                        <label for="noPreBid" class="text-center">No</label>
                        <input type="radio" name="pre-bid" id="noPreBid" class="text-center">
                      </div>
                    </div>
                  </td>
                  <td><input type="date" class="form-control" id="preBidStart"></td>
                  <td><input type="date" class="form-control" id="preBidEnd"></td>
                  <td>
                    <div class="col-lg-6">
                      <input type="number" class="form-control" id="preBidNumber">
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
          <div class="ln_solid"></div>
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <button href="#myModal" type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">Submit</button>
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


<script>
  $('#noPreBid').click(function(event) {
    $('#preBidStart').prop('disabled', true);
    $('#preBidEnd').prop('disabled', true);
    $('#preBidNumber').prop('disabled', true);
  });

  $('#yesPreBid').click(function(event) {
    $('#preBidStart').prop('disabled', false);
    $('#preBidEnd').prop('disabled', false);
    $('#preBidNumber').prop('disabled', false);
  });

  $('#timeLineComputeBtn').click(function(event){
    var startDate = $('#pre_proc_date').val();
    var pre_proc_date = new Date(startDate);
   

    if (startDate == null || startDate == "") {
      alert("Select Start Date First!");
    }else{
      var advertisement_start = startDate;
      $('#advertisement_start').val(advertisement_start);
      var advertisement_end = new Date();

      advertisement_end.setDate(pre_proc_date.getDate()+7);
      var day = ("0" + advertisement_end.getDate()).slice(-2);
      var month = ("0" + (advertisement_end.getMonth() + 1)).slice(-2);
      var final = advertisement_end.getFullYear()+"-"+(month)+"-"+(day);
      $('#advertisement_end').val(final);
      
      var preBidStart = advertisement_end.getMonth();



      

    }
  });
</script>
