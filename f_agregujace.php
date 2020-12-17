<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Moje Marne Wypociny</title>
  </head>
  <body>
    <h1>Funkcje Agregujace</h1>
    <div>
      <a href="index.php">powrot</a>
    </div>

<?php

require_once("connect.php");
echo "Connected successfully</br>" ;

/*===zad1====*/
$sql = "SELECT SUM(zarobki) FROM pracownicy";
echo("<li> zad 1 </br> Funkcja: ".$sql);
$result = $conn->query($sql);
echo("<table border='1'>");
echo("<tr>");
echo("
				
				<th>łączne zarobki</th>");
echo("</tr>");
  
  while($row = $result->fetch_assoc()) {
			echo("<tr>");    
					
					echo( "<td>".$row['SUM(zarobki)']."</td>" );
			echo("</tr>");
  }
echo("</table>");

/*===zad2====*/
$sql = "SELECT SUM(zarobki) FROM `pracownicy` WHERE Imie LIKE '%a'";
echo("<li> zad 2 </br> Funkcja: ".$sql);
$result = $conn->query($sql);
echo("<table border='1'>");
echo("<tr>");
echo("
				
				<th>łączne zarobki kobiet</th>");
echo("</tr>");
  
  while($row = $result->fetch_assoc()) {
			echo("<tr>");    
					
					echo( "<td>".$row['SUM(zarobki)']."</td>" );
			echo("</tr>");
  }
echo("</table>");
	  
	  
/*===zad3====*/
$sql = "SELECT SUM(zarobki) FROM pracownicy WHERE imie NOT LIKE '%a' and (dzial=3 OR dzial=2)";
echo("<li> zad 3 </br> Funkcja: ".$sql);
$result = $conn->query($sql);
echo("<table border='1'>");
echo("<tr>");
echo("
				
				<th>zarobki mężczyzn z dzialu 2 i 3</th>");
echo("</tr>");
  
  while($row = $result->fetch_assoc()) {
			echo("<tr>");    
					
					echo( "<td>".$row['SUM(zarobki)']."</td>" );
			echo("</tr>");
  }
echo("</table>");
	  
/*===zad4====*/
$sql = "SELECT avg(zarobki) FROM pracownicy WHERE imie NOT LIKE '%a'";
echo("<li> zad 4 </br> Funkcja: ".$sql);
$result = $conn->query($sql);
echo("<table border='1'>");
echo("<tr>");
echo("
				
				<th>średnia zarobków mężczyzn</th>");
echo("</tr>");
  
  while($row = $result->fetch_assoc()) {
			echo("<tr>");    
					
					echo( "<td>".$row['avg(zarobki)']."</td>" );
			echo("</tr>");
  }
echo("</table>");
	  
	  
/*===zad5====*/
$sql = "SELECT avg(zarobki) FROM pracownicy WHERE dzial=4";
echo("<li> zad 5 </br> Funkcja: ".$sql);
$result = $conn->query($sql);
echo("<table border='1'>");
echo("<tr>");
echo("
				
				<th>średnia zarobków w dziale 4</th>");
echo("</tr>");
  
  while($row = $result->fetch_assoc()) {
			echo("<tr>");    
					
					echo( "<td>".$row['avg(zarobki)']."</td>" );
			echo("</tr>");
  }
echo("</table>");
	  
	  
/*===zad6====*/
$sql = "SELECT avg(zarobki) FROM pracownicy WHERE imie not LIKE '%a' and (dzial=1 OR dzial=2)";
echo("<li> zad 6 </br> Funkcja: ".$sql);
$result = $conn->query($sql);
echo("<table border='1'>");
echo("<tr>");
echo("
				
				<th>średnia zarobków mężczyzn w dziale 1 i 2</th>");
echo("</tr>");
  
  while($row = $result->fetch_assoc()) {
			echo("<tr>");    
					
					echo( "<td>".$row['avg(zarobki)']."</td>" );
			echo("</tr>");
  }
echo("</table>");



$conn->close();
	  
	  
/*===zad7====*/
$sql = "SELECT COUNT(imie) FROM pracownicy";
echo("<li> zad 7 </br> Funkcja: ".$sql);
$result = $conn->query($sql);
echo("<table border='1'>");
echo("<tr>");
echo("
				
				<th>ilość pracowników</th>");
echo("</tr>");
  
  while($row = $result->fetch_assoc()) {
			echo("<tr>");    
					
					echo( "<td>".$row['COUNT(imie)']."</td>" );
			echo("</tr>");
  }
echo("</table>");



$conn->close();

?>
  </body>
</html>
