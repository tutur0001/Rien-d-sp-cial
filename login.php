<?php session_start() ?>




<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Rien d'spéciale | Connexion</title>
</head>

<body>
    <?php include_once 'templates/header.php' ?>
    <?php include_once 'templates/footer.php' ?>
    <main>
        <form action="controllers/log.php" method="POST">
            <label class="labelText" for="id">Votre id:</label>
            <input type="text" id="inpText" name="id">
            <label  class="labelText" for="pass">Votre mots de passe:</label>
            <input type="password" name="pass" id="inpPass">
            <input type="submit" id="submit" value="Connexion">
        </form>
    </main>
</body>

</html>