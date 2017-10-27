<?php
  include("db.php");  

	$id =$_REQUEST['id'];
	
	
	// sending query
	mysqli_query($conn,"DELETE FROM reserve WHERE id = '$id'")
	or die(mysqli_error());  	
	
	header("Location: reservecontrol.php");
?> 