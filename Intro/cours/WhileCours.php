<!DOCTYPE html>
<!--
WhileCours.php
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>WhileCours.php</title>
    </head>
    <body>
        <h1>WhileCours.php</h1>
        <?php
// --- La boucle WHILE
        echo "La boucle WHILE croissante<br>";
        $i = 1;
        while ($i <= 10) {
            echo $i . " ";
            $i++;
        }
        echo "<br>La boucle WHILE décroissante<br>";
        $i = 3;
        while ($i >= 0) {
            echo $i . " ";
            $i--;
        }
        ?>
        <br><br>
        <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Retour</a>
    </body>
</html>
