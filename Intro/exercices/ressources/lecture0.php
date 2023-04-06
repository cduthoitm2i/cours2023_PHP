<?php
    // FichierLecture0.php
    header("Content-Type: text/html;charset=UTF-8");

    $fichier = "../ressources/personnages.txt";
    $contenu = "";
    // Ouverture pour lecture
    // Flag r pour l'ouverture du fichier
    $canal = fopen($fichier, "r");
    // Lecture du fichier
    // Test jusqu'a la fin du fichier
    // tant que pas fin de $canal
    while(!feof($canal)) {
        // Chaque enregistrement est est une ligne et est lu avec fgets() qui lit jusqu’au CR/LF.
        // Chaque ligne est terminée par \r\n (Carriage Return + Line feed).
        $ligne = fgets($canal);
        // le <br/> est placé car on est en header("Content-Type: text/html;charset=UTF-8")
        $contenu .= "$ligne<br/>";
    } /// boucle
    // Fermeture du fichier (obligatoire)
    fclose($canal);
    // Affichage du contenu du fichier txt en html
    echo $contenu;
?>