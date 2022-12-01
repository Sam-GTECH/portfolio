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
        <a href="index.php">go back</a>

        <h2>Users List</h2>
        <?php
        $sql = "SELECT * FROM users"; 
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $userdata = $pre->fetchAll(PDO::FETCH_ASSOC); ?>
        
        <ol>
            <?php
            foreach($userdata as $user){ ?>
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


        <h2>Modifie Main</h2>
        <form method="post" action="php/actions/main_modifie.php" enctype="multipart/form-data">
            <textarea name="head1" type="text" placeholder="update title ?"></textarea>
            <textarea name="subtitle1" type="text" placeholder="wanna change first subtitle ?"></textarea>
            <textarea name="subtitle2" type="text" placeholder="what about the second subtitle ?"></textarea>
            <textarea name="simbelCardP" type="text" placeholder="update Simbel's description ?"></textarea>
            <input name="simbel-pdp.webmp" type="file">| update Simbel's image ?</input>
            <textarea name="deadlyCardP" type="text" placeholder="update Deadly's description ?"></textarea>
            <input name="deadly-pdp.png" type="file">| update Deadly's image ?</input>
            <button type="submit">i want to change this !</button>
        </form>



        <h2>Projects List</h2>
        <?php
        $sql = "SELECT * FROM projects"; 
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $projectData = $pre->fetchAll(PDO::FETCH_ASSOC) ?>
        
        <?php if (empty($projectData)): ?>
            <p>Wow! This place is empty as fuck!<br><br>How about creating a project?</p>
        <?php else: ?>
            <ol>
                <?php
                foreach($projectData as $project){ ?>
                    <li><a href="page.php?id=<?php echo $project['id'] ?>"><?php echo $project['h1'] ?></a><br>
                    <span class="email"><?php echo $project['h2'] ?></span></li>
                <?php } ?>
            </ol>
        <?php endif; ?>
        <div class="z-depth-4">
            <h3>Add a project</h3>
            <form method="post" action="php/actions/add_project.php" enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $_SESSION["user"]["id"] ?>"/>
                <h4>General data:</h4>
                <input type="text" placeholder="Project title" name="h1"/>
                <input type="text" placeholder="A short name that will be shown on the nav bar" name="nav_title"/>
                <input type="text" placeholder="Project catchphrase" name="h1"/>
                <textarea placeholder="Project description" name="description"></textarea>
                <input type="text" placeholder="What's the type of your project?" name="tab_type"/>
                <input type="text" placeholder="What's the genre of your project?" name="tab_genre"/>
                <input type="text" placeholder="What language(s) is/are used for your project?" name="tab_lang"/>
                <input type="text" placeholder="What engine is used for your project?" name="tab_engine"/>
                <input type="text" placeholder="What's the state of your project?" name="tab_status"/>
                <h4>This project is available on:</h4>
                <p>
                    <label>
                        <input type="checkbox" class="filled-in" name="tab_windows" />
                        <span>Windows</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="checkbox" class="filled-in" name="tab_mac" />
                        <span>MacOS</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="checkbox" class="filled-in" name="tab_linux" />
                        <span>Linux</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="checkbox" class="filled-in" name="tab_android" />
                        <span>Android</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="checkbox" class="filled-in" name="tab_html5" />
                        <span>Web</span>
                    </label>
                </p>
                <p>Add the parallax image: <input type="file" name="para_img" accept="image/jpg, image/png, image/jpeg, image/webp, image/gif"></p>
                <p>Add an image that will appear next to the description: <input type="file" name="description_img" accept="image/jpg, image/png, image/jpeg, image/webp, image/gif"></p>
                <p>Add the images that will be showcased (up to 5): <input type="file" name="upload[]" accept="image/jpg, image/png, image/jpeg, image/webp, image/gif" multiple></p>
                <h4>Download links (up to 3):</h4>
                <p>
                    Download Link 1: <input type="text" placeholder="https://..." name="download1"/>
                    Shown Text 1: <input type="text" placeholder="Github/Gamejolt/MediaFire" name="download_text1"/>
                </p>
                <p>
                    Download Link 2: <input type="text" placeholder="https://..." name="download2"/>
                    Shown Text 2: <input type="text" placeholder="Github/Gamejolt/MediaFire" name="download_text2"/>
                </p>
                <p>
                    Download Link 3: <input type="text" placeholder="https://..." name="download3"/>
                    Shown Text 3: <input type="text" placeholder="Github/Gamejolt/MediaFire" name="download_text3"/>
                </p>
                <p>
                    <label>
                        <input type="checkbox" class="filled-in" name="other_admin" />
                        <span>Did the other admin worked on this project?</span>
                    </label>
                </p>
                <input type="submit" value="Add a project">
            </form>
        </div>

        <?php require_once "php/requires/footer.php" ?>

        <!--JavaScript at end of body for optimized loading-->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>