<?php 
require_once "../requires/config.php"; 
$sql = "UPDATE users SET is_admin=:admin WHERE username=:username";
$dataBinded=array(
    ":admin" => $_POST["admin"],
    ":username" => $_POST["username"]
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../../admin.php')
?>