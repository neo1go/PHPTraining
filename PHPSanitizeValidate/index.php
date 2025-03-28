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
        age:<br>
        <input type="text" name="age"><br>
        email:<br>
        <input type="email" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>
<?php

// Dies sind sanitize(säubern,Bereinigung) Optionen, um Eingaben korrekt zu halten. Also keine falschen Zeichen,
// HTML-tags,SQL-Befehle, Scriptbefehle usw.
// Eine Eingabe wird bei diesem Verfahren VERÄNDERT. WICHTIG.
/*
if(isset($_POST["login"])){//falls man $_GET nutzt, natürlich INPUT_GET
    $username=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
    //für Nummern FILTER_SANITIZE_NUMBER_INT wegen z.B. floats usw.
    $age=filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
    
    $email=filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
    echo"Hello {$username}<br>";
    echo"Dein Alter ist {$age} Jahre.<br>";
    echo"Deine Email lautet {$email}";
}
    */

    // Validation (Filterung) lässt nur die korrekten Datentypen und den richtigen Wertebereich 
    // sowie die richtigen Formate(z.B. strings) zu.
    // Beim Validieren wird die Eingabe nie verändert, sondern nur überprüft.
    if(isset($_POST["login"])){
        $age=filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);

        $email=filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);

        if(empty($age)){
            echo"That number wasn't valid.<br>";
        }
        else{
            echo"You are {$age} years old<br>";
        }


        if(empty($email)){
            echo"The Email wasn't valid.<br>";
        }
        else{
                echo"Your Email is {$email} <br>";
            }
        
    }




?>