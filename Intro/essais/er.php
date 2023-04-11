<?php

echo "<br>CP OK ? ", preg_match("/^[0-9]{5}$/", "7501n"); // Affiche 1 ou 0

echo "<br>Téléphone OK ? ", preg_match("@^([0-9]{2}-){4}[0-9]{2}$@", "01-43-72-55-25"); // Affiche 1 ou 0
// ça comence par un 0
// ensuite il y a un chiffre de 1 à 9
// enfin il y a 4 fois un - et 2 chiffres

$motif = "/^0[1-9](-[0-9]{2}){4}$/";

echo "<br>Téléphone 01-43-72-55-25 OK ? ", preg_match($motif, "01-43-72-55-25"); // Affiche 1
echo "<br>Téléphone 00-43-72-55-25 OK ? ", preg_match($motif, "00-43-72-55-25"); // Affiche 0
echo "<br>Téléphone 11-43-72-55-25 OK ? ", preg_match($motif, "11-43-72-55-25"); // Affiche 0
echo "<br>Téléphone 11 43-72-55-25 OK ? ", preg_match($motif, "11 43-72-55-25"); // Affiche 0
echo "<br>Téléphone 11-43-72-55 OK ? ", preg_match($motif, "11-43-72-55"); // Affiche 0
?>

