


	function handleChange40(input) {

		if (document.f2.sTextBox.value == '') {
			alert("You should enter a DATE on the TEXT FIELD.")
			document.f2.prebidadded.value=''

			document.f2.sTextBox.focus();
			return false;
		}	
		if(input.value < 1) {
			alert ("Sorry, this is not possible.  There must be a minimum 12-day or 30-day gap, as the case may be, between the Pre-bid Conference and Submission of Bids.  In addition, there is a maximum 50-day gap if the ABC is PhP50M and below, or 65-day gap if the ABC is above PhP50M, between the last day of Advertisement and Submission of Bids.  (Section 22.2 & 25.4(b), IRR of RA 9184)")
			document.f2.prebidadded.value=''

			return false;
		}



		if(input.value > 53) {
			alert("Sorry, this is not possible. Pre-bid Conference should not exceed 53 calendar days.")
			document.f2.prebidadded.value=''
			return false;


		} 

		//   if((document.f2.group14.checked!='') && (input.value >= 1 && input.value<=20)) {
		//	   prebidnew()
		//	   return false;
		  // }

		  //if((document.f2.group14.checked!='') && (input.value > 20) && (input.value <= 35)){


			//	  var message2 =confirm(" NAPILI MO ANG 30 na GAP between Pre-bid at Submission of Bid, dahil dito pwede ka lang lumampas ng 20 hanggang 35 kung ang ABC mo ay above P50 Million, para itigil i click ang CANCEL  o OK kung nais Magpatuloy.")
			// if (message2)
			// prebidnew()
			// else
			 //document.f2.prebidadded.value=''	  
		//return false;
			//  }
		// if((document.f2.group14.checked!='') && (input.value >= 36)) {
			// alert('Sorry this is not possible, you have selected 30 calendar days gap between Pre-bid and Submission of Bid. Therefore, your entry will be limited up to 35 only.')
		// }

		if (input.value >= 1 && input.value<=53) {
			prebidnew()
			return false;
		}

		//  if((document.f2.group13.checked!='') && (input.value >= 39 && input.value<=53)) {
			//   var message1 =confirm("This is only allowed if your ABC is above 50 Million. Reset your input if ABC is 50 Million and below or click OK to continue.")
			 //  if (message1)
		//prebidnew()
		else {
			document.f2.prebidadded.value=''
			return false;
		}
	}
