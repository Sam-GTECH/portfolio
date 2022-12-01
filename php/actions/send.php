<?php 
$to=($_SESSION['formTo']);
$targetProject=$_POST["group1"];
$content=($_POST["content"]);
$mail=($_POST["email"]);


if (mail($to, "feedbacks from ".$targetProject, $content)){
    header('Location:../../index.php');
    echo "<script type='text/javascript'>M.toast({html:'mail sent successfully'})</script>";
    exit();
}else{
    header('Location:../../index.php');
    echo "<script type='text/javascript'>M.toast({html:'an issue was encountered, please try again'})</script>";
    exit();
}
?>