
  $('#noPreBid').click(function(event) {
    $('#preBidStart').prop('value', '');
    $('#preBidEnd').prop('value', '');
    $('#preBidStart').prop('disabled', true);
    $('#preBidEnd').prop('disabled', true);
    $('#preBidNumber').prop('disabled', true);
    $('#preBidUpdateBtn').prop('disabled', true);   
    var startDate = $('#pre_proc_date').val();
    if ($('#noApproval').is(":checked")) {
      setDatesToEarliestPossibleTimeWithoutPBCandAHA(startDate);
    }else{
      setDatesToEarliestPossibleTimeWithoutPBC(startDate);
    }
  });

  $('#yesPreBid').click(function(event) {
    $('#preBidStart').prop('disabled', false);
    $('#preBidEnd').prop('disabled', false);
    $('#preBidNumber').prop('disabled', false);
    $('#preBidUpdateBtn').prop('disabled', false);
    var startDate = $('#pre_proc_date').val();
    if ($('#yesApproval').is(":checked")) {
      setDatesToEarliestPossibleTime(startDate);
    }else{
      setDatesToEarliestPossibleTimeWithoutAHA(startDate);
    }
  });

  $('#noApproval').click(function(event) {
    $('#authorityApprovalStart').prop('value', '');
    $('#authorityApprovalEnd').prop('value', '');
    $('#authorityApprovalStart').prop('disabled', true);
    $('#authorityApprovalEnd').prop('disabled', true);
    $('#authorityApprovalNumber').prop('disabled', true);
    $('#authorityApprovalUpdateBtn').prop('disabled', true);
    var startDate = $('#pre_proc_date').val();
    if ($('#noPreBid').is(":checked")) {
      setDatesToEarliestPossibleTimeWithoutPBCandAHA(startDate);
    }else{
      setDatesToEarliestPossibleTimeWithoutAHA(startDate);
    }
  });

  $('#yesApproval').click(function(event) {
    $('#authorityApprovalStart').prop('disabled', false);
    $('#authorityApprovalEnd').prop('disabled', false);
    $('#authorityApprovalNumber').prop('disabled', false);
    $('#authorityApprovalUpdateBtn').prop('disabled', false);
    var startDate = $('#pre_proc_date').val();
    if ($('#yesPreBid').is(":checked")) {
      setDatesToEarliestPossibleTime(startDate);
    }else{
      setDatesToEarliestPossibleTimeWithoutPBC(startDate);
    }
  });

  $('#authorityApprovalUpdateBtn').click(function(event){
    var daysToAdd = $('#authorityApprovalNumber').val();
    if (daysToAdd) {

    }else{
      alert("place an input adi sika met");
    }
  });

  $('#startOverBtn').click(function(event){
    $(':input').val('');
  });

  function setStartDate(date, interval){
    var date = new Date(this.date);
    var startDate = new Date();
    startDate.setDate(startDate.getDate()+interval);
    console.log(startDate);
    var startDateDay = ("0" + startDate.getDate()).slice(-2);
    var startDateMonth = ("0" + (startDate.getMonth() + 1)).slice(-2);
    var finalStartDate = startDate.getFullYear()+"-"+(startDateMonth)+"-"+(startDateDay);
    return finalStartDate;
  }

  function setEndDate(date, interval){
    var date = new Date(this.date);
    var endDate = new Date();
    endDate.setDate(endDate.getDate()+interval);
    console.log(endDate);
    var endDateDay = ("0" + endDate.getDate()).slice(-2);
    var endDateMonth = ("0" + (endDate.getMonth() + 1)).slice(-2);
    var finalEndDate = endDate.getFullYear()+"-"+(endDateMonth)+"-"+(endDateDay);
    return finalEndDate;
  }

  $('#timeLineComputeBtn').click(function(event){
    var startDate = $('#pre_proc_date').val();

    if (startDate == null || startDate == "") {
      alert("Select Start Date First!");
    }else{
      setDatesToEarliestPossibleTime(startDate);
    }
  });

  function setDatesToEarliestPossibleTime(startDate){
    setAdvertisementDate(startDate, 0, 7);
    setPreBidDate(startDate, 8, 8);
    setBidSubmissionDate(startDate, 20, 20);
    setBidEvaluationDate(startDate, 21, 21);
    setPostQualificationDate(startDate, 22, 22);
    setAwardNoticeIssuanceDate(startDate, 23, 23);
    setContractSigningDate(startDate, 24, 24);
    setAuthorityApprovalDate(startDate, 25, 25);
    setProceedNoticeDate(startDate, 26, 26);
  }

  function setDatesToEarliestPossibleTimeWithoutPBC(startDate){
    setAdvertisementDate(startDate, 0, 7);
    setBidSubmissionDate(startDate, 8, 8);
    setBidEvaluationDate(startDate, 9, 9);
    setPostQualificationDate(startDate, 10, 10);
    setAwardNoticeIssuanceDate(startDate, 11, 11);
    setContractSigningDate(startDate, 12, 12);
    setAuthorityApprovalDate(startDate, 13, 13);
    setProceedNoticeDate(startDate, 14, 14);
  }

  function setDatesToEarliestPossibleTimeWithoutAHA(startDate){
    setAdvertisementDate(startDate, 0, 7);
    setPreBidDate(startDate, 8, 8);
    setBidSubmissionDate(startDate, 20, 20);
    setBidEvaluationDate(startDate, 21, 21);
    setPostQualificationDate(startDate, 22, 22);
    setAwardNoticeIssuanceDate(startDate, 23, 23);
    setContractSigningDate(startDate, 24, 24);
    setProceedNoticeDate(startDate, 25, 25);
  }

  function setDatesToEarliestPossibleTimeWithoutPBCandAHA(startDate){
    setAdvertisementDate(startDate, 0, 7);
    setBidSubmissionDate(startDate, 8, 8);
    setBidEvaluationDate(startDate, 9, 9);
    setPostQualificationDate(startDate, 10, 10);
    setAwardNoticeIssuanceDate(startDate, 11, 11);
    setContractSigningDate(startDate, 12, 12);
    setProceedNoticeDate(startDate, 13, 13);
  }

  function setAdvertisementDate(startDate, min, max){
    $('#advertisement_start').val(setStartDate(startDate, min));
    $('#advertisement_end').val(setEndDate(startDate, max));
  }

  function setPreBidDate(startDate, min, max){
    $('#preBidStart').val(setStartDate(startDate, min));
    $('#preBidEnd').val(setEndDate(startDate, max));
  }

  function setBidSubmissionDate(startDate, min, max){
    $('#bidSubmissionStart').val(setStartDate(startDate, min));
    $('#bidSubmissionEnd').val(setEndDate(startDate, max));
  }

  function setBidEvaluationDate(startDate, min, max){
    $('#bidEvaluationStart').val(setStartDate(startDate, min));
    $('#bidEvaluationEnd').val(setEndDate(startDate, max));
  }

  function setPostQualificationDate(startDate, min, max){
    $('#postQualificationStart').val(setStartDate(startDate, min));
    $('#postQualificationEnd').val(setEndDate(startDate, max));
  }

  function setAwardNoticeIssuanceDate(startDate, min, max){
    $('#awardNoticeIssuanceStart').val(setStartDate(startDate, min));
    $('#awardNoticeIssuanceEnd').val(setEndDate(startDate, max));
  }

  function setContractSigningDate(startDate, min, max){
    $('#contractSigningStart').val(setStartDate(startDate, min));
    $('#contractSigningEnd').val(setEndDate(startDate, max));
  }

  function setAuthorityApprovalDate(startDate, min, max){
    $('#authorityApprovalStart').val(setStartDate(startDate, min));
    $('#authorityApprovalEnd').val(setEndDate(startDate, max));
  }

  function setProceedNoticeDate(startDate, min, max){
    $('#proceedNoticeStart').val(setStartDate(startDate, min));
    $('#proceedNoticeEnd').val(setEndDate(startDate, max));
  }

