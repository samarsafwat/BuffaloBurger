<?php include "header.php";?>
<?php include "connect.php"; ?>
<?php include "functionssignin.php"; ?>
<?php include "title_bar.php"; ?>
<?php
require("db.php");
$id =$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM menu WHERE id  = '$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$SandwichName=$test['SandwichName'] ;
				$Price= $test['Price'] ;					
				
if(isset($_POST['save']))
{	
	$SandwichName_save = $_POST['SandwichName'];
	$Price_save = $_POST['Price'];

	
	mysqli_query($conn,"UPDATE menu SET SandwichName ='$SandwichName_save', Price ='$Price_save'
		  WHERE id = '$id'")
				or die(mysqli_error()); 
	echo "Saved!";
	
	header("Location: menucontrol.php");			
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
		<td>SandwichName</td>
		<td><input type="text" name="SandwichName" value="<?php echo $SandwichName ?>"/></td>
	</tr>
	<tr>
		<td>Price</td>
		<td><input type="number" name="Price" value="<?php echo $Price ?>"/></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>

</body>
</html>
 