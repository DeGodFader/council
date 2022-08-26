<?php 
    include("../admin/includes/init.php");
    if(isset($_POST["KYC_V"])){
    $Per=$Us->S_Par($_SESSION["ID"]);
    $kyc->File($_FILES["front"]);
    $kyc->File($_FILES["back"]);
    $kyc->File($_FILES["half_card"]);
    $kyc->New($_POST['Name'],$_POST['ID_Num'], $Per->Name, $Per->Tell, $Per->Email, $Per->ID);
    $sess->redir("index.php");
    $_SESSION["KYC"]=2;
    }
    else{$sess->redir("profile.php");}


?>