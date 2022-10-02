var first_name=prompt("Imię 1 chłopca:");
var first_weight=parseInt(prompt("Masa 1 chłopca"));
var second_name=prompt("Imię 2 chłopca:");
var second_weight=parseInt(prompt("Masa 2 chłopca:"));
let first_person_html = document.getElementById("first_person");
let second_person_html = document.getElementById("second_person");
let weights_html = document.getElementById("weight");

console.log(typeof first_weight)

if(first_weight!=null && second_weight!=null && first_name!=null && second_name!=null)
{
	first_person_html.innerHTML = "Masa " + first_name + " " + first_weight + " kg";
	second_person_html.innerHTML = "Masa " + second_name + " " + second_weight + " kg";
	if(first_weight>second_weight){
		weights_html.innerHTML=first_name + " jest cięższy od " + second_name; 
	}
	else if(first_weight<second_weight){
		weights_html.innerHTML=first_name + " jest lekkszy od " + second_name;
	}
	else{
		weights_html.innerHTML="Masy " + first_name + " oraz " + second_name + " są równe";
	}
}







/*
	if(first_weight!=null && second_weight!=null)
	{		
			
		if(first_weight === second_weight){
			element.innerHTML = "Masy są równe";
			}
		else {
			first_weight > second_weight ? element.innerHTML = `Masa ${first_name} jest większa od masy ${second_name}` :  element.innerHTML =  `Masa ${second_name} jest większa od masy ${first_name}`;
	}
	console.log(element)
	}
	else{
		alert("Uncorrect info")
	}
*/