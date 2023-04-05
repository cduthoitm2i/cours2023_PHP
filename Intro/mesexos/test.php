<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Titre principal</h1>
        <?php
            $suite = [
                [1, 2, 4, 8, 16],
                [1, 3, 9, 27, 81]
            ];

            $utilisateurs = [
                ['nom' => 'Mathilde', 'mail' => 'math@gmail.com'],
                ['nom' => 'Pierre', 'mail' => 'pierre.giraud@edhec.com'],
                ['nom' => 'Amandine', 'mail' => 'amandine@lp.fr'],
            ];

            $produits = [
                'Livre' => ['poids' => 200, 'quantite' => 10, 'prix' => 15],
                'Stickers' => ['poids' => 10, 'quantite' => 100, 'prix' => 1.5]
            ];
            foreach ($suite as $suitenb => $n){
                echo 'Suite ' .($suitenb + 1). ' : ';
                foreach($n as $ni => $nn){
                    echo $nn. ', ';
                }
                echo '<br><br>';
            }
            foreach($utilisateurs as $nb => $infos){
                echo 'Utilisateur n°' .($nb + 1). ' :<br>';
                foreach ($infos as $c => $v){
                    echo $c. ' : ' .$v. '<br>';
                }
                echo '<br>';
            }
            foreach ($produits as $clef => $produit){
                echo 'Produit : ' .$clef. '<br>';
                foreach($produit as $caracteristique => $valeur){
                    echo $caracteristique. ' : ' .$valeur. '<br>';
                }
                echo '<br>';
            }
        ?>
        <p>Un paragraphe</p>
    </body>
</html>