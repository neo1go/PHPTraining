<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
     <label>Enter a country</label>
     <input type="text" name="country">
     <input type="submit">
    </form>
</body>
</html>
<?php
// Das associtative Array ist wie eine HashMap, also ein Array mit Key-Value Paaren
// wobei der Key immer einzigartig ist. Wird auch als Hashset genutzt,also quasi
// nur die Keys, um Duplikate oder doppelte Einträge zu erkennen oder zu verhindern.

// keyValue Paare können sein:
// countries => capitals
// id => username
// item => price
//--------------------------------------------
$capitals= array("USA"=>"Washington D.C.",
                 "Japan"=>"Kyoto",
                 "South Korea"=>"Seoul",
                 "India"=>"New Dehli"); 
// durch die => Pfeile wird es zur Hashmap/Dictionary/associate Array
//--------------------------------------------
// $_POST ist eine superglobale Variable und besteht selbst immer aus einem
// associate Array mit key-value Paaren; kann aber auch leer sein. Es speichert die Werte, die per 
// HTTP-POST an das Skript gesendet wurden, in der Regel aus dem Body einer HTTP-Anfrage
// wie z.B. einem HTML-Formular mit method="post". Der body Begriff bezieht sich hier nicht auf den
// html-Bereich sondern die Struktur des Datenpaketes.
$capital=$capitals[$_POST["country"]];
echo "the capital of {$_POST["country"]}  is {$capital}.";

//--------------------------------------------
// Ausgabe, basierend auf dem Key
// echo $capitals["USA"];  
//--------------------------------------------
// Ersetzen eines bestehenden Wertes
// $capitals["USA"]="Las Vegas";
//--------------------------------------------
// Neuen Eintrag hinzufügen
// $capitals["China"]="Bejing";
//--------------------------------------------
// Letzten Wert aus dem Array löschen
// array_pop($capitals);
//--------------------------------------------
// Löschen des ersten Eintrags im Array
// array_shift($capitals);
//--------------------------------------------
// Anzeigen aller Keys im Array mittels Funktion
/*
$keys=array_keys($capitals);  //erstellt ein neues flaches Array

foreach($keys as $key){
  echo "{$key} <br>";
}
*/
//--------------------------------------------
// Anzeigen aller Values eines Associate mittels Funktion
/*
$values= array_values($capitals); //erstellt neues flaches Array
foreach($values as $value){
    echo"{$value} <br>";
}
*/
//--------------------------------------------
// Vertauschen der keys und Values eines Arrays (erzeugt ein neues Associate Array)
// $capitals=array_flip($capitals); //getauscht und zur Demonstration in die selbe Variable gesetzt

//--------------------------------------------
// Hier wird der Array von hinten nach vorne rumgedreht. 
// Die key-value Beziehungen bleiben die Gleichen.
//$capitals=array_reverse($capitals); 
//--------------------------------------------
//Zählt alle Paare
//echo count($capitals);

/*
foreach($capitals as $key => $value){
   echo"{$key} = {$value} <br>";
}
*/
?>