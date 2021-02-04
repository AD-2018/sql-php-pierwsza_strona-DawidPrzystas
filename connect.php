<?php

$servername = "mysql-dawidxdxdxdxdxd.alwaysdata.net" ;
$username = "225863" ;
$password = "turbosecretpassword" ;
$dbname = "dawidxdxdxd_pracownicy" ;

$conn = new mysqli($servername, $username, $password, $dbname) ;

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error) ;
}
echo "Connected successfully</br>" ;

?>
