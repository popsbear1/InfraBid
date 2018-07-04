
	function apprcontfunc() {


		s=document.f2.date_to13.value
		days=(document.f2.apprcont.value*1)//-1

		if (days=='') {
			alert("there should be number input in the textbox")
			return false;
		}
		dateArray = s.split('/')
		sdate = new Date(dateArray[2],dateArray[0]-1,dateArray[1])

		if(dateArray[2].length<4){
			alert("Please Enter The Year As A Four Digit Number\n\nExample:- 2002\n\nThank You")
			return document.f2.date_to.value=""
		//}
		}
		else{

			odate15 = new Date(sdate.getTime() + (days * 86400000))
			odate15.setDate(odate15.getDate() + 0)
			document.f2.date_to15.value=("0" + (odate15.getMonth() + 1)).slice(-2) + '/' + ("0" + odate15.getDate()).slice(-2) + '/' + odate15.getFullYear()

			odate16 = new Date(sdate.getTime() + (days * 86400000))
			odate16.setDate(odate16.getDate() + 1 )
			document.f2.date_to16.value=("0" + (odate16.getMonth() + 1)).slice(-2) + '/' + ("0" + odate16.getDate()).slice(-2) + '/' + odate16.getFullYear()

			odate17 = new Date(sdate.getTime() + (days * 86400000))
			odate17.setDate(odate17.getDate() + 1)
			document.f2.date_to17.value=("0" + (odate17.getMonth() + 1)).slice(-2) + '/' + ("0" + odate17.getDate()).slice(-2) + '/' + odate17.getFullYear()
		}
	}