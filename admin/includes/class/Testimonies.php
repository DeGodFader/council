
<?php

    class TESTIMONY extends PARENTS{
        protected $table="testimonies";
        var $ID;
        var $Content;
        var $Writer;
        var $Tell;
        var $File;
        var $Status;
        var $Writer_ID;
        var $File_Type;
        var $path;
        var $error=array(); 
        var $target=Com_Img;
        var $Date;
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
    

        function New(){
            global $db;
            $date=date('y/m/d');
            $query="INSERT INTO testimonies(Writer, Tell, Content,File, File_Type, Status, Date)";
            $query .=" VALUES ('$this->Writer', '$this->Tell','$this->Content' ,'$this->File', '$this->File_Type' , '0', '$date')";
            $db->query($query);
        }

        function File($file, $Con){
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
                $this->Writer=$Con[0];
                $this->Tell=$Con[1];
                $this->Content=$Con[2];
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
            echo $this->target;
            if(move_uploaded_file($this->path, $this->target)){
                    $this->New();
                    unset($this->target);
                    return true;
            }
            else{
                return true;
            }
    
        }

        function Status_C($ID, $Stat){
            global $db;
            $query="UPDATE testimonies SET";
            $query .=" Status=$Stat WHERE ID=$ID";
            $db->query($query);
        }
        
    }

    $Comm= new TESTIMONY;
?>