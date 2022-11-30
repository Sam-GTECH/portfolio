<!DOCTYPE html>
<html>
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
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="img/icon.png">

    <title><?php echo $pageProject["nav_title"] ?> - Portfolio Simbel & Deadly</title>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

    <?php require_once "php/requires/nav.php" ?>

    
    <div class="parallax-container">
        <div class="parallax"><img src="<?php echo $pageProject["para_img"] ?>"></div>
    </div>
        

    <h1 class="center animate__animated animate__fadeInDown"><?php echo $pageProject["h1"] ?></h1>
    <h2 class="center grey-text animate__animated animate__fadeIn animate__delay-1s"><?php echo $pageProject["h2"] ?></h2>

    <div class="custom-body z-depth-3">
        <div class="container">
            <div class="row">
                <div class="col s3">
                    <h2>Description</h2>
                    <p class="description-p col offset-s2"><?php echo $pageProject["description"] ?></p>
                </div>
                <div class="col s3 offset-s2 valign-wrapper">
                    <img class="screenshot" alt="A screenshot of the project" src="<?php echo $pageProject["description_img"] ?>"></img>
                </div>
            </div>
            <div class="row">
                <div class="col s3">
                    <h2>Characteristic</h2>
                    <table class="responsive-table">
                        <tbody>
                            <tr>
                                <th class="purple purple-text text-lighten-4">Type</th>
                                <td class="black white-text"><?php echo $pageProject["tab_type"] ?></td>
                            </tr>
                            <tr>
                                <th class="purple purple-text text-lighten-4">Genre</th>
                                <td class="black white-text"><?php echo $pageProject["tab_genre"] ?></td>
                            </tr>
                            <tr>
                                <th class="purple purple-text text-lighten-4">Language</th>
                                <td class="black white-text"><?php echo $pageProject["tab_lang"] ?></td>
                            </tr>
                            <tr>
                                <th class="purple purple-text text-lighten-4">Engine</th>
                                <td class="black white-text"><?php echo $pageProject["tab_engine"] ?></td>
                            </tr>
                            <tr>
                                <th class="purple purple-text text-lighten-4">Status</th>
                                <td class="black white-text"><?php echo $pageProject["tab_status"] ?></td>
                            </tr>
                            <tr>
                                <th class="purple purple-text text-lighten-4">Platforms</th>
                                <td class="black white-text">
                                    <?php
                                        if ($pageProject["tab_windows"]==1) {
                                            echo "<i class='fa-brands fa-windows os-icons'></i>";
                                        }
                                        if ($pageProject["tab_mac"]==1) {
                                            echo "<i class='fa-brands fa-apple os-icons'></i>";
                                        }
                                        if ($pageProject["tab_linux"]==1) {
                                            echo "<i class='fa-brands fa-linux os-icons'></i>";
                                        }
                                        if ($pageProject["tab_android"]==1) {
                                            echo "<i class='fa-brands fa-android os-icons'></i>";
                                        }
                                        if ($pageProject["tab_html5"]==1) {
                                            echo "<i class='fa-brands fa-html5 os-icons'></i>";
                                            echo "<i class='fa-brands fa-css3-alt os-icons'></i>";
                                        }
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="showcase">
                <h2>Video/Image Showcase</h2>


                <div class="carousel">
                    <?php for ($i=1; $i < 6; $i++): ?>
                        <a class="showcase carousel-item" href="#showcase-<?php echo $i ?>">
                            <img src="<?php echo $pageProject["showcase_img".$i] ?>" alt="Showcase image N°<?php echo $i ?>">
                        </a>
                    <?php endfor ?>
                </div>

            </div>
            <div class="center">
                <h2>Download</h2>
                <?php
                    $noDownload = (empty($pageProject["download1"]) && empty($pageProject["download2"]) && empty($pageProject["download3"]));
                    if ($noDownload) {
                        echo "<p class='download-p'><a class='btn-large disable black purple-text'><i class='material-icons'>not_interested</i></a></p>";
                    } else {
                        for ($i=1; $i < 4; $i++):
                            if (!empty($pageProject["download".$i])): ?>
                                <p class="download-p"><a href="<?php echo $pageProject["download".$i] ?>" class="waves-effect waves-light btn-large black purple-text" target="_blank"><?php echo $pageProject["download_text".$i] ?></a></p>
                        <?php endif;
                        endfor;
                    };
                ?>
            </div>
        </div>
    </div>

    <?php require_once "php/requires/footer.php" ?>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>