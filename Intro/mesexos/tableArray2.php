<html><body>
<?php
// $NbreData : le nombre de données à afficher
// $NbrCol : le nombre de colonnes
// $NbrLigne : calcul automatique a la FIN
// -------------------------------------------------------
// (exemple)
$NbrCol = 4;
$tableau = array('elt0','elt1','elt2','elt3','elt4','elt5');
// -------------------------------------------------------
$NbreData = sizeof($tableau);
// -------------------------------------------------------
// affichage
$NbrLigne = 0;
if ($NbreData != 0) {
$k = 0;
$j = 1;
echo '<table border="1">';
while ($k < $NbreData) {
   if ($j%$NbrCol == 1) {
      $NbrLigne++;
      echo "<tr>";
      $fintr = 0;
   }
   echo '<td>';
    // ------------------------------------------
    // AFFICHAGE de l'element
   echo $tableau[$k];
    // ------------------------------------------
   echo '</td>';
   $k++;
   if ($j%$NbrCol == 0) {
      echo "</tr>"; 
      $fintr = 0;
   }
   $j++;
}
if ($fintr!=1) { echo '</tr>'; }
echo '</table>';
} else {
echo 'pas de données à afficher';
}
?>
</body></html> 