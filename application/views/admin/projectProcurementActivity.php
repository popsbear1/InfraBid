<?php 

  $pre_proc = convertDate($procActDate['pre_proc']);
  $advertisement = convertDate($procActDate['advertisement']);
  $pre_bid = convertDate($procActDate['pre_bid']);
  //$ = convertDate($procActDate['']);
  $openbid = convertDate($procActDate['openbid']);
  $bidevaluation = convertDate($procActDate['bidevaluation']);
  $postqual = convertDate($procActDate['postqual']);
  $awarddate = convertDate($procActDate['awarddate']);
  $contractsigning = convertDate($procActDate['contractsigning']);
  $proceednotice = convertDate($procActDate['proceednotice']);
  $completion = convertDate($procActDate['completion']);
  $acceptance = convertDate($procActDate['acceptance']);
   

  function convertDate($date){

    if ($date != null) {
      $actdate = date_create($date);
      $formateddate = date_format($actdate, 'Y-m-d');
    }else{
      $formateddate = '0000-00-00';
    }

    return $formateddate;

  }

?>
<!-- page content -->
<div class="clearfix"></div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Manage Project Procurement Activity<small></small></h2>
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
        <!-- Smart Wizard -->
        <p>Steps for Procurement Activity: <b>(ABC more than 5M )</b></p>
        <div id="wizard" class="form_wizard wizard_horizontal">
          <ul class="wizard_steps">
            <li>
              <a href="#step-1">
                <span class="step_no">1</span>
                <span class="step_descr">
                  Step 1<br />
                  <small>Pre-proc Conf</small>
                </span>
              </a>
            </li>
            <li>
              <a href="#step-2">
                <span class="step_no">2</span>
                <span class="step_descr">
                  Step 2<br />
                  <small>Ads/Post of IAEB</small>
                </span>
              </a>
            </li>
            <li>
              <a href="#step-3">
                <span class="step_no">3</span>
                <span class="step_descr">
                  Step 3<br />
                  <small>Pre-bid Conf</small>
                </span>
              </a>
            </li>
            <li>
              <a href="#step-4">
                <span class="step_no">4</span>
                <span class="step_descr">
                  Step 4<br />
                  <small>Sub/Open of Bids</small>
                </span>
              </a>
            </li>
            <li>
              <a href="#step-5">
                <span class="step_no">5</span>
                <span class="step_descr">
                  Step 5<br />
                  <small>Eligibility Check</small>
                </span>
              </a>
            </li>
            <li>
              <a href="#step-6">
                <span class="step_no">6</span>
                <span class="step_descr">
                  Step 6<br />
                  <small>Bid Evaluation</small>
                </span>
              </a>
            </li>
            <li>
              <a href="#step-7">
                <span class="step_no">7</span>
                <span class="step_descr">
                  Step 7<br />
                  <small>Post Qual</small>
                </span>
              </a>
            </li>
            <li>
              <a href="#step-8">
                <span class="step_no">8</span>
                <span class="step_descr">
                  Step 8<br />
                  <small>Notice of Award</small>
                </span>
              </a>
            </li>
            <li>
              <a href="#step-9">
                <span class="step_no">9</span>
                <span class="step_descr">
                  Step 9<br />
                  <small>Contract Signing</small>
                </span>
              </a>
            </li>
            <li>
              <a href="#step-10">
                <span class="step_no">10</span>
                <span class="step_descr">
                  Step 10<br />
                  <small>Notice to Proceed</small>
                </span>
              </a>
            </li>
            <li>
              <a href="#step-11">
                <span class="step_no">11</span>
                <span class="step_descr">
                  Step 11<br />
                  <small>Delivery of Completion</small>
                </span>
              </a>
            </li>
            <li>
              <a href="#step-12">
                <span class="step_no">12</span>
                <span class="step_descr">
                  Step 12<br />
                  <small>Acceptance or Turnover</small>
                </span>
              </a>
            </li>
          </ul>
          <br>
          <div class="ln_solid"></div>
          <div id="step-1">
            <div class="well">
              <form id="form" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title & ABC <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" step="any" value="" name="project_title" disabled class="form-control col-md-7 col-xs-12 project_title">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Pre-Procurement Conference<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="date" step="any"  id="pre_proc" value="<?php echo $pre_proc ?>" name="pre_proc"  required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                
              </form>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <button type="button" class="btn btn-primary pull-right procactsubmitbutton" value="pre_proc">Submit</button>
              </div>
            </div>
          </div>
          <div id="step-2">
            <div class="well">
              <form id="form" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title & ABC <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" step="any" value="" name="project_title" disabled class="form-control col-md-7 col-xs-12 project_title">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ads/Post of IAEB<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="date" step="any"  id="pre_proc" value="<?php echo $advertisement ?>" name="pre_proc"  required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                
              </form>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <button href="#myModal" type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">Submit</button>
              </div>
            </div>
          </div>

          <div id="step-3">
            <div class="well">
              <form id="form" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title & ABC <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" step="any" value="" name="project_title" disabled class="form-control col-md-7 col-xs-12 project_title">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pre-bid Conf<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="date" step="any"  id="pre_proc" value="<?php echo $pre_bid ?>" name="pre_proc"  required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                
              </form>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <button href="#myModal" type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">Submit</button>
              </div>
            </div>
          </div>
          
          <div id="step-4">
            <div class="well">
              <form id="form" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title & ABC <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" step="any" value="" name="project_title" disabled class="form-control col-md-7 col-xs-12 project_title">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sub/Open of Bids<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="date" step="any"  id="pre_proc" value="<?php echo $openbid ?>" name="pre_proc"  required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                
              </form>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <button href="#myModal" type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">Submit</button>
              </div>
            </div>
          </div>

          <div id="step-5">
            <div class="well">
              <form id="form" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title & ABC <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" step="any" value="" name="project_title" disabled class="form-control col-md-7 col-xs-12 project_title">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Eligibility Check<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="date" step="any"  id="pre_proc" value="" name="pre_proc"  required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                
              </form>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <button href="#myModal" type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">Submit</button>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <button href="#myModal" type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">re-bid/another SVP</button>
              </div>
            </div>
          </div>

          <div id="step-6">
            <div class="well">
              <form id="form" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title & ABC <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" step="any" value="" name="project_title" disabled class="form-control col-md-7 col-xs-12 project_title">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Bid Evaluation<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="date" step="any"  id="pre_proc" value="<?php echo $bidevaluation ?>" name="pre_proc"  required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                
              </form>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <button href="#myModal" type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">Submit</button>
              </div>
            </div>
          </div>

          <div id="step-7">
            <div class="well">
              <form id="form" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title & ABC <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" step="any" value="" name="project_title" disabled class="form-control col-md-7 col-xs-12 project_title">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Post Qual<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="date" step="any"  id="pre_proc" value="<?php echo $postqual ?>" name="pre_proc"  required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                
              </form>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <button href="#myModal" type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">Submit</button>
              </div>
            </div>
          </div>

          <div id="step-8">
            <div class="well">
              <form id="form" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title & ABC <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" step="any" value="" name="project_title" disabled class="form-control col-md-7 col-xs-12 project_title">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Notice of Award<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="date" step="any"  id="pre_proc" value="<?php echo $awarddate ?>" name="pre_proc"  required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                
              </form>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <button href="#myModal" type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">Submit</button>
              </div>
            </div>
          </div>

          <div id="step-9">
            <div class="well">
              <form id="form" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title & ABC <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" step="any" value="" name="project_title" disabled class="form-control col-md-7 col-xs-12 project_title">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Contract Signing<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="date" step="any"  id="pre_proc" value="<?php echo $contractsigning ?>" name="pre_proc"  required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                
              </form>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <button href="#myModal" type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">Submit</button>
              </div>
            </div>
          </div>

          <div id="step-10">
            <div class="well">
              <form id="form" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title & ABC <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" step="any" value="" name="project_title" disabled class="form-control col-md-7 col-xs-12 project_title">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Notice to Proceed<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="date" step="any"  id="pre_proc" value="<?php echo $proceednotice ?>" name="pre_proc"  required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                
              </form>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <button href="#myModal" type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">Submit</button>
              </div>
            </div>
          </div>

          <div id="step-11">
            <div class="well">
              <form id="form" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title & ABC <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" step="any" value="" name="project_title" disabled class="form-control col-md-7 col-xs-12 project_title">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Delivery/Completion<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="date" step="any"  id="pre_proc" value="<?php echo $completion ?>" name="pre_proc"  required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                
              </form>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <button href="#myModal" type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">Submit</button>
              </div>
            </div>
          </div>

          <div id="step-12">
            <div class="well">
              <form id="form" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title & ABC <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" step="any" value="" name="project_title" disabled class="form-control col-md-7 col-xs-12 project_title">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Acceptance/Turnover<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="date" step="any"  id="pre_proc" value="<?php echo $acceptance ?>" name="pre_proc"  required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                
              </form>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <button href="#myModal" type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- End SmartWizard Content -->
      </div>
    </div>
  </div>

  <!--Modal for confirmation -->

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
              <tr><td>Project Title</td>
                <td><span id="project_title_modal"></span></td>
              </tr>
              <tr><td id="actName"></td>
                <td><span id="actDateValue"></span></td>
              </tr>
            </tbody>
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


