<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $pseudo = filter_input(INPUT_POST, "pseudo");
    $classe = filter_input(INPUT_POST, "classe");
    $metier = filter_input(INPUT_POST, "metier");


    if (isset($pseudo) && isset($classe) && isset($metier)) {
        if (empty($pseudo) || empty($classe) || empty($metier)) {
            $message = "Toutes les saisies sont obligatoires&thinsp;!";
        } else {
            $fichier = "../exercices/avatar.txt";
            $canal = fopen($fichier, "a+");
            fwrite($canal, "\n$pseudo;$classe;$metier");
            fclose($canal);
            $message = "Une ville a été ajouté dans $fichier";
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Code : </label>
        <input type="text" name="pseudo">
        <label>classe</label>
        <select name="classe">
            <option value="guerrier">guerrier</option>
            <option value="mage">mage</option>
        </select>
        <select name="metier">
            <option value="herboristerie">herboristerie</option>
            <option value="depeceur">depeceur</option>
        </select>

        <input type="submit" value="Cree ton personnage">
    </form>

    <label><?php echo $message; ?></label>
</body>

</html>