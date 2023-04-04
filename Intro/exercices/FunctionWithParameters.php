<?php

// Fonction avec 2 paramètres
/**
 *
 * @param type $a
 * @param type $b
 * @return type
 */
function addition($a, $b) {
    return $a + $b;
}

function soustraction($a, $b) {
    return $a - $b;
}

function multiplication($a, $b) {
    return $a * $b;
}

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
 * Créez les fonctions soustraction, multiplication et division ... et les tester OGF COURSE
 */

/*
 * MAIN
 */
$x = 2;
$y = 0;
$r = addition($x, $y);
echo "<br>Addition de $x et $y : $r";

echo "<br>Soustraction de $x et $y : " . soustraction($x, $y);

echo "<br>Multiplication de $x et $y : " . multiplication($x, $y);

echo "<br>Division de $x et $y : " . division($x, $y);
?>