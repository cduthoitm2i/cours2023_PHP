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
        $contenu .= "<tr><th>" . fgets($canal) . "</th></tr>\n";
        $contenu .= "</thead>\n";
        $contenu .= "<tbody>\n";
        // Test jusqu'a la fin du fichier
        while (!feof($canal)) {
            // Chaque enregistrement est est une ligne et est lu avec fgets() qui lit jusqu’au CR/LF.
            // Chaque ligne est terminée par \r\n (Carriage Return + Line feed).
            $ligne = fgets($canal);
            // Suppression des RC, nbsp, tab, avec trim ...
            $ligne = trim($ligne);
            // Ajout dans la <table>
            if ($ligne != "") {
                $contenu .= "<tr><td>$ligne</td></tr>\n";
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