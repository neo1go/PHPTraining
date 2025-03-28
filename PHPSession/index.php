<?php
// session ist eine superglobale Variable, die die Daten eines Users bei Nutzung der Webseite 
// speichert, quasi eine SINGLETON-Instanz, die dann von allen Unterseiten einer Webdomäne 
// weitergenutzt bzw. erkannt werden kann, um z.B. das Einloggen eines Users zu erfassen und an die 
// anderen Webseiten einer Webdomäne weiterzugeben, damit der User nicht jedesmal neu
// angemeldet werden muß. Er erhält eine session ID und wie in dem vorher genannten 
// Beispiel Login-Daten. 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="index.php" method="post">
username:<br>
<input type="text" name="username"><br>
password:<br>
<input type="password" name="password"><br>
<input type="submit" name="login" value="login">
   </form>
</body>
</html>
<?php
//$_SESSION["username"] = "Gordon";
//$_SESSION["password"] = "cool";

//echo "<br>".$_SESSION["username"]."<br>";
//echo $_SESSION["password"];
if(isset($_POST["login"])){
   

    if(!empty($_POST["username"]) && !empty($_POST["password"])){
        $_SESSION["username"]=$_POST["username"];
        $_SESSION["password"]=$_POST["password"];

     //  echo "<br>".$_SESSION["username"]."<br>";
     //  echo $_SESSION["password"];
     header("Location: home.php");
    }
    else{
        echo"Missing username/password<br>";
    }
}



?>