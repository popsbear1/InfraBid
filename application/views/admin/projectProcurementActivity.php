
<!-- page content -->
<div class="clearfix"></div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Edit Project<small></small></h2>
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
       <form action="#" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">

        <!-- SmartWizard html -->
        <div id="smartwizard">
          <ul>
            <li><a href="#step-1">Step 1<br />Pre-proc</a></li>
            <li><a href="#step-2">Step 2<br />Advert</a></li>
            <li><a href="#step-3">Step 3<br />Pre-bid</a></li>
            <li><a href="#step-4">Step 4<br />open</a></li>
            <li><a href="#step-1">Step 5<br /></a></li>
            <li><a href="#step-2">Step 6<br /></a></li>
            <li><a href="#step-3">Step 7<br /></a></li>
            <li><a href="#step-4">Step 8<br /></a></li>
            <li><a href="#step-1">Step 9<br /></a></li>
            <li><a href="#step-2">Step 10<br /></a></li>
            <li><a href="#step-3">Step 11<br /></a></li>
            <li><a href="#step-4">Step 12<br /></a></li>
            <li><a href="#step-4">Step 13<br /></a></li>
          </ul>

          <div>
            <div id="step-1">
              <h2>Your Email Address</h2>
              <div id="form-step-0" role="form" data-toggle="validator">
                <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Write your email address" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>

            </div>
            <div id="step-2">
              <h2>Your Name</h2>
              <div id="form-step-1" role="form" data-toggle="validator">
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" name="name" id="email" placeholder="Write your name" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
            <div id="step-3">
              <h2>Your Address</h2>
              <div id="form-step-2" role="form" data-toggle="validator">
                <div class="form-group">
                  <label for="address">Address</label>
                  <textarea class="form-control" name="address" id="address" rows="3" placeholder="Write your address..." required></textarea>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
            <div id="step-4" class="">
              <h2>Terms and Conditions</h2>
              <p>
                Terms and conditions: Keep your smile :)
              </p>
              <div id="form-step-3" role="form" data-toggle="validator">
                <div class="form-group">
                  <label for="terms">I agree with the T&C</label>
                  <input type="checkbox" id="terms" data-error="Please accept the Terms and Conditions" required>
                  <div class="help-block with-errors"></div>
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
<script src="<?php echo base_url() ?>public/vendors/jQuery-Smart-Wizard/SmartWizard-master/dist/js/jquery.smartWizard.min.js"></script>

<script src="<?php echo base_url() ?>public/vendors/jQuery-Smart-Wizard/SmartWizard-master/dist/js/validator.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?php echo base_url() ?>public/build/js/custom.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){

            // Toolbar extra buttons
            var btnFinish = $('<button></button>').text('Finish')
            .addClass('btn btn-info')
            .on('click', function(){
              if( !$(this).hasClass('disabled')){
                var elmForm = $("#myForm");
                if(elmForm){
                  elmForm.validator('validate');
                  var elmErr = elmForm.find('.has-error');
                  if(elmErr && elmErr.length > 0){
                    alert('Oops we still have error in the form');
                    return false;
                  }else{
                    alert('Great! we are ready to submit form');
                    elmForm.submit();
                    return false;
                  }
                }
              }
            });
            var btnCancel = $('<button></button>').text('Cancel')
            .addClass('btn btn-danger')
            .on('click', function(){
              $('#smartwizard').smartWizard("reset");
              $('#myForm').find("input, textarea").val("");
            });



            // Smart Wizard
            $('#smartwizard').smartWizard({
              selected: 0,
              theme: 'dots',
              transitionEffect:'fade',
              toolbarSettings: {toolbarPosition: 'bottom',
              toolbarExtraButtons: [btnFinish, btnCancel]
            },
            anchorSettings: {
                                markDoneStep: true, // add done css
                                markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                                removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                                enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
                              }
                            });

            $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
              var elmForm = $("#form-step-" + stepNumber);
                // stepDirection === 'forward' :- this condition allows to do the form validation
                // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
                if(stepDirection === 'forward' && elmForm){
                  elmForm.validator('validate');
                  var elmErr = elmForm.children('.has-error');
                  if(elmErr && elmErr.length > 0){
                        // Form validation failed
                        return false;
                      }
                    }
                    return true;
                  });

            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
                // Enable finish button only on last step
                if(stepNumber == 3){
                  $('.btn-finish').removeClass('disabled');
                }else{
                  $('.btn-finish').addClass('disabled');
                }
              });

          });
        </script>


