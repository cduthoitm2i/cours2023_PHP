<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau array mois</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 20%;
        border-width: 1px;
        border-style: solid;
        border-color: black;
    }

    td {
        border-width: 1px;
        border-style: solid;
        border-color: black;
    }

    .head {
        text-align: center;
        border: 1px solid black;
        background-color: silver;
        font-weight: bold;
    }
</style>

<body>
    <h3>Génération d'un menu select mois en PHP avec correspondance numéro -> nom mois</h3>


    <form action="" method="get">
        <select name='mois'>

            <?php
            /*
         * on crée un array contenant toutes les informations du tableau array (mois de janvier à décembre)
         * Attention, le tableau commence à 0 (Janvier) et à 11 (Décembre)
         */
            $tMois = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
            /*
         * cette commande permet d'afficher la totalité des données dans F12 du navigateur
         */
            var_dump($tMois);

            /*
         * value = $i pour avoir la valeur dans l'url du navigateur
         * $Mois[$i] (inième valeur du tableau) c'est tous les mois de mon tableau
         * et faudrait même faire $i + 1 dans value car le mois 0 ça n'existe pas

        */
            /*
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
                /* écriture simplifié pour mélanger string, cote et variable, modèle à prendre, semble bien fonctionner dans la majorité des cas */
                echo "<option value='$i'>$tMois[$i]</option>";
            }
            ?>
        </select>
        <input type="submit" value="Envoyer"></input>
    </form>

    <br>
    <h3>Génération d'une liste avec une boucle php dans une balise HTML à partir d'un array (sans une fonction)</h3>
    <ul>
        <?php
        $tMois = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
        for ($i = 0; $i < count($tMois); $i++) {
            echo "<li>$tMois[$i]</li>";
        }
        ?>
    </ul>
    <br>
    <h3>Génération d'un tableau une colonne dans une balise HTML avec une boucle php à partir d'un array (sans une fonction)</h3>
    <table border="1">
        <thead>
            <tr class="head">
                <td>Mois</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $tMois = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
            $tJour = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
            for ($i = 0; $i < count($tMois); $i++) {
                echo "<tr><td>$tMois[$i]</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <br><br><br><br><br>
    <h3>Génération d'une liste avec une boucle php à partir d'un array <em>(avec une fonction)</em></h3>
    <?php
    /**
     * Function pour créer une liste ul>li et en utilisant les informations de $tMois
     */
    /* on n'utilise pas la variable de $tMois mais $t à la place */
    function createUlLI(array $t): string
    {
        $list = "<ul>";
        for ($i = 0; $i < count($t); $i++) {
            $list .= "<li>$t[$i]</li>\n";
        }
        $list .= "</ul>";
        return $list;
    }
    ?>
    <?php
    echo createUlLI($tMois);
    echo createUlLI($tJour);
    ?>

    <br><br>

    <h3>Génération d'un tableau une colonne avec une boucle php à partir d'un array <em>(avec une fonction)</em></h3>
    <?php
    /**
     * Function pour créer un tableau sur une colonne et en utilisant les informations de $tMois
     */
    function createTable(array $t): string
    {
        /* J'utilise une nouvelle variable $row comme c'est une fonction pour le tableau, même si $list aurait fonctionné également pour dans la fonction précédente */
        $row = "<table border='1'><thead><tr class='head'><td>Mois</td></tr></thead><tbody>";
        for ($i = 0; $i < count($t); $i++) {
            $row .= "<tr><td>$t[$i]</td></tr>\n";
        }
        $row .= "</tbody></table>";
        return $row;
    }
    ?>
    <?php
    echo createTable($tMois);
    echo "<br><br>";
    echo createTable($tJour);
    ?>
    <?php
    /**
     * Function pour créer une option qui marche avec informations de jours et de mois
     */
    function createOptions($t)
    {
        /* J'utilise une nouvelle variable $options pour être plus générique car utilisation de deux types de données */
        $options = "<select name='mois'>";
        for ($i = 0; $i < count($t); $i++) {
            $options .= "<option value='$i'>$t[$i]</option>\n";
        }
        $options .= "</select>";
        return $options;
    }
    ?>
    <br><br>
    <form action="" method="get">

        <?php
        echo createOptions($tJour);
        ?>

        <!-- Ajout du bouton envoyé, pas utile mais on ne sait jamais ... -->
        <input type="submit" value="Envoyer"></input>
    </form>
    <br><br>
    <form action="" method="get">

        <?php
        echo createOptions($tMois);
        ?>

        <!-- Ajout du bouton envoyé, pas utile mais on ne sait jamais ... -->
        <input type="submit" value="Envoyer"></input>
    </form>
    <br><br><br>
    <?php
    $t = array(array("Lundi", 15, 25), array("Mardi", 20, 30), array("Mercredi", 18, 27), array("Jeudi", 16, 24), array("Vendredi", 17, 23), array("Samedi", 17, 25), array("Dimanche", 18, 29));
    echo "<pre>";
    var_dump($t);
    echo "</pre>";
    ?>
    <?php
    /**
     * Function pour créer un tableau sur une colonne et en utilisant les informations de $tMois
     * nombre de colonne calculé
     */
    function createTableTemp(array $t): string
    {
        /* J'utilise une nouvelle variable $row comme c'est une fonction pour le tableau, même si $list aurait fonctionné également pour dans la fonction précédente */
        $row = "<table border='1'><tbody>";

        for ($i = 0; $i < count($t); $i++) {
            $row .= "<tr>";
            for ($j = 0; $j < 1; $j++) {
                $row .= "<td>$t[$i]</td><td>[$i][$j]</td><td>[$i][$j]</td>\n";
            }
        }
        $row .= "</tr></tbody></table>";
        return $row;
    }
    ?>
    <?php
    echo createTableTemp($tJour);
    ?>


</body>

</html>