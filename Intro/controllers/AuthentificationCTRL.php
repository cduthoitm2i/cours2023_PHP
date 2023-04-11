<?php

/* 
 * AuthentificationCTRL.php
 */

$message = "";

$pseudo = filter_input(INPUT_POST, "pseudo");
$mdp = filter_input(INPUT_POST, "mdp");

if(empty($pseudo) || empty($mdp)) {
    $message = "Toutes les saisies sont obligatoires !!!";
}else{
    $message = "$pseudo/$mdp";
}



//echo $message;

include '../views/Authentification.php';

?>

