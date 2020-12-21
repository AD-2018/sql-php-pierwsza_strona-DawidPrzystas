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

    require("connect.php");
    require_once("menu.php");
    
echo("start") ;
	  
	
	  function zapytanie($sql,$conn,$nazwa){
		echo("<h2>$nazwa</h4>");
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
	  
	  /*===zad1====*/ 
	  
	zapytanie("SELECT * ,YEAR(CURDATE())-YEAR(data_urodzenia) AS wiek FROM pracownicy", $conn, zad1 Wiek poszczególnych pracowników (w latach));
	  
	  
	/*===zad2====*/ 
	  
	zapytanie("SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy, organizacja WHERE nazwa_dzial='serwis'", $conn, zad2);
	  
	  
	 /*===zad3====*/
	
	zapytanie("SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy, organizacja WHERE nazwa_dzial='handel'", $conn, zad3);
	  
	  /*===zad4====*/
	
	zapytanie("SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja WHERE id_org=dzial and nazwa_dzial='handel'", $conn, zad4);
	  


?>
</body>
</html>
