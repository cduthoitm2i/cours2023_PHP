<html><body>
<?php
// $NbrCol : le nombre de colonnes
// $NbrLigne : le nombre de lignes
$NbrCol = 9;
$NbrLigne = 9;
// --------------------------------------------------------
// on affiche en plus sur les 1ere ligne et 1ere colonne 
// les valeurs a multiplier (dans des cases en couleur)
// le tableau fera donc 10 x 10
// --------------------------------------------------------
echo '<table border="1" width="400">';
// 1ere ligne (ligne 0)
   echo '<tr>';
   echo '<td bgcolor="#CCCCCC">i X j</td>';
   for ($j=1; $j<=$NbrCol; $j++) {
      echo '<td bgcolor="#FFFF66">'.$j.'</td>';
   }
   echo '</tr>';
// -------------------------------------------------------
// lignes suivantes
for ($i=1; $i<=$NbrLigne; $i++) {
   echo '<tr>';
   for ($j=1; $j<=$NbrCol; $j++) {
       // 1ere colonne (colonne 0)
      if ($j==1) {
         echo '<td bgcolor="#FFFF66">'.$i.'</td>';
      }
       // colonnes suivantes
         if ($i==$j) {
            echo '<td bgcolor="#FFCC66">';
         } else {
            echo '<td>';
         }
       // ------------------------------------------
       // AFFICHAGE ligne $i, colonne $j
      echo $i*$j;
       // ------------------------------------------
      echo '</td>';
   }
   echo '</tr>';
   $j=1;
}
echo '</table>';
?>
</body></html> 