<?php 
require_once "../requires/config.php"; 

$to=($post);
$targetProject=$_POST[""];
$header=$_SESSION["user"];


mail($to, "feedbacks from ".$targetProject, $content, $header)


header('Location:../../index.php');//on le redirige sur la page d'accueil du site !
?>