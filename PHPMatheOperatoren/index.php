<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
<label>x:</label>
<input type="text" name="x"><br>
<label>y:</label>
<input type="text" name="y"><br>
<label>z:</label>
<input type="text" name="z"><br>
<input type="submit" value="total">
    </form>
</body>
</html>
<?php

$x= $_POST["x"];
$y= $_POST["y"];
$z= $_POST["z"];
$total=null;

//$total=abs($x);    //wandelt immer in den gleichen positiven Wert um
//$total=round($x); //normales runden  1,4=1     1,5=2
//$total=floor($x); //abrunden
//$total=ceil($x); //Aufrunden
//$total=sqrt($x);  //Wurzel
//$total=pow($x,$y);  //x hoch y
//$total=max($x,$y,$z);  //höchster Wert wird ermittelt
//$total=min($x,$y,$z);  //kleinster Wert wird ermittelt
//$total=pi();  //pi mit 13 Nachkommastellen
$total=rand(1,100); //Zufallsgenerator
echo $total;
?>