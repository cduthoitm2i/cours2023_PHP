<!DOCTYPE html>
<!--
TableauAssocCours1
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>TableauAssocCours1</title>
    </head>
    <body>
        <h1>TableauAssocCours1</h1>
        <?php
        // --- Initialisation
        $dictionnaire = array("Lundi" => "Lunedi", "Mardi" => "Martedi", "Mercredi" => "Mercoledi", "Jeudi" => "Giovedi", "Vendredi" => "Venerdi", "Samedi" => "Sabato", "Dimanche" => "Domenica");

// --- Affichage
        foreach ($dictionnaire as $fr => $it) {
            echo "$fr&nbsp;&nbsp;&nbsp;$it<br>";
        }
        ?>
        <br><br>
        <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Retour</a>
    </body>
</html>
