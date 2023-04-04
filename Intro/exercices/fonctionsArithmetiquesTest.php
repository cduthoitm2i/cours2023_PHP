<?php
    // --- fonctionsArithmetiquesTest.php
    header("Content-Type: text/html;charset=UTF-8");

    require_once("fonctionsArithmetiques.php");
    $r = addition(3, 5);
    echo $r;
    echo "<br/>";
    echo soustraction(3, 5);
?>