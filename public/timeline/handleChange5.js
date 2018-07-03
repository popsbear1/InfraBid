
	function handleChange5(input) {
		if (document.f2.sTextBox.value == '') {
			alert("You should enter a DATE on the TEXT FIELD.")
			document.f2.apprcont.value='';
			document.f2.sTextBox.focus();

			return false;
		}  

		if(input.value < 1) {
			alert ("Sorry this is not possible you must input at least 1.")
			document.f2.apprcont.value=''

			return false;
		}

		if(input.value > 30) {
			alert("Sorry, this is not possible.  The longest allowable time for this stage is 25 days.");
			document.f2.apprcont.value='';
			return false;
		}

		if (input.value >=6 && input.value <= 20){
			var message=confirm("This is allowed only when the ABC is above PhP50M.  If the ABC is above PhP50M, click OK to continue.  If the ABC is PhP50M or below, click CANCEL to go back to the previous value.")	
			if(message)
				apprcontfunc()
			else
				document.f2.apprcont.value=''
			return false;
		}

		if (input.value >=21 && input.value <= 30){
			var message=confirm("This is allowed only for GOCCs.  If you wish to proceed, click OK.  Otherwise, click CANCEL to go back to the previous value.  ")	
			if(message)
				apprcontfunc()
			else
				document.f2.apprcont.value=''
			return false;
		}

		if (input.value >= 1 && input.value <=20 ){
			
			apprcontfunc();
			return false;
		}
		else {
			document.f2.apprcont.value=''
			return false;
		}
	}
