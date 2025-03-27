<html></html><!--dient nur dem Server zur Erkennung -->
<?php
// Superglobale Variablen, die assoziative Arrays sind:
// $_GET → Enthält Key-Value-Paare aus der URL (?key=value).

// $_POST → Enthält Key-Value-Paare von HTTP-POST-Daten.

// $_COOKIE → Enthält Key-Value-Paare von Cookies. Kann gesetzt werden.

// $_FILES → Enthält Informationen zu hochgeladenen Dateien als verschachteltes assoziatives Array.

// $_REQUEST → Kombination aus $_GET, $_POST und $_COOKIE (wenn request_order nicht verändert wurde).

// $_SERVER → Enthält Server- und Umgebungsvariablen als Key-Value-Paare.

// $_ENV → Enthält Umgebungsvariablen als Key-Value-Paare.

// $_SESSION → Speichert Sitzungsdaten als Key-Value-Paare. Wird genutzt, um bei einer Webdomäne
// auf jeder Seite die Daten eines Nutzers bereitzustellen. Funktioniert wie ein Singleton.
// Solange der User auf den Seiten eingeloggt bleibt, bleibt dieser Datensatz bestehen. Es muß auch jede der Seiten,
// die die Userdaten nutzen möchte, $_SESSION start() am Kopf des php Skriptes eingetragen haben.

// ❌ Superglobale Variablen, die KEINE assoziativen Arrays sind:
// $GLOBALS → Ist zwar ein Array, aber speichert alle globalen Variablen (nicht nur Key-Value-Paare).

// $_SERVER['argc'] → Enthält die Anzahl der Kommandozeilenargumente (Ganzzahl).

// $_SERVER['argv'] → Enthält ein Array mit den Kommandozeilenargumenten, aber nicht als Key-Value-Paar, sondern als numerisches Array.



?>