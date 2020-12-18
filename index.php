<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dawid-Strona kropka pe el</title>
  </head>
  <body>
    <h4>Dawid Przystaś</h4>
    <h1>Strona Główna</h1>
    

<?php
require_once("connect.php");
require_once("menu.php");

$sql = "SELECT imie, dzial FROM pracownicy, organizacja WHERE dzial = nazwa_dzial";
echo("<li> Zad wprowadzenie </br> Funkcja: ".$sql);
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
					echo( "<td>".$row['id']."</td>" );
					echo( "<td>".$row['imie']."</td>" );
					echo( "<td>".$row['dzial']."</td>" );
					echo( "<td>".$row['zarobki']."</td>" );
			echo("</tr>");
  }
echo("</table>");

/*===zad1====*/
	  function zapytanie(){
	  $sql = "SELECT * FROM `pracownicy` , `organizacja` WHERE dzial = id_org";
echo("<li> ZADANIE Z FUNKCJI </br> Funkcja: ".$sql);
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
	  zapytanie();
	  
	  
$sql = "SELECT * FROM `pracownicy` , `organizacja` WHERE dzial = id_org";
echo("<li> zad 1 </br> Funkcja: ".$sql);
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

/*===zad2====*/
$sql = "SELECT * FROM `pracownicy` , `organizacja` WHERE dzial = id_org and (dzial=2 OR dzial=3)";
echo("<li> zad 2 </br> Funkcja: ".$sql);
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


/*===zad3====*/
$sql = "SELECT * FROM `pracownicy` , `organizacja` WHERE dzial = id_org and (dzial=1 OR dzial=4)";
echo("<li> zad 3 </br> Funkcja: ".$sql);
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



/*===zad4====*/
$sql = "SELECT * FROM `pracownicy` , `organizacja` WHERE dzial = id_org and (Imie LIKE '%a')";
echo("<li> zad 4 </br> Funkcja: ".$sql);
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
	  
	  
	  
/*===zad5====*/
$sql = "SELECT * FROM `pracownicy` , `organizacja` WHERE dzial = id_org and (Imie NOT LIKE '%a')";
echo("<li> zad 4 </br> Funkcja: ".$sql);
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



$conn->close();
?>
 </body>
</html>
