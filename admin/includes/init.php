<?php
     defined('DS')? null : define('DS', DIRECTORY_SEPARATOR);
     defined("Main_Path")? null : define('Main_Path', 'C:' . DS . 'xampp' . DS . 'htdocs' . DS . 'council');
     defined("Com_Img")? null : define("Com_Img", Main_Path . DS . 'admin' . DS . 'img'. DS . 'testimonies');
     defined("KYC_Img")? null : define("KYC_Img", Main_Path . DS . 'admin' . DS . 'img'. DS . 'KYC');
    require_once("class/DB.php");
    require_once("class/Parent.php");
    require_once("class/Persons.php");
    require_once("class/Session.php");
    require_once("class/Services.php");
    require_once("class/USers.php");
    require_once("class/Testimonies.php");
    require_once("class/Jobs.php");
    require_once("class/Learnin_Videos.php");
    require_once("class/Video_Cat.php");
    require_once("class/Forms.php");
    require_once("class/KYC.php");
    require_once("class/Online_Courses.php");
?>