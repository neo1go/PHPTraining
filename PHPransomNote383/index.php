<html></html> <!-- nur für Live Server -->
<?php
//Leetcode 383
class Solution{

function ransomNote( $ransomNote,$magazine)
{
$letterCounter=[];  //AA für Nutzung

for($i=0;$i<strlen($magazine);$i++)
{
	$ch=$magazine[$i]; //einzelner Char wird in $ch gepspeichert
	if(ctype_alpha($ch)){  //nur Buchstaben zählen,wenn es ein Buchstabe ist
		if(!isset($letterCounter[$ch]))
		{
			$letterCounter[$ch]=1;
		}
		else
		{
			$letterCounter[$ch]++;
		}
	}
}

foreach (str_split($ransomNote) as $ch) {
        if (!isset($letterCounter[$ch]) || $letterCounter[$ch] === 0) {
            return false; // Buchstabe nicht vorhanden oder aufgebraucht
        }
        $letterCounter[$ch]--;
    }

return true;
}
}

$rN = new Solution();
$ransomNote="aa"; 
$magazine="aab";
$result= $rN -> ransomNote($ransomNote,$magazine);
echo $result ? 'true' : 'false';
?>