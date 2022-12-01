<?php
require_once "../requires/config.php";




$valueModifier= array(
    "simbelCardP" => $_POST["simbelCardP"],
    "deadlyCardP" => $_POST["deadlyCardP"],
    //"simbel-pdp.webmp" => $_POST["simbel-pdp.webmp"],
    //"deadly-pdp.png" => $_POST["deadly-pdp.png"]
);



foreach($valueModifier as $key => $modifier){
    print_r($modifier);
    print_r(gettype($modifier));
    if (!empty($valueModifier[$modifier])){
        if(gettype($valueModifier[$modifier])==string){
            $sql = "UPDATE mainprinting SET printing=:printing WHERE place=:place";
            $dataBinded= array(
                ":printing" => $valueModifier[$modifier],
                ":place" => $modifier
            );
            print_r('ratio');
            $pre = $pdo->prepare($sql);
            $pre->execute($dataBinded);
        }elseif(gettype($valueModifier[$modifier])!=NULL){
            $destination="../../img/".$modifier;
            move_uploaded_file($_FILES[$modifier],$destination);
        }
    }
};

//header('Location:../../index.php');


?>