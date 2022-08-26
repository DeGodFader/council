<?PHP require_once("includes/init.php")?>

<?php 
    $sess->Logout();
    header("location:../index.php");
?>