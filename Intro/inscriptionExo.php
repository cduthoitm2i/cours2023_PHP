<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>Inscription</title>
</head>
<style>
    label{
        display: inline-block;
        width: 150px;
    }
</style>
<body>
    <?php
    include "../Intro/controllers/AuthentificationCTRL_exo.php";
    ?>
    <!-- Pour le test, on indique des value -->
    <form method="post" action="">
        <fieldset>
                <legend>Inscription</legend>
        <table>
            <tbody>
                <tr>
                    <td>Civilité</td>
                    <td>Monsieur 
                    <input type="radio" name="rb_sexe" value="1" />Madame 
                    <input type="radio" name="rb_sexe" value="2" /></td>
                </tr>
                <tr>
                    <td><label for="nom">Nom</label></td>
                    <td><input type="text" name="nom" id="nom"></td>
                </tr>
                <tr>
                    <td><label for="prenom">Prénom</label></td>
                    <td><input type="text" name="prenom" id="prenom"></td>
                </tr>
                <tr>
                    <td><label for="date">Date de naissance</label></td>
                    <td><input type="date" name="date" id="date" value="2023-07-04"></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="email" name="email" id="email" value="cduthoit@gmail.com"></td>
                </tr>
                <tr>
                    <td><label for="email2">Confirmer Email</label></td>
                    <td><input type="email" name="email2" id="email2" value="cduthoit@gmail.com"></td>
                </tr>
                <tr>
                    <td><label for="pseudo">Pseudo</label></td>
                    <td><input type="text" name="pseudo" id="pseudo"></td>
                </tr>
                <tr>
                    <td><label for="mdp">Mot de passe</label></td>
                    <td><input type="password" name="mdp" id="mdp"></td>
                </tr>
                <tr>
                    <td><label for="mdp2">Confirmer le mot de passe</label></td>
                    <td><input type="password" name="mdp2" id="mdp2"></td>
                </tr>
                <tr>
                    <td><label for="area">Commentaire</label></td>
                    <td><textarea id="area" name="area" rows="4" cols="21"></textarea></td>
                </tr>
                <tr>
                    <td><label for="adresse">Adresse</label></td>
                    <td><input type="text" name="adresse" id="adresse"></td>
                </tr>
                <tr>
                    <td><label for="ville">Ville</label></td>
                    <td><select name="ville" id="ville">
                            <option value="">-- Sélectionner une ville --</option>
                            <option value="paris">Paris</option>
                            <option value="lille">Lille</option>
                            <option value="roubaix">Roubaix</option>
                        </select></td>
                </tr>
                <tr>
                    <td><label for="hobbies">Hobbies</label></td>
                    <td><select name="hobbies" id="hobbies">
                            <option value="">-- Sélectionner un hobbie --</option>
                            <option value="cinema">Cinéma</option>
                            <option value="theatre">Théâtre</option>
                            <option value="concert">Concert</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Newsletter&thinsp;?</td>
                    <td><input type="checkbox" id="news" name="news">
                        <label for="news">Cocher la case</label>
                    </td>
                </tr>

            </tbody>
        </table>




        <br>
        <input type="submit" value="Valider" />
        </fieldset>
    </form>
    <br>
    <br>
    <?php
    $sexe = filter_input(INPUT_GET, "rb_sexe");
    if ($sexe != null) {
        if ($sexe == "1") {
            echo "Monsieur";
        } else {
            echo "Madame";
        }
    } else {
        echo "Aucun bouton radio sélectionné";
    }
    ?>
</body>

</html>