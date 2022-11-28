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

        <title>Portfolio Simbel & Deadly - Sing Up/Login</title>

        <!--Let browser know website is optimized for mobile
        But W3c apparently doesn't want any of that-->
        <!--<meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
    </head>

    <body>
        <?php
            require_once "php/requires/config.php";
            require_once "php/requires/nav.php"
        ?>

        <h1 class="center">Create or Log in to your account!</h1>

        <div class="container">
            <div class="row">
                <div class="col s6 z-depth-2">
                    <h2>Log in</h2>
                    <form method="post" action="php/actions/login.php">
                        <input type='email' name='email' placeholder="Email" />
                        <input type='password' name='password' placeholder="Password" />
                        <input type='submit' value='Log in' />
                    </form>
                </div>
                <div class="col s6 z-depth-2">
                    <h2>Sign Up</h2>
                    <form method="post" action="php/actions/signup.php">
                        <input type='text' name="username" placeholder="Username" />
                        <input type='email' name='email' placeholder="Email" />
                        <input type='password' name='password' placeholder="Password" />
                        <input type='submit' value='Sign up' />
                    </form>
                </div>
            </div>
        </div>

        <?php require_once "php/requires/footer.php" ?>

        <!--JavaScript at end of body for optimized loading-->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>