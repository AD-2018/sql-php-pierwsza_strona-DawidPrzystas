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


 while($row = $result->fetch_assoc()) {
	echo " imie: " . $row["imie"]. " zarobki: " . $row["zarobki"]. "<br>";
 }

$conn->close();
?>
