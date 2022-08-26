<?PHP   require_once("includes/init.php")?>

<?php
    if(isset($_POST["Pass"])){
    if(isset($_POST["Writter"]) && isset($_POST["W_Tell"])){
        if(isset($_POST["Comment"])){
          $Writter= $_POST["Writter"];
          $Tell=$_POST["W_Tell"];
          $Comment=$_POST["Comment"];
          $Content=[$Writter,$Tell,$Comment];
          $Comm->File($_FILES["filee"],  $Content);
          if($Comm->save()){
            $sess->redir("../index.php");}
          else{print_r($Comm->error);}
        }
        else{ echo "<h4 class='bg-primary' style='color:white'>Please enter Comment</h4>";}
    }
    else{ echo "<h4 class='bg-primary' style='color:white'>Please enter contact details</h4>";}
    }

?>