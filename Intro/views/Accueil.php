<!DOCTYPE html>
<!--
accueil.php
http://localhost/MonProjetPerso/views/Accueil.php
-->
<html>

    <head>
        <meta charset="UTF-8">
        <title>accueil</title>
        <link rel="stylesheet" href="../css/style.css" />
    </head>

    <body>
        <header>
            <?php
            include './partials/header.php';
            ?>
        </header>

        <hr/>

        <nav>
            <?php
            include './partials/nav.php';
            ?>
        </nav>

        <hr/>

        <section>
            <h1>Accueil</h1>
            <img src="../images/1.jpg" />
            <?php
            ?>
        </section>

        <hr/>

        <footer>
            <?php
            include './partials/footer.php';
            ?>
        </footer>
    </body>

</html>