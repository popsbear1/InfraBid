

	function handleChange3(input) {

		if (document.f2.sTextBox.value == '') {
			alert("You should enter a DATE on the TEXT FIELD.")
			document.f2.noa1.value='';
			document.f2.sTextBox.focus();

			return false;
		}

		if (input.value < 2) {
			alert("Minimum value allowed is 2.")
			document.f2.noa1.value='';
		}



		if(input.value > 15) {
			alert("Sorry, this is not possible.  The longest allowable time for this stage is 15 days.");
			document.f2.noa1.value='';
			return false;
		}

		if (input.value >=5 && input.value <= 7){
			var message=confirm("This is allowed only when the ABC is above PhP50M.  If the ABC is above PhP50M, click OK to continue.  If the ABC is PhP50M or below, click CANCEL to go back to the previous value.")	
			if(message)
				noafunc()
			else
				document.f2.noa1.value=''
			return false;
		}

		if (input.value >=8 && input.value <= 15){
			var message=confirm("This is allowed only for GOCCs and GFIs.  If you wish to proceed, click OK.  Otherwise, click CANCEL to go back to the previous value.")	
			if(message)
				noafunc()
			else
				document.f2.noa1.value=''
			return false;
		}

		if (input.value >= 2 && input.value <=7 ){
			
			noafunc();
			return false;
		}

		else {
			document.f2.noa1.value='';
			return false;
		}
	}