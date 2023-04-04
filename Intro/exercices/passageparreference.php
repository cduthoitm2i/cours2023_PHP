<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passage par référence</title>
</head>
<body>
<?php

/*
 * PermutationEtReferences.php
 */

/**
 * 
 * @param type $a
 * @param type $b
 */
function permutation(&$x, &$y) {
    $inter = $x;
    $x = $y;
    $y = $inter;
}

/*
 * MAIN
 */
$a = "Un";
$b = "Deux";
echo "<br><b>Avant</b>";
echo "<br>a : $a";
echo "<br>b : $b";
permutation($a, $b);
echo "<br><b>Après</b>";
echo "<br>a : $a";
echo "<br>b : $b";
?>
</body>
</html>