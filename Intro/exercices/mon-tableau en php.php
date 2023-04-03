<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse:collapse;
            width: 100%;
            border-width:1px; 
            border-style:solid; 
            border-color:black;
        }
        td{
            border-width:1px;
            border-style:solid; 
            border-color:black;
      }
        .head{
            text-align: center;
            border:1px solid black; 
            background-color:silver;

        }
        tbody{
            font-size: 1em;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            border: 1px solid #ccc;
        }
        tfoot{
            text-align: left;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: .8em;
        }
    </style>
    <!--Mon tableau HTML crée en php avec un thead, un body et un tfoot YES !!-->
</head>
<body>
    <p>Mon tableau HTML crée en php avec un thead, un body et un tfoot</p>

    <?php
        echo "<table border=1><thead>";
        for($j=1;$j<=1;$j=$j+1){
            echo "<tr class=\"head\">";
            for($i=1;$i<=10;$i=$i+1){
                 echo "<td><strong>".$j." * ".$i." = ".$j*$i."</strong></td>";
             }
             echo "</tr>";
         } 
        echo "</thead><tbody>";
        for($j=1;$j<=10;$j=$j+1){
               echo "<tr>";
               for($i=1;$i<=10;$i=$i+1){
                    echo "<td>".$j." * ".$i." = ".$j*$i."</td>";
                }
                echo "</tr>";
            }
        echo "</tbody><tfoot>";
        for($j=1;$j<=1;$j=$j+1){
            echo "<tr>";
            for($i=1;$i<=10;$i=$i+1){
                echo "<td><em>".$j." * ".$i." = ".$j*$i."</em></td>";
             }
             echo "</tr>";
         }
        echo "</tfoot></table>";
    ?>
</body>
</html>