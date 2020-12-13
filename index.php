<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dawid strona</title>
  </head>
  <body>
    <h4>imie nazwisjko gr</h4>
    <h1>tytuł</h1>
    <div>
      <a href="orgprac.php">organizacja i pracownicy</a>
      <a href="f_agregujace.php">f. agreg</a>
      <a href="orgprac.php">data i czas</a>
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

$sql = "SELECT imie, dzial FROM pracownicy, organizacja WHERE dzial = nazwa_dzial";
echo("<li> Zad wprowadzenie: ".$sql);
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


$sql = "SELECT * FROM `pracownicy` , `organizacja` WHERE dzial = id_org";
echo("<li> zad 1".$sql);
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
echo("<li> zad 2 ".$sql);
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
echo("<li> zad 3 ".$sql);
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
echo("<li> zad 4 ".$sql);
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
echo("<li> zad 4 ".$sql);
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
