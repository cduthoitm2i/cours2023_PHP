<!DOCTYPE html>
<!--
SwitchCours.php
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>SwitchCours.php</h1>
        <?php
        // --- Le SWITCH
        $valeur = 1;
        switch ($valeur) {
            case -1 :
                echo "Négatif";
                break;
            case 0 :
                echo "Zéro";
                break;
            case 1 :
                echo "Positif";
                break;
            default :
                echo "Bizarre";
        }
        ?>
        <br><br>
        <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Retour</a>
    </body>
</html>
