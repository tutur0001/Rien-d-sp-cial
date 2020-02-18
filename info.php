<?php session_start()          ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Rien d'spéciale | Accueil</title>
</head>
<body>
    <?php include_once 'templates/header.php' ?>
    <?php include_once 'templates/footer.php' ?>
    

    <?php if($_SESSION['id']=='jon' && $_SESSION['pass']=='1234'): ?>
    <div class="resultat">
        <h1>Bienvenue <?= $_SESSION['id'] ?></h1>
        <p>Tu es maintenant connecter</p>
    </div>
<?php else: ?>
            <div class=resultat>
                <h1>Tu n'es pas connectez !</h1>
                <p><a href="login.php" id="infoa">Clique ici pour te connectez</a></a></p>
            </div>
    <?php endif ?>
</body>
</html>