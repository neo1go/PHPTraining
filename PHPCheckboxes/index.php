<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="food[]" value="pizza">Pizza<br>
        <input type="checkbox" name="food[]" value="hamburger">Hamburger<br>
        <input type="checkbox" name="food[]" value="hotdog">Hotdog<br>
        <input type="checkbox" name="food[]" value="taco">Taco<br>
        <input type="submit" name="submit">
    </form><!--Checkboxes, die zusammengehören, sollten mit dem gleichen 'name' gekennzeichnet werden. -->
</body>    <!--food[] definiert ein Array mit diesem Bezeichner. Alle gleichen 'name' Elemente sind Teil
               dieses Arrays -->
</html>
<?php

if(isset($_POST["submit"])){

    $foods = $_POST["food"] ?? []; // Falls nichts gesendet wurde, ist es ein leeres Array

    $options = ["pizza", "hamburger", "hotdog", "taco"];

    foreach($options as $food) {
        if (in_array($food, $foods)) {// in_array($einzelwert, $arrayname) sucht nach einzelnem Wert
                                                        // im Array
            echo "You like {$food}. <br>";
        } else {
            echo "You DON'T like {$food}. <br>";
        }
    }
}

?>