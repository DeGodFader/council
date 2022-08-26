<?php 
    class VIDEO_CAT extends PARENTS{
        protected $table="video_categories";
        var $ID;
        var $Primary_C;
        var $Secondary_C;

        

        function New($Primary, $Secondary){
            global $db;
            $query="INSERT INTO video_categories(Primary_C, Secondary_C)";
            $query .=" VALUES ('$Primary','$Secondary')";
            $db->query($query);
        }

        function Update($Primary, $Secondary, $ID){
            global $db;
            $query="UPDATE video_categories SET";
            $query .=" Primary_C='$Primary', Secondary_C='$Secondary' WHERE ID=$ID";
            $db->query($query);
        }

    }

$VC= new VIDEO_CAT;

?>