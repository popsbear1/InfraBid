
	function postfunc() {

		s=document.f2.date_to7.value
		days=(document.f2.postqual1.value*1)//-1


		if (days=="") {
			alert("there should be number input in the textbox")
			return true;
		}

		document.forms[0].noa1.value="";
		document.forms[0].consign.value="";
		document.forms[0].apprcont.value="";
		document.forms[0].noticeproc.value="";
		document.forms[0].group15.checked="checked";



		dateArray = s.split('/')
		sdate = new Date(dateArray[2],dateArray[0]-1,dateArray[1])

		if(dateArray[2].length<4){
			alert("Please Enter The Year As A Four Digit Number\n\nExample:- 2002\n\nThank You")
			return document.f2.date_to.value=""
		//}
		}
		else{

			odate9 = new Date(sdate.getTime() + (days * 86400000))
			odate9.setDate(odate9.getDate() + 0)
			document.f2.date_to9.value=("0" + (odate9.getMonth() + 1)).slice(-2) + '/' + ("0" + odate9.getDate()).slice(-2) + '/' + odate9.getFullYear()

			odate10 = new Date(sdate.getTime() + (days * 86400000))
			odate10.setDate(odate10.getDate() + 1)
			document.f2.date_to10.value=("0" + (odate10.getMonth() + 1)).slice(-2) + '/' + ("0" + odate10.getDate()).slice(-2) + '/' + odate10.getFullYear()

			odate11 = new Date(sdate.getTime() + (days * 86400000))
			odate11.setDate(odate11.getDate() + 2)
			document.f2.date_to11.value=("0" + (odate11.getMonth() + 1)).slice(-2) + '/' + ("0" + odate11.getDate()).slice(-2) + '/' + odate11.getFullYear()

			odate12 = new Date(sdate.getTime() + (days * 86400000))
			odate12.setDate(odate12.getDate() + 3)
			document.f2.date_to12.value=("0" + (odate12.getMonth() + 1)).slice(-2) + '/' + ("0" + odate12.getDate()).slice(-2) + '/' + odate12.getFullYear()

			odate13 = new Date(sdate.getTime() + (days * 86400000))
			odate13.setDate(odate13.getDate() + 4)
			document.f2.date_to13.value=("0" + (odate13.getMonth() + 1)).slice(-2) + '/' + ("0" + odate13.getDate()).slice(-2) + '/' + odate13.getFullYear()

			odate14 = new Date(sdate.getTime() + (days * 86400000))
			odate14.setDate(odate14.getDate() + 5)
			document.f2.date_to14.value=("0" + (odate14.getMonth() + 1)).slice(-2) + '/' + ("0" + odate14.getDate()).slice(-2) + '/' + odate14.getFullYear()

			odate15 = new Date(sdate.getTime() + (days * 86400000))
			odate15.setDate(odate15.getDate() + 5)
			document.f2.date_to15.value=("0" + (odate15.getMonth() + 1)).slice(-2) + '/' + ("0" + odate15.getDate()).slice(-2) + '/' + odate15.getFullYear()

			odate16 = new Date(sdate.getTime() + (days * 86400000))
			odate16.setDate(odate16.getDate() + 6 )
			document.f2.date_to16.value=("0" + (odate16.getMonth() + 1)).slice(-2) + '/' + ("0" + odate16.getDate()).slice(-2) + '/' + odate16.getFullYear()

			odate17 = new Date(sdate.getTime() + (days * 86400000))
			odate17.setDate(odate17.getDate() + 6)
			document.f2.date_to17.value=("0" + (odate17.getMonth() + 1)).slice(-2) + '/' + ("0" + odate17.getDate()).slice(-2) + '/' +  odate17.getFullYear()
		}
	}