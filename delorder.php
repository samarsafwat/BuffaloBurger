<?php
  include("db.php");  

	$id =$_REQUEST['id'];
	
	
	// sending query
	mysqli_query($conn,"DELETE FROM orders WHERE id = '$id'")
	or die(mysqli_error());  	
	
	header("Location: ordercontrol.php");
?> 