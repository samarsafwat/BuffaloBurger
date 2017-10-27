<?php
  include("db.php");  

	$id =$_REQUEST['id'];
	
	
	// sending query
	mysqli_query($conn,"DELETE FROM feedback WHERE id = '$id'")
	or die(mysqli_error());  	
	
	header("Location: feedbackcontrol.php");
?> 