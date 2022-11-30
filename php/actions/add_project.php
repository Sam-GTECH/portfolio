<?php
    print_r($_POST);
    echo "<br>";
    print_r($_FILES);
    echo "<br>";
    print_r(count($_FILES["upload"]["name"]));

    $total = count($_FILES["upload"]["name"]);

    if ($total>5){
        $_SESSION["error"]="The number of uploaded images must be inferior to 5!";
        header("Location:admin.php");
        exit();
    }

    for( $i=0 ; $i < $total ; $i++ ) {
        if ($_FILES["upload"]["error"][$i]!=0){
            $_SESSION["error"]="An error has occured when uploading the following image: ".$_FILES["upload"]["name"][$i];
            header("Location:admin.php");
            exit();
        }
    }

    exit();
?>