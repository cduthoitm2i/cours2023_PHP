<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $t = array();

    $t[] = "Un";
    $t[] = "Deux";
    $t[] = "Trois";
    /* On présente le code avec la balise <pre> </pre> */
    echo "<pre>";
    var_dump($t);
    echo "</pre>";

    /* on met bien < car le tableau commence à 0 et non <= */
    for($i = 0; $i < count($t); $i++) {
        echo "$t[$i]<br>";
    }
    /* on sélectionne la colonne trois (2 en array) donc on affiche Trois */
    /* Si on ajoute un nombre trop petit ou trop important, on a une erreur Undefined array ce qui est logique puisque n'existe pas*/
    echo "<br><br>" .$t[2];

?>
</body>
</html>