<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 20%;
        border-width: 1px;
        border-style: solid;
        border-color: black;
    }

    td {
        border-width: 1px;
        border-style: solid;
        border-color: black;
    }

    .head {
        text-align: center;
        border: 1px solid black;
        background-color: silver;
        font-weight: bold;
    }
</style>

<body>




<?php
/*---------------------------------------------------------------*/
/*
    Titre : Génération de tableaux HTML                                                                                 
                                                                                                                          
    URL   : https://phpsources.net/code_s.php?id=669
    Auteur           : jonathan84                                                                                         
    Date édition     : 21 Oct 2012                                                                                        
    Date mise à jour : 19 Aout 2019                                                                                      
    Rapport de la maj:                                                                                                    
    - fonctionnement du code vérifié                                                                                    
    - maintenance du code                                                                                                 
*/
/*---------------------------------------------------------------*/

    function utilHtmlTable($cols, $vals, $params = ''){
        $cols = explode(',', $cols);
        $data = '<table '.$params.'><tbody>';
        foreach($vals as $v){
            $data.= '<tr>';
            foreach($v as $v2){
                $data.= '<td>'.$v2.'</td>';
            }
            $data.= '</tr>';
        }
        $data.= '</tbody></table>';
        return $data;
    }
?>

<?php
    $col = 'col1,col2,col3';
    $value = array(array("Lundi", 15, 25), array("Mardi", 20, 30), array("Mercredi", 18, 27), array("Jeudi", 16, 24), array("Vendredi", 17, 23), array("Samedi", 17, 25), array("Dimanche", 18, 29));
    echo utilHtmlTable($col, $value);

    // Print :

    /*
    <table><tbody><tr><td>Rouge</td><td>Medium</td></tr>
    <tr><td>Vert</td><td>Large</td></tr></tbody>
    </table>
    */
?>
    
    </body>
</html>