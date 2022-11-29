<?php 
require_once "../requires/config.php"; 
$sql = "INSERT INTO users(username,email,password) VALUES(:username,:email,sha1(:password))";
$dataBinded=array(
    ':username'   => $_POST['username'],
    ':email'=> $_POST['email'],
    ':password'=> "SHA'(02J1%µ3£DU1¨DJ?£30SKJ+¨012UJ¨)]$$@1997'.".$_POST['password']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


//copy past allègre de login
$sql = "SELECT * FROM users WHERE email='".$_POST['email']."' AND password='".sha1("SHA'(02J1%µ3£DU1¨DJ?£30SKJ+¨012UJ¨)]$$@1997'.".$_POST['password'])."'"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($user)){ //vérifie si le resultat est vide !
     //non connecté
     echo "Utilisateur ou mot de passe incorrect !";
}else{
     $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
}

header('Location:../../index.php');//on le redirige sur la page d'accueil du site !



?>