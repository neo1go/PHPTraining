<html></html> <!--nur hinzugefügt, um den Proxy-Server und F(L)ive-Server richtig zu nutzen  -->
<?php
//Das Array ist ein Datentyp, der mehrere Datentypen halten kann.
//(hier sind es z.B. eine Sammlung (collection) von strings)

$foods=array("apple","orange","banana","cocnut");


//echo $foods[0];  //hiermit wird ein gezielter index angesprochen und ausgegeben

//--------------------------
// Diese beiden Funktionen dienen der Funktionalität eines Stacks  LIFO. Dabei ist das Ende des Array
// der oberste Stackeintrag
//array_push($foods,"pineapple","kiwi");//es können mehrere Elemente hinten angehangen werden
//array_pop($foods);  //entfernt den LETZTEN Eintrag aus dem Array.

//--------------------------
//Der nächste Befehl kann als Ersatz für die Queue Funktionalität genutzt werden
// Hier wird der allererste Wert entfernt, also FIFO
//array_shift($foods);  //entfernt den ERSTEN Eintrag aus dem Array

//--------------------------
//$foods=array_reverse($foods); // diese Funktion erstellt ein neues Array,
                                     // deswegen wird hier in einer Variable gespeichert
                                     
//echo count($foods)."<br>";//count zählt alle Elemente in einem Array                                     


//zeigt alle Einträge des Arrays
foreach($foods as $f)
{
    echo"{$f}<br>";
}
?>