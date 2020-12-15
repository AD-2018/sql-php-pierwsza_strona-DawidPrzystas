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

$servername = "mysql-dawidxdxdxd.alwaysdata.net" ;
$username = "220777" ;
$password = "turbosecretpassword" ;
$dbname = "dawidxdxdxd_pracownicy" ;

$conn = new mysqli($servername, $username, $password, $dbname) ;

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error) ;
}
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



$conn->close();

?>
  </body>
</html>
