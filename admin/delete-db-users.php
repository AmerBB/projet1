<?php require_once '../dbconfig.php'; 
	
	$q = $db_con->prepare("TRUNCATE TABLE user");
	$q->execute();  

	$files = glob('../upload/*'); // get all file names
	foreach($files as $file){ // iterate files
	  if(is_file($file))
	    unlink($file); // delete file
	}

	header("location:home.php");
?>