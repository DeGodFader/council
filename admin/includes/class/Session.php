<?php

use SESSION as GlobalSESSION;

    class SESSION{
        function __construct(){
            session_start();
        }

        function Login($user){
            $_SESSION["Name"]=$user->Name;
            $_SESSION["Level"]=$user->Level;
            $_SESSION["ID"]=$user->ID;
            $_SESSION["Tell"]=$user->Tell;
            $_SESSION["Email"]=$user->Email;
            $_SESSION["KYC"]=$user->KYC;
            $this->redir("../");
        }

        function test(){
            if(isset($SESSION["Level"])){
                return true;
            }
            else{false;}
        }

        function LOGOUT(){
            unset($_SESSION["Name"]);
            unset($_SESSION["Level"]);
            unset($_SESSION["ID"]);
            unset($_SESSION["Tell"]);
        }

        function redir($loc){
            header('location:' .$loc .'');
        }
        
    }

    $sess=new SESSION;
?>