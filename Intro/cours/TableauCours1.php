<!DOCTYPE html>
<!--
TableauCours1
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>TableauCours1</title>
    </head>
    <body>
        <h1>TableauCours1</h1>
        <?php
        $t = array();

        $t[] = "Un";
        $t[] = "Deux";
        $t[] = "Trois";

        echo "<pre>";
        var_dump($t);
        echo "</pre>";
        ?>
        
        <br><br>
        <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Retour</a>
    </body>
</html>
