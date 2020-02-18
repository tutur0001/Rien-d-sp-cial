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

    <main id="container">
        <form action="controllers/admin.php" method="POST">
            <label class="labelradio" for="text">Visualiser le text</label>
            <input type="radio" name="text" id="radiotext" value="yes">
            <input type="radio" name="text" id="radiotext" value="no">   

        </form>
    </main>
</body>

</html>