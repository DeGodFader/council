<?php
    class PARENTS{
        function  S_All(){
            global $db;
            $q="SELECT * FROM " . $this->table ." ";
            $D=($db->query($q));
            $Array=array();
            while($row=mysqli_fetch_assoc($D)){
                 $Array[]=($this->init($row));
            }
            return $Array;
        }
    
        function init($U){
            global $db;
            $Ob=new $this;
            foreach($U as $K=>$V){
                if($this->There_Var($K)){
                    $Ob->$K=$V;
                }
            }
            // print_r($Ob);
            return $Ob;
        }
    
        function There_Var($K){
            $Vars=get_object_vars($this);
            return (array_key_exists($K,$Vars));
        }
    
        function  S_Par($ID){
            global $db;
            $q="SELECT * FROM " . $this->table ." WHERE ID=$ID";
            $D=(mysqli_fetch_assoc($db->query($q)));
            if(!empty($D)){
            return($this->init($D));
            }
        } 

        function Search($term, $Loc){
            global $db;
            $q="SELECT * FROM" . " $this->table " . "WHERE ". $Loc ." LIKE " . "'%$term%'" . " ";
            $D=($db->query($q));
            $Array=array();
            while($row=mysqli_fetch_assoc($D)){
                 $Array[]=($this->init($row));
            }
            return $Array;
        }

        function F_All($Val){
            $Vals=array();
            $vals=$this->S_All();
            foreach($vals as $val){
                $val->Val=str_replace(" ","",$val->$Val);
                if(!in_array("$val->Val",$Vals)){$Vals[]=$val->Val;}
            }
            return($Vals);
        }

        function F_Par($val, $Col){
            global $db;
            $val=str_replace(" ","", $val);
            $q="SELECT * FROM " . $this->table ." WHERE " . $Col . "='$val'";
            $D=(mysqli_fetch_assoc($db->query($q)));
            if(!empty($D)){
            return($this->init($D)); 
            }
        }

        function Delete($Cat){
            global $db;
            $query="DELETE FROM ". $this->table ." WHERE ID={$Cat}";
            $db->query($query);
        }

    }

?>