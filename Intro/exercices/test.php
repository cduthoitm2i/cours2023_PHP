<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// --- tableau2DTemperatures.php
// --- Previsions des temperatures mini et des maxi a Paris sur 5 jours

header("Content-Type: text/html;charset=UTF-8");

// --- Declarations
$tTemperatures = array(array("Lundi",14,21), array("Mardi",16,23), array("Mercredi",17,25),array("Jeudi",17,27),array("Vendredi",14,20));

//$tTemperatures = array();
// --- Affectations/Remplissage
//$tTemperatures[0][0] = 14;
//$tTemperatures[0][1] = 21;
//
//$tTemperatures[1][0] = 16;
//$tTemperatures[1][1] = 23;
//
//$tTemperatures[2][0] = 17;
//$tTemperatures[2][1] = 25;
//
//$tTemperatures[3][0] = 17;
//$tTemperatures[3][1] = 27;
//
//$tTemperatures[4][0] = 14;
//$tTemperatures[4][1] = 20;

// --- Affichage
// --- $i pour les jours (5), $j pour les périodes (Mini et maxi)
echo "<strong>Températures à Paris cette semaine</strong><br>";
echo "Jour/Mini/Maxi<br>";
for($i = 0; $i < count($tTemperatures); $i++) {
   for($j = 0; $j < 3; $j++) {
      echo $tTemperatures[$i][$j] . "&nbsp;&nbsp;&nbsp;";
   }
   echo "<br>";
}

echo "<hr/>Température maxi mercredi : " . $tTemperatures[2][2];

?>
</body>
</html>