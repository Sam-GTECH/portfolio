<?php 
require_once "../requires/config.php"; 
$sql = "DELETE FROM users WHERE username=:username";
$dataBinded=array(
    ":username" => $_POST["username"]
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../../admin.php')
?>