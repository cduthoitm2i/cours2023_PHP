<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Génération d'un menu select Jour/mois/année</title>
</head>
<body>
    <h3>Génération d'un menu select jour/mois/année en PHP</h3>
    <form method="get">
    <?php
        $i=0;

        
        // Sans correspondance sur les mois
        // On affiche le sélecteur pour les jours de 1 à 31

        echo "<select name='jour'>";
            for($i=1;$i<=31;$i=$i+1){
                echo "<option value=\"". $i."\">". $i."</option>";
            }
        echo "</select>&nbsp;";

        // On affiche le sélecteur pour les mois de 1 à 12
        echo "<select name='mois'>";
            for($i=1;$i<=12;$i=$i+1){
                echo "<option value=\"". $i."\">". $i."</option>";
            }
        echo "</select>&nbsp;";

        // On affiche le sélecteur pour les années de 1900 à 2030
        echo "<select name='annee'>";
        for($i=1900;$i<=2030;$i=$i+1){
            echo "<option value=\"". $i."\">". $i."</option>";
        }
    echo "</select>";
    ?>
     <input type="submit" value="Envoyer"></input></form>
    <br><br>
    <form method="get">
    <?php
        $i=0;

        setlocale(LC_TIME, 'fr_FR', 'fra', 'french');
        $tab_mois = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
        $options = '';
        foreach($tab_mois as $mois){
        $options .= '<option value="'.$mois.'">'.$mois.'</option>';
        }
        $options = str_replace('value="'.rtrim(strtoupper(date('%b')), '.').'"', 'value="'.rtrim(strtoupper(date('%b')), '.').'" selected="selected"', $options);
    

        
        // Avec correspondance sur les mois
        // On affiche le sélecteur pour les jours de 1 à 31

        echo "<select name='jour'>";
            for($i=1;$i<=31;$i=$i+1){
                echo "<option value=\"". $i."\">". $i."</option>";
            }
        echo "</select>&nbsp;";

        // On affiche le sélecteur pour les mois de 1 à 12
        echo "<select name='mois'>";
            
                echo "<option><?php echo $options; ?></option>";

        echo "</select>&nbsp;";

        // On affiche le sélecteur pour les années de 1900 à 2030
        echo "<select name='annee'>";
        for($i=1900;$i<=2030;$i=$i+1){
            echo "<option value=\"". $i."\">". $i."</option>";
        }
    echo "</select>";
    ?>
     <input type="submit" value="Envoyer"></input></form>







    <br><br>
        <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Retour</a>

</body>
</html>