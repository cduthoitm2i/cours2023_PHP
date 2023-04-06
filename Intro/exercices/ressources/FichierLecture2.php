<?php
// FichierLecture2.php
header("Content-Type: text/html;charset=UTF-8");
//header("Content-Type: text/html;charset=ISO-8859-1");


// Ouverture, lecture, fermeture en une seule fonction.
// Transformation des \n (saut de ligne « texte ») en <br/> (saut de ligne HTML).
$contenu = file_get_contents("../ressources/personnages.txt");

echo nl2br($contenu);



?>