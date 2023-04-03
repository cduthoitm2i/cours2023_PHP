<!DOCTYPE html>
<!--
ForCours.php
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ForCours.php</title>
    </head>
    <body>
        <h1>ForCours.php</h1>
        <?php
        // --- La boucle FOR
        echo "La boucle FOR croissante<br>";
        for ($i = 1; $i <= 10; $i++) {
            echo $i . " ";
        }
        echo "<br>La boucle FOR décroissante<br>";
        for ($i = 3; $i >= 0; $i--) {
            echo $i . " ";
        }
        ?>
        <br><br>
        <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Retour</a>
    </body>
</html>
