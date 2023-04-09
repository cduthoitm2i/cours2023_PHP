<?php
// --- La fonction explode sur une chaîne de caractères
$chaine = "nom;prenom;cp;ville";
$tableau = explode(";", $chaine);
for ($i = 0; $i < count($tableau); $i++) {
    echo $tableau[$i] . "<br>";
}
?>

<br><br>
<?php
// --- La fonction explode sur une chaîne de caractères
$chaine = "nom;prenom;cp;ville";
$tableau = explode(";", $chaine);
echo $tableau[0] . "<br>";
echo $tableau[1] . "<br>";
echo $tableau[2] . "<br>";
echo $tableau[3] . "<br>";
?>
<br><br>

<?php
$lsChaine = "<strong>é</strong>";
echo "\n<strong>" . $lsChaine . "</strong> affiché SANS htmlSpecialChars<br>";
echo "\n<strong>" . htmlspecialchars($lsChaine) . "</strong> affiché AVEC htmlSpecialChars<br>";
?>


<?php
// --- STRIP_TAGS : annule les tags HTML
$lsTexte = "<hr />Mis en <strong>gras</strong> et en <i>italique</i>";

// --- Affiche avec la prise en compte des balises HTML
echo $lsTexte . "<br>";

// --- Affiche sans la prise en compte des balises HTML
echo 'Pas de mise en forme : strip_tags($lsTexte):' . strip_tags($lsTexte) . "<br>";

// --- Affiche sans mise en forme sauf <strong> qui est prise en compte
echo 'Mise en forme : strip_tags($lsTexte, balise):' . strip_tags($lsTexte,"<strong>") . "<br>";
?>


<?php
header("Content-Type: text/html;charset=UTF-8");

echo "\n\n<hr />MB_CONVERT_ENCODING<br>";
$lsChaine = "C'était l'été";

$lsConversion = mb_convert_encoding($lsChaine, "UTF-8", "ISO-8859-15");

echo "\n<strong>$lsChaine</strong> affiché en UTF-8 AVEC mb_convert_encoding : <strong>$lsConversion</strong><br>";

$lsChaine = mb_convert_encoding($lsConversion, "ISO-8859-15", "UTF-8");

echo "\n<strong>$lsConversion</strong> affiché en ISO-8859-15 AVEC mb_convert_encoding : <strong>$lsChaine</strong><br>";
?>