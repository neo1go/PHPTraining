<?php
session_start();  //unter Port 3002 funktioniert es
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Das ist die Homepage selbst.<br>
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>
<?php

//echo "<br>".$_SESSION["username"]."<br>";
//echo $_SESSION["password"];
if(isset($_POST["logout"])){
    header("Location: index.php");  //Location nicht vergessen!!!! für den re-direct.
}

?>