
	function handleChange4(input) {

		if (document.f2.sTextBox.value == '') {
			alert("You should enter a DATE on the TEXT FIELD.")
			document.f2.consign.value='';
			document.f2.sTextBox.focus();

			return false;
		}

		if (input.value < 2) {
			alert("Minimum value allowed is 2.")
			document.f2.consign.value='';
			return false;
		}

		if(input.value > 10) {
			alert("Sorry, this is not possible.  Contract Preparation and Signing must be completed in 10 calendar days.");
			document.f2.consign.value='';
			return false;

		}
		if (input.value >= 2 && input.value <=10 ){
			
			consignfunc();
			return false;
		}
		else {
			document.f2.consign.value='';
			return false;
		}
	}
