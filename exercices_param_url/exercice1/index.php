<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Les paramètres d'URL</title>
</head>

<body>
    <h1># PHP - Les paramètres d'URL</h1>

    <p>## Exercice 1 <br>
        Voici l'URL à étudier : <br>
        index.php?lastname=Tutor&firstname=Janine<br>
        Faire une page index.php.<br>
        Sur cette page faire 2 boutons :<br>
        * Le premier "bouton" doit contenir un href qui pointe vers l'URL. Il faut ensuite tester sur cette même page que tous les paramètres existent :<br>
        - S'ils sont présents les afficher.<br>
        - Dans le cas contraire ne rien afficher.<br>
        * Le deuxieme "bouton" doit permettre de revenir à la page index.php.
    </p>

    <a href="index.php?lastname=Tutor&amp;firstname=Janine"><input type="button" value="Envoi des paramètres"></a>
    <a href="index.php"><input type="button" value="Retour INDEX"></a>

    <?php
    if (isset($_GET['lastname'])) {
        echo "<p>Param1 :" . $_GET['lastname'] . "</p>";
    }

    if (isset($_GET['firstname'])) {
        echo "<p>Param2 :" . $_GET['firstname'] . "</p>";
    }
    ?>

</body>

</html>