 <?php
 /*OK*/
 echo "<br>CP OK ? " , preg_match("/^[0-9]{5}$/", "75011"); // Affiche 1 ou 0

 /*PAS OK*/
 echo "<br>CP OK ? " , preg_match("/^[0-9]{5}$/", "7501"); // Affiche 1 ou 0

 /*PAS OK*/
 echo "<br>CP OK ? " , preg_match("/^[0-9]{5}$/", "7501n"); // Affiche 1 ou 0



 echo "<br>Téléphone OK ? ", preg_match("@^([0-9]{2}-){4}[0-9]{2}$@", "01-43-72-55-22"); // Affiche 1 ou 0

 /*Amélioration Test OK*/
 echo "<br>Téléphone OK ? ", preg_match("@^(0[1-9]-([0-9]{2}-){3}[0-9]{2})$@", "01-43-72-55-22"); // Affiche 1 ou 0

  /*Amélioration Test Pas OK*/
  echo "<br>Téléphone OK ? ", preg_match("@^(0[1-9]-([0-9]{2}-){3}[0-9]{2})$@", "1-43-72-55-22"); // Affiche 1 ou 0

 
  /*Amélioration avec deux types de saisie avec des tirets ou des espaces entre les nombres */
  echo "<br>Téléphone OK ? ", preg_match("@^(0[1-9](-| )([0-9]{2}(-| )){3}[0-9]{2})$@", "01 43 72 55 22"); // Affiche 1 ou 0
  ?>
  <br><br>
  <?php 
  /* Nouveau test*/
  $telephone="01-43-72-55-22";
  $notif="/^(0[1-9]-([0-9]{2}-){3}[0-9]{2})/";

  echo "<br> $telephone ? ok ".preg_match($notif,$telephone);

?>