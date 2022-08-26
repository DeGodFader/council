<?php 

    class ONLINE_COURSE extends PARENTS{
        protected $table="online_courses";
        var $ID;
        var $Name;
        var $Link;

        function New($Name, $Link){
            global $db;
            $query="INSERT INTO online_courses(Name, Link)";
            $query .=" VALUES ('$Name', '$Link')";
            $db->query($query);
        }

        function edit($Name, $Link, $ID){
            global $db;
            $query="UPDATE online_courses SET";
            $query .=" Name='$Name', Link='$Link' WHERE ID=$ID";
            $db->query($query);
        }

    }


    $ONC= new ONLINE_COURSE;
?>