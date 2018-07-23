
  var advertisementMinBase = 0;
  var advertisementMaxBase = 7;
  var prebidMinBase = 8;
  var prebidMaxBase = 8;
  var bidSubmissionMinBase = 20;
  var bidSubmissionMaxBase = 20;
  var bidEvaluationMinBase = 21;
  var bidEvaluationMaxBase = 21;
  var postQualificationMinBase = 22;
  var postQualificationMaxBase = 22;
  var awardNoticeIssuanceMinBase = 23;
  var awardNoticeIssuanceMaxBase = 23;
  var contractSigningMinBase = 24;
  var contractSigningMaxBase = 24;
  var authorityApprovalMinBase = 25;
  var authorityApprovalMaxBase = 25;
  var proceedNoticeMinBase = 26;
  var proceedNoticeMaxBase = 26;

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


  $('#preBidUpdateBtn').click(function(event){
    var startDate = $('#pre_proc_date').val();
    var daysToAdd = $('#preBidNumber').val();
    prebidMaxBase = prebidMinBase + (parseFloat(daysToAdd)-1);
    bidSubmissionMinBase = prebidMaxBase + 12;
    bidSubmissionMaxBase = prebidMaxBase + 12;
    bidEvaluationMinBase = bidSubmissionMaxBase + 1;
    bidEvaluationMaxBase = bidSubmissionMaxBase + 1;
    postQualificationMinBase = bidSubmissionMaxBase + 1;
    postQualificationMaxBase = bidSubmissionMaxBase + 1;
    awardNoticeIssuanceMinBase = postQualificationMaxBase + 1;
    awardNoticeIssuanceMaxBase = postQualificationMaxBase + 1;
    contractSigningMinBase = awardNoticeIssuanceMaxBase + 1;
    contractSigningMaxBase = awardNoticeIssuanceMaxBase + 1;
    authorityApprovalMinBase = contractSigningMaxBase + 1;
    authorityApprovalMaxBase = contractSigningMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    if (daysToAdd) {
      setDates(startDate, advertisementMinBase, advertisementMaxBase, prebidMinBase, prebidMaxBase, bidSubmissionMinBase, bidSubmissionMaxBase, bidEvaluationMinBase, bidEvaluationMaxBase, postQualificationMinBase, postQualificationMaxBase, awardNoticeIssuanceMinBase, awardNoticeIssuanceMaxBase, contractSigningMinBase, contractSigningMaxBase, authorityApprovalMinBase, authorityApprovalMaxBase, proceedNoticeMinBase, proceedNoticeMaxBase);
    }else{  
      alert("place an input adi sika met");
    }
  });

  $('#bidSubmissionUpdateBtn').click(function(event){
    var startDate = $('#pre_proc_date').val();
    var daysToAdd = $('#bidSubmissionNumber').val();
    bidSubmissionMaxBase = bidSubmissionMinBase + (parseFloat(daysToAdd)-1);
    bidEvaluationMinBase = bidSubmissionMaxBase + 1;
    bidEvaluationMaxBase = bidSubmissionMaxBase + 1;
    postQualificationMinBase = bidSubmissionMaxBase + 1;
    postQualificationMaxBase = bidSubmissionMaxBase + 1;
    awardNoticeIssuanceMinBase = postQualificationMaxBase + 1;
    awardNoticeIssuanceMaxBase = postQualificationMaxBase + 1;
    contractSigningMinBase = awardNoticeIssuanceMaxBase + 1;
    contractSigningMaxBase = awardNoticeIssuanceMaxBase + 1;
    authorityApprovalMinBase = contractSigningMaxBase + 1;
    authorityApprovalMaxBase = contractSigningMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    if (daysToAdd) {
      setDates(startDate, advertisementMinBase, advertisementMaxBase, prebidMinBase, prebidMaxBase, bidSubmissionMinBase, bidSubmissionMaxBase, bidEvaluationMinBase, bidEvaluationMaxBase, postQualificationMinBase, postQualificationMaxBase, awardNoticeIssuanceMinBase, awardNoticeIssuanceMaxBase, contractSigningMinBase, contractSigningMaxBase, authorityApprovalMinBase, authorityApprovalMaxBase, proceedNoticeMinBase, proceedNoticeMaxBase);
    }else{
      alert("place an input adi sika met");
    }
  });

  $('#bidEvaluationUpdateBtn').click(function(event){
    var startDate = $('#pre_proc_date').val();
    var daysToAdd = $('#bidEvaluationNumber').val();
    bidEvaluationMaxBase = bidEvaluationMinBase + (parseFloat(daysToAdd)-1);
    postQualificationMinBase = bidSubmissionMaxBase + 1;
    postQualificationMaxBase = bidSubmissionMaxBase + 1;
    awardNoticeIssuanceMinBase = postQualificationMaxBase + 1;
    awardNoticeIssuanceMaxBase = postQualificationMaxBase + 1;
    contractSigningMinBase = awardNoticeIssuanceMaxBase + 1;
    contractSigningMaxBase = awardNoticeIssuanceMaxBase + 1;
    authorityApprovalMinBase = contractSigningMaxBase + 1;
    authorityApprovalMaxBase = contractSigningMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    if (daysToAdd) {
      setDates(startDate, advertisementMinBase, advertisementMaxBase, prebidMinBase, prebidMaxBase, bidSubmissionMinBase, bidSubmissionMaxBase, bidEvaluationMinBase, bidEvaluationMaxBase, postQualificationMinBase, postQualificationMaxBase, awardNoticeIssuanceMinBase, awardNoticeIssuanceMaxBase, contractSigningMinBase, contractSigningMaxBase, authorityApprovalMinBase, authorityApprovalMaxBase, proceedNoticeMinBase, proceedNoticeMaxBase);
    }else{
      alert("place an input adi sika met");
    }
  });

  $('#postQualificationUpdateBtn').click(function(event){
    var startDate = $('#pre_proc_date').val();
    var daysToAdd = $('#postQualificationNumber').val();
    postQualificationMaxBase = postQualificationMinBase + (parseFloat(daysToAdd)-1);
    awardNoticeIssuanceMinBase = postQualificationMaxBase + 1;
    awardNoticeIssuanceMaxBase = postQualificationMaxBase + 1;
    contractSigningMinBase = awardNoticeIssuanceMaxBase + 1;
    contractSigningMaxBase = awardNoticeIssuanceMaxBase + 1;
    authorityApprovalMinBase = contractSigningMaxBase + 1;
    authorityApprovalMaxBase = contractSigningMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    if (daysToAdd) {
      setDates(startDate, advertisementMinBase, advertisementMaxBase, prebidMinBase, prebidMaxBase, bidSubmissionMinBase, bidSubmissionMaxBase, bidEvaluationMinBase, bidEvaluationMaxBase, postQualificationMinBase, postQualificationMaxBase, awardNoticeIssuanceMinBase, awardNoticeIssuanceMaxBase, contractSigningMinBase, contractSigningMaxBase, authorityApprovalMinBase, authorityApprovalMaxBase, proceedNoticeMinBase, proceedNoticeMaxBase);
    }else{
      alert("place an input adi sika met");
    }
  });

  $('#awardNoticeIssuanceUpdateBtn').click(function(event){
    var startDate = $('#pre_proc_date').val();
    var daysToAdd = $('#awardNoticeIssuanceNumber').val();
    awardNoticeIssuanceMaxBase = awardNoticeIssuanceMinBase + (parseFloat(daysToAdd)-1);
    contractSigningMinBase = awardNoticeIssuanceMaxBase + 1;
    contractSigningMaxBase = awardNoticeIssuanceMaxBase + 1;
    authorityApprovalMinBase = contractSigningMaxBase + 1;
    authorityApprovalMaxBase = contractSigningMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    if (daysToAdd) {
      setDates(startDate, advertisementMinBase, advertisementMaxBase, prebidMinBase, prebidMaxBase, bidSubmissionMinBase, bidSubmissionMaxBase, bidEvaluationMinBase, bidEvaluationMaxBase, postQualificationMinBase, postQualificationMaxBase, awardNoticeIssuanceMinBase, awardNoticeIssuanceMaxBase, contractSigningMinBase, contractSigningMaxBase, authorityApprovalMinBase, authorityApprovalMaxBase, proceedNoticeMinBase, proceedNoticeMaxBase);
    }else{
      alert("place an input adi sika met");
    }
  });

  $('#contractSigningUpdateBtn').click(function(event){
    var startDate = $('#pre_proc_date').val();
    var daysToAdd = $('#contractSigningNumber').val();
    contractSigningMaxBase = contractSigningMinBase + (parseFloat(daysToAdd)-1);
    authorityApprovalMinBase = contractSigningMaxBase + 1;
    authorityApprovalMaxBase = contractSigningMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    if (daysToAdd) {
      setDates(startDate, advertisementMinBase, advertisementMaxBase, prebidMinBase, prebidMaxBase, bidSubmissionMinBase, bidSubmissionMaxBase, bidEvaluationMinBase, bidEvaluationMaxBase, postQualificationMinBase, postQualificationMaxBase, awardNoticeIssuanceMinBase, awardNoticeIssuanceMaxBase, contractSigningMinBase, contractSigningMaxBase, authorityApprovalMinBase, authorityApprovalMaxBase, proceedNoticeMinBase, proceedNoticeMaxBase);
    }else{
      alert("place an input adi sika met");
    }
  });

  $('#authorityApprovalUpdateBtn').click(function(event){
    var startDate = $('#pre_proc_date').val();
    var daysToAdd = $('#authorityApprovalNumber').val();
    authorityApprovalMaxBase = authorityApprovalMinBase + (parseFloat(daysToAdd)-1);
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    if (daysToAdd) {
      setDates(startDate, advertisementMinBase, advertisementMaxBase, prebidMinBase, prebidMaxBase, bidSubmissionMinBase, bidSubmissionMaxBase, bidEvaluationMinBase, bidEvaluationMaxBase, postQualificationMinBase, postQualificationMaxBase, awardNoticeIssuanceMinBase, awardNoticeIssuanceMaxBase, contractSigningMinBase, contractSigningMaxBase, authorityApprovalMinBase, authorityApprovalMaxBase, proceedNoticeMinBase, proceedNoticeMaxBase);
    }else{
      alert("place an input adi sika met");
    }
  });

  $('#proceedNoticeUpdateBtn').click(function(event){
    var startDate = $('#pre_proc_date').val();
    var daysToAdd = $('#proceedNoticeNumber').val();
    proceedNoticeMaxBase = proceedNoticeMinBase + (parseFloat(daysToAdd)-1);
    if (daysToAdd) {
      setDates(startDate, advertisementMinBase, advertisementMaxBase, prebidMinBase, prebidMaxBase, bidSubmissionMinBase, bidSubmissionMaxBase, bidEvaluationMinBase, bidEvaluationMaxBase, postQualificationMinBase, postQualificationMaxBase, awardNoticeIssuanceMinBase, awardNoticeIssuanceMaxBase, contractSigningMinBase, contractSigningMaxBase, authorityApprovalMinBase, authorityApprovalMaxBase, proceedNoticeMinBase, proceedNoticeMaxBase);
    }else{
      alert("place an input adi sika met");
    }
  });


  $('#startOverBtn').click(function(event){
    $(':input').val('');
  });

  function setStartDate(date, interval){
    var startDate = new Date(date);
    startDate.setDate(startDate.getDate()+interval);
    console.log(startDate);
    var startDateDay = ("0" + startDate.getDate()).slice(-2);
    var startDateMonth = ("0" + (startDate.getMonth() + 1)).slice(-2);
    var finalStartDate = startDate.getFullYear()+"-"+(startDateMonth)+"-"+(startDateDay);
    return finalStartDate;
  }

  function setEndDate(date, interval){
    var endDate = new Date(date);
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
      if ($('#noPreBid').is(":checked") && $('#noApproval').is(":checked")) {
        setDatesToEarliestPossibleTimeWithoutPBCandAHA(startDate);
      }else if($('#noApproval').is(":checked")){
        setDatesToEarliestPossibleTimeWithoutAHA(startDate);
      }else if($('#noPreBid').is(":checked")){
        setDatesToEarliestPossibleTimeWithoutPBC(startDate);
      }else{
        setDatesToEarliestPossibleTime(startDate);  
      }
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

  function setDates(startDate, advertisementMin, advertisementMax, prebidMin, prebidMax, bidSubmissionMin, bidSubmissionMax, bidEvaluationMin, bidEvaluationMax, postQualificationMin, postQualificationMax, awardNoticeIssuanceMin, awardNoticeIssuanceMax, contractSigningMin, contractSigningMax, authorityApprovalMin, authorityApprovalMax, proceedNoticeMin, proceedNoticeMax){
    setAdvertisementDate(startDate, advertisementMin, advertisementMax);
    setPreBidDate(startDate, prebidMin, prebidMax);
    setBidSubmissionDate(startDate, bidSubmissionMin, bidSubmissionMax);
    setBidEvaluationDate(startDate, bidEvaluationMin, bidEvaluationMax);
    setPostQualificationDate(startDate, postQualificationMin, postQualificationMax);
    setAwardNoticeIssuanceDate(startDate, awardNoticeIssuanceMin, awardNoticeIssuanceMax);
    setContractSigningDate(startDate, contractSigningMin, contractSigningMax);
    setAuthorityApprovalDate(startDate, authorityApprovalMin, authorityApprovalMax);
    setProceedNoticeDate(startDate, proceedNoticeMin, proceedNoticeMax);
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

