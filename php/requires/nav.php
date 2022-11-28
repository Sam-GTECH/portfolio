<nav>
    <div class="nav-wrapper grey darken-4">
        <a class="brand-logo left hide-on-med-and-down">Portfolio</a>
        <a class="brand-logo center hide-on-large-only">Portfolio</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="projects/why-play-undertale.html">Projet HTML+CSS</a></li>
            <li><a href="projects/frozen-heart.html">Frozen Heart</a></li>
            <li><a href="projects/shmeup.html">Shmeup</a></li>
            //TODO Find a way to change that state dynamically?
            <?php if (isset($_SESSION["user"])==1): ?>
                <?php if ($_SESSION["user"]["is_admin"]==1): ?>
                    <li class="purple"><a href="admin.php"><?php echo $_SESSION["user"]["username"]."*" ?></a></li>
                <?php else: ?>
                    <li class="purple"><a href="login.php"><?php echo $_SESSION["user"]["username"] ?></a></li>
                <?php endif ?>
                <li class="purple"><a class="red-text" href="php/actions/disconnect.php">Disconnect</a></li>
            <?php else: ?>
                <li class="purple"><a href="login.php">Sign Up/Login</a></li>
            <?php endif ?>
        </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="projects/why-play-undertale.html">Projet HTML+CSS</a></li>
    <li><a href="projects/frozen-heart.html">Frozen Heart</a></li>
    <li><a href="projects/shmeup.html">Shmeup</a></li>
</ul>