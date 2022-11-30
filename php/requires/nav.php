<nav>
    <div class="nav-wrapper grey darken-4">
        <a class="brand-logo left hide-on-med-and-down">Portfolio</a>
        <a class="brand-logo center hide-on-large-only">Portfolio</a>
        <?php
        $sql = "SELECT * FROM projects"; 
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC); ?>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <?php foreach($data as $project){?>
                <li><a href="page.php?id=<?php echo $project["id"] ?>"><?php echo $project["nav_title"] ?></a></li>
            <?php } ?>
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
    <?php foreach($data as $project){?>
        <li><a href="projects/<?php echo $project["nav_title"] ?>.html"><?php echo $project["h1"] ?></a></li>
    <?php } ?>
</ul>
