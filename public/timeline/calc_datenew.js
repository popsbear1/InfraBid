function calc_datenew() {
s=document.f2.sTextBox.value
document.forms[0].prebidadded.disabled=false;	 
days=0;

	   
if (document.f2.sTextBox.value == '') {
	alert("You should enter a DATE on the TEXT FIELD.")
	document.f2.sTextBox.focus();
	return false;
}

dateArray = s.split('/')
sdate = new Date(dateArray[2], dateArray[0]-1, dateArray[1])

if(dateArray[2].length<4) {
alert("Please Enter The Year As A Four Digit Number\n\nExample:- 2002\n\nThank You")
return document.f2.date_to.value=""
}

if((document.f2.group20.checked!='') && (document.f2.group21.checked=='') && (document.f2.group22.checked=='') && (document.f2.group15.checked=='') && (document.f2.group16.checked!='')) {

odate = new Date(sdate.getTime() + (days * 86400000));
document.f2.date_to.value=("0" + (odate.getMonth() + 1)).slice(-2) + '/' + ("0" + odate.getDate()).slice(-2) + '/' +   odate.getFullYear()


odate1 = new Date(sdate.getTime() + (days * 86400000))
odate1.setDate(odate1.getDate() + 7)
document.f2.date_to1.value=("0" + (odate1.getMonth() + 1)).slice(-2) + '/' + ("0" + odate1.getDate()).slice(-2) + '/' +   odate1.getFullYear()

odate2 = new Date(sdate.getTime() + (days * 86400000))
odate2.setDate(odate2.getDate() + 8)
document.f2.date_to2.value=("0" + (odate2.getMonth() + 1)).slice(-2) + '/' + ("0" + odate2.getDate()).slice(-2) + '/' +   odate2.getFullYear()

odate3 = new Date(sdate.getTime() + (days * 86400000))
odate3.setDate(odate3.getDate() + 8)
document.f2.date_to3.value=("0" + (odate3.getMonth() + 1)).slice(-2) + '/' + ("0" + odate3.getDate()).slice(-2) + '/' +   odate3.getFullYear()

odate4 = new Date(sdate.getTime() + (days * 86400000))
odate4.setDate(odate4.getDate() + 20)
document.f2.date_to4.value=("0" + (odate4.getMonth() + 1)).slice(-2) + '/' + ("0" + odate4.getDate()).slice(-2) + '/' +   odate4.getFullYear()

odate5 = new Date(sdate.getTime() + (days * 86400000))
odate5.setDate(odate5.getDate() + 20)
document.f2.date_to5.value=("0" + (odate5.getMonth() + 1)).slice(-2) + '/' + ("0" + odate5.getDate()).slice(-2) + '/' +   odate5.getFullYear()

odate6 = new Date(sdate.getTime() + (days * 86400000))
odate6.setDate(odate6.getDate() + 21)
document.f2.date_to6.value=("0" + (odate6.getMonth() + 1)).slice(-2) + '/' + ("0" + odate6.getDate()).slice(-2) + '/' +   odate6.getFullYear()

odate7 = new Date(sdate.getTime() + (days * 86400000))
odate7.setDate(odate7.getDate() + 21)
document.f2.date_to7.value=("0" + (odate7.getMonth() + 1)).slice(-2) + '/' + ("0" + odate7.getDate()).slice(-2) + '/' +   odate7.getFullYear()

odate8 = new Date(sdate.getTime() + (days * 86400000))
odate8.setDate(odate8.getDate() + 22)
document.f2.date_to8.value=("0" + (odate8.getMonth() + 1)).slice(-2) + '/' + ("0" + odate8.getDate()).slice(-2) + '/' +  odate8.getFullYear()

odate9 = new Date(sdate.getTime() + (days * 86400000))
odate9.setDate(odate9.getDate() + 22)
document.f2.date_to9.value=("0" + (odate9.getMonth() + 1)).slice(-2) + '/' + ("0" + odate9.getDate()).slice(-2) + '/' +   odate9.getFullYear()

odate10 = new Date(sdate.getTime() + (days * 86400000))
odate10.setDate(odate10.getDate() + 23)
document.f2.date_to10.value=("0" + (odate10.getMonth() + 1)).slice(-2) + '/' + ("0" + odate10.getDate()).slice(-2) + '/' +   odate10.getFullYear()

odate11 = new Date(sdate.getTime() + (days * 86400000))
odate11.setDate(odate11.getDate() + 23)
document.f2.date_to11.value=("0" + (odate11.getMonth() + 1)).slice(-2) + '/' + ("0" + odate11.getDate()).slice(-2) + '/' +  odate11.getFullYear()

odate12 = new Date(sdate.getTime() + (days * 86400000))
odate12.setDate(odate12.getDate() + 24)
document.f2.date_to12.value=("0" + (odate12.getMonth() + 1)).slice(-2) + '/' + ("0" + odate12.getDate()).slice(-2) + '/' +  odate12.getFullYear()

odate13 = new Date(sdate.getTime() + (days * 86400000))
odate13.setDate(odate13.getDate() + 24)
document.f2.date_to13.value=("0" + (odate13.getMonth() + 1)).slice(-2) + '/' + ("0" + odate13.getDate()).slice(-2) + '/' +   odate13.getFullYear()


odate16 = new Date(sdate.getTime() + (days * 86400000))
odate16.setDate(odate16.getDate() + 25)
document.f2.date_to16.value=("0" + (odate16.getMonth() + 1)).slice(-2) + '/' + ("0" + odate16.getDate()).slice(-2) + '/' +  odate16.getFullYear()

odate17 = new Date(sdate.getTime() + (days * 86400000))
odate17.setDate(odate17.getDate() + 25)
document.f2.date_to17.value=("0" + (odate17.getMonth() + 1)).slice(-2) + '/' + ("0" + odate17.getDate()).slice(-2) + '/' +   odate17.getFullYear()
	
}

else if((document.f2.group20.checked=='') && (document.f2.group21.checked!='') && (document.f2.group22.checked=='') && (document.f2.group15.checked!='') && (document.f2.group16.checked=='')) {

computelatest();
	
}

else if((document.f2.group20.checked=='') && (document.f2.group21.checked!='') && (document.f2.group22.checked=='') && (document.f2.group15.checked=='') && (document.f2.group16.checked!='')) {

odate = new Date(sdate.getTime() + (days * 86400000));
document.f2.date_to.value=("0" + (odate.getMonth() + 1)).slice(-2) + '/' + ("0" + odate.getDate()).slice(-2) + '/' +   odate.getFullYear()


odate1 = new Date(sdate.getTime() + (days * 86400000))
odate1.setDate(odate1.getDate() + 7)
document.f2.date_to1.value=("0" + (odate1.getMonth() + 1)).slice(-2) + '/' + ("0" + odate1.getDate()).slice(-2) + '/' +   odate1.getFullYear()

odate2 = new Date(sdate.getTime() + (days * 86400000))
odate2.setDate(odate2.getDate() + 45)
document.f2.date_to2.value=("0" + (odate2.getMonth() + 1)).slice(-2) + '/' + ("0" + odate2.getDate()).slice(-2) + '/' +   odate2.getFullYear()

odate3 = new Date(sdate.getTime() + (days * 86400000))
odate3.setDate(odate3.getDate() + 45)
document.f2.date_to3.value=("0" + (odate3.getMonth() + 1)).slice(-2) + '/' + ("0" + odate3.getDate()).slice(-2) + '/' +   odate3.getFullYear()


odate4 = new Date(sdate.getTime() + (days * 86400000))
odate4.setDate(odate4.getDate() + 57)
document.f2.date_to4.value=("0" + (odate4.getMonth() + 1)).slice(-2) + '/' + ("0" + odate4.getDate()).slice(-2) + '/' +   odate4.getFullYear()

odate5 = new Date(sdate.getTime() + (days * 86400000))
odate5.setDate(odate5.getDate() + 57)
document.f2.date_to5.value=("0" + (odate5.getMonth() + 1)).slice(-2) + '/' + ("0" + odate5.getDate()).slice(-2) + '/' +  odate5.getFullYear()

odate6 = new Date(sdate.getTime() + (days * 86400000))
odate6.setDate(odate6.getDate() + 64)
document.f2.date_to6.value=("0" + (odate6.getMonth() + 1)).slice(-2) + '/' + ("0" + odate6.getDate()).slice(-2) + '/' +   odate6.getFullYear()

odate7 = new Date(sdate.getTime() + (days * 86400000))
odate7.setDate(odate7.getDate() + 64)
document.f2.date_to7.value=("0" + (odate7.getMonth() + 1)).slice(-2) + '/' + ("0" + odate7.getDate()).slice(-2) + '/' +   odate7.getFullYear()

odate8 = new Date(sdate.getTime() + (days * 86400000))
odate8.setDate(odate8.getDate() + 109)
document.f2.date_to8.value=("0" + (odate8.getMonth() + 1)).slice(-2) + '/' + ("0" + odate8.getDate()).slice(-2) + '/' +  odate8.getFullYear()

odate9 = new Date(sdate.getTime() + (days * 86400000))
odate9.setDate(odate9.getDate() + 109)
document.f2.date_to9.value=("0" + (odate9.getMonth() + 1)).slice(-2) + '/' + ("0" + odate9.getDate()).slice(-2) + '/' +   odate9.getFullYear()

odate10 = new Date(sdate.getTime() + (days * 86400000))
odate10.setDate(odate10.getDate() + 124)
document.f2.date_to10.value= ("0" + (odate10.getMonth() + 1)).slice(-2) + '/' + ("0" + odate10.getDate()).slice(-2) + '/' +  odate10.getFullYear()

odate11 = new Date(sdate.getTime() + (days * 86400000))
odate11.setDate(odate11.getDate() + 124)
document.f2.date_to11.value=("0" + (odate11.getMonth() + 1)).slice(-2) + '/' + ("0" + odate11.getDate()).slice(-2) + '/' +  odate11.getFullYear()

odate12 = new Date(sdate.getTime() + (days * 86400000))
odate12.setDate(odate12.getDate() + 134)
document.f2.date_to12.value=("0" + (odate12.getMonth() + 1)).slice(-2) + '/' + ("0" + odate12.getDate()).slice(-2) + '/' +  odate12.getFullYear()

odate13 = new Date(sdate.getTime() + (days * 86400000))
odate13.setDate(odate13.getDate() + 134)
document.f2.date_to13.value=("0" + (odate13.getMonth() + 1)).slice(-2) + '/' + ("0" + odate13.getDate()).slice(-2) + '/' +  odate13.getFullYear()

odate16 = new Date(sdate.getTime() + (days * 86400000))
odate16.setDate(odate16.getDate() + 141)
document.f2.date_to16.value=("0" + (odate16.getMonth() + 1)).slice(-2) + '/' + ("0" + odate16.getDate()).slice(-2) + '/' + odate16.getFullYear()

odate17 = new Date(sdate.getTime() + (days * 86400000))
odate17.setDate(odate17.getDate() + 141)
document.f2.date_to17.value=("0" + (odate17.getMonth() + 1)).slice(-2) + '/' +  ("0" + odate17.getDate()).slice(-2) + '/' +  odate17.getFullYear()	
}

else if((document.f2.group20.checked=='') && (document.f2.group21.checked=='') && (document.f2.group22.checked!='') && (document.f2.group15.checked!='') && (document.f2.group16.checked=='') && (document.f2.group11.checked!='') && (document.f2.group12.checked=='')) {
compute144days();
}

else if((document.f2.group20.checked=='') && (document.f2.group21.checked=='') && (document.f2.group22.checked!='') && (document.f2.group15.checked=='') && (document.f2.group16.checked!='') && (document.f2.group11.checked!='') && (document.f2.group12.checked=='')) {
odate2 = new Date(sdate.getTime() + (days * 86400000))
odate2.setDate(odate2.getDate() + 60)
document.f2.date_to2.value=("0" + (odate2.getMonth() + 1)).slice(-2) + '/' + ("0" + odate2.getDate()).slice(-2) + '/' +   odate2.getFullYear()

odate3 = new Date(sdate.getTime() + (days * 86400000))
odate3.setDate(odate3.getDate() + 60)
document.f2.date_to3.value=("0" + (odate3.getMonth() + 1)).slice(-2) + '/' + ("0" + odate3.getDate()).slice(-2) + '/' +   odate3.getFullYear()

odate4 = new Date(sdate.getTime() + (days * 86400000))
odate4.setDate(odate4.getDate() + 72)
document.f2.date_to4.value=("0" + (odate4.getMonth() + 1)).slice(-2) + '/' + ("0" + odate4.getDate()).slice(-2) + '/' +   odate4.getFullYear()

odate5 = new Date(sdate.getTime() + (days * 86400000))
odate5.setDate(odate5.getDate() + 72)
document.f2.date_to5.value=("0" + (odate5.getMonth() + 1)).slice(-2) + '/' + ("0" + odate5.getDate()).slice(-2) + '/' +  odate5.getFullYear()

odate6 = new Date(sdate.getTime() + (days * 86400000))
odate6.setDate(odate6.getDate() + 79)
document.f2.date_to6.value=("0" + (odate6.getMonth() + 1)).slice(-2) + '/' + ("0" + odate6.getDate()).slice(-2) + '/' +   odate6.getFullYear()

odate7 = new Date(sdate.getTime() + (days * 86400000))
odate7.setDate(odate7.getDate() + 79)
document.f2.date_to7.value=("0" + (odate7.getMonth() + 1)).slice(-2) + '/' + ("0" + odate7.getDate()).slice(-2) + '/' +   odate7.getFullYear()

odate8 = new Date(sdate.getTime() + (days * 86400000))
odate8.setDate(odate8.getDate() + 124)
document.f2.date_to8.value=("0" + (odate8.getMonth() + 1)).slice(-2) + '/' + ("0" + odate8.getDate()).slice(-2) + '/' +  odate8.getFullYear()

odate9 = new Date(sdate.getTime() + (days * 86400000))
odate9.setDate(odate9.getDate() + 124)
document.f2.date_to9.value=("0" + (odate9.getMonth() + 1)).slice(-2) + '/' + ("0" + odate9.getDate()).slice(-2) + '/' +   odate9.getFullYear()

odate10 = new Date(sdate.getTime() + (days * 86400000))
odate10.setDate(odate10.getDate() + 139)
document.f2.date_to10.value= ("0" + (odate10.getMonth() + 1)).slice(-2) + '/' + ("0" + odate10.getDate()).slice(-2) + '/' +  odate10.getFullYear()

odate11 = new Date(sdate.getTime() + (days * 86400000))
odate11.setDate(odate11.getDate() + 139)
document.f2.date_to11.value=("0" + (odate11.getMonth() + 1)).slice(-2) + '/' + ("0" + odate11.getDate()).slice(-2) + '/' +  odate11.getFullYear()

odate12 = new Date(sdate.getTime() + (days * 86400000))
odate12.setDate(odate12.getDate() + 149)
document.f2.date_to12.value=("0" + (odate12.getMonth() + 1)).slice(-2) + '/' + ("0" + odate12.getDate()).slice(-2) + '/' +  odate12.getFullYear()

odate13 = new Date(sdate.getTime() + (days * 86400000))
odate13.setDate(odate13.getDate() + 149)
document.f2.date_to13.value=("0" + (odate13.getMonth() + 1)).slice(-2) + '/' + ("0" + odate13.getDate()).slice(-2) + '/' +  odate13.getFullYear()


odate16 = new Date(sdate.getTime() + (days * 86400000))
odate16.setDate(odate16.getDate() + 156)
document.f2.date_to16.value=("0" + (odate16.getMonth() + 1)).slice(-2) + '/' + ("0" + odate16.getDate()).slice(-2) + '/' + odate16.getFullYear()

odate17 = new Date(sdate.getTime() + (days * 86400000))
odate17.setDate(odate17.getDate() + 156)
document.f2.date_to17.value=("0" + (odate17.getMonth() + 1)).slice(-2) + '/' +  ("0" + odate17.getDate()).slice(-2) + '/' +  odate17.getFullYear()
}

else {
odate = new Date(sdate.getTime() + (days * 86400000));
document.f2.date_to.value=("0" + (odate.getMonth() + 1)).slice(-2) + '/' + ("0" + odate.getDate()).slice(-2) + '/' +   odate.getFullYear()


odate1 = new Date(sdate.getTime() + (days * 86400000))
odate1.setDate(odate1.getDate() + 7)
document.f2.date_to1.value=("0" + (odate1.getMonth() + 1)).slice(-2) + '/' + ("0" + odate1.getDate()).slice(-2) + '/' +   odate1.getFullYear()

odate2 = new Date(sdate.getTime() + (days * 86400000))
odate2.setDate(odate2.getDate() + 8)
document.f2.date_to2.value=("0" + (odate2.getMonth() + 1)).slice(-2) + '/' + ("0" + odate2.getDate()).slice(-2) + '/' +   odate2.getFullYear()

odate3 = new Date(sdate.getTime() + (days * 86400000))
odate3.setDate(odate3.getDate() + 8)
document.f2.date_to3.value=("0" + (odate3.getMonth() + 1)).slice(-2) + '/' + ("0" + odate3.getDate()).slice(-2) + '/' +   odate3.getFullYear()

odate4 = new Date(sdate.getTime() + (days * 86400000))
odate4.setDate(odate4.getDate() + 20)
document.f2.date_to4.value=("0" + (odate4.getMonth() + 1)).slice(-2) + '/' + ("0" + odate4.getDate()).slice(-2) + '/' +   odate4.getFullYear()

odate5 = new Date(sdate.getTime() + (days * 86400000))
odate5.setDate(odate5.getDate() + 20)
document.f2.date_to5.value=("0" + (odate5.getMonth() + 1)).slice(-2) + '/' + ("0" + odate5.getDate()).slice(-2) + '/' +   odate5.getFullYear()

odate6 = new Date(sdate.getTime() + (days * 86400000))
odate6.setDate(odate6.getDate() + 21)
document.f2.date_to6.value=("0" + (odate6.getMonth() + 1)).slice(-2) + '/' + ("0" + odate6.getDate()).slice(-2) + '/' +   odate6.getFullYear()

odate7 = new Date(sdate.getTime() + (days * 86400000))
odate7.setDate(odate7.getDate() + 21)
document.f2.date_to7.value=("0" + (odate7.getMonth() + 1)).slice(-2) + '/' + ("0" + odate7.getDate()).slice(-2) + '/' +   odate7.getFullYear()

odate8 = new Date(sdate.getTime() + (days * 86400000))
odate8.setDate(odate8.getDate() + 22)
document.f2.date_to8.value=("0" + (odate8.getMonth() + 1)).slice(-2) + '/' + ("0" + odate8.getDate()).slice(-2) + '/' +  odate8.getFullYear()

odate9 = new Date(sdate.getTime() + (days * 86400000))
odate9.setDate(odate9.getDate() + 22)
document.f2.date_to9.value=("0" + (odate9.getMonth() + 1)).slice(-2) + '/' + ("0" + odate9.getDate()).slice(-2) + '/' +   odate9.getFullYear()

odate10 = new Date(sdate.getTime() + (days * 86400000))
odate10.setDate(odate10.getDate() + 23)
document.f2.date_to10.value=("0" + (odate10.getMonth() + 1)).slice(-2) + '/' + ("0" + odate10.getDate()).slice(-2) + '/' +   odate10.getFullYear()

odate11 = new Date(sdate.getTime() + (days * 86400000))
odate11.setDate(odate11.getDate() + 23)
document.f2.date_to11.value=("0" + (odate11.getMonth() + 1)).slice(-2) + '/' + ("0" + odate11.getDate()).slice(-2) + '/' +  odate11.getFullYear()

odate12 = new Date(sdate.getTime() + (days * 86400000))
odate12.setDate(odate12.getDate() + 24)
document.f2.date_to12.value=("0" + (odate12.getMonth() + 1)).slice(-2) + '/' + ("0" + odate12.getDate()).slice(-2) + '/' +  odate12.getFullYear()

odate13 = new Date(sdate.getTime() + (days * 86400000))
odate13.setDate(odate13.getDate() + 24)
document.f2.date_to13.value=("0" + (odate13.getMonth() + 1)).slice(-2) + '/' + ("0" + odate13.getDate()).slice(-2) + '/' +   odate13.getFullYear()

odate14 = new Date(sdate.getTime() + (days * 86400000))
odate14.setDate(odate14.getDate() + 25)
document.f2.date_to14.value=("0" + (odate14.getMonth() + 1)).slice(-2) + '/' + ("0" + odate14.getDate()).slice(-2) + '/' +  odate14.getFullYear()

odate15 = new Date(sdate.getTime() + (days * 86400000))
odate15.setDate(odate15.getDate() + 25)
document.f2.date_to15.value=("0" + (odate15.getMonth() + 1)).slice(-2) + '/' + ("0" + odate15.getDate()).slice(-2) + '/' +  odate15.getFullYear()

odate16 = new Date(sdate.getTime() + (days * 86400000))
odate16.setDate(odate16.getDate() + 26)
document.f2.date_to16.value=("0" + (odate16.getMonth() + 1)).slice(-2) + '/' + ("0" + odate16.getDate()).slice(-2) + '/' +  odate16.getFullYear()

odate17 = new Date(sdate.getTime() + (days * 86400000))
odate17.setDate(odate17.getDate() + 26)
document.f2.date_to17.value=("0" + (odate17.getMonth() + 1)).slice(-2) + '/' + ("0" + odate17.getDate()).slice(-2) + '/' +   odate17.getFullYear()

}
}