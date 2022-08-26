<?php

    class LEARNING_VID extends PARENTS{
        protected $table="learning_videos";
        var $ID;
        var $Title;
        var $Topic;
        var $Genre;
        var $Link;
        var $Num_Watched;
        var $Source;
        var $G_T;

        function All_Head(){
            $All=$this->S_ALL();
            $Vids=array();
            $Genres=array();
            $Topics=array();
            foreach($All as $one){
                $one->Genre=str_replace(" ","",$one->Genre);
                $one->Topic=str_replace(" ","",$one->Topic);
                $one->G_T=str_replace(" ","",$one->G_T);
                if(!in_array("$one->Genre",$Genres)){$Genres[]=$one->Genre;}
                if(!in_array([$one->Topic,$one->G_T],$Topics)){$Topics[]=[$one->Topic,$one->G_T];}
            }
            foreach($All as $al){
                $al->Link=str_replace("560","",$al->Link);
                $al->Link=str_replace("315","",$al->Link);
                $Vids[]=$al;
            }
            return([$Genres,$Topics,$Vids]);
        }
        function selected($val){
            $vids=array();
            $Vids=$this->Search($val,"Topic");
            foreach($Vids as $Vid){
                $Vid->Link=str_replace('width="560"',"",$Vid->Link);
                $Vid->Link=str_replace("315","200",$Vid->Link);
                $vids[]=$Vid;
            }
            return($vids);
        }
        function resizer(){
            $Vids=$this->S_All();
            $vids=array();
            foreach($Vids as $Vid){
                $Vid->Link=str_replace('width="560"',"",$Vid->Link);
                $Vid->Link=str_replace('height="315"',"",$Vid->Link);
                $vids[]=$Vid;
            }
            return($vids);
        }
        function New($Genre, $Title, $Topic, $Source, $Link,$C_ID){
            global $db;
            $Tags= $Genre . " " . $Title . " " . $Topic . " " . $Source;
            $query="INSERT INTO learning_videos(Genre, Title, Topic, Source, Link, Tags, G_T, C_ID)";
            $query .=" VALUES ('$Genre', '$Title', '$Topic', '$Source', '$Link', '$Tags','$Genre', '$C_ID')";
            $db->query($query);
        }

        function Update($Title, $Source, $ID){
            global $db;
            $query="UPDATE learning_videos SET";
            $query .=" Title='$Title', Source='$Source' WHERE ID=$ID";
            $db->query($query);
        }
        


    }

    $LV= new LEARNING_VID;

?>