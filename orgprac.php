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
	  
	  
	 /*===zad2====*/
	  function zapytanie($sql,$conn){
	 	/*require("connect.php");*/
		  //$sql = "SELECT * FROM `pracownicy` , `organizacja` WHERE dzial = id_org";
		echo("<h2>Zad. 2 : Wiek poszczególnych pracowników (w latach) z działu serwis</h4>");
		echo("<li> Funkcja: ".$sql);
		$result = $conn->query($sql);
		//zwraca błąd jeśli zapytanie jest nieprawidłowo zapisane
		if ( $result) {
		      echo "<li> zapytanie wykonało się prawidłowo, wszystko ok";
		} else {
		      echo "Uwaga Error: " . $sql . "<br>" . mysqli_error($conn);
		}
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
	zapytanie("SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy, organizacja WHERE nazwa_dzial='serwis'", $conn);
	  
	  
	   /*===zad3====*/
	  function zapytanie($sql,$conn){
	 	/*require("connect.php");*/
		  //$sql = "SELECT * FROM `pracownicy` , `organizacja` WHERE dzial = id_org";
		echo("<h2>Zad. 3 : Suma lat wszystkich pracowników</h4>");
		echo("<li> Funkcja: ".$sql);
		$result = $conn->query($sql);
		//zwraca błąd jeśli zapytanie jest nieprawidłowo zapisane
		if ( $result) {
		      echo "<li> zapytanie wykonało się prawidłowo, wszystko ok";
		} else {
		      echo "Uwaga Error: " . $sql . "<br>" . mysqli_error($conn);
		}
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
	zapytanie("SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as SumaLat from pracownicy", $conn);
	  
	  


?>
</body>
</html>
