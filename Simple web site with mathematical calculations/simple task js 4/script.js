var first_name=prompt("Imię 1 chłopca:")
var first_weight=parseInt(prompt("Masa 1 chłopca"))
var second_name=prompt("Imię 2 chłopca:")
var second_weight=parseInt(prompt("Masa 2 chłopca:"))
let element = document.getElementById("text");
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
