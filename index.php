<?php

$servername = "mysql-dawidxdxdxd.alwaysdata.net" ;
$username = "220777" ;
$password = "turbosecretpassword" ;
$dbname = "dawidxdxdxd_pracownicy" ;

$conn = new mysqli($servername, $username, $password, $dbname) ;

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error) ;
}
echo "Connected successfully" ;

$sql = "SELECT * FROM pracownicy";
$result = $conn->query($sql);


echo("<table border='1'>");
echo("<tr>");
echo('
				<th>id</th>
				<th>Imie</th>
				<th>zarobki</th>
				<th>nazwa dzialu</th>');
echo("</tr>");
  
  while($row = $result->fetch_assoc()) {
			echo("<tr>");    
					echo( "<td>".$row['id']."</td>" );
					echo( "<td>".$row['imie']."</td>" );
					echo( "<td>".$row['nazwa_dzial']."</td>" );
					echo( "<td>".$row['zarobki']."</td>" );
			echo("</tr>");
  }
echo("</table>");
$conn->close();

$conn->close();
?>
