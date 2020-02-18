<header>
    <nav class="skew-menu">
        <ul>
            <li><a href="accueil.php">Accueil</a></li>
            <li><a href="info.php">Information</a></li>
            <?php if (!isset($_SESSION['id'])) :  ?>
                <li><a href="login.php">Se connecter</a></li>
            <?php else : ?>
                <li class="account">
                    <span><?= $_SESSION['id'] ?></span>
                    <ul class="none">
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="controllers/logout.php">Déconnection</a></li>
                    </ul>
                </li>
            <?php endif ?>

        </ul>
    </nav>
</header>
