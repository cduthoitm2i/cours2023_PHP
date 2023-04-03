<!DOCTYPE html>
<!--
IfCours.php
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>IfCours.php</h1>
        <?php
        $age = 18;

        if ($age >= 18) {
            echo "Majeur";
        } else {
            echo "Mineur";
        }
        ?>
        <br><br>
        <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Retour</a>
    </body>
</html>
