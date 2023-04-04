<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction sans paramètre</title>
</head>
<body>
<?php

// Fonction sans paramètre

/**
 * on documente, le nom de la function avec la première lette en bas de casse et le mot suivant en cap pour la première lettre
 * @return type
 */
function dateHeure() {
    return "Nous sommes le " . Date('d/m/Y') . " et il est " . Date('H:i:s');
}

/*
 * MAIN
 */
$result = dateHeure();
echo $result;
?>
</body>
</html>