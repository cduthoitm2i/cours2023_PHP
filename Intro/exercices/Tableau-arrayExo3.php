<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>TableauExo3.php</h1>
    <!-- étape 1 : addition des chiffres du tableau, puis moyenne de ces chiffres-->
    <!-- on utilise une nouvelle fonction et non les fonctions existantes en PHP, ce serait trop simple !!-->
    <?php
        /* on définit les valeurs de la variable array en ajoutant tous les données séparées d'une virgule*/
        $t = array(20, 10, 50, 40, 30, 90);
        /* on appel la fonction (somme = nom qui correspond à l'algorithme à faire) et on ajoute une nouvelle variable $tableau*/
        function somme($tableau) {
            /* on initialise la variable de la somme à 0 (remise à zéro) */
            $s = 0;
            /* count donne le nombre total d'entrée dans le tableau array */
            /* cela boucle du premier élément au dernier du tableau */
            /* le premier élément du tableau est 1 indice 0 */
            /* soit on commence le compteur à 0, puis on compte tous les données du tableau, puis on incrémente de 1 à chaque passage pour additionner tous les chiffres à chaque passage */
            for($i = 0; $i < count($tableau); $i++) {
                /* Permet d'additionner à chaque boucle (le nombre de passage de la boucle étant déterminé par le nombre de valeur de array) */
                $s += $tableau[$i];
            }
            /* Ensuite, on retourne la valeur de la somme total (fin de la boucle) */
            return $s;
            /* On appel ligne 70 la fonction somme pour traiter la variable $t (qui contient toutes les données (array))*/
        }
        /* on utilise la précédente fonction qui permet d'additionner tous les chiffres et on récupère donc la valeur de la fonction précédente */
        function moyenne($tableau) {
            /* on utilise une fonction toute faite count défini dans la fonction précédente qui est obligatoire pour compter le nombre de valeur total de $tableau*/
            return somme($tableau) / count($tableau);           
        }
        /* on récupère la valeur de la fonction précédente */
        function minval($tableau) {
            $minValeur= $tableau[0];
            for($i = 1; $i < count($tableau); $i++) {
                /* si l'élément courant est inférieur à maxValeur, alors on affecte au maxValeur la valeur de l'élément  courant*/
                if ($tableau[$i] < $minValeur) {
                    $minValeur = $tableau[$i];
                }
            }
            return $minValeur;
        }
        /* on duplique la fonction précédente et on modifie les noms des variables et on inverse le calcul (signe >) */
        function maxval($tableau) {
            $maxValeur= $tableau[0];
            for($i = 1; $i < count($tableau); $i++) {
                /* $valeurCouranteDansLeTableau = $tableau[$i]*/
                /* si l'élément courant est supérieur à maxValeur, alors on affecte au maxValeur la valeur de l'élément  courant*/
                if ($tableau[$i] > $maxValeur) {
                    $maxValeur = $tableau[$i];
                    /* $maxValeur = $valeurCouranteDansLeTableau; */
                }
            }
            return $maxValeur;
        }



        /*
        main
        */

        echo "La somme des nombres est égal à&nbsp;: ";
        /* on récupère la function somme que l'on passe sur $t */
        echo somme($t);
        echo "<br/>";
        echo "La moyenne des nombres est égal à&nbsp;: ";
        echo moyenne($t);
        echo "<br/>";
        echo "Le plus petit nombre est&nbsp;: ";
        echo minval($t);
        echo "<br/>";
        echo "Le plus grand nombre est&nbsp;: ";
        echo maxval($t);
        echo "<br/>";
    ?>



</body>
</html>