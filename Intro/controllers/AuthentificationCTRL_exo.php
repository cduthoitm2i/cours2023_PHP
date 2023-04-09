<?php

 

/* 
 * AuthentificationCTRL.php
 */
$message = "";
/* Ajout des contrôles/récupération des données du formulaire

*/
$rb_sexe = filter_input(INPUT_POST, "rb_sexe");
$nom = filter_input(INPUT_POST, "nom");
$prenom = filter_input(INPUT_POST, "prenom");
$date = filter_input(INPUT_POST, "date");
/* Création variable $email dans laquelle on affecte la saisie de l'input mail de la page login.html (voir name="mail") dans la balise <input>*/
$email = filter_input(INPUT_POST, "email");
$email2 = filter_input(INPUT_POST, "email2");
/* Création variable $mdp dans laquelle on affecte la saisie de l'input mdp de la page login.html (voir  name="mdp") dans la balise <input> */
$pseudo = filter_input(INPUT_POST, "pseudo");
$mdp = filter_input(INPUT_POST, "mdp");
$mdp2 = filter_input(INPUT_POST, "mdp2");
$adresse = filter_input(INPUT_POST, "adresse");
$ville = filter_input(INPUT_POST, "ville");
$hobbies = filter_input(INPUT_POST, "hobbies");
$news = filter_input(INPUT_POST, "news");

if (isset($nom) && isset($prenom) && isset($date)) {
/* On vérifie que tous les champs sont bien remplis*/
if(empty($nom) || empty($prenom) || empty($date) || 
    empty($email) || empty($email2) || empty($pseudo) || empty($mdp) || empty($mdp2) || 
    empty($adresse) || empty($ville) || empty($hobbies) || empty($news))
    {
        $message ="Tous les champs doivent être remplis";
    }




    elseif ($email <> $email2) {
        $message ="Les deux adresses mail ne sont pas identique";
    }
    elseif ($mdp <> $mmp2) {
        $message ="Les deux mot de passe ne sont pas identique";
    }
    /*Vérifie la bonne forme de l'adresse mail, mais faut repasser en type text*/
    elseif (filter_var($email || $email2, FILTER_VALIDATE_EMAIL)){
        echo "L'adresse e-mail est valide<br>";
      }
      else{
        echo "L'adresse e-mail n'est pas valide<br>";
      }

    }











/* include '../views/inscriptionExo.php';*/

?>