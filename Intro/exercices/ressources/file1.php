<?php
    // file_1.php
    $contenu = "";
    $fichier = "Villes.txt";
    // Si le fichier existe
    if(file_exists($fichier)) {
        // Ouverture avec file qui renvoie un tableau
        $t = file($fichier);
        // Lecture des lignes a partir du tableau
        $compte = count($t);
        for($i = 0; $i < $compte; $i++) {
            $contenu .= $t[$i] . "<br/>";
        }
    }
    else {
        $contenu = "Le fichier $fichier n'existe pas !";
    }
    echo $contenu;
?>