<?php
include 'header.php';
?>
<?php include "connect.php"; ?>
<?php include "functionssignin.php"; ?>
<?php include "title_bar.php"; ?>
<?php
require("db.php");
$id =$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM users WHERE id  = '$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$Email=$test['Email'] ;
				$Password= $test['Password'] ;					
				
if(isset($_POST['save']))
{	
	$Email_save = $_POST['Email'];
	$Password_save = $_POST['Password'];

	
	mysqli_query($conn,"UPDATE users SET Email ='$Email_save', Password ='$Password_save'
		  WHERE id = '$id'")
				or die(mysqli_error()); 
	echo "Saved!";
	
	header("Location: registercontrol.php");			
}
mysqli_close($conn);
?>

<html>
<head>

</head>

<body>
<form method="post">
<table>
	<tr>
		<td>Email</td>
		<td><input type="text" name="Email" value="<?php echo $Email ?>"/></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="number" name="Password" value="<?php echo $Password ?>"/></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>

</body>
</html>
 