<!-- jQuery -->
<script src="<?php echo base_url() ?>public/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url() ?>public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>public/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?php echo base_url() ?>public/vendors/nprogress/nprogress.js"></script>

<script src="<?php echo base_url() ?>public/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
<!-- Custom Theme Scripts -->
<script src="<?php echo base_url() ?>public/build/js/custom.min.js"></script>

<script>

  var pre_proc = '<?php echo $pre_proc ?>';
  var advertisement = '<?php echo $advertisement ?>';
  var pre_bid = '<?php echo $pre_bid ?>';
  //$ = ;;
  var openbid = '<?php echo $openbid ?>';
  var bidevaluation = '<?php echo $bidevaluation ?>';
  var postqual = '<?php echo $postqual ?>';
  var awarddate= '<?php echo $awarddate ?>';
  var contractsigning = '<?php echo $contractsigning ?>';
  var proceednotice = '<?php echo $proceednotice ?>';
  var completion = '<?php echo $completion ?>';
  var acceptance = '<?php echo $acceptance ?>';

  $(document).ready(function(){
    var project_title = '<?php echo $project_title ?>';
    $('.project_title').val(project_title);
    $('#project_title_modal').text(project_title);
  });

  $('.procactsubmitbutton').click(function(event){
    var activity = $(this).val();

    if (activity == "pre_proc") {
      var new_pre_proc = $('#pre_proc').val();
      if (new_pre_proc === pre_proc) {
        showError(activity);
      }else{
        $('#myModal').modal('show');
        $('#actName').text('Pre-Procurement Conference');
        $('#actDateValue').text(new_pre_proc);
      }
    }
  });

  function showError(inputId){
    var element = $('#' + inputId);
    element.closest('div.form-group').removeClass('has-error').addClass('has-error').remove('.text-danger').after('<p class="text-danger text-center">No changes were made to the value!!</p>');
  }

</script>
