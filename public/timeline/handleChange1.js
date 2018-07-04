

	function handleChange1(input) {

		if (document.f2.sTextBox.value == '') {
			alert("You should enter a DATE on the TEXT FIELD.")
			document.forms[0].evaltxt1.value="";

			document.f2.sTextBox.focus();
			return false;
		}


		if(input.value < 1) {
			alert ("Sorry this is not possible you must input at least 1.")
			document.f2.evaltxt1.value=''

			return false;
		}


		if (input.value > 7) {
			alert("Sorry, this is not possible. Evaluation of bids should not exceed 7 days.")
			document.f2.evaltxt1.value=''
			return false;
		}

		if (input.value > 5) {
			var message = confirm("This is allowed only when the ABC is above PhP50M.  If the ABC is above PhP50M, click OK to continue.  If the ABC is PhP50M or below, click CANCEL to go back to the previous value.")
			if(message)
				evalfunc()
			else
				document.f2.evaltxt1.value=''
			return false;
		}

		if(input.value >= 1 && input.value<=7) {
			evalfunc()
			return false;
		}  


		else {
			document.f2.evaltxt1.value=''
			return false;
		}
	}
