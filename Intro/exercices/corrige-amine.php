<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Fonction table boucle For PHP -->
 
    <?php
    // Création de la fonction nommée createTable qui a 2 parametres : un pour le tableau $array, et pour le texte de l'entete $entete (string)
    function createTable(array $array, string $entete): string
    {
        //Création de l'entête de la table HTML : L'élément HTML <thead> définit un ensemble de lignes qui définit l'en-tête des colonnes d'un tableau.
        $table = "<table border='1'>
                    <thead>
                        <tr>
                            <th>$entete</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
 
        // Création de la boucle For qui boucle sur le tableau nommé $array du début jusqu'à la fin, de 0 à count()-1
        // Pour produire les lignes TR de la table HTML qui n'ont qu'une seule cellule (td)
        for ($i = 0; $i < count($array); $i++) {
            $table .= "<tr><td>$array[$i]</td></tr>";
        }
        $table .= "</tbody></table>";
        return $table;
    }
    // Appel de la fonction précédente avec echo
    echo createTable($mois, "Month");
    echo "<hr>";
    echo createTable($jours, "Day");
 
    ?>

 
    <hr>
</body>
</html>