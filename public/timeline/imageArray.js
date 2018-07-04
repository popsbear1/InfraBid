
	//create the pix array
	var pix = new Array();
	for(i=0; i<12; i++){
		pix[i] = new Image();
		pix[i].src = 'images/fractal' + i + '.jpg';
	}
	//Place this script wherever you want your calendar
	//The first argument must match the var name
	var thisMonth = new calendar('thisMonth',new Date(),pix);
	document.write(thisMonth.write());
