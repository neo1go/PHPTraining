<html></html><!--nur für den Server -->
<?php
// isset() gibt true zurück, wenn eine Variable gesetzt ist und nicht NULL ist.
// empty() gibt true zurück, wenn die Variable nicht deklariert wurde, false , NULL oder "" ist.
//______________________________________________________________
//Bei diesen Werten ist isset() = true. Der Wert muß nur gesetzt sein in irgendeiner Form.
//$username=true;
//$username=false;
//$username="";
//$username="strings and chars or ints, basically any value";

//Im Gegensatz zu empty() gilt bei isset() auch ein leerer String als gesetzter Wert.                         
// if(isset($username)){
//     echo"Die Variable wurde gesetzt.";
//     }else{
//         echo"Die Variable wurde nicht gesetzt.";
//     }



//______________________________________________________________
// Diese Defintionen erzeugen bei empty() ein true
// $username;
// $username="";
// $username=null;
// gar keine Variable an der Stelle des Bezeichners gibt auch true zurück.

//echo empty($username);  // 1 ist true,also leer. Bei bestehenden Werten ist die Antwort false 
                        // und wird gar nicht erst angezeigt.

if(empty($username)){
        echo"Die Variable ist leer.";
        }else{
            echo"Die Variable ist voll bzw. gesetzt.";
        }


?>