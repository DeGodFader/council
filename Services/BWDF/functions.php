<?php
        include("../../admin/includes/init.php");

    $B=$_SESSION["values"];
    print_r($B);
        foreach($B as $b){
                echo $b . "<br>";
        }
    if($_SESSION["Purp"]=="Birth"){
           $Fr->New_B($B[0],$B[1],$B[2],$B[3],$B[4],$B[5],$B[6],$B[7],$B[8],$B[9],$B[10],$B[11], $B[12],$B[13],$B[14], $B[15],$B[16], $_SESSION["Purp"]);
           echo 
           $sess->redir("../../services.php?M=2");
    }
    if($_SESSION["Purp"]=="Death"){
        $Fr->New_D($B[0],$B[1],$B[2],$B[3],$B[4],$B[5],$B[6],$B[7],$B[8],$B[9],$B[10],$B[11],$B[12],$B[13],$B[14],$B[15],$B[16],$B[17],$_SESSION["Purp"]);
        echo "Balls";
        $sess->redir("../../services.php?M=2");
    }
    if($_SESSION["Purp"]=="Marriage"){
       $Fr->New_M($B[0],$B[1],$B[2],$B[3],$B[4],$B[5],$B[6],$B[7],$B[8],$B[9],$B[10],$B[11],$B[12],$B[13],$B[14],$_SESSION["Purp"]);
       $sess->redir("../../services.php?M=2");
    }
?>
<a href="mailto:ajechasteve206@gmail.com"></a>