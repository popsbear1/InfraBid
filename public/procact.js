
/*
  ajax for re-bid
*/
$('#rebidProjectForm').submit(function(e){
  e.preventDefault();

  $.ajax({
    type: 'POST',
    url: $('#rebidProjectForm').attr('action'),
    data: $('#rebidProjectForm').serialize(),
    dataType: 'json',
    success: function(response){
      if (response.success == true) {
        window.location.href = "<?php echo base_url('admin/projectDetailsView'); ?>";
      }else{
        $.each(response.messages, function(key, value) {
          var element = $('#' + key);
          
          element.closest('div.form-group')
          .removeClass('has-error')
          .addClass(value.length > 0 ? 'has-error' : 'has-success')
          .find('.text-danger')
          .remove();
          
          element.after(value);
        });
      }
    }
  });
});

/*
  ajax for review
**/
  
$('#recommendForReviewForm').submit(function(e){
  e.preventDefault();

  $.ajax({
    type: 'POST',
    url: $('#recommendForReviewForm').attr('action'),
    data: $('#recommendForReviewForm').serialize(),
    dataType: 'json',
    success: function(response){
      if (response.success == true) {
        window.location.href = "<?php echo base_url('admin/projectDetailsView'); ?>";
      }else{
        $.each(response.messages, function(key, value) {
          var element = $('#' + key);
          
          element.closest('div.form-group')
          .removeClass('has-error')
          .addClass(value.length > 0 ? 'has-error' : 'has-success')
          .find('.text-danger')
          .remove();
          
          element.after(value);
        });
      }
    }
  });
});

/**
  js and ajax for bidder disqualification
*/

$('.dis_qual_btn').click(function(){
  var action = $(this).val();
  var remark = $('.bidder_saction_disqualification_remark').val();
  if (remark.trim() == "") {
    var message = '<p class="text-danger">Remark field must not be empty!</p>';
    $(".bidder_saction_disqualification_remark").closest('div.form-group').removeClass('has-error').addClass('has-error').find('.text-danger').remove();
    $(".bidder_saction_disqualification_remark").after(message);
  }else{
    if (action == 'rebid') {
      $('#actionName').html('Re-bid / another SVP');
      $('#disqualification_action').val('re_bid');
      
    }
    if (action == 'rereview') {
      $('#actionName').html('Project Review');
      $('#disqualification_action').val('re_review');
      
    }

    $('#disqualifiactionSanctionConfirmationModal').modal('show');
  }
    
});

$('#projectBidderDisqualificationAndSanctionForm').submit(function(e){
  e.preventDefault();
  $.ajax({
    type: 'POST',
    url: $('#projectBidderDisqualificationAndSanctionForm').attr('action'),
    data: $('#projectBidderDisqualificationAndSanctionForm').serialize(),
    dataType: 'json',
    success: function(response){
      if (response.success == true) {
        window.location.href = "<?php echo base_url('admin/projectDetailsView'); ?>";
      }
    }
  });
});


/**

  act view controls
**/

  function setViewHidden(){
    $('.activity_view').attr('hidden', false).prop('hidden', 'hidden');
  }

  function setButtonStyle(elementID){
    $('.activityBtn').removeAttr('style');
    $(elementID).css({'background':'#555555', 'color' : '#ffffff'});
  }

  $('#pre_proc_btn').click(function(){
    setViewHidden();
    setButtonStyle('#pre_proc_btn');
    $('#pre_proc_view').removeAttr('hidden');
  });

  $('#advertisement_btn').click(function(){
    setViewHidden();
    setButtonStyle('#advertisement_btn');
    $('#ads_post_view').removeAttr('hidden');
  });

  $('#pre_bid_btn').click(function(){
    setViewHidden();
    setButtonStyle('#pre_bid_btn');
    $('#pre_bid_view').removeAttr('hidden');
  });

  $('#open_bid_btn').click(function(){
    setViewHidden();
    setButtonStyle('#open_bid_btn');
    $('#bid_open_view').removeAttr('hidden');
  });

  $('#eligibility_btn').click(function(){
    setViewHidden();
    setButtonStyle('#eligibility_btn');
    $('#eligibility_check_view').removeAttr('hidden');
  });

  $('#bid_eval_btn').click(function(){
    setViewHidden();
    setButtonStyle('#bid_eval_btn');
    $('#bid_evaluation_view').removeAttr('hidden');
  });

  $('#post_qual_btn').click(function(){
    setViewHidden();
    setButtonStyle('#post_qual_btn');
    $('#post_qual_view').removeAttr('hidden');
  });

  $('#award_notice_btn').click(function(){
    setViewHidden();
    setButtonStyle('#award_notice_btn');
    $('#notice_award_view').removeAttr('hidden');
  });

  $('#contract_signing_btn').click(function(){
    setViewHidden();
    setButtonStyle('#contract_signing_btn');
    $('#sign_contract_view').removeAttr('hidden');
  });

  $('#proceed_notice_btn').click(function(){
    setViewHidden();
    setButtonStyle('#proceed_notice_btn');
    $('#proceed_notice_view').removeAttr('hidden');
  });

  $('#delivery_completion_btn').click(function(){
    setViewHidden();
    setButtonStyle('#delivery_completion_btn');
    $('#completion_delivery_view').removeAttr('hidden');
  });

  $('#acceptance_turnover_btn').click(function(){
    setViewHidden();
    setButtonStyle('#acceptance_turnover_btn');
    $('#turnover_acceptance_view').removeAttr('hidden');
  });
