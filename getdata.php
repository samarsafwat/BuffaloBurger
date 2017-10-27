<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'buffaloburger');

$arr = array();
$rs=mysqli_query($con,"SELECT * FROM menu");
while($obj=mysqli_fetch_object($rs))
{
	$arr[] = $obj;
	}
	
	echo '{"data":'.json_encode($arr).'}';


?>