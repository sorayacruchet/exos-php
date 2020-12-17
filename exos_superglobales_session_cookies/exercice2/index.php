<?php
session_start();
$_SESSION['firstName'] = 'Willy';
$_SESSION['lastName'] = 'Wonka';
$_SESSION['age'] = 666;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Variables superglobales, sessions et cookies</title>
</head>

<body>
    <h1># PHP - Variables superglobales, sessions et cookies</h1>

    <p>## Exercice 2 <br>
        Sur la page index, faire un lien vers une autre page. Passer d'une page à l'autre le contenu des variables **lastname**, **firstname** et **age** grâce aux sessions. <br>
        Ces variables auront été définies directement dans le code.<br>
        Il faudra afficher le contenu de ces variables sur la deuxième page.
    </p>

    <a href="session.php" target="_blank">Hello, viens mettre des paillettes dans ta vie 🎨✨</a>

    <?php

    ?>

</body>

</html>