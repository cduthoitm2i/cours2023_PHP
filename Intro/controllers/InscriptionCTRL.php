<?php

/*
 * AuthentificationCTRL.php
 */
// On appel le fichier contenant les fonctions de contrôles

include '../controllers/ControlesER.php';


$message = "";
$erreur = 0;

// On récupère les informations de l'attribut name des balises du fichier Inscription.php
$civilite = filter_input(INPUT_POST, "civilite");
$nom = filter_input(INPUT_POST, "nom");
$prenom = filter_input(INPUT_POST, "prenom");
$dateNaissance = filter_input(INPUT_POST, "dateNaissance");
$email = filter_input(INPUT_POST, "email");
$email2 = filter_input(INPUT_POST, "email2");
$pwd = filter_input(INPUT_POST, "pwd");
$pwd2 = filter_input(INPUT_POST, "pwd2");
$telephone = filter_input(INPUT_POST, "telephone");
$adresse = filter_input(INPUT_POST, "adresse");
$idVille = filter_input(INPUT_POST, "idVille");
$newsLetter = filter_input(INPUT_POST, "newsLetter");

/*
 * EN TEST
 */
// On met en commentaire pour tester
//$civilite = "Monsieur";
//$dateNaissance = "1955-10-03";
//$idVille = "75011";
// Si $civilite n'est pas renseigné alors erreur (différent de vide (null))
if ($civilite == null) {
    $erreur++;
    $message .= "<br>Civilité obligatoire";
}
if (empty($nom)) {
    $erreur++;
    $message .= "<br>Nom obligatoire";
}
if (empty($prenom)) {
    $erreur++;
    $message .= "<br>Prénom obligatoire";
}
// On utilise une fonction issu du fichier ControlesER.php
if (!isDate8601($dateNaissance)) {
    $erreur++;
    $message .= "<br>Date incorrecte";
}

if ($email != $email2) {
    $message .= "<br>Les 2 e-mails sont différents";
} else {
    if (!isEmail($email)) {
        $message .= "<br>E-mail incorrect";
    }
}

if ($pwd != $pwd2) {
    $message .= "<br>Les 2 mots de passe sont différents";
} else {
    if (!isMDPFort($pwd)) {
        $message .= "<br>Mot de passe incorrect";
    }
}

if (!isTelephoneFR($telephone)) {
    $erreur++;
    $message .= "<br>Téléphone incorrect";
}

if (empty($adresse)) {
    $erreur++;
    $message .= "<br>Adresse obligatoire";
}

if ($idVille == -1) {
    $erreur++;
    $message .= "<br>Ville obligatoire";
}

if ($erreur == 0) {
    $message .= "<br>Jusque là tout va bien !!!";
    if ($newsLetter == null) {
        $message .= "<br>Pas de NewLetter";
    } else {
        $message .= "<br>Abonné à la NewsLetter";
    }
// Récupération de valeur dans un menu déroulant
    $hobbies = "";
    $selections = filter_input(INPUT_POST, 'hobbies', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
    if ($selections != null) {
        // Sépare chaque valeur par un tiret
        $hobbies = implode("-", $selections);
        $message .= "<br>Hobbies : $hobbies";
    } else {
        $message .= "<br>Pas de hobbies !";
    }
}

// On renvoi les résultats dans le formulaire Inscription.php
include '../views/Inscription.php';
?>

