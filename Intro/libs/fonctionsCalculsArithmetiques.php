<?php

/* 
 * fonctionsCalculsArithmetiques.php
 * C'est un bibliothèque
 */

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

?>
