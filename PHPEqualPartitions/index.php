<html>

</html> <!--nur für Five Server -->
<?php
//Leetcode 416
//Können 2 Partitionen mit gleicher Größe erzeugt werden? 
class Solution
{

    function equalPartitions(array $nums): bool
    {
        $sum = array_sum($nums);
        if ($sum % 2 != 0) {
            return false;
        }
        //wenn also das Array teilbar ist, kann man zumindest theoretisch
        //in zwei gleiche Hälften teilen.
        $partitionValue = $sum / 2; //Summe einer Partitionshälfte

        //Hier wird ein Array mit false flags angelegt, mit der Länge der Partition+1
        $dp = array_fill(0, $partitionValue + 1, false); //dynamic programming.
        $dp[0] = true;//Der erste Eintrag ist true, weil die Summe immer mit einer
        //leeren Menge,also 0, erreicht werden kann.(basecase)

        foreach ($nums as $n) {
            for ($i = $partitionValue; $i >= $n; $i--)//Rückwärts iterieren und eintragen in $dp
            {
                $dp[$i] = $dp[$i] || $dp[$i - $n];  //2 Möglichkeiten, dp auf true zu setzen.
            }                                //Entweder ist schon true, oder $i-$n muß auf index[0] treffen was dann auch true ergibt.
            //andernfalls bleibt es false.
        }  //die zweite Hälfte verweist immer auf Indexe und vergleicht , ob diese schon eventuell true sind.
        return $dp[$partitionValue];//wenn also die flag an der Indexstelle im $dp Array true ist.

        //----------------------------------------------------------------
        //Grundsätzliche Logik für diese Aufgabe:
        // Es werden in $dp alle möglichen Teilmengen-Summen mit true markiert. Die Indizes sind dabei die möglichen Summen.
        // Es muß dann rückwärts vom größten Wert (der Größe der Partition als Wert) iteriert werden und es werden die flags gesetzt.
        // bei vorwärts Iteration könnte es zur Überschreibung, und möglichen Falschsetzung, des bools kommen.
        // Wenn der Index und der Wert der Partition übereinstimmen, kann man diese Partition ertstellen.

        // WICHTIG für das Verständnis der Aufgabe. Es muß nur der Partitonswert ein einziges Mal in der Berechnung getroffen werden bei den Möglichkeiten,
        // um als lösbar zu gelten. WICHTIG -> Also wenn wir [1,5,11,5] haben (22 als Summe) und 11 der Wert ist, dann muß nur einmal irgendeine Kombination
        // die 11 ergeben, da dann die andere Hälfte auch automatisch 11 ergibt.(es wurde ja vorher schon auf Teilbarkeit geprüft).
    }

    //---------------------------------------------------------------------
    //Diese 2te Variante setzt alle Werte in ein Array, macht sie dann einzigartig und fragt dann einfach ab,
    //ob es eine passende Teilmenge gibt mittels der Funktion 'in_array()'.
    function equalPartitionsII(array $nums): bool
    {
        $sum = array_sum($nums);
        if ($sum % 2 != 0)
            return false;
        $target = $sum / 2;

        $possibleSums = [0]; // Starte mit der leeren Menge (Summe 0). Hier werden alle möglichen Summen gespeichert.

        foreach ($nums as $num) {
            foreach ($possibleSums as $s) {//startet mit 0 und addiert stetig und fügt so bei jeder Iteration einen
                //neue potentielle Summe hinzu in das Array possibleSums.
                $newSum = $s + $num;
                if ($newSum == $target)
                    return true;
                $possibleSums[] = $newSum;
            }
            $possibleSums = array_unique($possibleSums); // Entferne Duplikate(hier nicht wirklich notwendig)
        }

        return in_array($target, $possibleSums);
    }
}

$eqP = new Solution();
$nums = [1, 2, 3, 4, 5, 6, 7];
// $result= $eqP -> equalPartitions($nums);
$result = $eqP->equalPartitionsII($nums);
echo $result ? 'true' : 'false';

?>