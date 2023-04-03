<?php
// Saisies.php
$p = filter_input(INPUT_GET, "prenom");
echo "<br>$p";
$n = filter_input(INPUT_GET, "nom");
echo "<br>$n";
?>

<br><br>
<a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Retour</a>
