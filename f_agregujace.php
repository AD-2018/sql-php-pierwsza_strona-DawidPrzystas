<?php

echo("jest w pliku f.agregujace");


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
echo("<li> zad 1 ".$sql);
$result = $conn->query($sql);
echo("<table border='1'>");
echo("<tr>");
echo("
				
				<th>SUM(zarobki)</th>");
echo("</tr>");
  
  while($row = $result->fetch_assoc()) {
			echo("<tr>");    
					echo( "<td>".$row['id_pracownicy']."</td>" );
					echo( "<td>".$row['imie']."</td>" );
					echo( "<td>".$row['nazwa_dzial']."</td>" );
					echo( "<td>".$row['SUM(zarobki)']."</td>" );
			echo("</tr>");
  }
echo("</table>");



$conn->close();

?>
