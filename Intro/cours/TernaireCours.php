<!DOCTYPE html>
<!--
TernaireCours.php
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>TernaireCours.php</h1>
        <?php
// --- La condition
        $v1 = 10;
        $resultat = ($v1 >= 18) ? ("Supérieur ou égal à 18") : ("Inférieur à 18");
        echo $resultat;
        ?>
        <br><br>
        <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Retour</a>
    </body>
</html>
