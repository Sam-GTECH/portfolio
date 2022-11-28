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
            require_once "php/requires/nav.php"
        ?>

        <h1>Admin Page</h1>

        <h2>Liste des utilisateurs</h2>
        <?php
        $sql = "SELECT * FROM users"; 
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($data as $user){ ?>
            <div class="bloc_user">
                <p><?php echo $user['username'] ?><br>
                <span class="email"><?php echo $user['email'] ?></span><br>
                Admin: <?php echo $user["is_admin"]==1?"Yes":"No" ?></p>
            </div>
        <?php } ?>

        <?php require_once "php/requires/footer.php" ?>

        <!--JavaScript at end of body for optimized loading-->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>