<?php

    class USERS extends PARENTS{
        protected $table="users";
        protected $list=["Name", "Tell", "Email", "Password", "Level", "Salt", "Hint"];
        var $ID;
        var $Name;
        protected $Password;
        protected $Salt;
        var $Level;
        var $Img;
        var $Tell;
        var $Email;
        protected $Hint;
        var $KYC;
 
        private function Crack($Code,$salt){
            return (crypt($Code,$salt));
        }

        function Verify($Name, $Pass){
            global $db;
            $Users=$this->S_All();
            $i=1;
            $Name=$db->clean($Name);
            $Pass=$db->clean($Pass);
            foreach($Users as $user){
                if($i<=sizeof($Users)){               
                    if($user->Name==$Name){
                        $salt=$user->Salt;
                        $Pass= $this->Crack($Pass,$salt);
                        if($Pass==$user->Password){return [0, $user->ID];}
                        else{return [1];}
                    }
                    $i++;
                }}
            return [2];
        }
        
        function Salty($Name, $Pass){
            $N=str_replace(" ","",$Name);
            $Salt=(strrev($N));
            $Hash="$2y$12$";
            while(strlen($Salt)<22){
                $end=strlen($N);
                $l=rand(0,(strlen($N)/2));
                $Salt .=trim(substr($N,$l,$end));
            }
            $salt=substr($Salt,(strlen($Salt)-23),(strlen($Salt)));
            $Salt=$Hash . $salt;
            $Password=crypt($Pass,$Salt);
            return [$Password,$Salt];
        }

        function Pres($Name){
            $list=$this->S_All();
            foreach($list as $i){
                if($i->Name==$Name){return true;}
            }
            return false;
        }

        function New($Name, $Pass, $Email, $Salt, $hint, $Tell){
            global $db;
            $query="INSERT INTO users(Name, Password, Email, Level, Salt, Hint, Tell)";
            $query .=" VALUES ('$Name','$Pass','$Email','0', '$Salt', '$hint', $Tell)";
            $db->query($query);
        }

        function KYC($ID, $Val){
            global $db;
            $query="UPDATE users SET";
            $query .=" KYC=". $Val ." WHERE ID=$ID";
            $db->query($query);
        }

    }

    $Us=new USERS;  
?>