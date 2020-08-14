<?php
include('connection.php');
$user = strip_tags($_POST['user']);
$pass = strip_tags($_POST['pass']);
$role = strip_tags($_POST['role']);



	
	try {
 
  $sql = "INSERT INTO user(username ,password ,role )
  VALUES ('$user','$pass','$role')";
  // use exec() because no results are returned
  $pdo->exec($sql);
   header( 'Location: Login.php' ) ;
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

