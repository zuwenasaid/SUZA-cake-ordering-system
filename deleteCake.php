<?php
        include 'methods.php';
        $obj = new cake();
	   
		$id = $_GET['id'];           
        $obj->deleteCake($id);
		header("location:viewCake.php");
	   
      
    ?> 
