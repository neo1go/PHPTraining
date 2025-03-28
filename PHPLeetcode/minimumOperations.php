<html></html> <!--nur für den Live-Server -->
<?php
function minimumOperations($grid, $x) {
    $elements = array();
    $remainder = null;
    foreach ($grid as $row) {
        foreach ($row as $num) {
            $elements[] = $num;  //flaches Array erstellen
            
            // hiermit wird der mod-Rest bestimmt. 
            // Sobald diese nicht übereinstimmen, können sich die Faktoren 
            // niemals treffen.
            $current_remainder = $num % $x; //hier wird der RestMod bestimmt
            //Bspl.: [2,2,5] $x=3,somit 2%3=2 5%2=2 Diese Aufgabe ist lösbar (8)
            if ($remainder === null) {
                $remainder = $current_remainder;
            } elseif ($current_remainder != $remainder) {
                return -1;
            }
        }
    }
    
    $k_values = array(); //relative Verschiebung jeder Zahl wird hier gespeichert
    foreach ($elements as $num) {
        $k_values[] = ($num - $remainder) / $x;//ergibt [1,2,3,4] also wie oft $x hineinpasst in den Wert
        //(2-0)/2=1
        //(4-0)/2=2  dies ist nachher der median aller Faktoren (mit floor)
        //(6-0)/2=3
        //(8-0)/2=4
    }
    
    sort($k_values);
    $n = count($k_values);
    $median = $k_values[floor(($n - 1) / 2)]; //ein median ist ein mittlerer 
                                              //Wert einer sortierten Liste.
    //floor((4-1)/2)= 1 ist der Index der ermittelt wird von values. Der Wert ist 2 an Stelle 1
    //Der median von $k_values[] an Stelle 1 ist der Wert 2
    $total_ops = 0;
    foreach ($k_values as $k) {
        $total_ops += abs($k - $median);//Dies ist ein Trick, um sowohl die
                                        //positiven als auch die negativen Schritte zu zählen
                                        
         //k   median   Differenz    Schritte     Kumulierte Schritte
         //1     2    Faktor1-2        =1              1 
         //2     2    Faktor2-2        =0              1
         //3     2    Faktor3-2        =1              2
         //4     2    Faktor4-2        =2              4
    }
    
    return $total_ops;
}

$grid = [[2,4],[6,8]];
//$grid=[[2,6],[50,150,1500,5000]];
$x = 2;
echo minimumOperations($grid, $x); 

?>



