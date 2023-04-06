<?php
 
// FichierLecture1.php
header("Content-Type: text/html;charset=UTF-8");
 
$fichier = "../ressources/personnages.txt";
 
// Si le fichier n'existe pas
// gestion préventive d'erreur pour détecter la nom présence du fichier ou un nom erroné
if (file_exists($fichier)) {
    try {
        // Ouverture pour lecture
        // Le fichier est un fichier texte (ascii pur) avec un enregistrement par ligne.
        // On teste l'existence du fichier.
        // Il est ouvert en lecture : flag "r".
        // On boucle du début à la fin du fichier.
        // Chaque enregistrement est une ligne.
        // Chaque ligne est terminée par \n (Line feed) ou par \r\n (Carriage Return + Line feed).
        $canal = fopen($fichier, "r");
        // Lecture du fichier
        $contenu = "<table border='1'>\n";
        $contenu .= "<thead>\n";
        $contenu .= "<tr>";
        $ligne = fgets($canal);
        // On traite ici la tétière du tableau contenant les informations pour chaque colonne (ligne 1 du fichier personnages.txt code;nom;cp)
        $array = explode(";", $ligne);
        for ($i = 0; $i < count($array); $i++) {
            $contenu .= "<th>$array[$i]</th>";
        }
        $contenu .= "</tr>\n";
 
        $contenu .= "</thead>\n";
        $contenu .= "<tbody>\n";
        // Test jusqu'a la fin du fichier
        while (!feof($canal)) {
            // Lecture d'une ligne jusqu'au RC compris
            $ligne = fgets($canal);
            // Suppression des RC, nbsp, tab, ...
            $ligne = trim($ligne);
            // Ajout dans la <table>
            // On test les lignes vide du fichier txt pour qu'elles ne soient pas reprises dans le tableau
            if ($ligne != "") {
                // On traite ici la tétière du tableau contenant les informations pour chaque colonne (lignes 2 à x grâce à la boucle)
                $array = explode(";", $ligne);
                $contenu .= "<tr>";
                // On traite chaque ligne
                for ($i = 0; $i < count($array); $i++) {
                    // On traite chaque colonne
                    $contenu .= "<td>$array[$i]</td>";
                }
                $contenu .= "</tr>";
            }
        } /// boucle
        $contenu .= "</tbody>\n";
        $contenu .= "</table>\n";
        // Fermeture du fichier
        fclose($canal);
    } catch (Exception $e) {
        $contenu = $e->getMessage();
    }
} else {
    $contenu = "Le fichier $fichier n'existe pas !";
}
// Affichage
echo $contenu;
?>