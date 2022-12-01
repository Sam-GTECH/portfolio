<?php
    require_once "../requires/config.php"; 
    if (empty($_POST['h1'])) {
        $_SESSION["error"]="The project title must not be empty!";
        header("Location:../../admin.php");
        exit();
    } elseif (empty($_POST['h2'])) {
        $_SESSION["error"]="The project catchphrase must not be empty!";
        header("Location:../../admin.php");
        exit();
    } elseif (empty($_POST['nav_title'])) {
        $_SESSION["error"]="The short name must not be empty!";
        header("Location:../../admin.php");
        exit();
    } elseif (empty($_POST['description'])) {
        $_SESSION["error"]="The project description must not be empty!";
        header("Location:../../admin.php");
        exit();
    } elseif (empty($_POST['tab_type'])) {
        $_SESSION["error"]="The type must be indicated!";
        header("Location:../../admin.php");
        exit();
    } elseif (empty($_POST['tab_genre'])) {
        $_SESSION["error"]="The genre must be indicated!";
        header("Location:../../admin.php");
        exit();
    } elseif (empty($_POST['tab_lang'])) {
        $_SESSION["error"]="The language used must be indicated!";
        header("Location:../../admin.php");
        exit();
    } elseif (empty($_POST['tab_engine'])) {
        $_SESSION["error"]="The engine used must be indicated";
        header("Location:../../admin.php");
        exit();
    } elseif (empty($_POST['tab_status'])) {
        $_SESSION["error"]="The status must be indicated";
        header("Location:../../admin.php");
        exit();
    }

    $total = count($_FILES["upload"]["name"]);

    if ($total>5){
        $_SESSION["error"]="The number of uploaded images must be inferior to 5!";
        header("Location:../../admin.php");
        exit();
    }

    for( $i=0 ; $i < $total ; $i++ ) {
        if ($_FILES["upload"]["error"][$i]!=0){
            $_SESSION["error"]="An error has occured when uploading the following image: ".$_FILES["upload"]["name"][$i];
            header("Location:../../admin.php");
            exit();
        }
    }

    $folder = str_replace(" ", "-", strtolower($_POST["nav_title"]));
    if (!is_dir("../../img/".$folder)){
        if (!mkdir("../../img/".$folder)){
            $_SESSION["error"]="An internal error has occured. Please try again.";
            header("Location:../../admin.php");
            exit();
        }
    }

    $destinationPara = "img/".$folder."/".$_FILES['para_img']['name'];
    move_uploaded_file($_FILES['para_img']['tmp_name'],"../../".$destinationPara);
    $destinationDesc = "img/".$folder."/".$_FILES['description_img']['name'];
    move_uploaded_file($_FILES['description_img']['tmp_name'],"../../".$destinationDesc);
    $destinationShow = array();
    for( $i=0 ; $i < $total ; $i++ ) {
        if (isset($_FILES['upload']['name'][$i])) {
            $destinationShow[$i] = "img/".$folder."/".$_FILES['upload']['name'][$i];
            move_uploaded_file($_FILES['upload']['tmp_name'][$i],"../../".$destinationShow[$i]);
        } else {
            $destinationShow[$i] = NULL;
        }
    }

    $sql = "INSERT INTO projects(user_id,nav_title,para_img,h1,h2,description,description_img,tab_type,tab_genre,tab_lang,tab_engine,tab_status,tab_windows,tab_mac,tab_linux,tab_html5,tab_android,showcase_img1,showcase_img2,showcase_img3,showcase_img4,showcase_img5,download1,download_text1,download2,download_text2,download3,download_text3, pair_work) VALUES(:user_id,:nav_title,:para_img,:h1,:h2,:description,:description_img,:tab_type,:tab_genre,:tab_lang,:tab_engine,:tab_status,:tab_windows,:tab_mac,:tab_linux,:tab_html5,:tab_android,:showcase_img1,:showcase_img2,:showcase_img3,:showcase_img4,:showcase_img5,:download1,:download_text1,:download2,:download_text2,:download3,:download_text3,:pair_work)";
    $dataBinded=array(
        "user_id"          => $_POST["user_id"],
        ":nav_title"       => $_POST['nav_title'],
        ":para_img"        => $destinationPara,
        ":h1"              => $_POST['h1'],
        ":h2"              => $_POST['h2'],
        ":description"     => $_POST['description'],
        ":description_img" => $destinationDesc,
        ":tab_type"        => $_POST['tab_type'],
        ":tab_genre"       => $_POST['tab_genre'],
        ":tab_lang"        => $_POST['tab_lang'],
        ":tab_engine"      => $_POST['tab_engine'],
        ":tab_status"      => $_POST['tab_status'],
        ":tab_windows"     => isset($_POST['tab_windows'])?1:0,
        ":tab_mac"         => isset($_POST['tab_mac'])?1:0,
        ":tab_linux"       => isset($_POST['tab_linux'])?1:0,
        ":tab_html5"       => isset($_POST['tab_html5'])?1:0,
        ":tab_android"     => isset($_POST['tab_android'])?1:0,
        ":showcase_img1"   => $destinationShow[0],
        ":showcase_img2"   => $destinationShow[1],
        ":showcase_img3"   => $destinationShow[2],
        ":showcase_img4"   => $destinationShow[3],
        ":showcase_img5"   => $destinationShow[4],
        ":download1"       => $_POST['download1'],
        ":download_text1"  => $_POST['download_text1'],
        ":download2"       => $_POST['download2'],
        ":download_text2"  => $_POST['download_text2'],
        ":download3"       => $_POST['download3'],
        ":download_text3"  => $_POST['download_text3'],
        ":pair_work"       => isset($_POST["other_admin"])?1:0
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);

    //header("Location:../../admin.php");
    exit();
?>