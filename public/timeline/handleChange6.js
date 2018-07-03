

	function handleChange6(input) {


		if (document.f2.sTextBox.value == '') {
			alert("You should enter a DATE on the TEXT FIELD.")
			document.f2.noticeproc.value='';
			document.f2.sTextBox.focus();

			return false;
		}  
		if(input.value < 1) {
			alert ("Sorry this is not possible you must input at least 1.")
			document.f2.noticeproc.value=''

			return false;
		}


		if (input.value > 7) {
			alert("Sorry, this is not possible.  The NTP must be issued within 3 days.")
			document.f2.noticeproc.value=''
			return false;  
		}

		if (input.value > 2) {
			var message=confirm("This is allowed only when the ABC is above PhP50M.  If the ABC is above PhP50M, click OK to continue.  If the ABC is PhP50M or below, click CANCEL to go back to the previous value.")
			if(message)
				noticefunc()
			else
				document.f2.noticeproc.value=''
			return false;  
		}

		if(input.value >= 1 && input.value<=7) {
			noticefunc()
		}

		else {
			document.f2.noticeproc.value=''
			return false;
		}
	}
