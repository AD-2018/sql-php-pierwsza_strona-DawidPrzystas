

<?php

echo("jest w pliku f.agregujace</br>");


$servername = "mysql-dawidxdxdxd.alwaysdata.net" ;
$username = "220777" ;
$password = "turbosecretpassword" ;
$dbname = "dawidxdxdxd_pracownicy" ;

$conn = new mysqli($servername, $username, $password, $dbname) ;

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error) ;
}
echo "Connected successfully</br>" ;

<div>
      <a href="index.php">powrót</a>
	
</div>


/*===zad1====*/
$sql = "SELECT SUM(zarobki) FROM pracownicy";
echo("<li> zad 1 </br>".$sql);
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
echo("<li> zad 2 </br>".$sql);
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
