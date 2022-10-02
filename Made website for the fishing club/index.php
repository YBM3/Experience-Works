<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Serials</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="container">
		<div id="logo">
			<div id="obrazek">
				<img src="szczupak.png" id="szczupak"><br>
			</div>
			<div id="logo_text">
				<h1>Koło Wędkarska w Rynie</h1>
			</div>	
		</div>
		<div id="nav">
			<ol>
				<li>Zarządza BUHAI</li><br>
				<li>Składki = 100zl</li><br>
				<li>
					<form>
						Imie:<br>
						<input type="text" name="name">
						Nazwisko:<br>
						<input type="text" name="nazwisko"><br><br>
						<input type="submit" value="Wyślij">
					</form>
				</li>
			</ol>
			<?php
				include("start.php");
			?>
		</div>
		<div id="content">
			<div id="for_text">	
				Moje koło wędkarskie istnieje już 10 lat! Założyłem go sam kiedy miałem 9 lat, a teraz nas tysięcy. Po prawej stronie jest zdjęcie naszej głównej siedziby, a na dole mapa dojazdu.
			</div>
			<div id="for_img">
				<img id="siedziba" src="siedziba.jpg">
			</div>
			<div id="for_karta">
				<img id="karta" src="karta.png">
			</div>
		</div>
		<div id="ad">
			<img id="img1" src="ad1.png">
			<img id="img2" src="ad2.png">
		</div>
		<div id="footer">
			Buhai Maksym 08.11.2021 +48265245323 &copy;
		</div>
	</div>
</body>
</html>