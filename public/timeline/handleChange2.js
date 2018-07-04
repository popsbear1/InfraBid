
	function handleChange2(input) {

		if (document.f2.sTextBox.value == '') {
			alert("You should enter a DATE on the TEXT FIELD.")
			document.forms[0].postqual1.value="";

			document.f2.sTextBox.focus();
			return false;
		}

		if (input.value <= 12) {
			postfunc();
			return false;
		}



		if(input.value > 45) {
			alert("Sorry, this is not possible.  Post-qualification cannot exceed 45 days.");
			document.f2.postqual1.value='';
			return false;
		}
		if (input.value <= 45) {
			var message=confirm("This is allowed only under exceptional circumstances.  If you wish to proceed, click OK.  Otherwise, click CANCEL to go back to the previous value.")
			if(message)
				postfunc()		   

			else
				document.f2.postqual1.value='';

 			// document.forms[0].postqual1.value="";
 			return false;
		}
	}