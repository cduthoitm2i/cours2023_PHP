<!DOCTYPE html>
<!--
Csv2SelectExo.php
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

 

        <form>
            <select name="clients">
                <?php
                $fileName = "../ressources/personnages.txt";
                // Si le fichier n'existe pas
                if (file_exists($fileName)) {
                    try {
                        // Ouverture pour lecture
                        $fileStream = fopen($fileName, "r");
                        // Lecture du fichier
                        $HTMLContent = "";
                        // les entêtes, on les passe
                        $line = fgets($fileStream);
                        // Test jusqu'a la fin du fichier
                        while (!feof($fileStream)) {
                            // Lecture d'une ligne jusqu'au RC compris
                            $line = fgets($fileStream);
                            // Suppression des RC, nbsp, tab, ...
                            $line = trim($line);
                            // Ajout dans la <select>
                            if ($line != "") {
                                $array = explode(";", $line);
                                $HTMLContent .= "<option value='$array[0]'>$array[1]</option>";
                            }
                        } /// boucle
                        // Fermeture du fichier
                        fclose($fileStream);
                    } catch (Exception $e) {
                        $HTMLContent .= "<option value='-1'>" . $e->getMessage() . "</option>";
                    }
                } else {
                    $HTMLContent .= "<option value='-1'>Le fichier $fileName n'existe pas !</option>";
                }
                // Affichage
                echo $HTMLContent;
                ?>
            </select>
            &nbsp;&nbsp;&nbsp;
            <input type="submit" />
        </form>

 


    </body>
</html>