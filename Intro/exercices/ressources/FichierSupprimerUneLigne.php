<html>
    <head>
        <meta charset="utf-8" />
        <title>FichierSupprimerUneLigne.php</title>
    </head>

    <body>
        <h1>Suppression</h1>
        <form method="POST" action="">
            <label>Code : </label>
            <input type="text" name="code" size="5" />
            <input type="submit" name="btSubmit" value="Supprimer"/>
        </form>

        <?php
        // On supprime un personnage en fonction de son code
        // Structure du fichier code;nom;cp
        $btSubmit = filter_input(INPUT_POST, "btSubmit");
        if ($btSubmit != null) {
            $code = filter_input(INPUT_POST, "code");
            if ($code != null) {
                $lsNomFichier = "../ressources/personnages.txt";
                $tEnregistrements = file($lsNomFichier);

                $trouve = false;
                $i = 0;
                $compte = count($tEnregistrements);
                while ($i < $compte && !$trouve) {
                    $tChamps = explode(";", $tEnregistrements[$i]);
                    if ($tChamps[0] == $code) {
                        $trouve = true;
                    }
                    $i++;
                } /// Recherche

                if ($trouve) {
                    // Efface et remplace une portion de tableau
                    array_splice($tEnregistrements, $i - 1, 1);
                    file_put_contents($lsNomFichier, $tEnregistrements);
                    echo "Enregistrement supprimé";
                } /// SI trouve
                else {
                    echo "Introuvable";
                } /// PAS trouvé
            } ///
            else {
                echo "Il faut saisir un code !!!";
            }
        }
        ?>
    </body>
</html>
