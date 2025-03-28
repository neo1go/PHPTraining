<?php
        //include kopiert den Inhalt einer Datei und fügt es in den gewünschten PHP Code ein.
        //So können Sektionen einer Webseite wiederverwendbar werden. Man braucht nur an einer Stelle
        //den Code verändern. Beispiele sind header,footer,about(Impressum) usw.

include("header.html");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Das ist meine Homepage.<br>
    Themen meiner Homepage werden hier eingetragen.<br>
</body>
</html>
<?php
include("footer.html");
?>