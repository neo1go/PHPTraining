<?php
$db_server="localhost"; //Servername
$db_user="root";
$db_pass="";
$db_name="businessDB";
$conn="";


try
{
//die aktuelle Verbindung als Objekt in der Variable $conn
$conn=mysqli_connect($db_server, $db_user, $db_pass, $db_name);
}
catch(mysqli_sql_exception) {
    echo "Vebindung fehlgeschlagen.<br>";
}


if($conn)
{
    echo "Du bist mit der Datenbank verbunden.<br>";
}

//Beipspiel für einen Insert

$sql="INSERT INTO users (user, password)
      VALUES ('Spongebob','pizza123')";

try
{
//führt den Query (Abfrage) aus. Ist sicherer als die alte Version.
mysqli_execute_query($conn,$sql);
echo"User registered.";
}
catch(mysqli_sql_exception)
{
echo"Could not register User.";
}
//---------------------------------------------------
//Anderes Beispiel:
// Mehrere Zeilen aus einer DB abfragen.
$sql="SELECT * FROM users";

//Object:
$result = mysqli_execute_query($conn,$sql);


//Wenn Daten vorhanden,dann 
if(mysqli_num_rows($result)>0)
{
    //hier wird der Query als AA(dict) gespeichert in $row.
   while($row=mysqli_fetch_assoc(($result))){
    echo $row["id"]."<br>"; //gibt hier den Key(id) an von user.
    echo $row["user"]."<br>";
   }
}
else
{
    echo"No data found.";
}


//Schliesst die Verbindung
mysqli_close($conn);
?>