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
echo "Le IF <br>";
$age = 18;
if ($age == 18) {
    echo "Vient juste d'atteindre sa majorité<br>";
}


if ($age >= 18) {
    echo "Majeur<br>";
}
else {
    echo "Mineur<br>";
}
?>
<br><br>
<a href="../index.php">Retour</a>
</body>
</html>