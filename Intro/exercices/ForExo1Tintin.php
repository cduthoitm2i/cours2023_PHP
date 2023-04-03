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
        $age=77;

        // Je teste l'age
        if ($age >=7 && $age<=77) {
            echo "Tintin<br/>";
            if ($age >= 77) {
                echo "Trop vieux<br/>";
            }
            if ($age >= 18 && $age <= 130) {
                echo "Tintin est majeur<br/>";
                }
                elseif ($age >1 && $age <= 17) {
                    echo "Tintin est mineur<br/>";
                }
            }
            else {
                echo "Pas Tintin<br/>";
                echo "<br/>";
                if ($age < 0) {
                    echo "Pas né<br/>";
                } elseif ($age >= 130) {
                    echo "Mort<br/>";
                }
                elseif ($age < 7) {
                    echo "Trop jeune<br/>";
                }
                elseif ($age > 77) {
                        echo "Trop vieux<br/>";
                }
            } 
?>
        <br><br>
        <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Retour</a>
</body>
</html>