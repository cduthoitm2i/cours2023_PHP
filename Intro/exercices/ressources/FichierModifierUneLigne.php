<html>
    <head>
        <meta charset="utf-8" />
        <title>FichierModifierUneLigne.php</title>
    </head>

    <body>
        <h1>Modification</h1>

        <form method="POST" action="">
            <label>Code : </label>
            <input type="text" name="code" value="2" size="5" />
            <label>Nouveau nom : </label>
            <input type="text" name="nom" value="Milou" />
            <label>Nouveau cp : </label>
            <input type="text" name="cp" value="78000" />

            <input type="submit" name="btSubmit"/>
        </form>

        <?php
        // On modifie un personnage en fonction de son code
        // Structure du fichier code;nom;cp
        $message = "";
        $btSubmit = filter_input(INPUT_POST, "btSubmit");
        if ($btSubmit != null) {
            $code = trim(filter_input(INPUT_POST, "code"));
            $nom = trim(filter_input(INPUT_POST, "nom"));
            $cp = trim(filter_input(INPUT_POST, "cp"));
            if (empty($code) || empty($nom) || empty($cp)) {
                $message = "Toutes les saisies sont obligatoires !";
            } else {
                $nomDeFichier = "../ressources/personnages.txt";
                $canal = fopen($nomDeFichier, "r+");
                $trouve = false;
                $contenuFichierOUT = "";

                // Lecture jusqu'à la fin du fichier
                while (!feof($canal)) {
                    // Lecture d'un enregistrement
                    $enregistrement = fgets($canal);
                    if (trim($enregistrement) != "") {
                        $tChamps = explode(";", $enregistrement);
                        if ($tChamps[0] == $code) {
                            $tChamps[1] = $nom;
                            $tChamps[2] = $cp;
                            $enregistrement = implode(";", $tChamps) . "\r\n";
                            $trouve = true;
                        } /// if trouve
                        // Dans tous les cas on réécrit l'enregistement courant
                        $contenuFichierOUT .= $enregistrement;
                    } /// if trim
                } /// while
                // Réécriture seulement si trouvé
                if ($trouve) {
                    file_put_contents($nomDeFichier, $contenuFichierOUT);
                    $message = "Enregistrement modifié et sauvegardé";
                } /// if trouve
                else {
                    $message = "Introuvable";
                } /// else trouve
            } /// if zones remplies

            echo $message;
        }
        ?>
    </body>
</html>