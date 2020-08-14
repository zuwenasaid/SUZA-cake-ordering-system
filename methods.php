<?php

require_once 'dbConnection.php';

class cake {	
    
    function object() {
        $obj = new database();
        $db = $obj->connect();
        return $db;
    }
    
    function login($username,$pass){
        $sql = $this->object()->prepare("SELECT * FROM user WHERE username=:uname AND password=:pd");
        $sql->execute(array(':uname'=>$username,':pd'=>$pass));
        $user=$sql->fetch(PDO::FETCH_ASSOC);
          if($sql->rowCount() > 0)
          {
             
                $_SESSION['id'] = $user['userID'];
                return true;
             
            
          }

    }

    function addCategory($catName) {
		$sql = $this->object()->prepare("INSERT INTO category(catName )VALUES ('$catName')");
        $sql->execute();     
	}
	
	
	function viewCategory() {
  
        $sql=$this->object()->prepare("SELECT * FROM category");
        $sql->execute();
        return $sql->fetchAll();
    }
            
   
    function deleteCategory($id) {
        $sql = $this->object()->prepare("DELETE  FROM category WHERE catID=:id");
        $sql->execute(array(':id'=>$id));
		   
					
		}
        		
	
	function updateCategory($id,$catName) {
		$sql = $this->object()->prepare("UPDATE category SET catName='$catName' where catID='$id'");
        $sql->execute();		       
        					
        
    }

    function addCake($name,$catID,$price,$quantity,$cakeDesc) {
		$sql = $this->object()->prepare("INSERT INTO cake(name,catID,price,quantity,cakeDesc)VALUES ('$name','$catID','$price','$quantity','$cakeDesc')");
        $sql->execute();     
    }
    
    function viewCake() {
  
        $sql=$this->object()->prepare("SELECT * FROM cake");
        $sql->execute();
        return $sql->fetchAll();
    }

    function deleteCake($id) {
        $sql = $this->object()->prepare("DELETE  FROM cake WHERE cakeID=:id");
        $sql->execute(array(':id'=>$id));
		   
					
		}

    function file_uploaded($IMAGE,$dir_to=""){
        global $errors;
            function getFileExtention($fileName){
                $explode=explode('.',$fileName);        
                $ext = strtolower(array_pop($explode));
                return $ext;        
                
                
            } 
        $upload_errors=array(UPLOAD_ERR_OK => "No errors.",UPLOAD_ERR_INI_SIZE =>"Larger than upload_max_filesize.",UPLOAD_ERR_FORM_SIZE =>"Larger than form MAX_FILE_SIZE.",UPLOAD_ERR_PARTIAL => "Partial upload.",UPLOAD_ERR_NO_FILE =>"No file selected.",UPLOAD_ERR_NO_TMP_DIR =>"No temporary directory.",UPLOAD_ERR_CANT_WRITE =>"Can't write to disk.",UPLOAD_ERR_EXTENSION =>"File upload stopped by extension.");  
        $error = $IMAGE['error'];
        $message = $upload_errors[$error]; 
        $Allowed_mime_types = array('png' => 'image/png','jpeg' => 'image/jpeg','jpg' => 'image/jpeg','gif' => 'image/gif','pdf' => 'application/pdf',
            'docx'=>'application/msword','doc' => 'application/msword','xls' => 'application/vnd.ms-excel','pptx'=>'application/vnd.ms-powerpoint',
            'ppt' => 'application/vnd.ms-powerpoint','xlsx'=> 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'txt'=>'text/plain','csv'=>'application/vnd.ms-excel','zip'=>'application/x-zip-compressed');
                     
        $name=basename($IMAGE["name"]);
        $temp=$IMAGE["tmp_name"];  
    
        if ($message =="No errors."){
            if(!file_exists($dir_to.$name)){
                $ext=getFileExtention($name);     
                if (array_key_exists($ext, $Allowed_mime_types)) {
                    if ($IMAGE["size"]< 50020974){
                        return $IMAGE;
                    }else{
                        $errors[]= "The file size must be less then 50MB";
                    }               
                } else {        
                    $errors[]= "Error: Unsupported file type";
                }
            }else{
                $errors[]="The image {$name}, is allready exist";
            } 
        }else{
            $errors[]=$message;
        }
        
       
    
    }
        
}
