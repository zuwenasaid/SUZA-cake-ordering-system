<?php
        include 'methods.php';
        $obj = new cake();
	   
		$id = $_GET['id'];           
    $obj->deleteCategory($id);
		header("location:registerCategory.php");
	   
      
    ?> 
