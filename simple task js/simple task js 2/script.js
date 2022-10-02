const cat_count=prompt("Ile kotów ma Ala?");
	if(cat_count!=null){
		document.getElementById("wynik_1").innerHTML= "Ala ma " + cat_count + " kotów";
	}
	else{
		alert("bLAd");
}

const age_of_oldest_cat=prompt("Ile lat ma najstarzsy kot?");
	if(age_of_oldest_cat!=null){
		document.getElementById("wynik_2").innerHTML= "Najstarzsy kot ma " + age_of_oldest_cat + " lat";
		document.getElementById("wynik_3").innerHTML= "Wszystkie koty mają " + (cat_count*1) + " ogonów";
		document.getElementById("wynik_4").innerHTML= "Wszystkie koty mają " + (cat_count*2) + " nóg";
	}
else{
	alert("bLAd");
}

