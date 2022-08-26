<?php
    class KYC extends PARENTS{
        protected $table="kyc";
        var $ID;
        var $Name;
        var $Number;
        var $P_Name;
        var $Tell;
        var $Email;
        var $File;
        var $File2;
        var $File3;
        var $P_ID;
        var $error=array(); 
        var $files=array();
        var $target=KYC_Img;
        var  $Upload_errors=array(
            UPLOAD_ERR_OK => "Upload Successfull",
            UPLOAD_ERR_INI_SIZE => "Upload file exceeds file directory size",
            UPLOAD_ERR_FORM_SIZE => "Upload file exceeds expected file seize",
            UPLOAD_ERR_PARTIAL => "The file was partialy uploaded",
            UPLOAD_ERR_NO_FILE => "No file uploaded",
            UPLOAD_ERR_NO_TMP_DIR => "No temporary folder found",
            UPLOAD_ERR_CANT_WRITE => "Failed to write file",
            UPLOAD_ERR_EXTENSION => "Unexpected extension"
        );
    

        function New($Name, $Num, $P_Name, $Tell, $Email, $ID){
            global $db;
            $query="INSERT INTO kyc(Name, Number,File, File2, File3, P_Name, Tell, Email, P_ID)";
            $query .=" VALUES ('$Name', '$Num','".$this->files[0]."','".$this->files[1]."', '".$this->files[2]."', '$P_Name', '$Tell', '$Email', '$ID')";
            $db->query($query);
            $query="UPDATE users SET";
            $query .=" KYC=2 WHERE ID=$ID";
            $db->query($query);
        }

        function File($file){
            if(empty($file) || !$file || !is_array($file)){
                $this->error="There was no file";
                return false;
            }
            elseif($file['error']!=0){
                $this->error=$this->Upload_errors[$file['error']];
                return false;
            }
            else{
                $this->File=basename($file['name']);
                $this->path=$file['tmp_name'];
                $this->File_Type=$file['type'];
                $this->target .= "/" .$this->File;
                $this->files[]=$this->File;
                $this->save();
            }
        }

        function save(){
            if(!empty($this->error)){
                return false;
            }
            elseif(empty($this->File) || empty($this->path)){
                $this->error[]="File not present";
                return false;
            }
            if(move_uploaded_file($this->path, $this->target)){
                    $this->target=KYC_Img;

                    return $this->File;
            }
            else{
                return true;
            }
    
        }
    }
    
$kyc=new KYC;

?>