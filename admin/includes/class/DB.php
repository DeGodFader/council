<?php

    class Database{
        protected $Con;
        public function __construct(){
            $this->Con=mysqli_connect('localhost','root','','council');
        }

        public function query($sql){
        return(mysqli_query($this->Con,$sql));
        }

        public function clean($str){
            return(mysqli_real_escape_string($this->Con,$str));
        }

    }
$db=new Database; 

?>