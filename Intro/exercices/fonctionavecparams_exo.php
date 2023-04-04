<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction avec 2 paramètres</title>
</head>
<body>
<?php

// Fonction avec 2 paramètres
/**
 *
 * on documente, le nom de la function avec la première lette en bas de casse et le mot suivant en cap pour la première lettre 
 * @param type $a
 * @param type $b
 * @return type
 */
function addition($a, $b) {
    return $a + $b;
}

/**
 * On crée une fonction pour faire une soustraction
 * @param type $a
 * @param type $b
 * @return type
 */
function soustraction($a, $b) {
    return $a - $b;
}

/**
 * On crée une fonction pour faire une multiplication
 * @param type $a
 * @param type $b
 * @return type
 */
function multiplication($a, $b) {
    return $a * $b;
}

/**
 * On crée une fonction pour faire une division
 * @param type $a
 * @param type $b
 * @return type
 */
function division($a, $b) {
    $r = "";
    if ($b == 0) {
        $r = "Impossible";
    } else {
        $r = $a / $b;
    }
    return $r;
}


/*
 * MAIN
 */
$x=2;
$y=4;
$result = addition(2, 4);
echo "Le résultat de l'addition de $x + $y est égal à&nbsp;: ";
echo $result;
echo "<br>";

$x=10;
$y=5;
$result = soustraction(10, 5);
echo "Le résultat de la soustraction de $x - $y est égal à&nbsp;: ";
echo $result;
echo "<br>";

$x=10;
$y=4;
$result = multiplication(10, 4);
echo "Le résultat de la multiplication de $x &times; $y est égal à&nbsp;: ";
echo $result;
echo "<br>";

$x=20;
$y=0;
$result = division($x, $y);
echo "Le résultat de la division de $x / $y est égal à&nbsp;: ";
echo $result;



echo "<br>Addition de $x et $y : $r";

echo "<br>Soustraction de $x et $y : " . soustraction($x, $y);

echo "<br>Multiplication de $x et $y : " . multiplication($x, $y);

echo "<br>Division de $x et $y : " . division($x, $y);
?>


</body>
</html>