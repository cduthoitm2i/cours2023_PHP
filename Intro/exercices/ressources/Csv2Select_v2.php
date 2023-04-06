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

 

        <?php
        $fileName = "../ressources/personnages.txt";
        $HTMLContent = "";
        $fileContent = file_get_contents($fileName);
        //die('c est mort');
        ?>

 

        <form>
            <select name="clients">
                <?php
// Si le fichier n'existe pas
//                    try {
//                        // Ouverture pour lecture
//                        $fileStream = fopen($fileName, "r");
//                        // Lecture du fichier
//                        $HTMLContent = "";
//                        // les entêtes, on les passe
//                        $line = fgets($fileStream);
//                        // Test jusqu'a la fin du fichier
//                        while (!feof($fileStream)) {
//                            // Lecture d'une ligne jusqu'au RC compris
//                            $line = fgets($fileStream);
//                            // Suppression des RC, nbsp, tab, ...
//                            $line = trim($line);
//                            // Ajout dans la <select>
//                            if ($line != "") {
//                                $array = explode(";", $line);
//                                $HTMLContent .= "<option value='$array[0]'>$array[1]</option>";
//                            }
//                        } /// boucle
//                        // Fermeture du fichier
//                        fclose($fileStream);
//                    } catch (Exception $e) {
//                        $HTMLContent .= "<option value='-1'>" . $e->getMessage() . "</option>";
//                    }

 

                // Variante avec deux explode
                $arrayRecords = explode("\n", $fileContent);
                for ($i = 1; $i < count($arrayRecords); $i++) {
                    if ($arrayRecords[$i] != "") {
                        $array = explode(";", $arrayRecords[$i]);
                        $HTMLContent .= "<option value='$array[0]'>$array[1]</option>";
                    }
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