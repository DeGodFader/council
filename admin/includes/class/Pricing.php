<?php 

    class PRICING extends PARENTS{
        protected $table="pricing";
        var $ID;
        var $Name;
        var $Amount;

        function Edit($Name, $Amount){
            global $db;
            $query="UPDATE pricing SET";
            $query .=" Amount='$Amount' WHERE Name='$Name'";
            $db->query($query);
        }
    }

    $Pr=new PRICING;
?>