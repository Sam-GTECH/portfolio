<?php 
session_start();
unset($_SESSION['user']);

header('Location:../../index.php');//on le redirige sur la page d'accueil du site !
?>