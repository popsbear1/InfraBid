
	function handleChange(input) {

		if(input.value < 1) {
			alert ("Sorry this is not possible There must be at least 12 days between Pre Bid Conference and Bid Evaluation2")
			document.f2.prebid1.value=''

			return false;
		}



		if (input.value > 65) {
			alert("Sorry, this is not possible.  Bids cannot be submitted beyond the 65th day from the last day of Advertisement.  ")
			document.f2.prebid1.value=''
			return false;


		}



		if (input.value > 50) {
			var message =confirm("This is allowed only when the ABC is above PhP50M.  If the ABC is above PhP50M, click OK to continue.  If the ABC is PhP50M or below, click CANCEL to go back to the previous value.")
			if(message)
				prebid()
			else
				document.f2.prebid1.value=''
			return false;


		}

		if((document.f2.group12.checked=='') && (document.f2.date_to2.value!='-----') && (input.value >= 13 && input.value<=50)) {
			prebid()
			return false;
		}

		if((document.f2.group12.checked!='') &&(input.value >= 1 && input.value<=65)) {
			prebid()
			return false;
		}

		if((document.f2.group12.checked=='') &&(input.value >= 31 && input.value<=65)) {
			prebid()
			return false;
		}


		if(document.f2.prebid1.value=='30'){
			alert("Sorry, this is not possible.There must be at least 30 days between Pre-bid Conference and Submission of Bids.");
			document.f2.prebid1.value='';
		}
		else {
			document.f2.prebid1.value=''
			return false;
		}
	}
