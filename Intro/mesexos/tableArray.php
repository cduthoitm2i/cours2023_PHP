<html><body>
<?php
// $NbreData : le nombre de données à afficher
// $NbrCol : le nombre de colonnes
// $NbrLigne : calcul automatique AVANT affichage
// -------------------------------------------------------
// (exemple)
$NbrCol = 4;
$tableau = array('elt0','elt1','elt2','elt3','elt4','elt5');
// -------------------------------------------------------
$NbreData = sizeof($tableau);
// -------------------------------------------------------
// calcul du nombre de lignes
if (round($NbreData/$NbrCol)!=($NbreData/$NbrCol)) {
   $NbrLigne = round(($NbreData/$NbrCol)+0.5);
} else {
   $NbrLigne = $NbreData/$NbrCol;
}
// -------------------------------------------------------
// affichage
if ($NbreData != 0) {
$k = 0;
echo '<table border="1">';
for ($i=1; $i<=$NbrLigne; $i++) {
   echo '<tr>';
   for ($j=1; $j<=$NbrCol; $j++) {
      if ($k<$NbreData) {
         echo '<td>';
          // ------------------------------------------
          // AFFICHAGE de l'element
         echo $tableau[$k];
          // ------------------------------------------
         echo '</td>';
         $k++;
      } else {    //  case vide
         echo '<td> </td>';
      }
   }
   echo '<tr>';
   $j=1;
}
echo '</table>';
} else {
echo 'pas de données à afficher';
}
?>
</body></html> 