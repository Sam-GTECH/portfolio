<?php 
require_once "../requires/config.php"; 

$to=($_SESSION['formTo']);
$targetProject=$_POST["group1"];
$header=$_SESSION["user"];


if mail($to, "feedbacks from ".$targetProject, $content, $header){
    header('Location:../../index.php');
    echo "<script type='text/javascript'>M.toast({html:'mail sent successfully'})</script>"
}
else{
    header('Location:../../index.php');
    echo "<script type='text/javascript'>M.toast({html:'an issue was encountered, please try again'})</script>"
}



?>