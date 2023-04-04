<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau array mois</title>
</head>
<body>
<h3>Génération d'un menu select mois en PHP avec correspondance numéro -> nom mois</h3>


<form action="" method="get">
    <select name='mois'>

    <?php
        /**
         * on crée un array contenant toutes les informations du tableau array (mois de janvier à décembre)
         * Attention, le tableau commence à 0 (Janvier) et à 11 (Décembre)
         */
        $tMois = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
        var_dump($tMois);
        /**
         * value = $i pour avoir la valeur dans l'url du navigateur
         * $Mois[$i] (inième valeur du tableau) c'est tous les mois de mon tableau
         * et faudrait même faire $i + 1 dans value car le mois 0 ça n'existe pas

        */
        /**
         * On a deux variables, $i (compteur) et $tMois (array listant tous les mois)
         * on peut donc afficher le résultat de manière indépendante pour l'url
         * Soit par exemple, si on sélectionne le mois de janvier, dans l'url nous allons avoir : 
         * http://localhost:3000/Intro/exercices/tableau-array-mois.php?mois=0
         * O correspond à la première valeur du tableau qui est 0 (= janvier)
         * si on sélectionne juin, on aura :
         * http://localhost:3000/Intro/exercices/tableau-array-mois.php?mois=5
         * 5 correspond à la colonne 6 du tableau array (= mois de juin)
         */

        for ($i = 0; $i < count($tMois); $i++) {
            echo "<option value='".($i)."'>" . $tMois[$i] . "</option>";

        }
        
?>


 </select>
    <input type="submit" value="Envoyer"></input></form>
</body>
</html>