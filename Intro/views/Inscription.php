<!DOCTYPE html>
<!--
Authentification.php
c:/xampp/htdocs/MonProjetPerso/views/Inscription.php
http://localhost/MonProjetPerso/views/Inscription.php
-->
<html>

<head>
    <title>Inscription.php</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <header>
        <?php
        include '../views/partials/header.php';
        ?>
    </header>

    <hr />

    <nav>
        <?php
        include '../views/partials/nav.php';
        ?>
    </nav>

    <section id="center">
        <article>
            <form action="../controllers/InscriptionCTRL.php" method="POST">
                <p>
                    <label class="etiquette">Civilit&eacute; </label>
                    <!--                        <br>-->
                    <input type="radio" name="civilite" id="civiliteH" value="Monsieur" class="obligatoire" />
                    <label for="civiliteH">Monsieur </label>

                    <input type="radio" name="civilite" id="civiliteF" value="Madame" class="obligatoire" />
                    <label for="civilite_F">Madame </label>

                    <input type="radio" name="civilite" id="civiliteNG" value="Non Genre" class="obligatoire" />
                    <label for="civilite_F">Non genre </label>
                    <label class="texteRouge">*</label>
                </p>
                <p>
                    <label for="nom" class="etiquette">Nom </label>
                    <!-- Supprimer value pour faire les tests réels -->
                    <input type="text" size="50" name="nom" id="nom" value="Buguet" />
                    <label class="texteRouge">*</label>
                    <label id="lblMessageNom"></label>
                </p>
                <p>
                    <label for="prenom" class="etiquette">Pr&eacute;nom </label>
                    <!-- Supprimer value pour faire les tests réels -->
                    <input type="text" size="50" name="prenom" id="prenom" value="Pascal" />
                    <label class="texteRouge">*</label>
                    <label id="lblMessagePrenom"></label>
                </p>

                <p>
                    <label for="dateNaissance" class="etiquette">Date de naissance</label>
                    <!--                        <input type="text" size="50" name="dateNaissance" id="dateNaissance" value="" />-->
                    <input type="date" size="50" name="dateNaissance" id="dateNaissance" value="" />
                    <label class="texteRouge">*</label>
                    <label id="lblMessageDateNaissance"></label>
                </p>
                <p>
                    <label for="email" class="etiquette">E-mail </label>
                    <!-- Supprimer value pour faire les tests réels -->
                    <input type="text" size="50" name="email" id="email" value="pb@gmail.com" />
                    <label class="texteRouge">*</label>
                    <label id="lblMessageEmail"></label>
                </p>
                <p>
                    <label for="email2" class="etiquette">Retapez l'e-mail </label>
                    <!-- Supprimer value pour faire les tests réels -->
                    <input type="text" size="50" name="email2" id="email2" value="pb@gmail.com" />
                    <label class="texteRouge">*</label>
                    <label id="lblMessageEmail2"></label>
                </p>
                <p>
                    <label for="pwd" class="etiquette">Mot de passe </label>
                    <!-- Supprimer value pour faire les tests réels -->
                    <input type="password" size="50" name="pwd" id="pwd" value="Mdp012345#" />
                    <label class="texteRouge">*</label>

                    <label id="lblMessageMDP"></label>
                </p>
                <p>
                    <label for="pwd2" class="etiquette">Retapez le mot de passe </label>
                    <!-- Supprimer value pour faire les tests réels -->
                    <input type="password" size="50" name="pwd2" id="pwd2" value="Mdp012345#" />
                    <label class="texteRouge">*</label>
                    <label id="lblMessageMDP2"></label>
                </p>

                <p>
                    <label for="chkPwdVisible" class="etiquette">Mot de passe visible</label>
                    <input type="checkbox" name="chkPwdVisible" id="chkPwdVisible" />
                </p>

                <p>
                    <label for="telephone" class="etiquette">Téléphone</label>
                    <!-- Supprimer value pour faire les tests réels -->
                    <input type="text" size="20" name="telephone" id="telephone" value="01-01-01-01-01" />
                </p>
                <p>
                    <label for="adresse" class="etiquette">Adresse</label>
                    <!-- Supprimer value pour faire les tests réels -->
                    <input type="text" size="50" name="adresse" id="adresse" value="291, rue du fg st Antoine" />
                    <label class="texteRouge">*</label>
                    <label id="lblAdresse"></label>
                </p>
                <p>
                    <label for="idVille" class="etiquette">Ville</label>
                    <select name="idVille" id="idVille" size="1">
                        <option value='-1'> - Sélectionnez une ville - </option>
                        <option value='75011'>Paris 11</option>
                        <option value='75012'>Paris 12</option>
                        <?php
                        //                            foreach ($villeRecords as $value) {
                        //                                echo "<option value='" . $value->getIdVille() . "'>" . $value->getNomVille() . "</option>";
                        //                            }
                        ?>
                    </select>
                    <label class="texteRouge">*</label>
                </p>
                <p>
                    <label for="hobbies" class="etiquette">Hobbies</label>
                    <select name="hobbies[]" id="hobbies" multiple="multiple" size="5">
                        <option value='1'>Ski</option>
                        <option value='2'>Tennis</option>
                        <option value='3'>Piano</option>
                        <option value='4'>Violon</option>
                        <option value='5'>Cinéma</option>
                        <option value='6'>Musée</option>
                        <option value='7'>Lecture</option>
                        <?php
                        //                            foreach ($hobbieRecords as $value) {
                        //                                echo "<option value='" . $value->getIdHobbie() . "'>" . $value->getHobbie() . "</option>";
                        //                            }
                        ?>
                    </select>
                </p>
                <p>
                    <label for="newsLetter" class="etiquette">News Letter ?</label>
                    <input type="checkbox" name="newsLetter" id="newsLetter" />
                </p>
                <p>
                    <label class="etiquette">&nbsp;</label>
                    <input type="submit" name='btValider' id="btValider" />
                </p>
            </form>
        </article>
        <p>
            <label id="lblMessage" class="message">
                <?php
                if (isset($message)) {
                    echo $message;
                }
                ?>
            </label>
        </p>
        <br>
    </section>

    <footer id="footer">
        <?php
        include "../views/partials/footer.php";
        ?>
    </footer>

</body>

</html>