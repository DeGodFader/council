
<?php 
    include("includes/init.php");

    if(isset($_POST["login"])){
        $Name=$_POST["Name"]; 
        $Pass=$_POST["Passw"];
        $Users=$Us->S_ALL();
        $test=$Us->verify($Name, $Pass);
        if($test[0]==0){ 
            $user=$Us->S_Par($test[1]);
            $sess->Login($user);
        }
        elseif($test[0]==1){$_SESSION["LOG_E"]="Password"; $sess->redir("../Login.php");}
        elseif($test[0]==2){$_SESSION["LOG_E"]="No User"; $sess->redir("../Login.php");}
    }


    if(isset($_POST["signup"])){
        $Name=$_POST["Name"];
        $Name=$db->clean($Name);
        if($Us->Pres($Name)){$_SESSION["LOG_E"]="User";; $sess->redir("../Register.php");}
        else{
            $Passw=$_POST["Passw"];
            $Tell=$_POST["Tel"];
            $Email=$_POST["Email"];
            $Passc=$_POST["Passc"];
            if($Passc==$Passw){
                $Name=$db->clean($Name);
                $Tell=$db->clean($Tell);
                $Ar=$Us->Salty($Name,$Passc);
                $Pass=$Ar[0];
                $Salt=$Ar[1];
                $Us->New($Name, $Pass, $Email, $Salt, $Passc, $Tell);
                $test=$Us->Verify($Name, $Passc);
                if($test[0]==0){
                    $ID=$test[1];
                    $user=$Us->S_Par($ID);
                    $sess->Login($user);
                    $sess->redir("../index.php");
                }
            }else{$_SESSION["LOG_E"]="Pass";; $sess->redir("../Register.php");}
        }   
    }
?>

