<!DOCTYPE html>
<html lang="EN">
    <head>
        <script src="https://kit.fontawesome.com/7a840548b5.js" crossorigin="anonymous"></script>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/png" href="img/icon.png">
        <meta charset="utf-8">

        <title>Portfolio Simbel & Deadly - Admin Page</title>

        <!--Let browser know website is optimized for mobile
        But W3c apparently doesn't want any of that-->
        <!--<meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
    </head>

    <body>
        <?php
            require_once "php/requires/config.php";
            require_once "php/requires/nav.php";
            if (!isset($_SESSION["user"]) || $_SESSION["user"]["is_admin"]==0){
                header("Location:index.php");
                exit();
            };
        ?>

        <h1>Admin Page</h1>

        <h2>Users List</h2>
        <?php
        $sql = "SELECT * FROM users"; 
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC); ?>
        
        <ol>
            <?php
            foreach($data as $user){ ?>
                <li><?php echo $user['username'] ?><br>
                <span class="email"><?php echo $user['email'] ?></span><br>
                Admin: <?php echo $user["is_admin"]==1?"Yes":"No" ?></li>
                <form method="post" action="php/actions/updateAdmin.php">
                    <input type='hidden' name='admin' value="<?php echo $user['is_admin']==1?0:1?>"/>
                    <input type='hidden' name='username' value="<?php echo $user['username']?>" />
                    <input type='submit' value='update admin' />
                </form>
                <form method="post" action="php/actions/deleteUser.php">
                    <input type='hidden' name='username' value="<?php echo $user['username']?>" />
                    <input type='submit' value='delete user' />
                </form>
            <?php } ?>
        </ol>

        <h2>Projects List</h2>
        <?php
        $sql = "SELECT * FROM projects"; 
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC) ?>
        
        <?php if (empty($data)): ?>
            <p>Wow! This place is empty as fuck!<br><br>How about creating a project?</p>
        <?php else: ?>
            <ol>
                <?php
                foreach($data as $project){ ?>
                    <li><?php echo $project['h1'] ?><br>
                    <span class="email"><?php echo $project['h2'] ?></span></li>
                <?php } ?>
            </ol>
        <?php endif; ?>
        <div class="z-depth-4">
            <h3>Add a project</h3>
        </div>

        <?php require_once "php/requires/footer.php" ?>

        <!--JavaScript at end of body for optimized loading-->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>