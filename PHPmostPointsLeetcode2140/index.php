<html></html><!--nur für hot reload-->
<?php
//Leetcode 2140 mostPoints

function mostPoints($matrix,int $i=1,&$cache=[]){// &$cache definiert,das nur die Referenz übergeben wird was effizienter ist.
	
	if($i>=count($matrix)){
		return 0;  //falls der Sprungwert outOfBounds liegt
	}
	
	if(isset($cache[$i])){//gibt sofort den Wert, wenn dieser schon besteht.
		return $cache[$i];//Memoization.
	}
	
	$take=$matrix[$i][0] + mostPoints($matrix,$i+$matrix[$i][1],$cache);
	
	$skip = mostPoints($matrix,$i+1,$cache);
	$cache[$i]=max($take,$skip);  //der größere Wert wird im cache gespeichert
	
	return $cache[$i];
	
}

$matrix=[[3,2],[4,3],[4,4],[2,5]]; 
//$matrix=[[1,1],[2,2],[4,4],[5,5]];

echo mostPoints($matrix);
?>



