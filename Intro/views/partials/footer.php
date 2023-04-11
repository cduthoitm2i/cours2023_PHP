&copy; PB & co - 
<?php

$tMois = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");

$jour = Date("d");
$mois = $tMois[Date("m") - 1];
$annee = Date("Y");

echo "Aujourd'hui nous sommes le $jour $mois $annee";

//echo "<br>";

//setlocale(LC_TIME, 'fr_FR');
//date_default_timezone_set('Europe/Paris');
//echo utf8_encode(strftime('%A %d %B %Y, %H:%M'));
?>