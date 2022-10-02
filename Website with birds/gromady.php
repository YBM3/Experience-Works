<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gromady kręgowców</title>
	<link rel="stylesheet" type="text/css" href="style13.css">
</head>
<body>
	<div class="menu">
		<a href="gromada_ryby.html">gromada ryb</a>
		<a href="gromada_ptaki.html">gromada ptaków</a>
		<a href="gromada_ssaki.html">gromada ssaków</a>
	</div>
	<div id="logo"><h2>Gromady Kręgowców</h2></div>
	<div id="lewa">
		<?php
			$connection=mysqli_connect("localhost", "root", "","baza") or die("error");
			if(mysqli_select_db($connection, "baza")){
			}
			else{
				echo "error, bad database";
			}

			$query="select id, Gromady_id, gatunek, wystepowanie from Zwierzeta where Gromady_id in (4,5);";
			$result=mysqli_query($connection, $query);

			while($row=mysqli_fetch_assoc($result))
			{
				echo  $row["id"]. ". ". $row["gatunek"]. "<br><br>";
				echo "Występowanie: ". $row["wystepowanie"]. ", gromada ";
				if($row["Gromady_id"]==4){
					echo "ptaki";
				}
				else{
					echo "ssaki";
				}
				echo "<hr>";

			}
		?>
	</div>
	<div id="prawa">
		<h1>PTAKI</h1>
		<ol>
			<?php
				$query="select gatunek, obraz from Zwierzeta where gromady_id=4;";
				$result=null;
				$result=mysqli_query($connection, $query);


			while($row=mysqli_fetch_assoc($result))
			{
				$obrazek=$row["obraz"];
				echo '<li><a href="'. $obrazek. '">'. $row["gatunek"]. "</a></li>";
			}
				mysqli_close($connection);
			?>
		</ol>
		<img src="sroka.jpg" alt="Sroka zwyczajna, gromada ptaki">
	</div>
	<div id="stopka">Stronę o kręgowcach przygotował: 000000000000000</div>
</body>
</html>