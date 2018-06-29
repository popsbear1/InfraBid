
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