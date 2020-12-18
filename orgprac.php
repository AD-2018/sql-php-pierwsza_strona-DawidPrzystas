<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Moje Marne Wypociny</title>
  </head>
  <body>
    <h1>Data i Czas</h1>
    

<?php

    require_once("connect.php");
    require_once("menu.php");
    
    /*===zad1====*/
$sql = "SELECT * ,YEAR(CURDATE())-YEAR(data_urodzenia) AS wiek FROM pracownicy";
echo("<li> zad 1 </br> Funkcja: ".$sql);
$result = $conn->query($sql);
echo("<table border='1'>");
echo("<tr>");
echo("
				<th>imie</th>;
				<th>wiek</th>");
echo("</tr>");
  
  while($row = $result->fetch_assoc()) {
			echo("<tr>");    
					echo( "<td>".$row['imie']."</td>" );
					echo( "<td>".$row['wiek']."</td>" );
			echo("</tr>");
  }
echo("</table>");
	  
	  
	  /*===zad1====*/
	  function zapytanie($sql){
	 	require("connect.php");
		  //$sql = "SELECT * FROM `pracownicy` , `organizacja` WHERE dzial = id_org";
		echo("<li> 111 </br> Funkcja: ".$sql);
		$result = $conn->query($sql);
		echo("<table border='1'>");
		echo("<tr>");
		echo("
				<th>id</th>
				<th>Imie</th>
				<th>nazwa dzialu</th>
				<th>zarobki</th>");
		echo("</tr>");
  
  		while($row = $result->fetch_assoc()) {
			echo("<tr>");    
					echo( "<td>".$row['id_pracownicy']."</td>" );
					echo( "<td>".$row['imie']."</td>" );
					echo( "<td>".$row['nazwa_dzial']."</td>" );
					echo( "<td>".$row['zarobki']."</td>" );
			echo("</tr>");
  		}
	echo("</table>");  
	}
	zapytanie("SELECT * FROM `pracownicy` , `organizacja` WHERE dzial = id_org");


?>
</body>
</html>
