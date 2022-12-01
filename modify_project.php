<!DOCTYPE html>
<html lang="EN">
    <?php
        require_once "php/requires/config.php";
        $sql = "SELECT * FROM projects WHERE id=:id"; 
        $dataBinded=array(
            ':id' => $_GET['id'],
        );
        $pre = $pdo->prepare($sql);
        $pre->execute($dataBinded);
        $pageProject = $pre->fetch(PDO::FETCH_ASSOC);

        if (!isset($pageProject) || empty($pageProject)) {
            header("Location:index.php");
            exit();
        };

        print_r($pageProject);
        echo empty($pageProject["download2"]);
        echo "<br>id=".$_GET["id"];
        echo $pageProject["h1"]
    ?>
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

        <div class="z-depth-4">
            <h3>Modify the project <?php echo $project["h1"] ?></h3>
            <?php if (isset($_SESSION['error'])): ?>
                <div class="error_box">
                    <p><?php echo $_SESSION["error"] ?></p>
                </div>
            <?php
                endif;
                unset($_SESSION['error']);
            ?>
            <form method="post" action="php/actions/modify_project.php" enctype="multipart/form-data">
                <input type="hidden" name="user_id" value="<?php echo $_SESSION["user"]["id"] ?>"/>
                <input type="hidden" name="id" value="<?php echo $project["id"] ?>"/>
                <input type="hidden" name="old_nav_title" value="<?php echo $project["nav_title"] ?>"/>
                <h4>General data:</h4>
                <input type="text" placeholder="Project title" name="h1" value="<?php echo $project["h1"] ?>"/>
                <input type="text" placeholder="A short name that will be shown on the nav bar" name="nav_title" value="<?php echo $project["nav_title"] ?>"/>
                <input type="text" placeholder="Project catchphrase" name="h2" value="<?php echo $project["h2"] ?>"/>
                <textarea placeholder="Project description" name="description"><?php echo $project["description"] ?></textarea>
                <input type="text" placeholder="What's the type of your project?" name="tab_type" value="<?php echo $project["tab_type"] ?>"/>
                <input type="text" placeholder="What's the genre of your project?" name="tab_genre" value="<?php echo $project["tab_genre"] ?>"/>
                <input type="text" placeholder="What language(s) is/are used for your project?" name="tab_lang" value="<?php echo $project["tab_lang"] ?>"/>
                <input type="text" placeholder="What engine is used for your project?" name="tab_engine" value="<?php echo $project["tab_engine"] ?>"/>
                <input type="text" placeholder="What's the state of your project?" name="tab_status" value="<?php echo $project["tab_status"] ?>"/>
                <h4>This project is available on:</h4>
                <p>
                    <label>
                        <input type="checkbox" class="filled-in" name="tab_windows" <?php echo $project["tab_windows"]==1?"checked":"" ?> />
                        <span>Windows</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="checkbox" class="filled-in" name="tab_mac" <?php echo $project["tab_mac"]==1?"checked":"" ?> />
                        <span>MacOS</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="checkbox" class="filled-in" name="tab_linux" <?php echo $project["tab_linux"]==1?"checked":"" ?> />
                        <span>Linux</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="checkbox" class="filled-in" name="tab_android" <?php echo $project["tab_android"]==1?"checked":"" ?> />
                        <span>Android</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="checkbox" class="filled-in" name="tab_html5" <?php echo $project["tab_html5"]==1?"checked":"" ?> />
                        <span>Web</span>
                    </label>
                </p>
                <img src="<?php echo $project["para_img"] ?>">
                <p>Import a new parallax image: <input type="file" name="para_img" accept="image/jpg, image/png, image/jpeg, image/webp, image/gif"></p>
                <img src="<?php echo $project["description_img"] ?>">
                <p>Import a new image that will appear next to the description: <input type="file" name="description_img" accept="image/jpg, image/png, image/jpeg, image/webp, image/gif"></p>
                <?php for ($i=1; $i < 6; $i++): ?>
                    <?php if (isset($pageProject["showcase_img".$i])): ?>
                        <img src="<?php echo $pageProject["showcase_img".$i] ?>" alt="Showcase image N°<?php echo $i ?>">
                    <?php endif; ?>
                <?php endfor ?>
                <p>Add the images that will be showcased (up to 5): <input type="file" name="upload[]" accept="image/jpg, image/png, image/jpeg, image/webp, image/gif" multiple></p>
                <h4>Download links (up to 3):</h4>
                <p>
                    Download Link 1: <input type="text" placeholder="https://..." name="download1" value="<?php echo $project["download1"] ?>"/>
                    Shown Text 1: <input type="text" placeholder="Github/Gamejolt/MediaFire" name="download_text1" value="<?php echo $project["download_text1"] ?>"/>
                </p>
                <p>
                    Download Link 2: <input type="text" placeholder="https://..." name="download2" value="<?php echo $project["download2"] ?>"/>
                    Shown Text 2: <input type="text" placeholder="Github/Gamejolt/MediaFire" name="download_text2" value="<?php echo $project["download_text2"] ?>"/>
                </p>
                <p>
                    Download Link 3: <input type="text" placeholder="https://..." name="download3" value="<?php echo $project["download3"] ?>"/>
                    Shown Text 3: <input type="text" placeholder="Github/Gamejolt/MediaFire" name="download_text3" value="<?php echo $project["download_text3"] ?>"/>
                </p>
                <p>
                    <label>
                        <input type="checkbox" class="filled-in" name="other_admin" />
                        <span>Did the other admin worked on this project?</span>
                    </label>
                </p>
                <input type="submit" value="Modify the project">
            </form>
        </div>

        <?php require_once "php/requires/footer.php" ?>

        <!--JavaScript at end of body for optimized loading-->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>