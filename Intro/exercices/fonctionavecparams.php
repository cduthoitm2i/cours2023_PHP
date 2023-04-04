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

/*
 * MAIN
 */
$r = addition(2, 4);
echo $r;
?>
</body>
</html>