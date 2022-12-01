<?php
    require_once "../requires/config.php";

    $sql = "SELECT user_id, nav_title FROM projects WHERE id=:id";
    $dataBinded=array(
        ":id" => $_GET["id"]
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $info = $pre->fetch(PDO::FETCH_ASSOC);

    $folder = str_replace(" ", "-", strtolower($info["nav_title"])).".".$info["user_id"];
    rmdir("../../img/".$folder);

    $sql = "DELETE FROM projects WHERE id=:id";
    $dataBinded=array(
        ":id" => $_GET["id"]
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);

    //header("Location:../../admin.php");
    exit();
?>