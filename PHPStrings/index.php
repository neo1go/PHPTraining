<html></html><!--nur zur Nutzung des L(F)ive-Servers -->
<?php       
    $username="Gordon H the Third";
    
    $phone="123-456-7890";
    //$username=strtolower($username);  //alles klein schreiben
    //$username=strtoupper($username); //alles groß schreiben
    //$username=trim($username);//schneidet alle Leerstrings vor oder nach dem String ab.
    //$username=str_pad($username,25,"0"); //Achtung, Leerzeichen die in einem String
                    // mit angegeben werden, gelten auch als Zeichen und verhindern u.U. das Setzen dieser Füllwerte.
    //$phone=str_replace("-","",$phone);//Zeichen,das ersetzt werden soll, dann das Zeichen
            //das eingesetzt wird und zuletzt der Usrprungsstring, der hier in der selben Variable gespeichert wird.
    //$username=strrev($username); //dreht den ganzen String um
    //$username=str_shuffle($username);//Randomizer für die einzelnen chars
    //$result=strcmp($username,$phone);//   gleich bedeutet 0,    verschieden bedeutet 1 oder -1 .
    //$username=strlen($username);//Zählt die Länge des Strings, auch Leerzeichen.
    //$index= strpos($username,"n"); //string fängt bei 0 an.

    //$firstname=substr($username,0,6);
    //$lastname=substr($username,6,2);//fängt vor dem Buchstaben an. Somit sind es 2 Zeichen.
    
    //Hier wird ein neues Array erstellt:
    //$fullname=explode(" ",$username);//Nimmt den string am Seperator auseinander und erstellt ein neues Array

    //Hier wird aus einem Array wieder ein einzelner String gemacht.

    $user1 = array("Gordon","H","the","Third");
    $user1=implode(" ",$user1); //macht aus einem Array wieder einen zusammengefügten String

    echo $user1;
    /*
    foreach($fullname as $f){
        echo $f."<br>";
    }
*/
    //echo $index;
    //echo $phone;
    //echo $username ;
    //echo $result ;
    //echo $lastname;
    //echo $firstname.$lastname;
?>