function jaka_to_liczba()
{
	var liczba = prompt("Podaj liczbę całkowitą: ");
	var element = document.getElementById("zawartosc");
	if(parseInt(liczba)>0)
		element.innerHTML = "Liczba " + liczba + " jest dodatnia";
	else if(parseInt(liczba)<0)
		element.innerHTML = "Liczba " + liczba + " jest ujemna";
	else if(parseInt(liczba)==0)
		element.innerHTML = "Liczba " + liczba + " to zero";
	else
		element.innerHTML = "Wpisałesz bzdurę";
}