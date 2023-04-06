<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function createTableMultiColumns($t)
    {
        $html = "<table border='1'>\n";

        $html .= "<thead>\n";
        $html .= "</thead>\n";

        $html .= "<tbody>\n";

        $countLines = count($t);
        $countColumns = count($t[0]);

        for ($i = 0; $i < $countLines; $i++) {
            $html .= "<tr>\n";
            for ($j = 0; $j < $countColumns; $j++) {
                $html .= "<td>" . $t[$i][$j] . "</td>\n";
            }
            $html .= "</tr>\n";
        }

        $html .= "</tbody>\n";
        $html .= "</table>\n";

        return $html;
    }

    ?>
</body>

</html>