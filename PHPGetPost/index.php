<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>username</label><br>
        <input type="text" name="username"><br>
        <label>password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form>
</body>
</html>
<?php
//$_GET   =      Daten werden in der URL angehangen und sind sichtbar
//               Dies ist NICHT SICHER. Außerdem besteht ein Größenlimit, 
//               das durch den Browser Cache begrenzt wird.
//               Kann als Lesezeichen,das auch Werte enthält, gesetzt werden.
//               Vorteil beim Vor und Zurückspringen durch Seiten wegen der URL-Seitendaten.
//               GET Requests könenn gecached werden. 

//$_POST  =      Daten werden eingepackt innerhalb des Bodys der HHTP-Anfrage.
//               Viel sicherer als GET und es besteht kein Datenlimit.
//               Kann nicht als Lesezeichen gesetzt werden.
//               POST Requests werden nicht gecached.
//               Besser, um vertrauliche Daten zu übermittlen

echo "{$_POST["username"]} <br>";
echo $_POST["password"] . "<br>";   


?>



