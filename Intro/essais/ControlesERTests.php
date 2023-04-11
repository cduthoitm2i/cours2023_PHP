<?php

/* 
 * ControlesERTests
 */

require_once './ControlesER.php';

$valeur = "le_nom_du_client";
echo "<br>$valeur snake ? " . isSnakeCase($valeur);


$valeur = "le-nom-du-client";
echo "<br>$valeur khebab ? " . isKebabCase($valeur);

$valeur = "leNomDuClient";
echo "<br>$valeur camel ? " . isCamelCase($valeur);

?>
