<?php

/*
 * ControlesER.php
 */

// Fonction pour tester une adresse mail
function isEmail($psChaine) {
    $motif = "/^[0-9a-zA-Z_-]+([.][0-9a-zA-Z_-]+)?@[0-9a-zA-Z._-]{2,}[.][a-zA-Z]{2,5}$/";
    return preg_match($motif, $psChaine);
}

// Fonction pour tester un mot de passe fort
function isMDPFort($psChaine) {
    $motif = "/^(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{6,10}$/";
    return preg_match($motif, $psChaine);
}

// Fonction pour tester le code postal
function isCPFR($psChaine) {
    $motif = "/[0-9]{5}/";
    return preg_match($motif, $psChaine);
}

// Fonction pour tester le format d'un numéro de téléphone français
function isTelephoneFR($psChaine) {
    $motif = "/^0[1-9](-[0-9]{2}){4}$/";
    return preg_match($motif, $psChaine);
}

// Fonction pour tester une date avec des slashs (écriture valide, par exemple&nbsp;: 11/04/2023)
function isDateFRSlash($psChaine) {
    $motif = "#^[0-9]{2}/[0-9]{2}/[0-9]{4}$#";
    return preg_match($motif, $psChaine);
}

// Fonction pour tester une date (attention format à l'envers&nbsp;: 2023/04/11)
function isDate8601($psChaine) {
    $motif = "#^[0-9]{4}-[0-9]{2}-[0-9]{2}$#";
    return preg_match($motif, $psChaine);
}

// Fonction pour tester si c'est un entier
function isEntier($psChaine) {
    $motif = "/^[-]?[0-9]+$/";
    return preg_match($motif, $psChaine);
}

// Fonction pour tester si c'est un entier positif
function isEntierPositif($psChaine) {
    $motif = "/^[0-9]+$/";
    return preg_match($motif, $psChaine);
}

// Fonction pour tester si c'est un entier négatif
function isEntierNegatif($psChaine) {
    $motif = "/^-[0-9]+$/";
    return preg_match($motif, $psChaine);
}

// Fonction pour tester si c'est un décimal
function isDecimal($psChaine) {
    $motif = "/^[-]?[0-9]*[.]?[0-9]+$/";
    return preg_match($motif, $psChaine);
}

// Fonction pour tester si c'est un décimal fr
function isDecimalFR($psChaine) {
    $motif = "/^[-]?[0-9]*[,]?[0-9]+$/";
    return preg_match($motif, $psChaine);
}

// Fonction pour tester si pas d'accent sur les noms
function isNomSansAccent($psChaine) {
    $motif = "/^[A-Z][A-Za-z '-]+$/";
    return preg_match($motif, $psChaine);
}

// Fonction pour tester si accent sur les noms
function isNomAvecAccent($psChaine) {
    $motif = "/^[A-Z][A-Za-zàâäéèêëîïôöüûù '-]+$/";
    return preg_match($motif, $psChaine);
}

// Fonction pour tester si une variable est au format SnakeCase
function isSnakeCase($psChaine) {
    $motif = "/^([a-z]{1,}_){1,}[a-z]{1,}$/";
    return preg_match($motif, $psChaine);
}

// Fonction pour tester si une variable est au format CamelCase (à faire)
function isCamelCase($psChaine) {
    // TODO
}
// ??
function isKebabCase($psChaine) {
    // TODO
    $motif = "/^([a-z]{1,}-){1,}[a-z]{1,}$/";
    return preg_match($motif, $psChaine);
}

?>