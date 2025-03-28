<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>              <!--htmlspecialchars sollte man nutzen der Sicherheit halber -->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        username:<br>
        <input type="text" name="username">
        <input type="submit">
    </form>
</body>
</html>
<?php


// Die superglobale Variable $_SERVER beinhaltet die header,path und script-location.
// Die Daten dieses associate Arrays werden durch den Webserver erstellt.
// Es ist fast alles enthalten bezüglich des Web-Page environments.

/*
foreach($_SERVER as $key => $value){
        echo"<b>{$key}</b> = <pre>".print_r($value,true)."</pre><br>";//print_r wird hier genutzt, 
                                                                        // um values, die Arrays sind, richtig darzustellen.
}
*/
//Die Abfrage des submits in alten Browsern mit "isset($_POST["submit"]" kann zu Problemen führen,
//da man dies u.U. umgehen kann.
//Besser und verlässlicher ist:
if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo"Es wurde POST genutzt!!";
}

?>