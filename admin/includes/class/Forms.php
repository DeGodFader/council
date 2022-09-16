<?php

    class FORM extends PARENTS{
        protected $table="certificate_requests";
        var $ID;                var $Form_Cat;
        var $Content;           var $User_Name;
        var $User_Mail;         var $User_Tell;
        var $Reason;            var $Request_For;
        var $C_Name_Detail;     var $Birth_Date;
        var $Place_of_B;        var $Mother_Name;
        var $Father_Name;       var $Means;
        var $Number_of_C;       var $D_Address;
        var $D_Town;            var $D_Street;
        var $D_Country;         var $Wife_Name;
        var $Husband_Name;      var $Date_of_Marriage;
        var $Death_Date;        var $Occupation;
        var $Age_At_Death;      var $Spouse_Name;
        var $Status;            var $Place_o_Death;
        var $Date_Issued;       var $Transaction_ID;
        var $Account_Name;      var $Amount;
        var $Type;

        function New_B($User_Name, $User_Mail, $User_Tell, $Reason, $Request_For, $C_Name_Detail,$Birth_Date, $Place_of_B, $Date_Issued, $Father_Name, $Mother_Name, $Number_of_C, $Means, $Type, $D_Address, $D_Country, $D_Street, $D_Town, $Cat, $Tans, $Amount){
            global $db;
            $query="INSERT INTO certificate_requests(User_Name, Account_Name, User_Mail, User_Tell, Request_For, Reason, C_Name_Detail, Birth_Date, Place_of_B, Father_Name, Mother_Name, Date_Issued, Means, Number_of_C,Type, D_Address, D_Country, D_Street, D_Town, Form_Cat, Transaction_ID, Amount)";
            $query .=" VALUES ('$User_Name','". $_SESSION['Name'] . "', '$User_Mail', '$User_Tell', '$Request_For', '$Reason', '$C_Name_Detail', '$Birth_Date', '$Place_of_B', '$Father_Name', '$Mother_Name','$Date_Issued', '$Means', '$Number_of_C', '$Type', '$D_Address', '$D_Country', '$D_Street', '$D_Town', '$Cat','$Tans', '$Amount')";
            $db->query($query);
        }

        function New_D($User_Name, $User_Mail, $User_Tell,$Reason,  $C_Name_Detail, $Death_Date,$Place_of_Death,$Date_of_Bith,$Age, $Date_Issued ,$Wife_Name, $Occupation, $Number_of_C,$Means, $Type, $D_Address, $D_Country, $D_Street, $D_Town, $Cat, $Tans, $Amount){
            global $db;
            $query="INSERT INTO certificate_requests(User_Name, Account_Name, User_Mail, User_Tell, Reason, C_Name_Detail, Death_Date, Place_o_Death, Birth_Date, Age_At_Death, Spouse_Name, Occupation, Date_Issued, Number_of_C, Means,Type, D_Address, D_Country, D_Street, D_Town, Form_Cat, Transaction_ID, Amount)";
            $query .=" VALUES ('$User_Name','". $_SESSION['Name'] . "', '$User_Mail', '$User_Tell','$Reason',  '$C_Name_Detail', '$Death_Date', '$Place_of_Death', '$Date_of_Bith', '$Age', '$Wife_Name', '$Occupation','$Date_Issued', '$Number_of_C', '$Means', '$Type', '$D_Address', '$D_Country', '$D_Street', '$D_Town', '$Cat','$Tans', '$Amount')";
            $db->query($query);
        }

        function New_M($User_Name, $User_Mail, $User_Tell, $Reason, $Request_For, $Husband_Name,$Wife_Name, $Date_Wed, $Date_Issued, $Number_of_C,$Means, $Type, $D_Address, $D_Street, $D_Town, $D_Country, $Cat, $Tans, $Amount){
            global $db;
            $query="INSERT INTO certificate_requests(User_Name, Account_Name, User_Mail, User_Tell, Request_For, Reason, Husband_Name, Wife_Name, Date_of_Marriage, Date_Issued, Means, Number_of_C, Type, D_Address, D_Country, D_Street, D_Town, Form_Cat, Transaction_ID, Amount)";
            $query .=" VALUES ('$User_Name','". $_SESSION['Name'] . "', '$User_Mail', '$User_Tell', '$Request_For', '$Reason', '$Husband_Name', '$Wife_Name', '$Date_Wed', '$Date_Issued','$Means', '$Number_of_C', '$Type', '$D_Address', '$D_Country', '$D_Street', '$D_Town', '$Cat','$Tans', '$Amount')";
            $db->query($query);
        }

        function Change_Stat($term, $Val){
            global $db; 
            $query="UPDATE certificate_requests SET";
            $query .=" Status=$Val WHERE ID=$term";
            $db->query($query);
        }
    }

    $Fr=new FORM;


?>