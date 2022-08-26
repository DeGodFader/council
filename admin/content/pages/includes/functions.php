<?php
    include("../../../includes/init.php");
    if(isset($_GET["Del"])){
        $Id=$_GET["id"];
        if(isset($_GET["Del"])=="Yes"){
           $VC->Delete($Id);
           $sess->redir("../videos.php?E=SC");
        }
        else{
            $sess->redir("../videos.php?E=SC");  
        }
    }

    if(isset($_GET["Dele"])){
        $Id=$_GET["id"];
        if(isset($_GET["Dele"])=="Yes"){
           $LV->Delete($Id);
           $sess->redir("../videos.php?E=VC");
        }
        else{
            $sess->redir("../videos.php?E=VC");  
        }
    }

    if(isset($_GET["Del_user"])){
        $Id=$_GET["d_user"];
        if(isset($_GET["Del_user"])=="Yes"){
           $Us->Delete($Id);
           $sess->redir("../users.php");
        }
        else{
            $sess->redir("../users.php");  
        }
    }

    
    if(isset($_GET["Com_Stat"])){
        $ID=$_GET["Com_Stat"];
        $Comm->Status_C($ID,$_GET["Val"]);
        $sess->redir("../comments.php");
    }

    if(isset($_GET["Del_com"])){
        $Id=$_GET["d_com"];
        if(isset($_GET["Del_com"])=="Yes"){
           $Comm->Delete($Id);
           $sess->redir("../comments.php");
        }
        else{
            $sess->redir("../comments.php");  
        }
    }

    if(isset($_GET["Sanc"])){
        $Id=$_GET["id"];
        if($_GET["Sanc"]=="Acc"){
          $Fr->Change_Stat($Id,1);
          $sess->redir("../forms.php?M=U");
        }
        elseif($_GET["Sanc"]=="Den"){
            $Fr->Change_Stat($Id,2); 
            $sess->redir("../forms.php?M=U");
        }
    }
    
    if(isset($_GET["KYC"])){
        if($_GET["KYC"]=="Acc"){
            $Us->KYC($_GET["ID"],1);
            $sess->redir("../KYC.php");
        }
        if($_GET["KYC"]=="Den"){
            $Us->KYC($_GET["ID"],0);
            $sess->redir("../KYC.php");
        }
    }

    if(isset($_GET["Del_W"])){
        $Id=$_GET["ID"];
        if(isset($_GET["Del_W"])=="Yes"){
           $Comm->Delete($Id);
           $sess->redir("../online_courses.php");
        }
        else{
            $sess->redir("../onlin_courses.php");  
        }
    }

?>