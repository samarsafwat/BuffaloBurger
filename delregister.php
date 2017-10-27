<?php
  include("db.php");  

	$id =$_REQUEST['id'];
	
	
	// sending query
	mysqli_query($conn,"DELETE FROM users WHERE id = '$id'")
	or die(mysqli_error());  	
	
	header("Location: registercontrol.php");
?> 