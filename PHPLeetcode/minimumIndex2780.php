<html></html><!--nur für Servererkennung -->
<?php
// Leetcode 2780
// ein Elemnt x ist dominant, wenn mehr als die Hälfte eines Arrays aus diesen Einträgen bestehen.
// Das Array soll geteilt werden, ohne das eine der Teile leer ist.
// Beide Teile sollen die gleiche Werteanzahl besitzen, man muß aber die dominante Zahl für beide Seiten
// ermitteln. Außerdem muß links bzw rechts mindestens ein Wert stehen, also beide Seiten müßen Werte
// enthalten.
// Falls die Bedingungen nicht erfüllt werden, soll -1 zurückgegeben werden.
//Das Problem ist, das der dominante Wert ermittelt werden muß, der als Grundlage genommen werden soll.
// In einem Array [2,1,3,1,1,1,7,1,2,1] ist wohl 1 am Meisten vertreten, also dominant. Diese Dominanz
// muß aber für beide Seiten seperat gelten.
// Nun muß man herausfinden, wann links gleich oder mehr 1 stehen als rechts. Dies ist nach Index 4 der Fall.
// Anzahl ist hier 3x1 -> [2,1,3,1,1]  [1,7,1,2,1] <- Anzahl ist hier 3x1.

 function minimumIndex($nums){
    $result=-1;
    $values=array_count_values($nums);//Zählt jedes Aufkommen einer Zahl
    $dominantAmount=max($values); //höchste Häufigkeit des dominantesten Werts
    $dominantKey= array_keys($values,max($values))[0];//Wert des keys mit den meisten Einträgen
    $counter=0;
   
  for($i=0;$i<count($nums)-1;$i++){
        if($nums[$i]==$dominantKey){  //hier wird der counter erhöht wenn der dominante Wert erkannt wird
            $counter++;  //Aufkommen der Zahl auf der linken Seite
        }

        $leftDominant = $counter > (($i + 1) / 2); //ermittelter Wert für die Dominanz auf der linken Seite
        $rightSlice = array_slice($nums, $i + 1);//rechte Hälfte  
        $rightDominant = count(array_filter($rightSlice, fn($x) => $x == $dominantKey)) > (count($rightSlice) / 2);
        if($leftDominant && $rightDominant){ //wenn links und rechts true sind
            $result=$i;
            break;
        }    
  }
return $result;
 }

//$nums=[1,2,2,2];
$nums=[2,1,3,1,1,1,7,1,2,1];
//$nums=[3,3,3,3,7,2,2];

echo minimumIndex($nums);
?>