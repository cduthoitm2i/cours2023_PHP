<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForExo1</title>
</head>
<body>
    <?php
        // Déclaration de variables
        $type="Tintin";
        $age=77;

        // Je teste l'age
        if ($type ="Tintin"){
            echo "Vérifié<br>";
            if ($age >= 18)
            {
                echo "Majeur<br>";
            } else {
                echo "Mineur<br>";
            }
        } 
        else {
            echo "Pas vérifié<br>";
        }

    ?>
        <br><br>
        <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Retour</a>
</body>
</html>