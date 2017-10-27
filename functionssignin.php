<?php
session_start();
function loggedin(){
	if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
	{return true;}
	else {return false;}
	
}

 if(loggedin())
{	$my_id =$_SESSION['user_id'];
	$user_query= mysqli_query($con,"SELECT  `Email`, `user_level` FROM `users` WHERE `id`=$my_id")or die("Error: ".mysqli_error($con));
	$run_user= mysqli_fetch_array($user_query);
	$Email=$run_user['Email'];
	$user_level=$run_user['user_level'];
	$query_level=mysqli_query($con,"SELECT `name` FROM `user_type` WHERE `id`=$user_level")or die("Error: ".mysqli_error($con));
	$run_level= mysqli_fetch_array($query_level);
	$level_name=$run_level;
} 


?>