<html></html><!--nur für Five Server -->
<?php 
//durch hashing werden Passwörter in Buchstaben, Nummer n und/oder Symbole umgewandelt mittels
//eines mathematischen Prozesses. Dadurch werden die Daten vor Dritten verborgen.

$password = 'pizza123';
echo $password."<br>";
//dies wird genutzt, um z.B. die $hash Variable in einer Datenbank zu speichern.
$hash= password_hash($password,PASSWORD_DEFAULT);//Der Algorithmus ist eine Kosntante. Seit PHP 5.5 wird als default bcrypt genutzt.

if(password_verify("pizza222",$hash)){
echo "Passwort ist richtig";
}
else{
    echo "Passwort ist falsch.";
}


?>