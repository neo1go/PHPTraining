<?php
// Cookie: (gespeichertes Nutzerverhalten).
// Nutzerinformationen werden darin gespeichert, damit der Webbrowser darauf basierende Werbung,
// Preferenzen(z.B. Einstellungen für bestimmte Websites) und andere nicht-sensitive Daten 
// bereitstellen oder auslesen kann.


//Diese cookie Daten werden immer als AA gespeichert.
    //          key        value  Lebensdauer in sek.   (1 Tag = 86400 sek)  "/" default-filepath ist
    //                                                                        der Gültigkeitsbereich für den cookie
    setcookie("fav_food","pizza",time()-0,"/");  
    setcookie("fav_drink","coffee",time()+(86400*3),"/");  
    setcookie("fav_dessert","ice cream",time()+(86400*2),"/");  
    // -0 entfernt einen cookie

    //$_COOKIE ist eine superglobale Variable
    foreach($_COOKIE as $key => $value){
        echo "{$key} = {$value}<br>";  
    }

    if(isset($_COOKIE["fav_food"])){
        echo"Buy some {$_COOKIE["fav_food"]}";
    }else{
        echo"I don't know your favourite food (no cookie).";
    }
?>