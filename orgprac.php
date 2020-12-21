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

//    require_once("connect.php");
 //   require_once("menu.php");
    
echo("start") ;
	  
	 /*===zad2====*/
	  function zapytanie($sql,$conn){
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
	//zapytanie("SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy, organizacja WHERE nazwa_dzial='serwis'", $conn);
	  
	  
	
	  


?>
</body>
</html>
