
	function evalfunct() {


		s=document.f2.date_to6.value
		days=(document.f2.evaltxt1.value*1)//-1

		if (days=="") {
			alert("there should be number input in the textbox")
			return true;
		}
		dateArray = s.split('/')
		sdate = new Date(dateArray[2],dateArray[1]-1,dateArray[0])

		if(dateArray[2].length<4){
			alert("Please Enter The Year As A Four Digit Number\n\nExample:- 2002\n\nThank You")
			return document.f2.date_to.value=""

		//}
		}
		else{
			odate = new Date(sdate.getTime() - (days * 86400000));
			odate.setDate(odate.getDate() -21)
			document.f2.date_to.value=("0" + odate.getDate()).slice(-2) + '/' +  ("0" + (odate.getMonth() + 1)).slice(-2) + '/' + odate.getFullYear()


			odate1 = new Date(sdate.getTime() - (days * 86400000))
			odate1.setDate(odate1.getDate() -14)
			document.f2.date_to1.value=("0" + odate1.getDate()).slice(-2) + '/' +  ("0" + (odate1.getMonth() + 1)).slice(-2) + '/' + odate1.getFullYear()

			odate2 = new Date(sdate.getTime() - (days * 86400000))
			odate2.setDate(odate2.getDate() -13)
			document.f2.date_to2.value=("0" + odate2.getDate()).slice(-2) + '/' +  ("0" + (odate2.getMonth() + 1)).slice(-2) + '/' + odate2.getFullYear()

			odate3 = new Date(sdate.getTime() - (days * 86400000))
			odate3.setDate(odate3.getDate() -13)
			document.f2.date_to3.value=("0" + odate3.getDate()).slice(-2) + '/' +  ("0" + (odate3.getMonth() + 1)).slice(-2) + '/' + odate3.getFullYear()

			odate4 = new Date(sdate.getTime() - (days * 86400000))
			odate4.setDate(odate4.getDate() - 1)
			document.f2.date_to4.value=("0" + odate4.getDate()).slice(-2) + '/' +  ("0" + (odate4.getMonth() + 1)).slice(-2) + '/' + odate4.getFullYear()

			odate5 = new Date(sdate.getTime() - (days * 86400000))
			odate5.setDate(odate5.getDate() - 1)
			document.f2.date_to5.value=("0" + odate5.getDate()).slice(-2) + '/' + ("0" + (odate5.getMonth() + 1)).slice(-2) + '/' +  odate5.getFullYear()

			odate6 = new Date(sdate.getTime() - (days * 86400000))
			odate6.setDate(odate6.getDate() + 0)
			document.f2.date_to6.value=("0" + odate6.getDate()).slice(-2) + '/' +  ("0" + (odate6.getMonth() + 1)).slice(-2) + '/' + odate6.getFullYear()

		}
	}