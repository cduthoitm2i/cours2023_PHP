<!DOCTYPE html>
<!--
AuthentificationExo1.php
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>AuthentificationExo1.php</h1>
        <?php
        // La BDD
        $pseudoOK = "Chris";
        $mdpOK = "1234";
        // Les saisies dans le formulaire
        $pseudo = "Chris";
        $mdp = "1234";
        if ($pseudo === $pseudoOK && $mdp === $mdpOK) {
            echo "Authentification OK";
        } else {
            echo "Authentification KO";
        }
        ?>
        <br><br>
        <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Retour</a>

    </body>
</html>
